/*!
 * Start Bootstrap - SB Admin v7.0.7 (https://startbootstrap.com/template/sb-admin)
 * Copyright 2013-2023 Start Bootstrap
 * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-sb-admin/blob/master/LICENSE)
 */
//
// Scripts
//

window.addEventListener("DOMContentLoaded", (event) => {
  // Toggle the side navigation
  const sidebarToggle = document.body.querySelector("#sidebarToggle");
  if (sidebarToggle) {
    // Uncomment Below to persist sidebar toggle between refreshes
    // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
    //     document.body.classList.toggle('sb-sidenav-toggled');
    // }
    sidebarToggle.addEventListener("click", (event) => {
      event.preventDefault();
      document.body.classList.toggle("sb-sidenav-toggled");
      localStorage.setItem(
        "sb|sidebar-toggle",
        document.body.classList.contains("sb-sidenav-toggled")
      );
    });
  }

  // Approve/Reject Modal Logic
  let selectedRequestId = null;
  let selectedRow = null;
  const approveModalElement = document.getElementById("approveModal");
  const approveModal = approveModalElement
    ? new bootstrap.Modal(approveModalElement)
    : null;
  const successModalElement = document.getElementById("successModal");
  const successModal = successModalElement
    ? new bootstrap.Modal(successModalElement)
    : null;

  // Use event delegation for Approve buttons
  const datatablesElement = document.getElementById("datatablesSimple");
  if (datatablesElement) {
    datatablesElement.addEventListener("click", function (e) {
      if (e.target && e.target.classList.contains("approve-btn")) {
        selectedRequestId = e.target.getAttribute("data-request");
        selectedRow = e.target.closest("tr");
        if (approveModal) approveModal.show();
      }
    });
  }

  const approveRequestBtn = document.getElementById("approveRequestBtn");
  if (approveRequestBtn) {
    approveRequestBtn.addEventListener("click", function () {
      if (approveModal) approveModal.hide();
      if (selectedRow) {
        // Replace the status cell with static 'Approved' text
        const statusCell = selectedRow.cells[4];
        if (statusCell) {
          statusCell.innerHTML =
            '<span class="status-approved">Approved</span>';
        }
        // Update flag color
        const flagIcon = selectedRow.cells[0].querySelector("i");
        if (flagIcon) flagIcon.style.color = "#00b300";
        // Show success modal
        setTimeout(() => {
          if (successModal) successModal.show();
        }, 300);
      }
    });
  }

  const rejectRequestBtn = document.getElementById("rejectRequestBtn");
  if (rejectRequestBtn) {
    rejectRequestBtn.addEventListener("click", function () {
      if (approveModal) approveModal.hide();
      if (selectedRow) {
        // Status is the 5th cell (index 4), flag is the 1st cell (index 0)
        selectedRow.cells[4].textContent = "Rejected";
        const flagIcon = selectedRow.cells[0].querySelector("i");
        if (flagIcon) flagIcon.style.color = "#000";
      }
    });
  }

  // Improved status filter for both dropdown and static status
  function setupStatusFilter() {
    console.log("Setting up status filter...");

    const statusDropdown = document.getElementById("statusSortDropdown");
    const table = document.getElementById("datatablesSimple");

    console.log("Status dropdown found:", !!statusDropdown);
    console.log("Table found:", !!table);

    if (statusDropdown && table) {
      // Remove any existing listeners
      const newDropdown = statusDropdown.cloneNode(true);
      statusDropdown.parentNode.replaceChild(newDropdown, statusDropdown);

      newDropdown.addEventListener("change", function () {
        const selected = this.value;
        const rows = table.querySelectorAll("tbody tr");
        let count = 0;
        rows.forEach(function (row) {
          const statusCell = row.cells[5]; // Status is now at index 5
          let status = "";
          if (statusCell) {
            // Get the text content of the status label
            const statusLabel = statusCell.querySelector('.status-label');
            status = statusLabel ? statusLabel.textContent.trim() : statusCell.textContent.trim();
          }
          if (selected === "all" || status === selected) {
            row.style.display = "";
            count++;
          } else {
            row.style.display = "none";
          }
        });
        console.log(`Filter complete. ${count} rows visible.`);
      });

      // Test the filter immediately
      setTimeout(() => {
        newDropdown.value = "all";
        newDropdown.dispatchEvent(new Event("change"));
      }, 100);

      console.log("Status filter setup complete");
    } else {
      console.log("Required elements not found");
    }
  }

  // Initialize status filter with a small delay to ensure DOM is ready
  setTimeout(setupStatusFilter, 100);

  // Also try to initialize immediately
  setupStatusFilter();

  // Modal logic for Approve/Reject from Actions dropdown
  let actionModalRow = null;
  const actionApproveModalElement =
    document.getElementById("actionApproveModal");
  const actionApproveModal = actionApproveModalElement
    ? new bootstrap.Modal(actionApproveModalElement)
    : null;
  const actionApproveBtn = document.getElementById("actionApproveBtn");
  const actionRejectBtn = document.getElementById("actionRejectBtn");

  if (datatablesElement) {
    datatablesElement.addEventListener("click", function (e) {
      if (e.target && e.target.classList.contains("action-select")) {
        const newStatus = e.target.getAttribute("data-status");
        const row = e.target.closest("tr");
        const statusCell = row ? row.cells[4] : null;
        const actionBtn = row
          ? row.querySelector(".action-status-label")
          : null;
        // Show modal for these statuses
        if (
          ["Processing", "Pick Up", "Pending", "Released"].includes(
            newStatus
          )
        ) {
          e.preventDefault();
          actionStatusModalRow = row;
          actionStatusModalStatus = newStatus;
          if (actionStatusModalStatusSpan)
            actionStatusModalStatusSpan.textContent = newStatus;
          if (actionApproveModal) actionApproveModal.show();
          return;
        }
        // For Approved, show approve modal
        if (newStatus === "Approved") {
          e.preventDefault();
          actionModalRow = row;
          if (actionApproveModal) actionApproveModal.show();
          return;
        }
        // For Cancelled, update immediately
        if (row && statusCell && actionBtn) {
          const statusClass = getStatusClass(newStatus);
          statusCell.innerHTML = `<span class='status-label ${statusClass}'>${newStatus}</span>`;
          actionBtn.textContent = 'Status';
        }
      }
    });
  }

  if (actionApproveBtn) {
    actionApproveBtn.addEventListener("click", function () {
      if (actionApproveModal) actionApproveModal.hide();
      if (actionModalRow) {
        const statusCell = actionModalRow.cells[4];
        const actionBtn = actionModalRow.querySelector(".action-status-label");
        if (statusCell && actionBtn) {
          const statusClass = getStatusClass('Approved');
          statusCell.innerHTML = `<span class='status-label ${statusClass}'>Approved</span>`;
          actionBtn.textContent = 'Status';
        }
        // Show success modal only for approve button in actionApproveModal
        if (successModal) successModal.show();
      }
    });
  }
  if (actionRejectBtn) {
    actionRejectBtn.addEventListener("click", function () {
      if (actionApproveModal) actionApproveModal.hide();
      if (actionModalRow) {
        const statusCell = actionModalRow.cells[4];
        const actionBtn = actionModalRow.querySelector(".action-status-label");
        if (statusCell && actionBtn) {
          const statusClass = getStatusClass('Rejected');
          statusCell.innerHTML = `<span class='status-label ${statusClass}'>Rejected</span>`;
          actionBtn.textContent = 'Status';
        }
      }
    });
  }

  let actionStatusModalRow = null;
  let actionStatusModalStatus = null;
  const actionStatusModalElement = document.getElementById("actionStatusModal");
  const actionStatusModal = actionStatusModalElement
    ? new bootstrap.Modal(actionStatusModalElement)
    : null;
  const actionStatusModalStatusSpan = document.getElementById(
    "actionStatusModalStatus"
  );
  const actionStatusConfirmBtn = document.getElementById(
    "actionStatusConfirmBtn"
  );

  if (actionStatusConfirmBtn) {
    actionStatusConfirmBtn.addEventListener("click", function () {
      if (actionStatusModal) actionStatusModal.hide();
      if (actionStatusModalRow && actionStatusModalStatus) {
        const statusCell = actionStatusModalRow.cells[4];
        const actionBtn = actionStatusModalRow.querySelector(
          ".action-status-label"
        );
        if (statusCell && actionBtn) {
          const statusClass = getStatusClass(actionStatusModalStatus);
          statusCell.innerHTML = `<span class='status-label ${statusClass}'>${actionStatusModalStatus}</span>`;
          actionBtn.textContent = 'Status';
        }
      }
    });
  }

  // Handle select all rows
  const selectAllRows = document.getElementById('selectAllRows');
  if (selectAllRows) {
    selectAllRows.addEventListener('change', function() {
      // Only select visible checkboxes (for paging/filtering)
      const visibleRows = document.querySelectorAll('#datatablesSimple tbody tr');
      visibleRows.forEach(row => {
        const cb = row.querySelector('.row-select');
        if (cb) cb.checked = selectAllRows.checked;
      });
    });
    // Update selectAllRows checked state if any row checkbox is changed
    document.addEventListener('change', function(e) {
      if (e.target.classList.contains('row-select')) {
        const visibleRows = document.querySelectorAll('#datatablesSimple tbody tr');
        const checkboxes = Array.from(visibleRows).map(row => row.querySelector('.row-select')).filter(Boolean);
        const allChecked = checkboxes.length > 0 && checkboxes.every(cb => cb.checked);
        selectAllRows.checked = allChecked;
      }
    });
  }

  // Handle action dropdown for bulk status change
  const tableActionDropdown = document.getElementById('tableActionDropdown');
  if (tableActionDropdown) {
    tableActionDropdown.addEventListener('change', function() {
      const selectedStatus = this.value;
      if (!selectedStatus) return;
      const checkboxes = document.querySelectorAll('.row-select:checked');
      const rows = Array.from(checkboxes).map(cb => cb.closest('tr'));
      if (rows.length === 0) {
        // No rows selected, reset dropdown
        this.value = '';
        return;
      }
      // Show confirmation modal
      pendingBulkStatus = selectedStatus;
      pendingBulkRows = rows;
      if (bulkActionStatusSpan) bulkActionStatusSpan.textContent = selectedStatus;
      if (bulkActionModal) bulkActionModal.show();
      // Reset dropdown after showing modal
      this.value = '';
    });
  }

  // Bulk action modal logic
  const bulkActionModalElement = document.getElementById('bulkActionModal');
  const bulkActionModal = bulkActionModalElement ? new bootstrap.Modal(bulkActionModalElement) : null;
  const bulkActionStatusSpan = document.getElementById('bulkActionStatus');
  const confirmBulkActionBtn = document.getElementById('confirmBulkActionBtn');
  const bulkSuccessModalElement = document.getElementById('bulkSuccessModal');
  const bulkSuccessModal = bulkSuccessModalElement ? new bootstrap.Modal(bulkSuccessModalElement) : null;
  let pendingBulkStatus = null;
  let pendingBulkRows = [];

  if (confirmBulkActionBtn) {
    confirmBulkActionBtn.addEventListener('click', function () {
      if (bulkActionModal) bulkActionModal.hide();
      if (pendingBulkRows && pendingBulkStatus) {
        pendingBulkRows.forEach(row => {
          const statusCell = row.cells[5];
          if (statusCell) {
            const statusClass = getStatusClass(pendingBulkStatus);
            statusCell.innerHTML = `<span class='status-label ${statusClass}'>${pendingBulkStatus}</span>`;
          }
        });
        if (bulkSuccessModal) bulkSuccessModal.show();
      }
      pendingBulkRows = [];
      pendingBulkStatus = null;
    });
  }
});

