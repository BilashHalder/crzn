<?php
require('../../config/dbconfig.php');
$annual=$_POST['annual'];
$casual=$_POST['casual'];
$sick=$_POST['sick'];
$maternity=$_POST['maternity'];
$bereavement=$_POST['bereavement'];
$others=$_POST['others'];
$leave_id=$_POST['leave_id'];



$sql="UPDATE `leave` SET `annual`=$annual,`casual`=$casual,`sick`=$sick,`maternity`=$maternity,`bereavement`=$bereavement,`others`=$others WHERE `leave_id`=$leave_id";

if ($conn->query($sql) === TRUE) {
    header('location:../../admin/leave.php');
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }


?>