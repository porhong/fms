<?php
// Current page number
if (isset($_GET['page'])) {
    $currentPage = $_GET['page'];
} else {
    $currentPage = 1;
}
if (isset($_POST['btn_update_user'])) {
    $user_id = $_POST['txt_id_update'];

    $username = $_POST['txt_username_update'];

    $password = md5($_POST['txt_password_update']);

    $first_name = $_POST['txt_first_name_update'];

    $last_name = $_POST['txt_last_name_update'];

    $email = $_POST['txt_email_update'];

    $role = $_POST['cb_role_update'];

    $account_status = $_POST['status_update'];

    $sql_select_password = "SELECT `password` FROM `tbl_user` WHERE `id`='$user_id';";

    $result_password = $conn->query($sql_select_password);

    $old_password = $result_password->fetch_assoc();

    if ($old_password["password"] == $_POST['txt_password_update']) {
        $sql = "UPDATE `tbl_user` SET `username`='$username',`first_name`='$first_name',`last_name`='$last_name',`email`='$email',`status`='$account_status',`role`='$role' WHERE `id`='$user_id'";
    } else {
        $sql = "UPDATE `tbl_user` SET `username`='$username',`password`='$password',`first_name`='$first_name',`last_name`='$last_name',`email`='$email',`status`='$account_status',`role`='$role' WHERE `id`='$user_id'";
    }

    $result = $conn->query($sql);

    if ($result == TRUE) {
        header('Location: ../views/admin.php?update_success=1&page=' . $currentPage);
        exit;
    } else {
        header('Location: ../views/admin.php?update_success=2&page=' . $currentPage);
        exit;
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
}
