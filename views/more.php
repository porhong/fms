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
        <div class="card">
            <div class="card-body">
                <div class=" d-flex align-items-center">
                    <div class="w-100">
                        <a href="../views/admin.php"><button type="button" class="btn btn-outline-primary  p-3 bg-color-primary text-color-white rounded-3">User Management</button></a>
                    </div>
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
</script>
<?php require("../templates/close_template.php"); ?>