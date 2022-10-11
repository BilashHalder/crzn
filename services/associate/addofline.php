<?php 
session_start();
require('../../config/dbconfig.php');
$ammount=$_POST['ammount'];
$transaction_id=$_POST['transaction_id'];
$user_id=$_POST['user_id'];

    $file_name = $_FILES['image']['name'];
    $file_size =$_FILES['image']['size'];
    $file_tmp =$_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];
    $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
    $extensions= array("jpeg","jpg","png");
    $nf=substr(md5(time()),0,20).'.'.$file_ext;
    $fn="../../uploads/images/".$nf;
    move_uploaded_file($file_tmp,$fn);

$sql="INSERT INTO `offline_transaction`(`customer_id`,`customer_type`, `transaction_id`, `amount`, `file_url`, `status`) VALUES 
($user_id,2,'$transaction_id',$ammount,'$nf',0)";
    if ($conn->query($sql) === TRUE) {
        header('location:../../associate/addoffpayment.php');
      }
       else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }





?>