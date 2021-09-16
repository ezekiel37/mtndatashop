<?php 
require_once('connect.php');



if(!empty($_POST)) {
    $walletamount = $_POST['subwall'];
 $tempamount = $_POST['temp_amount'];
echo $tempamount;
$balance = $walletamount - $tempamount;
 mysqli_query($conn, "UPDATE `account` SET `balance`= $balance WHERE 1"); 
 
echo $name."</br>";

echo $amount."</br>";
}
?>