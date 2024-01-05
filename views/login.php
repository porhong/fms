<?php
session_start();
if (isset($_GET['success']) && $_GET['success'] == 1) {
    echo
    '<div class="position-absolute top-0 end-0 toast align-items-center text-bg-success border-0 fade show mt-4 me-4" role="alert" aria-live="assertive" aria-atomic="true">
<div class="d-flex p-2">
  <div class="toast-body">
  <i class="bi bi-check-circle-fill"></i>
    Hello, world! This is a toast message.
  </div>
  <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
</div>
</div>';
}
include "../controlers/PHP/user_controler.php";
login();
if (isset($_SESSION['Auth'])) {
    header('Location: ../views/index.php');
    exit();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../sources/style.css" />
    <link rel=" stylesheet" href="../sources/properties.css" />
    <link rel=" stylesheet" href="../sources/global.css" />
    <link rel=" stylesheet" href="../sources/custom_bootstrap.css" />
    <!-- Link Bootstrap5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Link JS -->
    <script type="text/javascript" src="../controlers/JS/User_JS_Controler.js"></script>
    <!-- Link JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>;
    <!-- PWA -->
    <link rel="manifest" crossorigin="use-credentials" href="../manifest.json">
    <script>
        //if browser support service worker
        if ('serviceWorker' in navigator) {
            navigator.serviceWorker.register('../service-worker.js');
        };
    </script>
</head>

<body>
    <!-- Main container -->
    <div id="main_container" class="container d-flex justify-content-center align-items-center min-vh-100">


        <!-- Login Container -->
        <div id="login_container" class="row bg-white box-area auth-card">


            <!-- Left Box -->
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box">
                <div>
                    <img src="../sources/img/logo.svg" class="img-fluid" style="width: 250px;">
                </div>

            </div>
            <!-- Right Box -->
            <form class="col-md-6 right-box" method="POST" action="">
                <div class="header-text">
                    <p class="auth-title-1">Hello, Welcome</p>
                    <p class="auth-title-2">Please login to continue</p>
                </div>
                <div id="block_txt_username_email" class="form-floating input mb-3">
                    <input oninput="loginVerify('txt_username_email','Username is required')" name="txt_username_email" id="txt_username_email" type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Username or Email">
                    <label for="txt_username_email">Username or Email</label>
                </div>
                <div id="block_txt_password" class="form-floating input mb-2">
                    <input oninput="loginVerify('txt_password','Password is required')" name="txt_password" id="txt_password" type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password">
                    <label for="txt_password">Password</label>
                </div>
                <div class="input-group mb-3 d-flex justify-content-between">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="cb_remember_me" name="cb_remember_me" placeholder="Password">
                        <label for="cb_remember_me" class="form-check-label text-secondary"><small>Remember Me</small></label>
                    </div>
                    <div class="forget">
                        <small><a class="text-color-primary fw-normal" href="#">Forget Password?</a></small>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <button id="btn_submit" class="btn btn-lg btn-primary w-100 fs-6" name="submit" disabled>Login</button>
                </div>
                <div class="row pb-3">
                    <small>Don't have account? <a class="text-color-primary" href="../views/register.php">Sign Up</a></small>
                </div>
            </form>
        </div>
    </div>
    </div>
    <!-- Bootstrap JS and dependencies (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="../controlers/JS/alert.js"></script>
    <script>
        var wd = $(window).width();
        console.log(wd);
        if (wd < 768) {
            $("#main_container").removeClass("min-vh-100");
            $("#main_container").addClass("mt-5");


        } else {
            $("#main_container").addClass("min-vh-100");
            $("#main_container").removeClass("mt-5");

        }
        $(window).resize(function() {
            var wd = $(window).width();
            console.log(wd);
            if (wd < 768) {
                $("#main_container").removeClass("min-vh-100");
                $("#main_container").addClass("mt-5");


            } else {
                $("#main_container").addClass("min-vh-100");
                $("#main_container").removeClass("mt-5");

            }
        });


        //Alert
        alert_login('login', 'Username / Email or Password are invalid.', 'User is no atviate yet please contact the administrator.')
    </script>
</body>

</html>