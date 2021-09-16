<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plan</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/style.css">
<style type="text/css">
.search{
   width:70%;
    height:80px;
    margin-left:2rem;
}
.mybtn{
    float:right;
    
}
.panelboard{
    width:100%;

    height:auto;
    margin-left:5rem;
}
.card{
    width:12rem;
}
.card p{
    color:white;
    font-size:1.2em;
    text-align:center;
    padding-top:.5em;
    padding-bottom:.7em;
    background:rgb(87, 52, 240);
}
.card span{
    font-size:1.2em;
    text-align:center; 
    padding-bottom:.7em;
}
</style>
</head>
<body>
<div class="dash">
  <?php
  include("sidemenu.php")
  ?>
<!--otherside-->
<div class="others">
<!--toolbar -->  
<div class=" search">

<!--end grid box -->
</div>
<!--end dashboard -->
</div>

</div>
<script src="../js/jquery-3.5.1.min.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
<script>
    $('#addmoney').submit(function(e) {
      //alert("hello");
      e.preventDefault();
      
      var amount = $('#amount').val();
      //alert(name);
       alert(amount);
      $.ajax({
        type: "POST",
        url: "wallet.php",
        data: {
         
          "wamount": amount
        },
        success: function(data) {
          console.log("success");
        //  alert(data);
          $('#exampleModal').modal('hide');
          // $('.result').html(data);
          location.reload();
          // $('#contactform')[0].reset();
        }
      });
    });
  </script>
</body>
</html>