<?php 
require('connect.php');

if(!empty($_POST)) {
 $name = $_POST['uname'];
 $amount = $_POST['uamount'];
 $phone =$_POST['uphone'];
 $plan= $_POST['uplan'];
 echo $name;
 echo $amount;
 echo $phone;
 echo "<br>";
 echo $plan;
 $sql = mysqli_query($conn, "insert into `gbengausers` (`username`, `phone` ,`plan`  ,`amount`) values ('$name', '$phone', '$plan', '$amount')"); 
 
 if(!$sql){
     echo mysqli_error($conn);
 }
//echo $name."</br>";

//echo $amount."</br>";
}
?>