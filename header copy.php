<?php
@session_start();
require 'assets/inc/initDb.php';

//require 'assets/inc/functions.php';
//require 'includes/functions.php';

//echo "Admin: ".$_SESSION['admin'];
date_default_timezone_set("Australia/Sydney");
if(!isset($_SESSION['broker_id']))
{
    echo "<script>window.open('logout.php','_self')</script>";
}

if($_SESSION['broker_id'] == "")
{
    echo "<script>window.open('logout.php','_self')</script>";
}
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
   <!-- <link href="assets/libs/jquery-datatables/css/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/jquery-datatables/extensions/TableTools/css/dataTables.tableTools.css" rel="stylesheet" type="text/css" />
-->
    <!-- core:css -->
	<link rel="stylesheet" href="assets/core/core.css">
	<!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
	<!-- end plugin css for this page -->
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

    <link rel="shortcut icon" href="assets/img/favicon.png">
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
   <!-- <script src="assets/libs/jquery-datatables/js/jquery.dataTables.min.js"></script>
    <script src="assets/libs/jquery-datatables/js/dataTables.bootstrap.js"></script>
    <script src="assets/libs/jquery-datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
   s <script src="assets/js/pages/datatables.js"></script>-->
    <!-- core:js -->
	<script src="assets/core/core.js"></script>
    <!-- plugin js for this page -->
  <script src="assets/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <script src="assets/js/data-table.js"></script>

    <!--umar style include-->
    <!-- core:css -->
   <link rel="stylesheet" href="/assets/vendors/core/core.css">
    <!-- plugin css for this page -->
   <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
	<!-- end plugin css for this page -->
    <!-- inject:css -->
	<link rel="stylesheet" href="assets/fonts/feather-font/css/iconfont.css">
	<link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
	<!-- endinject -->
     <!-- Layout styles -->  
	<link rel="stylesheet" href="assets/css/demo_1/style.css">
    <!-- End layout styles -->


    <!-- core:js -->
	<script src="/assets/vendors/core/core.js"></script>
	<!-- endinject -->
    <!-- plugin js for this page -->
    <script src="assets/vendors/chartjs/Chart.min.js"></script>
    <script src="assets/vendors/jquery.flot/jquery.flot.js"></script>
    <script src="assets/vendors/jquery.flot/jquery.flot.resize.js"></script>
    <script src="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="assets/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
    <!-- end plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/vendors/feather-icons/feather.min.js"></script>
    <script src="assets/js/template.js"></script>
    <!-- endinject -->
    <!-- custom js for this page -->
    <script src="assets/js/pages/dashboard.js"></script>
    <script src="assets/js/pages/datepicker.js"></script>
	<!-- end custom js for this page -->
    
    
   
   

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
    <script src="assets/js/new-app.js"></script>
    <script src="assets/js/todo.js"></script>



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
                    <!--<ul class="nav navbar-nav hidden-xs">
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
                    </ul>-->
                    <ul class="nav navbar-nav navbar-right top-navbar">
                        <li class="dropdown iconify hide-phone">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-globe"></i><span class="label label-danger absolute">4</span></a>



                            <ul class="dropdown-menu dropdown-message ">
                                <div id="todo-app" class="widget">
                                    <div class="widget-header centered">
                                        <div class="left-btn"><a  data-toggle="modal" data-target="#myModal"  class="btn btn-sm btn-default" ><i class="fa fa-plus"></i></a></div>
                                        <h2>Todo List</h2>
                                       
                                    </div>
                                    <div class="widget-content padding-sm">
                                        <ul class="todo-list">
                                                  <?php
                                             $list = DB::query("select * from todo_list  order by id DESC limit 4");
                                                 foreach($list as $lists){

                                           ?>
                                            <li>
                                           
                                              <!--   <span class="check-icon"><input type="checkbox" /></span> -->
                                                <span><?=$lists['message']?></span>
                                                <span class="todo-options pull-right">
                                                    <a href="javascript:;" class="todo-delete"><i class="icon-cancel-3"></i></a>
                                                </span>
                                               <!--  <span class="todo-tags pull-right">
                                                    <div class="label label-success">New</div>
                                                </span> -->
                                                
                                            </li><br>
                                             <?php } ?>
                                   
                                        </ul>
                                    </div>
                                </div>
                            </ul> 
                        </li>


                        <!-- Todo List Start-->
                        <li class="dropdown iconify hide-phone">
                            <a href="#" data-toggle="modal" data-target="#myModal" ><i class="fa fa-plus"></i><span class="label label-danger absolute">3</span></a>
                            <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Todo List</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="widget">

                                                <div class="widget-content padding">
                                                    <form role="form" method="post" id="contactForm" enctype="multipart/form-data">

                                                        <div class="form-group">
                                                            <label>Message</label>
                                                            <textarea class="form-control" id="message1" name="message1" style="height: 140px; resize: none;"></textarea>
                                                        </div>

                                                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>

                                                    </form>

                                                </div>
                                            </div>

                                        </div>

                                        <div class="modal-footer">

                                        </div>

                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
