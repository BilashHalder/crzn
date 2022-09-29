<?php 
session_start();
require('../../config/dbconfig.php');
    $uname=$_POST['uname'];
    $pass=$_POST['pass'];
    $sql = "SELECT * FROM `associate` WHERE `email`='$uname' OR `phone`='$uname'";
    $result = $conn->query($sql);
    $rec=mysqli_fetch_array($result);
    $norec=mysqli_num_rows($result);
    if($norec!=1)
    {
        $_SESSION['logerr']="Invalid User";
        header('location:../../associate/');

    }
    else{
        if($rec['pass']!==md5($pass))
            {
                $_SESSION['logerr']="Invalid User Credentials";
                $_SESSION['uname']= $uname;
                header('location:../../associate/');
            }
        else 
            {
                $_SESSION['id']=$rec['associate_id'];
                $_SESSION['type']= 'associate';
                header('location:../../associate/dashboard.php');

            }

    }

?>