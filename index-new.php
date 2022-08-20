<?php
include 'header.php';
date_default_timezone_set("Australia/Sydney");
if(isset($_GET['lead_id']))
{
    $_SESSION['lead_id'] = $_GET['lead_id'];
    $leads = DB::queryFirstRow("select * from leads where id = '".$_GET['lead_id']."'");
    $email = DB::queryFirstRow("select email from leads where id = '".$_GET['lead_id']."'");
    $mail = $email['email'];

    $current_time = date("d-m-Y H:i:s");


    //$leads = DB::queryFirstRow("select * from leads where email = '".$_POST['lead_email']."'");
    $broker      =   DB::queryFirstRow("select * from User where id = '".$leads['broker_id']."'");
    $main_user   =   DB::queryFirstRow("select id from User where email = '".$mail."'");
}

//   follow_up
if(isset($_GET['follow_up']))
{
    $follow_up_id = $_GET['follow_up'];

    DB::update('follow_up_leads', [

        "follow_up"             =>  1,

    ], "id=%d", $follow_up_id);
}
?>

<div class="right side-menu">
    <ul class="nav nav-tabs nav-justified" id="right-tabs">
        <li class="active"><a href="#feed" data-toggle="tab" title="Live Feed"><i class="icon-rss-2"></i></a></li>
        <li><a href="#connect" data-toggle="tab" title="Chat"><i class="icon-chat"></i></a></li>
        <li><a href="#settings" data-toggle="tab" title="Preferences"><i class="icon-wrench"></i></a></li>
    </ul>
    <div class="clearfix"></div>
    <div class="tab-content">
        <div class="tab-pane active" id="feed">



            <div class="tab-inner slimscroller">
                <div class="search-right">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <div class="right-toolbar">
                    <a href="javascript:;" class="pull-right">Settings <i class="icon-cog"></i></a>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
                <div class="panel-group" id="collapse">
                    <div class="panel panel-default">
                        <div class="panel-heading bg-orange-1">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#rnotifications">
                                    <i class="icon-bell-2"></i> Notifications
                                    <span class="label bg-darkblue-1 pull-right">4</span>
                                </a>
                            </h4>
                        </div>
                        <div id="rnotifications" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <ul class="list-unstyled" id="notification-list">
                                    <li><a href="javascript:;"><span class="icon-wrapper"><i class="icon-video"></i></span> 1 Video Uploaded <span class="muted">12 minutes ago</span></a></li>
                                    <li><a href="javascript:;"><span class="icon-wrapper"><i class="icon-users-1"></i></span> 3 Users signed up <span class="muted">16 minutes ago</span></a></li>
                                    <li><a href="javascript:;"><span class="icon-wrapper"><i class="icon-picture-1"></i></span> 1 Video Uploaded <span class="muted">12 minutes ago</span></a></li>
                                    <li><a href="javascript:;"><span class="icon-wrapper"><i class="icon-hourglass-1"></i></span> Deadline for 1 project <span class="muted">12 minutes ago</span></a></li>
                                </ul>
                                <a class="btn btn-block btn-sm btn-warning">See all notifications</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading bg-green-3">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#remails">
                                    <i class="icon-mail"></i> E-mails
                                    <span class="label bg-darkblue-1 pull-right">3</span>
                                </a>
                            </h4>
                        </div>
                        <div id="remails" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <ul class="list-unstyled" id="inbox-list">
                                    <li><a href="javascript:;"><span class="sender"><i class="icon-star text-yellow-2"></i> Kim Wilde</span> <span class="datetime">6 mins ago</span>
                                            <span class="title">You keep me hangin on</span>
                                            <span class="content">Where are you? I am waiting for 3 hours in the restaurant. I ate 3 hamburgers.</span>
                                        </a></li>
                                    <li><a href="javascript:;"><span class="sender">Tyler Durden</span> <span class="datetime">13 hours ago</span>
                                            <span class="title">Buy some soap from market before</span>
                                            <span class="content">We are crowded here. We need some more soap at home. Buy some before you come home.</span>
                                        </a></li>
                                    <li><a href="javascript:;"><span class="sender">John Bonomo</span> <span class="datetime">Yesterday</span>
                                            <span class="title">Late delivery</span>
                                            <span class="content">Hello, I ordered 15 box of viagra for a friend of mine but he still hasn't receive them.</span>
                                        </a></li>
                                </ul>
                                <a class="btn btn-block btn-sm btn-primary">Go to inbox</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading bg-blue-1">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#rupdates">
                                    <i class="icon-signal-2"></i> Updates
                                    <span class="label bg-darkblue-1 pull-right">5</span>
                                </a>
                            </h4>
                        </div>
                        <div id="rupdates" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <ul class="list-unstyled" id="updates-list">
                                    <li><a href="javascript:;"><span class="icon-wrapper bg-green-1"><i class="icon-comment-1"></i></span> <b>David Guetta</b> came online <abbr title="15 seconds ago">just now</abbr>.</a></li>
                                    <li><a href="javascript:;"><span class="icon-wrapper bg-red-1"><i class="icon-user-3"></i></span> <b>Katy Perry</b> updated her profile <abbr title="4 mins ago">4 mins ago</abbr>.</a></li>
                                    <li><a href="javascript:;"><span class="icon-wrapper bg-blue-1"><i class="icon-twitter-2"></i></span> <b>4 tweets posted</b> with cronjob <abbr title="22 mins ago">22 mins ago</abbr>.</a></li>
                                    <li><a href="javascript:;"><span class="icon-wrapper bg-orange-3"><i class="icon-water"></i></span> <b>Adele</b> set fire to the rain <abbr title="43 mins ago">43 mins ago</abbr>.</a></li>
                                    <li><a href="javascript:;"><span class="icon-wrapper bg-pink-2"><i class="icon-heart-broken"></i></span> <b>Taylor Swift</b> learned that you are trouble <abbr title="3 hours ago">3 days ago</abbr>.</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane" id="connect">
            <div class="tab-inner">
                <div class="search-right">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <div class="panel-group" id="collapse">
                    <div class="panel panel-default" id="chat-panel">
                        <div class="panel-heading bg-darkblue-2">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#chat-coll">
                                    <i class="icon-briefcase-1"></i> Colleagues
                                    <span class="label bg-darkblue-1 pull-right">14</span>
                                </a>
                            </h4>
                        </div>
                        <div id="chat-coll" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <ul class="list-unstyled" id="chat-list">
                                    <li><a href="javascript:;" class="online"><span class="chat-user-avatar"><img src="images/users/chat/1.jpg"></span> <span class="chat-user-name">Dorothy Simons</span><span class="chat-user-msg">I wish I was a bird in the sky</span></a></li>
                                    <li><a href="javascript:;" class="online"><span class="chat-user-avatar"><img src="images/users/chat/2.jpg"></span> <span class="chat-user-name">John Malkovich</span><span class="chat-user-msg">You were the traitor</span></a></li>
                                    <li><a href="javascript:;" class="online"><span class="chat-user-avatar"><img src="images/users/chat/3.jpg"></span> <span class="chat-user-name">Jessica Simons</span><span class="chat-user-msg">Where is my mind</span></a></li>
                                    <li><a href="javascript:;" class="away"><span class="chat-user-avatar"><img src="images/users/chat/4.jpg"></span> <span class="chat-user-name">Jack Stallman</span><span class="chat-user-msg">Away since 13:32</span></a></li>
                                    <li><a href="javascript:;" class="offline"><span class="chat-user-avatar"><img src="images/users/chat/5.jpg"></span> <span class="chat-user-name">Neil Armstrong</span><span class="chat-user-msg" title="I am flying to the moon and back">I am flying to the moon and back</span></a></li>
                                    <li><a href="javascript:;" class="offline"><span class="chat-user-avatar"><img src="images/users/chat/6.jpg"></span> <span class="chat-user-name">Hollywood Studios</span><span class="chat-user-msg">Yes he definitely is!</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default" id="chat-panel">
                        <div class="panel-heading bg-darkblue-2">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                    <i class="icon-heart-3"></i> Friends
                                    <span class="label bg-darkblue-1 pull-right">3</span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <ul class="list-unstyled" id="chat-list">
                                    <li><a href="javascript:;" class="online"><span class="chat-user-avatar"><img src="images/users/chat/1.jpg"></span> <span class="chat-user-name">Dorothy Simons</span><span class="chat-user-msg">I wish I was a bird in the sky</span></a></li>
                                    <li><a href="javascript:;" class="online"><span class="chat-user-avatar"><img src="images/users/chat/2.jpg"></span> <span class="chat-user-name">John Malkovich</span><span class="chat-user-msg">You were the traitor</span></a></li>
                                    <li><a href="javascript:;" class="online"><span class="chat-user-avatar"><img src="images/users/chat/3.jpg"></span> <span class="chat-user-name">Jessica Simons</span><span class="chat-user-msg" title="Eminem - The Monster ft. Rihanna"><i class="icon-play"></i> Eminem - The Monster ft. Rihanna</span></a></li>
                                    <li><a href="javascript:;" class="away"><span class="chat-user-avatar"><img src="images/users/chat/4.jpg"></span> <span class="chat-user-name">Jack Stallman</span><span class="chat-user-msg">Away since 13:32</span></a></li>
                                    <li><a href="javascript:;" class="offline"><span class="chat-user-avatar"><img src="images/users/chat/5.jpg"></span> <span class="chat-user-name">Neil Armstrong</span><span class="chat-user-msg" title="I am flying to the moon and back">I am flying to the moon and back</span></a></li>
                                    <li><a href="javascript:;" class="offline"><span class="chat-user-avatar"><img src="images/users/chat/6.jpg"></span> <span class="chat-user-name">Hollywood Studios</span><span class="chat-user-msg">Yes he definitely is!</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane" id="settings">
            <div class="tab-inner slimscroller">
                <div class="col-sm-12">
                    <h3>Preferences</h3>
                    <div class="row">
                        <div class="col-xs-8">
                            Live data updates
                        </div>
                        <div class="col-xs-4">
                            <input type="checkbox" class="ios-switch ios-switch-success ios-switch-sm" checked />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8">
                            Live feeds
                        </div>
                        <div class="col-xs-4">
                            <input type="checkbox" class="ios-switch ios-switch-success ios-switch-sm" checked />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8">
                            Sync data to cloud
                        </div>
                        <div class="col-xs-4">
                            <input type="checkbox" class="ios-switch ios-switch-success ios-switch-sm" checked />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8">
                            Keep activity record
                        </div>
                        <div class="col-xs-4">
                            <input type="checkbox" class="ios-switch ios-switch-danger ios-switch-sm" checked />
                        </div>
                    </div>
                    <h4>Other Settings</h4>
                    <div class="row">
                        <div class="col-xs-12">
                            <label class="checkboxw"><input type="checkbox" checked> Autosave settings</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <label class="checkboxw"><input type="checkbox"> Always online</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Right Sidebar End -->
