<?php                  
require ('connection.inc.php');
require ('function.inc.php');
require ('add_to_cart.php');
 $cat_res=mysqli_query($con,"select * from categories where status=1 order by categories asc");
 $cat_arr=array();
 while ($row=mysqli_fetch_assoc($cat_res)) {
     $cat_arr[]=$row;
 }

 $obj=new add_to_cart();
 //$totleProduct=$obj->$totleProduct();
?>

<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>E-Commerce website</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="images/logoshipping.jpg">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    

    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Owl Carousel min css -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style1.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="css/custom.css">

    <script src="js/main.js"></script>
    <script src="js/vendor/jquery-3.2.1.min.js"></script>


    <!-- Modernizr JS -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
</head>

<body>
   
    <div class="wrapper">
        <!-- Start Header Style -->
        <header id="htc__header" class="htc__header__area header--one">
            <!-- Start Mainmenu Area -->
            <div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header">
                <div class="container">
                    <div class="row">
                        <div class="menumenu__container clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5"> 
                                <div class="logo">
                                     <a href="index.php"><img src="images/logo/logoshipping.jpg"  class="logo" alt="logo images"></a>
                                </div>
                            </div>
                            <div class="col-md-7 col-lg-8 col-sm-5 col-xs-3">
                                <nav class="main__menu__nav hidden-xs hidden-sm">
                                    <ul class="main__menu">
                                        <li class="drop"><a href="index.php">Home</a></li>
                                        <?php
                                        foreach ($cat_arr as $list) {
                                            ?>
                                            <li><a href="categories.php?id=<?php echo $list['id']; ?>"><?php echo $list['categories']; ?></a></li>
                                            <?php
                                        }
                                        ?>
                                        
                                        <li><a href="contact.php">contact</a></li>
                                    </ul>
                                </nav>

                                <div class="mobile-menu clearfix visible-xs visible-sm">
                                    <nav id="mobile_dropdown">
                                        <ul>
                                            <li><a href="index.php">Home</a></li>
                                            <?php
                                              foreach ($cat_arr as $list) {
                                            ?>
                                            <li><a href="categories.php?id=<?php echo $list['id']; ?>"><?php echo $list['categories']; ?></a></li>
                                            <?php
                                        }
                                        ?>
                                        <?php
                                        if (isset($_SESSION['USER_LOGIN'])) {
                                            echo '<li><a href="contact.php">contact</a></li>';
                                        }

                                        ?>
                                            
                                        </ul>
                                    </nav>
                                </div>  
                            </div>
                            <div class="col-md-3 col-lg-2 col-sm-4 col-xs-4">
                                <div class="header__right">
                                    
                                    <div class="header__account">
                                        <?php
                                        if (isset($_SESSION['USER_LOGIN'])) {
                                            echo '<a href="logout.php">Logout</a>';
                                        }else{
                                            echo '<a href="login.php">Login/Register</a>';
                                        }

                                        ?>
                                        
                                    </div>
                                    <div class="htc__shopping__cart">
                                        <a class="cart__menu" href="#"><i class="icon-handbag icons"></i></a>
                                        <a href="#"><span class="htc__qua"><?php echo $totleProduct ?></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mobile-menu-area"></div>
                </div>
            </div>
            <!-- End Mainmenu Area -->
        </header>
        <!-- End Header Area -->