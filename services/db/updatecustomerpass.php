<?php 
// print_r($_POST);
require('../../config/dbconfig.php');
$pass=md5($_POST['pass']);
$sql="UPDATE `customer` SET `pass`='$pass' WHERE `customer_id`";
$conn->query($sql);
header('location:../../customer/profile.php');

?>