<!--- toto list end--->
                        </li>
                        <li class="dropdown iconify hide-phone"><a href="#" onclick="javascript:toggle_fullscreen()"><i class="icon-resize-full-2"></i></a></li>
                        <li class="dropdown topbar-profile">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown"><span class="rounded-image topbar-profile-image"></span> Jane <strong>Doe</strong> <i class="fa fa-caret-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="profile.php">My Profile</a></li>
                                <li><a href="#">Change Password</a></li>
                                <li><a href="#">Account Setting</a></li>
                                <li class="divider"></li>
                                <li><a href="#"><i class="icon-help-2"></i> Help</a></li>
                                <li><a href="lockscreen.html"><i class="icon-lock-1"></i> Lock me</a></li>
                                <li><a class="md-trigger" data-modal="logout-modal"><i class="icon-logout-1"></i> Logout</a></li>
                            </ul>
                        </li>
                        <li class="right-opener">
                            <a href="javascript:;" class="open-right"><i class="fa fa-angle-double-left"></i><i class="fa fa-angle-double-right">
                            </i>
                            </a>

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
                    <a href="profile.html" class="rounded-image profile-image"></a>
                </div>
                <div class="col-xs-8">
                    <div class="profile-text">Welcome <br>
                        <b><?php  $_SESSION['admin'];
                       $array = (explode("@",$_SESSION['admin'],(-1)));
                       foreach ($array as $ar)
                       {
                           echo $ar;
                       }
                            ?>
                        </b>
                    </div>
                </div>
            </div>
            <!--- Divider -->
            <div class="clearfix"></div>
            <hr class="divider" />
            <div class="clearfix"></div>
            <!--- Divider -->
            <div id="sidebar-menu">
                <ul>
                    <li><a href='index.php'>
                            <svg style="margin:0px 5px 0px 20px;" class="Sbimg1" viewBox="0 0 16 16" fill="currentColor" height="20px" width="20px"><path d="M5.43,11.92a.73.73,0,0,1-.53-.22L3,9.82A.75.75,0,0,1,3,8.76L4.9,6.88A.75.75,0,0,1,6,7.94L4.61,9.29,6,10.64A.75.75,0,0,1,6,11.7.74.74,0,0,1,5.43,11.92Z"></path><path d="M10.58,11.92a.74.74,0,0,1-.53-.22.75.75,0,0,1,0-1.06L11.4,9.29,10.05,7.94a.75.75,0,0,1,1.06-1.06L13,8.76a.74.74,0,0,1,0,1.06L11.11,11.7A.71.71,0,0,1,10.58,11.92Z"></path><path d="M15.26,16H.76A.75.75,0,0,1,0,15.26V.76A.74.74,0,0,1,.76,0H5.12A2.75,2.75,0,0,1,6.77.56L8.51,1.87a1.3,1.3,0,0,0,.75.25h6a.76.76,0,0,1,.75.75V15.26A.76.76,0,0,1,15.26,16ZM1.51,14.51h13V3.62H9.26a2.75,2.75,0,0,1-1.65-.55L5.87,1.76h0a1.3,1.3,0,0,0-.75-.25H1.51Z"></path></svg>
                            <span>Dashboard</span></a>
                    </li>
                    <li><a href='leads.php'>
                            <svg style="margin:0px 5px 0px 20px;" class="Sbimg1" viewBox="0 0 16 16" fill="currentColor" height="20px" width="20px">
                                <path d="M13.24,16H2.74A2.75,2.75,0,0,1,0,13.26V2.76A2.75,2.75,0,0,1,2.74,0h10.5A2.75,2.75,0,0,1,16,2.76v10.5A2.75,2.75,0,0,1,13.24,16ZM2.74,1.51A1.25,1.25,0,0,0,1.49,2.76v10.5a1.25,1.25,0,0,0,1.25,1.25h10.5a1.25,1.25,0,0,0,1.25-1.25V2.76a1.25,1.25,0,0,0-1.25-1.25Z"></path><rect x="0.74" y="2.61" width="14.5" height="1.5"></rect><rect x="0.74" y="5.26" width="14.5" height="1.5"></rect><path d="M10.79,12.08H5.19a1.25,1.25,0,0,1-1.25-1.25V9.42H.74V7.92h4.7v2.66h5.1V7.92h4.7v1.5H12v1.41A1.25,1.25,0,0,1,10.79,12.08Z"></path></svg>
                            <span>Leads</span></a>
                    </li>
                    <li class='contacts.php'><a href='contacts.php'><svg style="margin:0px 5px 0px 20px;" class="Sbimg1" viewBox="0 0 16 16" fill="currentColor" height="20px" width="20px"><path d="M4.66,16a.76.76,0,0,1-.73-1l1.24-4.38a.75.75,0,1,1,1.45.41L5.38,15.46A.77.77,0,0,1,4.66,16Z"></path><path d="M11,16a.77.77,0,0,1-.63-.33L6.8,10.4a.75.75,0,0,1,1.25-.83l3.53,5.27a.74.74,0,0,1-.21,1A.71.71,0,0,1,11,16Z"></path><path d="M3.68,12.77A1.6,1.6,0,0,1,2.29,12L.57,9a1.63,1.63,0,0,1,.62-2.22L6.74,3.56l.75,1.3L2,8.09c-.08.05-.11.13-.09.17l1.73,3a.24.24,0,0,0,.19,0L9.32,8l.75,1.3L4.53,12.54A1.72,1.72,0,0,1,3.68,12.77Z"></path><path d="M10.88,10.53A1.68,1.68,0,0,1,9.43,9.7L6.12,4a1.67,1.67,0,0,1,.61-2.29L9.29.23a1.7,1.7,0,0,1,2.28.6l3.31,5.7a1.66,1.66,0,0,1,.17,1.27,1.62,1.62,0,0,1-.78,1L11.71,10.3A1.62,1.62,0,0,1,10.88,10.53Zm-.75-9L7.48,3a.16.16,0,0,0-.08.1.19.19,0,0,0,0,.13l3.31,5.7A.17.17,0,0,0,11,9l2.56-1.48a.18.18,0,0,0,.08-.11.13.13,0,0,0,0-.12l-3.3-5.71A.18.18,0,0,0,10.13,1.5Z"></path><path d="M14.24,6.82,13.4,5.58a1.7,1.7,0,0,0-1-3.1,1.59,1.59,0,0,0-.74.18L11,1.31A3.14,3.14,0,0,1,12.45,1a3.2,3.2,0,0,1,1.79,5.84Z"></path></svg>
                            <span>Contacts</span></a>
                    </li>
                    <li><a href='#'><svg style="margin:0px 5px 0px 20px;"  viewBox="0 0 16 16" fill="currentColor" height="20px" width="20px"><path d="M3.81,16a1.21,1.21,0,0,1-.74-.26,1.19,1.19,0,0,1-.33-1.45L4.79,10,2.32,8.39a1,1,0,0,1-.07-1.58L10.67.26a1.19,1.19,0,0,1,1.8,1.46L10.41,6,12.9,7.64a1,1,0,0,1,.44.78,1,1,0,0,1-.38.8L4.54,15.74A1.15,1.15,0,0,1,3.81,16ZM3.76,7.53l2.4,1.56a.77.77,0,0,1,.27,1L4.65,13.76l6.81-5.27L9,6.91a.75.75,0,0,1-.26-1l1.78-3.71ZM12.08,8.9Zm-.95-8h0Z"></path></svg>
                            <span>Referrer</span></a>
                    </li>
                    <li ><a href='new-application.php'><svg style="margin:0px 5px 0px 20px;" class="Sbimg1" viewBox="0 0 16 16" fill="currentColor" height="20px" width="20px"><path d="M14.74,16H1.26a.75.75,0,0,1-.75-.75V13.08a1.75,1.75,0,0,1,1.75-1.75H13.74a1.75,1.75,0,0,1,1.75,1.75v2.17A.75.75,0,0,1,14.74,16ZM2,14.5H14V13.08a.25.25,0,0,0-.25-.25H2.26a.25.25,0,0,0-.25.25Z"></path><path d="M12.48,12.24,11.21,6.08a1.2,1.2,0,0,0-1.18-1H6a1.2,1.2,0,0,0-1.18,1L3.52,12.24l-1.46-.31L3.32,5.78A2.71,2.71,0,0,1,6,3.61H10a2.71,2.71,0,0,1,2.65,2.17l1.26,6.15Z"></path><path d="M4,3.45a.75.75,0,0,1-.64-.36L2.56,1.77a.75.75,0,0,1,.24-1,.76.76,0,0,1,1,.24L4.65,2.3a.76.76,0,0,1-.24,1A.79.79,0,0,1,4,3.45Z"></path><path d="M2.15,5.94H.77a.75.75,0,0,1,0-1.5H2.15a.75.75,0,0,1,0,1.5Z"></path><path d="M8,2.92a.76.76,0,0,1-.75-.75V.77a.75.75,0,1,1,1.5,0v1.4A.76.76,0,0,1,8,2.92Z"></path><path d="M12,3.45a.79.79,0,0,1-.39-.11.76.76,0,0,1-.24-1L12.16,1a.76.76,0,0,1,1-.24.75.75,0,0,1,.24,1l-.82,1.32A.75.75,0,0,1,12,3.45Z"></path><path d="M15.23,5.94H13.85a.75.75,0,0,1,0-1.5h1.38a.75.75,0,0,1,0,1.5Z"></path><path d="M8,10.63a2,2,0,1,1,2-2A2,2,0,0,1,8,10.63ZM8,8.09a.52.52,0,1,0,.52.52A.52.52,0,0,0,8,8.09Z"></path><rect x="7.25" y="9.88" width="1.5" height="2.21"></rect></svg>
                            <span>New Application</span></a>
                    </li>
                    <li ><a href='my-application.php'><svg style="margin:0px 5px 0px 20px;" class="Sbimg1" viewBox="0 0 16 16" fill="currentColor" height="20px" width="20px"><path d="M14.77,16H1.23A1.26,1.26,0,0,1,0,14.75V6.52A1.25,1.25,0,0,1,1.23,5.27H14.77A1.25,1.25,0,0,1,16,6.52v8.23A1.26,1.26,0,0,1,14.77,16ZM1.48,14.5h13V6.77h-13Z"></path><path d="M14.71,6h-1.5V4.14H2.79V6H1.29V3.89A1.25,1.25,0,0,1,2.54,2.64H13.46a1.25,1.25,0,0,1,1.25,1.25Z"></path><path d="M13.37,3.39h-1.5V1.5H4.13V3.39H2.63V1.25A1.26,1.26,0,0,1,3.88,0h8.24a1.26,1.26,0,0,1,1.25,1.25Z"></path></svg>
                            <span>My Application</span></a>
                    </li>
                    <li >
                        <a href='email_new.php'><svg style="margin:0px 5px 0px 20px;" class="Sbimg1" viewBox="0 0 16 16" fill="currentColor" height="20px" width="20px"><path d="M9.9,15.61H6.1a.74.74,0,0,1-.75-.75v-2.6a.74.74,0,0,1,.75-.75H9.9a.74.74,0,0,1,.75.75v2.6A.74.74,0,0,1,9.9,15.61Zm-3.05-1.5h2.3V13H6.85Z"></path><path d="M6.1,14.31H5.37a2.75,2.75,0,0,1-2.75-2.75V3.14A2.75,2.75,0,0,1,5.37.39h5.26a2.75,2.75,0,0,1,2.75,2.75V9.4h-1.5V3.14a1.25,1.25,0,0,0-1.25-1.25H5.37A1.25,1.25,0,0,0,4.12,3.14v8.42a1.25,1.25,0,0,0,1.25,1.25H6.1Z"></path><path d="M3.37,10.16H2.2A2.25,2.25,0,0,1,0,7.91V7A2.25,2.25,0,0,1,2.2,4.74H3.37v1.5H2.2A.74.74,0,0,0,1.45,7v.92a.75.75,0,0,0,.75.75H3.37Z"></path><path d="M13.8,10.16H12.63V8.66H13.8a.75.75,0,0,0,.75-.75V7a.74.74,0,0,0-.75-.75H12.63V4.74H13.8A2.25,2.25,0,0,1,16.05,7v.92A2.25,2.25,0,0,1,13.8,10.16Z"></path></svg>
                            <span>Emails</span>
                        </a>
                    </li>
                    <li class='new-message.php'><a href='new-message.php'><svg style="margin:0px 5px 0px 20px;" class="Sbimg1" viewBox="0 0 16 16" fill="currentColor" height="20px" width="20px"><path d="M4.66,16a.76.76,0,0,1-.73-1l1.24-4.38a.75.75,0,1,1,1.45.41L5.38,15.46A.77.77,0,0,1,4.66,16Z"></path><path d="M11,16a.77.77,0,0,1-.63-.33L6.8,10.4a.75.75,0,0,1,1.25-.83l3.53,5.27a.74.74,0,0,1-.21,1A.71.71,0,0,1,11,16Z"></path><path d="M3.68,12.77A1.6,1.6,0,0,1,2.29,12L.57,9a1.63,1.63,0,0,1,.62-2.22L6.74,3.56l.75,1.3L2,8.09c-.08.05-.11.13-.09.17l1.73,3a.24.24,0,0,0,.19,0L9.32,8l.75,1.3L4.53,12.54A1.72,1.72,0,0,1,3.68,12.77Z"></path><path d="M10.88,10.53A1.68,1.68,0,0,1,9.43,9.7L6.12,4a1.67,1.67,0,0,1,.61-2.29L9.29.23a1.7,1.7,0,0,1,2.28.6l3.31,5.7a1.66,1.66,0,0,1,.17,1.27,1.62,1.62,0,0,1-.78,1L11.71,10.3A1.62,1.62,0,0,1,10.88,10.53Zm-.75-9L7.48,3a.16.16,0,0,0-.08.1.19.19,0,0,0,0,.13l3.31,5.7A.17.17,0,0,0,11,9l2.56-1.48a.18.18,0,0,0,.08-.11.13.13,0,0,0,0-.12l-3.3-5.71A.18.18,0,0,0,10.13,1.5Z"></path><path d="M14.24,6.82,13.4,5.58a1.7,1.7,0,0,0-1-3.1,1.59,1.59,0,0,0-.74.18L11,1.31A3.14,3.14,0,0,1,12.45,1a3.2,3.2,0,0,1,1.79,5.84Z"></path></svg>
                            <span>Send Message</span></a>
                    </li>
                    <li ><a href='javascript:void(0);'><svg style="margin:0px 5px 0px 20px;" class="Sbimg1" viewBox="0 0 16 16" fill="currentColor" height="20px" width="20px"><path d="M9.9,15.61H6.1a.74.74,0,0,1-.75-.75v-2.6a.74.74,0,0,1,.75-.75H9.9a.74.74,0,0,1,.75.75v2.6A.74.74,0,0,1,9.9,15.61Zm-3.05-1.5h2.3V13H6.85Z"></path><path d="M6.1,14.31H5.37a2.75,2.75,0,0,1-2.75-2.75V3.14A2.75,2.75,0,0,1,5.37.39h5.26a2.75,2.75,0,0,1,2.75,2.75V9.4h-1.5V3.14a1.25,1.25,0,0,0-1.25-1.25H5.37A1.25,1.25,0,0,0,4.12,3.14v8.42a1.25,1.25,0,0,0,1.25,1.25H6.1Z"></path><path d="M3.37,10.16H2.2A2.25,2.25,0,0,1,0,7.91V7A2.25,2.25,0,0,1,2.2,4.74H3.37v1.5H2.2A.74.74,0,0,0,1.45,7v.92a.75.75,0,0,0,.75.75H3.37Z"></path><path d="M13.8,10.16H12.63V8.66H13.8a.75.75,0,0,0,.75-.75V7a.74.74,0,0,0-.75-.75H12.63V4.74H13.8A2.25,2.25,0,0,1,16.05,7v.92A2.25,2.25,0,0,1,13.8,10.16Z"></path></svg>
                            <span>Reports</span></a>
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