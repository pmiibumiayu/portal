<?= $this->extend($config->viewLayout['main']) ?>
<?= $this->section('main') ?>

<header class="app-header fixed-top">
    <div class="app-header-inner">
        <div class="container-fluid py-2">
            <div class="app-header-content">
                <div class="row justify-content-between align-items-center">

                    <div class="col-auto">
                        <a id="sidepanel-toggler" class="sidepanel-toggler d-inline-block d-xl-none" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                role="img">
                                <title>Menu</title>
                                <path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10"
                                    stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path>
                            </svg>
                        </a>
                    </div>

                    <div class="app-utilities col-auto">
                        <div class="app-utility-item app-notifications-dropdown dropdown">
                            <a class="dropdown-toggle no-toggle-arrow" id="notifications-dropdown-toggle"
                                data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"
                                title="Notifications">
                                <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bell icon"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2z" />
                                    <path fill-rule="evenodd"
                                        d="M8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
                                </svg>
                                <span class="icon-badge">3</span>
                            </a>
                            <!--//dropdown-toggle-->

                            <div class="dropdown-menu p-0" aria-labelledby="notifications-dropdown-toggle">
                                <div class="dropdown-menu-header p-3">
                                    <h5 class="dropdown-menu-title mb-0">Notifications</h5>
                                </div>
                                <!--//dropdown-menu-title-->
                                <div class="dropdown-menu-content">
                                    <!--//item-->
                                    <div class="item p-3">
                                        <div class="row gx-2 justify-content-between align-items-center">
                                            <div class="col-auto">
                                                <div class="app-icon-holder">
                                                    <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                        class="bi bi-receipt" fill="currentColor"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z" />
                                                        <path fill-rule="evenodd"
                                                            d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <!--//col-->
                                            <div class="col">
                                                <div class="info">
                                                    <div class="desc">You have a new invoice. Proin venenatis
                                                        interdum est.</div>
                                                    <div class="meta"> 1 day ago</div>
                                                </div>
                                            </div>
                                            <!--//col-->
                                        </div>
                                        <!--//row-->
                                        <a class="link-mask" href="notifications.html"></a>
                                    </div>
                                    <div class="item p-3">
                                        <div class="row gx-2 justify-content-between align-items-center">
                                            <div class="col-auto">
                                                <div class="app-icon-holder">
                                                    <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                        class="bi bi-receipt" fill="currentColor"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z" />
                                                        <path fill-rule="evenodd"
                                                            d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <!--//col-->
                                            <div class="col">
                                                <div class="info">
                                                    <div class="desc">You have a new invoice. Proin venenatis
                                                        interdum est.</div>
                                                    <div class="meta"> 1 day ago</div>
                                                </div>
                                            </div>
                                            <!--//col-->
                                        </div>
                                        <!--//row-->
                                        <a class="link-mask" href="notifications.html"></a>
                                    </div>
                                    <div class="item p-3">
                                        <div class="row gx-2 justify-content-between align-items-center">
                                            <div class="col-auto">
                                                <div class="app-icon-holder">
                                                    <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                        class="bi bi-receipt" fill="currentColor"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z" />
                                                        <path fill-rule="evenodd"
                                                            d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <!--//col-->
                                            <div class="col">
                                                <div class="info">
                                                    <div class="desc">You have a new invoice. Proin venenatis
                                                        interdum est.</div>
                                                    <div class="meta"> 1 day ago</div>
                                                </div>
                                            </div>
                                            <!--//col-->
                                        </div>
                                        <!--//row-->
                                        <a class="link-mask" href="notifications.html"></a>
                                    </div>
                                </div>
                                <!--//dropdown-menu-content-->

                                <div class="dropdown-menu-footer p-2 text-center">
                                    <a href="notifications.html">View all</a>
                                </div>

                            </div>
                            <!--//dropdown-menu-->
                        </div>

                        <div class="app-utility-item app-user-dropdown dropdown">
                            <a class="dropdown-toggle" id="user-dropdown-toggle" data-bs-toggle="dropdown" href="#"
                                role="button" aria-expanded="false"><img
                                    src="<?= base_url('data/user/photo') ?>/Laki-laki.png" alt="user profile"></a>
                            <ul class="dropdown-menu" aria-labelledby="user-dropdown-toggle">
                                <li><a class="dropdown-item" href="account.html">Account</a></li>
                                <li><a class="dropdown-item" href="settings.html">Settings</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="login.html">Log Out</a></li>
                            </ul>
                        </div>
                        <!--//app-user-dropdown-->
                    </div>
                    <!--//app-utilities-->
                </div>
                <!--//row-->
            </div>
            <!--//app-header-content-->
        </div>
        <!--//container-fluid-->
    </div>
    <!--//app-header-inner-->
    <div id="app-sidepanel" class="app-sidepanel">
        <div id="sidepanel-drop" class="sidepanel-drop"></div>
        <div class="sidepanel-inner d-flex flex-column">
            <a href="#" id="sidepanel-close" class="sidepanel-close d-xl-none">&times;</a>
            <div class="app-branding">
                <a class="app-logo" href="<?= route_to('dashboard') ?>"><img height="32"
                        src="<?= base_url('img') ?>/Logo.png" alt="logo"><span class="logo-text"> PORTAL</span></a>

            </div>
            <!--//app-branding-->

            <nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
                <ul class="app-menu list-unstyled accordion" id="menu-accordion">
                    <li class="nav-item">
                        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                        <a class="nav-link active" href="index.html">
                            <span class="nav-icon">
                                <i class="bi bi-house-door"></i>
                            </span>
                            <span class="nav-link-text">Dashboard</span>
                        </a>
                        <!--//nav-link-->
                    </li>
                    <!--//nav-item-->
                    <li class="nav-item has-submenu">
                        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                        <a class="nav-link submenu-toggle" href="#" data-bs-toggle="collapse"
                            data-bs-target="#submenu-1" aria-expanded="false" aria-controls="submenu-1">
                            <span class="nav-icon">
                                <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-files"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M4 2h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4z" />
                                    <path
                                        d="M6 0h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H6a1 1 0 0 0-1 1H4a2 2 0 0 1 2-2z" />
                                </svg>
                            </span>
                            <span class="nav-link-text">Pages</span>
                            <span class="submenu-arrow">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                                </svg>
                            </span>
                            <!--//submenu-arrow-->
                        </a>
                        <!--//nav-link-->
                        <div id="submenu-1" class="collapse submenu submenu-1" data-bs-parent="#menu-accordion">
                            <ul class="submenu-list list-unstyled">
                                <li class="submenu-item"><a class="submenu-link"
                                        href="notifications.html">Notifications</a></li>
                                <li class="submenu-item"><a class="submenu-link" href="account.html">Account</a>
                                </li>
                                <li class="submenu-item"><a class="submenu-link" href="settings.html">Settings</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!--//nav-item-->
                </ul>
                <!--//app-menu-->
            </nav>
            <!--//app-nav-->
            <div class="app-sidepanel-footer">
                <nav class="app-nav app-nav-footer">
                    <ul class="app-menu footer-menu list-unstyled">
                        <li class="nav-item">
                            <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                            <a class="nav-link" href="settings.html">
                                <span class="nav-icon">
                                    <i class="bi bi-person-lines-fill"></i>
                                </span>
                                <span class="nav-link-text">Profile</span>
                            </a>
                            <!--//nav-link-->
                        </li>
                        <!--//nav-item-->
                        <li class="nav-item">
                            <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                            <a class="nav-link" href="<?= route_to('logout') ?>">
                                <span class="nav-icon">
                                    <i class="bi bi-box-arrow-left"></i>
                                </span>
                                <span class="nav-link-text">Logout</span>
                            </a>
                            <!--//nav-link-->
                        </li>
                        <!--//nav-item-->
                    </ul>
                    <!--//footer-menu-->
                </nav>
            </div>
            <!--//app-sidepanel-footer-->

        </div>
        <!--//sidepanel-inner-->
    </div>
    <!--//app-sidepanel-->
