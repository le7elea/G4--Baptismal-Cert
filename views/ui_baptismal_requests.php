<?php require_once "views/header.php"; ?>
<link href="views/css/styles_baptismal_request.css" rel="stylesheet" />
                    <main>
                    <div class="container-fluid px-4 certificates-main-container">
            <h2 class="certificates-title">Certificates Request</h2>
            <div
              class="d-flex justify-content-between align-items-center mb-2 certificates-sort-row"
            >
              <div class="d-flex align-items-center">
              <label for="statusSortDropdown" class="certificates-sort-label"
                >Sort by Status:</label
              >
              <select
                id="statusSortDropdown"
                class="form-select certificates-sort-dropdown"
              >
                <option value="all">All</option>
                <option value="Pending">Pending</option>
                <option value="Approved">Approved</option>
                <option value="Cancelled">Cancelled</option>
                <option value="Ready for Pick Up">Ready for Pick Up</option>
                <option value="Released">Released</option>
                <option value="Processing">Processing</option>
                <option value="Rejected">Rejected</option>
              </select>
              <label style="margin-left: 24px; font-weight: 500; cursor: pointer;">
                <input type="checkbox" id="selectAllRows" style="margin-right: 6px; vertical-align: middle;" />Select All
              </label>
              </div>
              <div class="d-flex align-items-center">
                <label for="tableActionDropdown" class="me-2"
                  >Action:</label
                >
                <select
                  id="tableActionDropdown"
                  class="form-select certificates-sort-dropdown"
                >
                  <option value=""> Status</option>
                  <option value="Pending">Pending</option>
                  <option value="Approved">Approved</option>
                  <option value="Cancelled">Cancelled</option>
                  <option value="Pick Up">Pick Up</option>
                  <option value="Released">Released</option>
                  <option value="Processing">Processing</option>
                  <option value="Rejected">Rejected</option>
                </select>
              </div>
            </div>
            <div class="card mb-4 certificates-card">
              <div class="certificates-card-bar"></div>
              <div class="card-body">
                <table id="datatablesSimple">
                  <thead>
                    <tr>
                      <th></th>
                      <th></th>
                      <th>Request ID</th>
                      <th>Child's Name</th>
                      <th>Requested By</th>
                      <th>Status</th>
                      <th>Date Required</th>
                      <th>Date Requested</th>
                      <th>Date Approved</th>
                      <th>Generated By</th>
                      <th>Approved/Rejected By</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><input type="checkbox" class="row-select"></td>
                      <td>
                        <i class="fa-solid fa-flag" style="color: #00b300"></i>
                      </td>
                      <td>REQ-001</td>
                      <td>John Doe</td>
                      <td>Mary Smith</td>
                      <td>
                        <span class="status-label status-pending">Pending</span>
                      </td>
                      <td>2024-06-10</td>
                      <td>2024-06-01</td>
                      <td>2024-06-11</td>
                      <td>Church Staff</td>
                      <td>Church Staff</td>
                    </tr>
                    <tr>
                      <td><input type="checkbox" class="row-select"></td>
                      <td>
                        <i class="fa-solid fa-flag" style="color: #00b300"></i>
                      </td>
                      <td>REQ-002</td>
                      <td>Jane Smith</td>
                      <td>Paul Brown</td>
                      <td>
                        <span class="status-label status-approved">Approved</span>
                      </td>
                      <td>2024-06-12</td>
                      <td>2024-06-02</td>
                      <td>2024-06-03</td>
                      <td>Church Staff</td>
                      <td>Church Staff</td>
                    </tr>
                    <tr>
                      <td><input type="checkbox" class="row-select"></td>
                      <td>
                        <i class="fa-solid fa-flag" style="color: #00b300"></i>
                      </td>
                      <td>REQ-003</td>
                      <td>Michael Lee</td>
                      <td>Sarah White</td>
                      <td>
                        <span class="status-label status-rejected">Rejected</span>
                      </td>
                      <td>2024-06-15</td>
                      <td>2024-06-03</td>
                      <td>2024-06-04</td>
                      <td>Church Staff</td>
                      <td>Church Staff</td>
                    </tr>
                    <tr>
                      <td><input type="checkbox" class="row-select"></td>
                      <td>
                        <i class="fa-solid fa-flag" style="color: #00b300"></i>
                      </td>
                      <td>REQ-004</td>
                      <td>Emily Clark</td>
                      <td>David Green</td>
                      <td>
                        <span class="status-label status-processing">Processing</span>
                      </td>
                      <td>2024-06-18</td>
                      <td>2024-06-04</td>
                      <td>2024-06-04</td>
                      <td>Church Staff</td>
                      <td>Church Staff</td>
                    </tr>
                    <tr>
                      <td><input type="checkbox" class="row-select"></td>
                      <td>
                        <i class="fa-solid fa-flag" style="color: #00b300"></i>
                      </td>
                      <td>REQ-005</td>
                      <td>Olivia Brown</td>
                      <td>James Black</td>
                      <td>
                        <span class="status-label status-cancelled">Cancelled</span>
                      </td>
                      <td>2024-06-20</td>
                      <td>2024-06-05</td>
                      <td>2024-06-04</td>
                      <td>Church Staff</td>
                      <td>Church Staff</td>
                    </tr>
                    <tr>
                      <td><input type="checkbox" class="row-select"></td>
                      <td>
                        <i class="fa-solid fa-flag" style="color: #00b300"></i>
                      </td>
                      <td>REQ-006</td>
                      <td>Lucas White</td>
                      <td>Emma Blue</td>
                      <td>
                        <span class="status-label status-released">Released</span>
                      </td>
                      <td>2024-06-22</td>
                      <td>2024-06-06</td>
                      <td>2024-06-04</td>
                      <td>Church Staff</td>
                      <td>Church Staff</td>
                    </tr>
                    <tr>
                      <td><input type="checkbox" class="row-select"></td>
                      <td>
                        <i class="fa-solid fa-flag" style="color: #00b300"></i>
                      </td>
                      <td>REQ-007</td>
                      <td>Sophia King</td>
                      <td>Chris Red</td>
                      <td>
                        <span class="status-label status-ready">Pick Up</span>
                      </td>
                      <td>2024-06-25</td>
                      <td>2024-06-07</td>
                      <td>2024-06-04</td>
                      <td>Church Staff</td>
                      <td>Church Staff</td>
                    </tr>
                    <tr>
                      <td><input type="checkbox" class="row-select"></td>
                      <td>
                        <i class="fa-solid fa-flag" style="color: #00b300"></i>
                      </td>
                      <td>REQ-008</td>
                      <td>William Black</td>
                      <td>Linda Pink</td>
                      <td>
                        <span class="status-label status-approved">Approved</span>
                      </td>
                      <td>2024-06-28</td>
                      <td>2024-06-08</td>
                      <td>2024-06-04</td>
                      <td>Church Staff</td>
                      <td>Church Staff</td>
                    </tr>
                    <tr>
                      <td><input type="checkbox" class="row-select"></td>
                      <td>
                        <i class="fa-solid fa-flag" style="color: #00b300"></i>
                      </td>
                      <td>REQ-009</td>
                      <td>Charlotte Grey</td>
                      <td>Brian Orange</td>
                      <td>
                        <span class="status-label status-approved">Approved</span>
                      </td>
                      <td>2024-06-30</td>
                      <td>2024-06-09</td>
                      <td>2024-06-04</td>
                      <td>Church Staff</td>
                      <td>Church Staff</td>
                    </tr>
                    <tr>
                      <td><input type="checkbox" class="row-select"></td>
                      <td>
                        <i class="fa-solid fa-flag" style="color: #00b300"></i>
                      </td>
                      <td>REQ-010</td>
                      <td>Amelia Violet</td>
                      <td>George Yellow</td>
                      <td>
                        <span class="status-label status-approved">Approved</span>
                      </td>
                      <td>2024-07-02</td>
                      <td>2024-06-10</td>
                      <td>2024-06-04</td>
                      <td>Church Staff</td>
                      <td>Church Staff</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

