<?php
session_start();
if (isset($_POST['submit'])) {
    session_destroy();
    header('Location: ../views/login.php');
    exit();
}
?>
<?php include("../templates/main_template.php"); ?>


<h1>Hello <?php echo $_SESSION["lastName"]  ?> You are log in</h1>
<form action="" method="POST">
    <button class="btn btn-lg btn-primary w-100 fs-6" name="submit">Logout</button>
</form>
<!-- Bootstrap JS and dependencies (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>



<?php require("../templates/close_template.php"); ?>