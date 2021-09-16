<?php 
require('connect.php');

if(!empty($_POST)) {
 $name = $_POST['proname'];
 $api = $_POST['proapi'];
 $offline = $_POST['prooffline'];
 $cat = $_POST['procat'];
 $ref = $_POST['proref'];
 $cost = $_POST['procost'];

echo $name;
echo $api;
echo $offline;
echo $cat;
echo $ref;
echo $cost;
 

$sql = mysqli_query($conn, "insert into `product` (`productname`,`api`,`offline`,`category`,`ref`,`cost`) values ('$name', '$api','$offline','$cat','$ref','$cost')"); 
 if($sql){
     echo "okay";
 }
 else{
     echo $conn->error;
 }
//echo $name."</br>";

//echo $amount."</br>";
}
?>