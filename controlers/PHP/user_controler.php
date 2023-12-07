
<?php
// Register function
function register()
{

  include "../sources/function/config.php";
  if (isset($_POST['submit'])) {
    $username = $_POST['txt_username'];

    $password = $_POST['txt_password'];

    $first_name = $_POST['txt_first_name'];

    $last_name = $_POST['txt_last_name'];

    $email = $_POST['txt_email'];

    $sql = "INSERT INTO `tbl_user`(`username`, `password`, `first_name`, `last_name`, `email`) VALUES ('$username','$password','$first_name','$last_name','$email')";

    $result = $conn->query($sql);

    if ($result == TRUE) {

      header('Location: ../views/login.php?success=1');
    } else {

      echo "Error:" . $sql . "<br>" . $conn->error;
    }
    $conn->close();
  }
}

function login()
{
  include "../sources/function/config.php";
  if (isset($_POST['submit'])) {
    $username = $_POST['txt_username_email'];
    $password = $_POST['txt_password'];
    //to prevent from mysqli injection  
    $username = stripcslashes($username);
    $password = stripcslashes($password);

    //$remember_me = $_POST['cb_remember_me'];

    $sql = "SELECT `id`,`username`, `password`,`email`,`first_name`,`last_name` FROM `tbl_user` WHERE `email`= '$username' OR `username` = '$username' AND `password` = '$password';";

    $result = $conn->query($sql);
    $count = mysqli_num_rows($result);
    $userdata = $result->fetch_assoc();
    if ($result == TRUE) {
      if ($count == 1) {
        session_start();
        $_SESSION['userID'] = $userdata['id'];
        $_SESSION['userName'] = $userdata['username'];
        $_SESSION['userEmail'] = $userdata['email'];
        $_SESSION['firstName'] = $userdata['first_name'];
        $_SESSION['lastName'] = $userdata['last_name'];
        header('Location: ../views/index.php');
      } else {
        echo
        '<div class="position-absolute top-0 end-0 toast align-items-center text-bg-danger border-0 fade show mt-4 me-4" role="alert" aria-live="assertive" aria-atomic="true">
              <div class="d-flex p-2">
                <div class="toast-body">
                <i class="bi bi-check-circle-fill"></i>
                  Username / Email or Password are invalid.
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
              </div>
              </div>';
      }
    } else {

      echo "Error:" . $sql . "<br>" . $conn->error;
    }


    $conn->close();
  }
}
