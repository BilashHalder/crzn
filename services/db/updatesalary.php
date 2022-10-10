<?php 
require('../../config/dbconfig.php');
$basic=$_POST['basic'];
$hra=$_POST['hra'];
$conveyance=$_POST['conveyance'];
$medical=$_POST['medical'];
$special=$_POST['special'];
$pf=$_POST['pf'];
$insurance=$_POST['insurance'];
$tax=$_POST['tax'];
$salary_id=$_POST['salary_id'];


$qur="UPDATE `salary` SET `basic`=$basic,`hra`=$hra,`conveyance`=$conveyance,`medical`=$medical,`special`=$special,`pf`=$pf,`insurance`=$insurance,`tax`=$tax WHERE `salary_id`=$salary_id";
if ($conn->query($qur) === TRUE) {
    header('location:../../admin/salary.php');
  } else {
    echo "Error: " . $qur . "<br>" . $conn->error;
  }
?>