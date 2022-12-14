
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<?php 
session_start();
if(isset( $_SESSION['id']))
    header('location:./'); 
?>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Employee Login | Creazione Group</title>
    <link rel="apple-touch-icon" href="../assets/images/favicon/apple-touch-icon-152x152.png">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/images/favicon/favicon-32x32.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/vendors/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/themes/horizontal-menu-template/materialize.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/themes/horizontal-menu-template/style.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/layouts/style-horizontal.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/pages/login.css">

</head>


<body class="horizontal-layout page-header-light horizontal-menu preload-transitions 1-column login-bg   blank-page blank-page" data-open="click" data-menu="horizontal-menu" data-col="1-column">
    <div class="row">
        <div class="col s12">
            <div class="container">
                <div id="login-page" class="row">
                    <div class="col s12 m6 l4 z-depth-4 card-panel border-radius-6 login-card bg-opacity-8">
                        <form class="login-form" method="post" action="../services/customer/verify.php" >
                            <div class="row">
                                <div class="input-field col s12">
                                    <h5 class="ml-4 center">Customer Log In</h5>
                                </div>
                            </div>
                            <div class="row margin">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix pt-2">person_outline</i>
                                    <input id="username" type="text"name="uname" required placeholder="Email Id or Phone No" value="<?php 
                                    if(isset($_SESSION['uname']))
                                    echo $_SESSION['uname'];
                                    ?>">
                                </div>
                            </div>
                            <div class="row margin">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix pt-2">lock_outline</i>
                                    <input id="password" type="password" name="pass" required placeholder="Password">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 m12 l12 ml-2 mt-1">
                                    <p>
                                        <label>
                                            <input type="checkbox" />
                                            <span>Remember Me</span>
                                        </label>
                                    </p>
                                </div>
                            </div>
                            <?php 
                            if(isset($_SESSION['logerr']))
                            {
                            ?>
                            <p style="color:red"><?php echo $_SESSION['logerr'];
                            unset($_SESSION['logerr']);
                           ?></p>
                            <?php
                                 }?>
                            <div class="row">
                                <div class="input-field col s12">
                                    <button class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12" type="submit">Login</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6 m6 l6">
                                    <p class="margin center medium-small"><a href="forget.php">Forgot password ?</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="content-overlay"></div>
        </div>
    </div>
</body>

</html>