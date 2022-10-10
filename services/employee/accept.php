<?php 
require('../../config/dbconfig.php');
$report_id=$_GET['id'];

$qur="UPDATE `work_report` SET `status`=1 WHERE `report_id`=$report_id";

$conn->query($qur);

echo $conn->error;
header('location:../../employee/approvereport.php'); 








?>