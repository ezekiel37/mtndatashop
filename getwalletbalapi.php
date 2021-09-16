<?php
header("Content-Type:application/json");
//if (isset($_GET['order_id']) && $_GET['order_id']!="") {
 require('connect.php');
 //$order= $_GET['order_id'];
 $order = "ezekielll";
 $sql="SELECT SUM(`amount`) as totalamount  FROM `adminpayments` WHERE `subname`='$order'";
 $result = mysqli_query($conn,$sql);
 $len=mysqli_num_rows($result);
//  echo $len;
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
 if($row['totalamount']!=null){
 $amount = $row['totalamount'];
 $response_code = 200;
 $response_desc = 'success';
     $data['data']=array(
     "amount"=>$amount,
     "code"=>"200",
     "message"=>"success"
     );
 //echo $amount;
 response($data);
 mysqli_close($conn);
 }
 elseif($row['totalamount']==null){
    $data['error']=array(
        
        "code"=>"400",
        "message"=>"No Record Found"
        );
 response($data);
 }
 else{
 response(NULL, NULL, 400,"Invalid Request");
 }
}
function response($data){
 $json_response = json_encode($data);
 echo $json_response;
}
?>