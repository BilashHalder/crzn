<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<?php
session_start();
if(!(isset($_SESSION['id']) && isset($_SESSION['admin'])))
header('location:index.php'); 

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
                <div class="row">
                            <div class="col s12 m12 l12">
                                <div id="basic-tabs" class="card card card-default scrollspy">
                                    <div class="card-content">
                                        <div class="card-title">
                                            <div class="row">
                                                <div class="col s12 m6 l10">
                                                    <h4 class="card-title">Associate Information</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s12">
                                                <div class="row active" id="main-view">
                                                    <div class="col s12">
                                                        <ul class="tabs tab-demo z-depth-1">
                                                            <li class="tab col m3"><a class="" href="#test1">Test 1</a></li>
                                                            <li class="tab col m3"><a href="#test2" class="">Test 2</a></li>
                                                            <li class="tab col m3"><a href="#test3" class="">Test 3</a></li>
                                                            <li class="tab col m3"><a href="#test4" class="active">Test 4</a></li>
                                                        <li class="indicator" style="left: 876px; right: 15px;"></li></ul>
                                                    </div>
                                                    <div class="col s12">
                                                        <div id="test1" class="col s12" style="display: none;">
                                                            <p class="mt-2 mb-2">
                                                                Oat cake oat cake marzipan macaroon fruitcake. Ice cream gummi bears ice cream ice cream
                                                                danish jelly beans caramels tootsie roll. Pie macaroon croissant tart cake jelly beans
                                                                fruitcake.
                                                            </p>
                                                        </div>
                                                        <div id="test2" class="col s12" style="display: none;">
                                                            <p class="mt-2 mb-2">
                                                                Pudding chocolate bear claw dragée biscuit. Jelly powder cake. Liquorice biscuit donut
                                                                jelly-o chocolate. Liquorice cake gummies tart cupcake.
                                                            </p>
                                                        </div>
                                                        <div id="test3" class="col s12" style="display: none;">
                                                            <p class="mt-2 mb-2">
                                                                Cupcake ipsum dolor sit amet. Powder donut cake. Pudding toffee jujubes marzipan pudding.
                                                            </p>
                                                        </div>
                                                        <div id="test4" class="col s12 active" style="display: block;">
                                                            <p class="mt-2 mb-2">
                                                                Brownie marshmallow sweet macaroon. Danish carrot cake chocolate bar dessert croissant
                                                                toffee pie caramels. Bonbon tart croissant chupa chups dessert.
                                                            </p>
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
                <div class="content-overlay"></div>
            </div>
        </div>
    </div>
    <?php require('../layout/footer.php') ?>
</body>
</html>