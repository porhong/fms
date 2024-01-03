<!-- Top Navbar -->
<nav id="top_bar" class="navbar fixed-top top_bar d-flex justify-item-center top_over">
    <ul class="navbar-nav nav-justified w-100 list-group list-group-horizontal">
        <li class="nav-item">
            <a id="nav_title" class="navbar-brand ps-1 position-absolute top-50 start-0 translate-middle-y d-none" href="#">
                <img src="../sources/img/logo.svg" width="70" height="70" class="img-fluid">
                <b class="d-inline-block align-text-top text-color-primary">Badbot Solution</b>
            </a>
            <a id="nav_title_mobile" class="navbar-brand ps-1 position-absolute top-50 start-0 translate-middle-y d-none" href="#">
                <img src="../sources/img/logo.svg" width="70" height="70" class="img-fluid">
            </a>
            <a id="nav_mobile" class="navbar-brand ps-1 position-absolute top-50 start-0 translate-middle-y d-none" href="#">
                <span class="fw-bold ps-3 text-color-primary">Welcome <?php echo $_SESSION["lastName"] ?>!</span>
            </a>
        </li>
        <li class="nav-item">
            <div id="nav_profile" style="padding-right: 6rem;" class="dropdown position-absolute top-50 start-100 translate-middle d-none">
                <a href="#" class="d-flex align-items-center link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="border border-primary border-2 p-1 rounded-circle">
                        <lord-icon src="https://cdn.lordicon.com/zfmcashd.json" trigger="hover" style="width:2em;height:2em">
                        </lord-icon>
                    </div>
                </a>
                <ul style="margin-top: 3.5rem; margin-right: 5.5rem;" class="dropdown-menu text-small shadow">
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a href="../controlers/PHP/logout_controler.php" class="dropdown-item">Sign out</a></li>
                </ul>
            </div>
        </li>
        <div class="row">
            <a id="nav_mobile_back" class="navbar-brand ps-1 position-absolute top-50 start-0 translate-middle-y d-flex d-none" href="#">
                <i class="uil uil-arrow-left lg-icon-size ms-1 text-color-primary"></i>
                <h2 class=" card-title d-flex align-items-center text-color-primary ms-1"><span class="fw-bold fs-4"><?php echo $page_title ?></span></h2>
            </a>

        </div>
    </ul>
</nav>


<!-- Mobile Tabbar -->
<nav id="tab_bar" class="navbar fixed-bottom tab_bar top_over">
    <ul class="navbar-nav d-flex nav-justified w-100 list-group list-group-horizontal align-items-center">
        <li class="nav-item">
            <a href="../views/index.php" class="nav-link d-flex align-items-center justify-content-center">
                <div id="tab_home">
                    <i class="uil uil-estate fs-2 icon_none_active"></i>

                </div>

            </a>
        </li>
        <li class="nav-item">
            <a href="../views/report.php" class="nav-link d-flex align-items-center justify-content-center">

                <div id="tab_report">
                    <i class="uil uil-chart-line fs-2 icon_none_active"></i>

                </div>
            </a>
        </li>
        <li class="nav-item">
            <a href="../views/create.php" class="nav-link d-flex align-items-center justify-content-center position-relative">

                <div id="tab_add">

                    <div class="rounded-circle p-3 border-2 border border-3 bg-color-primary">
                        <lord-icon src="https://cdn.lordicon.com/jgnvfzqg.json" trigger="loop" delay="2000" colors="primary:#ffffff" style="width: 2em;height: 2em;">
                        </lord-icon>
                    </div>


                </div>
            </a>
        </li>
        <li class="nav-item">
            <a href="../views/budget.php" class="nav-link d-flex align-items-center justify-content-center">

                <div id="tab_budget">
                    <i class="uil uil-money-stack fs-2 icon_none_active"></i>
                </div>
            </a>
        </li>
        <li class="nav-item">
            <a href="../views/more.php" class="nav-link d-flex align-items-center justify-content-center">

                <div id="tab_more">
                    <i class="uil uil-apps fs-2 icon_none_active"></i>

                </div>
            </a>
        </li>
    </ul>
