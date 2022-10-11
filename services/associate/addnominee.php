<?php
require('../../config/dbconfig.php');
$name=$_POST['name'];
$dob=$_POST['dob'];
$user_id=$_POST['user_id'];
$user_type=$_POST['user_type'];


$sql="INSERT INTO `nominee`(`name`, `dob`, `user_id`, `user_type`)  VALUES ('$name','$dob',$user_id,$user_type)";
if ($conn->query($sql) === TRUE) {
    header('location:../../associate/nominee.php');
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }


?>