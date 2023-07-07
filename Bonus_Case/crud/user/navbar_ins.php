<header class="topbar" data-navbarbg="skin5">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header" data-logobg="skin5">

            <a class="navbar-brand" href="#">
                <!-- Logo icon -->
                <b class="logo-icon ps-2">

                </b>

                <b class="logo-text">
                    
                    <p style="font-size: 13px; margin-top:17px;">eCampuz</p>
                </b>

            </a>

            <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
        </div>

        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">

            <ul class="navbar-nav float-start me-auto">
                <li class="nav-item d-none d-lg-block">
                    <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a>
                </li>

                <li hidden class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="d-none d-md-block">Create New <i class="fa fa-angle-down"></i></span>
                        <span class="d-block d-md-none"><i class="fa fa-plus"></i></span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </li>
                    </ul>
                </li>

                <li hidden class="nav-item search-box">
                    <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-magnify fs-4"></i></a>
                    <form class="app-search position-absolute">
                        <input type="text" class="form-control" placeholder="Search &amp; enter" />
                        <a class="srh-btn"><i class="mdi mdi-window-close"></i></a>
                    </form>
                </li>
            </ul>

            <ul class="navbar-nav float-end">



                <li class="nav-item dropdown">
                    <a class="
                    nav-link
                    dropdown-toggle
                    text-muted
                    waves-effect waves-dark
                    pro-pic
                  " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="../assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31" />
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                        <a hidden class="dropdown-item" href="javascript:void(0)"><i class="mdi mdi-account me-1 ms-1"></i> My Profile</a>
                        <a hidden class="dropdown-item" href="javascript:void(0)"><i class="mdi mdi-wallet me-1 ms-1"></i> My Balance</a>
                        <a hidden class="dropdown-item" href="javascript:void(0)"><i class="mdi mdi-email me-1 ms-1"></i> Inbox</a>
                        <div hidden class="dropdown-divider"></div>
                        <a hidden class="dropdown-item" href="javascript:void(0)"><i class="mdi mdi-settings me-1 ms-1"></i> Account
                            Setting</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../logout.php"><i class="fa fa-power-off me-1 ms-1"></i> Logout</a>
                        <div class="dropdown-divider"></div>
                        <div hidden class="ps-4 p-10">
                            <a href="javascript:void(0)" class="btn btn-sm btn-success btn-rounded text-white">View Profile</a>
                        </div>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" id="2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <b><?php echo $_SESSION['namalengkap']; ?></b>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</header>