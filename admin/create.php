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


    .mybtn {
      margin-left:3em;

    }
    .form-label>span{
      color:red;
      font-size:1rem;
    }
  </style>
</head>

<body>
  <div >
   

    <div >
      <!--search and add -->
      <!-- Button trigger modal -->
      <div class="search">
        <button type="button" class="my-3 btn mybtn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Add a SubAdmin
        </button>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add a Subadmin</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <!--form-->
              <form id="subform" action="../action.php" method="POST">
                <div class="mb-2">
                  <label for="exampleInputEmail1" class="form-label">Username</label>
                  <input name="subname" type="text" class="form-control" id="planname" aria-describedby="emailHelp">
               </div>
               <div class="mb-2">
                  <label for="exampleInputEmail1" class="form-label">Phonenumber</label>
                  <input name="subphone" numeric type="text" class="form-control"  aria-describedby="emailHelp">
               </div>
               <div class="mb-2">
                  <label for="exampleInputPassword1" class="form-label">Plan</label>
                  <input name="plan" type="text" class="form-control" >
                </div>
             
                <div class="mb-2">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input name="subpassword" type="password" class="form-control" >
                </div>

                <button type="submit" name="addnew" id="btnsubmit" class="btn btn-primary">Create</button>
              </form>
              <!--end form -->
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>

            </div>
          </div>
        </div>
      </div>
      <!-- end search -->
     

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
                  <label for="exampleInputEmail1" class="form-label">Username</label>
                  <input name="subname" type="text" class="form-control" id="planname" aria-describedby="emailHelp">
               </div>
               <div class="mb-2">
                  <label for="exampleInputEmail1" class="form-label">Phonenumber</label>
                  <input name="subphone" numeric type="text" class="form-control"  aria-describedby="emailHelp">
               </div>
               <div class="mb-2">
                  <label for="exampleInputPassword1" class="form-label">Email</label>
                  <input name="subemail" type="email" class="form-control" >
                </div>
                <div class="mb-2">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input name="subpassword" type="password" class="form-control" >
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
 
</body>

</html>