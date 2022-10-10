<?php 
require('../../config/dbconfig.php');
$report_id=$_GET['id'];
$comment=$_GET['comment'];


$qur="UPDATE `work_report` SET `status`=0, `reject_for`='$comment' WHERE `report_id`=$report_id";

$conn->query($qur);

header('location:../../employee/approvereport.php'); 


?>