<!-- Start right content -->
<div class="content-page">
    <!-- ============================================================== -->
    <!-- Start Content here -->
    <!-- ============================================================== -->
    <div class="content">

    
        <div class="row no-gutters">
            <div class="col-sm-4">
            <div class="three-box">
                <div class="box-frame">
                    <div class="header-box">
                        <div class="img-box">
                            <i class="fa fa-usd" aria-hidden="true"></i>
                        </div>
                        <div class="txt">
                            <h3>Lead Page</h3>
<!--                            <p>Copper / $250,000.00</p>-->
                        </div>
                    </div>
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label>Full Name:</label>
                            <span class="field-txt"><?=$leads['client_name']?></span>
                        </div>
                        <div class="form-group">
                            <label>Contact:</label>
                            <span class="field-txt"><?=$leads['contact_no']?></span>
                        </div>

                        <div class="form-group">
                            <label>Email:</label>
                            <span class="field-txt"><?=$leads['email']?></span>
                        </div>
                        <div class="form-group">
                            <label><b>Lead Status (Pipeline)</b></label>
                            <select class="form-control" name="lead_status" id="lead_status">
                                <option value="99">Select Status</option>
                                <option value="5">New Lead</option>
                                <option value="2">Approved Lead</option>
                                <option value="4">Settlement</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label><b>Follow Up/Reminder</b></label>
                            <select name="reminder" class="form-control" id="reminder">
                                <option value="99">Select Minutes</option>
                                <option value="1">1 Min</option>
                                <option value="10">10 Min</option>
                                <option value="60">1 hour</option>
                                <option value="120">2 hours</option>
                                <option value="180">3 hours</option>
                            </select>
                        </div>
                    </form>
                </div>
            </div>
