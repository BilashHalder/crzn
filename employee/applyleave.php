<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<?php
session_start();
if (!(isset($_SESSION['id']) && isset($_SESSION['type'])))
    header('location:index.php');
require('../config/dbconfig.php');
require('../layout/header.php');
$id = $_SESSION['id'];

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
            <div class="row">
                <div class="col s8">
                    <div id="html-validations" class="card card-tabs">
                        <div class="card-content">
                            <div class="card-title">
                                <div class="row">
                                    <div class="col s12 m6 l10">
                                        <h4 class="card-title center">Apply Leave </h4>
                                    </div>
                                    <div class="col s12 m6 l2">
                                    </div>
                                </div>
                            </div>
                            <div id="html-view-validations">
                                <form class="formValidate0" action="../services/employee/applyleave.php" id="customerForm"  enctype="multipart/form-data"  method="POST">
                                    <div class="row">
                                        <div class="input-field col s12 m4">
                                            <label for="uname0" class="">Leave From</label>
                                            <input class="validate " required="" id="uname0" name="from" type="date">
                                        </div>
                                        <div class="input-field col s12 m4">
                                            <label for="cemail0" class="">Leave To</label>
                                            <input class="validate " required="" id="cemail0" type="date" name="to">
                                        </div>

                                        <input class="validate " required="" id="cemail0" type="text" name="emp_id" value="<?php echo $id;?>" hidden>

                                        <div class="col s6 m4">
                                            <div class="input-field">
                                                <select class="error" id="gender" name="type" data-error=".errorTxt7" required>
                                                    <option value="">Select</option>
                                                    <option value="annual">Annual</option>
                                                    <option value="casual">Casual</option>
                                                    <option value="sick">Sick</option>
                                                    <option value="maternity">Maternity</option>
                                                    <option value="bereavement">Bereavement</option>
                                                    <option value="others">Others</option>
                                                </select>
                                                <small class="errorTxt7"></small>
                                            </div>
                                        </div>
                                        <div class="input-field col s12 m6">
                                            <div id="view-file-input" class="active">

                                                <div class="file-field input-field">
                                                    <div class="btn">
                                                        <span>File</span>
                                                        <input type="file" name="docs">
                                                    </div>
                                                    <div class="file-path-wrapper">
                                                        <input class="file-path validate" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="input-field col s12 m6 ">
                                            <textarea id="ccomment0" name="ccomment0" class="materialize-textarea validate" required=""></textarea>
                                            <label for="ccomment0">Your comment *</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <button class="btn waves-effect waves-light right" type="submit" name="action">Submit
                                                <i class="material-icons right">send</i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col s4">
                    <div id="html-validations" class="card card-tabs">
                        <div class="card-content">
                            <div class="card-title">
                                Leave Remaining

                                <?php
                                $sql = "SELECT `leave_id` FROM `employee_info` WHERE `employee_id`=$id";
                                $res = $conn->query($sql);
                                $temp = mysqli_fetch_array($res);
                                $lid = $temp['leave_id'];
                                $sql = "SELECT * FROM `leave` WHERE `leave_id`=$lid";
                                $res = $conn->query($sql);
                                $temp = mysqli_fetch_array($res);

                                ?>

                                <div id="striped-table" class="card card card-default scrollspy">
                                    <div class="card-content">
                                        <div class="row">
                                            <div class="col s12">
                                            </div>
                                            <div class="col s12">
                                                <table class="striped">
                                                    <tbody>
                                                        <tr>
                                                            <td>Annual</td>
                                                            <td><?php echo $temp['annual']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Casual</td>
                                                            <td><?php echo $temp['casual']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sick</td>
                                                            <td><?php echo $temp['sick']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Maternity</td>
                                                            <td><?php echo $temp['maternity']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Bereavement</td>
                                                            <td><?php echo $temp['bereavement']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Others</td>
                                                            <td><?php echo $temp['others']; ?></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
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
    </div>
    <?php require('../layout/footer.php') ?>
</body>

</html>