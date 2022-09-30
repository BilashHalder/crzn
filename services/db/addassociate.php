<?php
session_start();
require('../../config/dbconfig.php');

$name=$_POST['fname'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$commision_rate=$_POST['commission_rate'];
$employee_id=$_POST['employee_id'];
$pass=md5($_POST['pass']);


$sqlfind="SELECT * FROM `associate` WHERE `phone`='$phone' OR `email`='$email'";
$result=$conn->query($sqlfind);

if(mysqli_num_rows($result)>0){
    $_SESSION['asserr']="Email Or Phone Number Already Registerd";
    header('location:../../admin/newassociate.php');
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

    $sql="INSERT INTO `associate`( `name`, `gender`, `email`, `commission_rate`, `employee_id`, `phone`, `pass`, `image`, `status`)  VALUES ('$name',$gender,'$email',$commision_rate,$employee_id,'$phone','$pass','$nf',1)";

    if ($conn->query($sql) === TRUE) {
        header('location:../../admin/associates.php');
      }
       
      else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }


}



















?>