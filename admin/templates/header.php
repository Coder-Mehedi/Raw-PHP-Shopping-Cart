<?php session_start();?>
<?php if (!$_SESSION['email']): ?>
    <?php header("Location: ../accounts/login.php"); ?>
<?php else: ?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard V.1 | Nalika - Material Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo '//'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']);
 ?>/css/bootstrap.min.css">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo '//'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']);
 ?>/css/font-awesome.min.css">
    <!-- nalika Icon CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo '//'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']);
 ?>/css/nalika-icon.css">
    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo '//'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']);
 ?>/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo '//'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']);
 ?>/css/owl.theme.css">
    <link rel="stylesheet" href="<?php echo '//'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']);
 ?>/css/owl.transitions.css">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo '//'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']);
 ?>/css/animate.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo '//'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']);
 ?>/css/normalize.css">
    <!-- meanmenu icon CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo '//'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']);
 ?>/css/meanmenu.min.css">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo '//'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']);
 ?>/css/main.css">
    <!-- morrisjs CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo '//'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']);
 ?>/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo '//'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']);
 ?>/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo '//'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']);
 ?>/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="<?php echo '//'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']);
 ?>/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo '//'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']);
 ?>/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="<?php echo '//'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']);
 ?>/css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="style.css">

    <!-- Mehedi Style -->
    
    <link rel="stylesheet" type="text/css" href="/shopping_cart/style.css">
    <!-- Mehedi Style/ -->


    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo '//'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']);
 ?>/css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="/shopping_cart"><img class="main-logo" src="img/logo/logo.png" style="background: white; width: 190px;" alt="Shopping Cart" /></a>
            </div>
            <div class="nalika-profile">
                <div class="profile-dtl">
                    <a href="#"><img src="img/notification/4.jpg" alt="" /></a>
                    <h2>Mehedi <span class="min-dtn">Hasan</span></h2>
                </div>
                <div class="profile-social-dtl">
                    <ul class="dtl-social">
                        <li><a href="#"><i class="icon nalika-facebook"></i></a></li>
                        <li><a href="#"><i class="icon nalika-twitter"></i></a></li>
                        <li><a href="#"><i class="icon nalika-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <!-- <ul class="metismenu" id="menu1"> -->
                    <ul class="metismenu" id="">
                        <li class="active">
                            
                            
                        <li id="removable">
                            <a class="" href="#" aria-expanded="false"><i class="icon nalika-new-file icon-wrap"></i> <span class="mini-click-non">Pages</span></a>
                            <a href="/shopping_cart">Site Home</a>
                            <a href="all_orders.php">All Orders</a>
                            <a href="all_users.php">All Users</a>
                            
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                    <i class="icon nalika-menu-task"></i>
                                                </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n hd-search-rp">
                                            <div class="breadcome-heading">
                                                <!-- <form role="search" class="">
                                                    <input type="text" placeholder="Search..." class="form-control">
                                                    <a href=""><i class="fa fa-search"></i></a>
                                                </form> -->

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item dropdown">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="icon nalika-mail" aria-hidden="true"></i><span class="indicator-ms"></span></a>
                                                    <div role="menu" class="author-message-top dropdown-menu animated zoomIn">

                                                        <div class="message-single-top">
                                                            <h1>Message</h1>
                                                        </div>
                                                        
                                                        <div class="message-view">
                                                            <a href="#">View All Messages</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="icon nalika-alarm" aria-hidden="true"></i><span class="indicator-nt"></span></a>
                                                    <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                                                        <div class="notification-single-top">
                                                            <h1>Notifications</h1>
                                                        </div>
                                                        
                                                        <div class="notification-view">
                                                            <a href="#">View All Notification</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                            <i class="icon nalika-user"></i>
                                                            <span class="admin-name"><?php echo $_SESSION['email'] ?></span>
                                                            <i class="icon nalika-down-arrow nalika-angle-dw"></i>
                                                        </a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <?php if (!$_SESSION['email']): ?>
                                                        <li><a href="register.html"><span class="icon nalika-home author-log-ic"></span> Register</a>
                                                        </li>
                                                    <?php endif; ?>
                                                        <li><a href="#"><span class="icon nalika-user author-log-ic"></span> My Profile</a>
                                                        </li>
                                                        
                                                        <!-- <li><a href="#"><span class="icon nalika-settings author-log-ic"></span> Settings</a>
                                                        </li> -->
                                                    <?php if ($_SESSION['email']): ?>
                                                        <li><a href="/shopping_cart/accounts/logout.php"><span class="icon nalika-unlocked author-log-ic"></span> Log Out</a>
                                                        </li>
                                                    <?php endif; ?>
                                                    </ul>
                                                </li>
                                                <li class="nav-item nav-setting-open"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="icon nalika-menu-task"></i></a>

                                                    <div role="menu" class="admintab-wrap menu-setting-wrap menu-setting-wrap-bg dropdown-menu animated zoomIn">
                                                        <ul class="nav nav-tabs custon-set-tab">
                                                            <li class="active"><a data-toggle="tab" href="#Notes">News</a>
                                                            </li>
                                                            <li><a data-toggle="tab" href="#Projects">Activity</a>
                                                            </li>
                                                            <li><a data-toggle="tab" href="#Settings">Settings</a>
                                                            </li>
                                                        </ul>

                                                        <div class="tab-content custom-bdr-nt">
                                                            <div id="Notes" class="tab-pane fade in active">
                                                                <div class="notes-area-wrap">
                                                                    <div class="note-heading-indicate">
                                                                        <h2><i class="icon nalika-chat"></i> Latest News</h2>
                                                                        <p>You have 10 New News.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
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
    <!-- Mobile Menu start -->

    <!-- Mobile Menu end -->

        <?php endif; ?>