<?php 
require('../../config/dbconfig.php');
$from=$_POST['from'];
$to=$_POST['to'];
$emp_id=$_POST['emp_id'];
$type=$_POST['type'];
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

$qur="INSERT INTO `leave_req`(`from_date`,`employee_id`,`to_date`, `type`, `file_url`, `comment`) VALUES ('$from',$emp_id,'$to','$type','$nf','$comment')";

$conn->query($qur);

echo $conn->error;
header('location:../../employee/leavehistory.php'); 





?>