<?php
require "connect.php";

if (isset($_POST['search'])) {

   $Name = $_POST['search'];
//Search query.
$Query = "SELECT UserName FROM subadmin WHERE UserName LIKE '%$Name%' OR MobileNumber LIKE '%$Name%' LIMIT 5";
//Query execution
   $ExecQuery = MySQLi_query($conn, $Query);
//Creating unordered list to display result.
if (mysqli_num_rows($ExecQuery) == 0){
 echo '
  <ul style="cursor:pointer; list-style:none;">
  <li>User not found</li>
  <ul>
 ';
}
 else{
   echo '
<ul style="cursor:pointer; list-style:none;">
   ';
   //Fetching result from database.
   while ($Result = MySQLi_fetch_array($ExecQuery)) {
       ?>
   
   <li onclick='fill("<?php echo $Result['UserName'];?>")'>
   <a>
  
       <?php echo $Result['UserName']; ?></a>
   </li>
   
   <?php
}}
}
?>
</ul>