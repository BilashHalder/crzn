<?php 
session_start();
require('../../config/dbconfig.php');
$name=$_POST['fname'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$ref_code=$_POST['ref_code'];
$pass=md5($_POST['pass']);



$sqlfind="SELECT * FROM `customer` WHERE `phone`='$phone' OR `email`='$email'";
$result=$conn->query($sqlfind);


if(mysqli_num_rows($result)>0){
    $_SESSION['cuserr']="Email Or Phone Number Already Registerd";
    header('location:../../admin/addcustomer.php');
}
else{
    $file_name = $_FILES['image']['name'];
    $file_size =$_FILES['image']['size'];
    $file_tmp =$_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];
    $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
    $extensions= array("jpeg","jpg","png");
    $nf=substr(md5(time()),0,20).'.'.$file_ext;
    $fn="../../uploads/images/".$nf;
    move_uploaded_file($file_tmp,$fn);

$sql="INSERT INTO `customer`(`name`, `gender`, `email`, `phone`, `referred_by`, `pass`, `image`, `status`)  VALUES ('$name',$gender,'$email','$phone','$ref_code','$pass','$nf',1)";
    if ($conn->query($sql) === TRUE) {
        header('location:../../admin/customers.php');
      }
       else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
}




?>