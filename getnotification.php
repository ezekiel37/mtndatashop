<?php
require 'connect.php';
    $sales = '';
    // Set the query String
    $sql = "SELECT * FROM transaction where `status`= 1";
    
    // Reading the Specific Record
    $query = $conn->query($sql);

    // Check if record exist
    if ($query->num_rows > 0) {
        // Loop through the retrieve records
        while($record = $query->fetch_assoc()) {                
    
            $sales .= '
            <div>Customer: '.$record["ProductName"]. ' <br> date: '.$record["CreationDate"].' <br> Transaction #: '.$record["Amount"].'  </div>';                            
        }
    }
    echo $sales;
?>