function getStatusClass(status) {
  switch (status) {
    case 'Approved': return 'status-approved';
    case 'Cancelled': return 'status-cancelled';
    case 'Rejected': return 'status-rejected';
    case 'Processing': return 'status-processing';
    case 'Pick Up': return 'status-ready';
    case 'Released': return 'status-released';
    case 'Pending': return 'status-pending';
    default: return '';
  }
}

// Helper to (re)bind select all logic after table redraw
function bindSelectAllLogic() {
  const selectAllRows = document.getElementById('selectAllRows');
  if (!selectAllRows) return;

  // Remove previous event listeners to avoid stacking
  const newSelectAll = selectAllRows.cloneNode(true);
  selectAllRows.parentNode.replaceChild(newSelectAll, selectAllRows);

  // Select/deselect all visible checkboxes
  newSelectAll.addEventListener('change', function() {
    const visibleCheckboxes = document.querySelectorAll('#datatablesSimple tbody .row-select');
    visibleCheckboxes.forEach(cb => { cb.checked = newSelectAll.checked; });
  });

  // Event delegation for row checkboxes
  document.querySelector('#datatablesSimple tbody').addEventListener('change', function(e) {
    if (e.target.classList.contains('row-select')) {
      const visibleCheckboxes = document.querySelectorAll('#datatablesSimple tbody .row-select');
      const allChecked = Array.from(visibleCheckboxes).length > 0 && Array.from(visibleCheckboxes).every(cb => cb.checked);
      newSelectAll.checked = allChecked;
    }
  });
}

// Initial bind
bindSelectAllLogic();

// Rebind after table redraws (Simple-DataTables events)
if (window.simpleDatatables && window.simpleDatatables.DataTable) {
  const datatablesSimple = document.getElementById('datatablesSimple');
  if (datatablesSimple && datatablesSimple.dataTable) {
    datatablesSimple.dataTable.on('datatable.page', bindSelectAllLogic);
    datatablesSimple.dataTable.on('datatable.search', bindSelectAllLogic);
    datatablesSimple.dataTable.on('datatable.sort', bindSelectAllLogic);
  }
}
