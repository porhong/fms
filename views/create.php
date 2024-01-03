<?php ob_start(); ?>

<?php $link_js = ob_get_clean(); ?>

<?php ob_start(); ?>
<div class="container">
    <form action="">

        <div class="row border border-2 border-primary rounded rounded-4 fw-bold">
            <div id="income" class="col-6 d-flex justify-content-center pt-2 pb-2"><span class="income bg-color-primary text-color-white w-100 text-center p-2 rounded-3">Income</span></div>
            <div id="expend" class="col-6 d-flex justify-content-center pt-2 pb-2"><span class="expend text-color-primary w-100 text-center p-2 rounded-3">Expend</span></div>
        </div>

    </form>
</div>
<?php $content = ob_get_clean(); ?>

<?php
$page_title = 'Create';
include("../templates/main_template.php");
?>
<?php require("../templates/close_template.php"); ?>