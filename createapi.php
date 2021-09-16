<?php
header("Content-Type:application/json");
header("Acess-Control-Allow-Origin: *");
header("Acess-Control-Allow-Methods: POST");
header("Acess-Control-Allow-Headers:Acess-Control-Allow-Headers, Content-Type,Acess-Control-Allow-Methods, Authorization");

$data = json_decode(file_get_contents("php://input"), true);

$proname =$data["pname"];
$proprice =$data["pprice"];
$mobile =$data["pmobile"];
$app =$data["papptoken"];
if(!empty($proname) && 
!empty($proprice) &&
!empty($mobile) &&
!empty($app) 
){
require "connect.php";
$find = mysqli_query($conn, "SELECT * FROM subadmin WHERE apptoken='$app'");

 $n = mysqli_fetch_array($find);

    $name = $n['UserName'];
    $wallet = $n['Amount'];
    //$address = $n['Plan'];
   // $token = $n['apptoken'];



 $query = "INSERT INTO transaction(ProductName,Amount,MobileNumber,apptoken,subname) VALUES ('".$proname."','".$proprice."', '".$mobile."','".$app."','".$name.")";
if(mysqli_query($conn, $query) or die("Insert Query failed")){
    echo json_encode(array("message" => "Inserted" ,"status" => "true"));
}
else{
    echo json_encode(array("message" => "Error" ,"status" => "false"));
}
}
else{
    echo json_encode(array("message" => "No data" ,"status" => "false"));
}
?>