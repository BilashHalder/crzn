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

    <div class="section users-edit">
                        <div class="card">
                            <div class="card-content">
                                <!-- <div class="card-body"> -->
                                <ul class="tabs mb-2 row">
                                    <li class="tab">
                                        <a class="display-flex align-items-center active" id="account-tab" href="#account">
                                            <i class="material-icons mr-1">person_outline</i><span>Account</span>
                                        </a>
                                    </li>
                                    <li class="tab">
                                        <a class="display-flex align-items-center" id="information-tab" href="#information">
                                            <i class="material-icons mr-2">error_outline</i><span>Information</span>
                                        </a>
                                    </li>
                                <li class="indicator" style="left: 0px; right: 1030px;"></li></ul>
                                <div class="divider mb-3"></div>
                                <div class="row">
                                    <div class="col s12 active" id="account" style="display: block;">
                                        <!-- users edit media object start -->
                                        <div class="media display-flex align-items-center mb-2">
                                            <a class="mr-2" href="#">
                                                <img src="../assets/images/avatar/avatar-11.png" alt="users avatar" class="z-depth-4 circle" height="64" width="64">
                                            </a>
                                            <div class="media-body">
                                                <h5 class="media-heading mt-0">Avatar</h5>
                                                <div class="user-edit-btns display-flex">
                                                    <a href="#" class="btn-small indigo">Change</a>
                                                    <a href="#" class="btn-small btn-light-pink">Reset</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- users edit media object ends -->
                                        <!-- users edit account form start -->
                                        <form id="accountForm" novalidate="novalidate">
                                            <div class="row">
                                                <div class="col s12 m6">
                                                    <div class="row">
                                                        <div class="col s12 input-field">
                                                            <input id="username" name="username" type="text" class="validate" value="dean3004" data-error=".errorTxt1">
                                                            <label for="username" class="active">Username</label>
                                                            <small class="errorTxt1"></small>
                                                        </div>
                                                        <div class="col s12 input-field">
                                                            <input id="name" name="name" type="text" class="validate" value="Dean Stanley" data-error=".errorTxt2">
                                                            <label for="name" class="active">Name</label>
                                                            <small class="errorTxt2"></small>
                                                        </div>
                                                        <div class="col s12 input-field">
                                                            <input id="email" name="email" type="email" class="validate" value="deanstanley@gmail.com" data-error=".errorTxt3">
                                                            <label for="email" class="active">E-mail</label>
                                                            <small class="errorTxt3"></small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col s12 m6">
                                                    <div class="row">
                                                        <div class="col s12 input-field">
                                                            <div class="select-wrapper"><input class="select-dropdown dropdown-trigger" type="text" readonly="true" data-target="select-options-24ab097e-d4c6-8adf-f6a7-c03c37c203df"><ul id="select-options-24ab097e-d4c6-8adf-f6a7-c03c37c203df" class="dropdown-content select-dropdown" tabindex="0"><li id="select-options-24ab097e-d4c6-8adf-f6a7-c03c37c203df0" tabindex="0" class="selected"><span>User</span></li><li id="select-options-24ab097e-d4c6-8adf-f6a7-c03c37c203df1" tabindex="0"><span>Staff</span></li></ul><svg class="caret" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M7 10l5 5 5-5z"></path><path d="M0 0h24v24H0z" fill="none"></path></svg><select tabindex="-1">
                                                                <option>User</option>
                                                                <option>Staff</option>
                                                            </select></div>
                                                            <label>Role</label>
                                                        </div>
                                                        <div class="col s12 input-field">
                                                            <div class="select-wrapper"><input class="select-dropdown dropdown-trigger" type="text" readonly="true" data-target="select-options-7ada9c65-18b1-3fab-277a-2c69028d7f1c"><ul id="select-options-7ada9c65-18b1-3fab-277a-2c69028d7f1c" class="dropdown-content select-dropdown" tabindex="0"><li id="select-options-7ada9c65-18b1-3fab-277a-2c69028d7f1c0" tabindex="0" class="selected"><span>Active</span></li><li id="select-options-7ada9c65-18b1-3fab-277a-2c69028d7f1c1" tabindex="0"><span>Banned</span></li><li id="select-options-7ada9c65-18b1-3fab-277a-2c69028d7f1c2" tabindex="0"><span>Close</span></li></ul><svg class="caret" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M7 10l5 5 5-5z"></path><path d="M0 0h24v24H0z" fill="none"></path></svg><select tabindex="-1">
                                                                <option>Active</option>
                                                                <option>Banned</option>
                                                                <option>Close</option>
                                                            </select></div>
                                                            <label>Status</label>
                                                        </div>
                                                        <div class="col s12 input-field">
                                                            <input id="company" name="company" type="text" class="validate">
                                                            <label for="company">Company</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col s12">
                                                    <table class="mt-1">
                                                        <thead>
                                                            <tr>
                                                                <th>Module Permission</th>
                                                                <th>Read</th>
                                                                <th>Write</th>
                                                                <th>Create</th>
                                                                <th>Delete</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Users</td>
                                                                <td>
                                                                    <label>
                                                                        <input type="checkbox" checked="">
                                                                        <span></span>
                                                                    </label>
                                                                </td>
                                                                <td>
                                                                    <label>
                                                                        <input type="checkbox">
                                                                        <span></span>
                                                                    </label>
                                                                </td>
                                                                <td>
                                                                    <label>
                                                                        <input type="checkbox">
                                                                        <span></span>
                                                                    </label>
                                                                </td>
                                                                <td>
                                                                    <label>
                                                                        <input type="checkbox" checked="">
                                                                        <span></span>
                                                                    </label>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Articles</td>
                                                                <td>
                                                                    <label>
                                                                        <input type="checkbox">
                                                                        <span></span>
                                                                    </label>
                                                                </td>
                                                                <td>
                                                                    <label>
                                                                        <input type="checkbox" checked="">
                                                                        <span></span>
                                                                    </label>
                                                                </td>
                                                                <td>
                                                                    <label>
                                                                        <input type="checkbox">
                                                                        <span></span>
                                                                    </label>
                                                                </td>
                                                                <td>
                                                                    <label>
                                                                        <input type="checkbox" checked="">
                                                                        <span></span>
                                                                    </label>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Staff</td>
                                                                <td>
                                                                    <label>
                                                                        <input type="checkbox" checked="">
                                                                        <span></span>
                                                                    </label>
                                                                </td>
                                                                <td>
                                                                    <label>
                                                                        <input type="checkbox" checked="">
                                                                        <span></span>
                                                                    </label>
                                                                </td>
                                                                <td>
                                                                    <label>
                                                                        <input type="checkbox">
                                                                        <span></span>
                                                                    </label>
                                                                </td>
                                                                <td>
                                                                    <label>
                                                                        <input type="checkbox">
                                                                        <span></span>
                                                                    </label>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <!-- </div> -->
                                                </div>
                                                <div class="col s12 display-flex justify-content-end mt-3">
                                                    <button type="submit" class="btn indigo">
                                                        Save changes</button>
                                                    <button type="button" class="btn btn-light">Cancel</button>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- users edit account form ends -->
                                    </div>
                                    <div class="col s12" id="information" style="display: none;">
                                        <!-- users edit Info form start -->
                                        <form id="infotabForm" novalidate="novalidate">
                                            <div class="row">
                                                <div class="col s12 m6">
                                                    <div class="row">
                                                        <div class="col s12">
                                                            <h6 class="mb-2"><i class="material-icons mr-1">link</i>Social Links</h6>
                                                        </div>
                                                        <div class="col s12 input-field">
                                                            <input class="validate" type="text" value="https://www.twitter.com/">
                                                            <label class="active">Twitter</label>
                                                        </div>
                                                        <div class="col s12 input-field">
                                                            <input class="validate" type="text" value="https://www.facebook.com/">
                                                            <label class="active">Facebook</label>
                                                        </div>
                                                        <div class="col s12 input-field">
                                                            <input class="validate" type="text">
                                                            <label>Google+</label>
                                                        </div>
                                                        <div class="col s12 input-field">
                                                            <input id="linkedin" name="linkedin" class="validate" type="text">
                                                            <label for="linkedin">LinkedIn</label>
                                                        </div>
                                                        <div class="col s12 input-field">
                                                            <input class="validate" type="text" value="https://www.instagram.com/">
                                                            <label class="active">Instagram</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col s12 m6">
                                                    <div class="row">
                                                        <div class="col s12">
                                                            <h6 class="mb-4"><i class="material-icons mr-1">person_outline</i>Personal Info</h6>
                                                        </div>
                                                        <div class="col s12 input-field">
                                                            <input id="datepicker" name="datepicker" type="text" class="birthdate-picker datepicker" placeholder="Pick a birthday" data-error=".errorTxt4">
                                                            <label for="datepicker" class="active">Birth date</label>
                                                            <small class="errorTxt4"></small>
                                                        </div>
                                                        <div class="col s12 input-field">
                                                            <div class="select-wrapper"><input class="select-dropdown dropdown-trigger" type="text" readonly="true" data-target="select-options-99e7357a-7451-7d3f-7d9f-c7461062486a"><ul id="select-options-99e7357a-7451-7d3f-7d9f-c7461062486a" class="dropdown-content select-dropdown" tabindex="0"><li id="select-options-99e7357a-7451-7d3f-7d9f-c7461062486a0" tabindex="0" class="selected"><span>USA</span></li><li id="select-options-99e7357a-7451-7d3f-7d9f-c7461062486a1" tabindex="0"><span>India</span></li><li id="select-options-99e7357a-7451-7d3f-7d9f-c7461062486a2" tabindex="0"><span>Canada</span></li></ul><svg class="caret" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M7 10l5 5 5-5z"></path><path d="M0 0h24v24H0z" fill="none"></path></svg><select id="accountSelect" tabindex="-1">
                                                                <option>USA</option>
                                                                <option>India</option>
                                                                <option>Canada</option>
                                                            </select></div>
                                                            <label>Country</label>
                                                        </div>
                                                        <div class="col s12">
                                                            <label>Languages</label>
                                                            <select class="browser-default select2-hidden-accessible" id="users-language-select2" multiple="" data-select2-id="users-language-select2" tabindex="-1" aria-hidden="true">
                                                                <option value="English" selected="" data-select2-id="2">English</option>
                                                                <option value="Spanish">Spanish</option>
                                                                <option value="French">French</option>
                                                                <option value="Russian">Russian</option>
                                                                <option value="German">German</option>
                                                                <option value="Arabic" selected="" data-select2-id="3">Arabic</option>
                                                                <option value="Sanskrit">Sanskrit</option>
                                                            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered"><li class="select2-selection__choice" title="English" data-select2-id="4"><span class="select2-selection__choice__remove" role="presentation">×</span>English</li><li class="select2-selection__choice" title="Arabic" data-select2-id="5"><span class="select2-selection__choice__remove" role="presentation">×</span>Arabic</li><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                        </div>
                                                        <div class="col s12 input-field">
                                                            <input id="phonenumber" type="text" class="validate" value="(+656) 254 2568">
                                                            <label for="phonenumber" class="active">Phone</label>
                                                        </div>
                                                        <div class="col s12 input-field">
                                                            <input id="address" name="address" type="text" class="validate" data-error=".errorTxt5">
                                                            <label for="address">Address</label>
                                                            <small class="errorTxt5"></small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col s12">
                                                    <div class="input-field">
                                                        <input id="websitelink" name="websitelink" type="text" class="validate">
                                                        <label for="websitelink">Website</label>
                                                    </div>
                                                    <label>Favourite Music</label>
                                                    <div class="input-field">
                                                        <select class="browser-default select2-hidden-accessible" id="users-music-select2" multiple="" data-select2-id="users-music-select2" tabindex="-1" aria-hidden="true">
                                                            <option value="Rock">Rock</option>
                                                            <option value="Jazz" selected="" data-select2-id="7">Jazz</option>
                                                            <option value="Disco">Disco</option>
                                                            <option value="Pop">Pop</option>
                                                            <option value="Techno">Techno</option>
                                                            <option value="Folk" selected="" data-select2-id="8">Folk</option>
                                                            <option value="Hip hop">Hip hop</option>
                                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="6" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered"><li class="select2-selection__choice" title="Jazz" data-select2-id="9"><span class="select2-selection__choice__remove" role="presentation">×</span>Jazz</li><li class="select2-selection__choice" title="Folk" data-select2-id="10"><span class="select2-selection__choice__remove" role="presentation">×</span>Folk</li><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                    </div>
                                                </div>
                                                <div class="col s12">
                                                    <label>Favourite movies</label>
                                                    <div class="input-field">
                                                        <select class="browser-default select2-hidden-accessible" id="users-movies-select2" multiple="" data-select2-id="users-movies-select2" tabindex="-1" aria-hidden="true">
                                                            <option value="The Dark Knight" selected="" data-select2-id="12">The Dark Knight
                                                            </option>
                                                            <option value="Harry Potter" selected="" data-select2-id="13">Harry Potter</option>
                                                            <option value="Airplane!">Airplane!</option>
                                                            <option value="Perl Harbour">Perl Harbour</option>
                                                            <option value="Spider Man">Spider Man</option>
                                                            <option value="Iron Man" selected="" data-select2-id="14">Iron Man</option>
                                                            <option value="Avatar">Avatar</option>
                                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="11" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered"><li class="select2-selection__choice" title="The Dark Knight
                                                            " data-select2-id="15"><span class="select2-selection__choice__remove" role="presentation">×</span>The Dark Knight
                                                            </li><li class="select2-selection__choice" title="Harry Potter" data-select2-id="16"><span class="select2-selection__choice__remove" role="presentation">×</span>Harry Potter</li><li class="select2-selection__choice" title="Iron Man" data-select2-id="17"><span class="select2-selection__choice__remove" role="presentation">×</span>Iron Man</li><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                    </div>
                                                </div>
                                                <div class="col s12 display-flex justify-content-end mt-1">
                                                    <button type="submit" class="btn indigo">
                                                        Save changes</button>
                                                    <button type="button" class="btn btn-light">Cancel</button>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- users edit Info form ends -->
                                    </div>
                                </div>
                                <!-- </div> -->
                            </div>
                        </div>
                    </div>
<?php require('../layout/footer.php')?>
</body>

</html>