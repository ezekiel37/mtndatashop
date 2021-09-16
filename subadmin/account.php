<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
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
<button type="button" class="my-3 btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Make payment
</button>
<div style="margin-left:3rem;display:inline">Account Status : pending</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Money</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <p>Make payment of ......
       to this account number 84448494930
       Name :5695669605
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      
      </div>
    </div>
    </div>
</div>
<!-- end toolbar -->

</div>
<!--end toolbar-->
<!--grid box -->
<div class="panelboard">
<div class="container-fluid">
    <div class="row">
    <?php
          require("./connect.php");
          $quer = "select * from gbengaccount";
          $mysum= "SELECT SUM(`amount`) as totalamount  FROM `adminpayments` WHERE `subname`='gbenga'";
          $customsum = $conn->query($mysum);
          $rowsum = mysqli_fetch_assoc($customsum);
          $total = $rowsum['totalamount'];
          
          
          $res = $conn->query($quer);
          
          if(mysqli_num_rows($res) > 0){
            mysqli_query($conn, "UPDATE `gbengaccount` SET 'total'='total' + '$total' , 'remaining'='remaining'+ '$total'");
          }
          else{
           mysqli_query($conn, "insert into `gbengaccount` (`total`, `remaining`) values ('$total', '$total')"); 
          }
          $rows = mysqli_fetch_assoc($res); 

       ?>   
           <div class="col-lg-3">
            <div class="mb-3 shadow card">
                <p>wallet amount</p>
                <span><?php echo($rows['total']) ?> naira</span>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="mb-3 shadow card">
                <p>Balance</p>
                <span><?php echo($rows['remaining']) ?> naira </span>
            </div>
        </div> 
        <div class="col-lg-3">
            <div class="mb-3 shadow card">
                <p>Amount Shared</p>
                <span> <?php echo($rows['shared']) ?> naira</span>
            </div>
        </div>
         
        <div class="col-lg-3">
            <div class="mb-3 shadow card">
                <p>Profits</p>
                <span> <?php echo($rows['profits']) ?> naira</span>
            </div>
        </div>   
           </div>
</div>

</div>
<!--end grid box -->
</div>
<!--end dashboard -->
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