
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <!-- GROUP 9 -->
                            <a class="nav-link" href="index.php?m=dashboard">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <!-- Admin Section -->
                            <div class="sb-sidenav-menu-heading">System Admin</div>
                            <!-- GROUP 1 -->
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                User Management
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="index.php?m=users&s=cs_list">Church Staff</a>
                                    <a class="nav-link" href="index.php?m=users&s=cm_list">Church Member</a>
                                </nav>
                            </div>
                            <!-- GROUP 1 -->
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                System Settings
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="index.php?m=users&s=permission">User Permissions</a>
                                    <a class="nav-link" href="index.php?m=users&s=roles">User Roles</a>
                                </nav>
                            </div>
                            <!-- Church Staff Section -->
                            <div class="sb-sidenav-menu-heading">Church Staff</div>
                            <!-- GROUP 3 -->
                            <a class="nav-link" href="index.php?m=baptismal&s=list">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Baptismal Records
                            </a>
                             <!-- GROUP 4 -->
                             <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseCertRequests" aria-expanded="false" aria-controls="collapseCertRequests">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Certificate Requests
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseCertRequests" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="index.php?m=baptismal&s=rl">Request List</a>
                                    <a class="nav-link" href="index.php?m=baptismal&s=vp">View & Print</a>
                                </nav>
                            </div>
                            <!-- GROUP 5 -->
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Reports & Logs
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="index.php?m=reports&s=baptismal&action=generate">Generate Report</a>
                                    <a class="nav-link" href="index.php?m=logs&s=baptismal&action=generate">Issued Certificate Logs</a>
                                </nav>
                            </div>
                            <!-- Church Member Section -->
                            <!-- GROUP 11 -->
                            <div class="sb-sidenav-menu-heading">Church Member</div>
                            <a class="nav-link" href="index.php?m=certificate&s=request">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Request Certificate
                            </a>
                            <!-- GROUP 9 -->
                            <a class="nav-link" href="index.php?m=certificate&s=track">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Track Request
                            </a>

                        </div>
                        
                    </div>
                     <div class="sb-sidenav-footer text-center">
                        <button class="btn btn-sm text-white" data-bs-toggle="modal" data-bs-target="#logoutModal">
                            <i class="fas fa-sign-out-alt"></i>  <span style="font-family: 'Poppins', sans-serif;">Logout</span>
                        </button>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    