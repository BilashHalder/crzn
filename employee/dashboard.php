<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<?php

session_start();

require('../layout/header.php');?>



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
            <div class="content-wrapper-before blue-grey lighten-5"></div>
            <div class="col s12">
                <div class="container">
                    <div class="section">
                        <!-- Current balance & total transactions cards-->
                        <div class="row vertical-modern-dashboard">
                            <div class="col s12 m4 l4">
                                <!-- Current Balance -->
                                <div class="card animate fadeLeft">
                                    <div class="card-content">
                                        <h6 class="mb-0 mt-0 display-flex justify-content-between">Current Balance <i class="material-icons float-right">more_vert</i>
                                        </h6>
                                        <p class="medium-small">This billing cycle</p>
                                        <div class="current-balance-container">
                                            <div id="current-balance-donut-chart" class="current-balance-shadow" style="position: relative;"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-donut" style="width: 100%; height: 100%;"><g class="ct-series ct-series-b ct-fill-donut"><path d="M167.802,9A76,76,0,0,0,95.44,61.767" class="ct-slice-donut" ct:value="20" ct:meta="Remaining" style="stroke-width: 8px;"></path></g><g class="ct-series ct-series-a ct-fill-donut"><path d="M95.522,61.515A76,76,0,1,0,167.802,9" class="ct-slice-donut" ct:value="80" ct:meta="Completed" style="stroke-width: 8px;"></path></g><g class="ct-series ct-series-a"><path d="M95.522,61.515A76,76,0,1,0,167.802,9" class="ct-slice-donut" ct:value="80" ct:meta="Completed" style="stroke-width: 8px;"></path></g><g class="ct-series ct-series-b"><path d="M167.802,9A76,76,0,0,0,95.44,61.767" class="ct-slice-donut" ct:value="20" ct:meta="Remaining" style="stroke-width: 8px;"></path></g></svg><div class="ct-fill-donut-label" data-fill-index="fdid-0" style="position: absolute; top: 60px; left: 136px;"><p class="small">Balance</p><h5 class="mt-0 mb-0">$ 10k</h5></div></div>
                                        </div>
                                        <h5 class="center-align">$ 50,150.00</h5>
                                        <p class="medium-small center-align">Used balance this billing cycle</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m8 l8 animate fadeRight">
                                <!-- Total Transaction -->
                                <div class="card">
                                    <div class="card-content">
                                        <h4 class="card-title mb-0">Total Transaction <i class="material-icons float-right">more_vert</i></h4>
                                        <p class="medium-small">This month transaction</p>
                                        <div class="total-transaction-container">
                                            <div id="total-transaction-line-chart" class="total-transaction-shadow"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;"><g class="ct-grids"><line y1="210" y2="210" x1="40" x2="749.21875" class="ct-grid ct-vertical"></line><line y1="168" y2="168" x1="40" x2="749.21875" class="ct-grid ct-vertical"></line><line y1="126" y2="126" x1="40" x2="749.21875" class="ct-grid ct-vertical"></line><line y1="84" y2="84" x1="40" x2="749.21875" class="ct-grid ct-vertical"></line><line y1="42" y2="42" x1="40" x2="749.21875" class="ct-grid ct-vertical"></line><line y1="0" y2="0" x1="40" x2="749.21875" class="ct-grid ct-vertical"></line></g><g><g class="ct-series ct-series-a"><path d="M40,197.4C72.237,197.4,72.237,168,104.474,168C136.712,168,136.712,193.2,168.949,193.2C201.186,193.2,201.186,126,233.423,126C265.661,126,265.661,180.6,297.898,180.6C330.135,180.6,330.135,21,362.372,21C394.609,21,394.609,189,426.847,189C459.084,189,459.084,63,491.321,63C523.558,63,523.558,126,555.795,126C588.033,126,588.033,8.4,620.27,8.4C652.507,8.4,652.507,84,684.744,84C716.982,84,716.982,0,749.219,0" class="ct-line"></path><circle cx="40" cy="197.4" ct:value="3" r="5" class="ct-point ct-point-circle-transperent"></circle><circle cx="104.47443181818181" cy="168" ct:value="10" r="5" class="ct-point ct-point-circle-transperent"></circle><circle cx="168.94886363636363" cy="193.2" ct:value="4" r="5" class="ct-point ct-point-circle-transperent"></circle><circle cx="233.42329545454544" cy="126" ct:value="20" r="5" class="ct-point ct-point-circle-transperent"></circle><circle cx="297.89772727272725" cy="180.6" ct:value="7" r="5" class="ct-point ct-point-circle-transperent"></circle><circle cx="362.37215909090907" cy="21" ct:value="45" r="5" class="ct-point ct-point-circle-transperent"></circle><circle cx="426.8465909090909" cy="189" ct:value="5" r="5" class="ct-point ct-point-circle-transperent"></circle><circle cx="491.3210227272727" cy="63" ct:value="35" r="5" class="ct-point ct-point-circle"></circle><circle cx="555.7954545454545" cy="126" ct:value="20" r="5" class="ct-point ct-point-circle-transperent"></circle><circle cx="620.2698863636363" cy="8.400000000000006" ct:value="48" r="5" class="ct-point ct-point-circle-transperent"></circle><circle cx="684.7443181818181" cy="84" ct:value="30" r="5" class="ct-point ct-point-circle-transperent"></circle><circle cx="749.21875" cy="0" ct:value="50" r="5" class="ct-point ct-point-circle-transperent"></circle></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="40" y="215" width="64.47443181818181" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 64px; height: 20px;"></span></foreignObject><foreignObject style="overflow: visible;" x="104.47443181818181" y="215" width="64.47443181818181" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 64px; height: 20px;"></span></foreignObject><foreignObject style="overflow: visible;" x="168.94886363636363" y="215" width="64.47443181818181" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 64px; height: 20px;"></span></foreignObject><foreignObject style="overflow: visible;" x="233.42329545454544" y="215" width="64.47443181818181" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 64px; height: 20px;"></span></foreignObject><foreignObject style="overflow: visible;" x="297.89772727272725" y="215" width="64.47443181818181" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 64px; height: 20px;"></span></foreignObject><foreignObject style="overflow: visible;" x="362.37215909090907" y="215" width="64.47443181818181" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 64px; height: 20px;"></span></foreignObject><foreignObject style="overflow: visible;" x="426.8465909090909" y="215" width="64.47443181818181" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 64px; height: 20px;"></span></foreignObject><foreignObject style="overflow: visible;" x="491.3210227272727" y="215" width="64.47443181818181" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 64px; height: 20px;"></span></foreignObject><foreignObject style="overflow: visible;" x="555.7954545454545" y="215" width="64.47443181818176" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 64px; height: 20px;"></span></foreignObject><foreignObject style="overflow: visible;" x="620.2698863636363" y="215" width="64.47443181818187" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 64px; height: 20px;"></span></foreignObject><foreignObject style="overflow: visible;" x="684.7443181818181" y="215" width="64.47443181818187" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 64px; height: 20px;"></span></foreignObject><foreignObject style="overflow: visible;" x="749.21875" y="215" width="30" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 30px; height: 20px;"></span></foreignObject><foreignObject style="overflow: visible;" y="168" x="0" height="42" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 42px; width: 30px;">0</span></foreignObject><foreignObject style="overflow: visible;" y="126" x="0" height="42" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 42px; width: 30px;">10</span></foreignObject><foreignObject style="overflow: visible;" y="84" x="0" height="42" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 42px; width: 30px;">20</span></foreignObject><foreignObject style="overflow: visible;" y="42" x="0" height="42" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 42px; width: 30px;">30</span></foreignObject><foreignObject style="overflow: visible;" y="0" x="0" height="42" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 42px; width: 30px;">40</span></foreignObject><foreignObject style="overflow: visible;" y="-30" x="0" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">50</span></foreignObject></g><defs><linearGradient id="lineLinearStats" x1="0" y1="0" x2="1" y2="0"><stop offset="0%" stop-color="rgba(255, 82, 249, 0.1)"></stop><stop offset="10%" stop-color="rgba(255, 82, 249, 1)"></stop><stop offset="30%" stop-color="rgba(255, 82, 249, 1)"></stop><stop offset="95%" stop-color="rgba(133, 3, 168, 1)"></stop><stop offset="100%" stop-color="rgba(133, 3, 168, 0.1)"></stop></linearGradient></defs></svg></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Current balance & total transactions cards-->

                        <!-- User statistics & appointment cards-->
                        <div class="row">
                            <div class="col s12 l5">
                                <!-- User Statistics -->
                                <div class="card user-statistics-card animate fadeLeft">
                                    <div class="card-content">
                                        <h4 class="card-title mb-0">User Statistics <i class="material-icons float-right">more_vert</i></h4>
                                        <div class="row">
                                            <div class="col s12 m6">
                                                <ul class="collection border-none mb-0">
                                                    <li class="collection-item avatar">
                                                        <i class="material-icons circle pink accent-2">trending_up</i>
                                                        <p class="medium-small">This year</p>
                                                        <h5 class="mt-0 mb-0">60%</h5>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col s12 m6">
                                                <ul class="collection border-none mb-0">
                                                    <li class="collection-item avatar">
                                                        <i class="material-icons circle purple accent-4">trending_down</i>
                                                        <p class="medium-small">Last year</p>
                                                        <h5 class="mt-0 mb-0">40%</h5>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="user-statistics-container">
                                            <div id="user-statistics-bar-chart" class="user-statistics-shadow ct-golden-section"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-bar" style="width: 100%; height: 100%;"><g class="ct-grids"></g><g><g class="ct-series ct-series-a"><line x1="65.75186975097657" x2="65.75086975097656" y1="120" y2="96" class="ct-bar" ct:value="4000" style="stroke-width: 12px"></line><circle cx="65.75086975097656" cy="96" r="6" class="ct-slice-pie"></circle><line x1="132.2536092529297" x2="132.2526092529297" y1="120" y2="72" class="ct-bar" ct:value="8000" style="stroke-width: 12px"></line><circle cx="132.2526092529297" cy="72" r="6" class="ct-slice-pie"></circle><line x1="198.75534875488282" x2="198.7543487548828" y1="120" y2="48" class="ct-bar" ct:value="12000" style="stroke-width: 12px"></line><circle cx="198.7543487548828" cy="48" r="6" class="ct-slice-pie"></circle><line x1="265.2570882568359" x2="265.25608825683594" y1="120" y2="36" class="ct-bar" ct:value="14000" style="stroke-width: 12px"></line><circle cx="265.25608825683594" cy="36" r="6" class="ct-slice-pie"></circle><line x1="331.75882775878904" x2="331.75782775878906" y1="120" y2="48" class="ct-bar" ct:value="12000" style="stroke-width: 12px"></line><circle cx="331.75782775878906" cy="48" r="6" class="ct-slice-pie"></circle><line x1="398.26056726074216" x2="398.2595672607422" y1="120" y2="12" class="ct-bar" ct:value="18000" style="stroke-width: 12px"></line><circle cx="398.2595672607422" cy="12" r="6" class="ct-slice-pie"></circle></g><g class="ct-series ct-series-b"><line x1="80.75186975097657" x2="80.75086975097656" y1="120" y2="90" class="ct-bar" ct:value="5000" style="stroke-width: 12px"></line><circle cx="80.75086975097656" cy="90" r="6" class="ct-slice-pie"></circle><line x1="147.2536092529297" x2="147.2526092529297" y1="120" y2="60" class="ct-bar" ct:value="10000" style="stroke-width: 12px"></line><circle cx="147.2526092529297" cy="60" r="6" class="ct-slice-pie"></circle><line x1="213.75534875488282" x2="213.7543487548828" y1="120" y2="42" class="ct-bar" ct:value="13000" style="stroke-width: 12px"></line><circle cx="213.7543487548828" cy="42" r="6" class="ct-slice-pie"></circle><line x1="280.2570882568359" x2="280.25608825683594" y1="120" y2="48" class="ct-bar" ct:value="12000" style="stroke-width: 12px"></line><circle cx="280.25608825683594" cy="48" r="6" class="ct-slice-pie"></circle><line x1="346.75882775878904" x2="346.75782775878906" y1="120" y2="54" class="ct-bar" ct:value="11000" style="stroke-width: 12px"></line><circle cx="346.75782775878906" cy="54" r="6" class="ct-slice-pie"></circle><line x1="413.26056726074216" x2="413.2595672607422" y1="120" y2="30" class="ct-bar" ct:value="15000" style="stroke-width: 12px"></line><circle cx="413.2595672607422" cy="30" r="6" class="ct-slice-pie"></circle></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="40" y="125" width="66.50173950195312" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 67px; height: 20px;">B1</span></foreignObject><foreignObject style="overflow: visible;" x="106.50173950195312" y="125" width="66.50173950195312" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 67px; height: 20px;">B2</span></foreignObject><foreignObject style="overflow: visible;" x="173.00347900390625" y="125" width="66.50173950195312" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 67px; height: 20px;">B3</span></foreignObject><foreignObject style="overflow: visible;" x="239.50521850585938" y="125" width="66.50173950195312" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 67px; height: 20px;">B4</span></foreignObject><foreignObject style="overflow: visible;" x="306.0069580078125" y="125" width="66.50173950195312" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 67px; height: 20px;">B5</span></foreignObject><foreignObject style="overflow: visible;" x="372.5086975097656" y="125" width="66.50173950195312" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 67px; height: 20px;">B6</span></foreignObject><foreignObject style="overflow: visible;" y="60" x="0" height="60" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 60px; width: 30px;">0k</span></foreignObject><foreignObject style="overflow: visible;" y="0" x="0" height="60" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 60px; width: 30px;">10k</span></foreignObject><foreignObject style="overflow: visible;" y="-30" x="0" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">20k</span></foreignObject></g><defs><linearGradient id="barGradient1" x1="0" y1="0" x2="0" y2="1"><stop offset="0" stop-color="rgba(255,75,172,1)"></stop><stop offset="1" stop-color="rgba(255,75,172, 0.6)"></stop></linearGradient><linearGradient id="barGradient2" x1="0" y1="0" x2="0" y2="1"><stop offset="0" stop-color="rgba(129,51,255,1)"></stop><stop offset="1" stop-color="rgba(129,51,255, 0.6)"></stop></linearGradient></defs></svg></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 l4">
                                <!-- Recent Buyers -->
                                <div class="card recent-buyers-card animate fadeUp">
                                    <div class="card-content">
                                        <h4 class="card-title mb-0">Recent Buyers <i class="material-icons float-right">more_vert</i></h4>
                                        <p class="medium-small pt-2">Today</p>
                                        <ul class="collection mb-0">
                                            <li class="collection-item avatar">
                                                <img src="../../../app-assets/images/avatar/avatar-7.png" alt="" class="circle">
                                                <p class="font-weight-600">John Doe</p>
                                                <p class="medium-small">18, January 2019</p>
                                                <a href="#!" class="secondary-content"><i class="material-icons">star_border</i></a>
                                            </li>
                                            <li class="collection-item avatar">
                                                <img src="../../../app-assets/images/avatar/avatar-3.png" alt="" class="circle">
                                                <p class="font-weight-600">Adam Garza</p>
                                                <p class="medium-small">20, January 2019</p>
                                                <a href="#!" class="secondary-content"><i class="material-icons">star_border</i></a>
                                            </li>
                                            <li class="collection-item avatar">
                                                <img src="../../../app-assets/images/avatar/avatar-5.png" alt="" class="circle">
                                                <p class="font-weight-600">Jennifer Rice</p>
                                                <p class="medium-small">25, January 2019</p>
                                                <a href="#!" class="secondary-content"><i class="material-icons">star_border</i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 l3">
                                <div class="card animate fadeRight">
                                    <div class="card-content">
                                        <h4 class="card-title mb-0">Conversion Ratio</h4>
                                        <div class="conversion-ration-container mt-8">
                                            <div id="conversion-ration-bar-chart" class="conversion-ration-shadow"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-bar" style="width: 100%; height: 100%;"><g class="ct-grids"></g><g><g class="ct-series ct-series-a"><line x1="111.10517175292969" x2="111.10417175292969" y1="120" y2="54" class="ct-bar" ct:value="55000" style="stroke-width: 40px"></line><circle cx="111.10417175292969" cy="54"></circle></g><g class="ct-series ct-series-b"><line x1="111.10517175292969" x2="111.10417175292969" y1="54" y2="12" class="ct-bar" ct:value="35000" style="stroke-width: 40px"></line><circle cx="111.10417175292969" cy="12"></circle></g><g class="ct-series ct-series-c"><line x1="111.10517175292969" x2="111.10417175292969" y1="12" y2="0" class="ct-bar" ct:value="10000" style="stroke-width: 40px"></line><circle cx="111.10417175292969" cy="0"></circle></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" y="90" x="0" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">0k</span></foreignObject><foreignObject style="overflow: visible;" y="60" x="0" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">25k</span></foreignObject><foreignObject style="overflow: visible;" y="30" x="0" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">50k</span></foreignObject><foreignObject style="overflow: visible;" y="0" x="0" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">75k</span></foreignObject><foreignObject style="overflow: visible;" y="-30" x="0" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">100k</span></foreignObject></g><defs><linearGradient id="barGradient1" x1="0" y1="0" x2="0" y2="1"><stop offset="0" stop-color="rgba(129,51,255,1)"></stop><stop offset="1" stop-color="rgba(129,51,255, 0.6)"></stop></linearGradient><linearGradient id="barGradient2" x1="0" y1="0" x2="0" y2="1"><stop offset="0" stop-color="rgba(255,75,172,1)"></stop><stop offset="1" stop-color="rgba(255,75,172, 0.6)"></stop></linearGradient></defs></svg></div>
                                        </div>
                                        <p class="medium-small center-align">This month conversion ratio</p>
                                        <h5 class="center-align mb-0 mt-0">62%</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Current balance & appointment cards-->

                        <div class="row">
                            <div class="col s12 m6 l4">
                                <div class="card padding-4 animate fadeLeft">
                                    <div class="row">
                                        <div class="col s5 m5">
                                            <h5 class="mb-0">1885</h5>
                                            <p class="no-margin">New</p>
                                            <p class="mb-0 pt-8">1,12,900</p>
                                        </div>
                                        <div class="col s7 m7 right-align">
                                            <i class="material-icons background-round mt-5 mb-5 gradient-45deg-purple-amber gradient-shadow white-text">perm_identity</i>
                                            <p class="mb-0">Total Clients</p>
                                        </div>
                                    </div>
                                </div>
                                <div id="chartjs" class="card pt-0 pb-0 animate fadeLeft">
                                    <div class="dashboard-revenue-wrapper padding-2 ml-2">
                                        <span class="new badge gradient-45deg-indigo-purple gradient-shadow mt-2 mr-2">+ $900</span>
                                        <p class="mt-2 mb-0 font-weight-600">Today's revenue</p>
                                        <p class="no-margin grey-text lighten-3">$40,512 avg</p>
                                        <h5>$ 22,300</h5>
                                    </div>
                                    <div class="sample-chart-wrapper card-gradient-chart"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                        <canvas id="custom-line-chart-sample-three" class="center chartjs-render-monitor" style="display: block; height: 192px; width: 384px;" width="576" height="288"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l8">
                                <div class="card subscriber-list-card animate fadeRight">
                                    <div class="card-content pb-1">
                                        <h4 class="card-title mb-0">Subscriber List <i class="material-icons float-right">more_vert</i></h4>
                                    </div>
                                    <table class="subscription-table responsive-table highlight">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Company</th>
                                                <th>Start Date</th>
                                                <th>Status</th>
                                                <th>Amount</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Michael Austin</td>
                                                <td>ABC Fintech LTD.</td>
                                                <td>Jan 1,2019</td>
                                                <td><span class="badge pink lighten-5 pink-text text-accent-2">Close</span></td>
                                                <td>$ 1000.00</td>
                                                <td class="center-align"><a href="#"><i class="material-icons pink-text">clear</i></a></td>
                                            </tr>
                                            <tr>
                                                <td>Aldin Rakić</td>
                                                <td>ACME Pvt LTD.</td>
                                                <td>Jan 10,2019</td>
                                                <td><span class="badge green lighten-5 green-text text-accent-4">Open</span></td>
                                                <td>$ 3000.00</td>
                                                <td class="center-align"><a href="#"><i class="material-icons pink-text">clear</i></a></td>
                                            </tr>
                                            <tr>
                                                <td>İris Yılmaz</td>
                                                <td>Collboy Tech LTD.</td>
                                                <td>Jan 12,2019</td>
                                                <td><span class="badge green lighten-5 green-text text-accent-4">Open</span></td>
                                                <td>$ 2000.00</td>
                                                <td class="center-align"><a href="#"><i class="material-icons pink-text">clear</i></a></td>
                                            </tr>
                                            <tr>
                                                <td>Lidia Livescu</td>
                                                <td>My Fintech LTD.</td>
                                                <td>Jan 14,2019</td>
                                                <td><span class="badge pink lighten-5 pink-text text-accent-2">Close</span></td>
                                                <td>$ 1100.00</td>
                                                <td class="center-align"><a href="#"><i class="material-icons pink-text">clear</i></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div><!-- START RIGHT SIDEBAR NAV -->
                    <aside id="right-sidebar-nav">
                        <div id="slide-out-right" class="slide-out-right-sidenav sidenav rightside-navigation right-aligned">
                            <div class="row">
                                <div class="slide-out-right-title">
                                    <div class="col s12 border-bottom-1 pb-0 pt-1">
                                        <div class="row">
                                            <div class="col s2 pr-0 center">
                                                <i class="material-icons vertical-text-middle"><a href="#" class="sidenav-close">clear</a></i>
                                            </div>
                                            <div class="col s10 pl-0">
                                                <ul class="tabs">
                                                    <li class="tab col s4 p-0">
                                                        <a href="#messages" class="active">
                                                            <span>Messages</span>
                                                        </a>
                                                    </li>
                                                    <li class="tab col s4 p-0">
                                                        <a href="#settings">
                                                            <span>Settings</span>
                                                        </a>
                                                    </li>
                                                    <li class="tab col s4 p-0">
                                                        <a href="#activity">
                                                            <span>Activity</span>
                                                        </a>
                                                    </li>
                                                <li class="indicator" style="left: 0px; right: 188px;"></li></ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide-out-right-body row pl-3 ps ps--active-y">
                                    <div id="messages" class="col s12 pb-0 active">
                                        <div class="collection border-none mb-0">
                                            <input class="header-search-input mt-4 mb-2" type="text" name="Search" placeholder="Search Messages">
                                            <ul class="collection right-sidebar-chat p-0 mb-0">
                                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar">
                                                        <i></i>
                                                    </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Elizabeth Elliott</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">Thank you</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">5.00 AM</span>
                                                </li>
                                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-1.png" alt="avatar">
                                                        <i></i>
                                                    </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Mary Adams</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">Hello Boo</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">4.14 AM</span>
                                                </li>
                                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-off avatar-50"><img src="../../../app-assets/images/avatar/avatar-2.png" alt="avatar">
                                                        <i></i>
                                                    </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Caleb Richards</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">Hello Boo</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">4.14 AM</span>
                                                </li>
                                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-3.png" alt="avatar">
                                                        <i></i>
                                                    </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Caleb Richards</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">Keny !</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">9.00 PM</span>
                                                </li>
                                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-4.png" alt="avatar">
                                                        <i></i>
                                                    </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">June Lane</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">Ohh God</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">4.14 AM</span>
                                                </li>
                                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-off avatar-50"><img src="../../../app-assets/images/avatar/avatar-5.png" alt="avatar">
                                                        <i></i>
                                                    </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Edward Fletcher</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">Love you</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">5.15 PM</span>
                                                </li>
                                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-6.png" alt="avatar">
                                                        <i></i>
                                                    </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Crystal Bates</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">Can we</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">8.00 AM</span>
                                                </li>
                                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-off avatar-50"><img src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar">
                                                        <i></i>
                                                    </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Nathan Watts</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">Great!</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">9.53 PM</span>
                                                </li>
                                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-off avatar-50"><img src="../../../app-assets/images/avatar/avatar-8.png" alt="avatar">
                                                        <i></i>
                                                    </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Willard Wood</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">Do it</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">4.20 AM</span>
                                                </li>
                                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-1.png" alt="avatar">
                                                        <i></i>
                                                    </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Ronnie Ellis</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">Got that</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">5.20 AM</span>
                                                </li>
                                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-9.png" alt="avatar">
                                                        <i></i>
                                                    </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Daniel Russell</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">Thank you</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">12.00 AM</span>
                                                </li>
                                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-off avatar-50"><img src="../../../app-assets/images/avatar/avatar-10.png" alt="avatar">
                                                        <i></i>
                                                    </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Sarah Graves</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">Okay you</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">11.14 PM</span>
                                                </li>
                                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-off avatar-50"><img src="../../../app-assets/images/avatar/avatar-11.png" alt="avatar">
                                                        <i></i>
                                                    </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Andrew Hoffman</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">Can do</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">7.30 PM</span>
                                                </li>
                                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                                    <span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-12.png" alt="avatar">
                                                        <i></i>
                                                    </span>
                                                    <div class="user-content">
                                                        <h6 class="line-height-0">Camila Lynch</h6>
                                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">Leave it</p>
                                                    </div>
                                                    <span class="secondary-content medium-small">2.00 PM</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="settings" class="col s12" style="display: none;">
                                        <p class="setting-header mt-8 mb-3 ml-5 font-weight-900">GENERAL SETTINGS</p>
                                        <ul class="collection border-none">
                                            <li class="collection-item border-none">
                                                <div class="m-0">
                                                    <span>Notifications</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input checked="" type="checkbox">
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none">
                                                <div class="m-0">
                                                    <span>Show recent activity</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input type="checkbox">
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none">
                                                <div class="m-0">
                                                    <span>Show recent activity</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input type="checkbox">
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none">
                                                <div class="m-0">
                                                    <span>Show Task statistics</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input type="checkbox">
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none">
                                                <div class="m-0">
                                                    <span>Show your emails</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input type="checkbox">
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none">
                                                <div class="m-0">
                                                    <span>Email Notifications</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input checked="" type="checkbox">
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <p class="setting-header mt-7 mb-3 ml-5 font-weight-900">SYSTEM SETTINGS</p>
                                        <ul class="collection border-none">
                                            <li class="collection-item border-none">
                                                <div class="m-0">
                                                    <span>System Logs</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input type="checkbox">
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none">
                                                <div class="m-0">
                                                    <span>Error Reporting</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input type="checkbox">
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none">
                                                <div class="m-0">
                                                    <span>Applications Logs</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input checked="" type="checkbox">
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none">
                                                <div class="m-0">
                                                    <span>Backup Servers</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input type="checkbox">
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="collection-item border-none">
                                                <div class="m-0">
                                                    <span>Audit Logs</span>
                                                    <div class="switch right">
                                                        <label>
                                                            <input type="checkbox">
                                                            <span class="lever"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div id="activity" class="col s12" style="display: none;">
                                        <div class="activity">
                                            <p class="mt-5 mb-0 ml-5 font-weight-900">SYSTEM LOGS</p>
                                            <ul class="widget-timeline mb-0">
                                                <li class="timeline-items timeline-icon-green active">
                                                    <div class="timeline-time">Today</div>
                                                    <h6 class="timeline-title">Homepage mockup design</h6>
                                                    <p class="timeline-text">Melissa liked your activity.</p>
                                                    <div class="timeline-content orange-text">Important</div>
                                                </li>
                                                <li class="timeline-items timeline-icon-cyan active">
                                                    <div class="timeline-time">10 min</div>
                                                    <h6 class="timeline-title">Melissa liked your activity Drinks.</h6>
                                                    <p class="timeline-text">Here are some news feed interactions concepts.</p>
                                                    <div class="timeline-content green-text">Resolved</div>
                                                </li>
                                                <li class="timeline-items timeline-icon-red active">
                                                    <div class="timeline-time">30 mins</div>
                                                    <h6 class="timeline-title">12 new users registered</h6>
                                                    <p class="timeline-text">Here are some news feed interactions concepts.</p>
                                                    <div class="timeline-content">
                                                        <img src="../../../app-assets/images/icon/pdf.png" alt="document" height="30" width="25" class="mr-1">Registration.doc
                                                    </div>
                                                </li>
                                                <li class="timeline-items timeline-icon-indigo active">
                                                    <div class="timeline-time">2 Hrs</div>
                                                    <h6 class="timeline-title">Tina is attending your activity</h6>
                                                    <p class="timeline-text">Here are some news feed interactions concepts.</p>
                                                    <div class="timeline-content">
                                                        <img src="../../../app-assets/images/icon/pdf.png" alt="document" height="30" width="25" class="mr-1">Activity.doc
                                                    </div>
                                                </li>
                                                <li class="timeline-items timeline-icon-orange">
                                                    <div class="timeline-time">5 hrs</div>
                                                    <h6 class="timeline-title">Josh is now following you</h6>
                                                    <p class="timeline-text">Here are some news feed interactions concepts.</p>
                                                    <div class="timeline-content red-text">Pending</div>
                                                </li>
                                            </ul>
                                            <p class="mt-5 mb-0 ml-5 font-weight-900">APPLICATIONS LOGS</p>
                                            <ul class="widget-timeline mb-0">
                                                <li class="timeline-items timeline-icon-green active">
                                                    <div class="timeline-time">Just now</div>
                                                    <h6 class="timeline-title">New order received urgent</h6>
                                                    <p class="timeline-text">Melissa liked your activity.</p>
                                                    <div class="timeline-content orange-text">Important</div>
                                                </li>
                                                <li class="timeline-items timeline-icon-cyan active">
                                                    <div class="timeline-time">05 min</div>
                                                    <h6 class="timeline-title">System shutdown.</h6>
                                                    <p class="timeline-text">Here are some news feed interactions concepts.</p>
                                                    <div class="timeline-content blue-text">Urgent</div>
                                                </li>
                                                <li class="timeline-items timeline-icon-red">
                                                    <div class="timeline-time">20 mins</div>
                                                    <h6 class="timeline-title">Database overloaded 89%</h6>
                                                    <p class="timeline-text">Here are some news feed interactions concepts.</p>
                                                    <div class="timeline-content">
                                                        <img src="../../../app-assets/images/icon/pdf.png" alt="document" height="30" width="25" class="mr-1">Database-log.doc
                                                    </div>
                                                </li>
                                            </ul>
                                            <p class="mt-5 mb-0 ml-5 font-weight-900">SERVER LOGS</p>
                                            <ul class="widget-timeline mb-0">
                                                <li class="timeline-items timeline-icon-green active">
                                                    <div class="timeline-time">10 min</div>
                                                    <h6 class="timeline-title">System error</h6>
                                                    <p class="timeline-text">Melissa liked your activity.</p>
                                                    <div class="timeline-content red-text">Error</div>
                                                </li>
                                                <li class="timeline-items timeline-icon-cyan">
                                                    <div class="timeline-time">1 min</div>
                                                    <h6 class="timeline-title">Production server down.</h6>
                                                    <p class="timeline-text">Here are some news feed interactions concepts.</p>
                                                    <div class="timeline-content blue-text">Urgent</div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 601px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 285px;"></div></div></div>
                            </div>
                        </div>

                        <!-- Slide Out Chat -->
                        <ul id="slide-out-chat" class="sidenav slide-out-right-sidenav-chat right-aligned">
                            <li class="center-align pt-2 pb-2 sidenav-close chat-head">
                                <a href="#!"><i class="material-icons mr-0">chevron_left</i>Elizabeth Elliott</a>
                            </li>
                            <li class="chat-body">
                                <ul class="collection ps ps--active-y">
                                    <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                        <span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar">
                                        </span>
                                        <div class="user-content speech-bubble">
                                            <p class="medium-small">hello!</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                                        <div class="user-content speech-bubble-right">
                                            <p class="medium-small">How can we help? We're here for you!</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                        <span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar">
                                        </span>
                                        <div class="user-content speech-bubble">
                                            <p class="medium-small">I am looking for the best admin template.?</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                                        <div class="user-content speech-bubble-right">
                                            <p class="medium-small">Materialize admin is the responsive materializecss admin template.</p>
                                        </div>
                                    </li>

                                    <li class="collection-item display-grid width-100 center-align">
                                        <p>8:20 a.m.</p>
                                    </li>

                                    <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                        <span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar">
                                        </span>
                                        <div class="user-content speech-bubble">
                                            <p class="medium-small">Ohh! very nice</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                                        <div class="user-content speech-bubble-right">
                                            <p class="medium-small">Thank you.</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                        <span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar">
                                        </span>
                                        <div class="user-content speech-bubble">
                                            <p class="medium-small">How can I purchase it?</p>
                                        </div>
                                    </li>

                                    <li class="collection-item display-grid width-100 center-align">
                                        <p>9:00 a.m.</p>
                                    </li>

                                    <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                                        <div class="user-content speech-bubble-right">
                                            <p class="medium-small">From ThemeForest.</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                                        <div class="user-content speech-bubble-right">
                                            <p class="medium-small">Only $24</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                        <span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar">
                                        </span>
                                        <div class="user-content speech-bubble">
                                            <p class="medium-small">Ohh! Thank you.</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                                        <span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar">
                                        </span>
                                        <div class="user-content speech-bubble">
                                            <p class="medium-small">I will purchase it for sure.</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                                        <div class="user-content speech-bubble-right">
                                            <p class="medium-small">Great, Feel free to get in touch on</p>
                                        </div>
                                    </li>
                                    <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                                        <div class="user-content speech-bubble-right">
                                            <p class="medium-small">https://pixinvent.ticksy.com/</p>
                                        </div>
                                    </li>
                                <div class="ps__rail-x" style="left: 0px; bottom: -757px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 757px; height: 470px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 290px; height: 179px;"></div></div></ul>
                            </li>
                            <li class="center-align chat-footer">
                                <form class="col s12" onsubmit="slideOutChat()" action="javascript:void(0);">
                                    <div class="input-field">
                                        <input id="icon_prefix" type="text" class="search">
                                        <label for="icon_prefix">Type here..</label>
                                        <a onclick="slideOutChat()"><i class="material-icons prefix">send</i></a>
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </aside>
                    <!-- END RIGHT SIDEBAR NAV -->
                    <!-- Intro -->

                    <div id="intro">
                        <div class="row">
                            <div class="col s12">

                                <div id="img-modal" class="modal white" tabindex="0" style="z-index: 1003; display: none; opacity: 0; top: 4%; transform: scaleX(0.8) scaleY(0.8);">
                                    <div class="modal-content">
                                        <div class="bg-img-div"></div>
                                        <p class="modal-header right modal-close">
                                            Skip Intro <span class="right"><i class="material-icons right-align">clear</i></span>
                                        </p>
                                        <div class="carousel carousel-slider center intro-carousel" style="height: 0px;">
                                            <div class="carousel-fixed-item center middle-indicator with-indicators">
                                                <div class="left">
                                                    <button class="movePrevCarousel middle-indicator-text btn btn-flat purple-text waves-effect waves-light btn-prev disabled">
                                                        <i class="material-icons">navigate_before</i> <span class="hide-on-small-only">Prev</span>
                                                    </button>
                                                </div>

                                                <div class="right">
                                                    <button class=" moveNextCarousel middle-indicator-text btn btn-flat purple-text waves-effect waves-light btn-next">
                                                        <span class="hide-on-small-only">Next</span> <i class="material-icons">navigate_next</i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="carousel-item slide-1 active" style="z-index: 0; opacity: 1; visibility: visible; transform: translateX(0px) translateX(0px) translateX(0px) translateZ(0px);">
                                                <img src="../../../app-assets/images/gallery/intro-slide-1.png" alt="" class="responsive-img animated fadeInUp slide-1-img">
                                                <h5 class="intro-step-title mt-7 center animated fadeInUp">Welcome to Materialize</h5>
                                                <p class="intro-step-text mt-5 animated fadeInUp">Materialize is a Material Design Admin
                                                    Template is the excellent responsive google material design inspired multipurpose admin
                                                    template. Materialize has a huge collection of material design animation &amp; widgets, UI
                                                    Elements.</p>
                                            </div>
                                            <div class="carousel-item slide-2" style="transform: translateX(0px) translateX(400px) translateZ(0px); z-index: -1; opacity: 1; visibility: visible;">
                                                <img src="../../../app-assets/images/gallery/intro-features.png" alt="" class="responsive-img slide-2-img">
                                                <h5 class="intro-step-title mt-7 center">Example Request Information</h5>
                                                <p class="intro-step-text mt-5">Lorem ipsum dolor sit amet consectetur,
                                                    adipisicing elit.
                                                    Aperiam deserunt nulla
                                                    repudiandae odit quisquam incidunt, maxime explicabo.</p>
                                                <div class="row">
                                                    <div class="col s6">
                                                        <div class="input-field">
                                                            <label for="first_name" class="active">Name</label>
                                                            <input placeholder="Name" id="first_name" type="text" class="validate">
                                                        </div>
                                                    </div>
                                                    <div class="col s6">
                                                        <div class="input-field">
                                                            <div class="select-wrapper"><input class="select-dropdown dropdown-trigger" type="text" readonly="true" data-target="select-options-ef503a57-8be8-f7af-7963-0bd203c473c1"><ul id="select-options-ef503a57-8be8-f7af-7963-0bd203c473c1" class="dropdown-content select-dropdown" tabindex="0"><li class="disabled selected" id="select-options-ef503a57-8be8-f7af-7963-0bd203c473c10" tabindex="0"><span>Choose your option</span></li><li id="select-options-ef503a57-8be8-f7af-7963-0bd203c473c11" tabindex="0"><span>Option 1</span></li><li id="select-options-ef503a57-8be8-f7af-7963-0bd203c473c12" tabindex="0"><span>Option 2</span></li><li id="select-options-ef503a57-8be8-f7af-7963-0bd203c473c13" tabindex="0"><span>Option 3</span></li></ul><svg class="caret" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M7 10l5 5 5-5z"></path><path d="M0 0h24v24H0z" fill="none"></path></svg><select tabindex="-1">
                                                                <option value="" disabled="" selected="">Choose your option</option>
                                                                <option value="1">Option 1</option>
                                                                <option value="2">Option 2</option>
                                                                <option value="3">Option 3</option>
                                                            </select></div>
                                                            <label>Materialize Select</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item slide-3" style="transform: translateX(0px) translateX(-400px) translateZ(0px); z-index: -1; opacity: 1; visibility: visible;">
                                                <img src="../../../app-assets/images/gallery/intro-app.png" alt="" class="responsive-img slide-1-img">
                                                <h5 class="intro-step-title mt-7 center">Showcase App Features</h5>
                                                <div class="row">
                                                    <div class="col m5 offset-m1 s12">
                                                        <ul class="feature-list left-align">
                                                            <li><i class="material-icons">check</i> Email Application</li>
                                                            <li><i class="material-icons">check</i> Chat Application</li>
                                                            <li><i class="material-icons">check</i> Todo Application</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col m6 s12">
                                                        <ul class="feature-list left-align">
                                                            <li><i class="material-icons">check</i>Contacts Application</li>
                                                            <li><i class="material-icons">check</i>Full Calendar</li>
                                                            <li><i class="material-icons">check</i> Ecommerce Application</li>
                                                        </ul>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col s12 center">
                                                            <button class="get-started btn waves-effect waves-light gradient-45deg-purple-deep-orange mt-3 modal-close">Get
                                                                Started</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <ul class="indicators"><li class="indicator-item active"></li><li class="indicator-item"></li><li class="indicator-item"></li></ul></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / Intro -->
                </div>
                <div class="content-overlay"></div>
            </div>
        </div>
    </div>
<?php require('../layout/footer.php')?>
</body>

</html>