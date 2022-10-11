<?php 


require('../../config/dbconfig.php');

$file_name = $_FILES['img']['name'];
$file_size =$_FILES['img']['size'];
$file_tmp =$_FILES['img']['tmp_name'];
$file_type=$_FILES['img']['type'];
$file_ext=strtolower(end(explode('.',$_FILES['img']['name'])));
$extensions= array("jpeg","jpg","png");
$nf=substr(md5(time()),0,20).'.'.$file_ext;
$fn="../../uploads/images/".$nf;
move_uploaded_file($file_tmp,$fn);
$id=$_POST['id'];
$sql="UPDATE `associate` SET `image`='$nf' WHERE `associate_id`=$id;";
$conn->query($sql);
header('location:../../associate/profile.php');

?>