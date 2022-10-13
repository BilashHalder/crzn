<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<?php
session_start();
if (!(isset($_SESSION['id']) && isset($_SESSION['admin'])))
    header('location:index.php');

require('../layout/header.php');
require('../config/dbconfig.php');
$id = $_SESSION['id'];
$tid = $_GET['id'];
$sql = "SELECT * FROM `offline_transaction` WHERE `id`=$tid";
$rec = $conn->query($sql);
$res = mysqli_fetch_array($rec);

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
            <div class="col s12 m12 l12">
                <div id="responsive-table" class="card card card-default scrollspy">
                    <div class="card-content">
                        <h4 class="card-title center">Verify Transaction</h4>
                        <div class="row">
                            <div class="col s12">
                                <h5 class="card-title center">Transaction Information</h5>
                                <table class="bordered">
                                    <thead>
                                        <tr>

                                            <th data-field="name">Transaction Id</th>
                                            <th data-field="id">Ammount</th>
                                            <th>Date</th>
                                            <th>Reference</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $res['transaction_id']; ?></td>
                                            <td><?php echo $res['amount']; ?></td>
                                            <td><?php echo $res['transaction_time']; ?></td>
                                            <td><a target="_blank" href="../uploads/images/<?php echo $res['file_url']; ?>">View</a></td>
                                        </tr>
                                    </tbody>
                                </table>


                                <?php 
                                if($res['status']==0)
                                {
                                ?>

                                    <div class="col s12 mt-2 mb-2">
                                    <a href="../services/db/updateoffile.php?id=<?php echo $res['id'];?>&&status=1"class="btn mb-1 waves-effect waves-light cyan  mr-1" type="submit" name="action">Accepted
                                        <i class="material-icons left">check</i>
                                </a>
                                    <a href="../services/db/updateoffile.php?id=<?php echo $res['id'];?>&&status=3" class="btn mb-1 waves-effect waves-light red" type="submit" name="action">Rejected
                                        <i class="material-icons right">clear</i>
                                </a>
                                </div>
                            </div>
                            <?php } else if($res['status']==1) {
                                ?>
                                <div class="col s12 mt-4">
                                                        <div class="card card-alert green white-text">
                                                            <div class="card-content">
                                                                <p>
                                                                Transaction Verified By Admin</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                <?php }
                                else{
                                ?>
                                 <div class="col s12 mt-4">
                                                        <div class="card card-alert red white-text">
                                                            <div class="card-content">
                                                                <p>Transaction Not Valid Rejected By Admin.</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                <?php }?>

                                <a href="offlinereq.php" class="btn mb-1 waves-effect waves-light mr-1" type="submit" name="action">Back to All
                                                        <i class="material-icons left">reply</i>
                                </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require('../layout/footer.php') ?>
</body>

</html>