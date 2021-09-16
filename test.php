<?php
$url = 'https://payments.baxipay.com.ng/api/baxipay/billers/category/all';

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, [
  
  'x-api-key: 5adea9-044a85-708016-7ae662-646d59',
  'Content-Type: application/json'
]);
$response = curl_exec($curl);
curl_close($curl);
$json = $response . PHP_EOL;


function printValues($arr) {
  global $count;
  global $values;
  
  // Check input is an array
  if(!is_array($arr)){
      die("ERROR: Input is not an array");
  }
  
  /*
  Loop through array, if value is itself an array recursively call the
  function else add the value found to the output items array,
  and increment counter by 1 for each value found
  */
  foreach($arr as $key=>$value){
      if(is_array($value)){
          printValues($value);
      } else{
          $values[] = $value;
          $count++;
      }
  }
  
  // Return total count and values found in array
  return array('total' => $count, 'values' => $values);
}


$arr = json_decode($json,TRUE);
//print_r($arr);
//echo "<h3>" . $result["total"] . " value(s) found: </h3>";
//echo implode("<br>", $result["values"]);
foreach ($arr as $key => $value) {
  if (!is_array($value)) {
     // echo $key . '=>' . $value . '<br />';
  } else {
      foreach ($value as $key => $val) {
         foreach($val as $key => $va){
           echo $key. '=>' .$va. '</br>';
         }
      }
  }
}
?>