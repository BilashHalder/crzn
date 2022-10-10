<?php
require('../../config/dbconfig.php');
$title=$_POST['title'];

$sql="INSERT INTO `designation`(`title`) VALUES ('$title')";
if ($conn->query($sql) === TRUE) {
    header('location:../../admin/designation.php');
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }


?>