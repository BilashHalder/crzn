<?php 
require('../../config/dbconfig.php');
$title=$_POST['title'];
$designation_id=$_POST['designation_id'];



$qur="UPDATE `designation` SET `title`='$title' WHERE `designation_id`=$designation_id";
if ($conn->query($qur) === TRUE) {
    header('location:../../admin/designation.php');
  } else {
    echo "Error: " . $qur . "<br>" . $conn->error;
  }
?>