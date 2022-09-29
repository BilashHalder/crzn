
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<?php
session_start();
?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Forget Password | Creazione Group</title>
    <link rel="apple-touch-icon" href="../assets/images/favicon/apple-touch-icon-152x152.png">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/images/favicon/favicon-32x32.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/vendors/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/themes/horizontal-menu-template/materialize.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/themes/horizontal-menu-template/style.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/layouts/style-horizontal.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/pages/forgot.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/custom/custom.css">
</head>


<body class="horizontal-layout page-header-light horizontal-menu preload-transitions 1-column forgot-bg   blank-page blank-page" data-open="click" data-menu="horizontal-menu" data-col="1-column">
    <div class="row">
        <div class="col s12">
            <div class="container">
                <div id="forgot-password" class="row">
                    <div class="col s12 m6 l4 z-depth-4 offset-m4 card-panel border-radius-6 forgot-card bg-opacity-8">
                       
                    

                    
                    <form class="login-form" action="../services/customer/forget.php" method="POST">
                            <div class="row">
                                <div class="input-field col s12 ">
                                    <h5 class="ml-4 center">Forgot Password</h5>
                                    <p class="ml-4 center">You can reset your password</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix pt-2">person_outline</i>
                                    <input id="uname"  name="uname" type="text" required placeholder="Email Id or Phone No">
                                </div>
                            </div>

                            <div class="row">
                            <?php
                            if(isset($_SESSION['logerr']))
                            {
                            ?>
                                <p style="color:red;text-align:center;"><?php echo $_SESSION['logerr'];?></p>
                            <?php
                            unset($_SESSION['logerr']);
                            }
                            if(isset($_SESSION['forgetmsg'])){
                            ?>
                                 <p style="color:green;text-align:center"><?php echo $_SESSION['forgetmsg'];?></p>
                            <?php
                            unset($_SESSION['forgetmsg']);
                            }
                            ?>
                             </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <button class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12 mb-1" type="submit">Reset
                                        Password</button>
                                </div>
                            </div>
                            

                         
                            <div class="row">
                                <div class="input-field col s6 m6 l6 ">
                                    <p class="margin medium-small center"><a href="index.php">Log in</a></p>
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