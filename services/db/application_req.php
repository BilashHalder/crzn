<?php
require('../../config/dbconfig.php');
$customer_id=$_POST['customer_id'];
$req_type=$_POST['req_type'];

$sql="INSERT INTO `request`( `request_type`, `customer_id`) VALUES ($req_type,$customer_id) ";
if ($conn->query($sql) === TRUE) {
    if($req_type==1)
    header('location:../../customer/applycsp.php');
    else
    header('location:../../customer/applyba.php');
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }


?>