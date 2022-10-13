<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<?php
session_start();
// if(!(isset($_SESSION['id']) && isset($_SESSION['type'])))
// header('location:index.php'); 

require('../layout/header.php');
require('../config/dbconfig.php');
function totalLeave($leave){
    return(($leave['annual']+$leave['casual']+$leave['sick']+$leave['maternity']+$leave['bereavement']+$leave['others']));
}
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
                        <h4 class="card-title center">Manage Salary Information</h4>
                        <div class="row">

                        <?php 
                        if(isset($_GET['id'])){
                            $id=$_GET['id'];
                        $qur="SELECT * FROM `leave` WHERE `leave_id`=$id";
                        $res=$conn->query($qur);
                        $res=mysqli_fetch_array($res);
                        ?>



<div class="col s12 m4">
                                <h5 class="card-title center">Update Leave Information</h5>

                                
                                <form action="../services/db/updateleave.php" method="post">

                                    <div class="row">
                                        <div class="input-field col s6 m6">
                                            <input type="number" id="fn" name="annual" min=0  value=<?php echo $res['annual'];?> required>
                                            <label for="annual" class="">Annual Leave</label>
                                        </div>
                                        <div class="input-field col s6 m6">
                                            <input type="number" id="casual" name="casual" min=0 value=<?php echo $res['casual'];?> required>
                                            <label for="casual" class="">Casual Leave</label>
                                        </div>
                                        <div class="input-field col s6 m6">
                                            <input type="number" id="sick" name="sick" min=0 value=<?php echo $res['sick'];?>  required>
                                            <label for="sick" class="">Sick Leave</label>
                                        </div>
                                        <div class="input-field col s6 m6">
                                            <input type="number" id="maternity" name="maternity" min=0 value=<?php echo $res['maternity'];?> required>
                                            <label for="maternity" class="">Maternity Leave</label>
                                        </div>
                                        <div class="input-field col s6 m6">
                                            <input type="number" id="bereavement" name="bereavement" min=0 value=<?php echo $res['bereavement'];?> required>
                                            <label for="bereavement" class="">Bereavement Leave</label>
                                        </div>
                                        <div class="input-field col s6 m6">
                                            <input type="number" id="others" name="others" min=0 value=<?php echo $res['others'];?> required>
                                            <label for="others" class="">Others</label>
                                        </div>
                                    </div>
                                    <input type="number" id="leave_id" name="leave_id"  value=<?php echo $res['leave_id'];?> hidden>
                                    <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Save
                                        <i class="material-icons right">save</i>
                                    </button>
                                </form>


                            </div>

<?php 
                        }
                        else{

                            ?>


<div class="col s12 m4">
                                <h5 class="card-title center">Add New Leave Information</h5>

                                
                                <form action="../services/db/addleave.php" method="post">

                                    <div class="row">
                                    <div class="input-field col s6 m6">
                                            <input type="number" id="fn" name="annual" min=0   required>
                                            <label for="annual" class="">Annual Leave</label>
                                        </div>
                                        <div class="input-field col s6 m6">
                                            <input type="number" id="casual" name="casual" min=0  required>
                                            <label for="casual" class="">Casual Leave</label>
                                        </div>
                                        <div class="input-field col s6 m6">
                                            <input type="number" id="sick" name="sick" min=0   required>
                                            <label for="sick" class="">Sick Leave</label>
                                        </div>
                                        <div class="input-field col s6 m6">
                                            <input type="number" id="maternity" name="maternity" min=0  required>
                                            <label for="maternity" class="">Maternity Leave</label>
                                        </div>
                                        <div class="input-field col s6 m6">
                                            <input type="number" id="bereavement" name="bereavement" min=0  required>
                                            <label for="bereavement" class="">Bereavement Leave</label>
                                        </div>
                                        <div class="input-field col s6 m6">
                                            <input type="number" id="others" name="others" min=0  required>
                                            <label for="others" class="">Others</label>
                                        </div>
                                    </div>

                                    <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Save
                                        <i class="material-icons right">save</i>
                                    </button>
                                </form>


                            </div>


<?php
                        }
                        ?>
                           




                            <div class="col s12 m8">
                                <h5 class="card-title center">Leave List</h5>
                                <table class="bordered responsive-table">
                                                    <thead>
                                                        <tr>
                                                            <th data-field="id">Annual</th>
                                                            <th data-field="name">Casual</th>
                                                            <th data-field="name">Sick</th>
                                                            <th data-field="name">Maternity</th>
                                                            <th data-field="name">Bereavement</th>
                                                            <th data-field="name">Others</th>
                                                            <th data-field="name">Total</th>
                                                            <th>Edit</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php 
                                                         $qur="SELECT * FROM `leave`";
                                                         $allleave = $conn->query($qur);
                                                        
                                                         for($i=0;$i< mysqli_num_rows($allleave);$i++){
                                                            $leave=mysqli_fetch_array($allleave);    
                                                    ?>

                                                        <tr>
                                                            <td><?php echo $leave['annual'];?></td>
                                                            <td><?php echo $leave['casual'];?></td>
                                                            <td><?php echo $leave['sick'];?></td>
                                                            <td><?php echo $leave['maternity'];?></td>
                                                            <td><?php echo $leave['bereavement'];?></td>
                                                            <td><?php echo $leave['others'];?></td>
                                                            <td><?php echo totalLeave($leave);?></td>
                                                            <td><a  type="submit" name="action" href="?id=<?php echo $leave['leave_id'];?>"> <i class="material-icons right">edit</i></a></td>
                                                        </tr>
                                                        <?php }?>
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