<?php 
require('../../config/dbconfig.php');

$adhar=$_GET['adhar'];
$pan=$_GET['pan'];
$id=$_GET['id'];
$address=$_GET['address'];

$insql="INSERT INTO `document`(`adhar_no`, `pan_no`, `address`, `adhar_verified`, `pan_verified`) VALUES ('$adhar','$pan','$address',1,1)";
if ($conn->query($insql) === TRUE) {
    $last_id = $conn->insert_id;
    $udpsql="UPDATE `customer` SET `document_id`=$last_id  WHERE `customer_id`=$id";
    $conn->query($udpsql);
    header('location:../../customer/profile.php');


  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

?>