<?php
@session_start();
require 'assets/inc/initDb.php';
//require 'assets/inc/functions.php';
//require 'includes/functions.php';

//echo "Admin: ".$_SESSION['admin'];
date_default_timezone_set("Australia/Sydney");
if(!isset($_SESSION['company_email']))
{
    echo "<script>window.open('logout.php','_self')</script>";
}

if($_SESSION['company_email'] == "")
{
    echo "<script>window.open('logout.php','_self')</script>";
}
//$_SESSION['broker_id'] = 3;
date_default_timezone_set("Australia/Sydney");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>BROKER Dashboard | ELEMENT </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="description" content="">
    <meta name="keywords" content="coco bootstrap template, coco admin, bootstrap,admin template, bootstrap admin,">
    <meta name="author" content="Huban Creative">

    <!-- Base Css Files -->
    <link href="assets/libs/jqueryui/ui-lightness/jquery-ui-1.10.4.custom.min.css" rel="stylesheet" />
    <link href="assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/libs/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/libs/fontello/css/fontello.css" rel="stylesheet" />
    <link href="assets/libs/animate-css/animate.min.css" rel="stylesheet" />
    <link href="assets/libs/nifty-modal/css/component.css" rel="stylesheet" />
    <link href="assets/libs/magnific-popup/magnific-popup.css" rel="stylesheet" />
    <link href="assets/libs/ios7-switch/ios7-switch.css" rel="stylesheet" />
    <link href="assets/libs/pace/pace.css" rel="stylesheet" />
    <link href="assets/libs/sortable/sortable-theme-bootstrap.css" rel="stylesheet" />
    <link href="assets/libs/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" />
    <link href="assets/libs/jquery-icheck/skins/all.css" rel="stylesheet" />
    <link href="assets/libs/jquery-notifyjs/styles/metro/notify-metro.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Overpass+Mono&family=Overpass:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    <!-- Code Highlighter for Demo -->
    <link href="assets/libs/prettify/github.css" rel="stylesheet" />

    <!-- Extra CSS Libraries Start -->
    <link href="assets/libs/rickshaw/rickshaw.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/morrischart/morris.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/jquery-jvectormap/css/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/jquery-clock/clock.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/bootstrap-calendar/css/bic_calendar.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/sortable/sortable-theme-bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/jquery-weather/simpleweather.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/bootstrap-xeditable/css/bootstrap-editable.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <!-- Extra CSS Libraries End -->
    <link href="assets/css/style-responsive.css" rel="stylesheet" />
    <link href="assets/css/haider-style.css" rel="stylesheet" />
    <link href="assets/css/ahmad.css" rel="stylesheet" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <link rel="shortcut icon" href="assets/img/favicon.ico">
    <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/apple-touch-icon-152x152.png" />

    <script src="assets/libs/jquery/jquery-1.11.1.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/libs/jqueryui/jquery-ui-1.10.4.custom.min.js"></script>
    <script src="assets/libs/jquery-ui-touch/jquery.ui.touch-punch.min.js"></script>

    <script src="assets/js/leads.js"></script>
    <script src="assets/js/individual-step1.js"></script>
    <script src="assets/js/individual-step2.js"></script>
    <script src="assets/js/individual-step3.js"></script>
    <script src="assets/js/individual-step4.js"></script>
    <script src="assets/js/individual-step5.js"></script>
    <script src="assets/js/individual-step6.js"></script>
    <script src="assets/js/individual-step7.js"></script>
    <script src="assets/js/individual-step8.js"></script>
    <script src="assets/js/sweetalert-dev.js"></script>
    <script src="assets/js/sweetalert.min.js"></script>

