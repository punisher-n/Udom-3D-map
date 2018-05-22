<?php require '../controls/function.php'; 
session_start();

?>


<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8" />
        <title>Udom wayFinder</title>
        <meta name="keywords" content="HTML5,CSS3,Admin Template" />
        <meta name="description" content="" />
        <meta name="Author" content="Psd2allconversion [www.psd2allconversion.com]" />

        <!-- mobile settings -->
        <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />

        <!-- CORE CSS -->
        <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/plugins/metis-menu/metisMenu.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/plugins/simple-line-icons-master/css/simple-line-icons.css" rel="stylesheet" type="text/css" />
        <link href="../assets/plugins/animate/animate.css" rel="stylesheet" type="text/css" />
        <link href="../assets/plugins/c3/c3.min.css" rel="stylesheet">
        <link href="../assets/plugins/widget/widget.css" rel="stylesheet">
        <link href="../assets/plugins/calendar/fullcalendar.min.css" rel="stylesheet">
        <link href="../assets/plugins/ui/jquery-ui.css" rel="stylesheet">
        <link href="../assets/plugins/select/select.css" type="text/css" rel="stylesheet">
        <!-- THEME CSS -->
        <link href="../assets/css/style.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/theme/dark.css" rel="stylesheet" type="text/css" />

        <!-- PAGE LEVEL SCRIPTS -->

    </head>
    <body class="mini-navbar">

        <!-- wrapper -->
        <div id="wrapper">
            <!-- BEGIN HEADER -->
            <div class="page-header navbar fixed-top">
                <!-- BEGIN HEADER INNER -->
                <div class="page-header-inner ">
                    <!-- BEGIN LOGO -->
                    <div class="page-logo">
                        <a href="#">
                            <img src="assets/images/logo-yfinder.png" alt="absolute admin" class="img-fluid logo-default"/> </a>

                    </div><div class="menu-toggler sidebar-toggler">
                        <a href="javascript:;" class="navbar-minimalize minimalize-styl-2  float-left "><i class="fa fa-bars"></i></a>
                    </div>

                    <div class="search-bar">
                        <form class="sidebar-search  " action="" method="POST">

                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for a place...">

                            </div>
                        </form>
                    </div>
                    <!-- END LOGO -->
            
                </div>
                <!-- END HEADER INNER -->
            </div>
            <!-- END HEADER -->
            <!-- BEGIN HEADER & CONTENT dropdown-divider -->
            <div class="clearfix"> </div>
            <!-- END HEADER & CONTENT dropdown-divider -->

            <!-- BEGIN CONTAINER -->
            <div class="page-container">

                <aside class="sidebar">
                    <nav class="sidebar-nav">
                        <ul class="metismenu" id="menu">
                            <li class="active" id="link">
                                <a href="../index.php"><i class="fa fa-dashboard"></i> <span class="nav-label">Dashboard</span></a>
                            </li>
                            <li class="active" id="link">
                                <a href="../calculate.php"><i class="fa fa-map"></i> <span class="nav-label">Measure Distance</span></a>
                            </li>
                             <li class="active" id="link">
                                <a href="../direction.php"><i class="fa fa-map"></i> <span class="nav-label">Get Direction</span></a>
                            </li>
                            <li>
                                <a href="#" ><i class="fa fa-university"></i> <span class="nav-label">All Udom</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level collapse">                               
                                    <li><a href="#">Cive</a>
                                        <ul class="nav nav-second-level collapse">
                                        <li ><a href="#">Administration </a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Coed </a>
                                        <ul class="nav nav-second-level collapse">
                                        <li ><a href="#">Administration </a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <?php if ($_SESSION['email'] = ''){
                                echo '<li class="active">
                                <a href="login.php" title="Login"><i class="fa fa-question"></i> <span class="nav-label">Udom yFinder</span></a>
                            </li>';}else{
                            echo '

                             <li class="active">
                                <a href="add-user.php" title="Add user"><i class="fa fa-users"></i> <span class="nav-label">Add User</span></a>
                            </li>
                            <li class="active">
                                <a href="add-place.php" title="Logout"><i class="fa fa-home"></i> <span class="nav-label">Add place</span></a>
                            </li>
                             <li class="active">
                                <a href="../logout.php" title="Logout"><i class="fa fa-user"></i> <span class="nav-label">Logout</span></a>
                            </li>';}
                            ?>
                            

                        </ul>
                        <!-- END SIDEBAR MENU -->
                        <!-- END SIDEBAR MENU -->
                    </nav>
                    <!-- END SIDEBAR -->
                </aside>

                <!-- BEGIN CONTENT BODY -->
                <div class="page-content-wrapper">
                    <div class="content-wrapper container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title">

                                    <h4 class="float-left">Udom wayFinder</h4>

                                    <ol class="breadcrumb float-left float-md-right">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);"><i class="fa fa-home"></i></a></li>
                                        <li class="breadcrumb-item">Main</li>
                                    </ol>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-lg-2">
                                <a href="cive.php">
                                    <div class="card cyan white-text clearfix">
                                    <div class="card-content clearfix">
                                        <i class="fa fa-university background-icon"></i>
                                        <p class="card-stats-title right panel-title wdt-lable">CIVE</p>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <div class="col-md-4 col-lg-2">
                                <a href="coed.php">
                                    <div class="card teal white-text clearfix">

                                    <div class="card-content clearfix">
                                        <i class="fa fa-university background-icon"></i>
                                        <p class="card-stats-title right panel-title wdt-lable">COED</p>
                                    </div>

                                </div>
                                </a>
                            </div>

                            <div class="col-md-4 col-lg-2">
                                <a href="chnms.php">
                                    <div class="card cyan white-text clearfix">

                                    <div class="card-content clearfix">
                                        <i class="fa fa-university background-icon"></i>
                                        <p class="card-stats-title right panel-title wdt-lable">CNMS</p>
                                    </div>

                                </div>
                                </a>
                            </div>

                            <div class="col-md-4 col-lg-2">
                                <a href="chas.php">
                                    <div class="card orange white-text clearfix">

                                    <div class="card-content clearfix">
                                        <i class="fa fa-university background-icon"></i>
                                        <p class="card-stats-title right panel-title wdt-lable">CHAS</p>
                                    </div>

                                </div>
                                </a>
                            </div>

                            <div class="col-md-4 col-lg-2">
                                <div class="card teal white-text clearfix">

                                    <div class="card-content clearfix">
                                        <i class="fa fa-university background-icon"></i>
                                        <p class="card-stats-title right panel-title wdt-lable">COHES</p>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-4 col-lg-2">
                                <div class="card green white-text clearfix">

                                    <div class="card-content clearfix">
                                        <i class="fa fa-university background-icon"></i>
                                        <p class="card-stats-title right panel-title wdt-lable">HUMANITY</p>
                                    </div>

                                </div>
                            </div>
                         </div>
                        
                        <div class="row">
                        
                            <div class="col-sm-12">
                                <div class="panel panel-card recent-activites">
                                    <!-- Start .panel -->
                                        <div class="card-header">
                                       Udom yFinder 3D Map View
                                    </div>