</header>
<!--//app-header-->

<div class="app-wrapper">

    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">

            <h1 class="app-page-title">Overview</h1>

            <div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
                <div class="inner">
                    <div class="app-card-body p-3 p-lg-4">
                        <h3 class="mb-3">Welcome, developer!</h3>
                        <div class="row gx-5 gy-3">
                            <div class="col-12 col-lg-9">

                                <div>Portal is a free Bootstrap 5 admin dashboard template. The design is simple,
                                    clean and modular so it's a great base for building any modern web app.</div>
                            </div>
                            <!--//col-->
                            <div class="col-12 col-lg-3">
                                <a class="btn app-btn-primary"
                                    href="https://themes.3rdwavemedia.com/bootstrap-templates/admin-dashboard/portal-free-bootstrap-admin-dashboard-template-for-developers/"><svg
                                        width="1em" height="1em" viewBox="0 0 16 16"
                                        class="bi bi-file-earmark-arrow-down me-2" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M4 0h5.5v1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h1V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z" />
                                        <path d="M9.5 3V0L14 4.5h-3A1.5 1.5 0 0 1 9.5 3z" />
                                        <path fill-rule="evenodd"
                                            d="M8 6a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 10.293V6.5A.5.5 0 0 1 8 6z" />
                                    </svg>Free Download</a>
                            </div>
                            <!--//col-->
                        </div>
                        <!--//row-->
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <!--//app-card-body-->

                </div>
                <!--//inner-->
            </div>
            <!--//app-card-->

            <div class="row g-4 mb-4">
                <div class="col-6 col-lg-3">
                    <div class="app-card app-card-stat shadow-sm h-100">
                        <div class="app-card-body p-3 p-lg-4">
                            <h4 class="stats-type mb-1">Total Sales</h4>
                            <div class="stats-figure">$12,628</div>
                            <div class="stats-meta text-success">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-up"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z" />
                                </svg> 20%
                            </div>
                        </div>
                        <!--//app-card-body-->
                        <a class="app-card-link-mask" href="#"></a>
                    </div>
                    <!--//app-card-->
                </div>
                <!--//col-->

                <div class="col-6 col-lg-3">
                    <div class="app-card app-card-stat shadow-sm h-100">
                        <div class="app-card-body p-3 p-lg-4">
                            <h4 class="stats-type mb-1">Expenses</h4>
                            <div class="stats-figure">$2,250</div>
                            <div class="stats-meta text-success">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-down"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z" />
                                </svg> 5%
                            </div>
                        </div>
                        <!--//app-card-body-->
                        <a class="app-card-link-mask" href="#"></a>
                    </div>
                    <!--//app-card-->
                </div>
                <!--//col-->
                <div class="col-6 col-lg-3">
                    <div class="app-card app-card-stat shadow-sm h-100">
                        <div class="app-card-body p-3 p-lg-4">
                            <h4 class="stats-type mb-1">Projects</h4>
                            <div class="stats-figure">23</div>
                            <div class="stats-meta">
                                Open</div>
                        </div>
                        <!--//app-card-body-->
                        <a class="app-card-link-mask" href="#"></a>
                    </div>
                    <!--//app-card-->
                </div>
                <!--//col-->
                <div class="col-6 col-lg-3">
                    <div class="app-card app-card-stat shadow-sm h-100">
                        <div class="app-card-body p-3 p-lg-4">
                            <h4 class="stats-type mb-1">Invoices</h4>
                            <div class="stats-figure">6</div>
                            <div class="stats-meta">New</div>
                        </div>
                        <!--//app-card-body-->
                        <a class="app-card-link-mask" href="#"></a>
                    </div>
                    <!--//app-card-->
                </div>
                <!--//col-->
            </div>
            <!--//row-->
            <div class="row g-4 mb-4">
                <div class="col-12 col-lg-4">
                    <div class="app-card app-card-basic d-flex flex-column align-items-start shadow-sm">
                        <div class="app-card-header p-3 border-bottom-0">
                            <div class="row align-items-center gx-3">
                                <div class="col-auto">
                                    <div class="app-icon-holder">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-receipt"
                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z" />
                                            <path fill-rule="evenodd"
                                                d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z" />
                                        </svg>
                                    </div>
                                    <!--//icon-holder-->

                                </div>
                                <!--//col-->
                                <div class="col-auto">
                                    <h4 class="app-card-title">Invoices</h4>
                                </div>
                                <!--//col-->
                            </div>
                            <!--//row-->
                        </div>
                        <!--//app-card-header-->
                        <div class="app-card-body px-4">

                            <div class="intro">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                                aliquet eros vel diam semper mollis.</div>
                        </div>
                        <!--//app-card-body-->
                        <div class="app-card-footer p-4 mt-auto">
                            <a class="btn app-btn-secondary" href="#">Create New</a>
                        </div>
                        <!--//app-card-footer-->
                    </div>
                    <!--//app-card-->
                </div>
                <!--//col-->
                <div class="col-12 col-lg-4">
                    <div class="app-card app-card-basic d-flex flex-column align-items-start shadow-sm">
                        <div class="app-card-header p-3 border-bottom-0">
                            <div class="row align-items-center gx-3">
                                <div class="col-auto">
                                    <div class="app-icon-holder">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-code-square"
                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                            <path fill-rule="evenodd"
                                                d="M6.854 4.646a.5.5 0 0 1 0 .708L4.207 8l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0zm2.292 0a.5.5 0 0 0 0 .708L11.793 8l-2.647 2.646a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708 0z" />
                                        </svg>
                                    </div>
                                    <!--//icon-holder-->

                                </div>
                                <!--//col-->
                                <div class="col-auto">
                                    <h4 class="app-card-title">Apps</h4>
                                </div>
                                <!--//col-->
                            </div>
                            <!--//row-->
                        </div>
                        <!--//app-card-header-->
                        <div class="app-card-body px-4">

                            <div class="intro">Pellentesque varius, elit vel volutpat sollicitudin, lacus quam
                                efficitur augue</div>
                        </div>
                        <!--//app-card-body-->
                        <div class="app-card-footer p-4 mt-auto">
                            <a class="btn app-btn-secondary" href="#">Create New</a>
                        </div>
                        <!--//app-card-footer-->
                    </div>
                    <!--//app-card-->
                </div>
                <!--//col-->
                <div class="col-12 col-lg-4">
                    <div class="app-card app-card-basic d-flex flex-column align-items-start shadow-sm">
                        <div class="app-card-header p-3 border-bottom-0">
                            <div class="row align-items-center gx-3">
                                <div class="col-auto">
                                    <div class="app-icon-holder">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-tools"
                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M0 1l1-1 3.081 2.2a1 1 0 0 1 .419.815v.07a1 1 0 0 0 .293.708L10.5 9.5l.914-.305a1 1 0 0 1 1.023.242l3.356 3.356a1 1 0 0 1 0 1.414l-1.586 1.586a1 1 0 0 1-1.414 0l-3.356-3.356a1 1 0 0 1-.242-1.023L9.5 10.5 3.793 4.793a1 1 0 0 0-.707-.293h-.071a1 1 0 0 1-.814-.419L0 1zm11.354 9.646a.5.5 0 0 0-.708.708l3 3a.5.5 0 0 0 .708-.708l-3-3z" />
                                            <path fill-rule="evenodd"
                                                d="M15.898 2.223a3.003 3.003 0 0 1-3.679 3.674L5.878 12.15a3 3 0 1 1-2.027-2.027l6.252-6.341A3 3 0 0 1 13.778.1l-2.142 2.142L12 4l1.757.364 2.141-2.141zm-13.37 9.019L3.001 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026z" />
                                        </svg>
                                    </div>
                                    <!--//icon-holder-->

                                </div>
                                <!--//col-->
                                <div class="col-auto">
                                    <h4 class="app-card-title">Tools</h4>
                                </div>
                                <!--//col-->
                            </div>
                            <!--//row-->
                        </div>
                        <!--//app-card-header-->
                        <div class="app-card-body px-4">

                            <div class="intro">Sed maximus, libero ac pharetra elementum, turpis nisi molestie
                                neque, et tincidunt velit turpis non enim.</div>
                        </div>
                        <!--//app-card-body-->
                        <div class="app-card-footer p-4 mt-auto">
                            <a class="btn app-btn-secondary" href="#">Create New</a>
                        </div>
                        <!--//app-card-footer-->
                    </div>
                    <!--//app-card-->
                </div>
                <!--//col-->
            </div>
            <!--//row-->

        </div>
        <!--//container-fluid-->
    </div>
    <!--//app-content-->

    <footer class="app-footer">
        <div class="container text-center py-3">
            <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
            <small class="copyright">Designed with <i class="fas fa-heart" style="color: #fb866a;"></i> by <a
                    class="app-link" href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for
                developers</small>

        </div>
    </footer>
    <!--//app-footer-->

</div>
<!--//app-wrapper-->

<?= $this->endSection() ?>