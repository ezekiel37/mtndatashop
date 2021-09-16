<?php
$servername = "localhost";
$username = "jrikhub";
$password = "jrikhub001";
$db_name = "jrikhub";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
    echo "success";
}
?>