</div>
            <div class="col-sm-4">
            <div class="three-box">
                <div class="box-frame">
                    <b><h3>Consumer Applications</h3></b>
                    <button type="button" class="credit btn btn-outline-primary">NCCP</button>
                    <a  data-toggle="modal" data-target="#prelimModal"  class="prelim"><button type="button" class="btn btn-outline-danger">Prelim Assesment</button></a>
                    <a href="" data-toggle="modal" data-target="#nccpModal" class="credit"><button type="button" class="btn btn-outline-success">Credit guide</button></a>
                    <a href="" data-toggle="modal" data-target="#TaxInvoiceModal" class="Tax"><button type="button" class="btn btn-outline-primary">Tax Invoice Request</button></a>
                    <a href="" data-toggle="modal" data-target="#privateSaleInvoiceModal" class="Private"><button type="button" class="btn btn-outline-danger">Private Sale Invoice</button></a>
                    <a href="" data-toggle="modal" data-target="#lenderInvoiceModal" class="lender"><button type="button" class="btn btn-outline-success">Lender Invoice</button></a>
                    <b><h3>Commercial Applications</h3></b>
                    <a class="privacy"><button type="button" class="btn btn-outline-primary">Privacy</button></a>
<!--                    <button type="button" class="btn btn-outline-danger">Credit Guide</button>-->
                </div>
                <div class="box-frame">
                    <b><h3>Completed Applications</h3></b>
                    <?php
                    $email = DB::queryFirstRow("select email from leads where id = '".$_GET['lead_id']."'");

                    $id = DB::queryFirstRow("select id from User where email = '".$email['email']."'");

                    $applications = DB::query("select * from new_application where user_id = '".$id['id']."' and status = 'complete'");
                    //var_dump($email);

                    foreach($applications as $application)
                    {

                        $date = DB::queryFirstRow("select application_date,id,application_id from new_application_customer where application_id = '".$application['id']."'");
                        ?>
<!--                        <a href='generate_html_pdf.php?application_id=--><?//=$date['application_id']?><!--'><button class="btn btn-foursquare btn-lg btn-block" type="button">App Date: --><?//= $date['application_date'] ?><!--</button></a><br>-->
                        <a class="btn btn-outline-purple" href='generate_html_pdf.php?application_id=<?=$date['application_id']?>'>App Date: <?= $date['application_date'] ?></a>
                    <?php
                    }
                    ?>
                </div>
</div>
            </div>
            <div class="col-sm-4">
                <div class="three-box">
                <div class="tabbable-panel">
                    <div class="tabbable-line">
					<ul class="nav nav-tabs ">
						<li class="active">
							<a href="#tab_default_1" data-toggle="tab">Log Activity</a>
						</li>
						<li>
							<a href="#tab_default_2" data-toggle="tab">Create Note</a>
						</li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="tab_default_1">
                            
                            <!-- <form class="form-horizontal" action="" method="post">
                                <div class="form-group">
                                    <label>Full Name:</label>
                                    <input type="text" class="form-control" />
                                </div>
                            </form> -->
                            <div class="header-box">
                                <div class="img-box">
                                    <i class="fa fa-usd" aria-hidden="true"></i>
                                    <div class="fa-icon">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="txt">
                                    <h3>8 New Copy Machines (Sample - Try me!)</h3>
                                    <p>Copper / $250,000.00</p>
                                </div>
                            </div>
						</div>
						<div class="tab-pane" id="tab_default_2">
                            <div id="fancy-inputs">
                                    <label class="input">
                                        <input type="text">
                                        <span><span>Click here to add a note</span></span>
                                    </label>
                                </div>
                            </div>
					    </div>
				    </div>
            </div>
            <div class="box-frame">


                <?php
                $list = DB::query("select * from logs where lead_id = '".$_GET['lead_id']."' order by id DESC limit 8");
                foreach($list as $lists)
                {
                    if($lists['log_detail'] == 'Call To Client')
                    {
                        $class = "fa-phone";
                    }
                    else if($lists['log_detail'] == 'Email To Client')
                    {
                        $class = "fa-envelope";
                    }
                    else if($lists['log_detail'] == 'Change Lead Status')
                    {
                        $class = "fa-refresh";
                    }
                    else if($lists['log_detail'] == 'File uploaded')
                    {
                        $class = "fa-upload";
                    }
                    else{
                        $class = "fa-file";
                    }

                ?>
                    <div class="header-box">
                        <div class="img-box">
                            <i class="fa fa-usd" aria-hidden="true"></i>
                            <div class="fa-icon">
                                <i class="fa <?=$class?>" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="txt">
                            <h3><?=$lists['log_detail']?></h3>
                            <p><?=$lists['log_date']?></p>
                        </div>
                    </div>

                <?php
                }
                ?>
