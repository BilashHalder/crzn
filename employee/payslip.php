<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<?php
session_start();
if(!(isset($_SESSION['id']) && isset($_SESSION['type'])))
header('location:index.php'); 

require('../layout/header.php');

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
            <div class="content-wrapper-before blue-grey lighten-5"></div>
            <div class="col s12">
                <div class="container">
                    <!-- app invoice View Page -->
                    <section class="invoice-view-wrapper section">
                        <div class="row">
                            <!-- invoice view page -->
                            <div class="col xl9 m8 s12">
                                <div class="card">
                                    <div class="card-content invoice-print-area">
                                        <!-- header section -->
                                        <div class="row invoice-date-number">
                                            <div class="col xl4 s12">
                                                <span class="invoice-number mr-1">payslip</span>
                                                <span>000756</span>
                                            </div>
                                            <div class="col xl8 s12">
                                                <div class="invoice-date display-flex align-items-center flex-wrap">
                                                    <div class="mr-3">
                                                        <small>Date Issue:</small>
                                                        <span>08/10/2019</span>
                                                    </div>
                                                    <div>
                                                        <small>Date Due:</small>
                                                        <span>08/10/2019</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- logo and title -->
                                        <div class="row mt-3 invoice-logo-title">
                                            <div class="col m6 s12 display-flex invoice-logo mt-1 push-m6">
                                                <img src="../../../app-assets/images/gallery/pixinvent-logo.png" alt="logo" height="46" width="164">
                                            </div>
                                            <div class="col m6 s12 pull-m6">
                                                <h4 class="indigo-text">Payslip</h4>
                                                <span>Software Development</span>
                                            </div>
                                        </div>
                                        <div class="divider mb-3 mt-3"></div>
                                        <!-- invoice address and contact -->
                                        <div class="row invoice-info">
                                            <div class="col m6 s12">
                                                <h6 class="invoice-from">Bill From</h6>
                                                <div class="invoice-address">
                                                    <span>Creazion Services PVT. LTD.</span>
                                                </div>
                                                <div class="invoice-address">
                                                    <span>9205 Whitemarsh Street New York, NY 10002</span>
                                                </div>
                                                <div class="invoice-address">
                                                    <span>hello@clevision.net</span>
                                                </div>
                                                <div class="invoice-address">
                                                    <span>601-678-8022</span>
                                                </div>
                                            </div>
                                            <div class="col m6 s12">
                                                <div class="divider show-on-small hide-on-med-and-up mb-3"></div>
                                                <h6 class="invoice-to">Bill To</h6>
                                                <div class="invoice-address">
                                                    <span>Pixinvent PVT. LTD.</span>
                                                </div>
                                                <div class="invoice-address">
                                                    <span>203 Sussex St. Suite B Waukegan, IL 60085</span>
                                                </div>
                                                <div class="invoice-address">
                                                    <span>pixinvent@gmail.com</span>
                                                </div>
                                                <div class="invoice-address">
                                                    <span>987-352-5603</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="divider mb-3 mt-3"></div>
                                        <!-- product details table-->
                                        <div class="invoice-product-details">
                                            <table class="striped responsive-table">
                                                <thead>
                                                    <tr>
                                                        <th>Item</th>
                                                        <th>Description</th>
                                                        <th>Cost</th>
                                                        <th>Qty</th>
                                                        <th class="right-align">Price</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Frest Admin</td>
                                                        <td>HTML Admin Template</td>
                                                        <td>28</td>
                                                        <td>1</td>
                                                        <td class="indigo-text right-align">$28.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Apex Admin</td>
                                                        <td>Anguler Admin Template</td>
                                                        <td>24</td>
                                                        <td>1</td>
                                                        <td class="indigo-text right-align">$24.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Stack Admin</td>
                                                        <td>HTML Admin Template</td>
                                                        <td>24</td>
                                                        <td>1</td>
                                                        <td class="indigo-text right-align">$24.00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- invoice subtotal -->
                                        <div class="divider mt-3 mb-3"></div>
                                        <div class="invoice-subtotal">
                                            <div class="row">
                                                <div class="col m5 s12">
                                                    <p>Thanks for your business.</p>
                                                </div>
                                                <div class="col xl4 m7 s12 offset-xl3">
                                                    <ul>
                                                        <li class="display-flex justify-content-between">
                                                            <span class="invoice-subtotal-title">Subtotal</span>
                                                            <h6 class="invoice-subtotal-value">$72.00</h6>
                                                        </li>
                                                        <li class="display-flex justify-content-between">
                                                            <span class="invoice-subtotal-title">Discount</span>
                                                            <h6 class="invoice-subtotal-value">- $ 09.60</h6>
                                                        </li>
                                                        <li class="display-flex justify-content-between">
                                                            <span class="invoice-subtotal-title">Tax</span>
                                                            <h6 class="invoice-subtotal-value">21%</h6>
                                                        </li>
                                                        <li class="divider mt-2 mb-2"></li>
                                                        <li class="display-flex justify-content-between">
                                                            <span class="invoice-subtotal-title">Invoice Total</span>
                                                            <h6 class="invoice-subtotal-value">$ 61.40</h6>
                                                        </li>
                                                        <li class="display-flex justify-content-between">
                                                            <span class="invoice-subtotal-title">Paid to date</span>
                                                            <h6 class="invoice-subtotal-value">- $ 00.00</h6>
                                                        </li>
                                                        <li class="display-flex justify-content-between">
                                                            <span class="invoice-subtotal-title">Balance (USD)</span>
                                                            <h6 class="invoice-subtotal-value">$ 10,953</h6>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="content-overlay"></div>
            </div>
        </div>
    </div>


<?php require('../layout/footer.php')?>
</body>

</html>