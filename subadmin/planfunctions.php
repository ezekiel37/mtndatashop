<?php 
require('connect.php');

if(!empty($_POST)) {
 $name = $_POST['pname'];
 $amount = $_POST['pamount'];
 //echo $name;
 //echo $amount;
 mysqli_query($conn, "insert into `plan` (`planname`,  `amount`) values ('$name', '$amount')"); 
 
//echo $name."</br>";

//echo $amount."</br>";
}
?>