</head>
<body class="fixed-left">
<!-- Modal Start -->
<!-- Modal Task Progress -->
<div class="md-modal md-3d-flip-vertical" id="task-progress">
    <div class="md-content">
        <h3><strong>Task Progress</strong> Information</h3>
        <div>
            <p>CLEANING BUGS</p>
            <div class="progress progress-xs for-modal">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                    <span class="sr-only">80&#37; Complete</span>
                </div>
            </div>
            <p>POSTING SOME STUFF</p>
            <div class="progress progress-xs for-modal">
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                    <span class="sr-only">65&#37; Complete</span>
                </div>
            </div>
            <p>BACKUP DATA FROM SERVER</p>
            <div class="progress progress-xs for-modal">
                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                    <span class="sr-only">95&#37; Complete</span>
                </div>
            </div>
            <p>RE-DESIGNING WEB APPLICATION</p>
            <div class="progress progress-xs for-modal">
                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                    <span class="sr-only">100&#37; Complete</span>
                </div>
            </div>
            <p class="text-center">
                <button class="btn btn-danger btn-sm md-close">Close</button>
            </p>
        </div>
    </div>
</div>

<!-- Modal Logout -->
<div class="md-modal md-just-me" id="logout-modal">
    <div class="md-content">
        <h3><strong>Logout</strong> Confirmation</h3>
        <div>
            <p class="text-center">Are you sure want to logout from this awesome system?</p>
            <p class="text-center">
                <button class="btn btn-danger md-close">Nope!</button>
                <a href="login.html" class="btn btn-success md-close">Yeah, I'm sure</a>
            </p>
        </div>
    </div>
