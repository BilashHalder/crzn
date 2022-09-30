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
            <div class="col s12">
                        <div class="card">
                        <div class="card-content">
                        <h4 class="card-title center">Manage Designation</h4>
                               
                        <div id="main">
    <div class="row">
                            <div class="col s12 m6 l6">
                                <div id="basic-form" class="card card card-default scrollspy">
                                    <div class="card-content">
                                        

                                        <?php if(!isset($_GET['id'])) {?>
                                            <h4 class="card-title center">Add Designation</h4>
                                        <form action="../service/adddesgination.php" method="post">
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input type="text" id="fn" name="title" required>
                                                    <label for="fn" class="">Title</label>
                                                </div>
                                            </div>
                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Save
                                                            <i class="material-icons right">save</i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <?php
                                    }
                                    else
                                    {
                                        ?>
                                        <h4 class="card-title center">Edit Designation</h4>
                                        <form action="../service/editDesignation.php" method="post">
                                            <div class="row">
                                                <div class="input-field col s12">
                                                   
                                                    <input type="text" id="fn" name="title" value="<?php echo mysqli_fetch_array($res)[0];?>" required>
                                                    <label for="fn" class="">Title</label>
                                                </div>

                                                <input type="text" id="fn" name="id" value="<?php echo $_GET['id']?>" hidden>
                                            </div>
                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Save
                                                            <i class="material-icons right">save</i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <?php
                                    }?>

                                    </div>
                                </div>

                                <div class="col s12 m6 l6">
                                <div id="placeholder" class="card card card-default scrollspy">
                                    <div class="card-content">
                                        <h4 class="card-title center">Designation List</h4>
                                        <div class="card-content">
                                        <div class="row">
                                            <div class="col s12">
                                            </div>
                                            <div class="col s12">
                                                <table class="bordered">
                                                    <thead>
                                                        <tr>
                                                            <th data-field="id">Designation Id</th>
                                                            <th data-field="name">Title</th>
                                                            <th>Edit</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php 
                                                        
                                                         for($i=0;$i< mysqli_num_rows($data);$i++){
                                                            $desg=mysqli_fetch_array($data);    
                                                    ?>

                                                        <tr>
                                                            <td><?php echo $desg['designation_id']?></td>
                                                            <td><?php echo $desg['title']?></td>
                                                            <td><a  type="submit" name="action" href="./designations.php?id=<?php echo  $desg['designation_id']; ?>"> <i class="material-icons right">edit</i></a></td>
                                                        </tr>
                                                        <?php }?>
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
    </div>
                           
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <?php require('../layout/footer.php') ?>
</body>
</html>