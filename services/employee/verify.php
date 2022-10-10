<?php 
session_start();

date_default_timezone_set("Asia/Kolkata"); 
$dt= date('Y-m-d');


require('../../config/dbconfig.php');
    $uname=$_POST['uname'];
    $pass=$_POST['pass'];
    $sql = "SELECT * FROM `employee` WHERE `email`='$uname' OR `phone`='$uname'";
    $result = $conn->query($sql);
    $rec=mysqli_fetch_array($result);
    $norec=mysqli_num_rows($result);
    if($norec!=1)
    {
        $_SESSION['logerr']="Invalid User";
        header('location:../../employee/');

    }
    else{
        if($rec['pass']!==md5($pass))
            {
                $_SESSION['logerr']="Invalid User Credentials";
                $_SESSION['uname']= $uname;
                header('location:../../employee/');
            }
        else 
            {
                $_SESSION['id']=$rec['employee_id'];
                $_SESSION['type']= 'emp';
                $id=$rec['employee_id'];
                $qur="SELECT * FROM `work_report` WHERE `report_date`=CURRENT_DATE() AND employee_id=$id";
                $res=$conn->query($qur);
               if( mysqli_num_rows($res)==0){
                $qur="INSERT INTO `work_report` (`employee_id`, `report_date`, `start_time` ) VALUES ($id,'$dt', CURRENT_TIME());";
                $conn->query($qur);
               }
                header('location:../../employee/dashboard.php');

            }

    }

?>