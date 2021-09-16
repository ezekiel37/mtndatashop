<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">

<style type="text/css">
*{
    margin:0px;
    padding:0px;

}
.section{
    display:flex;
    height:100vh;
    width:100%;
    overflow:hidden;
    justify-content: center;
    align-items: center;
}
</style>
</head>
<body>
<div class="section">
<form action="registerfunction.php" method="POST">
<div class="mb-2">
    <label for="exampleInputPassword1" class="form-label">Username *</label>
    <input type="text" name="uname" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-2">
    <label for="exampleInputEmail1" class="form-label">Plan*</label>
    <input type="text" name="uplan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

  </div>
  <div class="mb-2">
    <label for="exampleInputPassword1" class="form-label">Phone *</label>
    <input type="text" name="uphone" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-2">
    <label for="exampleInputPassword1" class="form-label">Amount *</label>
    <input type="text" name="uamount" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 ">
   
    
  </div>
  <button type="submit" class="btn btn-primary">Register</button>
 <p>Already have an account? <a class="form-check-label" for="Forgot" href="login.php">Login</a></p>

</form>
<!-- Button trigger modal -->

</div>
<script src="../js/jquery-3.5.1.min.js"></script>
  <script src="../js/bootstrap.bundle.min.js"></script>   
</body>
</html>
