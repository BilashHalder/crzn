<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<?php
session_start();
// if(!(isset($_SESSION['id']) && isset($_SESSION['type'])))
// header('location:index.php'); 

require('../layout/header.php');
require('../config/dbconfig.php');
function calculateSalary($salary){
    return(($salary['basic']+$salary['hra']+$salary['conveyance']+$salary['medical']+$salary['special'])-($salary['pf']+$salary['insurance']+$salary['tax']));
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
                        $qur="SELECT * FROM `salary` WHERE `salary_id`=$id";
                        $res=$conn->query($qur);
                        $res=mysqli_fetch_array($res);
                        ?>



<div class="col s12 m6">
                                <h5 class="card-title center">Update Salary Information</h5>

                                
                                <form action="../services/db/updatesalary.php" method="post">

                                    <div class="row">

                                        <div class="input-field col s6 m6">
                                            <input type="number" id="fn" name="basic" min=0  value=<?php echo $res['basic'];?> required>
                                            <label for="fn" class="">Basic</label>
                                        </div>
                                        <div class="input-field col s6 m6">
                                            <input type="number" id="fn" name="hra" min=0 value=<?php echo $res['hra'];?> required>
                                            <label for="fn" class="">Hra</label>
                                        </div>
                                        <div class="input-field col s6 m6">
                                            <input type="number" id="fn" name="conveyance" min=0 value=<?php echo $res['conveyance'];?>  required>
                                            <label for="fn" class="">Conveyance</label>
                                        </div>
                                        <div class="input-field col s6 m6">
                                            <input type="number" id="fn" name="medical" min=0 value=<?php echo $res['medical'];?> required>
                                            <label for="fn" class="">Medical</label>
                                        </div>
                                        <div class="input-field col s6 m6">
                                            <input type="number" id="fn" name="special" min=0 value=<?php echo $res['special'];?> required>
                                            <label for="fn" class="">Special</label>
                                        </div>
                                        <div class="input-field col s6 m6">
                                            <input type="number" id="fn" name="pf" min=0 value=<?php echo $res['pf'];?> required>
                                            <label for="fn" class="">PF</label>
                                        </div>


                                        <div class="input-field col s6 m6">
                                            <input type="number" id="fn" name="insurance" min=0 value=<?php echo $res['insurance'];?>  required>
                                            <label for="fn" class="">Insurance</label>
                                        </div>
                                        <div class="input-field col s6 m6">
                                            <input type="number" id="fn" name="tax" min=0 value=<?php echo $res['tax'];?> required>
                                            <label for="fn" class="">Tax</label>
                                        </div>
                                    </div>
                                    <input type="number" id="salary_id" name="salary_id"  value=<?php echo $res['salary_id'];?> hidden>
                                    <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Save
                                        <i class="material-icons right">save</i>
                                    </button>
                                </form>


                            </div>

<?php 
                        }
                        else{

                            ?>


<div class="col s12 m6">
                                <h5 class="card-title center">Add New Salary Information</h5>

                                
                                <form action="../services/db/addsalary.php" method="post">

                                    <div class="row">

                                        <div class="input-field col s6 m6">
                                            <input type="number" id="fn" name="basic" min=0 required>
                                            <label for="fn" class="">Basic</label>
                                        </div>
                                        <div class="input-field col s6 m6">
                                            <input type="number" id="fn" name="hra" min=0 required>
                                            <label for="fn" class="">Hra</label>
                                        </div>
                                        <div class="input-field col s6 m6">
                                            <input type="number" id="fn" name="conveyance" min=0 required>
                                            <label for="fn" class="">Conveyance</label>
                                        </div>
                                        <div class="input-field col s6 m6">
                                            <input type="number" id="fn" name="medical" min=0 required>
                                            <label for="fn" class="">Medical</label>
                                        </div>
                                        <div class="input-field col s6 m6">
                                            <input type="number" id="fn" name="special" min=0 required>
                                            <label for="fn" class="">Special</label>
                                        </div>
                                        <div class="input-field col s6 m6">
                                            <input type="number" id="fn" name="pf" min=0 required>
                                            <label for="fn" class="">PF</label>
                                        </div>


                                        <div class="input-field col s6 m6">
                                            <input type="number" id="fn" name="insurance" min=0 required>
                                            <label for="fn" class="">Insurance</label>
                                        </div>
                                        <div class="input-field col s6 m6">
                                            <input type="number" id="fn" name="tax" min=0 required>
                                            <label for="fn" class="">Tax</label>
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
                           




                            <div class="col s12 m6">
                                <h5 class="card-title center">Salary List</h5>
                                <table class="bordered">
                                                    <thead>
                                                        <tr>
                                                            <th data-field="id">Salary Id</th>
                                                            <th data-field="name">Total Salary</th>
                                                            <th>Edit</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php 
                                                         $qur="SELECT * FROM `salary`";
                                                         $allsalary = $conn->query($qur);
                                                        
                                                         for($i=0;$i< mysqli_num_rows($allsalary);$i++){
                                                            $salary=mysqli_fetch_array($allsalary);    
                                                    ?>

                                                        <tr>
                                                            <td><?php echo $salary['salary_id'];?></td>
                                                            <td><?php echo calculateSalary($salary);?></td>
                                                            <td><a  type="submit" name="action" href="?id=<?php echo  $salary['salary_id']; ?>"> <i class="material-icons right">edit</i></a></td>
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