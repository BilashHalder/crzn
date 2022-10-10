<?php 
session_start();
print_r($_GET);
require('../../config/dbconfig.php');
$account_no=$_GET['account_no'];
$nominee=$_GET['nominee'];
$ammount=$_GET['ammount'];
$id=$_GET['id'];
$sql="SELECT * FROM `customer` WHERE `customer_id`=$id";
$res=$conn->query($sql);
$res=mysqli_fetch_array($res);
if($res['balance']<$ammount){
    $_SESSION['inverr']="Insufficient Balance Please Add Balance";
    header('location:../../customer/newinvesments.php');
}
else if($ammount<25000){
    $_SESSION['inverr']="Invalid Amount";
    header('location:../../customer/newinvesments.php');
}

else{
    $newbal=$res['balance']-$ammount;
    $updqur="UPDATE `customer` SET `balance`=$newbal WHERE `customer_id`=$id";
    $conn->query($updqur);
    $sql="INSERT INTO `investment`(`user_id`, `ammount`, `nominee_id`, `account_no`) VALUES ($id,$ammount,$nominee,'$account_no')";
if ($conn->query($sql) === TRUE) {
    $_SESSION['invsucc']="Your Invesment Added Successfull";
    header('location:../../customer/newinvesments.php');
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

}




?>