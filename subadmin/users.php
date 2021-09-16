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
<table class="table table-primary table-striped table-hover table-bordered border-primary">
  <thead class="table-success">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <!--<th scope="col">Email</th>-->
      <th scope="col">Phone</th>
      <th scope="col">Plan</th>
      <th scope="col">Status</th>
      <th scope="col">Amount</th>
      
      <th scope="col">Action</th>
      <th scope="col">Comment</th>
    </tr>
  </thead>
  <tbody>
  <?php
          require("./connect.php");
          $myusers = "select * from gbengausers";
          $resuser = $conn->query($myusers);
          while ($rows = mysqli_fetch_assoc($resuser)) {
            echo("<tr>");
            echo ("<td>".$rows['id']."</td>");
            echo ("<td><a href='userprofile.php?userid=".$rows['id']."'>");
            echo ($rows['username'] ."</a></td>");
             
           
           // echo ("<td>".$rows['email']."</td>");
            echo ("<td>".$rows['phone']."</td>");
            echo ("<td>".$rows['plan']."</td>");
            if ($rows['status'] == 0) {
                echo("<td> Pending </td>");
            }
            else {
              echo("<td> Activated </td>");
            }
            echo ("<td>".$rows['amount']."</td>");
            if ($rows['status'] == 0) {
            echo("<td> <a href='activation.php?myid=".$rows['id']."'>activate</a> </td>");
          }
          else {
            echo("<td> <a href='deactivation.php?myid=".$rows['id']."'>deactivate</a> |<a href='#'>Delete </a> </td>");
          }
          //echo ("<td>".$rows['usercomment']."</td>");
 
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