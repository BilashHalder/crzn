<?php
require('../../config/dbconfig.php');
$title=$_POST['title'];
$h_date=$_POST['h_date'];
$id=$_POST['id'];

$sql="UPDATE `holiday` SET `title`='$title',`h_date`='$h_date' WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    header('location:../../admin/holidays.php');
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }


?>