<?php
if (isset($_POST['create_user'])) {
    $username = $_POST['txt_username'];

    $password = md5($_POST['txt_password']);

    $first_name = $_POST['txt_first_name'];

    $last_name = $_POST['txt_last_name'];

    $email = $_POST['txt_email'];

    $role = $_POST['cb_role'];

    if (isset($_POST['sw_status'])) {

        $account_status = 1;
    } else {

        $account_status = 0;
    }

    echo $account_status . " select = " . $role;

    $sql = "INSERT INTO `tbl_user`(`username`, `password`, `first_name`, `last_name`, `email`, `status`, `role`) VALUES ('$username','$password','$first_name','$last_name','$email','$account_status','$role')";

    $result = $conn->query($sql);

    if ($result == TRUE) {
        header('Location: ../views/setting.php?success=1');
        exit;
    } else {

        echo "Error:" . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
