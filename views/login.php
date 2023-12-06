<?php

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


?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="../sources/style.css" />
    <!-- Link Bootstrap5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body class="set-bg-to-white">
    <!-- Main container -->
    <div class="container d-flex justify-content-center align-items-center min-vh-100">


        <!-- Login Container -->
        <div class="row border disable-shadow-sm bg-white box-area auth-card">


            <!-- Left Box -->
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box">
                <div class="featured-image">
                    <img src="../sources/img/logo.svg" class="img-fluid" style="width: 250px;">
                </div>

            </div>
            <!-- Right Box -->
            <div class="col-md-6 rigtt-box">
                <div class="header-text">
                    <p class="auth-title-1">Hello, Welcome</p>
                    <p class="auth-title-2">Please login to continue</p>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Username or Email">
                </div>
                <div class="input-group mb-1">
                    <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password">
                </div>
                <div class="input-group mb-3 d-flex justify-content-between">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="formCheck" placeholder="Password">
                        <label for="formCheck" class="form-check-label text-secondary"><small>Remember Me</small></label>
                    </div>
                    <div class="forget">
                        <small><a href="#">Forget Password?</a></small>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <button class="btn btn-lg btn-primary w-100 fs-6">Login</button>
                </div>
                <div class="row pb-3">  
                    <small>Don't have account? <a href="../views/register.php">Sign Up</a></small>
                </div>
            </div>
        </div>
    </div>
    </div>
<!-- Bootstrap JS and dependencies (optional) -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>