<!--                <div class="header-box">-->
<!--                    <div class="img-box">-->
<!--                        <i class="fa fa-usd" aria-hidden="true"></i>-->
<!--                        <div class="fa-icon">-->
<!--                            <i class="fa fa-comments" aria-hidden="true"></i>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="txt">-->
<!--                        <h3>8 New Copy Machines (Sample - Try me!)</h3>-->
<!--                        <p>Copper / $250,000.00</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="header-box">-->
<!--                    <div class="img-box">-->
<!--                        <i class="fa fa-commenting-o" aria-hidden="true"></i>-->
<!--                        <div class="fa-icon">-->
<!--                            <i class="fa fa-phone" aria-hidden="true"></i>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="txt">-->
<!--                        <h3>8 New Copy Machines (Sample - Try me!)</h3>-->
<!--                        <p>Copper / $250,000.00</p>-->
<!--                    </div>-->
<!--                </div>-->
            </div>
            </div>
        </div>
            
        </div>
        

    </div>
    <!-- End of info box -->

    

    

    <!-- Footer Start -->
    <footer>
        Element &copy; 2020
        <div class="footer-links pull-right">
            <a href="#">About</a><a href="#">Support</a><a href="#">Terms of Service</a><a href="#">Legal</a><a href="#">Help</a><a href="#">Contact Us</a>
        </div>
    </footer>
    <!-- Footer End -->
</div>
<div class="modal fade" id="TaxInvoiceModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <form id="tax-invoice-form" method="post" enctype="multipart/form-data">
            <div class="modal-content">
                <div style="display: block;" class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Tax Invoice Details</h4>
                </div>
                <div class="modal-body mx-3">

                    <!--                    <div class="md-form mb-5">-->
                    <!--                        <div class="form-group">-->
                    <!--                            <input type="text" class="form-control" placeholder="Client Name" id="lender_invoice_client_name">-->
                    <!--                        </div>-->
                    <!--                        <div class="form-group">-->
                    <!--                            <select name="application_id" class="form-control" id="application_id">-->
                    <!--                                <option value="" >Select Application</option>-->
                    <!--                                --><?php
                    //
                    //                                $company = DB::query("select * from company");
                    //                                foreach($company as $companies)
                    //                                {  ?>
                    <!--                                    <option value="--><?//=$companies['id']?><!--">--><?//=$companies['name']?><!--</option>-->
                    <!--                                    --><?php
                    //                                }
                    //                                ?>
                    <!--                            </select>-->
                    <!--                        </div>-->
                    <!--                        <div class="form-group">-->
                    <!--                            <input class="form-control" type="text" placeholder="Lender Application ID" id="lender_invoice_application_id">-->
                    <!--                        </div>-->
                    <!--                        <div class="form-group">-->
                    <!--                            <input class="form-control" type="text" placeholder="Broker Reference (Optional).." id="lender_invoice_broker_reference">-->
                    <!--                        </div>-->
                    <!--                    </div>-->


                    <table class="table table-bordered">

                        <tr>

                            <td>Invoice To:</td>
                            <td><input type="text" class="form-control" name="invoice_to" id="invoice_to"></td>
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="invoice_to_error"></span>
                        </tr>
                        <tr>

                            <td>Delivery To:</td>
                            <td><input type="text" class="form-control" name="delivery_to" id="delivery_to"></td>
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="delivery_to_error"></span>

                        </tr>
                        <tr>

                            <td>Asset Description:</td>
                            <td><input type="text" class="form-control" name="asset_description" id="asset_description"></td>
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="asset_description_error"></span>
                        </tr>
                        <tr>

                            <td>Gross Price:</td>
                            <td><input type="text" class="form-control" name="gross_price" id="gross_price"></td>
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="gross_price_error"></span>
                        </tr>
                        <tr>

                            <td>Less Trade-in:</td>
                            <td><input type="text" class="form-control" name="less_trade_in" id="less_trade_in" placeholder="$"></td>
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="less_trade_in_error"></span>
                        </tr>
                        <input type="hidden" name="lead_id" id="lead_id"  value="<?=$_GET['lead_id']?>">
                        <input type="hidden" name="broker_id" id="broker_id"  value="<?=$leads['broker_id']?>">
                        <tr>

                            <td>Less Deposit:</td>
                            <td><input type="text" class="form-control" name="less_deposit" id="less_deposit" placeholder="$"></td>
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="less_deposit_error"></span>
                        </tr>
                        <tr>

                            <td>Plus Finance Payout On Trade-in :</td>
                            <td><input type="text" class="form-control" name="plus_finance_payout_on_trade_in" id="plus_finance_payout_on_trade_in" placeholder="$"></td>
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="plus_finance_payout_on_trade_in_error"></span>
                        </tr>
                        <tr>

                            <td>Refund To Customer:</td>
                            <td><input type="text" class="form-control" name="refund_to_customer" id="refund_to_customer" placeholder="$"></td>
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="refund_to_customer_error"></span>
                        </tr>
                        <tr>

                            <td>Total Finance Amount:</td>
                            <td><input type="text" class="form-control" name="total_finance_amount" id="total_finance_amount" placeholder="$"></td>
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="total_finance_amount_error"></span>
                        </tr>
                        <input type="hidden" name="lead_id"  value="<?=$_GET['lead_id']?>">
                        <input type="hidden" name="broker_id"  value="<?=$leads['broker_id']?>">
                        <input type="hidden" id="url" name="url" value="<?=$_SERVER['REQUEST_URI']?>">


                    </table>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Send To Client</button>
                </div>
            </div>
        </form>

    </div>
