<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/style.css">
<style type="text/css">
.mytable{
    width:95%;
    margin-left:1%;
    margin-right:3%;
    margin-top:20px;
}
.has-search .form-control-feedback {
    position: absolute;
    z-index: 2;
    display: block;
    width: 2.375rem;
    height: 2.375rem;
    line-height: 2.375rem;
    text-align: center;
    pointer-events: none;
    color: #aaa;
}
</style>
</head>
<body>
<div class="dash">
  <?php
  include("sidemenu.php")
  ?> 
<div class="mytable">
<!--searchbar-->
<div class="container mb-3">
<div class="form-group has-search">
    <span class="fa fa-search form-control-feedback"></span>
    <input type="text" class="form-control" placeholder="Search">
  </div>
</div>
<!--end searchbar-->
<!--sub admin -->
<?php include("create.php") ?>
<!--end sub admin-->
<table class="table table-primary table-striped table-hover table-bordered border-primary">
  <thead class="table-success">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
   
      <th scope="col">Phone</th>
      <th scope="col">Plan</th>

      <th scope="col">Amount</th>
      
      <th scope="col">Action</th>
     
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
  <?php
          require("./connect.php");
          $myusers = "select * from subadmin";
          $resuser = $conn->query($myusers);
          while ($rows = mysqli_fetch_assoc($resuser)) {
            echo("<tr>");
            echo ("<td>".$rows['ID']."</td>");
            echo ("<td><a href='userprofile.php?userid=".$rows['ID']."'>");
            echo ($rows['UserName'] ."</a></td>");
             
         
            echo ("<td>".$rows['MobileNumber']."</td>");
            echo ("<td>".$rows['Plan']."</td>");
           
            echo ("<td>".$rows['Amount']."</td>");
         
            echo("<td> <a href='activation.php?myid=".$rows['ID']."'>Edit</a> 
        
           <a href='deactivation.php?myid=".$rows['ID']."'>|<a href='#'>Delete</a>
          
            </td>");
       
        
          echo ("<td>".$rows['CreationDate']."</td>");
        }

          ?>
  </tbody>
</table>
 
</div> 
<!--end dashboard -->
</div>  
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>