<?php
include "../controlers/PHP/user_controler.php";
// Register function
register();
?>


<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel=" stylesheet" href="../sources/style.css" />
    <link rel=" stylesheet" href="../sources/properties.css" />
    <link rel=" stylesheet" href="../sources/global.css" />
    <link rel=" stylesheet" href="../sources/custom_bootstrap.css" />
    <!-- Link Bootstrap5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Link JS -->
    <script type="text/javascript" src="../controlers/JS/User_JS_Controler.js"></script>
    <!-- Link JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- PWA -->
    <link rel="manifest" crossorigin="use-credentials" href="../manifest.json">
    <link rel="icon" type="image/x-icon" href="../sources/img/favicon.svg">
    <script>
        //if browser support service worker
        if ('serviceWorker' in navigator) {
            navigator.serviceWorker.register('../service-worker.js');
        };
    </script>
</head>

<body class="set-bg-to-white">
    <!-- Main container -->
    <div id="main_container" class="container-md d-flex justify-content-center align-items-center min-vh-100">


        <!-- Login Container -->
        <div class="row bg-white box-area auth-card">


            <!-- Left Box -->
            <div class=" position-relative col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box">
                <div class=" icon_back position-absolute top-0 start-0">
                    <a class="text-color-primary" href="../views/login.php"><i style="font-size: 2.2rem;" class=" bi bi-arrow-left-circle"></i></a>
                </div>
                <div class="featured-image">
                    <img src="../sources/img/logo.svg" class="img-fluid" style="width: 250px;">
                </div>

            </div>
            <!-- Right Box -->
            <form class="col-md-6 rigtt-box" method="POST" action="">
                <div class="header-text">
                    <p class="auth-title-1">Register</p>
                    <p class="auth-title-2">Please fill the information below</p>
                </div>
                <div id="block_txt_username" class="form-floating form-floating input mb-3">
                    <input oninput="verifyRegisterInput('txt_username','Username is required')" onblur="checkFromDB('txt_username','username')" type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Username" name="txt_username" id="txt_username" required>
                    <label for="txt_username">Username</label>
                </div>
                <div id="block_txt_password" class="form-floating input mb-3">
                    <input oninput="verifyPassword()" type="password" class="form-control form-control-lg bg-light fs-6 border" placeholder="Password" name="txt_password" id="txt_password" required>
                    <label for="txt_password">Password</label>
                </div>
                <div id="block_txt_confirm_password" class="form-floating input mb-3">
                    <input oninput="verifyPassword()" type="password" class="form-control form-control-lg bg-light fs-6 border" placeholder="Confirm Password" name="txt_confirm_password" id="txt_confirm_password" required>
                    <label for="txt_confirm_password">Confirm Password</label>
                </div>
                <div class="row mb-3">
                    <div class="col form-floating input" id="block_txt_first_name">
                        <input oninput="verifyRegisterInput('txt_first_name','First name is required')" type="text" class="form-control form-control-lg bg-light fs-6" placeholder="First Name" name="txt_first_name" id="txt_first_name" required>
                        <label class="ms-3" for="txt_first_name">First Name</label>
                    </div>
                    <div class="col form-floating input" id="block_txt_last_name">
                        <input oninput="verifyRegisterInput('txt_last_name','Last name is required')" type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Last name" name="txt_last_name" id="txt_last_name" required>
                        <label class="ms-3" for="txt_last_name">Last Name</label>
                    </div>
                </div>
                <div id="block_txt_email" class="form-floating input mb-3">
                    <input oninput="verifyMail('txt_email')" onblur="checkFromDB('txt_email','email')" type="email" class="form-control form-control-lg bg-light fs-6" placeholder="Email" name="txt_email" id="txt_email" required>
                    <label for="txt_email">Email</label>
                </div>
                <div class="form-check mb-4">
                    <input onclick="formVrify(true)" type="checkbox" class="form-check-input" id="formAgree">
                    <label for="formAgree" class="form-check-label text-secondary"><small>I have read and agree to badbot-chayluy Terms of service and Privacy Policy.</small></label>
                </div>
                <div class="form-floating input mb-3">
                    <button id="btn_submit" type="submit" name="submit" value="submit" class="btn btn-lg btn-primary w-100 fs-6" disabled>Register</button>
                </div>
            </form>
        </div>
    </div>
    </div>
    <!-- Link JS Bootstrap5 -->
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
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
    </script>
</body>

</html>