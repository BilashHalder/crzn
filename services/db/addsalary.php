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
$sql="INSERT INTO `salary`(`basic`, `hra`, `conveyance`, `medical`, `special`, `pf`, `insurance`, `tax`) VALUES ($basic, $hra, $conveyance, $medical, $special,$pf,$insurance,$tax)";
if ($conn->query($sql) === TRUE) {
    header('location:../../admin/salary.php');
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }


?>