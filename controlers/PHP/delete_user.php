<?php
include "../../sources/function/config.php";
// Current page number
if (isset($_GET['page'])) {
    $currentPage = $_GET['page'];
} else {
    $currentPage = 1;
}

if (isset($_GET['user_deleted'])) {

    $user_id = $_GET['user_deleted'];

    $sql = "DELETE FROM `tbl_user` WHERE `id`='$user_id'";

    $result = $conn->query($sql);

    if ($result == TRUE) {
        header('Location: ../../views/admin.php?user_deleted=1&page=' . $currentPage);
        exit;
    } else {
        header('Location: ../../views/admin.php?user_deleted=2&page=' . $currentPage);
        exit;
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
}
