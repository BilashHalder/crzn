<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<?php
session_start();
if(!(isset($_SESSION['id']) && isset($_SESSION['type'])))
header('location:index.php'); 
require('../config/dbconfig.php');
require('../layout/header.php');

?>

<body class="horizontal-layout page-header-light horizontal-menu preload-transitions 2-columns   " data-open="click" data-menu="horizontal-menu" data-col="2-columns">
    <header class="page-topbar" id="header">
        <div class="navbar navbar-fixed">
        <?php require('./topnav.php');?>

            <nav class="white hide-on-med-and-down" id="horizontal-nav">
                <div class="nav-wrapper">
                    <ul class="left hide-on-med-and-down" id="ul-horizontal-nav" data-menu="menu-navigation">
                        <?php require('./menu.php'); ?>
                    </ul>
                </div>

            </nav>
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

            <div class="row">
                <div class="col s12">
                    <div id="html-validations" class="card card-tabs">
                        <div class="card-content">
                            <div class="card-title">
                                <div class="row">
                                    <div class="col s12 m6 l10">
                                        <h4 class="card-title center">Enter Your Work Report Details</h4>
                                    </div>
                                    <div class="col s12 m6 l2">
                                    </div>
                                </div>
                            </div>

<?php 
$id=$_SESSION['id'];
$qur="SELECT * FROM `work_report` WHERE `report_date`=CURRENT_DATE() and employee_id=$id";
$res=$conn->query($qur);
$data=mysqli_fetch_array($res);
if($data['status']==2){


?>


                            <div id="html-view-validations">
                                <form class="formValidate0" method="post" enctype="multipart/form-data" action="../services/employee/report.php">
                                    <div class="row">
                                        <div class="input-field col s12 m4">
                                            <label for="uname0" class="">Report Date</label>
                                            <input class="validate " required="" id="uname0"  type="text" value="<?php echo $data['report_date'];?>"disabled>
                                        </div>
                                        <div class="input-field col s12 m4">
                                            <label for="cemail0" class="">Login Time</label>
                                            <input class="validate " required="" id="cemail0" type="email" name="cemail0"   value="<?php echo $data['start_time'];?>" disabled>
                                        </div>
                                        <?php 
                                        $qur="SELECT `report_to` FROM `employee_info` WHERE `employee_id`=$id";
                                        $rp=$conn->query($qur);
                                        $temp=mysqli_fetch_array($rp);
                                        
                                        ?>
                                        <div class="input-field col s12 m4">
                                            <label for="password0">Report To</label>
                                            <input class="validate" required="" id="password0" type="text" name="password0" disabled value="<?php if($temp['report_to']==0) echo "Admin";else  echo "CRZNEMP000".$temp['report_to']; ?>">
                                        </div>


                                        <input c required="" id="curl0" type="text" name="report_id"  hidden value="<?php echo $data['report_id'];?>">
                                        <input c required="" id="curl0" type="text" name="report_to"  hidden value="<?php echo $temp['report_to'];?>">
                                        <div class="input-field col s12 m4">
                                            <div id="view-file-input" class="active">

                                                <div class="file-field input-field">
                                                    <div class="btn">
                                                        <span>File</span>
                                                        <input type="file" name="docs">
                                                    </div>
                                                    <div class="file-path-wrapper">
                                                        <input class="file-path validate" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="input-field col s8 ">
                                            <textarea id="ccomment0" name="ccomment0" class="materialize-textarea validate" required="" name="comment"></textarea>
                                            <label for="ccomment0">Your comment *</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <button class="btn waves-effect waves-light right" type="submit" name="action">Submit
                                                <i class="material-icons right">send</i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <?php }
                            else 
                            {
                                echo "<h4 class=' green-text'>Your Report  Submitted..</h4>";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <?php require('../layout/footer.php') ?>
</body>

</html>