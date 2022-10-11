<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<?php
session_start();
if (!(isset($_SESSION['id']) && isset($_SESSION['type'])))
    header('location:index.php');
    require('../config/dbconfig.php');
require('../layout/header.php');

$id=$_SESSION['id'];
$sql="SELECT * FROM `bank_account` WHERE `user_id`=$id AND `user_type`=2";
$allsal=$conn->query($sql);
$count=mysqli_num_rows($allsal);
?>



<body class="horizontal-layout page-header-light horizontal-menu preload-transitions 2-columns   " data-open="click" data-menu="horizontal-menu" data-col="2-columns">
    <header class="page-topbar" id="header">
        <div class="navbar navbar-fixed">
        <?php require('./topnav.php'); ?>

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
            <div class="col s12 m12 l12">
                <div id="responsive-table" class="card card card-default scrollspy">
                    <div class="card-content">
                        <h4 class="card-title center">Manage Bank Accounts</h4>
                        <div class="row">

                            <?php
                            if ($count>2) {

                            ?>



                              
                            <?php
                            } else {

                            ?>


                                <div class="col s12 m6">
                                    <h5 class="card-title center">Add New Bank Account</h5>


                                    <form action="../services/associate/addaccount.php" method="post">

                                    <div class="row">
                                    <div class="input-field col m12">
                                                <input type="password" id="fn" name="account_no"  required>
                                                <label for="fn" class="">Account No</label>
                                            </div>
                                            <div class="input-field col m12">
                                                <input type="text" id="c_account" name="c_account"  required>
                                                <label for="c_account" class="">Confirm Account Number</label>
                                            </div>
                                            <div class="input-field col m12">
                                                <input type="text" id="ifsc_code" name="ifsc_code"  required>
                                                <label for="ifsc_code" class="">IFSC Code</label>
                                            </div>

                                            <input type="text" id="h_date" name="user_id"  value=<?php echo $id;?> hidden>
                                            <input type="text" id="h_date" name="user_type"  value=2 hidden>

<button class="btn cyan waves-effect waves-light right" type="submit" name="action">Save
<i class="material-icons right">save</i>
</button>

                                    </div>
                                    </form>


                                </div>


                            <?php
                            }
                            ?>





                            <div class="col s12 m6">
                                <table class="bordered">
                                    <thead>
                                        <tr>
                                            
                                            <th data-field="name">Account No</th>
                                            <th data-field="id">Ifsc Code</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                        for ($i = 0; $i < mysqli_num_rows($allsal); $i++) {
                                            $sal = mysqli_fetch_array($allsal);
                                        ?>

                                            <tr>
                                                <td><?php echo $sal['account_no']; ?></td>
                                                <td><?php echo $sal['ifsc_code']; ?></td>
                                                <td><?php echo $sal['status']; ?></td>
                                                
                                                
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>



                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require('../layout/footer.php') ?>
</body>

</html>