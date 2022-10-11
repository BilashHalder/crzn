<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<?php 
session_start();
if(!(isset($_SESSION['id']) && isset($_SESSION['type'])))
header('location:index.php'); 
require('../config/dbconfig.php');
require('../layout/header.php');

$uid=$_SESSION['id'];
$qur="SELECT * FROM `associate` WHERE `associate_id`=$uid";
$res=$conn->query($qur);
$rec=mysqli_fetch_array($res);



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
                        <div id="card-stats" class="pt-0">
                            <div class="row">
                                <div class="col s12 m6 l6 xl3">
                                    <div class="card gradient-45deg-light-blue-cyan gradient-shadow min-height-100 white-text animate fadeLeft">
                                        <div class="padding-4">
                                            <div class="row">
                                                <div class="col s4 m4">
                                                    <i class="material-icons background-round mt-5">account_balance_wallet</i>
                                                    <p>Balance</p>
                                                </div>
                                                <div class="col s8 m8">
                                                    <h5 class="mb-0 px-2 white-text">₹ <?php echo $rec['balance'];?></h5>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s12 m6 l6 xl3">
                                    <div class="card gradient-45deg-red-pink gradient-shadow min-height-100 white-text animate fadeLeft">
                                        <div class="padding-4">
                                            <div class="row">
                                                <div class="col s6 m6">
                                                    <i class="material-icons background-round mt-5">perm_identity</i>
                                                    <p>My Customer</p>
                                                </div>
                                                <div class="col s6 m6 right-align">
                                                    <?php 
                                                    $ref="CRZNAST00".$uid;
                                                    $qur="SELECT * FROM `customer` WHERE `referred_by`='$ref'";
                                                    $temp=$conn->query($qur);
                                                    $temp=mysqli_num_rows($temp);
                                                    
                                                    ?>
                                                    <h5 class="mb-0 white-text"><?php echo $temp;?></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s12 m6 l6 xl3">
                                    <div class="card gradient-45deg-amber-amber gradient-shadow min-height-100 white-text animate fadeRight">
                                        <div class="padding-4">
                                            <div class="row">
                                                <div class="col s6 m6">
                                                    <i class="material-icons background-round mt-5">timeline</i>
                                                    <p>My Invesment</p>
                                                </div>
                                                <div class="col s5 m5 right-align">
                                                    <h5 class="mb-0 white-text"></h5>
                                                    <p class="no-margin">Total Amount</p>
                                                    <p>3,42,230</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s12 m6 l6 xl3">
                                    <div class="card gradient-45deg-green-teal gradient-shadow min-height-100 white-text animate fadeRight">
                                        <div class="padding-4">
                                            <div class="row">
                                                <div class="col s7 m7">
                                                    <i class="material-icons background-round mt-5">attach_money</i>
                                                    <p>Profit</p>
                                                </div>
                                                <div class="col s5 m5 right-align">
                                                    <?php 
                                                    $sql="SELECT SUM(ammount) AS totalamount FROM payout WHERE user_id=$uid AND user_type=2";
                                                    $res=$conn->query($sql);
                                                    $rec=mysqli_fetch_array($res);
                                                    
                                                    ?>
                                                    <p class="no-margin">Total Profit</p>
                                                    <h5 class="mb-0 white-text">₹ <?php if($rec['totalamount']) echo $rec['totalamount'];else echo "0";?></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="daily-data-chart">
                            <div class="row">
                                <div class="col s12 m4 l4">
                                    <div class="card pt-0 pb-0 animate fadeLeft">
                                        <div class="dashboard-revenue-wrapper padding-2 ml-2">
                                            <span class="new badge gradient-45deg-light-blue-cyan gradient-shadow mt-2 mr-2">+ 42.6%</span>
                                            <p class="mt-2 mb-0">Members online</p>
                                            <p class="no-margin grey-text lighten-3">360 avg</p>
                                            <h5>3,450</h5>
                                        </div>
                                        <div class="sample-chart-wrapper" style="margin-bottom: -14px; margin-top: -75px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                            <canvas id="custom-line-chart-sample-one" class="center chartjs-render-monitor" width="576" height="288" style="display: block; height: 192px; width: 384px;"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s12 m4 l4 animate fadeUp">
                                    <div class="card pt-0 pb-0">
                                        <div class="dashboard-revenue-wrapper padding-2 ml-2">
                                            <span class="new badge gradient-45deg-purple-deep-orange gradient-shadow mt-2 mr-2">+ 12%</span>
                                            <p class="mt-2 mb-0">Current server load</p>
                                            <p class="no-margin grey-text lighten-3">23.1% avg</p>
                                            <h5>+2500</h5>
                                        </div>
                                        <div class="sample-chart-wrapper" style="margin-bottom: -14px; margin-top: -75px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                            <canvas id="custom-line-chart-sample-two" class="center chartjs-render-monitor" width="576" height="288" style="display: block; height: 192px; width: 384px;"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s12 m4 l4">
                                    <div class="card pt-0 pb-0 animate fadeRight">
                                        <div class="dashboard-revenue-wrapper padding-2 ml-2">
                                            <span class="new badge gradient-45deg-amber-amber gradient-shadow mt-2 mr-2">+ $900</span>
                                            <p class="mt-2 mb-0">Today's revenue</p>
                                            <p class="no-margin grey-text lighten-3">$40,512 avg</p>
                                            <h5>$ 22,300</h5>
                                        </div>
                                        <div class="sample-chart-wrapper" style="margin-bottom: -14px; margin-top: -75px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                            <canvas id="custom-line-chart-sample-three" class="center chartjs-render-monitor" width="576" height="288" style="display: block; height: 192px; width: 384px;"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="ecommerce-product">
                            <div id="ecommerce-offer">
                                <div class="row">
                                    <div class="col s12 m3">
                                        <div class="card gradient-shadow gradient-45deg-light-blue-cyan border-radius-3 animate fadeUp">
                                            <div class="card-content center">
                                                <h5 class="white-text lighten-4">50% Off</h5>
                                                <p class="white-text lighten-4">On apple watch</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12 m3">
                                        <div class="card gradient-shadow gradient-45deg-red-pink border-radius-3 animate fadeUp">
                                            <div class="card-content center">
                                                <h5 class="white-text lighten-4">20% Off</h5>
                                                <p class="white-text lighten-4">On Canon Printer</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12 m3">
                                        <div class="card gradient-shadow gradient-45deg-amber-amber border-radius-3 animate fadeUp">
                                            <div class="card-content center">
                                                <h5 class="white-text lighten-4">40% Off</h5>
                                                <p class="white-text lighten-4">On apple macbook</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12 m3">
                                        <div class="card gradient-shadow gradient-45deg-green-teal border-radius-3 animate fadeUp">
                                            <div class="card-content center">
                                                <h5 class="white-text lighten-4">60% Off</h5>
                                                <p class="white-text lighten-4">On any game</p>
                                            </div>
                                        </div>
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
<?php require('../layout/footer.php')?>
</body>

</html>