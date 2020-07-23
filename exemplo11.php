<?php 


$json = '{"countryId":"84","productId":"1","status":"0","opId":"134"}';
$json = json_decode($json, true);

//echo json_encode($json);
 echo $json['countryId'];
 echo $json['productId'];
 echo $json['status'];
 echo $json['opId'];

?>