<?php
session_start();
if (isset($_COOKIE['REMEMBERED'])) {
    $_SESSION['Auth'] = $_COOKIE["REMEMBERED"];
    $_SESSION['userID'] = $_COOKIE["USER_ID"];
    $_SESSION['userName'] = $_COOKIE["USER_NAME"];
    $_SESSION['userEmail'] = $_COOKIE["EMAIL"];
    $_SESSION['firstName'] = $_COOKIE["FIRST_NAME"];
    $_SESSION['lastName'] = $_COOKIE["LAST_NAME"];
}
if (!isset($_SESSION['Auth'])) {
    header('Location: ../views/login.php');
    exit();
}

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../sources/style.css" />
    <!-- Link Bootstrap5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <!-- Link JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title><?php echo $page_title; ?></title>
    <!-- Link CSS Animations -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- Loading animation -->
    <script type="module" src="https://cdn.jsdelivr.net/npm/ldrs/dist/auto/hourglass.js"></script>
    <!-- Link JS each page -->
    <?php echo $link_js ?>
    <!-- Link SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../controlers/JS/alert.js"></script>
</head>

<body>
    <div class="loader">

    </div>
    <?php require("../templates/components/sidebar.php"); ?>