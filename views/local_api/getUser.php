<?php
if (isset($_GET['id'])) {
    $user_id = $_GET['id'];
}
include '../../sources/function/config.php';
$sql = "SELECT `id`,`username`, `password`,`email`,`first_name`,`last_name`,`status`,`role` FROM `tbl_user` WHERE `id`= $user_id;";
$result = $conn->query($sql);
if ($result == TRUE) {
    $userdata = $result->fetch_assoc();
    $return_arr[] = array(
        'id' => $userdata['id'],
        'username' => $userdata['username'],
        'password' => $userdata['password'],
        'email' => $userdata['email'],
        'first_name' => $userdata['first_name'],
        'last_name' => $userdata['last_name'],
        'status' => $userdata['status'],
        'role' => $userdata['role']
    );
    // Encoding array in JSON format
    echo json_encode($return_arr);
}
