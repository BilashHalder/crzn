<?php 
session_start();
require('../../config/dbconfig.php');
    $uname=$_POST['uname'];
    $pass=$_POST['pass'];
    $sql = "SELECT * FROM `admin` WHERE `email`='$uname' OR `phone`='$uname'";
    $result = $conn->query($sql);
    $rec=mysqli_fetch_array($result);
    $norec=mysqli_num_rows($result);
    if($norec!=1)
    {
        $_SESSION['logerr']="Invalid User";
        header('location:../../admin/');

    }
    else{
        echo $norec;
        if($rec['pass']!=md5($pass))
            {
                $_SESSION['logerr']="Invalid User Credentials";
                $_SESSION['uname']= $uname;
                header('location:../../admin/');
            }
        else 
            {
                $_SESSION['id']=$rec['id'];
                $_SESSION['admin']= true;
                header('location:../../admin/dashboard.php');

            }

    }

?>