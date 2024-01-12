
<?php
// convert illegal input value to ligal value formate
function legal_input($value)
{
    $value = trim($value);
    $value = stripslashes($value);
    $value = htmlspecialchars($value);
    return $value;
}
// // function to insert user data into database table
function insert_data($type_name)
{

    session_start();
    if (isset($_SESSION['userID'])) {
        $user_id = $_SESSION['userID'];
    }
    include '../../sources/function/config.php';

    $sql = "INSERT INTO `tbl_tran_type`(`name`, `user_id`) VALUES ('$type_name','$user_id')";
    $result = $conn->query($sql);
    if ($execute == true) {
        echo "User data was inserted successfully";
    } else {
        echo  "Error: " . $sql . "<br>" . mysqli_error($db);
    }
}
$type_name     = legal_input($_POST['type_name']);
insert_data($type_name)
?>