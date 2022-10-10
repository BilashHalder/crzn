<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
 <?php
session_start();
if(!(isset($_SESSION['id']) && isset($_SESSION['type'])))
header('location:index.php'); 
$id=$_SESSION['id'];
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
                        <?php require('./menu.php');?>
                    </ul>
                </div>

            </nav>
        </div>
    </header>



    <aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-fixed hide-on-large-only">
        <div class="brand-sidebar sidenav-light"></div>
        <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed hide-on-large-only menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">
        <?php require('./mobilemenu.php');?>
        </ul>
        <div class="navigation-background"></div><a class="sidenav-trigger btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
    </aside>

    <div id="main">
        <div class="row">

        <div class="col s12 m12 l12">
                                <div id="responsive-table" class="card card card-default scrollspy">
                                    <div class="card-content">
                                        <h4 class="card-title center">My Work Report</h4>
                                        <div class="row">
                                            <div class="col s12">
                                            </div>

                                            <?php 
                                            $sql="SELECT * FROM `work_report` WHERE `employee_id`=$id ORDER BY report_id LIMIT 30";
                                            $res=$conn->query($sql);
                                            $count=mysqli_num_rows($res);
                                            if($count==0)
                                            echo "<p>No Work Report Found.</p>";
                                            else{
                                           


                                            ?>
                                            <div class="col s12">
                                                <table class="responsive-table">
                                                    <thead>
                                                        <tr>
                                                            <th data-field="id">Report Id</th>
                                                            <th data-field="name">Report Date</th>
                                                            <th data-field="price">Status</th>
                                                            <th data-field="total">Comments</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php 
                                                        for($i=0;$i<$count;$i++){
                                                            $temp=mysqli_fetch_array($res);
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $temp['report_id'];?></td>
                                                            <td><?php echo $temp['report_date'];?></td>
                                                            <td><?php if($temp['status']==0) echo "Rejected";else if($temp['status']==1) echo "Accepted";else if($temp['status']==2) echo "Pending";else echo "Submitted" ;?></td>
                                                            <td><?php echo $temp['reject_for'];?></td>
                                                        </tr>

                                                        <?php 
                                                        }?>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <?php 
                                                 
                                                }
                                                ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
        </div>
    </div>
<?php require('../layout/footer.php')?>
</body>

</html>