</div>        <!-- Modal End -->
<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
    <div class="topbar">

        <!-- Button mobile view to collapse sidebar menu -->
        <div class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-collapse2">
                    <ul class="nav navbar-nav hidden-xs">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-th"></i></a>
                            <div class="dropdown-menu grid-dropdown">
                                <div class="row stacked">
                                    <div class="col-xs-4">
                                        <a href="javascript:;" data-app="notes-app" data-status="active"><i class="icon-edit"></i>Notes</a>
                                    </div>
                                    <div class="col-xs-4">
                                        <a href="javascript:;" data-app="todo-app" data-status="active"><i class="icon-check"></i>Todo List</a>
                                    </div>
                                    <div class="col-xs-4">
                                        <a href="javascript:;" data-app="calc" data-status="inactive"><i class="fa fa-calculator"></i>Calculator</a>
                                    </div>
                                </div>
                                <div class="row stacked">
                                    <div class="col-xs-4">
                                        <a href="javascript:;" data-app="weather-widget" data-status="active"><i class="icon-cloud-3"></i>Weather</a>
                                    </div>
                                    <div class="col-xs-4">
                                        <a href="javascript:;" data-app="calendar-widget2" data-status="active"><i class="icon-calendar"></i>Calendar</a>
                                    </div>
                                    <div class="col-xs-4">
                                        <a href="javascript:;" data-app="stock-app" data-status="inactive"><i class="icon-chart-line"></i>Stocks</a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </li>
                        <li class="language_bar dropdown hidden-xs">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">English (US) <i class="fa fa-caret-down"></i></a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="#">German</a></li>
                                <li><a href="#">French</a></li>
                                <li><a href="#">Italian</a></li>
                                <li><a href="#">Spanish</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right top-navbar">
                        <li class="dropdown iconify hide-phone">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-globe"></i><span class="label label-danger absolute">4</span></a>
                            <ul class="dropdown-menu dropdown-message">
                                <li class="dropdown-header notif-header"><i class="icon-bell-2"></i> New Notifications<a class="pull-right" href="#"><i class="fa fa-cog"></i></a></li>
                                <li class="unread">
                                    <a href="#">
                                        <p><strong>Maseh</strong> Uploaded a photo <strong>&#34;DSC000254.jpg&#34;</strong>
                                            <br /><i>2 minutes ago</i>
                                        </p>
                                    </a>
                                </li>
                                <li class="unread">
                                    <a href="#">
                                        <p><strong>Maseh</strong> Created an photo album  <strong>&#34;Fappening&#34;</strong>
                                            <br /><i>8 minutes ago</i>
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <p><strong>John Malkovich</strong> Added 3 products
                                            <br /><i>3 hours ago</i>
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <p><strong>Sonata Arctica</strong> Send you a message <strong>&#34;Lorem ipsum dolor...&#34;</strong>
                                            <br /><i>12 hours ago</i>
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <p><strong>Johnny Depp</strong> Updated his avatar
                                            <br /><i>Yesterday</i>
                                        </p>
                                    </a>
                                </li>
                                <li class="dropdown-footer">
                                    <div class="btn-group btn-group-justified">
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-sm btn-primary"><i class="icon-ccw-1"></i> Refresh</a>
                                        </div>
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-sm btn-danger"><i class="icon-trash-3"></i> Clear All</a>
                                        </div>
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-sm btn-success">See All <i class="icon-right-open-2"></i></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown iconify hide-phone">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="label label-danger absolute">3</span></a>
                            <ul class="dropdown-menu dropdown-message">
                                <li class="dropdown-header notif-header"><i class="icon-mail-2"></i> New Messages</li>
                                <li class="unread">
                                    <a href="#" class="clearfix">
                                        <img src="images/users/chat/2.jpg" class="xs-avatar ava-dropdown" alt="Avatar">
                                        <strong>Maseh</strong><i class="pull-right msg-time">5 minutes ago</i><br />
                                        <p>Duis autem vel eum iriure dolor in hendrerit ...</p>
                                    </a>
                                </li>
                                <li class="unread">
                                    <a href="#" class="clearfix">
                                        <img src="images/users/chat/1.jpg" class="xs-avatar ava-dropdown" alt="Avatar">
                                        <strong>Sandra Kraken</strong><i class="pull-right msg-time">22 minutes ago</i><br />
                                        <p>Duis autem vel eum iriure dolor in hendrerit ...</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="clearfix">
                                        <img src="images/users/chat/3.jpg" class="xs-avatar ava-dropdown" alt="Avatar">
                                        <strong>Zoey Lombardo</strong><i class="pull-right msg-time">41 minutes ago</i><br />
                                        <p>Duis autem vel eum iriure dolor in hendrerit ...</p>
                                    </a>
                                </li>
                                <li class="dropdown-footer"><div class=""><a href="#" class="btn btn-sm btn-block btn-primary"><i class="fa fa-share"></i> See all messages</a></div></li>
                            </ul>
                        </li>
                        <li class="dropdown iconify hide-phone"><a href="#" onclick="javascript:toggle_fullscreen()"><i class="icon-resize-full-2"></i></a></li>
                        <li class="dropdown topbar-profile">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="rounded-image topbar-profile-image"><img src="images/users/user-35.jpg"></span> Jane <strong>Doe</strong> <i class="fa fa-caret-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">My Profile</a></li>
                                <li><a href="#">Change Password</a></li>
                                <li><a href="#">Account Setting</a></li>
                                <li class="divider"></li>
                                <li><a href="#"><i class="icon-help-2"></i> Help</a></li>
                                <li><a href="lockscreen.html"><i class="icon-lock-1"></i> Lock me</a></li>
                                <li><a class="md-trigger" data-modal="logout-modal"><i class="icon-logout-1"></i> Logout</a></li>
                            </ul>
                        </li>
                        <li class="right-opener">
                            <a href="javascript:;" class="open-right"><i class="fa fa-angle-double-left"></i><i class="fa fa-angle-double-right"></i></a>
                        </li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </div>
    </div>
    <!-- Top Bar End -->
    <!-- Left Sidebar Start -->
    <div class="left side-menu">
        <div class="sidebar-inner slimscrollleft">
            <!-- Search form -->

            <div class="clearfix"></div>
            <!--- Profile -->
            <div class="profile-info">
                <!-- <div class="topbar-left">
                    <button class="button-menu-mobile open-left">
                    <i class="fa fa-bars"></i>
                    </button>
                </div> -->
                <div class="col-xs-4">
                    <a href="profile.html" class="rounded-image profile-image"><img src="images/users/user-100.jpg"></a>
                </div>
                <div class="col-xs-8">
                    <div class="profile-text">Welcome <b>Maseh</b></div>
                </div>
            </div>
            <!--- Divider -->
            <div class="clearfix"></div>
            <hr class="divider" />
            <div class="clearfix"></div>
            <!--- Divider -->
            <div id="sidebar-menu">
                <ul>
                    <li class='has_sub'><a href='index.php'>
                            <svg style="margin:0px 5px 0px 20px;" class="Sbimg1" viewBox="0 0 16 16" fill="currentColor" height="20px" width="20px"><path d="M5.43,11.92a.73.73,0,0,1-.53-.22L3,9.82A.75.75,0,0,1,3,8.76L4.9,6.88A.75.75,0,0,1,6,7.94L4.61,9.29,6,10.64A.75.75,0,0,1,6,11.7.74.74,0,0,1,5.43,11.92Z"></path><path d="M10.58,11.92a.74.74,0,0,1-.53-.22.75.75,0,0,1,0-1.06L11.4,9.29,10.05,7.94a.75.75,0,0,1,1.06-1.06L13,8.76a.74.74,0,0,1,0,1.06L11.11,11.7A.71.71,0,0,1,10.58,11.92Z"></path><path d="M15.26,16H.76A.75.75,0,0,1,0,15.26V.76A.74.74,0,0,1,.76,0H5.12A2.75,2.75,0,0,1,6.77.56L8.51,1.87a1.3,1.3,0,0,0,.75.25h6a.76.76,0,0,1,.75.75V15.26A.76.76,0,0,1,15.26,16ZM1.51,14.51h13V3.62H9.26a2.75,2.75,0,0,1-1.65-.55L5.87,1.76h0a1.3,1.3,0,0,0-.75-.25H1.51Z"></path></svg>
                            <span>Dashboard</span></a>
                    </li>
                    <li><a href='company.php'>
                            <svg style="margin:0px 5px 0px 20px;" class="Sbimg1" viewBox="0 0 16 16" fill="currentColor" height="20px" width="20px">
                                <path d="M13.24,16H2.74A2.75,2.75,0,0,1,0,13.26V2.76A2.75,2.75,0,0,1,2.74,0h10.5A2.75,2.75,0,0,1,16,2.76v10.5A2.75,2.75,0,0,1,13.24,16ZM2.74,1.51A1.25,1.25,0,0,0,1.49,2.76v10.5a1.25,1.25,0,0,0,1.25,1.25h10.5a1.25,1.25,0,0,0,1.25-1.25V2.76a1.25,1.25,0,0,0-1.25-1.25Z"></path><rect x="0.74" y="2.61" width="14.5" height="1.5"></rect><rect x="0.74" y="5.26" width="14.5" height="1.5"></rect><path d="M10.79,12.08H5.19a1.25,1.25,0,0,1-1.25-1.25V9.42H.74V7.92h4.7v2.66h5.1V7.92h4.7v1.5H12v1.41A1.25,1.25,0,0,1,10.79,12.08Z"></path></svg>
                            <span>Manage Companies</span></a>
                    </li>
                    <li class='has_sub'><a href='broker.php'><svg style="margin:0px 5px 0px 20px;" class="Sbimg1" viewBox="0 0 16 16" fill="currentColor" height="20px" width="20px"><path d="M4.66,16a.76.76,0,0,1-.73-1l1.24-4.38a.75.75,0,1,1,1.45.41L5.38,15.46A.77.77,0,0,1,4.66,16Z"></path><path d="M11,16a.77.77,0,0,1-.63-.33L6.8,10.4a.75.75,0,0,1,1.25-.83l3.53,5.27a.74.74,0,0,1-.21,1A.71.71,0,0,1,11,16Z"></path><path d="M3.68,12.77A1.6,1.6,0,0,1,2.29,12L.57,9a1.63,1.63,0,0,1,.62-2.22L6.74,3.56l.75,1.3L2,8.09c-.08.05-.11.13-.09.17l1.73,3a.24.24,0,0,0,.19,0L9.32,8l.75,1.3L4.53,12.54A1.72,1.72,0,0,1,3.68,12.77Z"></path><path d="M10.88,10.53A1.68,1.68,0,0,1,9.43,9.7L6.12,4a1.67,1.67,0,0,1,.61-2.29L9.29.23a1.7,1.7,0,0,1,2.28.6l3.31,5.7a1.66,1.66,0,0,1,.17,1.27,1.62,1.62,0,0,1-.78,1L11.71,10.3A1.62,1.62,0,0,1,10.88,10.53Zm-.75-9L7.48,3a.16.16,0,0,0-.08.1.19.19,0,0,0,0,.13l3.31,5.7A.17.17,0,0,0,11,9l2.56-1.48a.18.18,0,0,0,.08-.11.13.13,0,0,0,0-.12l-3.3-5.71A.18.18,0,0,0,10.13,1.5Z"></path><path d="M14.24,6.82,13.4,5.58a1.7,1.7,0,0,0-1-3.1,1.59,1.59,0,0,0-.74.18L11,1.31A3.14,3.14,0,0,1,12.45,1a3.2,3.2,0,0,1,1.79,5.84Z"></path></svg>
                            <span>Manage Broker</span></a>
                    </li>
                    <li class='has_sub'><a href='add-user.php'><svg style="margin:0px 5px 0px 20px;"  viewBox="0 0 16 16" fill="currentColor" height="20px" width="20px"><path d="M3.81,16a1.21,1.21,0,0,1-.74-.26,1.19,1.19,0,0,1-.33-1.45L4.79,10,2.32,8.39a1,1,0,0,1-.07-1.58L10.67.26a1.19,1.19,0,0,1,1.8,1.46L10.41,6,12.9,7.64a1,1,0,0,1,.44.78,1,1,0,0,1-.38.8L4.54,15.74A1.15,1.15,0,0,1,3.81,16ZM3.76,7.53l2.4,1.56a.77.77,0,0,1,.27,1L4.65,13.76l6.81-5.27L9,6.91a.75.75,0,0,1-.26-1l1.78-3.71ZM12.08,8.9Zm-.95-8h0Z"></path></svg>
                            <span>Create User</span></a>
                    </li>
                    <li ><a href='logout.php'><svg style="margin:0px 5px 0px 20px;" class="Sbimg1" viewBox="0 0 16 16" fill="currentColor" height="20px" width="20px"><path d="M15.19,8.74H5.25a.75.75,0,0,1,0-1.5h9.94a.75.75,0,0,1,0,1.5Z"></path><path d="M15.19,15H5.25a.75.75,0,1,1,0-1.5h9.94a.75.75,0,0,1,0,1.5Z"></path><path d="M15.19,2.53H5.25a.75.75,0,0,1,0-1.5h9.94a.75.75,0,1,1,0,1.5Z"></path><path d="M2.25,8.74H.71a.75.75,0,1,1,0-1.5H2.25a.75.75,0,0,1,0,1.5Z"></path><path d="M2.25,15H.71a.75.75,0,0,1,0-1.5H2.25a.75.75,0,0,1,0,1.5Z"></path><path d="M2.25,2.53H.71A.75.75,0,0,1,.71,1H2.25a.75.75,0,1,1,0,1.5Z"></path></svg>
                            <span>Logout</span></a>
                    </li>

                    <div class="clearfix"></div><br>

                </ul>
                <div class="clearfix"></div>

            </div>
            <div class="clearfix"></div>

        </div>

    </div>