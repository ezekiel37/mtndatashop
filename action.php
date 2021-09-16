<?php 
require 'connect.php';
$key = implode('-', str_split(substr(strtolower(md5(microtime().rand(1000, 9999))), 0, 30), 6));
echo $key;
?>
<?php
if(isset($_POST['addnew'])){
    if( empty($_POST['subname']) || empty($_POST['plan'])
        || empty($_POST['amount']) || empty($_POST['subphone']) || empty($_POST['subpassword']) )
    {
        echo "Please fillout all required fields";
    }else{
        $username = $_POST['subname'];
        $plan = $_POST['plan'];
        $amount = $_POST['amount'];
        $mobile = $_POST['subphone'];
        $pass = $_POST['subpassword'];
        $token = $key;
        echo "</br>";
echo $username .'</br>';
echo $plan .'</br>';
echo $amount .'</br>';
echo $mobile .'</br>';
echo $pass .'</br>';
echo $token .'</br>';
        
        $sql = "INSERT INTO `subadmin`(`UserName`, `Plan`, `apptoken`, `Amount`, `MobileNumber`, `pass_word`,`status`) 
        VALUES ('$username','$plan','$token','$amount','$mobile','$pass','0')";
            
        if(mysqli_query($conn,$sql)){
            echo "<div class='alert alert-success'>Successfully added new user</div>";
        }else{
            echo "<div class='alert alert-danger'>Error: There was an error while adding new user</div>";
        }
    }
}
?>
