<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<?php
session_start();
if (!(isset($_SESSION['id']) && isset($_SESSION['type'])))
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
            <div class="card">
                <div class="card-content">
                    <h4 class="card-title center">Pending Wrok Reports</h4>
                    <div class="row">
                        <div class="row">
                            <div class="col s12 m5 l6">

                                <?php
                                $id = $_SESSION['id'];
                                $sql = "SELECT * FROM `work_report` WHERE `report_to`=$id AND `status`=3";
                                $res = $conn->query($sql);
                                $count = mysqli_num_rows($res);
                                if ($count == 0) {
                                    echo "<p>No work report pending to approve.</p>";
                                } else {
                                ?>
                                    <div class="col s12">
                                        <table class="responsive-table">
                                            <thead>
                                                <tr>
                                                    <th data-field="id">Employee Id</th>
                                                    <th data-field="name">Date</th>
                                                    <th data-field="price">View</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php

                                                for ($i = 0; $i < $count; $i++) {
                                                    $temp = mysqli_fetch_array($res);
                                                ?>
                                                    <tr>
                                                        <td><?php echo "CRZNEMP00" . $temp['employee_id']; ?></td>
                                                        <td><?php echo $temp['report_date']; ?></td>
                                                        <td><a href="?id=<?php echo $temp['report_id']; ?>">View</a></td>

                                                    </tr>

                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>

                            </div>
                        <?php
                                }
                        ?>
                        <?php
                        if (isset($_GET['id'])) {

                            $rpid = $_GET['id'];
                            $sql = "SELECT * FROM `work_report` WHERE `report_id`=$rpid";
                            $repo = $conn->query($sql);
                            $temp = mysqli_fetch_array($repo);
                        ?>
                            <div class="col s12 m7 l6">
                                <div class="card ">
                                    <div class="card-content">
                                        <span class="card-title center">Work Report Details</span>
                                        <table class="bordered">
                                            <thead>
                                                <tr>

                                                    <th data-field="price">Employee Id</th>
                                                    <th data-field="id">Report Date </th>
                                                    <th data-field="name">Login Time </th>
                                                    <th data-field="price">Logout Time</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><?php echo "CRZNEMP00" . $temp['employee_id']; ?></td>
                                                    <td><?php echo $temp['report_date']; ?></td>
                                                    <td><?php echo $temp['start_time']; ?></td>
                                                    <td><?php echo $temp['submit_time']; ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <p class="mt-5"> <?php echo $temp['report']; ?> </p>
                                        <?php if ($temp['document_url']) { ?>
                                            <a href="<?php echo "../uploads/documents/" . $temp['document_url']; ?>" target="_blank">Reference Document</a>
                                        <?php } ?>
                                    </div>
                                    <form action="../services/employee/reject.php">

                                    <div class="card-action">
                                        <div class="row">
                                            <input id="first_name2" type="text" class="validate valid" required name="comment">
                                            <label class="active" for="first_name2">Comment</label>
                                            <input type="text" name="id" value="<?php echo $rpid;?>" hidden>
                                        </div>
                                        <div class="mt-4">
                                        <a href="../services/employee/accept.php?id=<?php echo $rpid;?>" class=" btn ">Accept</a>
                                        <button type="submit" class=" btn ">Reject</button>
                                        </div>
                                    </div>

                                    </form>

                                </div>
                            </div>
                        <?php
                        } ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <?php require('../layout/footer.php') ?>
</body>

</html>