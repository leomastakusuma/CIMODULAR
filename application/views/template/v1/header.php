<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $title;?></title>
    <!-- Load Template Style -->
    <?php echo load_template_CSS()?>
    <?php echo load_template_favicon();?>
    
</head>

<body class="nav-md footer_fixed">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <!--<a style="padding-left: 10px;" href="<?php echo site_url("dashboard");?>" class="site_title"><img style="width: 80px;" align="middle" src="<?php echo site_url('assets/images/logo.png');?>"></a>-->
                    </div>

                    <div class="clearfix"></div>
                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <?php echo load_template_menu($_SESSION['strRole']);?>
                        </div>
                    </div>
                    <!-- /sidebar menu -->

                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">

                <div class="nav_menu">
                    <nav class="" role="navigation">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <?php echo $photo;?> <?php echo $_SESSION['strName'];?>
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu pull-right">
                                    <li><a href="<?php echo site_url("setting/myprofile");?>">  Profile</a></li>
                                    <!--<li><a href="<?php echo site_url("setting/index");?>"><span>Settings</span></a></li>-->
                                    <li> <a href="<?php echo site_url("setting/help");?>">Help</a></li>
                                    <li><a href="<?php echo site_url("dashboard/logout");?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>

            </div>
            <!-- /top navigation -->