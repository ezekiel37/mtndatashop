<?php 
require_once('connect.php');

if(!empty($_POST)) {
 
 $amount = $_POST['wamount'];
 //echo $name;
 //echo $amount;
 mysqli_query($conn, "insert into `account` (`wallet`) values ('$amount')"); 
 
echo $name."</br>";

echo $amount."</br>";
}
?>