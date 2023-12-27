<?php
include '../controlers/PHP/user_controler.php';
include '../templates/components/modal.php';
?>
<?php ob_start(); ?>
<script src="../controlers/JS/User_JS_Administrator.js"></script>
<?php $link_js = ob_get_clean(); ?>

<?php ob_start();
$page_title = 'Setting';
?>

<div class="position-relative text-color-primary">
    <h2 class="card-title d-flex align-items-center"><i class="uil uil-setting fs-2 pe-2"></i><span fw-bold><?php echo $page_title ?></span></h2>
    <hr>
</div>

<div class="row mb-4">
    <div class="col">
        <div class="card">
            <h5 class="card-header text-color-primary">Profile</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col col-lg-1">
                        <img src="../sources/img/maskable_logo_192x192.png" class="img-thumbnail" alt="...">
                    </div>
                    <div class="col-lg-11">
                        <h5 class="card-title"><?php  ?></h5>
                    </div>
                </div>

                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="card">
            <h5 class="card-header text-color-primary">Administrator</h5>
            <div class="card-body">
                <div class="row p-3">
                    <a href="../views/admin.php"><button type="button" class="btn btn-outline-primary col-lg-3 p-3 bg-color-primary text-color-white rounded-3">User Management</button></a>
                </div>

            </div>
        </div>
    </div>
</div>





<?php $content = ob_get_clean(); ?>

<?php

include("../templates/main_template.php");
?>
<script>
    // alert delete user
    alert('user_deleted', 'User deleted successfully.', 'Can not delete user.')
    alert('success', 'User created successfully.', 'Can not create user.')
    alert('update_success', 'User updated successfully.', 'Can not update user.')
</script>
<?php require("../templates/close_template.php"); ?>