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
input{
  width:500px;
}
button{
  width:500px; 
}
</style>
</head>
<body>
<div class="section">
<form>
  <div class="mb-2">
    <label for="exampleInputEmail1" class="form-label">Username or Phone Number</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
 
  <div class="mb-4">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
 
  <button type="submit" class="btn btn-primary"><a href="admin.php">Submit</a></button>
</form>
</div>
<script src="../js/jquery-3.5.1.min.js"></script>
  <script src="../js/bootstrap.bundle.min.js"></script>   
</body>
</html>
