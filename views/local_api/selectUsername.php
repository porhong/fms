<?php
include "../../sources/function/config.php";

$data = $_GET['q'];

$arr_data = preg_split('@,@', $data);
$value = "";
$col = "";
$value = $arr_data[0];
$col = $arr_data[1];
$sql = "SELECT `$col` FROM `tbl_user` WHERE `$col` LIKE '$value';";

$result = $conn->query($sql);

$username = $result->fetch_assoc();

if ($username != "") {
    $username = implode($username);
    echo $username;
}
