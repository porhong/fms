<!-- Top Navbar -->
<nav id="top_bar" class="navbar bg-light border-bottom fixed-top shadow top_bar">
    <ul class="navbar-nav nav-justified w-100 list-group list-group-horizontal">
        <li class="nav-item">
            <a id="nav_title" class="navbar-brand ps-1 position-absolute top-50 start-0 translate-middle-y" href="#">
                <img src="../sources/img/logo.svg" width="70" height="70" class="img-fluid">
                <b class="d-inline-block align-text-top text-color-primary">Badbot Solution</b>
            </a>
            <a id="nav_title_mobile" class="navbar-brand ps-1 position-absolute top-50 start-0 translate-middle-y" href="#">
                <img src="../sources/img/logo.svg" width="70" height="70" class="img-fluid">
            </a>

        </li>
        <li class="nav-item">
            <div id="nav_profile" style="padding-right: 6rem;" class="dropdown position-absolute top-50 start-100 translate-middle ">
                <a href="#" class="d-flex align-items-center link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle">
                </a>
                <ul style="margin-top: 2.5rem;" class="dropdown-menu text-small shadow">
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a href="../controlers/PHP/logout_controler.php" class="dropdown-item">Sign out</a></li>
                </ul>
            </div>
        </li>
    </ul>
</nav>


<!-- Mobile Tabbar -->
<nav id="tab_bar" class="navbar border-top fixed-bottom tab_bar">
    <ul class="navbar-nav nav-justified w-100 list-group list-group-horizontal align-items-center">
        <li class="nav-item">
            <a href="../views/index.php" class="nav-link">
                <div id="tab_home">
                <i class="uil uil-estate fs-1 me-4 icon_none_active"></i>
                    <b class="d-none fs-6"><?php echo $page_title ?></b>
                </div>

            </a>
        </li>
        <li class="nav-item">
            <a href="../views/report.php" class="nav-link">

                <div id="tab_report">
                <i class="uil uil-chart-line fs-1 me-4 icon_none_active"></i>
                    <b class="d-none fs-6"><?php echo $page_title ?></b>
                </div>
            </a>
        </li>
        <li class="nav-item">
            <a href="../views/setting.php" class="nav-link">

                <div id="tab_setting">
                <i class="uil uil-setting fs-1 me-4 icon_none_active"></i>
                    <b class="d-none fs-6"><?php echo $page_title ?></b>
                </div>
            </a>
        </li>
    </ul>
</nav>











<div style="width: 5vw; padding: 0;" class="position-fixed h-100 col">
    <div id="side_bar_small" class="col">
        <!-- small sidebar -->
        <div class="d-flex flex-column flex-shrink-0 bg-light h-100 shadow" style="width: 4.5rem;">
            <div style="padding-top: 4.5rem;" class="align-self-center">
            </div>
            <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
                <li class="nav-item">
                    <a id="sm_sidebar_home" href="../views/index.php" class="nav-link py-3 border-bottom" aria-current="page" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Home">
                    <i class="uil uil-estate fs-2 icon_none_active"></i>
                    </a>
                </li>
                <li>
                    <a id="sm_sidebar_report" href="../views/report.php" class="nav-link py-3 border-bottom" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Dashboard">
                    <i class="uil uil-chart-line fs-2 icon_none_active"></i>
                    </a>
                </li>
                <li>
                    <a id="sm_sidebar_setting" href="../views/setting.php" class="nav-link py-3 border-bottom" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Orders">
                    <i class="uil uil-setting fs-2 icon_none_active"></i>
                    </a>
                </li>
            </ul>
            <hr>
            <div class="dropdown d-flex justify-content-center align-content-center pb-3">
                <a href="#" class="d-flex align-items-center link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                    <strong id="profile_use_name"><?php echo $_SESSION["lastName"]  ?></strong>
                </a>
                <ul class="dropdown-menu text-small shadow">
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a href="../controlers/PHP/logout_controler.php" class="dropdown-item">Sign out</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>














<div class="position-fixed h-100 col">
    <div id="side_bar" style="width: 13vw; padding: 0;" class="col">
        <!-- SideBar -->
        <div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary h-100 shadow">
            <div style="padding-top: 4.5rem;" class="align-self-center">
            </div>
            <ul class="nav nav-pills flex-column mb-auto breadcrumb">
                <li class="mb-2">
                    <a id="sidebar_home" href="../views/index.php" class="nav-link link-body-emphasis p-2 fw-normal p-2 d-flex align-items-center" aria-current="page">
                    <i class="uil uil-estate fs-3 me-3 icon_none_active"></i>
                        <span class="icon_none_active">Home</span>
                    </a>
                </li>
                <li class="mb-2">
                    <a id="sidebar_report" href="../views/report.php" class="nav-link link-body-emphasis p-2 fw-normal d-flex align-items-center">
                    <i class="uil uil-chart-line fs-3 me-3 icon_none_active"></i>
                        <span class="icon_none_active">Report</span>
                    </a>
                </li>
                <li id="sidebar_setting" class="mb-2">
                    <a href="../views/setting.php" class="nav-link link-body-emphasis p-2 fw-normal d-flex align-items-center">
                    <i class="uil uil-setting fs-3 me-3 icon_none_active"></i>
                        <span class="icon_none_active">Setting</span>
                    </a>
                </li>
            </ul>
            <hr>
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                    <strong><?php echo $_SESSION["lastName"]  ?></strong>
                </a>
                <ul class="dropdown-menu text-small shadow">
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a href="../controlers/PHP/logout_controler.php" class="dropdown-item">Sign out</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>




<div class="container-fluid">
    <div id="content" class="top_margin_content">
        <!-- content Bolock -->

        <?php echo $content ?>

    </div>
</div>

</div>