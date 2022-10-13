<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<?php
session_start();
// if(!(isset($_SESSION['id']) && isset($_SESSION['type'])))
// header('location:index.php'); 

require('../config/dbconfig.php');
require('../layout/header.php');

$sqlemp="SELECT * FROM employee where status=1";
$sqldesg="SELECT * FROM designation";
$sqlsal="SELECT * FROM salary";
$sqlleave="SELECT * FROM `leave`";
$allsalary = $conn->query($sqlsal);
$alldesg=$conn->query($sqldesg);
$allemp=$conn->query($sqlemp);
$alleave=$conn->query($sqlleave);
function calculateSalary($salary){
    return(($salary['basic']+$salary['hra']+$salary['conveyance']+$salary['medical']+$salary['special'])-($salary['pf']+$salary['insurance']+$salary['tax']));
}
function totalLeave($leave){
    return(($leave['annual']+$leave['casual']+$leave['sick']+$leave['maternity']+$leave['bereavement']+$leave['others']));
}


?>

<body class="horizontal-layout page-header-light horizontal-menu preload-transitions 2-columns   " data-open="click" data-menu="horizontal-menu" data-col="2-columns">
    <header class="page-topbar" id="header">
        <div class="navbar navbar-fixed">
        <?php require('./topnav.php');?> 
        </div>
    </header>



    <aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-fixed hide-on-large-only">
        <div class="brand-sidebar sidenav-light"></div>
        <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed hide-on-large-only menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">
            <?php require('./mobilemenu.php'); ?>
        </ul>
        <div class="navigation-background"></div><a class="sidenav-trigger btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
    </aside>

    <div id="main">
        <div class="row">
            <div class="col s12">
                <div class="container">
                    <div class="section">
                        <div class="card card card-default scrollspy ">
                            <div class="card-content">
                                <h5 class="center">Add New Employee</h5>
                                <form class="formValidate" action="../services/db/addemployee.php"   enctype="multipart/form-data"  method="POST">
                               
                               <div class="row">
                                       <div class="input-field col s6 m4  ">
                                           <label for="name">Full Name*</label>
                                           <input id="name" name="fname" type="text" data-error=".errorTxt1" >
                                           <small class="errorTxt1"></small>
                                       </div>
                                       <div class="input-field col s6 m4">
                                           <label for="phone">Phone No*</label>
                                           <input id="phone" name="phone" type="number" min=0 data-error=".errorTxt2" >
                                           <small class="errorTxt2"></small>
                                       </div>

                                       <div class="input-field col s6 m4">
                                           <label for="email">E-Mail *</label>
                                           <input id="email" type="email" name="email" data-error=".errorTxt3" >
                                           <small class="errorTxt3"></small>
                                       </div>
                                       <div class="col s6 m2">
                                           <label for="gender">Gender *</label>
                                           <div class="input-field">
                                               <select class="error" id="gender" name="gender" data-error=".errorTxt7" >
                                                   <option>Select</option>
                                                   <option value="1">Male</option>
                                                   <option value="2">Female</option>
                                                   <option value="3">Others</option>
                                               </select>
                                               <small class="errorTxt7"></small>
                                           </div>
                                       </div>


                                       <div class="col s6 m2">
                                           <label for="salary">Salary *</label>
                                           <div class="input-field">
                                               <select class="error" id="salary" name="salary" data-error=".errorTxt7" >
                                               <?php 
                                               if(mysqli_num_rows($allsalary)<1)
                                               {
                                                   ?>
                                                   <option>Please Add Salary</option>
                                                   <?php
                                               }
                                               else{
                                                   ?>
                                                   <option>Select</option>
                                                   <?php
                                                   for($i=0;$i<mysqli_num_rows($allsalary);$i++){
                                                       $temp=mysqli_fetch_array($allsalary)
                                               ?>    
                                                   
                                                   <option value="<?php echo $temp['salary_id'];?>"><?php echo calculateSalary($temp);?></option>
                                                   <?php
                                               } }?>
                                               </select>
                                               <small class="errorTxt7"></small>
                                           </div>
                                       </div>

                                       <div class="col s6 m2">
                                           <label for="leave_id">Leave *</label>
                                           <div class="input-field">
                                               <select class="error" id="leave_id" name="leave_id" data-error=".errorTxt7" >
                                               <?php 
                                               if(mysqli_num_rows($alleave)==0)
                                               {
                                                   ?>
                                                   <option>Please Add Leave</option>
                                                   <?php
                                               }
                                               else{
                                                   ?>
                                                   <option>Select</option>
                                                   <?php
                                                   for($i=0;$i<mysqli_num_rows($alleave);$i++){
                                                       $temp=mysqli_fetch_array($alleave)
                                               ?>    
                                                   
                                                   <option value="<?php echo $temp['leave_id'];?>"><?php echo totalLeave($temp);?></option>
                                                   <?php
                                               } }?>
                                               </select>
                                               <small class="errorTxt7"></small>
                                           </div>
                                       </div>


                                       <div class="col s6 m3">
                                           <label for="designation">Designation *</label>
                                           <div class="input-field">
                                               <select class="error" id="designation" name="designation" data-error=".errorTxt7" >
                                               <?php 
                                               if(mysqli_num_rows($alldesg)<1)
                                               {
                                                   ?>
                                                   <option>Please Add Designation</option>
                                                   <?php
                                               }
                                               else{
                                                   ?>
                                                   <option>Select</option>
                                                   <?php
                                                   for($i=0;$i<mysqli_num_rows($alldesg);$i++){
                                                       $temp=mysqli_fetch_array($alldesg)
                                               ?>    
                                                   
                                                   <option value="<?php echo $temp['designation_id'];?>"><?php echo $temp['title'];?></option>
                                                   <?php
                                               } }?>
                                               </select>
                                               <small class="errorTxt7"></small>
                                           </div>
                                       </div>

                                       <div class="col s6 m3">
                                           <label for="report_to">Report To *</label>
                                           <div class="input-field">
                                               <select class="error" id="report_to" name="report_to" data-error=".errorTxt7" required>
                                               <?php 
                                               if(mysqli_num_rows($allemp)<1)
                                               {
                                                   ?>
                                                   <option value='0'>Admin</option>
                                                   <?php
                                               }
                                               else{
                                                   ?>
                                                   <option>Select</option>
                                                   <option value='0'>Admin</option>
                                                   <?php
                                                   for($i=0;$i<mysqli_num_rows($allemp);$i++){
                                                       $temp=mysqli_fetch_array($allemp)
                                               ?>    
                                                   
                                                   <option value="<?php echo $temp['employee_id'];?>"><?php echo $temp['name'];?></option>
                                                   <?php
                                               } }?>
                                               </select>
                                               <small class="errorTxt7"></small>
                                           </div>
                                       </div>

                                       
                                       <div class="input-field col s6 m4">
                                           <label for="dob">Date Of Birth *</label>
                                           <input id="dob" type="date" name="dob" data-error=".errorTxt3" >
                                           <small class="errorTxt3"></small>
                                       </div>

                                       <div class="input-field col s6 m4">
                                           <label for="doj">Joining Date*</label>
                                           <input id="doj" type="date" name="doj" data-error=".errorTxt3" >
                                           <small class="errorTxt3"></small>
                                       </div>

                                       <div class="col m4 s6 file-field input-field">
                                                   <div class="btn float-right">
                                                       <span>Image</span>
                                                       <input type="file" name="image"  accept="image/*">
                                                   </div>
                                                   <div class="file-path-wrapper">
                                                       <input class="file-path validate" type="text">
                                                   </div>
                                               </div>

                                       <div class="input-field col s6 m4">
                                           <label for="pass">Password *</label>
                                           <input id="pass" type="password" name="pass" data-error=".errorTxt5" >
                                           <small class="errorTxt5"></small>
                                       </div>

                                       <div class="input-field col s6 m4">
                                           <label for="cpass">Confirm Password *</label>
                                           <input id="cpass" type="password" name="cpass" data-error=".errorTxt6" >
                                           <small class="errorTxt6"></small>
                                       </div>

                                      

                                       <div class="input-field col s12">

                                       <?php if(isset($_SESSION['emperr'])){?>
                                            <p style="text-align: center;color:red"><?php echo $_SESSION['emperr']; ?></p>
                                            <?php unset($_SESSION['emperr']);} ?>

                                           <button class="btn waves-effect waves-light right green" type="submit" name="action">Save
                                               <i class="material-icons right">save</i>
                                           </button>
                                       </div>
                                   </div>
                               </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-overlay"></div>
            </div>
        </div>
    </div>


    <?php require('../layout/footer.php') ?>

   
</body>
</html>


