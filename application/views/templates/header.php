<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.6
Version: 4.5.3
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]--><!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8">
    <title>Metronic | Dashboard 2</title>
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- BEGIN LAYOUT FIRST STYLES -->
    <link type="text/css" rel="stylesheet" href="//fonts.googleapis.com/css?family=Oswald:400,300,700">
    <!-- END LAYOUT FIRST STYLES -->
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/global/plugins/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/global/plugins/bootstrap/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/global/plugins/uniform/css/uniform.default.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css">
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/global/plugins/morris/morris.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/global/plugins/fullcalendar/fullcalendar.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/global/plugins/jqvmap/jqvmap/jqvmap.css">
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link type="text/css" id="style_components" rel="stylesheet" href="<?php echo base_url() ?>assets/global/css/components.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/global/css/plugins.min.css">
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/layouts/layout6/css/layout.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/layouts/layout6/css/custom.min.css">
    <!-- END THEME LAYOUT STYLES -->
    <link href="favicon.ico" rel="shortcut icon"> <style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style></head>
<!-- END HEAD -->

<body class="">
<!-- BEGIN HEADER -->
<header class="page-header">
    <nav role="navigation" class="navbar">
        <div class="container-fluid">
            <div class="havbar-header">
                <!-- BEGIN LOGO -->
                <a href="<?php echo base_url(); ?>" class="navbar-brand" id="index">
                    <img alt="Logo" src="<?php echo base_url() ?>assets/layouts/layout6/img/logo.png"> </a>
                <!-- END LOGO -->
                <!-- BEGIN TOPBAR ACTIONS -->
                <div class="topbar-actions">
                    <!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->
                    <form method="GET" action="#" class="search-form">
                        <div class="input-group">
                            <input type="text" name="query" placeholder="Search here" class="form-control">
                            <span class="input-group-btn">
                                        <a class="btn submit" href="javascript:;">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </span>
                        </div>
                    </form>
                    <!-- END HEADER SEARCH BOX -->
                    <!-- BEGIN GROUP NOTIFICATION -->
                    <div id="header_notification_bar" class="btn-group-notification btn-group">
                        <button data-close-others="true" data-hover="dropdown" data-toggle="dropdown" class="btn dropdown-toggle" type="button">
                            <span class="badge">9</span>
                        </button>
                        <ul class="dropdown-menu-v2">
                            <li class="external">
                                <h3>
                                    <span class="bold">12 pending</span> notifications</h3>
                                <a href="#">view all</a>
                            </li>
                            <li>
                                <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 250px;"><ul data-handle-color="#637283" style="height: 250px; padding: 0px; overflow: hidden; width: auto;" class="dropdown-menu-list scroller" data-initialized="1">
                                        <li>
                                            <a href="javascript:;">
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-success">
                                                            <i class="fa fa-plus"></i>
                                                        </span> New user registered. </span>
                                                <span class="time">just now</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-danger">
                                                            <i class="fa fa-bolt"></i>
                                                        </span> Server #12 overloaded. </span>
                                                <span class="time">3 mins</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-warning">
                                                            <i class="fa fa-bell-o"></i>
                                                        </span> Server #2 not responding. </span>
                                                <span class="time">10 mins</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-info">
                                                            <i class="fa fa-bullhorn"></i>
                                                        </span> Application error. </span>
                                                <span class="time">14 hrs</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-danger">
                                                            <i class="fa fa-bolt"></i>
                                                        </span> Database overloaded 68%. </span>
                                                <span class="time">2 days</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-danger">
                                                            <i class="fa fa-bolt"></i>
                                                        </span> A user IP blocked. </span>
                                                <span class="time">3 days</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-warning">
                                                            <i class="fa fa-bell-o"></i>
                                                        </span> Storage Server #4 not responding dfdfdfd. </span>
                                                <span class="time">4 days</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-info">
                                                            <i class="fa fa-bullhorn"></i>
                                                        </span> System Error. </span>
                                                <span class="time">5 days</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-danger">
                                                            <i class="fa fa-bolt"></i>
                                                        </span> Storage server failed. </span>
                                                <span class="time">9 days</span>
                                            </a>
                                        </li>
                                    </ul><div class="slimScrollBar" style="background: rgb(99, 114, 131) none repeat scroll 0% 0%; width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(234, 234, 234) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                            </li>
                        </ul>
                    </div>
                    <!-- END GROUP NOTIFICATION -->
                    <!-- BEGIN USER PROFILE -->
                    <div class="btn-group-img btn-group">
                        <button data-close-others="true" data-hover="dropdown" data-toggle="dropdown" class="btn btn-sm dropdown-toggle" type="button">
                            <img alt="" src="<?php echo base_url() ?>assets/layouts/layout5/img/avatar1.jpg"> </button>
                        <ul role="menu" class="dropdown-menu-v2">
                            <!--<li>
                                <a href="page_user_profile_1.html">
                                    <i class="icon-user"></i> My Profile
                                    <span class="badge badge-danger">1</span>
                                </a>
                            </li>
                            <li>
                                <a href="app_calendar.html">
                                    <i class="icon-calendar"></i> My Calendar </a>
                            </li>
                            <li>
                                <a href="app_inbox.html">
                                    <i class="icon-envelope-open"></i> My Inbox
                                    <span class="badge badge-danger"> 3 </span>
                                </a>
                            </li>
                            <li>
                                <a href="app_todo_2.html">
                                    <i class="icon-rocket"></i> My Tasks
                                    <span class="badge badge-success"> 7 </span>
                                </a>
                            </li>
                            <li class="divider"> </li>
                            <li>
                                <a href="page_user_lock_1.html">
                                    <i class="icon-lock"></i> Lock Screen </a>
                            </li>-->
                            <li>
                                <a href="<?php echo base_url();?>admin/login/logout">
                                    <i class="icon-key"></i> Log Out </a>
                            </li>
                        </ul>
                    </div>
                    <!-- END USER PROFILE -->
                </div>
                <!-- END TOPBAR ACTIONS -->
            </div>
        </div>
        <!--/container-->
    </nav>
</header>
<!-- END HEADER -->

<!-- BEGIN CONTAINER -->
<div class="container-fluid">
    <div class="page-content page-content-popup">
        <div class="page-content-fixed-header">
            <!-- BEGIN BREADCRUMBS -->
            <ul class="page-breadcrumb">
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li>Dashboard 2</li>
            </ul>
            <!-- END BREADCRUMBS -->
            <div class="content-header-menu">
                <!-- BEGIN DROPDOWN AJAX MENU -->
                <div class="dropdown-ajax-menu btn-group">
                    <button data-close-others="true" data-hover="dropdown" data-toggle="dropdown" class="btn dropdown-toggle" type="button">
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                    </button>
                    <ul class="dropdown-menu-v2">
                        <li>
                            <a href="start.html">Application</a>
                        </li>
                        <li>
                            <a href="start.html">Reports</a>
                        </li>
                        <li>
                            <a href="start.html">Templates</a>
                        </li>
                        <li>
                            <a href="start.html">Settings</a>
                        </li>
                    </ul>
                </div>
                <!-- END DROPDOWN AJAX MENU -->
                <!-- BEGIN MENU TOGGLER -->
                <button data-target=".navbar-collapse" data-toggle="collapse" class="menu-toggler responsive-toggler" type="button">
                            <span class="toggle-icon">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </span>
                </button>
                <!-- END MENU TOGGLER -->
            </div>
        </div>