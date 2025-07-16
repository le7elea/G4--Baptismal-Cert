<?php require_once "views/header.php"; ?>

                   <div class="container mt-4">
                        <div class="col-md-2 offset-md-1 ss-card table-container">
                            <h1 class="text-rg">CHURCH STAFF</h1>
                            <div class="header">
                                <div class="d-flex justify-content-end mb-3">
                                    <button class="btn btn-lightb btn-sm" data-bs-toggle="modal" data-bs-target="#addStaffModal"  style="font-family: 'Segoe UI bold', sans-serif;">
                                        <i class="fas fa-plus"></i> Add Staff
                                    </button>
                                </div>
                                <div class="sb-sidenav-menu-heading"></div>
                            </div>
                            <div class="ss-card bg8">
                                <table id="datatablesSimple"  class="table table-bordered bg7" style="border: 2px solid #B4812C; border-collapse: collapse;">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Full Name</th>
                                            <th>Email</th>
                                            <th>Permissions</th>
                                            <th>Role</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Full Name</th>
                                            <th>Email</th>
                                            <th>Permissions</th>
                                            <th>Role</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </tfoot>
                                    <tbody style="font-family: 'Segoe UI', sans-serif;">
                                        <tr>
                                            <td>1</td>
                                            <td>Amihan Lontac</td>
                                            <td>amihan.lontac@example.ph</td>
                                            <td>val_reqst, generate_cert</td>
                                            <td>Staff</td>
                                            <td><span class="badge badge-active">Active</span></td>
                                            <td class="actions">
                                                <button class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#editStaffModal">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                                <button class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#deactivateStaffModal">
                                                    <i class="fas fa-user-minus"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Ash Shane</td>
                                            <td>ash.shane@example.ph</td>
                                            <td>track_reqst_stat</td>
                                            <td>Staff</td>
                                            <td><span class="badge badge-active">Active</span></td>
                                            <td class="actions">
                                                <button class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#editStaffModal">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                                <button class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#deactivateStaffModal">
                                                    <i class="fas fa-user-minus"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>John Doe</td>
                                            <td>john.doe@example.ph</td>
                                            <td>track_reqst_stat</td>
                                            <td>Staff</td>
                                            <td><span class="badge badge-active">Active</span></td>
                                            <td class="actions">
                                                <button class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#editStaffModal">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                                <button class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#deactivateStaffModal">
                                                    <i class="fas fa-user-minus"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Jane Smith</td>
                                            <td>jane.smith@example.ph</td>
                                            <td>track_reqst_stat</td>
                                            <td>Staff</td>
                                            <td><span class="badge badge-active">Active</span></td>
                                            <td class="actions">
                                                <button class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#editStaffModal">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                                <button class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#deactivateStaffModal">
                                                    <i class="fas fa-user-minus"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Mary Johnson</td>
                                            <td>mary.johnson@example.ph</td>
                                            <td>track_reqst_stat</td>
                                            <td>Staff</td>
                                            <td><span class="badge badge-active">Active</span></td>
                                            <td class="actions">
                                                <button class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#editStaffModal">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                                <button class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#deactivateStaffModal">
                                                    <i class="fas fa-user-minus"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>James Brown</td>
                                            <td>james.brown@example.ph</td>
                                            <td>track_reqst_stat</td>
                                            <td>Staff</td>
                                            <td><span class="badge badge-active">Active</span></td>
                                            <td class="actions">
                                                <button class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#editStaffModal">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                                <button class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#deactivateStaffModal">
                                                    <i class="fas fa-user-minus"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

<?php require_once "views/footer.php"; ?>