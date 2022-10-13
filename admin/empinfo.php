<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<?php
session_start();
if (!(isset($_SESSION['id']) && isset($_SESSION['admin'])))
    header('location:index.php');
require('../config/dbconfig.php');
require('../layout/header.php');
$id = $_GET['id'];
$sql1 = "SELECT * FROM `employee` WHERE `employee_id`=$id";
$sql2 = "SELECT * FROM `employee_info` WHERE `employee_id`=$id";
$sql3 = "SELECT * FROM `bank_account` WHERE `user_id`=$id AND `user_type`=3";
$sql4 = "SELECT * FROM `qualification` WHERE `employee_id`=$id";


$emp = $conn->query($sql1);
$emp = mysqli_fetch_array($emp);

$empinfo = $conn->query($sql2);
$empinfo = mysqli_fetch_array($empinfo);


$banks = $conn->query($sql3);
$qfc = $conn->query($sql4);


?>


<body class="horizontal-layout page-header-light horizontal-menu preload-transitions 2-columns   " data-open="click" data-menu="horizontal-menu" data-col="2-columns">
    <header class="page-topbar" id="header">
        <div class="navbar navbar-fixed">
            <?php require('./topnav.php'); ?>
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
                    <div class="row">
                        <div class="col s12 m12 l12">
                            <div id="basic-tabs" class="card card card-default scrollspy">
                                <div class="card-content">
                                    <div class="card-title">
                                        <div class="row">
                                            <div class="col s12 m6 l10">
                                                <h4 class="card-title"><?php echo $emp['name']; ?> [<?php echo $emp['employee_id']; ?>]</h4>
                                                <img src="../uploads/images/<?php echo $emp['image']; ?>" alt="" height="100" width="100">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12">
                                            <div class="row active" id="main-view">
                                                <div class="col s12">
                                                    <ul class="tabs tab-demo z-depth-1">
                                                        <li class="tab col m3"><a class="" href="#basic">Basic Information</a></li>
                                                        <li class="tab col m3"><a href="#others" class="">Others Information</a></li>
                                                        <li class="tab col m3"><a href="#bank" class="">Bank Accounts</a></li>
                                                        <li class="tab col m3"><a href="#qual" class="active">Qualification</a></li>
                                                        <li class="indicator" style="left: 876px; right: 15px;"></li>
                                                    </ul>
                                                </div>
                                                <div class="col s12">
                                                    <div id="basic" class="col s12" style="display: none;">
                                                        <div class="mt-2 mb-2">
                                                            <div id="basic-form" class="card card card-default scrollspy">
                                                                <div class="card-content">
                                                                    <h4 class="card-title"></h4>
                                                                    <form>
                                                                        <div class="row">
                                                                            <div class="input-field col s6">
                                                                                <input type="text" id="name" value="<?php echo $emp['name'];?>">
                                                                                <label for="name">Name</label>
                                                                            </div>
                                                                            <div class="input-field col s6">
                                                                                <input id="email" type="email"  value="<?php echo $emp['email'];?>">
                                                                                <label for="email">Email</label>
                                                                            </div>
                                                                            <div class="input-field col s6">
                                                                                <input id="phone" type="number"  value="<?php echo $emp['phone'];?>">
                                                                                <label for="phone">Phone</label>
                                                                            </div>
                                                                            <div class="input-field col s6">
                                                                                <input id="balance" type="number"  value="<?php echo $emp['balance'];?>">
                                                                                <label for="balance">Balance</label>
                                                                            </div>
                                                                            <div class="input-field col s4">
                                                                                <select name="gender" id="gender" value="<?php echo $emp['gender'];?>">
                                                                                    <option value="0">Male</option>
                                                                                    <option value="1">Female</option>
                                                                                    <option value="2">Others</option>
                                                                                    </select>
                                                                                    <label for="gender">Gender</label>
                                                                            </div>
                                                                            <div class="input-field col s4">
                                                                                <select name="status" id="status" value="<?php echo $emp['status'];?>">
                                                                                    <option value="0">Active</option>
                                                                                    <option value="1">Disable</option>
                                                                                    </select>
                                                                                    <label for="status">Status</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="row">
                                                                                <div class="input-field col s12">
                                                                                    <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Save
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
                                                    <div id="others" class="col s12" style="display: none;">
                                                        <div class="mt-2 mb-2">
                                                        <form>
                                                                        <div class="row">
                                                                            <div class="input-field col s6">
                                                                                <input type="text" id="name" value="<?php echo $emp['name'];?>">
                                                                                <label for="name">Name</label>
                                                                            </div>
                                                                            <div class="input-field col s6">
                                                                                <input id="email" type="email"  value="<?php echo $emp['email'];?>">
                                                                                <label for="email">Email</label>
                                                                            </div>
                                                                            <div class="input-field col s6">
                                                                                <input id="phone" type="number"  value="<?php echo $emp['phone'];?>">
                                                                                <label for="phone">Phone</label>
                                                                            </div>
                                                                            <div class="input-field col s6">
                                                                                <input id="balance" type="number"  value="<?php echo $emp['balance'];?>">
                                                                                <label for="balance">Balance</label>
                                                                            </div>
                                                                            <div class="input-field col s4">
                                                                                <?php 
                                                                                
                                                                                
                                                                                ?>
                                                                                <select name="gender" id="gender" value="<?php echo $emp['gender'];?>">
                                                                                    <option value="0">Male</option>
                                                                                    <option value="1">Female</option>
                                                                                    <option value="2">Others</option>
                                                                                    </select>
                                                                                    <label for="gender">Gender</label>
                                                                            </div>
                                                                            <div class="input-field col s4">
                                                                                <select name="status" id="status" value="<?php echo $emp['status'];?>">
                                                                                    <option value="0">Active</option>
                                                                                    <option value="1">Disable</option>
                                                                                    </select>
                                                                                    <label for="status">Status</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="row">
                                                                                <div class="input-field col s12">
                                                                                    <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Save
                                                                                        <i class="material-icons right">send</i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                        </div>
                                                    </div>
                                                    <div id="bank" class="col s12" style="display: none;">
                                                        <p class="mt-2 mb-2">
                                                            Cupcake ipsum dolor sit amet. Powder donut cake. Pudding toffee jujubes marzipan pudding.
                                                        </p>
                                                    </div>
                                                    <div id="qual" class="col s12 active" style="display: block;">
                                                        <p class="mt-2 mb-2">
                                                            Brownie marshmallow sweet macaroon. Danish carrot cake chocolate bar dessert croissant
                                                            toffee pie caramels. Bonbon tart croissant chupa chups dessert.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
    <?php require('../layout/footer.php') ?>
</body>

</html>