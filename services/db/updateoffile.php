<?php 
require('../../config/dbconfig.php');
$id=$_GET['id'];
$status=$_GET['status'];
$sql="SELECT * FROM `offline_transaction` WHERE `id`=$id";
$rec=$conn->query($sql);
$res=mysqli_fetch_array($rec);
$cusid=$res['customer_id'];
$amnt=$res['amount'];

if($status==1){
    if($res['customer_type']==1){
        $find="SELECT * FROM `customer` WHERE `customer_id`=$cusid";
        $temp=$conn->query($find);
        $temp=mysqli_fetch_array($temp);
        $bal=$temp['balance'];
        $namnt=$amnt+$bal;
        $upd="UPDATE `customer` SET `balance`=$namnt WHERE `customer_id`=$cusid";
        $conn->query($upd);
    
    }
    
    else {
        $find="SELECT * FROM `associate` WHERE `associate_id`=$cusid";
        $temp=$conn->query($find);
        $temp=mysqli_fetch_array($temp);
        $bal=$temp['balance'];
        $namnt=$amnt+$bal;
        $upd="UPDATE `associate` SET `balance`=$namnt WHERE `associate_id`=$cusid";
        $conn->query($upd);
    }
}


$u="UPDATE `offline_transaction` SET `status`=$status WHERE `id`=$id";
$conn->query($u);
header('location:../../admin/view.php?id='.$id);
?>