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
  </style>
</head>

<body>
  <div class="dash">
    <?php
    include("sidemenu.php")
    ?>

  
      <table class="table mt-5 ml-4 table-primary table-striped table-hover table-bordered border-primary">
        <thead class="table-success">
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Amount</th>
          
          </tr>
        </thead>
        <tbody>

          <?php
          require("./connect.php");
          $quer = "select * from plan";
          $res = $conn->query($quer);
          while ($rows = mysqli_fetch_assoc($res)) {
            echo("<tr>");
            echo ("<td>".$rows['id']."</td>");
            echo ("<td>".$rows['planname']."</td>");
            echo ("<td>".$rows['amount']."</td>");
           
            echo("</tr>");
          }
           
           ?>
     
         
        </tbody>
      </table>

    </div>
    <!--end plan-->
    <!--edit modal -->
    <!-- Button trigger modal -->

  </div>
  <script src="../js/jquery-3.5.1.min.js"></script>
  <script src="../js/bootstrap.bundle.min.js"></script>
 
</body>

</html>