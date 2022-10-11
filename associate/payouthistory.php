<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<?php
session_start();
if (!(isset($_SESSION['id']) && isset($_SESSION['type'])))
    header('location:index.php');

    require('../config/dbconfig.php');
    require('../layout/header.php');

    $uid=$_SESSION['id'];
    $qur="SELECT * FROM `payout` WHERE `user_id`=$uid AND `user_type`=1";
    $res=$conn->query($qur);
    $count=mysqli_num_rows($res);







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
            <div class="col s12 m12 l12">
                <div id="button-trigger" class="card card card-default scrollspy">
                    <div class="card-content">
                        <h4 class="card-title center">Payout List</h4>
                        <div class="row">
                            <div class="col s12">
                            </div>
                            <div class="col s12">
                                <div id="data-table-simple_wrapper" class="dataTables_wrapper">
                                   
                                <table id="mytable" class="display dataTable dtr-inline responsive-table" role="grid" aria-describedby="data-table-simple_info" style="width: 1160px;">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" style="width: 189px;" aria-sort="ascending" aria-label="Id: activate to sort column descending">Request Id</th>
                                                <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" style="width: 288px;" aria-label="Name: activate to sort column ascending">User Id </th>
                                                <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" style="width: 149px;" aria-label="Phone: activate to sort column ascending">Ammount</th>
                                                <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" style="width: 112px;" aria-label="Email: activate to sort column ascending">Request Time</th>
                                                <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" style="width: 128px;" aria-label="Status: activate to sort column ascending">Account No</th>
                                                <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" style="width: 126px;" aria-label="Salary: activate to sort column ascending">IFSC Code</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if($count==0)
                                            echo "<h5 class='center'>No Records Found</h5>";
                                            else{
                                                for($i=0;$i<$count;$i++){
                                                    $rec=mysqli_fetch_array($res);
                                                        ?>
                                                 <tr role="row" class="<?php if($i%2) echo "odd";else echo "even"; ?>">
                                                <td tabindex="0" class="sorting_1"><?php echo $rec['id']?></td>
                                                <td><?php echo $rec['invesment_id']?></td>
                                                <td><?php echo $rec['ammount']?></td>
                                                <td><?php echo $rec['date_credit']?></td>
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