<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<?php
// session_start();
// if(!(isset($_SESSION['id']) && isset($_SESSION['type'])))
// header('location:index.php'); 
require('../config/dbconfig.php');
require('../layout/header.php');

$qur="SELECT * FROM `customer`";
$res=$conn->query($qur);
$count=mysqli_num_rows($res);

?>


<body class="horizontal-layout page-header-light horizontal-menu preload-transitions 2-columns   " data-open="click" data-menu="horizontal-menu" data-col="2-columns">
    <header class="page-topbar" id="header">
        <div class="navbar navbar-fixed">
            <nav class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-dark gradient-45deg-light-blue-cyan">
                <div class="nav-wrapper">
                    <ul class="left">
                        <li>
                            <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="index.html"><img src="../assets/images/logo/materialize-logo.png" alt="materialize logo"><span class="logo-text hide-on-med-and-down">Creazione CRM</span></a></h1>
                        </li>
                    </ul>
                    <ul class="navbar-list right">
                        <li><a class="waves-effect waves-block waves-light profile-button" href="javascript:void(0);" data-target="profile-dropdown"><span class="avatar-status avatar-online"><img src="../assets/images/avatar/avatar-7.png" alt="avatar"><i></i></span></a></li>
                    </ul>

                    <ul class="dropdown-content" id="profile-dropdown">
                        <li><a class="grey-text text-darken-1" href="user-profile-page.html"><i class="material-icons">person_outline</i> Profile</a></li>
                        <li><a class="grey-text text-darken-1" href="user-login.html"><i class="material-icons">keyboard_tab</i> Logout</a></li>
                    </ul>
                </div>
            </nav>

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
            <div class="col s12 m12 l12">
                <div id="button-trigger" class="card card card-default scrollspy">
                    <div class="card-content">
                        <h4 class="card-title center">Customer List</h4>
                        <div class="row">
                            <div class="col s12">
                            </div>
                            <div class="col s12">
                                <div id="data-table-simple_wrapper" class="dataTables_wrapper">
                                   
                                <table id="mytable" class="display dataTable dtr-inline responsive-table" role="grid" aria-describedby="data-table-simple_info" style="width: 1160px;">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" style="width: 189px;" aria-sort="ascending" aria-label="Id: activate to sort column descending">Customer Id</th>
                                                <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" style="width: 288px;" aria-label="Name: activate to sort column ascending">Full Name</th>
                                                <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" style="width: 149px;" aria-label="Phone: activate to sort column ascending">Phone No</th>
                                                <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" style="width: 112px;" aria-label="Email: activate to sort column ascending">Email Id</th>
                                                <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" style="width: 128px;" aria-label="Status: activate to sort column ascending">Status</th>
                                                <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" style="width: 126px;" aria-label="Salary: activate to sort column ascending">View</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if($count==0)
                                            echo "<h3>No Records Found</h3>";
                                            else{
                                                for($i=0;$i<$count;$i++){
                                                    $rec=mysqli_fetch_array($res);
                                                        ?>

                                                 <tr role="row" class="<?php if($i%2) echo "odd";else echo "even"; ?>">
                                                <td tabindex="0" class="sorting_1"><?php echo $rec['customer_id']?></td>
                                                <td><?php echo $rec['name']?></td>
                                                <td><?php echo $rec['phone']?></td>
                                                <td><?php echo $rec['email']?></td>
                                                <td><?php if($rec['status']==1) echo "Active"; else "Blocked";?></td>
                                                <td>
                                                    <a href="empinfo.php?id=<?php echo $rec['customer_id']?>">View </a>
                                                    </td>
                                            </tr>

                                            <?php

                                                }
                                            } 
                                            
                                            
                                            ?>
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
    <?php require('../layout/footer.php') ?>
    <script>
        $(document).ready( function () {
    $('#mytable').DataTable();
} );
    </script>
</body>
</html>