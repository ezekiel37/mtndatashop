<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/style.css">
<?php 
require('./connect.php');
 $myid = $_GET['userid'];
 //echo $myid;
 $myusers = "select * from subadmin where id=$myid";
 $resuser = $conn->query($myusers);
 $rows = mysqli_fetch_assoc($resuser);
 echo ($rows['UserName']);
 echo ($rows['MobileNumber']);
 echo ($rows['Plan']);
 $order = $rows['UserName'];
 $sql="SELECT SUM(`amount`) as totalamount  FROM `adminpayments` WHERE `subname`='$order'";
 $result = mysqli_query($conn,$sql);
 $row = mysqli_fetch_array($result);
 $amount = $row['totalamount'];
 echo $amount;
 ?>
<!-- begin -->
<div>
  <p class="my-5">Payment History</p>
</div>
<table class="table table-primary table-striped table-hover table-bordered border-primary">
  <thead class="table-success">
  <tr>
     
     
      <th scope="col">Product</th>
   
      <th scope="col">Payment date</th>
      
      
    </tr>
  </thead>
  <tbody>
 
  </tbody>
</table>
 