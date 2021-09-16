<?php 
require('connect.php');
session_start();
if(!empty($_POST) ) {
   // $swallet = $_POST['suballet'];
 $name = $_POST['id'];
 $amount = $_POST['shareamount'];
 $comment = $_POST['comment'];
 echo $name;
 echo $amount;
 echo $comment;
 
// $myk = mysqli_query($conn, "UPDATE `subadmin` SET `Amount`=`Amount` + '$amount' WHERE `UserName` = '$name'");
//$check = mysqli_query($conn, "insert into `adminpayments` (`subname`,  `amount` ,`comments`) values ('$name', '$amount','$comment')"); 
  
  if (mysqli_error($conn))
     {
      // an error eoccurred
      echo mysqli_error($conn);
     // echo mysqli_error($conn, $myk);
     $_SESSION['msg']="An Errror occured , Check if all your fields are filled";
    // header("Location: share.php");
    }
   else{
      $_SESSION['msg']="Shared successfully";
 // header("Location: share.php");
  
     }
 // echo "Successful";
//      mysqli_query($conn, "UPDATE `users` SET `amount`=$amount, `usercomment`= $comment WHERE `phone` = $name");
 
//      $balance = $swallet - $amount;
//      mysqli_query($conn, "UPDATE `account` SET `balance`= $balance WHERE 1");

    
 //header("Location: share.php");
//header("Location:./share.php");
 }
?>