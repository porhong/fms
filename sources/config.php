<?php

$servername = "dns.badbotsolution.xyz:3307";

$username = "root";

$password = "Cambodia168";

$dbname = "FMS_DB";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);
}
