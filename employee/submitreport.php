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

            <div class="row">
                <div class="col s12">
                    <div id="html-validations" class="card card-tabs">
                        <div class="card-content">
                            <div class="card-title">
                                <div class="row">
                                    <div class="col s12 m6 l10">
                                        <h4 class="card-title center">Enter Your Work Report Details</h4>
                                    </div>
                                    <div class="col s12 m6 l2">
                                    </div>
                                </div>
                            </div>
                            <div id="html-view-validations">
                                <form class="formValidate0" id="formValidate0" method="get">
                                    <div class="row">
                                        <div class="input-field col s12 m4">
                                            <label for="uname0" class="">Report Date</label>
                                            <input class="validate " required="" id="uname0" name="uname" type="text" disabled>
                                        </div>
                                        <div class="input-field col s12 m4">
                                            <label for="cemail0" class="">Login Time</label>
                                            <input class="validate " required="" id="cemail0" type="email" name="cemail0" disabled>
                                        </div>
                                        <div class="input-field col s12 m4">
                                            <label for="password0">Report To</label>
                                            <input class="validate" required="" id="password0" type="password" name="password0" disabled>
                                        </div>
                                        <div class="input-field col s12 m6">
                                            <label for="curl0">Report Id : </label>
                                            <input class="validate" required="" id="curl0" type="text" name="curl0" disabled>
                                        </div>
                                        <div class="input-field col s12 m6">
                                            <div id="view-file-input" class="active">

                                                <div class="file-field input-field">
                                                    <div class="btn">
                                                        <span>File</span>
                                                        <input type="file">
                                                    </div>
                                                    <div class="file-path-wrapper">
                                                        <input class="file-path validate" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="input-field col s12 ">
                                            <textarea id="ccomment0" name="ccomment0" class="materialize-textarea validate" required=""></textarea>
                                            <label for="ccomment0">Your comment *</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <button class="btn waves-effect waves-light right" type="submit" name="action">Submit
                                                <i class="material-icons right">send</i>
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
    <?php require('../layout/footer.php') ?>
</body>

</html>