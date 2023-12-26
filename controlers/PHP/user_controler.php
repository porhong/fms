
<?php
// Register function
function register()
{

  include "../sources/function/config.php";
  if (isset($_POST['submit'])) {
    $username = $_POST['txt_username'];

    $password = md5($_POST['txt_password']);

    $first_name = $_POST['txt_first_name'];

    $last_name = $_POST['txt_last_name'];

    $email = $_POST['txt_email'];

    $sql = "INSERT INTO `tbl_user`(`username`, `password`, `first_name`, `last_name`, `email`) VALUES ('$username','$password','$first_name','$last_name','$email')";

    $result = $conn->query($sql);

    if ($result == TRUE) {

      header('Location: ../views/login.php?success=1');
      exit;
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
    $password = md5($_POST['txt_password']);
    $remember_me = isset($_POST['cb_remember_me']);
    //to prevent from mysqli injection  
    $username = stripcslashes($username);
    $password = stripcslashes($password);


    $sql = "SELECT `id`,`username`, `password`,`email`,`first_name`,`last_name`,`status`,`role` FROM `tbl_user` WHERE `email`= '$username' OR `username` = '$username' AND `password` = '$password';";


    $result = $conn->query($sql);
    $count = mysqli_num_rows($result);
    $userdata = $result->fetch_assoc();
    if ($result == TRUE) {
      if ($count == 1) {
        if ($userdata['status'] == 0) {
          header('Location: ../views/login.php?login=2');
          exit();
        } else {
          session_start();
          ini_set("session.gc_maxlifetime", 86400);
          $_SESSION['userID'] = $userdata['id'];
          $_SESSION['userName'] = $userdata['username'];
          $_SESSION['userEmail'] = $userdata['email'];
          $_SESSION['firstName'] = $userdata['first_name'];
          $_SESSION['lastName'] = $userdata['last_name'];
          $_SESSION['role'] = $userdata['role'];
          $_SESSION['Auth'] = true;
          if ($remember_me) {
            setcookie('USER_ID', $userdata['id'], time() + (86400 * 30), "/");
            setcookie('USER_NAME', $userdata['username'], time() + (86400 * 30), "/");
            setcookie('EMAIL', $userdata['email'], time() + (86400 * 30), "/");
            setcookie('FIRST_NAME', $userdata['first_name'], time() + (86400 * 30), "/");
            setcookie('LAST_NAME', $userdata['last_name'], time() + (86400 * 30), "/");
            setcookie('ROLE', $userdata['role'], time() + (86400 * 30), "/");
            setcookie('REMEMBERED', true, time() + (86400 * 30), "/");
          }
          //log logging to database
          $UserID = $userdata['id'];
          date_default_timezone_set("Asia/Phnom_Penh");
          $log_timestamp = date("Y-m-d H:i:s");
          $sql_log_login = "UPDATE `tbl_user` SET `last_login`='$log_timestamp' WHERE `id`= '$UserID'";
          $conn->query($sql_log_login);
          header('Location: ../views/index.php');
          exit();
        }
      } else {
        header('Location: ../views/login.php?login=1');
        exit();
      }
    } else {

      echo "Error:" . $sql . "<br>" . $conn->error;
    }




    $conn->close();
  }
}


function logout()
{
  setcookie('USER_ID', '', time() - (86400 * 30), "/");
  setcookie('USER_NAME', '', time() - (86400 * 30), "/");
  setcookie('EMAIL', '',  time() - (86400 * 30), "/");
  setcookie('FIRST_NAME', '',  time() - (86400 * 30), "/");
  setcookie('LAST_NAME', '',  time() - (86400 * 30), "/");
  setcookie('REMEMBERED', '',  time() - (86400 * 30), "/");
  setcookie('ROLE', '',  time() - (86400 * 30), "/");
  unset($_COOKIE['USER_ID']);
  unset($_COOKIE['USER_NAME']);
  unset($_COOKIE['EMAIL']);
  unset($_COOKIE['FIRST_NAME']);
  unset($_COOKIE['LAST_NAME']);
  unset($_COOKIE['REMEMBERED']);
  unset($_COOKIE['ROLE']);
  session_start();
  session_unset();
  session_destroy();
  session_write_close();
  session_regenerate_id(true);
  header('Location: ../../views/login.php');
  exit();
}


function getUser()
{
  include "../sources/function/config.php";
  // Number of records per page
  $recordsPerPage = 9;

  // Current page number
  if (isset($_GET['page'])) {
    $currentPage = $_GET['page'];
  } else {
    $currentPage = 1;
  }
  // Calculate the starting record index
  $startFrom = ($currentPage - 1) * $recordsPerPage;

  $sql = "SELECT tbl_user.id, `username`, `password`, `first_name`, `last_name`, `email`, `created_at`, `status`, `last_login`, tbl_roles.name AS 'role' FROM `tbl_user` INNER JOIN tbl_roles ON tbl_roles.id=tbl_user.role ORDER BY `id` ASC LIMIT $startFrom, $recordsPerPage ";

  $result = $conn->query($sql);
  return $result;
  $conn->close();
}
