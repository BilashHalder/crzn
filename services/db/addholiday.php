<?php
require('../../config/dbconfig.php');
$title=$_POST['title'];
$h_date=$_POST['h_date'];

$sql="INSERT INTO `holiday`(`title`, `h_date`) VALUES ('$title','$h_date')";
if ($conn->query($sql) === TRUE) {
    header('location:../../admin/holidays.php');
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }


?>