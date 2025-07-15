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
          const statusCell = row.cells[4];
          let status = "";
          // Check for dropdown first
          const statusSelect = statusCell
            ? statusCell.querySelector(".status-dropdown")
            : null;
          if (statusSelect) {
            status = statusSelect.value;
          } else if (statusCell) {
            // Fallback: get the text content (for static Approved, etc.)
            status = statusCell.textContent.trim();
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
          ["Processing", "Ready for Pick Up", "Pending", "Released"].includes(
            newStatus
          )
        ) {
          e.preventDefault();
          statusChangeModalRow = row;
          statusChangeModalStatus = newStatus;
          if (statusChangeModalStatusSpan)
            statusChangeModalStatusSpan.textContent = newStatus;
          if (statusChangeModal) statusChangeModal.show();
          return;
        }
        // Existing logic for Approved
        if (newStatus === "Approved") {
          e.preventDefault();
          actionModalRow = row;
          if (actionApproveModal) actionApproveModal.show();
          return;
        }
        // For Cancelled and others, update immediately
        if (row && statusCell && actionBtn) {
          statusCell.innerHTML = `<span class='status-label'>${newStatus}</span>`;
          actionBtn.textContent = newStatus;
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
          statusCell.innerHTML = `<span class='status-label'>Approved</span>`;
          actionBtn.textContent = "Approved";
        }
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
          statusCell.innerHTML = `<span class='status-label'>Cancelled</span>`;
          actionBtn.textContent = "Cancelled";
        }
      }
    });
  }

  let statusChangeModalRow = null;
  let statusChangeModalStatus = null;
  const statusChangeModalElement = document.getElementById("statusChangeModal");
  const statusChangeModal = statusChangeModalElement
    ? new bootstrap.Modal(statusChangeModalElement)
    : null;
  const statusChangeModalStatusSpan = document.getElementById(
    "statusChangeModalStatus"
  );
  const statusChangeConfirmBtn = document.getElementById(
    "statusChangeConfirmBtn"
  );

  if (statusChangeConfirmBtn) {
    statusChangeConfirmBtn.addEventListener("click", function () {
      if (statusChangeModal) statusChangeModal.hide();
      if (statusChangeModalRow && statusChangeModalStatus) {
        const statusCell = statusChangeModalRow.cells[4];
        const actionBtn = statusChangeModalRow.querySelector(
          ".action-status-label"
        );
        if (statusCell && actionBtn) {
          statusCell.innerHTML = `<span class='status-label'>${statusChangeModalStatus}</span>`;
          actionBtn.textContent = statusChangeModalStatus;
        }
      }
    });
  }
});
