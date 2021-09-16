<?php 
require('connect.php');

if(!empty($_POST)) {
$sname= $_POST['subname'];
 $sphone = $_POST['subphone'];
 $semail = $_POST['subemail'];
 $spassword = $_POST['subpassword'];
echo $sname;
echo $sphone;
echo $semail;
echo $spassword;
function custom_copy($src, $dst) { 
  
    // open the source directory
    $dir = opendir($src); 
  
    // Make the destination directory if not exist
    @mkdir($dst); 
  
    // Loop through the files in source directory
    while( $file = readdir($dir) ) { 
  
        if (( $file != '.' ) && ( $file != '..' )) { 
            if ( is_dir($src . '/' . $file) ) 
            { 
  
                // Recursively calling custom copy function
                // for sub directory 
                custom_copy($src . '/' . $file, $dst . '/' . $file); 
  
            } 
            else { 
                copy($src . '/' . $file, $dst . '/' . $file); 
            } 
        } 
    } 
  
    closedir($dir);
} 
  
$src = "../subadmin";
  
$dst = "../$sname";
  
custom_copy($src, $dst);
function createtable(){
    // $account = $sname . '_account';
// $plan  = $sname . '_plan';
// $users = $sname . '_users';
// $errors = [];

// $table1 = "CREATE TABLE $account (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     wallet DOUBLE,
//     balance DOUBLE,
//     amountshared DOUBLE,
//     profits DOUBLE,
//     createdate TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//     )";

// $table2 = "CREATE TABLE $plan (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     planname VARCHAR(30)  NULL,
//     amount DOUBLE NULL,
//     createdate TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//     )";

// $table3 = "CREATE TABLE $users(
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     name  VARCHAR(30) NOT NULL,
//     email VARCHAR(50) NOT NULL,
//     phone  VARCHAR(50) NOT NULL,
//     amount DOUBLE,
//     usercomment VARCHAR(50) NOT NULL,
//     plan  VARCHAR(30) NOT NULL,
//     status BOOLEAN,
//     createdate TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//     )";
// $tables = [$table1, $table2, $table3];


// foreach($tables as $k => $sql){
//     $query = @$conn->query($sql);

//     if(!$query)
//        $errors[] = "Table $k : Creation failed ($conn->error)";
//     else
//        $errors[] = "Table $k : Creation done";
// }


// foreach($errors as $msg) {
//    echo "$msg <br>";
// }
}





//  //$hello = mysqli_query($conn, "UPDATE `plan` SET `planname`= '$name', `amount`= $amount WHERE `id` = $planid ");
//  //mysqli_query($conn, "insert into `plan` (`planname`,  `amount`) values ('$name', '$amount')"); 
// //  if($hello){
// //      echo "okay";
// //      header("location:plan.php");
// //     }
// //  else{
// //      echo "fill in all values";

// //  }
// // //echo $name."</br>";

// //echo $amount."</br>";
}
?>