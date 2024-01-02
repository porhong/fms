<?php ob_start(); ?>
<?php $link_js = ob_get_clean(); ?>

<?php ob_start(); ?>
<div class="d-flex justify-content-center justifu align-items-center row mt-5 pt-5">
    <lord-icon src="https://cdn.lordicon.com/jdalicnn.json" trigger="loop" delay="3000" colors="primary:#121331,secondary:#3e58a7" style="width:250px;height:250px"></lord-icon>
    <h2 class="text-center text-color-primary fw-bold pt-5">
        This page is under construction.
    </h2>
</div>;
<?php $content = ob_get_clean(); ?>

<?php
$page_title = 'Report';
include("../templates/main_template.php");
?>
<?php require("../templates/close_template.php"); ?>