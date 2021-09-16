<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <style type="text/css">
    .search {
      margin-right: 3em;
    }

    .mybtn {
      float: right;

    }
    .form-label>span{
      color:red;
      font-size:1rem;
    }
    .api{
      color:red;
    }
  </style>
</head>

<body>
  <div class="dash">
    <?php
    include("sidemenu.php")
    ?>

    <div class="users">
      <!--search and add -->
      <!-- Button trigger modal -->
      <div class="search">
        
      </div>
     
           
          
      
      <!-- end search -->
      <table class="mt-5 table table-primary table-striped table-hover table-bordered border-primary">
        <thead class="table-success">
          <tr>
            <th scope="col">Id</th>
            <th scope="col">ProductName</th>
            <th scope="col">Category</th>
            <th scope="col">Referral<br>Commission</th>
            <th scope="col">Cost</th>
         
          </tr>
        </thead>
        <tbody>

          <?php
          require("./connect.php");
          $quer = "select * from product";
          $res = $conn->query($quer);
          while ($rows = mysqli_fetch_assoc($res)) {
            echo("<tr>");
            echo ("<td>".$rows['id']."</td>");
            echo ("<td> Productname:".$rows['productname']. 
            " <br><span class='api'>Api id:</span>" .$rows['api'].
            "<br><span class='api'>Offline:</span>" .$rows['offline'].
            "</td>");
            echo ("<td>".$rows['category']."</td>");
            echo ("<td>".$rows['ref']."</td>");
            echo ("<td>".$rows['cost']."</td>");
          //  echo ("<td> <a data-bs-toggle='modal' data-bs-target='#examplemod' href='#'>edit </a>|<a href='#'>Delete </a> </td>");
            echo("</tr>");
          }
           
           ?>
     
         
        </tbody>
      </table>

    </div>
    <!--end plan-->
    <!--edit modal -->
    <!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="examplemod" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit a plan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <!--form-->
         <form id="editplanform" method="POST" action="editplan.php">
         <div class="mb-2">
                  <label for="exampleInputEmail1" class="form-label">Id <span>*</span></label>
                  <input name="editid" type="text" class="form-control" id="planid" 
                   aria-describedby="emailHelp" required>

                </div>
                <div class="mb-2">
                  <label for="exampleInputEmail1" class="form-label">Name</label>
                  <input name="editname" type="text" class="form-control" id="planname" aria-describedby="emailHelp" required>

                </div>
                <div class="mb-2">
                  <label for="exampleInputPassword1" class="form-label">Amount</label>
                  <input name="editamount" type="text" class="form-control" id="amount" required>
                </div>

                <button type="submit" id="btnedit" class="btn btn-primary">Submit</button>
              </form>
              <!--end form -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

    <!--end edit modal-->
  </div>
  <script src="../js/jquery-3.5.1.min.js"></script>
  <script src="../js/bootstrap.bundle.min.js"></script>
  <script>
    $('#addplanform').submit(function(e) {
      //alert("hello");
      e.preventDefault();
      var name = $('#proname').val();
      var api = $('#proapi').val();
      var offline = $('#prooffline').val();
      var cat = $('#procat').val();
      var ref = $('#proref').val();
      var cost = $('#procost').val();
      //alert(name);
      // alert(amount);
      $.ajax({
        type: "POST",
        url: "productfunction.php",
        data: {
          "proname": name,
          "proapi": api,
          "prooffline": offline,
          "procat": cat,
          "proref": ref,
          "procost":cost
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