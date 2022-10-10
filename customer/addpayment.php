<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<?php
session_start();
if (!(isset($_SESSION['id']) && isset($_SESSION['type'])))
    header('location:index.php');
    require('../config/dbconfig.php');
require('../layout/header.php');

$id=$_SESSION['id'];
$sql="SELECT * FROM `offline_transaction` WHERE `customer_id`=$id AND `status`!=2";
$all=$conn->query($sql);
$count=mysqli_num_rows($all);
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
                        <div class="row">

                            <?php
                            if ($count>2) {

                            ?>



                              
                            <?php
                            } else {

                            ?>


                                <div class="col s12 m6">
                                    <h5 class="card-title center">Add New Payment Information</h5>


                                    <form action="../services/db/addofline.php" enctype="multipart/form-data"  method="POST" >

                                    <div class="row">
                                    <div class="input-field col m12">
                                                <input type="number" id="ammount" name="ammount"  min=0 required>
                                                <label for="ammount" class="">Payment Ammount</label>
                                            </div>
                                            <div class="input-field col m12">
                                                <input type="text" id="t_id" name="transaction_id"  required>
                                                <label for="t_id" class="">Transaction Id</label>
                                            </div>
                                            <div class="col m6 s6 file-field input-field">
                                                    <div class="btn float-right">
                                                        <span>Transaction Recipt</span>
                                                        <input type="file" name="image"  accept="image/*">
                                                    </div>
                                                    <div class="file-path-wrapper">
                                                        <input class="file-path validate" type="text">
                                                    </div>
                                                </div>

                                            <input type="text" id="h_date" name="user_id"  value=<?php echo $id;?> hidden>
                                            <input type="text" id="h_date" name="user_type"  value=1 hidden>

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
                                            
                                            <th data-field="name">Ammount</th>
                                            <th data-field="id">Transaction Id</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                        for ($i = 0; $i < mysqli_num_rows($all); $i++) {
                                            $sal = mysqli_fetch_array($all);
                                        ?>

                                            <tr>
                                                <td><?php echo $sal['amount']; ?></td>
                                                <td><?php echo $sal['transaction_id']; ?></td>
                                                <td><?php if ($sal['status']==0) echo "Pending";
                                              else  if ($sal['status']==1) echo "Accepted";
                                              else  if ($sal['status']==3) echo "Rejected";

                                              else echo "Used";

                                                
                                                
                                                ?></td>
                                                
                                                
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