</div>
<div class="modal fade" id="privateSaleInvoiceModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <form id="private-sale-invoice-form" method="post" enctype="multipart/form-data">
            <div class="modal-content">
                <div style="display: block;" class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Private Sale Tax Invoice Details</h4>
                </div>
                <div class="modal-body mx-3">


                    <table class="table table-bordered">

                        <tr>

                            <td>Invoice Type</td>
                            <td>
                                <select id="invoice_type" name="invoice_type" class="form-control">
                                    <option value="invoice">Invoice</option>
                                    <option value="tax_invoice">Tax invoice</option>
                                </select>


                                <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="invoice_type_error"></span>
                        </tr>
                        <tr>

                            <td>Invoice Date</td>
                            <td><input type="text" class="form-control" name="invoice_date" id="invoice_date"></td>
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="invoice_date_error"></span>

                        </tr>
                        <tr>

                            <td>Vendor Details</td>
                            <td><input type="text" class="form-control" name="vendor_detail" id="vendor_detail"></td>
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="vendor_detail_error"></span>
                        </tr>
                        <tr>

                            <td>Invoice To</td>
                            <td><input type="text" class="form-control" name="invoice_to" id="invoice_to"></td>
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="invoice_to_error"></span>
                        </tr>
                        <tr>

                            <td>Delivery To</td>
                            <td><input type="text" class="form-control" name="delivery_to" id="delivery_to"></td>
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="delivery_to_error"></span>
                        </tr>

                    </table>
                    <table class="table table-bordered">
                        <tr>

                            <td>One (1) Only</td>
                            <td><input type="text" class="form-control" name="one_only" id="one_only"></td>
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="one_only_error"></span>
                        </tr>
                        <tr>

                            <td>Year</td>
                            <td><input type="text" class="form-control" name="year" id="year"></td>
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="year_error"></span>
                        </tr>
                        <tr>

                            <td>Rego No</td>
                            <td><input type="text" class="form-control" name="rego_no" id="rego_no"></td>
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="rego_no_error"></span>
                        </tr>
                        <tr>

                            <td>Engine No</td>
                            <td><input type="text" class="form-control" name="engine_no" id="engine_no"></td>
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="engine_no_error"></span>
                        </tr>
                        <tr>

                            <td>Vin No</td>
                            <td><input type="text" class="form-control" name="vin_no" id="vin_no"></td>
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="vin_no_error"></span>
                        </tr>
                        <tr>

                            <td>Odometer</td>
                            <td><input type="text" class="form-control" name="odometer" id="odometer"></td>
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="odometer_error"></span>
                        </tr>
                    </table>
                    <table class="table table-bordered">
                        <tr>

                            <td>Invoice Amount</td>
                            <td><input type="text" class="form-control" name="invoice_amount" id="invoice_amount"></td>
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="invoice_amount_error"></span>
                        </tr>
                        <tr>

                            <td>Gst(If any)</td>
                            <td><input type="text" class="form-control" name="gst" id="gst"></td>
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="gst_error"></span>
                        </tr>
                        <tr>

                            <td>Deposit Inc Gst</td>
                            <td><input type="text" class="form-control" name="deposit_inc_gst" id="deposit_inc_gst"></td>
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="deposit_inc_gst_error"></span>
                        </tr>
                        <tr>

                            <td>Total Amount Due</td>
                            <td><input type="text" class="form-control" name="total_amount_due" id="total_amount_due"></td>
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="total_amount_due_error"></span>
                        </tr>
                    </table>
                    <table class="table table-bordered">
                        <tr>

                            <td>Bank</td>
                            <td><input type="text" class="form-control" name="bank" id="bank"></td>
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="bank_error"></span>
                        </tr>
                        <tr>

                            <td>AC Name</td>
                            <td><input type="text" class="form-control" name="ac_name" id="ac_name"></td>
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="ac_name_error"></span>
                        </tr>
                        <tr>

                            <td>BSB</td>
                            <td><input type="text" class="form-control" name="bsb" id="bsb"></td>
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="bsb_error"></span>
                        </tr>
                        <tr>

                            <td>AC No</td>
                            <td><input type="text" class="form-control" name="ac_no" id="ac_no"></td>
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="ac_no_error"></span>
                        </tr>
                        <tr>

                            <td>Amount</td>
                            <td><input type="text" class="form-control" name="amount" id="amount"></td>
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="amount_error"></span>
                        </tr>
                        <input type="hidden" name="lead_id"  value="<?=$_GET['lead_id']?>">
                        <input type="hidden" name="broker_id"  value="<?=$leads['broker_id']?>">
                        <input type="hidden" id="url" name="url" value="<?=$_SERVER['REQUEST_URI']?>">


                    </table>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Gernate Private Invoice</button>
                </div>
            </div>
        </form>

    </div>
