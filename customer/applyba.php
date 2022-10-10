<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<?php
session_start();
if(!(isset($_SESSION['id']) && isset($_SESSION['type'])))
header('location:index.php'); 

require('../config/dbconfig.php');
require('../layout/header.php');

$id=$_SESSION['id'];
$sql="SELECT * FROM `customer` WHERE `customer_id`=$id";
$data=$conn->query($sql);
$data=mysqli_fetch_array($data);


$sql1="SELECT * FROM `request` WHERE `customer_id`=$id AND `request_type`=2 AND `status`=2";
$ispending=$conn->query($sql1);
$ispending=mysqli_num_rows($ispending);


?>



<body class="horizontal-layout page-header-light horizontal-menu preload-transitions 2-columns   " data-open="click" data-menu="horizontal-menu" data-col="2-columns">
    <header class="page-topbar" id="header">
        <div class="navbar navbar-fixed">
        <?php require('./topnav.php'); ?>

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
            <div class="col s12">
                <div class="container">
                    <div class="seaction">
                        <?php 
                        
                        if($ispending>0){
                            echo "<div class='green-text center mt5'>
                           <p> Your Application Submitted Successfully.</p>
                           <p> Please wait our representative contact you.....</p>
                           
                           </div>";
                        }else{
                            ?>
<div class="row">
                            <div class="col s12 m12 l12">
                                <div id="Form-advance" class="card card card-default scrollspy">
                                    <div class="card-content">
                                        <h4 class="card-title center">Apply For Business Assoicate</h4>
                                        <form action="../services/db/application_req.php" method="post">
                                            <div class="row">
                                                <div class="input-field col m12 s12">
                                                    <input id="first_name01" type="text" value="<?php echo $data['name'];?>"  required>
                                                    <label for="first_name01">Full Name</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input id="email5" type="email" value="<?php echo $data['email'];?> " required>
                                                    <label for="email">Email</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input id="phone" type="number" value="<?php echo $data['phone'];?>" required>
                                                    <label for="phone">Contact No</label>
                                                </div>
                                            </div>
                                            <input type="text" name="customer_id" id="" value=<?php echo $data['customer_id'];?> hidden>
                                            <input type="text" name="req_type" id="" value=2 hidden>
                                            <div class="row">
                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
                                                            <i class="material-icons right">send</i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="content-overlay"></div>
            </div>
        </div>
    </div>
<?php require('../layout/footer.php')?>
</body>

</html>