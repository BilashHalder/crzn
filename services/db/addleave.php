<?php
require('../../config/dbconfig.php');
$annual=$_POST['annual'];
$casual=$_POST['casual'];
$sick=$_POST['sick'];
$maternity=$_POST['maternity'];
$bereavement=$_POST['bereavement'];
$others=$_POST['others'];



$sql="INSERT INTO `leave`( `annual`, `casual`, `sick`, `maternity`, `bereavement`, `others`) VALUES ($annual,$casual,$sick,$maternity,$bereavement,$others)";

if ($conn->query($sql) === TRUE) {
    header('location:../../admin/leave.php');
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }


?>