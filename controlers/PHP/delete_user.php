<?php
include "../../sources/function/config.php";

if (isset($_GET['user_deleted'])) {

    $user_id = $_GET['user_deleted'];

    $sql = "DELETE FROM `tbl_user` WHERE `id`='$user_id'";

    $result = $conn->query($sql);

    if ($result == TRUE) {
        header('Location: ../../views/admin.php?user_deleted=1');
        exit;
    } else {
        header('Location: ../../views/admin.php?user_deleted=2');
        exit;
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
}
