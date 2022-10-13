<?php
session_start();
require('../../config/dbconfig.php');
print_r($_POST);
print_r($_FILES);
$roi=$_POST['roi'];
$id=$_POST['id'];

    $file_name = $_FILES['doc']['name'];
    $file_size =$_FILES['doc']['size'];
    $file_tmp =$_FILES['doc']['tmp_name'];
    $file_type=$_FILES['doc']['type'];
    $file_ext=strtolower(end(explode('.',$_FILES['doc']['name'])));
    $nf=substr(md5(time()),0,20).'.'.$file_ext;
    $fn="../../uploads/documents/".$nf;
    move_uploaded_file($file_tmp,$fn);
    $sql="UPDATE `investment` SET `roi`=$roi,`agreement_file`='$nf',`status`= 1 WHERE `investment_id`=$id";

    if ($conn->query($sql) === TRUE) {
        header('location:../../admin/invesment.php?id='.$id);
      }
       
      else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
?>