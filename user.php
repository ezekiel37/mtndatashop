<?php
require 'connect.php';
$id = $_GET['name'];
echo $id;

$record = mysqli_query($conn, "SELECT * FROM subadmin WHERE UserName='$id'");

 $n = mysqli_fetch_array($record);

    $name = $n['UserName'];
    $wallet = $n['Amount'];
    $address = $n['Plan'];
    $token = $n['apptoken'];

?>
<div>
<?php echo $name; ?>
</div>

<div>
<?php echo $wallet; ?>
</div>
<div>
<P>App Token: <?php echo $token; ?> </p>
</div>