<!-- Register function -->
<?php

include "../sources/config.php";

if (isset($_POST['submit'])) {
    $username = $_POST['txt_username'];

    $password = $_POST['txt_password'];

    $first_name = $_POST['txt_first_name'];

    $last_name = $_POST['txt_last_name'];

    $email = $_POST['txt_email'];

    $sql = "INSERT INTO `tbl_user`(`username`, `password`, `first_name`, `last_name`, `email`) VALUES ('$username','$password','$first_name','$last_name','$email')";

    $result = $conn->query($sql);

    if ($result == TRUE) {

        header('Location: ../views/login.php');

        exit;

        echo '<div class="toast align-items-center text-bg-primary border-0" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
          <div class="toast-body">
            Hello, world! This is a toast message.
          </div>
          <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
      </div>';
    } else {

        echo "Error:" . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="../sources/style.css" />
    <!-- Link Bootstrap5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Link JS -->
    <script type="text/javascript" src=" ../sources/script.js"></script>
</head>

<body class="set-bg-to-white">
    <!-- Main container -->
    <div class="container d-flex justify-content-center align-items-center min-vh-100">


        <!-- Login Container -->
        <div class="row border bg-white shadow box-area disable-shadow-sm auth-card">


            <!-- Left Box -->
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box">
                <div class="featured-image">
                    <img src="../sources/img/logo.svg" class="img-fluid" style="width: 300px;">
                </div>

            </div>
            <!-- Right Box -->
            <form class="col-md-6 rigtt-box" method="POST" action="">
                <div class="header-text">
                    <p class="auth-title-1">Register</p>
                    <p class="auth-title-2">Please fill the information below</p>
                </div>
                <div class="input-group mb-3">
                    <input oninput="verifyInput('txt_username')" type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Username" name="txt_username" id="txt_username" required>
                </div>
                <div class="input-group mb-3">
                    <input oninput="verifyPassword(),verifyInput('txt_password')" type="password" class="form-control form-control-lg bg-light fs-6 border" placeholder="Password" name="txt_password" id="txt_password" required>
                </div>
                <div class="input-group">
                    <input oninput="verifyPassword()" type="password" class="form-control form-control-lg bg-light fs-6 border" placeholder="Confirm Password" name="txt_confirm_password" id="txt_confirm_password" required>
                </div>
                <div id="pass_confirm_error" class="ps-2 help-block-danger invisible"><small>Confirm password not match.</small></div>
                <div class="input-group mb-3">
                    <input oninput="verifyInput('txt_first_name')" type="text" class="form-control form-control-lg bg-light fs-6" placeholder="First Name" name="txt_first_name" id="txt_first_name" required>
                    <input oninput="verifyInput('txt_last_name')" type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Last name" name="txt_last_name" id="txt_last_name" required>
                </div>
                <div class="input-group mb-3">
                    <input oninput="verifyMail('txt_email')" type="email" class="form-control form-control-lg bg-light fs-6" placeholder="Email" name="txt_email" id="txt_email" required>
                </div>
                <div class="form-check mb-4">
                    <input type="checkbox" class="form-check-input" id="formCheck" placeholder="Password">
                    <label for="formCheck" class="form-check-label text-secondary"><small>I have read and agree to badbot-chayluy Terms of service and Privacy Policy.</small></label>
                </div>
                <div class="input-group mb-3">
                    <button id="btn_submit" type="submit" name="submit" value="submit" class="btn btn-lg btn-primary w-100 fs-6" disabled>Register</button>
                </div>
            </form>
        </div>
    </div>
    </div>
    <!-- Link JS Bootstrap5 -->
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>