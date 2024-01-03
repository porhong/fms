<?php ob_start(); ?>

<?php $link_js = ob_get_clean(); ?>

<?php ob_start(); ?>

<div class="">
    <a href="../views/create.php"><button class="btn btn-primary d-none justify-content-center align-items-center d-lg-flex"><lord-icon class="me-2" src="https://cdn.lordicon.com/jgnvfzqg.json" trigger="loop" delay="2000" colors="primary:#ffffff" style="width: 1.5em;height: 1.5em;">
            </lord-icon>Create record</button></a>
</div>
<?php $content = ob_get_clean(); ?>

<?php
$page_title = 'Home';
include("../templates/main_template.php");
?>
<?php require("../templates/close_template.php"); ?>