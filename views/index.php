<?php ob_start(); ?>
<div class="row">
    <div class="col">Col1</div>
    <div class="col">Col2</div>
    <div class="col">Col3</div>
</div>
<?php $content = ob_get_clean(); ?>

<?php
$page_title = 'Home';
include("../templates/main_template.php");
?>
<?php require("../templates/close_template.php"); ?>