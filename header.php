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
  <link rel="stylesheet" href="/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
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
   <link rel="stylesheet" href="assets/vendors/core/core.css">
    <!-- plugin css for this page -->
   <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
	<!-- end plugin css for this page -->
    <link rel="stylesheet" href="assets/datatables.net-bs4/dataTables.bootstrap4.css">
	<!-- end plugin css for this page -->
    <!-- inject:css -->
	<link rel="stylesheet" href="assets/fonts/feather-font/css/iconfont.css">
	<link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
	<!-- endinject -->
     <!-- Layout styles -->  
	<link rel="stylesheet" href="assets/css/demo_1/style.css">
    <!-- End layout styles -->
 
    <!-- core:js -->
	<script src="assets/vendors/core/core.js"></script>
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
    <script src="umar/assets/js/template.js"></script>
    <!-- endinject -->
    <!-- custom js for this page -->
    <script src="assets/js/pages/dashboard.js"></script>
    <script src="assets/js/pages/datepicker.js"></script>
	<!-- end custom js for this page -->
    <!-- plugin js for this page -->
  <script src="assets/datatables.net/jquery.dataTables.js"></script>
  <script src="assets/datatables.net-bs4/dataTables.bootstrap4.js"></script>
	<!-- end plugin js for this page -->
     <!-- custom js for this page -->
 <!-- <script src="/assets/js/pages/data-table.js"></script>-->
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
    		
			<!-- partial:partials/_navbar.html -->
			<!--<nav class="navbar">
				<a href="#" class="sidebar-toggler">
					<i data-feather="menu"></i>
				</a>
				<div class="navbar-content">
					<form class="search-form">
						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text">
									<i data-feather="search"></i>
								</div>
							</div>
							<input type="text" class="form-control" id="navbarForm" placeholder="Search here...">
						</div>
					</form>
					<ul class="navbar-nav">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="flag-icon flag-icon-us mt-1" title="us"></i> <span class="font-weight-medium ml-1 mr-1 d-none d-md-inline-block">English</span>
							</a>
							<div class="dropdown-menu" aria-labelledby="languageDropdown">
                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-us" title="us" id="us"></i> <span class="ml-1"> English </span></a>
                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-fr" title="fr" id="fr"></i> <span class="ml-1"> French </span></a>
                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-de" title="de" id="de"></i> <span class="ml-1"> German </span></a>
                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-pt" title="pt" id="pt"></i> <span class="ml-1"> Portuguese </span></a>
                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-es" title="es" id="es"></i> <span class="ml-1"> Spanish </span></a>
							</div>
                      </li>
						<li class="nav-item dropdown nav-apps">
							<a class="nav-link dropdown-toggle" href="#" id="appsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i data-feather="grid"></i>
							</a>
							<div class="dropdown-menu" aria-labelledby="appsDropdown">
								<div class="dropdown-header d-flex align-items-center justify-content-between">
									<p class="mb-0 font-weight-medium">Web Apps</p>
									<a href="javascript:;" class="text-muted">Edit</a>
								</div>
								<div class="dropdown-body">
									<div class="d-flex align-items-center apps">
										<a href="pages/apps/chat.html"><i data-feather="message-square" class="icon-lg"></i><p>Chat</p></a>
										<a href="pages/apps/calendar.html"><i data-feather="calendar" class="icon-lg"></i><p>Calendar</p></a>
										<a href="pages/email/inbox.html"><i data-feather="mail" class="icon-lg"></i><p>Email</p></a>
										<a href="pages/general/profile.html"><i data-feather="instagram" class="icon-lg"></i><p>Profile</p></a>
									</div>
								</div>
								<div class="dropdown-footer d-flex align-items-center justify-content-center">
									<a href="javascript:;">View all</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown nav-messages">
							<a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i data-feather="mail"></i>
							</a>
							<div class="dropdown-menu" aria-labelledby="messageDropdown">
								<div class="dropdown-header d-flex align-items-center justify-content-between">
									<p class="mb-0 font-weight-medium">9 New Messages</p>
									<a href="javascript:;" class="text-muted">Clear all</a>
								</div>
								<div class="dropdown-body">
									<a href="javascript:;" class="dropdown-item">
										<div class="figure">
											<img src="https://via.placeholder.com/30x30" alt="userr">
										</div>
										<div class="content">
											<div class="d-flex justify-content-between align-items-center">
												<p>Leonardo Payne</p>
												<p class="sub-text text-muted">2 min ago</p>
											</div>	
											<p class="sub-text text-muted">Project status</p>
										</div>
									</a>
									<a href="javascript:;" class="dropdown-item">
										<div class="figure">
											<img src="https://via.placeholder.com/30x30" alt="userr">
										</div>
										<div class="content">
											<div class="d-flex justify-content-between align-items-center">
												<p>Carl Henson</p>
												<p class="sub-text text-muted">30 min ago</p>
											</div>	
											<p class="sub-text text-muted">Client meeting</p>
										</div>
									</a>
									<a href="javascript:;" class="dropdown-item">
										<div class="figure">
											<img src="https://via.placeholder.com/30x30" alt="userr">
										</div>
										<div class="content">
											<div class="d-flex justify-content-between align-items-center">
												<p>Jensen Combs</p>												
												<p class="sub-text text-muted">1 hrs ago</p>
											</div>	
											<p class="sub-text text-muted">Project updates</p>
										</div>
									</a>
									<a href="javascript:;" class="dropdown-item">
										<div class="figure">
											<img src="https://via.placeholder.com/30x30" alt="userr">
										</div>
										<div class="content">
											<div class="d-flex justify-content-between align-items-center">
												<p>Amiah Burton</p>
												<p class="sub-text text-muted">2 hrs ago</p>
											</div>
											<p class="sub-text text-muted">Project deadline</p>
										</div>
									</a>
									<a href="javascript:;" class="dropdown-item">
										<div class="figure">
											<img src="https://via.placeholder.com/30x30" alt="userr">
										</div>
										<div class="content">
											<div class="d-flex justify-content-between align-items-center">
												<p>Yaretzi Mayo</p>
												<p class="sub-text text-muted">5 hr ago</p>
											</div>
											<p class="sub-text text-muted">New record</p>
										</div>
									</a>
								</div>
								<div class="dropdown-footer d-flex align-items-center justify-content-center">
									<a href="javascript:;">View all</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown nav-notifications">
							<a class="nav-link dropdown-toggle" href="#" id="notificationDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i data-feather="bell"></i>
								<div class="indicator">
									<div class="circle"></div>
								</div>
							</a>
							<div class="dropdown-menu" aria-labelledby="notificationDropdown">
								<div class="dropdown-header d-flex align-items-center justify-content-between">
									<p class="mb-0 font-weight-medium">6 New Notifications</p>
									<a href="javascript:;" class="text-muted">Clear all</a>
								</div>
								<div class="dropdown-body">
									<a href="javascript:;" class="dropdown-item">
										<div class="icon">
											<i data-feather="user-plus"></i>
										</div>
										<div class="content">
											<p>New customer registered</p>
											<p class="sub-text text-muted">2 sec ago</p>
										</div>
									</a>
									<a href="javascript:;" class="dropdown-item">
										<div class="icon">
											<i data-feather="gift"></i>
										</div>
										<div class="content">
											<p>New Order Recieved</p>
											<p class="sub-text text-muted">30 min ago</p>
										</div>
									</a>
									<a href="javascript:;" class="dropdown-item">
										<div class="icon">
											<i data-feather="alert-circle"></i>
										</div>
										<div class="content">
											<p>Server Limit Reached!</p>
											<p class="sub-text text-muted">1 hrs ago</p>
										</div>
									</a>
									<a href="javascript:;" class="dropdown-item">
										<div class="icon">
											<i data-feather="layers"></i>
										</div>
										<div class="content">
											<p>Apps are ready for update</p>
											<p class="sub-text text-muted">5 hrs ago</p>
										</div>
									</a>
									<a href="javascript:;" class="dropdown-item">
										<div class="icon">
											<i data-feather="download"></i>
										</div>
										<div class="content">
											<p>Download completed</p>
											<p class="sub-text text-muted">6 hrs ago</p>
										</div>
									</a>
								</div>
								<div class="dropdown-footer d-flex align-items-center justify-content-center">
									<a href="javascript:;">View all</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown nav-profile">
							<a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<img src="https://via.placeholder.com/30x30" alt="profile">
							</a>
							<div class="dropdown-menu" aria-labelledby="profileDropdown">
								<div class="dropdown-header d-flex flex-column align-items-center">
									<div class="figure mb-3">
										<img src="https://via.placeholder.com/80x80" alt="">
									</div>
									<div class="info text-center">
										<p class="name font-weight-bold mb-0">Amiah Burton</p>
										<p class="email text-muted mb-3">amiahburton@gmail.com</p>
									</div>
								</div>
								<div class="dropdown-body">
									<ul class="profile-nav p-0 pt-3">
										<li class="nav-item">
											<a href="pages/general/profile.html" class="nav-link">
												<i data-feather="user"></i>
												<span>Profile</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="javascript:;" class="nav-link">
												<i data-feather="edit"></i>
												<span>Edit Profile</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="javascript:;" class="nav-link">
												<i data-feather="repeat"></i>
												<span>Switch User</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="javascript:;" class="nav-link">
												<i data-feather="log-out"></i>
												<span>Log Out</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</nav>-->
			<!-- partial -->

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
   <!-- <div class="topbar">-->

        <!-- Button mobile view to collapse sidebar menu -->
      <!--  <div class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-collapse2">-->
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
                  <!--  <ul class="nav navbar-nav navbar-right top-navbar">-->
                        <!--<li class="dropdown iconify hide-phone">
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
                                                 -->
                                              <!--   <span class="check-icon"><input type="checkbox" /></span> -->
                                               <!-- <span><?=$lists['message']?></span>
                                                <span class="todo-options pull-right">
                                                    <a href="javascript:;" class="todo-delete"><i class="icon-cancel-3"></i></a>
                                                </span>-->
                                               <!--  <span class="todo-tags pull-right">
                                                    <div class="label label-success">New</div>
                                                </span> -->
                                                
                                           <!-- </li><br>
                                             <?php } ?>
                                   
                                        </ul>
                                    </div>
                                </div>
                            </ul> 
                        </li>-->
                        <!-- Todo List Start-->
                       <!-- <li class="dropdown iconify hide-phone">
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

                                    </div>--><!-- /.modal-content -->
                               <!-- </div>--><!-- /.modal-dialog -->
                           <!-- </div>--><!-- /.modal -->
                   <!--- toto list end--->
                       <!-- </li>
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
                        </li>-->
                        <!--<li class="right-opener">
                            <a href="javascript:;" class="open-right"><i class="fa fa-angle-double-left"></i><i class="fa fa-angle-double-right">
                            </i>
                            </a>

                        </li>-->
                        
                   <!-- </ul>
                </div>-->
                <!--/.nav-collapse -->
          <!--  </div>
        </div>
    </div>-->
    <nav class="navbar">
				<a href="#" class="sidebar-toggler">
					<i data-feather="menu"></i>
				</a>
				<div class="navbar-content">
					<form class="search-form">
						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text">
									<i data-feather="search"></i>
								</div>
							</div>
							<input type="text" class="form-control" id="navbarForm" placeholder="Search here...">
						</div>
					</form>
					<ul class="navbar-nav">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="flag-icon flag-icon-us mt-1" title="us"></i> <span class="font-weight-medium ml-1 mr-1 d-none d-md-inline-block">English</span>
							</a>
							<div class="dropdown-menu" aria-labelledby="languageDropdown">
                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-us" title="us" id="us"></i> <span class="ml-1"> English </span></a>
                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-fr" title="fr" id="fr"></i> <span class="ml-1"> French </span></a>
                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-de" title="de" id="de"></i> <span class="ml-1"> German </span></a>
                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-pt" title="pt" id="pt"></i> <span class="ml-1"> Portuguese </span></a>
                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-es" title="es" id="es"></i> <span class="ml-1"> Spanish </span></a>
							</div>
            </li>
						<li class="nav-item dropdown nav-apps">
							<a class="nav-link dropdown-toggle" href="#" id="appsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i data-feather="grid"></i>
							</a>
							<div class="dropdown-menu" aria-labelledby="appsDropdown">
								<div class="dropdown-header d-flex align-items-center justify-content-between">
									<p class="mb-0 font-weight-medium">Web Apps</p>
									<a href="javascript:;" class="text-muted">Edit</a>
								</div>
								<div class="dropdown-body">
									<div class="d-flex align-items-center apps">
										<a href="pages/apps/chat.html"><i data-feather="message-square" class="icon-lg"></i><p>Chat</p></a>
										<a href="pages/apps/calendar.html"><i data-feather="calendar" class="icon-lg"></i><p>Calendar</p></a>
										<a href="pages/email/inbox.html"><i data-feather="mail" class="icon-lg"></i><p>Email</p></a>
										<a href="pages/general/profile.html"><i data-feather="instagram" class="icon-lg"></i><p>Profile</p></a>
									</div>
								</div>
								<div class="dropdown-footer d-flex align-items-center justify-content-center">
									<a href="javascript:;">View all</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown nav-messages">
							<a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i data-feather="mail"></i>
							</a>
							<div class="dropdown-menu" aria-labelledby="messageDropdown">
								<div class="dropdown-header d-flex align-items-center justify-content-between">
									<p class="mb-0 font-weight-medium">9 New Messages</p>
									<a href="javascript:;" class="text-muted">Clear all</a>
								</div>
								<div class="dropdown-body">
									<a href="javascript:;" class="dropdown-item">
										<div class="figure">
											<img src="https://via.placeholder.com/30x30" alt="userr">
										</div>
										<div class="content">
											<div class="d-flex justify-content-between align-items-center">
												<p>Leonardo Payne</p>
												<p class="sub-text text-muted">2 min ago</p>
											</div>	
											<p class="sub-text text-muted">Project status</p>
										</div>
									</a>
									<a href="javascript:;" class="dropdown-item">
										<div class="figure">
											<img src="https://via.placeholder.com/30x30" alt="userr">
										</div>
										<div class="content">
											<div class="d-flex justify-content-between align-items-center">
												<p>Carl Henson</p>
												<p class="sub-text text-muted">30 min ago</p>
											</div>	
											<p class="sub-text text-muted">Client meeting</p>
										</div>
									</a>
									<a href="javascript:;" class="dropdown-item">
										<div class="figure">
											<img src="https://via.placeholder.com/30x30" alt="userr">
										</div>
										<div class="content">
											<div class="d-flex justify-content-between align-items-center">
												<p>Jensen Combs</p>												
												<p class="sub-text text-muted">1 hrs ago</p>
											</div>	
											<p class="sub-text text-muted">Project updates</p>
										</div>
									</a>
									<a href="javascript:;" class="dropdown-item">
										<div class="figure">
											<img src="https://via.placeholder.com/30x30" alt="userr">
										</div>
										<div class="content">
											<div class="d-flex justify-content-between align-items-center">
												<p>Amiah Burton</p>
												<p class="sub-text text-muted">2 hrs ago</p>
											</div>
											<p class="sub-text text-muted">Project deadline</p>
										</div>
									</a>
									<a href="javascript:;" class="dropdown-item">
										<div class="figure">
											<img src="https://via.placeholder.com/30x30" alt="userr">
										</div>
										<div class="content">
											<div class="d-flex justify-content-between align-items-center">
												<p>Yaretzi Mayo</p>
												<p class="sub-text text-muted">5 hr ago</p>
											</div>
											<p class="sub-text text-muted">New record</p>
										</div>
									</a>
								</div>
								<div class="dropdown-footer d-flex align-items-center justify-content-center">
									<a href="javascript:;">View all</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown nav-notifications">
							<a class="nav-link dropdown-toggle" href="#" id="notificationDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i data-feather="bell"></i>
								<div class="indicator">
									<div class="circle"></div>
								</div>
							</a>
							<div class="dropdown-menu" aria-labelledby="notificationDropdown">
								<div class="dropdown-header d-flex align-items-center justify-content-between">
									<p class="mb-0 font-weight-medium">6 New Notifications</p>
									<a href="javascript:;" class="text-muted">Clear all</a>
								</div>
								<div class="dropdown-body">
									<a href="javascript:;" class="dropdown-item">
										<div class="icon">
											<i data-feather="user-plus"></i>
										</div>
										<div class="content">
											<p>New customer registered</p>
											<p class="sub-text text-muted">2 sec ago</p>
										</div>
									</a>
									<a href="javascript:;" class="dropdown-item">
										<div class="icon">
											<i data-feather="gift"></i>
										</div>
										<div class="content">
											<p>New Order Recieved</p>
											<p class="sub-text text-muted">30 min ago</p>
										</div>
									</a>
									<a href="javascript:;" class="dropdown-item">
										<div class="icon">
											<i data-feather="alert-circle"></i>
										</div>
										<div class="content">
											<p>Server Limit Reached!</p>
											<p class="sub-text text-muted">1 hrs ago</p>
										</div>
									</a>
									<a href="javascript:;" class="dropdown-item">
										<div class="icon">
											<i data-feather="layers"></i>
										</div>
										<div class="content">
											<p>Apps are ready for update</p>
											<p class="sub-text text-muted">5 hrs ago</p>
										</div>
									</a>
									<a href="javascript:;" class="dropdown-item">
										<div class="icon">
											<i data-feather="download"></i>
										</div>
										<div class="content">
											<p>Download completed</p>
											<p class="sub-text text-muted">6 hrs ago</p>
										</div>
									</a>
								</div>
								<div class="dropdown-footer d-flex align-items-center justify-content-center">
									<a href="javascript:;">View all</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown nav-profile">
							<a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<img src="https://via.placeholder.com/30x30" alt="profile">
							</a>
							<div class="dropdown-menu" aria-labelledby="profileDropdown">
								<div class="dropdown-header d-flex flex-column align-items-center">
									<div class="figure mb-3">
										<img src="https://via.placeholder.com/80x80" alt="">
									</div>
									<div class="info text-center">
										<p class="name font-weight-bold mb-0">Amiah Burton</p>
										<p class="email text-muted mb-3">amiahburton@gmail.com</p>
									</div>
								</div>
								<div class="dropdown-body">
									<ul class="profile-nav p-0 pt-3">
										<li class="nav-item">
											<a href="pages/general/profile.html" class="nav-link">
												<i data-feather="user"></i>
												<span>Profile</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="javascript:;" class="nav-link">
												<i data-feather="edit"></i>
												<span>Edit Profile</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="javascript:;" class="nav-link">
												<i data-feather="repeat"></i>
												<span>Switch User</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="javascript:;" class="nav-link">
												<i data-feather="log-out"></i>
												<span>Log Out</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</nav>
    
    <!-- Top Bar End -->
    <!-- Left Sidebar Start -->
    <!-- partial:partials/_sidebar.html -->
		<nav class="sidebar">
      <div class="sidebar-header">
        <a href="#" class="sidebar-brand mt-5 mb-5">
        Welcome <span><?php  $_SESSION['admin'];
                       $array = (explode("@",$_SESSION['admin'],(-1)));
                       foreach ($array as $ar)
                       {
                           echo $ar;
                       }
                            ?>
                        </span>
        </a>
        <div class="sidebar-toggler not-active">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="sidebar-body">
        <ul class="nav">
          <li class="nav-item nav-category">Main</li>
          <li class="nav-item">
            <a href="index.php" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="leads.php" class="nav-link">
              <i class="link-icon" data-feather="layout"></i>
              <span class="link-title">Leads</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="contacts.php" class="nav-link">
              <i class="link-icon" data-feather="calendar"></i>
              <span class="link-title">Contacts</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="link-icon" data-feather="anchor"></i>
              <span class="link-title">Referrer</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="new-application.php" class="nav-link">
              <i class="link-icon" data-feather="feather"></i>
              <span class="link-title">New Application</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="my-application.php" class="nav-link">
              <i class="link-icon" data-feather="pie-chart"></i>
              <span class="link-title">My Application</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="email_new.php" class="nav-link">
              <i class="link-icon" data-feather="book"></i>
              <span class="link-title">Email</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="new-message.php" class="nav-link">
              <i class="link-icon" data-feather="mail"></i>
              <span class="link-title">Send Message</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="link-icon" data-feather="inbox"></i>
              <span class="link-title">Reports</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <i class="link-icon" data-feather="anchor"></i>
              <span class="link-title">Logout</span>
            </a>
          </li>
        </ul>
      </div>
    </nav>
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
        </div>

    </div>