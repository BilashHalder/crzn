<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<?php
session_start();
if (!(isset($_SESSION['id']) && isset($_SESSION['type'])))
    header('location:index.php');

require('../config/dbconfig.php');
require('../layout/header.php');

$id = $_SESSION['id'];
$sql = "SELECT * FROM `customer` WHERE `customer_id`=$id";
$data = $conn->query($sql);
$data = mysqli_fetch_array($data);



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
                                            <img src="../uploads/images/<?php echo $data['image']; ?>" alt="users view avatar" class="z-depth-4 circle" height="64" width="64">
                                        </a>
                                        <div class="media-body">
                                            <h6>
                                                <span><?php echo $data['name']; ?></span>

                                            </h6>
                                            <span>Customer Id : CRZNCUS<?php echo $data['customer_id']; ?></span>
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
                                                    <td>Email Id :</td>
                                                    <td><?php echo $data['email']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Phone No:</td>
                                                    <td><?php echo $data['phone']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Verified:</td>
                                                    <td>Yes</td>
                                                </tr>
                                                <tr>
                                                    <td>Balance:</td>
                                                    <td>₹ <?php echo $data['balance']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Status:</td>
                                                    <td><span class=" users-view-status chip green lighten-5 green-text">Active</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col s12 m8">

                                        <?php
                                        if ($data['document_id']) {
                                            $docid = $data['document_id'];
                                            $uql = "SELECT * FROM `document` WHERE `document_id`=$docid";
                                            $docinfo = $conn->query($uql);
                                            $docinfo = mysqli_fetch_array($docinfo);
                                        ?>
                                            <p class="green-text center">Kyc Information</p>
                                            <table class="responsive-table">
                                                <tbody>
                                                    <tr>
                                                        <td>Adhar Card</td>
                                                        <td><?php echo $docinfo['adhar_no']; ?></td>
                                                        <td class="green-text">Verified</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pan Card</td>
                                                        <td><?php echo $docinfo['pan_no']; ?></td>
                                                        <td class="green-text">Verified</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Address</td>
                                                        <td><?php echo $docinfo['address']; ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        <?php } else {

                                        ?>

                                            <div id="basic-form" class="card card card-default scrollspy">
                                                <div class="card-content">
                                                    <h4 class="card-title center">Please Add Your Follwing Information</h4>
                                                    <form action="../services/db/customerkyc.php" method="get">
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <input type="number" id="adhar" required name="adhar">
                                                                <label for="adhar">Adhar No</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <input id="pan" type="text" required name="pan">
                                                                <label for="pan">Pan No</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <textarea id="message" class="materialize-textarea" name="address" required></textarea>
                                                                <label for="message">Address</label>
                                                            </div>
                                                            <input type="number" name="id" hidden value="<?php echo $data['customer_id']; ?>">
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
                                        <?php } ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <div class="row">
                                    <div class="col s6">
                                        <h6 class="center">Update Image</h6>
                                        <form action="../services/db/updatecustomerimage.php" enctype="multipart/form-data"  method="POST">
                                            <div class="file-field input-field">
                                                <div class="btn">
                                                    <span>Select Image</span>
                                                    <input type="file" name="img" accept="image/png, image/gif, image/jpeg">
                                                </div>
                                                <input type="number" name="id" hidden value="<?php echo $data['customer_id']; ?>">
                                                <div class="file-path-wrapper">
                                                    <input class="file-path validate" type="text">
                                                </div>
                                                <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Save
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col s6">
                                        <h6 class="center">Update Password</h6>
                                        <form action="../services/db/updatecustomerpass.php" enctype="multipart/form-data"  method="POST">
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input type="password" id="fn" name="pass" required>
                                                    <label for="fn">Password </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input id="password" type="password" name="cpass" required>
                                                    <label for="password">Confirm Password</label>
                                                </div>
                                            </div>
                                            <input type="number" name="id" hidden value="<?php echo $data['customer_id']; ?>">
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

                </div>
            </div>
            <div class="content-overlay"></div>
        </div>
    </div>
    </div>
    <?php require('../layout/footer.php') ?>
</body>

</html>