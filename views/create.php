<?php ob_start();
include("../templates/components/modal.php") ?>

<?php $link_js = ob_get_clean(); ?>

<?php ob_start(); ?>
<div class="container">
    <form action="">

        <div class="row border border-2 border-primary rounded rounded-4 fw-bold">
            <div id="income" class="col-6 d-flex justify-content-center pt-2 pb-2 animate__animated btn_income"><span class="income bg-color-primary text-color-white w-100 text-center p-2 rounded-3">Income</span></div>
            <div id="expend" class="col-6 d-flex justify-content-center pt-2 pb-2 animate__animated btn_income"><span class="expend text-color-primary w-100 text-center p-2 rounded-3">Expend</span></div>
        </div>

        <div class="input-group mb-3 mt-4">
            <div class="symbol z-1">
                <span class="position-absolute top-50 start-0 translate-middle fs-1 fw-bolder text-color-primary focus-focus-ring ps-5">$</span>
            </div>
            <input type="number" class="form-control input-number-lg rounded-start-3 fs-2 text-color-primary fw-bold focus-ring focus-ring-light ps-5 d-flex justify-content-center" aria-label="Dollar amount (with dot and two decimal places)">
            <div id="btn_currency" class="btn btn-primary w-25 border-start-4 d-flex justify-content-center align-items-center" data-bs-toggle="modal" data-bs-target="#choose_currncy"><span class="fw-bold fs-4">USD</span></div>
        </div>


    </form>
</div>
<?php echo $modal_choose_currncy =  modal_choose_currncy('choose_currncy', 'Choose Currency', 'Hello', 'Delete'); ?>
<?php $content = ob_get_clean(); ?>
<?php
$page_title = 'Create';
include("../templates/main_template.php");
?>
<?php require("../templates/close_template.php"); ?>