<?php 
require_once('connect.php');
 $myid = $_GET['myid']; 

  mysqli_query($conn, "UPDATE `gbengausers` SET `status`=1 WHERE id = $myid"); 
 

header("location:users.php");
// }
?>