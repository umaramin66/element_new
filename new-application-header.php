<?php
@session_start();
require 'assets/inc/initDb.php';
//require 'assets/inc/functions.php';
//require 'includes/functions.php';

//echo "Admin: ".$_SESSION['admin'];
date_default_timezone_set("Australia/Sydney");


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Dashboard | ELEMENT </title>
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
    <link href="assets/libs/jquery-datatables/css/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/jquery-datatables/extensions/TableTools/css/dataTables.tableTools.css" rel="stylesheet" type="text/css" />
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
    <script src="assets/libs/jquery-datatables/js/jquery.dataTables.min.js"></script>
    <script src="assets/libs/jquery-datatables/js/dataTables.bootstrap.js"></script>
    <script src="assets/libs/jquery-datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
    <script src="assets/js/pages/datatables.js"></script>

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
    <script src="assets/js/send-email.js"></script>
    <script src="assets/js/docs.js"></script>
    <script src="assets/js/lender-invoice.js"></script>
    <script src="assets/js/private-sale-invoice.js"></script>
    <script src="assets/js/tax-invoice-form.js"></script>


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
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-plus"></i><span class="label label-danger absolute">3</span></a>
                            <ul class="dropdown-menu dropdown-message">
                                <div id="todo-app" class="widget">
                                    <div class="widget-header centered">
                                        <div class="left-btn"><a class="btn btn-sm btn-default add-todo"><i class="fa fa-plus"></i></a></div>
                                        <h2>Todo List</h2>
                                        <div class="additional-btn">
                                            <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                            <a href="#" class="widget-popout hidden tt" title="Pop Out/In"><i class="icon-publish"></i></a>
                                            <a href="#" class="widget-maximize hidden"><i class="icon-resize-full-1"></i></a>
                                            <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                            <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                                        </div>
                                    </div>
                                    <div class="widget-content padding-sm">
                                        <ul class="todo-list">
                                            <li>
                                                <span class="check-icon"><input type="checkbox" /></span>
                                                <span class="todo-item">Generate monthly sales report for John</span>
                                                <span class="todo-options pull-right">
													<a href="javascript:;" class="todo-delete"><i class="icon-cancel-3"></i></a>
												</span>
                                                <span class="todo-tags pull-right">
													<div class="label label-success">New</div>
												</span>
                                            </li>
                                            <li class="high">
                                                <span class="check-icon"><input type="checkbox" /></span>
                                                <span class="todo-item">Mail those reports to John</span>
                                                <span class="todo-options pull-right">
													<a href="javascript:;" class="todo-delete"><i class="icon-cancel-3"></i></a>
												</span>
                                            </li>
                                            <li>
                                                <span class="check-icon"><input type="checkbox" /></span>
                                                <span class="todo-item">Don't forget to send those reports to John</span>
                                                <span class="todo-options pull-right">
													<a href="javascript:;" class="todo-delete"><i class="icon-cancel-3"></i></a>
												</span>
                                            </li>
                                            <li class="medium">
                                                <span class="check-icon"><input type="checkbox" /></span>
                                                <span class="todo-item">If you forgot, go back to office to pick them up</span>
                                                <span class="todo-options pull-right">
													<a href="javascript:;" class="todo-delete"><i class="icon-cancel-3"></i></a>
												</span>
                                                <span class="todo-tags pull-right">
													<div class="label label-info">Today</div>
												</span>
                                            </li>
                                            <li class="low">
                                                <span class="check-icon"><input type="checkbox" /></span>
                                                <span class="todo-item">Deliver reports by hand to John</span>
                                                <span class="todo-options pull-right">
													<a href="javascript:;" class="todo-delete"><i class="icon-cancel-3"></i></a>
												</span>
                                            </li>
                                            <li>
                                                <span class="check-icon"><input type="checkbox" /></span>
                                                <span class="todo-item">Say John that you are sorry</span>
                                                <span class="todo-options pull-right">
													<a href="javascript:;" class="todo-delete"><i class="icon-cancel-3"></i></a>
												</span>
                                            </li>
                                            <li>
                                                <span class="check-icon"><input type="checkbox" /></span>
                                                <span class="todo-item">Beg for your job...</span>
                                                <span class="todo-options pull-right">
													<a href="javascript:;" class="todo-delete"><i class="icon-cancel-3"></i></a>
												</span>
                                                <span class="todo-tags pull-right">
													<div class="label label-danger">Important</div>
												</span>
                                            </li>
                                            <li>
                                                <span class="check-icon"><input type="checkbox" /></span>
                                                <span class="todo-item">Look for a new job</span>
                                                <span class="todo-options pull-right">
													<a href="javascript:;" class="todo-delete"><i class="icon-cancel-3"></i></a>
												</span>
                                                <span class="todo-tags pull-right">
													<div class="label label-warning"><i class="icon-search"></i></div>
												</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--                                <li class="dropdown-header notif-header"><i class="icon-mail-2"></i> Todo List</li>-->
                                    <!--                                <li class="unread">-->
                                    <!--                                    <a href="#" class="clearfix">-->
                                    <!--                                        <img src="images/users/chat/2.jpg" class="xs-avatar ava-dropdown" alt="Avatar">-->
                                    <!--                                        <strong>Maseh</strong><i class="pull-right msg-time">5 minutes ago</i><br />-->
                                    <!--                                        <p>Duis autem vel eum iriure dolor in hendrerit ...</p>-->
                                    <!--                                    </a>-->
                                    <!--                                </li>-->
                                    <!--                                <li class="unread">-->
                                    <!--                                    <a href="#" class="clearfix">-->
                                    <!--                                        <img src="images/users/chat/1.jpg" class="xs-avatar ava-dropdown" alt="Avatar">-->
                                    <!--                                        <strong>Sandra Kraken</strong><i class="pull-right msg-time">22 minutes ago</i><br />-->
                                    <!--                                        <p>Duis autem vel eum iriure dolor in hendrerit ...</p>-->
                                    <!--                                    </a>-->
                                    <!--                                </li>-->
                                    <!--                                <li>-->
                                    <!--                                    <a href="#" class="clearfix">-->
                                    <!--                                        <img src="images/users/chat/3.jpg" class="xs-avatar ava-dropdown" alt="Avatar">-->
                                    <!--                                        <strong>Zoey Lombardo</strong><i class="pull-right msg-time">41 minutes ago</i><br />-->
                                    <!--                                        <p>Duis autem vel eum iriure dolor in hendrerit ...</p>-->
                                    <!--                                    </a>-->
                                    <!--                                </li>-->
                                    <!--                                <li class="dropdown-footer"><div class=""><a href="#" class="btn btn-sm btn-block btn-primary"><i class="fa fa-share"></i> See all messages</a></div></li>-->
                            </ul>
                        </li>
                        <li class="dropdown iconify hide-phone"><a href="#" onclick="javascript:toggle_fullscreen()"><i class="icon-resize-full-2"></i></a></li>
                        <li class="dropdown topbar-profile">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="rounded-image topbar-profile-image"><img src="assets/img/milky-way.png"></span> Jane <strong>Doe</strong> <i class="fa fa-caret-down"></i></a>
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
                    <a href="profile.html" class="rounded-image profile-image"><img src="assets/img/milky-way.png"></a>
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