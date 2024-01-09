<?php
session_start();
if (isset($_SESSION['userID'])) {
    $user_id = $_SESSION['userID'];
}
include '../../sources/function/config.php';
$sql = "SELECT * FROM `tbl_tran_type` WHERE `user_id` = 79 OR `id` = $user_id;";
$result = $conn->query($sql);

$return_arr = array();

if ($result == TRUE) {
    while ($row = mysqli_fetch_object($result)) {
        array_push($return_arr, $row);
    }
    // Encoding array in JSON format
    echo json_encode($return_arr);
    exit();
}
