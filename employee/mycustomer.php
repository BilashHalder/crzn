<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<?php
// session_start();
// if(!(isset($_SESSION['id']) && isset($_SESSION['type'])))
// header('location:index.php'); 

require('../layout/header.php');

?> 



<body class="horizontal-layout page-header-light horizontal-menu preload-transitions 2-columns   " data-open="click" data-menu="horizontal-menu" data-col="2-columns">
    <header class="page-topbar" id="header">
        <div class="navbar navbar-fixed">
            <nav class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-dark gradient-45deg-light-blue-cyan">
                <div class="nav-wrapper">
                    <ul class="left">
                        <li>
                            <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="index.html"><img src="../assets/images/logo/materialize-logo.png" alt="materialize logo"><span class="logo-text hide-on-med-and-down">Materialize</span></a></h1>
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

        <div class="col s12 m12 l12">
                                <div id="responsive-table" class="card card card-default scrollspy">
                                    <div class="card-content">
                                        <h4 class="card-title">Responsive Table</h4>
                                        <div class="row">
                                            <div class="col s12">
                                            </div>
                                            <div class="col s12">
                                                <table class="responsive-table">
                                                    <thead>
                                                        <tr>
                                                            <th data-field="id">Name</th>
                                                            <th data-field="name">Item Name</th>
                                                            <th data-field="price">Item Price</th>
                                                            <th data-field="total">Total</th>
                                                            <th data-field="status">Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Alvin</td>
                                                            <td>Eclair</td>
                                                            <td>$0.87</td>
                                                            <td>$1.87</td>
                                                            <td>Yes</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Alan</td>
                                                            <td>Jellybean</td>
                                                            <td>$3.76</td>
                                                            <td>$10.87</td>
                                                            <td>No</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jonathan</td>
                                                            <td>Lollipop</td>
                                                            <td>$7.00</td>
                                                            <td>$12.87</td>
                                                            <td>Yes</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Shannon</td>
                                                            <td>KitKat</td>
                                                            <td>$9.99</td>
                                                            <td>$14.87</td>
                                                            <td>No</td>
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
<?php require('../layout/footer.php')?>
</body>

</html>