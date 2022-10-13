<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<?php
session_start();
// if(!(isset($_SESSION['id']) && isset($_SESSION['type'])))
// header('location:index.php'); 

require('../layout/header.php');
require('../config/dbconfig.php');

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
            <?php require('./mobilemenu.php'); ?>
        </ul>
        <div class="navigation-background"></div><a class="sidenav-trigger btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
    </aside>

    <div id="main">
        <div class="row">
            <div class="col s12 m12 l12">
                <div id="responsive-table" class="card card card-default scrollspy">
                    <div class="card-content">
                        <h4 class="card-title center">Manage Designation Information</h4>
                        <div class="row">

                            <?php
                            if (isset($_GET['id'])) {
                                $id = $_GET['id'];
                                $qur = "SELECT * FROM `designation` WHERE `designation_id`=$id";
                                $res = $conn->query($qur);
                                $res = mysqli_fetch_array($res);
                            ?>



                                <div class="col s12 m6">
                                    <h5 class="card-title center">Update Designation Information</h5>


                                    <form action="../services/db/updatedesg.php" method="post">

                                        <div class="row">

                                            <div class="input-field col m12">
                                                <input type="text" id="fn" name="title" min=0 value='<?php echo $res['title']; ?>' required>
                                                <label for="fn" class="">Title</label>
                                            </div>
                                        </div>
                                        <input type="number" id="designation_id" name="designation_id" value=<?php echo $res['designation_id']; ?> hidden>
                                        <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Save
                                            <i class="material-icons right">save</i>
                                        </button>
                                    </form>


                                </div>

                            <?php
                            } else {

                            ?>


                                <div class="col s12 m6">
                                    <h5 class="card-title center">Add New Designation</h5>


                                    <form action="../services/db/adddesg.php" method="post">

                                    <div class="row">
                                    <div class="input-field col s12 m12">
    <input type="text" id="fn" name="title" required>
    <label for="fn" class="">Title</label>
</div>


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
                                <h5 class="card-title center">Designation List</h5>
                                <table class="bordered">
                                    <thead>
                                        <tr>
                                            <th data-field="id">Designation Id</th>
                                            <th data-field="name">Title</th>
                                            <th>Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $qur = "SELECT * FROM `designation`";
                                        $alldesg = $conn->query($qur);

                                        for ($i = 0; $i < mysqli_num_rows($alldesg); $i++) {
                                            $desg = mysqli_fetch_array($alldesg);
                                        ?>

                                            <tr>
                                                <td><?php echo $desg['designation_id']; ?></td>
                                                <td><?php echo $desg['title']; ?></td>
                                                <td><a type="submit" name="action" href="?id=<?php echo  $desg['designation_id']; ?>"> <i class="material-icons right">edit</i></a></td>
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