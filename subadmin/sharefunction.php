<?php 
require_once('connect.php');
session_start();
if(!empty($_POST) ) {
    $swallet = $_POST['suballet'];
 $name = $_POST['id'];
 $amount = $_POST['shareamount'];
 $comment = $_POST['comment'];
 if ($amount > $swallet) {
    $_SESSION['msg']="Insufficient balance";
    
  //   header("Location: share.php");
 }
 else{
     echo $swallet;

     echo $amount;
     echo $name;
     mysqli_query($conn, "UPDATE `gbengausers` SET `amount`=`amount` + '$amount', `comment`= '$comment' WHERE `username` = '$name'");
  // $check = mysqli_query($conn, "insert into `adminpayments` (`subname`,  `amount` ,`comments`) values ('$name', '$amount','$comment')"); 
 
 
     echo mysqli_error($conn);
    // $balance = $swallet - $amount;
    // mysqli_query($conn, "UPDATE `gbengaccount` SET `remaining`= $balance WHERE 1");
    // mysqli_query($conn, "UPDATE `gbengaccount` SET `shared`= `shared` + $amount WHERE 1");
    // $_SESSION['msg']='Shared successfully';
    // header("Location:share.php");
 }
}
?>