<?php ob_start();
include("../templates/components/modal.php") ?>

<?php $link_js = ob_get_clean(); ?>
<!-- Date Picker -->
<link rel="stylesheet" href="../sources/calendar-17/fonts/icomoon/style.css">
<link rel="stylesheet" href="../sources/calendar-17/css/rome.css">
<link rel="stylesheet" href="../sources/calendar-17/css/style.css">
<?php ob_start(); ?>
<div class="container">
    <form action="">

        <div class="row border border-2 border-primary rounded rounded-4 fw-bold">
            <div id="income" class="col-6 d-flex justify-content-center pt-2 pb-2 "><span class="income bg-color-primary text-color-white w-100 text-center p-2 rounded-3">Income</span></div>
            <div id="expend" class="col-6 d-flex justify-content-center pt-2 pb-2 "><span class="expend text-color-primary w-100 text-center p-2 rounded-3">Expend</span></div>
        </div>

        <div class="input-group mb-3 mt-4 position-relative input-shadow">
            <div class="btn symbol z-2 position-absolute top-50 start-0 translate-middle h-100  d-flex justify-content-center align-items-center" data-bs-toggle="modal" data-bs-target="#choose_currncy">
                <span class=" fs-1 fw-bolder text-color-primary focus-focus-ring">$</span><i class="uil uil-angle-down fs-3 fw-bolder text-color-primary"></i>
            </div>
            <input type="number" class="form-control input-number-lg rounded-4 fs-2 text-color-primary fw-bold focus-ring focus-ring-light d-flex justify-content-center txt_amount" aria-label="Dollar amount (with dot and two decimal places)">
        </div>
        <div class="row position-relative">
            <div class="col-12 col-lg-6 pb-3 pb-lg-0">

                <div data-bs-toggle="modal" data-bs-target="#choose_date" class="input-group input-shadow">
                    <span class="input-group-text bg-color-white rounded-start-4"><i class="uil uil-calendar-alt fs-4 fw-bolder text-color-primary"></i></span>
                    <input id="tran_date" readonly type="text" class="txt_date form-control input-number-md rounded-end-4 border-start-0 text-color-primary fw-medium" placeholder="Date" aria-label="Username" aria-describedby="basic-addon1">
                </div>

            </div>
            <div class="col-12 col col-lg-6 pb-3">

                <div data-bs-toggle="modal" data-bs-target="#choose_type" class="input-group input-shadow">
                    <span class="input-group-text bg-color-white rounded-start-4"><i class="uil uil-list-ol fs-4 fw-bolder text-color-primary"></i></span>
                    <input readonly type="text" class="txt_type form-control input-number-md rounded-end-4 border-start-0 text-color-primary fw-medium" placeholder="Type" aria-label="Username" aria-describedby="basic-addon1">
                </div>
            </div>
            <div class="col-12 pb-5">
                <div class="input-group input-shadow">
                    <span class="input-group-text bg-color-white rounded-start-4"><i class="uil uil-notes fs-4 fw-bolder text-color-primary"></i></span>
                    <textarea class="txt_note form-control rounded-end-4 border-start-0 input-number-lg text-color-primary fw-medium" placeholder="Note" aria-label="Username" aria-describedby="basic-addon1"></textarea>
                </div>
            </div>
            <div class="col-12 d-flex justify-content-center align-items-center mb-5 input-shadow"><button type="button" class="btn btn-primary w-100 p-3 fw-bold rounded-3">Create Record</button></div>
        </div>

    </form>
</div>
<!-- Date picker -->
<script src="../sources/calendar-17/js/rome.js"></script>
<script src="../sources/calendar-17/js/main.js"></script>
<?php echo $modal_choose_currncy =  modal_choose_currncy('choose_currncy', 'Select Currency', 'Hello', 'Delete'); ?>
<?php echo $modal_choose_currncy =  modal_choose_date('choose_date', 'Select Date', 'Hello', 'Confirm'); ?>
<?php echo $modal_choose_currncy =  modal_choose_type('choose_type', 'Select Type', 'Hello', 'Delete'); ?>
<?php $content = ob_get_clean(); ?>
<?php
$page_title = 'Create';
include("../templates/main_template.php");
?>
<?php require("../templates/close_template.php"); ?>