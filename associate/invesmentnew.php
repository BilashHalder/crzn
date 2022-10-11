<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<?php
session_start();

if(!(isset($_SESSION['id']) && isset($_SESSION['type'])))
header('location:index.php'); 

require('../config/dbconfig.php');
require('../layout/header.php');

$id=$_SESSION['id'];
$sql="SELECT * FROM `nominee` WHERE `user_id`=$id and `user_type`=2";
$sql2="SELECT * FROM `bank_account` WHERE `user_id`=$id and `user_type`=2";
$sql3="SELECT * FROM `associate` WHERE `associate_id`=$id";


$allnominee=$conn->query($sql);
$allaccount=$conn->query($sql2);
$custifo=$conn->query($sql3);


$coutnm=mysqli_num_rows($allnominee);
$coutacc=mysqli_num_rows($allaccount);
$custifo=mysqli_fetch_array($custifo);

?>



<body class="horizontal-layout page-header-light horizontal-menu preload-transitions 2-columns   " data-open="click" data-menu="horizontal-menu" data-col="2-columns">
    <header class="page-topbar" id="header">
        <div class="navbar navbar-fixed">
        <?php require('./topnav.php');?>

            <nav class="white hide-on-med-and-down" id="horizontal-nav">
                <div class="nav-wrapper">
                    <ul class="left hide-on-med-and-down" id="ul-horizontal-nav" data-menu="menu-navigation">
                        <?php require('./menu.php');?>
                    </ul>
                </div>

            </nav>
        </div>
    </header>



    <aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-fixed hide-on-large-only">
        <div class="brand-sidebar sidenav-light"></div>
        <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed hide-on-large-only menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">
        <?php require('./mobilemenu.php');?>
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
                               <p class="center"> Add New Invesment </p>
                            <form  action="../services/associate/addinvesment.php"   method="get" >
                                   
                            
                            <div class="row">
                                        <div class="col s6 m4">
                                            <label for="account_no">Account No *</label>
                                            <div class="input-field">
                                                <select id="account_no" name="account_no"  required>
                                                  
                                                <?php 
                                                if ($coutacc==0)
                                                    {
                                                        echo "<option >Please Add Bank Account</option>";
                                                    }
                                                    else{
                                                       for($i=0;$i<$coutacc;$i++)
                                                       {
                                                        $rec=mysqli_fetch_array($allaccount);
                                                        ?>
                                                    <option value="<?php echo $rec['account_no'];?>"><?php echo $rec['account_no'];?></option>

                                                    <?php
                                                         }
                                                        }
                                                    ?>

                                                </select>
                                                <small class="errorTxt7"></small>
                                            </div>
                                        </div>

                                        <div class="col s6 m4">
                                            <label for="nominee">Nominee *</label>
                                            <div class="input-field">
                                                <select id="nominee" name="nominee"  required>
                                                <?php 
                                                if ($coutnm==0)
                                                    {
                                                        echo "<option >Please Add Nominee</option>";
                                                    }
                                                    else{
                                                       for($i=0;$i<$coutnm;$i++)
                                                       {
                                                        $rec=mysqli_fetch_array($allnominee);
                                                        ?>
                                                    <option value="<?php echo $rec['nominee_id'];?>"><?php echo $rec['name'];?></option>

                                                    <?php
                                                         }
                                                        }
                                                    ?>

                                                </select>
                                                <small class="errorTxt7"></small>
                                            </div>
                                        </div>

                                        <div class="col s6 m4">
                                            <label for="amount">Enter Ammount *(Min 25000)</label>
                                            <div class="input-field">
                                                <input type="number" name="ammount" min=25000 id="" required>
                                                <input type="number" id="balance" value="<?php echo $custifo['balance'];?>" hidden>
                                                <input type="number" name="id" value=<?php echo $id;?> id="" hidden>
                                                <small class="errorTxt7"></small>
                                            </div>
                                        </div>

                                       
                                        <div class="input-field col s12">
                                            <?php if(isset($_SESSION['inverr'])){?>
                                             <p style="text-align: center;color:red"><?php echo $_SESSION['inverr']; ?></p>
                                             <?php unset($_SESSION['inverr']);} ?>
                                             <?php if(isset($_SESSION['invsucc'])){?>
                                             <p style="text-align: center;color:green"><?php echo $_SESSION['invsucc']; ?></p>
                                             <?php unset($_SESSION['invsucc']);} ?>

                                            <button class="btn waves-effect waves-light right green" type="submit" >Save
                                                <i class="material-icons right">save</i>
                                            </button>
                                        </div>
                                    </div>


                                </form>

                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
<?php require('../layout/footer.php')?>
</body>

</html>