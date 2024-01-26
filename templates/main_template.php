<?php
error_reporting(E_WARNING | E_PARSE);
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel=" stylesheet" href="../sources/style.css" />
    <link rel=" stylesheet" href="../sources/properties.css" />
    <link rel=" stylesheet" href="../sources/global.css" />
    <link rel=" stylesheet" href="../sources/custom_bootstrap.css" />
    <link rel="icon" type="image/x-icon" href="../sources/img/favicon.svg">
    <!-- Link Bootstrap5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <!-- Link JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title><?php echo $page_title; ?></title>
    <!-- Link CSS Animations -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- Link JS each page -->
    <?php echo $link_js ?>
    <!-- Link SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../controlers/JS/alert.js"></script>
    <!-- link Icon Scout -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <!-- PWA -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#ffffff" />
    <link rel="manifest" crossorigin="use-credentials" href="../manifest.json">
    <script>
        //if browser support service worker
        if ('serviceWorker' in navigator) {
            navigator.serviceWorker.register('../service-worker.js');
        };
    </script>
    <!-- Lordicon -->
    <script src="https://cdn.lordicon.com/lordicon.js"></script>

    <!-- Jqury-UI -->
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js" integrity="sha256-lSjKY0/srUM9BE3dPm+c4fBo1dky2v27Gdjm2uoZaL0=" crossorigin="anonymous"></script>





<body>
    <div class="loader position-absolute">
        <div class="d-flex position-absolute top-50 start-50 translate-middle">
            <lord-icon src="https://cdn.lordicon.com/pxwxddbb.json" trigger="loop" state="loop-rotation" colors="primary:#3f59a8" style="width:5em;height:5em;">
            </lord-icon>
        </div>
    </div>
    <?php require("../templates/components/sidebar.php"); ?>