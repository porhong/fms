<?php
if (isset($_POST['create_user'])) {
    $username = $_POST['txt_username'];

    $password = md5($_POST['txt_password']);

    $first_name = $_POST['txt_first_name'];

    $last_name = $_POST['txt_last_name'];

    $email = $_POST['txt_email'];

    $role = $_POST['cb_role'];

    $account_status = $_POST['status'];

    echo $account_status;

    $sql = "INSERT INTO `tbl_user`(`username`, `password`, `first_name`, `last_name`, `email`, `status`, `role`) VALUES ('$username','$password','$first_name','$last_name','$email','$account_status','$role')";

    $result = $conn->query($sql);

    if ($result == TRUE) {
        header('Location: ../views/admin.php?success=1');
        exit;
    } else {

        echo "Error:" . $sql . "<br>" . $conn->error;
        header('Location: ../views/admin.php?update_success=2');
        exit;
    }
    $conn->close();
}
