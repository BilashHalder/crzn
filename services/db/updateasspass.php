<?php 
// print_r($_POST);
require('../../config/dbconfig.php');
$pass=md5($_POST['pass']);
$sql="UPDATE `associate` SET `pass`='$pass' WHERE `associate_id`";
$conn->query($sql);
header('location:../../associate/profile.php');

?>