
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
