<?php 
require('../../config/dbconfig.php');
$report_id=$_POST['report_id'];
$report_to=$_POST['report_to'];
$comment=$_POST['ccomment0'];



$file_name = $_FILES['docs']['name'];

if($_FILES['docs']['name']!=null){

    $file_size =$_FILES['docs']['size'];
    $file_tmp =$_FILES['docs']['tmp_name'];
    $file_type=$_FILES['docs']['type'];
    $file_ext=strtolower(end(explode('.',$_FILES['docs']['name'])));
    $nf=substr(md5(time()),0,20).'.'.$file_ext;
    $fn="../../uploads/documents/".$nf;
    move_uploaded_file($file_tmp,$fn);

}
else {
    $nf=null;
}

$qur="UPDATE `work_report` SET `report_to`=$report_to,`submit_time`=CURRENT_TIME(),`report`='$comment',`document_url`='$nf',`status`=3 WHERE `report_id`=$report_id";

$conn->query($qur);

echo $conn->error;
header('location:../../employee/submitreport.php'); 








?>