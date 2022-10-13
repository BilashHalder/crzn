<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<?php
session_start();
if(!(isset($_SESSION['id']) && isset($_SESSION['admin'])))
header('location:index.php'); 

require('../config/dbconfig.php');
require('../layout/header.php');
$id=$_GET['id'];

$qur="SELECT * FROM `investment` WHERE `investment_id`=$id";
$res=$conn->query($qur);
$info=mysqli_fetch_array($res);


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
            <div class="row">
                            <div class="col s12">
                                   
                                <div class="row">
                                <div class="col s12 m6 l6">
                                <div id="basic-form" class="card card card-default scrollspy">
                                    <div class="card-content">
                                       
                                    
                                    <ul id="projects-collection" class="collection z-depth-1">
                                    <li class="collection-item avatar">
                                        <i class="material-icons cyan circle">person</i>
                                        <h6 class="collection-header m-0">Invester Information</h6>
                                        <p>Id</p>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5">
                                                <p class="collections-title font-weight-600">Full Name</p>
                                            </div>
                                            <div class="col s7"><span class="task-cat cyan font-weight-800">ram amama</span></div>
                                            
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5">
                                                <p class="collections-title font-weight-600">Contact No</p>
                                            </div>
                                            <div class="col s6"><span class="task-cat red accent-2">92929292929</span></div>
                                           
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5">
                                                <p class="collections-title font-weight-600">Email</p>
                                            </div>
                                            <div class="col s7"><span class="task-cat teal accent-4">nanana@gaga.com</span></div>
                                        </div>
                                    </li>
                                </ul>  
                                <?php 
                                $acn=$info['nominee_id'];
                                $sql="SELECT * FROM `nominee` WHERE `nominee_id`=$acn";
                                $bcn=$conn->query($sql);
                                $bcn=mysqli_fetch_array($bcn);

                                ?>

                                
                                <ul id="projects-collection" class="collection z-depth-1">
                                    <li class="collection-item avatar">
                                        <i class="material-icons cyan circle">person</i>
                                        <h6 class="collection-header m-0">Nominee Information</h6>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5">
                                                <p class="collections-title font-weight-600">Full Name</p>
                                            </div>
                                            <div class="col s7"><span class="task-cat cyan font-weight-800"><?php echo $bcn['name'];?></span></div>
                                            
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5">
                                                <p class="collections-title font-weight-600">Date of Birth</p>
                                            </div>
                                            <div class="col s6"><span class="task-cat red accent-2"><?php echo $bcn['dob'];?></span></div>
                                           
                                        </div>
                                    </li>
                                </ul> 
                                <?php 
                                $acn=$info['account_no'];
                                $sql="SELECT * FROM `bank_account` WHERE `account_no`='$acn'";
                                $bcn=$conn->query($sql);
                                $bcn=mysqli_fetch_array($bcn);

                                ?>
                                <ul id="projects-collection" class="collection z-depth-1">
                                    <li class="collection-item avatar">
                                        <i class="material-icons cyan circle">account_balance</i>
                                        <h6 class="collection-header m-0">Bank Account Information</h6>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5">
                                                <p class="collections-title font-weight-600">Account No </p>
                                            </div>
                                            <div class="col s7"><span class="task-cat cyan font-weight-800"><?php echo $bcn['account_no'];?></span></div>
                                            
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5">
                                                <p class="collections-title font-weight-600">IFSC CODE</p>
                                            </div>
                                            <div class="col s6"><span class="task-cat green accent-2"><?php echo $bcn['ifsc_code'];?></span></div>
                                           
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5">
                                                <p class="collections-title font-weight-600">Bank Name</p>
                                            </div>
                                            <div class="col s6"><span class="task-cat green accent-2"><?php echo $bcn['branch'];?></span></div>
                                           
                                        </div>
                                    </li>
                                </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l6">
                                <div id="placeholder" class="card card card-default scrollspy">
                                    <div class="card-content">
                                        <h4 class="card-title">Invesment Information</h4>

                                        <ul id="projects-collection" class="collection z-depth-1">
                                    <li class="collection-item avatar">
                                        <i class="material-icons cyan circle">description</i>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5">
                                                <p class="collections-title font-weight-600">Investment Id </p>
                                            </div>
                                            <div class="col s7"><?php echo $info['investment_id'];?></div>
                                            
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5">
                                                <p class="collections-title font-weight-600">Amount</p>
                                            </div>
                                            <div class="col s7"><?php echo $info['ammount'];?></div>
                                           
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5">
                                                <p class="collections-title font-weight-600">Investment Date </p>
                                            </div>
                                            <div class="col s7"><?php echo $info['date_time'];?></div>
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5">
                                                <p class="collections-title font-weight-600">Return</p>
                                            </div>
                                            <div class="col s7"><?php echo $info['roi'].'%';?></div>
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5">
                                                <p class="collections-title font-weight-600">Status</p>
                                            </div>
                                            <div class="col s7"><?php if($info['status']==0) echo "Pending"; else if($info['status']==1) echo "Active";else if($info['status']==2) echo "Withdrawal Request";else echo "Closed"; ?></div>
                                        </div>
                                    </li>
                                </ul>
                                       <div>

                                       <div class="verify">
                                    <?php if($info['status']==0) {?>
                                        <div id="basic-form" class="card card card-default scrollspy">
                                    <div class="card-content">
                                        <h4 class="card-title center">Verify Invesment</h4>
                                        <form action="../services/db/verifyinvestment.php" id="customerForm"  enctype="multipart/form-data"  method="POST">
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input type="number" id="fn" name="roi" required>
                                                    <label for="fn">Return</label>
                                                </div>
                                            </div>
                                            <div class="file-field input-field">
                                                    <div class="btn float-right">
                                                        <span>Upload Agreement</span>
                                                        <input type="file" name="doc" required>
                                                    </div>
                                                    <div class="file-path-wrapper">
                                                        <input class="file-path validate" type="text" required>
                                                        <input type="text" name="id" value="<?php echo $info['investment_id'];?>" hidden>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Save
                                                            <i class="material-icons right">save</i>
                                                        </button>
                                                    </div>
                                                </div>
                                        </form>
                                    </div>

                                   
                                </div>

                                <?php } 
                                elseif($info['status']==1){
                                    echo "<p class='green-text'>Investment Active Verifed By Admin</p>";

                                 ?> 
                                 
                               <a href="closeinvesment.php?id=<?php echo $info['investment_id'] ?>" class="btn btn-primary mt-4 red">Close Investemnt</a>
                                 <?php   
                                }
                                elseif($info['status']==3){
                                    echo "<p class='red-text'>Investment Closed.</p>";

                                }
                                else{

                                ?>
                                <p class="blue-text center"> Withdrawal Request By Customer</p>
                               <p class="mt-5">Requset Time : <?php echo $info['withdrw_req_time'];?></p>
                               <a href="closeinvesment.php?id=<?php echo $info['investment_id'] ?>" class="btn btn-primary mt-4 red">Close Investemnt</a>
                                    <?php }?>
                            </div>
                                       </div>
                                    </div>
                                </div>
                            </div>
                            </div>




                        </div>
                    </div> 


                    <div class="row">
                            <div class="col s12 m12 l12">
                                <div id="striped-table" class="card card card-default scrollspy">
                                    <div class="card-content">
                                        <h4 class="card-title center">Payout History </h4>
                                        <div class="row">
                                            <div class="col s12">
                                            </div>
                                            <div class="col s12">
                                                <table class="striped">
                                                    <thead>
                                                        <tr>
                                                            <th data-field="id">Payout Reference No</th>
                                                            <th data-field="name">Ammount</th>
                                                            <th data-field="price">Date of Credit</th>
                                                        </tr>
                                                    </thead>
                                                    <?php 
                                                    $invid=$info['investment_id'];
                                                    $sql="SELECT * FROM `payout` WHERE `invesment_id`=$invid  ORDER BY date_credit DESC";
                                                    $temp=$conn->query($sql);
                                                    $count=mysqli_num_rows($temp);
                                                    if($count==0)
                                                    echo "<p>No Payouts For This Investment</p>";
                                                    else{
                                                    ?>
                                                    <tbody>
                                                        <?php 
                                                        for($i=0;$i<$count;$i++){
                                                            $tt=mysqli_fetch_array($temp);
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $tt['id'];?></td>
                                                            <td><?php echo $tt['ammount'];?></td>
                                                            <td><?php echo $tt['date_credit'];?></td>
                                                        </tr>
                                                        <?php }?>
                                                    </tbody>
                                                    <?php }?>
                                                </table>
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