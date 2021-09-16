<?php 
require('connect.php');

if(!empty($_POST)) {
$planid = $_POST['editid'];
 $name = $_POST['editname'];
 $amount = $_POST['editamount'];
 echo $planid;
 echo $name;
 echo $amount;
 $hello = mysqli_query($conn, "UPDATE `plan` SET `planname`= '$name', `amount`= $amount WHERE `id` = $planid ");
 //mysqli_query($conn, "insert into `plan` (`planname`,  `amount`) values ('$name', '$amount')"); 
 if($hello){
     echo "okay";
     header("location:plan.php");
    }
 else{
     echo "fill in all values";

 }
//echo $name."</br>";

//echo $amount."</br>";
}
?>