</nav>











<div id="side_bar_small" style="width: 5vw; padding: 0;" class="position-fixed h-100 col d-none top_over">
    <div class="col">
        <!-- small sidebar -->
        <div class="d-flex flex-column flex-shrink-0 bg-light h-100 shadow" style="width: 4.5rem;">
            <div style="padding-top: 4.5rem;" class="align-self-center">
            </div>
            <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
                <li class="nav-item">
                    <a id="sm_sidebar_home" href="../views/index.php" class="nav-link py-3 border-bottom" aria-current="page" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Home">
                        <i class="uil uil-estate fs-3 icon_none_active"></i>
                    </a>
                </li>
                <li>
                    <a id="sm_sidebar_report" href="../views/report.php" class="nav-link py-3 border-bottom" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Dashboard">
                        <i class="uil uil-chart-line fs-3 icon_none_active"></i>
                    </a>
                </li>
                <li>
                    <a id="sm_sidebar_budget" href="../views/budget.php" class="nav-link py-3 border-bottom" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Orders">
                        <i class="uil uil-money-stack fs-3 icon_none_active"></i>
                    </a>
                </li>
                <li>
                    <a id="sm_sidebar_more" href="../views/more.php" class="nav-link py-3 border-bottom" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Orders">
                        <i class="uil uil-apps fs-3 icon_none_active"></i>
                    </a>
                </li>
            </ul>
            <hr>
            <div class="dropdown d-flex justify-content-center align-content-center pb-3">
                <a href="#" class="d-flex align-items-center link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="border border-primary border-2 p-1 rounded-circle">
                        <lord-icon src="https://cdn.lordicon.com/zfmcashd.json" trigger="hover" style="width:2em;height:2em">
                        </lord-icon>
                    </div>
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














<div class="position-fixed h-100 col top_over">
    <div id="side_bar" style="width: 13vw; padding: 0;" class="col">
        <!-- SideBar -->
        <div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary h-100 shadow">
            <div style="padding-top: 4.5rem;" class="align-self-center">
            </div>
            <ul class="nav nav-pills flex-column mb-auto breadcrumb">
                <li class="mb-2">
                    <a id="sidebar_home" href="../views/index.php" class="nav-link link-body-emphasis p-2 fw-normal p-2 d-flex align-items-center" aria-current="page">
                        <i class="uil uil-estate fs-4 me-3 icon_none_active"></i>
                        <span class="icon_none_active fw-medium">Home</span>
                    </a>
                </li>
                <li class="mb-2">
                    <a id="sidebar_report" href="../views/report.php" class="nav-link link-body-emphasis p-2 fw-normal d-flex align-items-center">
                        <i class="uil uil-chart-line fs-4 me-3 icon_none_active"></i>
                        <span class="icon_none_active fw-medium">Report</span>
                    </a>
                </li>
                <li id="sidebar_budget" class="mb-2">
                    <a href="../views/budget.php" class="nav-link link-body-emphasis p-2 fw-normal d-flex align-items-center">
                        <i class="uil uil-money-stack fs-4 me-3 icon_none_active"></i>
                        <span class="icon_none_active fw-medium">Budget</span>
                    </a>
                </li>
                <li id="sidebar_more" class="mb-2">
                    <a href="../views/more.php" class="nav-link link-body-emphasis p-2 fw-normal d-flex align-items-center">
                        <i class="uil uil-apps fs-4 me-3 icon_none_active"></i>
                        <span class="icon_none_active fw-medium">More</span>
                    </a>
                </li>
            </ul>
            <hr>
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="border border-primary border-2 p-1 rounded-circle me-2">
                        <lord-icon src="https://cdn.lordicon.com/zfmcashd.json" trigger="hover" style="width:2em;height:2em">
                        </lord-icon>
                    </div>
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