</div>
<div class="modal fade" id="lenderInvoiceModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <form id="lender-invoice-form" method="post" enctype="multipart/form-data">
            <div class="modal-content">
                <div style="display: block;" class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Lender Invoice Details</h4>
                </div>
                <div class="modal-body mx-3">

                    <div class="form-group" class="md-form mb-5">
                        <select name="bank_name" class="form-control" id="bank_name">
                            <option value="" >Select Bank</option>
                            <?php

                            $bank = DB::query("select * from bank");
                            foreach($bank as $banks)
                            {  ?>
                                <option value="<?=$banks['name']?>"><?=$banks['name']?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Client Name" name="lender_invoice_client_name" id="lender_invoice_client_name">
                        <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="lender_invoice_client_name_error"></span>
                    </div>
                    <div class="form-group">
                        <select name="broker_id" class="form-control" id="broker_id">
                            <option value="" >Select</option>
                            <?php

                            $company = DB::query("select * from brokers where id = '".$leads['broker_id']."'");
                            foreach($company as $companies)
                            {  ?>
                                <option value="<?=$companies['id']?>"><?=$companies['name']?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Lender Application ID" name="lender_invoice_application_id" id="lender_invoice_application_id">
                        <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="lender_invoice_application_id_error"></span>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Broker Reference (Optional).." name="lender_invoice_broker_reference" id="lender_invoice_broker_reference">
                    </div>



                    <table class="table table-bordered">

                        <tr>

                            <td>Settlement Date</td>
                            <td><input type="text" class="form-control" name="settlement_date" id="settlement_date"></td>
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="settlement_date_error"></span>
                        </tr>
                        <tr>

                            <td>Amount Financed</td>
                            <td><input type="text" class="form-control" name="amount_financed" id="amount_financed"></td>
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="amount_financed_error"></span>

                        </tr>
                        <tr>

                            <td>Total Brokerage</td>
                            <td><input type="text" class="form-control" name="total_brokerage" id="total_brokerage"></td>
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="total_brokerage_error"></span>
                        </tr>
                        <tr>

                            <td>Total Doc Fee</td>
                            <td><input type="text" class="form-control" name="total_doc_fee" id="total_doc_fee"></td>
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="total_doc_fee_error"></span>
                        </tr>
                        <tr>

                            <td>Total Origination Fee</td>
                            <td><input type="text" class="form-control" name="total_origination_fee" id="total_origination_fee"></td>
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="total_origination_fee_error"></span>
                        </tr>
                        <input type="hidden" name="lead_id"  value="<?=$_GET['lead_id']?>">
                        <input type="hidden" name="broker_id"  value="<?=$leads['broker_id']?>">
                        <input type="hidden" id="url" name="url" value="<?=$_SERVER['REQUEST_URI']?>">


                    </table>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Gernate Lender Invoice</button>
                </div>
            </div>
        </form>

    </div>
</div>
<div class="modal fade" id="prelimModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <form id="prelim-form" method="post" enctype="multipart/form-data">
            <div class="modal-content">
                <div style="display: block;" class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Prelim Assesment Notes</h4>
                </div>
                <div class="modal-body mx-3">
                    <table class="table table-bordered">

                        <tr>

                            <td>Select Client Application</td>
                            <td>
                                <select name="application_id" class="form-control" id="application_id">
                                    <option value="" >Select Application</option>
                                    <?php

                                    $ref = DB::query("select * from new_application where broker_id = '".$leads['broker_id']."' and status = 'complete' and user_id = '".$main_user['id']."'");
                                    foreach($ref as $referrer)
                                    {  ?>
                                        <option value="<?=$referrer['id']?>"><?=$referrer['application_name']?></option>
                                        <?php
                                    }
                                    ?>
                                </select>

                            </td>
                        </tr>
                        <tr>

                            <td>Purchase Amount</td>
                            <td><input type="text" name="purchase_amount" id="purchase_amount"></td>
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="purchase_amount_error"></span>
                        </tr>
                        <tr>

                            <td>Establishment Fee</td>
                            <td><input type="text" name="establishment_fee" id="establishment_fee"></td>
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="establishment_fee_error"></span>

                        </tr>
                        <tr>

                            <td>Broker Origination Fee</td>
                            <td><input type="text" name="broker_origination_fee" id="broker_origination_fee"></td>
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="broker_origination_fee_error"></span>
                        </tr>
                        <input type="hidden" name="lead_id" id="lead_id"  value="<?=$_GET['lead_id']?>">
                        <input type="hidden" name="broker_id" id="broker_id"  value="<?=$leads['broker_id']?>">
                        <input type="hidden" id="url" name="url" value="<?=$_SERVER['REQUEST_URI']?>">
                        <tr>

                            <td>Less deposit already paid</td>
                            <td><input type="text" name="less_deposit_already_paid" id="less_deposit_already_paid"></td>
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="less_deposit_already_paid_error"></span>
                        </tr>
                        <tr>

                            <td>Loan Amount to be financed</td>
                            <td><input type="text" name="loan_amount_to_be_financed" id="loan_amount_to_be_financed"></td>
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="loan_amount_to_be_financed_error"></span>
                        </tr>
                        <tr>

                            <td>Credit Provider</td>
                            <td><input type="text" name="credit_provider" id="credit_provider"></td>
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="credit_provider_error"></span>
                        </tr>
                        <tr>
                            <td>Interest Rate</td>
                            <td><input type="text" name="interest_rate" id="interest_rate"></td>
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="interest_rate_error"></span>

                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Send To Client</button>
                </div>
            </div>
        </form>

    </div>
</div>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <form id="send-message" method="post" enctype="multipart/form-data">
            <div class="modal-content">
                <div style="display: block;" class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Send Email</h4>
                </div>
                <div class="modal-body mx-3">
                    <div class="md-form mb-5">
                        <i class="fas fa-envelope prefix grey-text"></i>   <label data-error="wrong" data-success="right" for="defaultForm-email">Email To</label>
                        <input type="email" name="email" value="<?=$email['email']?>" id="email" class="form-control validate">
                        <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="email_error"></span>

                    </div>

                    <input type="hidden" name="lead_id" value="<?=$_GET['lead_id']?>">
                    <input type="hidden" id="url" name="url" value="<?=$_SERVER['REQUEST_URI']?>">

                    <div class="md-form mb-4">
                        <i class="fas fa-envelope prefix grey-text"></i> <label data-error="wrong" data-success="right" for="defaultForm-pass">Subject</label>
                        <input type="text"  name="subject" id="subject" class="form-control validate">


                        <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="subject_error"></span>
                    </div>

                    <div class="md-form mb-4">
                        <i class="fas fa-envelope prefix grey-text"></i> <label data-error="wrong" data-success="right" for="defaultForm-pass">Message</label>
                        <textarea type="text" name="message" id="message" class="form-control validate"></textarea>


                        <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="message_error"></span>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-default">Send Email</button>
                </div>
            </div>
        </form>
    </div>
</div>




<script>
    $('#fancy-inputs input[type="text"]').blur(function(){
  if($(this).val().length > 0){
    $(this).addClass('white');
  } else {
    $(this).removeClass('white');
  }
});
</script>
<script>
    (function(){
        let isChrome = /Chrome/.test(navigator.userAgent) && /Google Inc/.test(navigator.vendor);
        let isSafari = /Safari/.test(navigator.userAgent) && /Apple Computer/.test(navigator.vendor);
        let scrollbarDiv = document.querySelector('.scrollbar');
        if (!isChrome && !isSafari) {
            scrollbarDiv.innerHTML = 'You need Webkit browser to run this code';
        }
    })();

    // $('.prelim').click(function (event) {
    //     //$("#prelimModal").modal('show');
    //     event.preventDefault();
    //   //  window.open($(this).attr("href"), "popupWindow", "width=650,height=200,scrollbars=yes");
    // });


    $('.credit').click(function (event) {
        event.preventDefault();

        $.ajax({

            url: "qs-php-master/pdf_design_ahmad/pdf_design/credit_guide_pdf.php",
            type: 'POST',
            data: {lead_email:'<?=$leads['email']?>',current_time:'<?=$current_time?>',lead_name:'<?=$leads['client_name']?>',lead_contact:'<?=$leads['contact_no']?>',broker_email:'<?=$broker['email']?>'},
            dataType:"text",
            success: function (data) {

                //hideLoading();
                var newUrl = 'qs-php-master/qs-credit_guide.php?email=<?=$mail?>&name=<?=$leads['client_name']?>';
                $(this).attr("href", newUrl);
                window.open($(this).attr("href"), "popupWindow", "width=650,height=200,scrollbars=yes");

            }
        });
    });



    $('.privacy').click(function (event) {
        event.preventDefault();

        $.ajax({

            url: "qs-php-master/pdf_design_ahmad/pdf_design/privacy_pdf.php",
            type: 'POST',
            data: {lead_email:'<?=$leads['email']?>',current_time:'<?=$current_time?>',lead_name:'<?=$leads['client_name']?>',lead_contact:'<?=$leads['contact_no']?>',broker_email:'<?=$broker['email']?>'},
            dataType:"text",
            success: function (data) {

                //hideLoading();
                var newUrl = 'qs-php-master/qs-privacy-document.php?email=<?=$mail?>&name=<?=$leads['client_name']?>';
                $(this).attr("href", newUrl);
                window.open($(this).attr("href"), "popupWindow", "width=650,height=200,scrollbars=yes");

            }
        });
    });

    $(function () {


        //$('#first_name').bind('input', function()  { document.getElementById('#first_name_error').innerHTML = ""; });


        $('#purchase_amount').bind('input', function () {
            document.getElementById('purchase_amount_error').innerHTML = "";
        });

        $('#establishment_fee').bind('input', function () {
            document.getElementById('password_error_error').innerHTML = "";
        });

        $('#broker_origination_fee').bind('input', function () {
            document.getElementById('#broker_origination_fee_error').innerHTML = "";
        });

        $('#less_deposit_already_paid').bind('input', function () {
            document.getElementById('#less_deposit_already_paid_error').innerHTML = "";
        });

        $('#loan_amount_to_be_financed').bind('input', function () {
            document.getElementById('#loan_amount_to_be_financed_error').innerHTML = "";
        });

        $('#credit_provider').bind('input', function () {
            document.getElementById('#credit_provider_error').innerHTML = "";
        });

        $('#interest_rate').bind('input', function () {
            document.getElementById('#interest_rate_error').innerHTML = "";
        });


        $('#prelim-form').on('submit', function (e) {
            e.preventDefault();

            if ($("#purchase_amount").val() == "") {
                $('#purchase_amount_error').html('Required*');
                return;
            }
            if ($("#establishment_fee").val() == "") {
                $('#establishment_fee_error').html('Required*');
                return;
            }
            if ($("#broker_origination_fee").val() == "") {
                $('#broker_origination_fee_error').html('Required*');
                return;
            }
            if ($("#less_deposit_already_paid").val() == "") {
                $('#less_deposit_already_paid_error').html('Required*');
                return;
            }
            if ($("#loan_amount_to_be_financed").val() == "") {
                $('#loan_amount_to_be_financed_error').html('Required*');
                return;
            }
            if ($("#credit_provider").val() == "") {
                $('#credit_provider_error').html('Required*');
                return;
            }
            if ($("#interest_rate").val() == "") {
                $('#interest_rate_error').html('Required*');
                return;
            }

            //addLoading();

            $.ajax({
                url: "assets/ajax/prelim_form.php",
                type: 'POST',
                data: new FormData(this),
                contentType: false,       // The content type used when sending data to the server.
                cache: false,             // To unable request pages to be cached
                processData: false,
                success: function (data) {

                    //hideLoading();
                    //alert('Lead Has Been Added Successfully');
                    //window.location.href = 'application-step3.php';
                    // $("")

                    $("#prelimModal").modal('hide');
                    $.ajax({

                        url: "qs-php-master/pdf_design_ahmad/pdf_design/prelim_pdf.php",
                        type: 'POST',
                        data: {
                            application_id: $("#application_id").val(),
                            name: "<?=$leads['client_name']?>",
                            purchase_amount: $("#purchase_amount").val(),
                            establishment_fee: $("#establishment_fee").val(),
                            broker_origination_fee: $("#broker_origination_fee").val(),
                            less_deposit_already_paid: $("#less_deposit_already_paid").val(),
                            loan_amount_to_be_financed: $("#loan_amount_to_be_financed").val(),
                            credit_provider: $("#credit_provider").val(),
                            interest_rate: $("#interest_rate").val()
                        },
                        dataType: "text",
                        success: function (data) {

                            //hideLoading();
                            var newUrl = 'qs-php-master/qs-prelim-document.php?email=<?=$mail?>&name=<?=$leads['client_name']?>';
                            $(this).attr("href", newUrl);
                            window.open($(this).attr("href"), "popupWindow", "width=650,height=200,scrollbars=yes");

                        }
                    });


                }
            });

        });



        $('#establishment_application_fee').bind('input', function()  { document.getElementById('#establishment_application_fee_error').innerHTML = ""; })

        $('#registration_fee').bind('input', function()  { document.getElementById('#registration_fee_error').innerHTML = ""; });

        $('#proposed_financer').bind('input', function()  { document.getElementById('#proposed_financer_error').innerHTML = ""; });

        $('#service_fee').bind('input', function()  { document.getElementById('#service_fee_error').innerHTML = ""; });

        $('#stamp_mortgage_duty').bind('input', function()  { document.getElementById('#stamp_mortgage_duty_error').innerHTML = ""; });

        $('#credit_search_fees').bind('input', function()  { document.getElementById('#credit_search_fees_error').innerHTML = ""; });

        $('#other_fees').bind('input', function()  { document.getElementById('#other_fees_error').innerHTML = ""; });

        $('#total').bind('input', function()  { document.getElementById('total_error').innerHTML = ""; });

        $('#amount_financed').bind('input', function()  { document.getElementById('#amount_financed_error').innerHTML = ""; });



        $('#nccp-form').on('submit', function (e) {
            e.preventDefault();


            if ($("#establishment_application_fee").val() == "")
            {
                $('#establishment_application-fee_error').html('Required*');
                return;
            }
            if ($("#registration_fee").val() == "")
            {
                $('#registration_fee_error').html('Required*');
                return;
            }
            if ($("#proposed_financer").val() == "")
            {
                $('#proposed_financer_error').html('Required*');
                return;
            }
            if ($("#service_fee").val() == "")
            {
                $('#service_fee_error').html('Required*');
                return;
            }
            if ($("#stamp_mortgage_duty").val() == "")
            {
                $('#stamp_mortgage_duty_error').html('Required*');
                return;
            }
            if ($("#credit_search_fees").val() == "")
            {
                $('#credit_search_fees_error').html('Required*');
                return;
            }
            if ($("#other_fees").val() == "")
            {
                $('#other_fees_error').html('Required*');
                return;
            }
            if ($("#total").val() == "")
            {
                $('#total_error').html('Required*');
                return;
            }
            if ($("#amount_financed").val() == "")
            {
                $('#amount_financed_error').html('Required*');
                return;
            }

            //addLoading();

            $.ajax({
                url: "assets/ajax/nccp_form.php",
                type: 'POST',
                data: new FormData(this),
                contentType: false,       // The content type used when sending data to the server.
                cache: false,             // To unable request pages to be cached
                processData:false,
                success: function (data) {

                    //hideLoading();
                    //alert('Lead Has Been Added Successfully');
                    //window.location.href = 'application-step3.php';
                    // $("")

                    $("#nccpModal").modal('hide');
                    $.ajax({

                        url: "qs-php-master/pdf_design_ahmad/pdf_design/nccp_pdf.php",
                        type: 'POST',
                        data: {email:"<?=$mail?>",name:"<?=$leads['client_name']?>",contact_no:"<?=$leads['contact_no']?>",proposed_financer:$("#proposed_financer").val(),service_fee:$("#service_fee").val(),establishment_application_fee:$("#establishment_application_fee").val(),registration_fee:$("#registration_fee").val(),stamp_mortgage_duty:$("#stamp_mortgage_duty").val(),credit_search_fee:$("#credit_search_fee").val(),other_fees:$("#other_fees").val(),total:$("#total").val(),amount_financed:$("#amount_financed").val()},
                        dataType:"text",
                        success: function (data) {

                            //hideLoading();
                            var newUrl = 'qs-php-master/qs-nccp-document.php?email=<?=$mail?>&name=<?=$leads['client_name']?>';
                            $(this).attr("href", newUrl);
                            window.open($(this).attr("href"), "popupWindow", "width=650,height=200,scrollbars=yes");

                        }
                    });
                }
            });

        });
        // document.getElementById("pdfFile").onchange = function() {
        //     document.getElementById("docs").submit();
        // };



    });

    $("#reminder").on('change',function()
    {


        var minutes = $(this).val();
        if(minutes == '99')
        {
            return;
        }
        var lead_id = '<?=$_GET['lead_id']?>';
        $.ajax({
            url: "assets/ajax/reminder_status.php",
            type: 'POST',
            data: {minutes:minutes,lead_id:lead_id},
            dataType:'text',
            success: function (data) {

                swal({
                    title: "Reminder Successfully Added",

                });
                //hideLoading();
                //alert('Status Has been changed');
                // window.location.href = 'rabbi-pending-request.php';

            }
        });

    });

    $("#lead_status").on('change',function()
    {


        var status = $(this).val();
        if(status == '99')
        {
            return;
        }
        var lead_id = '<?=$_GET['lead_id']?>';
        $.ajax({
            url: "assets/ajax/lead_status.php",
            type: 'POST',
            data: {status:status,lead_id:lead_id},
            dataType:'text',
            success: function (data) {

                swal({
                    title: "Status Successfully Added",

                });
                //hideLoading();
                //alert('Status Has been changed');
                // window.location.href = 'rabbi-pending-request.php';

            }
        });

    });
</script>

<script type="text/javascript">
    $(".form_datetime").datetimepicker({
        format: "dd MM yyyy - hh:ii",
        autoclose: true,
        todayBtn: true,
        startDate: "2020-07-12 10:00",
        minuteStep: 10
    });
</script>
<?php
include 'footer.php';
?>
