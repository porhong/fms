<?php
include '../controlers/PHP/user_controler.php';
include '../templates/components/modal.php';
?>
<?php ob_start(); ?>
<script src="../controlers/JS/User_JS_Administrator.js"></script>
<?php $link_js = ob_get_clean(); ?>

<?php ob_start();
$page_title = 'More';
?>



<div class="row">
    <div class="col ms-lg-3 me-lg-3">
        <div class="card input-shadow">
            <div class="row card-body d-xl-flex align-items-center">
                <a class=" d-flex align-items-center text-color-primary col-xl-4 col-xxl-3 p-2 " href="../views/admin.php">
                    <div class="col-2">
                        <div class="bg-color-primary text-color-white md-square-icon-bg d-flex align-items-center justify-content-center"><i class="uil uil-book-reader md-icon-size"></i></div>
                    </div>
                    <div class="col-8 ps-lg-3 ps-3">
                        <span class="menu-title-fs fw-bold row">User Management</span>
                        <span class="menu-sub-title-fs row text-color-secondary">.Create .Edit .Delete User</span>
                    </div>
                    <div class="col-2 d-xxl-none d-flex justify-content-center"><i class="uil uil-angle-right lg-icon-size"></i></div>
                </a>
                <hr class="d-xl-none">
                <a class="d-flex align-items-center text-color-primary col-xl-4 col-xxl-3 p-2 " href="../views/admin.php">
                    <div class="col-2">
                        <div class="bg-color-primary text-color-white md-square-icon-bg d-flex align-items-center justify-content-center"><i class="uil uil-book-reader md-icon-size"></i></div>
                    </div>
                    <div class="col-8 ps-lg-3 ps-3">
                        <span class="menu-title-fs fw-bold row">User Management</span>
                        <span class="menu-sub-title-fs row text-color-secondary">.Create .Edit .Delete User</span>
                    </div>
                    <div class="col-2 d-xxl-none d-flex justify-content-center"><i class="uil uil-angle-right lg-icon-size"></i></div>
                </a>
                <hr class="d-xl-none">
                <a class="d-flex align-items-center text-color-primary col-xl-4 col-xxl-3 p-2 " href="../views/admin.php">
                    <div class="col-2">
                        <div class="bg-color-primary text-color-white md-square-icon-bg d-flex align-items-center justify-content-center"><i class="uil uil-book-reader md-icon-size"></i></div>
                    </div>
                    <div class="col-8 ps-lg-3 ps-3">
                        <span class="menu-title-fs fw-bold row">User Management</span>
                        <span class="menu-sub-title-fs row text-color-secondary">.Create .Edit .Delete User</span>
                    </div>
                    <div class="col-2 d-xxl-none d-flex justify-content-center"><i class="uil uil-angle-right lg-icon-size"></i></div>
                </a>
                <hr class="d-xl-none">
                <a class="d-flex align-items-center text-color-primary col-xl-4 col-xxl-3 p-2 " href="../views/admin.php">
                    <div class="col-2">
                        <div class="bg-color-primary text-color-white md-square-icon-bg d-flex align-items-center justify-content-center"><i class="uil uil-book-reader md-icon-size"></i></div>
                    </div>
                    <div class="col-8 col-xxl-10 ps-lg-3 ps-3">
                        <span class="menu-title-fs fw-bold row">User Management</span>
                        <span class="menu-sub-title-fs row text-color-secondary">.Create .Edit .Delete User</span>
                    </div>
                    <div class="col-2 d-xxl-none d-flex justify-content-center"><i class="uil uil-angle-right lg-icon-size"></i></div>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="row mt-3">
    <div class="col ms-lg-3 me-lg-3">
        <div class="card input-shadow">
            <div class="row card-body d-xl-flex align-items-center">
                <a class=" d-flex align-items-center text-color-primary col-xl-4 col-xxl-3 p-2 " href="../views/admin.php">
                    <div class="col-2">
                        <div class="bg-color-primary text-color-white md-square-icon-bg d-flex align-items-center justify-content-center"><i class="uil uil-book-reader md-icon-size"></i></div>
                    </div>
                    <div class="col-8 ps-lg-3 ps-3">
                        <span class="menu-title-fs fw-bold row">User Management</span>
                        <span class="menu-sub-title-fs row text-color-secondary">.Create .Edit .Delete User</span>
                    </div>
                    <div class="col-2 d-xxl-none d-flex justify-content-center"><i class="uil uil-angle-right lg-icon-size"></i></div>
                </a>
                <hr class="d-xl-none">
                <a class="d-flex align-items-center text-color-primary col-xl-4 col-xxl-3 p-2 " href="../views/admin.php">
                    <div class="col-2">
                        <div class="bg-color-primary text-color-white md-square-icon-bg d-flex align-items-center justify-content-center"><i class="uil uil-book-reader md-icon-size"></i></div>
                    </div>
                    <div class="col-8 ps-lg-3 ps-3">
                        <span class="menu-title-fs fw-bold row">User Management</span>
                        <span class="menu-sub-title-fs row text-color-secondary">.Create .Edit .Delete User</span>
                    </div>
                    <div class="col-2 d-xxl-none d-flex justify-content-center"><i class="uil uil-angle-right lg-icon-size"></i></div>
                </a>
                <hr class="d-xl-none">
                <a class="d-flex align-items-center text-color-primary col-xl-4 col-xxl-3 p-2 " href="../views/admin.php">
                    <div class="col-2">
                        <div class="bg-color-primary text-color-white md-square-icon-bg d-flex align-items-center justify-content-center"><i class="uil uil-book-reader md-icon-size"></i></div>
                    </div>
                    <div class="col-8 ps-lg-3 ps-3">
                        <span class="menu-title-fs fw-bold row">User Management</span>
                        <span class="menu-sub-title-fs row text-color-secondary">.Create .Edit .Delete User</span>
                    </div>
                    <div class="col-2 d-xxl-none d-flex justify-content-center"><i class="uil uil-angle-right lg-icon-size"></i></div>
                </a>
                <hr class="d-xl-none">
                <a class="d-flex align-items-center text-color-primary col-xl-4 col-xxl-3 p-2 " href="../views/admin.php">
                    <div class="col-2">
                        <div class="bg-color-primary text-color-white md-square-icon-bg d-flex align-items-center justify-content-center"><i class="uil uil-book-reader md-icon-size"></i></div>
                    </div>
                    <div class="col-8 col-xxl-10 ps-lg-3 ps-3">
                        <span class="menu-title-fs fw-bold row">User Management</span>
                        <span class="menu-sub-title-fs row text-color-secondary">.Create .Edit .Delete User</span>
                    </div>
                    <div class="col-2 d-xxl-none d-flex justify-content-center"><i class="uil uil-angle-right lg-icon-size"></i></div>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="row mt-3 ">
    <div class="col ms-lg-3 me-lg-3">
        <div class="card input-shadow">
            <div class="row card-body d-xl-flex align-items-center">
                <a class="d-flex align-items-center text-color-primary col-xl-4 col-xxl-3 p-2 " href="../views/admin.php">
                    <div class="col-2">
                        <div class="bg-color-primary text-color-white md-square-icon-bg d-flex align-items-center justify-content-center"><i class="uil uil-setting md-icon-size"></i></div>
                    </div>
                    <div class="col-8 ps-lg-3 ps-3">
                        <span class="menu-title-fs fw-bold row">Setting</span>
                        <span class="menu-sub-title-fs row text-color-secondary">Manage the application</span>
                    </div>
                    <div class="col-2 d-xxl-none d-flex justify-content-center"><i class="uil uil-angle-right lg-icon-size"></i></div>
                </a>
                <hr class="d-xl-none">
                <a class=" d-flex align-items-center text-color-primary col-xl-4 col-xxl-3 p-2 " href="../controlers/PHP/logout_controler.php">
                    <div class="col-2">
                        <div class="bg-color-danger text-color-white md-square-icon-bg d-flex align-items-center justify-content-center"><i class="uil uil-signout md-icon-size"></i></div>
                    </div>
                    <div class="col-8 ps-lg-3 ps-3">
                        <span class="menu-title-fs fw-bold row">Log Out</span>
                        <span class="menu-sub-title-fs row text-color-secondary">Exit to the login screen</span>
                    </div>
                    <div class="col-2 d-xxl-none d-flex justify-content-center"><i class="uil uil-angle-right lg-icon-size"></i></div>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="row ms-xxl-2 mt-3 pb-5">
    <span class="col d-block align-items-center text-color-secondary">
        <h6>Version: 0.0.1 [Dev]</h6>
    </span>
</div>


<?php $content = ob_get_clean(); ?>

<?php

include("../templates/main_template.php");
?>
<script>
    // alert delete user
</script>
<?php require("../templates/close_template.php"); ?>