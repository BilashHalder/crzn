<?php
require('../../config/dbconfig.php');


$name=$_POST['fname'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$salary_id=$_POST['salary'];
$dob=$_POST['dob'];
$doj=$_POST['doj'];
$report_to=$_POST['report_to'];
$designation=$_POST['designation'];
$pass=md5($_POST['pass']);

  $sqlfind="SELECT * FROM `associate` WHERE `phone`='$phone' OR `email`='$email'";
  $result=$conn->query($sqlfind);
  if(mysqli_num_rows($result)>0){
    $_SESSION['emperr']="Email Or Phone Number Already Registerd";
    header('location:../../admin/addemp.php');
}else{
    $file_name = $_FILES['image']['name'];
    $file_size =$_FILES['image']['size'];
    $file_tmp =$_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];
    $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
    $extensions= array("jpeg","jpg","png");
    $nf=substr(md5(time()),0,20).'.'.$file_ext;
    $fn="../../uploads/images/".$nf;

    move_uploaded_file($file_tmp,$fn);

    
$sql="INSERT INTO `employee`( `name`, `gender`, `email`, `phone`, `pass`, `image`, `status`) VALUES ('$name',$gender,'$email','$phone','$pass','$nf',1)";

if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
$sql2="INSERT INTO `employee_info`(`employee_id`, `designation_id`, `salary_id`, `dob`, `report_to`, `joining_date`) VALUES ($last_id,$designation,$salary_id,'$dob',$report_to,'$doj')";
if ($conn->query($sql2) === TRUE) {
    header('location:../../admin/empall.php');
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  }
   else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

}















?>