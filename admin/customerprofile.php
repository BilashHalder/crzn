<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<?php
session_start();
require('../config/dbconfig.php');
$id=$_GET['id'];
// if(!(isset($_SESSION['id']) && isset($_SESSION['type'])))
// header('location:index.php'); 



$customersql="SELECT * FROM `customer` WHERE `customer_id`=$id";
$res=$conn->query($customersql);
$custinfo=mysqli_fetch_array($res);


require('../layout/header.php');

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
        <?php require('./mobilemenu.php');?>
        </ul>
        <div class="navigation-background"></div><a class="sidenav-trigger btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
    </aside>

    <div id="main">
        <div class="row">
            <div class="col s12">
                <div class="container">
                    <!-- users view start -->
                    <div class="section users-view">
                        <!-- users view media object start -->
                        <div class="card-panel">
                            <div class="row">
                                <div class="col s12 m7">
                                    <div class="display-flex media">
                                        <a href="#" class="avatar">
                                            <img src="../assets/images/avatar/avatar-15.png" alt="users view avatar" class="z-depth-4 circle" height="64" width="64">
                                        </a>
                                        <div class="media-body">
                                            <h6 class="media-heading">
                                                <span ><?php echo $custinfo['name'];?></span>
                                            </h6>
                                            <span>ID:</span>
                                            <span class="-view-id">CRZNCUS<?php echo $custinfo['customer_id'];?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <div class="row">
                                    <div class="col s12 m4">
                                        <table class="striped">
                                            <tbody>
                                                <tr>
                                                    <td>Phone No :</td>
                                                    <td><?php echo $custinfo['phone'];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Email Id:</td>
                                                    <td ><?php echo $custinfo['email'];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Refered By :</td>
                                                    <td><?php echo $custinfo['referred_by'];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Role:</td>
                                                    <td class="">Customer</td>
                                                </tr>
                                                <tr>
                                                    <td>Status:</td>
                                                    <?php 
                                                    if($custinfo['status']==1)
                                                    echo "<td><span class='chip green lighten-5 green-text'>Active</span></td>";
                                                    else 
                                                    echo "<td><span class='chip red lighten-5 red-text'>Deactive</span></td>";
                                                    ?>
                                                    
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col s12 m4">
                                        <h5 class="center blue-text">Nominee</h5>

                                        <?php 
                                        $sql="SELECT * FROM `nominee` WHERE `user_id`=$id AND user_type=1";
                                        $temp=$conn->query($sql);
                                    
                                        if(mysqli_num_rows($temp)!=0){
                                            ?>
                                             <table class="responsive-table">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Date of Birth</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                for($i=0;$i<mysqli_num_rows($temp);$i++){
                                                    $rec=mysqli_fetch_array($temp);
                                                    ?>

                                                <tr>
                                                    <td><?php echo $rec['name'];?></td>
                                                    <td><?php echo $rec['dob'];?></td>
                                                </tr>
                                                    <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>


                                        <?php
                                        }
                                        else
                                        {
                                            echo "<h6>No Nominee Added Yet.</h6>";
                                        }

                                        ?>

                                       
                                    </div>
                                    <div class="col s12 m4">
                                        <h5 class="center blue-text">Bank Accounts</h5>

                                        <?php 
                                        $sql="SELECT * FROM `bank_account` WHERE `user_id`=$id AND user_type=1";
                                        $temp=$conn->query($sql);
                                    
                                        if(mysqli_num_rows($temp)!=0){
                                            ?>
                                             <table class="responsive-table">
                                            <thead>
                                                <tr>
                                                    <th>Account No</th>
                                                    <th>Ifsc Code</th>
                                                    <th>Bank Name</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                for($i=0;$i<mysqli_num_rows($temp);$i++){
                                                    $rec=mysqli_fetch_array($temp);
                                                    ?>

                                                <tr>
                                                    <td><?php echo $rec['account_no'];?></td>
                                                    <td><?php echo $rec['ifsc_code'];?></td>
                                                    <td><?php echo $rec['branch'];?></td>
                                                </tr>
                                                    <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>


                                        <?php
                                        }
                                        else
                                        {
                                            echo "<h6>No Nominee Added Yet.</h6>";
                                        }

                                        ?>

                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <div class="row">
                                    <div class="col s12">
                              
                                       
                                        <h6 class="mb-2 mt-2"><i class="material-icons">error_outline</i> KYC Information</h6>
                                        <?php if ($custinfo['document_id']==-1)
                                        echo "<h5 class='red-text center'>Kyc Not Done</h5>";
                                        else{
                                        ?>
                                        <table class="striped">
                                            <tbody>
                                                <tr>
                                                    <td>Adhar No:</td>
                                                    <td>03/04/1990</td>
                                                </tr>
                                                <tr>
                                                    <td>PAN No:</td>
                                                    <td>USA</td>
                                                </tr>
                                                <tr>
                                                    <td>Address:</td>
                                                    <td>English</td>
                                                </tr>
                                                <tr>
                                                    <td>Status:</td>
                                                    <td><span class='chip green lighten-5 green-text'>Verified</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <?php
                                    }?>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="content-overlay"></div>
            </div>
        </div>
    </div>
<?php require('../layout/footer.php')?>
</body>

</html>