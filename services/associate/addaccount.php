<?php
require('../../config/dbconfig.php');
$account_no=$_POST['account_no'];
$ifsc_code=$_POST['ifsc_code'];
$user_id=$_POST['user_id'];
$user_type=$_POST['user_type'];

$sql="INSERT INTO `bank_account`(`account_no`, `ifsc_code`,`user_id`, `user_type`, `status`) VALUES ('$account_no','$ifsc_code',$user_id,$user_type,1)";
if ($conn->query($sql) === TRUE) {
    header('location:../../associate/accounts.php');
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }


?>