<?php require_once "views/footer.php"; ?>
    <!-- Approve/Reject Modal -->
    <div
      class="modal fade"
      id="approveModal"
      tabindex="-1"
      aria-labelledby="approveModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="approveModalLabel">Confirm Action</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
              title="Close"
            ></button>
          </div>
          <div class="modal-body">
            <p>Do you want to approve or reject this request?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn-reject" id="rejectRequestBtn">
              Reject
            </button>
            <button type="button" class="btn-approve" id="approveRequestBtn">
              Approve
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Success Modal -->
    <div
      class="modal fade"
      id="successModal"
      tabindex="-1"
      aria-labelledby="successModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-body text-center p-4">
            <div class="success-icon mb-3">
              <i
                class="fas fa-check-circle text-success"
                style="font-size: 3rem"
              ></i>
            </div>
            <h5 class="modal-title mb-3" id="successModalLabel">
              Request Approved Successfully!
            </h5>
            <p class="text-muted mb-4">
              The certificate request has been approved and is now ready for
              processing.
            </p>
            <button
              type="button"
              class="btn btn-success"
              data-bs-dismiss="modal"
            >
              Close
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- Approve/Reject Modal for Actions Dropdown -->
    <div
      class="modal fade"
      id="actionApproveModal"
      tabindex="-1"
      aria-labelledby="actionApproveModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="actionApproveModalLabel">
              Confirm Approval
            </h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <p>Are you sure you want to approve this request?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" id="actionRejectBtn">
              Reject
            </button>
            <button type="button" class="btn btn-success" id="actionApproveBtn">
              Approve
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- Universal Status Change Modal for Actions Dropdown -->
    <div
      class="modal fade"
      id="actionStatusModal"
      tabindex="-1"
      aria-labelledby="actionStatusModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="actionStatusModalLabel">
              Confirm Status Change
            </h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <p>
              Are you sure you want to change the status to
              <span id="actionStatusModalStatus"></span>?
            </p>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              Cancel
            </button>
            <button
              type="button"
              class="btn btn-primary"
              id="actionStatusConfirmBtn"
            >
              Confirm
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- Bulk Action Confirmation Modal -->
    <div class="modal fade" id="bulkActionModal" tabindex="-1" aria-labelledby="bulkActionModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bulk-modal-content">
          <div class="modal-header bulk-modal-header">
            <div class="d-flex align-items-center w-100">
              <div class="me-3">
                <i class="fas fa-exclamation-triangle bulk-modal-warning-icon"></i>
              </div>
              <h5 class="modal-title flex-grow-1 bulk-modal-title" id="bulkActionModalLabel">Confirm Status Change</h5>
              <button type="button" class="btn-close ms-2" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
          </div>
          <div class="modal-body bulk-modal-body">
            <div class="mb-3">
              <i class="fas fa-question-circle bulk-modal-question-icon"></i>
            </div>
            <p class="bulk-modal-body-text">Are you sure you want to change the status of the selected rows to <span id="bulkActionStatus" class="bulk-modal-status"></span>?</p>
          </div>
          <div class="modal-footer bulk-modal-footer">
            <button type="button" class="btn btn-outline-secondary px-4 py-2 me-2 bulk-modal-cancel" data-bs-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-warning px-4 py-2 bulk-modal-confirm" id="confirmBulkActionBtn">Confirm</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Bulk Action Success Modal -->
    <div class="modal fade" id="bulkSuccessModal" tabindex="-1" aria-labelledby="bulkSuccessModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bulk-success-modal-content">
          <div class="modal-body bulk-success-modal-body">
            <div class="success-icon mb-3 bulk-success-icon">
              <i class="fas fa-check-circle"></i>
            </div>
            <h5 class="modal-title mb-3 bulk-success-title" id="bulkSuccessModalLabel">Status Updated Successfully!</h5>
            <p class="text-muted mb-4" style="font-size: 1.1rem;">The status of the selected rows has been updated.</p>
            <button type="button" class="btn btn-success px-4 py-2 bulk-success-ok" data-bs-dismiss="modal">OK</button>
          </div>
        </div>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      crossorigin="anonymous"
    ></script>
    <script src="js/scripts.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
      crossorigin="anonymous"
    ></script>
    <script src="js/datatables-simple-demo.js"></script>
    <script>
      // Call the improved status filter from scripts.js
      if (typeof setupStatusFilter === "function") {
        setupStatusFilter();
      }
    </script>