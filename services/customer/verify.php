<?php 
session_start();
require('../../config/dbconfig.php');
    $uname=$_POST['uname'];
    $pass=$_POST['pass'];
    $sql = "SELECT * FROM `customer` WHERE `email`='$uname' OR `phone`='$uname'";
    $result = $conn->query($sql);
    $rec=mysqli_fetch_array($result);
    $norec=mysqli_num_rows($result);
    if($norec!=1)
    {
        $_SESSION['logerr']="Invalid User";
        header('location:../../customer/');

    }
    else{
        if($rec['pass']!==md5($pass))
            {
                $_SESSION['logerr']="Invalid User Credentials";
                $_SESSION['uname']= $uname;
                header('location:../../customer/');
            }
        else 
            {
                $_SESSION['id']=$rec['customer_id'];
                $_SESSION['type']= 'emp';
                header('location:../../customer/dashboard.php');

            }

    }

?>