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
        <?php require('./topnav.php'); ?>

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
                    <!-- FAQ -->
                    <div class="section" id="faq">
                        <div class="row">
                            <div class="col s12">
                                <div id="faq-search" class="card z-depth-0 faq-search-image center-align p-35">
                                    <div class="card-content">
                                        <h5>Frequently asked questions.</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="faq row">
                            <div class="col s12 m6 l3">
                                <a class="black-text" href="page-faq-detail.html">
                                    <div class="card z-depth-0 grey lighten-3 faq-card">
                                        <div class="card-content center-align">
                                            <i class="material-icons dp48 orange-text">search</i>
                                            <h6><b>Invesment </b></h6>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col s12 m6 l3">
                                <a class="black-text" href="page-faq-detail.html">
                                    <div class="card z-depth-0 grey lighten-3 faq-card">
                                        <div class="card-content center-align">
                                            <i class="material-icons dp48 red-text">chat_bubble_outline</i>
                                            <h6><b>Payment</b></h6>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col s12 m6 l3">
                                <a class="black-text" href="page-faq-detail.html">
                                    <div class="card z-depth-0 grey lighten-3 faq-card">
                                        <div class="card-content center-align">
                                            <i class="material-icons dp48 green-text">perm_identity</i>
                                            <h6><b>Associate</b></h6>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col s12 m6 l3">
                                <a class="black-text" href="page-faq-detail.html">
                                    <div class="card z-depth-0 grey lighten-3 faq-card">
                                        <div class="card-content center-align">
                                            <i class="material-icons dp48 blue-text">content_copy</i>
                                            <h6><b>CSP</b></h6>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col s12 m12 l12">
                                <ul class="collapsible categories-collapsible">
                                    <li class="active">
                                        <div class="collapsible-header" tabindex="0">Q: Do memberships include the original PSD files? <i class="material-icons">
                                                keyboard_arrow_right </i></div>
                                        <div class="collapsible-body" style="display: block;">
                                            <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
                                                hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined
                                                chunks as necessary, making this the first true generator on the Internet.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="collapsible-header" tabindex="0">Q: How can I purchase a single theme? <i class="material-icons">
                                                keyboard_arrow_right </i></div>
                                        <div class="collapsible-body">
                                            <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
                                                hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined
                                                chunks as necessary, making this the first true generator on the Internet.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="collapsible-header" tabindex="0">Q: How to I modify the Footer copyright <i class="material-icons">
                                                keyboard_arrow_right </i></div>
                                        <div class="collapsible-body">
                                            <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
                                                hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined
                                                chunks as necessary, making this the first true generator on the Internet.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="collapsible-header" tabindex="0">Q: How do I create a child theme? <i class="material-icons">
                                                keyboard_arrow_right </i></div>
                                        <div class="collapsible-body">
                                            <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
                                                hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined
                                                chunks as necessary, making this the first true generator on the Internet.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="collapsible-header" tabindex="0">Q: Where do i post support query? <i class="material-icons">
                                                keyboard_arrow_right </i></div>
                                        <div class="collapsible-body">
                                            <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
                                                hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined
                                                chunks as necessary, making this the first true generator on the Internet.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="collapsible-header" tabindex="0">Q: New to the WordPress? Lets get started? <i class="material-icons">
                                                keyboard_arrow_right </i></div>
                                        <div class="collapsible-body">
                                            <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
                                                hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined
                                                chunks as necessary, making this the first true generator on the Internet.</p>
                                        </div>
                                    </li>
                                </ul>
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