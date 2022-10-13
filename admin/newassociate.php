<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<?php
session_start();
// if(!(isset($_SESSION['id']) && isset($_SESSION['type'])))
// header('location:index.php'); 
require('../config/dbconfig.php');
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
            <?php require('./mobilemenu.php'); ?>
        </ul>
        <div class="navigation-background"></div><a class="sidenav-trigger btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
    </aside>

    <div id="main">
        <div class="row">
            <div class="col s12">
                <div class="container">
                    <div class="section">
                        <div class="card card card-default scrollspy ">
                            <div class="card-content">
                                <h5 class="center">Add New Associate</h5>
                                <form class="formValidate" action="../services/db/addassociate.php" id="customerForm"  enctype="multipart/form-data"  method="POST" >
                                    <div class="row">
                                        <div class="input-field col s6 m4  ">
                                            <label for="fname">Full Name*</label>
                                            <input id="fname" name="fname" type="text" data-error=".errorTxt1" required>
                                            <small class="errorTxt1"></small>
                                        </div>
                                        <div class="input-field col s6 m4">
                                            <label for="phone">Phone No*</label>
                                            <input id="phone" name="phone" type="number" min=0 data-error=".errorTxt2" required>
                                            <small class="errorTxt2"></small>
                                        </div>

                                        <div class="input-field col s6 m4">
                                            <label for="email">E-Mail *</label>
                                            <input id="email" type="email" name="email" data-error=".errorTxt3" required>
                                            <small class="errorTxt3"></small>
                                        </div>

                                        <div class="input-field col s6 m4">
                                            <label for="commission_rate">Commission Rate</label>
                                            <input id="commission_rate" name="commission_rate" type="number" min=0 data-error=".errorTxt4" required>
                                            <small class="errorTxt4"></small>
                                        </div>


                                       

                                        <div class="col s6 m4">
                                            <label for="gender">Gender *</label>
                                            <div class="input-field">
                                                <select class="error" id="gender" name="gender" data-error=".errorTxt7" required>
                                                    <option value="">Select</option>
                                                    <option value="1">Male</option>
                                                    <option value="2">Female</option>
                                                    <option value="3">Others</option>
                                                </select>
                                                <small class="errorTxt7"></small>
                                            </div>
                                        </div>
                                    <?php 
                                    require('../config/dbconfig.php');
                                    $sqlemp="SELECT * FROM employee where status=1";
                                    $allemp=$conn->query($sqlemp);

                                    
                                    ?>
                                         <div class="col s6 m3">
                                            <label for="employee_id">Report To *</label>
                                            <div class="input-field">
                                                <select class="error" id="employee_id" name="employee_id" data-error=".errorTxt7" required>
                                                <?php 
                                                if(mysqli_num_rows($allemp)<1)
                                                {
                                                    ?>
                                                    <option>Select</option>
                                                    <option value='0'>Admin</option>
                                                    <?php
                                                }
                                                else{
                                                    ?>
                                                    <option>Select</option>
                                                    <option value='0'>Admin</option>
                                                    <?php
                                                    for($i=0;$i<mysqli_num_rows($allemp);$i++){
                                                        $temp=mysqli_fetch_array($allemp)
                                                ?>    
                                                    
                                                    <option value="<?php echo $temp['employee_id'];?>"><?php echo $temp['name'];?></option>
                                                    <?php
                                                } }?>
                                                </select>
                                                <small class="errorTxt7"></small>
                                            </div>
                                        </div>
                                        <div class="col m4 s6 file-field input-field">
                                                    <div class="btn float-right">
                                                        <span>Image</span>
                                                        <input type="file" name="image"  accept="image/*">
                                                    </div>
                                                    <div class="file-path-wrapper">
                                                        <input class="file-path validate" type="text">
                                                    </div>
                                                </div>
                                         <div class="input-field col s6 m4">
                                            <label for="pass">Password *</label>
                                            <input id="pass" type="password" name="pass" data-error=".errorTxt5" required>
                                            <small class="errorTxt5"></small>
                                        </div>

                                        <div class="input-field col s6 m4">
                                            <label for="cpassword">Confirm Password *</label>
                                            <input id="cpassword" type="password" name="cpassword" data-error=".errorTxt6" required>
                                            <small class="errorTxt6"></small>
                                        </div>

                                        <div class="input-field col s12">
                                        <?php if(isset($_SESSION['asserr'])){?>
                                             <p style="text-align: center;color:red"><?php echo $_SESSION['asserr']; ?></p>
                                             <?php unset($_SESSION['asserr']);} ?>

                                            <button class="btn waves-effect waves-light right green" type="submit" name="action">Save
                                                <i class="material-icons right">save</i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
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