<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Share</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/style.css">
<script src="../js/jquery-3.5.1.min.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script> 
<style type="text/css">
.shareform{
    display:flex;
    justify-content: center;
    width:100%;
    margin-top:3em;
}
form{
    width:18rem;
}
#display{
  width:100%;
  min-height: 40px;
  
  display:none;
}
</style>
</head>
<body>
<div class="dash">
  <?php
  include("sidemenu.php")

?>
<?php
          require("./connect.php");
          $myaccount = "select * from subadmin";
          $resacct = $conn->query($myaccount);
          $rows = mysqli_fetch_assoc($resacct);
           
         
           

          ?>  
  <!--sharetable -->
  <div class="shareform">
  <?php
    session_start();
    if(isset($_SESSION["msg"]))
    { 
     $message = $_SESSION["msg"];
     ?>
        <!--- -->
        <div class="modal fade" id="exampleone" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p><?php echo $message ?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Ok</button>
      
      </div>
    </div>
  </div>
</div>
<!-- -->
     <?php
    echo "<script>
    var myModal = new bootstrap.Modal(document.getElementById('exampleone'));
    myModal.show();

</script>";
unset($_SESSION["msg"]);
    }
     ?>
  <form action="sharefunction.php" method="post" id="shareaform">

   <div class="mb-3">
    <label for="usernumber" class="form-label">UserNumber or Name </label>
    <input type="text" class="form-control" name="id" placeholder="UserNumber or Name" id="search">
  </div>
  <div id="display"></div>
  <div class="mb-3">
    <label for="exampleamount" class="form-label">Amount to Share</label>
    <input type="text"  name="shareamount" class="form-control" id="shareamount">
  </div>
  <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Comment</label>
  <textarea class="form-control" name="comment" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
  <button type="submit" class="btn btn-primary">Send Money</button>
</form>
  </div>
  <!--end sharetable -->
</div>

<script>
//Getting value from "ajax.php".
function fill(Value) {

   $('#search').val(Value);
  
   $('#display').hide();
}
$(document).ready(function() {
  
   $("#search").keyup(function() {
    $('#display').hide();
    console.log("okay");
       var name = $('#search').val();
     
       if (name == "") {
           //Assigning empty value to "display" div in "search.php" file.
           $("#display").html("");
       }
       //If name is not empty.
       else {
           //AJAX is called.
           $.ajax({
               //AJAX type is "Post".
               type: "POST",
               //Data will be sent to "ajax.php".
               url: "search.php",
               //Data, that will be sent to "ajax.php".
               data: {
                   //Assigning value of "name" into "search" variable.
                   search: name
               },
               //If result found, this funtion will be called.
               success: function(html) {
                   //Assigning result to "display" div in "search.php" file.
                   $("#display").html(html).show();
               }
           });
       }
   });
});
</script>
</body>
</html>