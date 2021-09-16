<?php


?>
<div class="container">

<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="box">
        <h3><i class="glyphicon glyphicon-plus"></i>&nbsp;Add New User</h3>
        <form action="./action.php" method="POST">
        <label for="firstname">Username</label>
        <input type="text" id="firstname" name="username" class="form-control"><br>
        <label for="lastname">Plan</label>
        <input type="text" name="plan" id="lastname" class="form-control"><br>
        <label for="amount">Amount</label>
        <input type="text" name="amount" id="amount" class="form-control">
       <br>
        <label for="contact">MobileNumber</label>
        <input type="text" name="mobile" id="mobile" class="form-control"><br>
        <br>
        <input type="submit" name="addnew" class="btn btn-success" value="Add New">
        </form>
    </div>
    </div>
    </div>
</div>
