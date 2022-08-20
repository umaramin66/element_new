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
<style>
    .log_activity .call_sec {
        padding: 35px 18px 10px;
        width: 100%;
    }
    .btn-tumblr{
        width: 240px;
    }
    .btn-vimeo{
        width: 240px;
    }
    .btn-facebook{
        width: 240px;
    }
</style>
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
        <!-- Start info box -->
        <div class="row">
            <div class="col-lg-7" style="box-shadow: 0 0 10px 0 #ccc;background:white;">
                <div class="col-lg-6">
                    <div class="people_t3 tab-pane fade in active">
                        <h2><b>Name</b></h2>
                        <h2><b>Contact</b></h2>
                        <h2><b>Email</b></h2>

                        <h2><b>Lead Owner</b></h2>
                        <h2><b>REFERRER</b></h2>
                        <h2><b>EMAIL TEMPLATE</b></h2>
                        <br>
                        <div><a href="tel:<?=$leads['contact_no']?>" id="<?=$_GET['lead_id']?>" class="call_client"><button class="btn btn-primary btn-lg btn-block" type="button">Call</button></a></div><br>
                        <div><a href="#" class="" data-toggle="modal" data-target="#myModal"><button class="btn btn-dropbox btn-lg btn-block" type="button">Sms</button></a></div><br>
                        <div><button class="btn btn-youtube btn-lg btn-block" type="button">Email</button></div><br>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="people_t3 tab-pane fade in active">
                        <h2><?=$leads['client_name']?></h2>
                        <h2><?=$leads['contact_no']?></h2>
                        <h2><?=$leads['email']?></h2>

                        <h2><select class="form-control">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </h2>


                        <h2><select class="form-control">
                            <?php
                            $ref = DB::query("select * from referrer");
                            foreach($ref as $referrer)
                            {  ?>
                                <option value="<?=$referrer['id']?>"><?=$referrer['name']?></option>
                                <?php
                            }
                            ?>
                        </select></h2>

                            <h2><select class="form-control">
                            <option>Template 1</option>
                            <option>Template 2</option>
                            <option>Template 3</option>
                        </select></h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-4" style="box-shadow: 0 0 10px 0 #ccc; margin-left:20px;background:white;">
                <!-- Modal -->
                <div class="modal-head">
                    <div class="bahadur">
                        <span class="login100-form-title p-b-32">
                             <ul id="#tabs" class="nav nav-tabs auth-toggle m-b-0">
                                  <a class=" sso btn active " href="#tabs-1" data-toggle="tab" aria-expanded="true" >
                                                    Application
                                  </a>
                                  <a class=" login btn  " href="#tabs-2" data-toggle="tab"aria-expanded="true">History Notes
                                  </a>

                                  <a class=" sso btn " href="#tabs-3" data-toggle="tab" aria-expanded="true" >
                                                    Documents
                                  </a>
                             </ul>
                        </span>
                    </div>
                </div>

                <div class="modal-body" style="padding:0px;">
                    <div id="tabs-1" class="active_model tab-pane fade in active">
                            <div class="log_activity">
                                <div class="login100-form-title p-b-32">
                                    <ul id="myDIV" class="nav nav-tabs auth-toggle m-b-0">
                                        <a class=" login btn active " href="#consumer_application" data-toggle="tab"aria-expanded="true">Consumer Application
                                        </a>

                                        <a class=" sso btn " href="#commercial_application" data-toggle="tab" aria-expanded="true" >
                                            Commercial Application
                                        </a>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="call_sec tab-pane fade in active" id="consumer_application">


                                            <h2><div><button class="credit btn btn-tumblr btn-lg btn-block" type="button">NCCP</button></div></h2>

                                            <h2><div><a  data-toggle="modal" data-target="#prelimModal"  class="prelim"><button class="btn btn-tumblr btn-lg btn-block" type="button">Prelim Assesment</button></a></div></h2>

                                            <h2><div> <a href="" data-toggle="modal" data-target="#nccpModal" class="credit"><button class="btn btn-tumblr btn-lg btn-block" type="button">Credit guide</button></a></div></h2><br>

                                            <h2><div><button class="btn btn-facebook btn-lg btn-block" type="button">Tax Invoice Request</button></div></h2>

                                            <h2><div><button class="btn btn-facebook btn-lg btn-block" type="button">Private Sale Invoice</button></div></h2>

                                            <h2><div><button class="btn btn-facebook btn-lg btn-block" type="button">Lender Invoice</button></div></h2>

                                        </div>

                                        <div class="call_sec tab-pane fade in active" id="commercial_application">
                                            <!--                                            <h2>Business</h2>-->
                                            <!--                                            <select id="cars" name="carlist" form="carform">-->
                                            <!--                                                <option class="option_sizing" value="volvo">Call</option>-->
                                            <!--                                                <option class="option_sizing" value="volvo">Meeting</option>-->
                                            <!--                                                <option class="option_sizing" value="volvo">Won</option>-->
                                            <!--                                            </select>-->
                                            <!--                                            <input class="pipelines_value" type="text" name="field1" place-holder="Click here to add a note"/>-->
                                            <div> <a class="privacy"><button class="btn btn-vimeo btn-lg btn-block" type="button">Privacy</button></a></div></h2><br>
                                            <h2><div><button class="btn btn-vimeo btn-lg btn-block" type="button">Credit guide</button></div></h2><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div id="tabs-2" class="people_t3 tab-pane fade">
                        <!-- info-box-menu -->
                        <div class="info-box-menu2">
                            <div class="scrollbar" style="background:#fff" id="style-2">
                                <div style="border: 1px solid rgb(235, 235, 235);" class="widget green-1 animated fadeInDown" type="button" class="btn btn-demo">
                                    <div class="row">
                                        <div class="col-lg-12" style="padding-left:0px;">
                                            <form role="search">
                                                <div class="form-group">
                                                    <input type="text" placeholder="Add Notes" class="form-control">
                                                    <button type="submit" class="btn search-button"><i class="fa fa-copy"></i></button>
                                                </div>
                                            </form>


                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div id="tabs-3" class="related tab-pane fade">
                        <div class="two">
                            <button type="button" class="btn" data-toggle="collapse" data-target="#demo">Simple collapsible</button>
                            <div id="demo" class="collapse">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div class="row">
            <div class="col-lg-7" style="box-shadow: 0 0 10px 0 #ccc;background:white;">
                <div class="col-lg-6">
                    <h3><b>Completed Applications</b></h3>
                    <div class="scrollbar">
                        <div class="d-flex flex-wrap overflow">
                            <?php
                            $email = DB::queryFirstRow("select email from leads where id = '".$_GET['lead_id']."'");

                            $id = DB::queryFirstRow("select id from User where email = '".$email['email']."'");

                            $applications = DB::query("select * from new_application where user_id = '".$id['id']."' and status = 'complete'");
                            //var_dump($email);

                            foreach($applications as $application)
                            {

                                $date = DB::queryFirstRow("select application_date,id,application_id from new_application_customer where application_id = '".$application['id']."'");
                                ?>
                                <a href='generate_html_pdf.php?application_id=<?=$date['application_id']?>'><button class="btn btn-foursquare btn-lg btn-block" type="button">App Date: <?= $date['application_date'] ?></button></a><br>
                            <?php }

                            ?>



                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h3><b>STATUS</b></h3><br><br>
                    <h4>Lead Status (Pipeline)</h4>
                    <h2>  <select class="form-control" name="lead_status" id="lead_status">
                            <option value="99">Select Status</option>
                            <option value="5">New Lead</option>
                            <option value="2">Approved Lead</option>
                            <option value="4">Settlement</option>
                        </select>

                    </h2>
                    <br>

                    <h4>Follow Up/Reminder</h4>
                    <h2>  <select name="reminder" class="form-control" id="reminder">
                            <option value="99">Select Minutes</option>
                            <option value="1">1 Min</option>
                            <option value="10">10 Min</option>
                            <option value="60">1 hour</option>
                            <option value="120">2 hours</option>
                            <option value="180">3 hours</option>
                        </select>

                    </h2>
                    <br>

<!--                    <h4>Custom Reminder</h4>-->
<!--                    <h2>  <select class="form-control" name="lead_status" id="lead_status">-->
<!--                            <option value="99">Select Status</option>-->
<!--                            <option value="5">New Lead</option>-->
<!--                            <option value="2">Approved Lead</option>-->
<!--                            <option value="4">Settlement</option>-->
<!--                        </select>-->
<!---->
<!--                    </h2>-->

                </div>
            </div>

        </div>

        <!-- info-box-menu-end

    </div> -->
        <!-- End of info box -->


        <!-- Footer Start -->
        <footer>
            Huban Creative &copy; 2014
            <div class="footer-links pull-right">
                <a href="#">About</a><a href="#">Support</a><a href="#">Terms of Service</a><a href="#">Legal</a><a href="#">Help</a><a href="#">Contact Us</a>
            </div>
        </footer>
        <!-- Footer End -->
    </div>
    <!-- ============================================================== -->
    <!-- End content here -->
    <!-- ============================================================== -->

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
                        <input type="hidden" name="lead_id"  value="<?=$_GET['lead_id']?>">
                        <input type="hidden" name="broker_id"  value="<?=$leads['broker_id']?>">
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

    $(function ()
    {


        //$('#first_name').bind('input', function()  { document.getElementById('#first_name_error').innerHTML = ""; });


        $('#purchase_amount').bind('input', function()  { document.getElementById('purchase_amount_error').innerHTML = ""; });

        $('#establishment_fee').bind('input', function()  { document.getElementById('password_error_error').innerHTML = ""; });

        $('#broker_origination_fee').bind('input', function()  { document.getElementById('#broker_origination_fee_error').innerHTML = ""; });

        $('#less_deposit_already_paid').bind('input', function()  { document.getElementById('#less_deposit_already_paid_error').innerHTML = ""; });

        $('#loan_amount_to_be_financed').bind('input', function()  { document.getElementById('#loan_amount_to_be_financed_error').innerHTML = ""; });

        $('#credit_provider').bind('input', function()  { document.getElementById('#credit_provider_error').innerHTML = ""; });

        $('#interest_rate').bind('input', function()  { document.getElementById('#interest_rate_error').innerHTML = ""; });


        $('#prelim-form').on('submit', function (e) {
            e.preventDefault();

            if ($("#purchase_amount").val() == "")
            {
                $('#purchase_amount_error').html('Required*');
                return;
            }
            if ($("#establishment_fee").val() == "")
            {
                $('#establishment_fee_error').html('Required*');
                return;
            }
            if ($("#broker_origination_fee").val() == "")
            {
                $('#broker_origination_fee_error').html('Required*');
                return;
            }
            if ($("#less_deposit_already_paid").val() == "")
            {
                $('#less_deposit_already_paid_error').html('Required*');
                return;
            }
            if ($("#loan_amount_to_be_financed").val() == "")
            {
                $('#loan_amount_to_be_financed_error').html('Required*');
                return;
            }
            if ($("#credit_provider").val() == "")
            {
                $('#credit_provider_error').html('Required*');
                return;
            }
            if ($("#interest_rate").val() == "")
            {
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
                processData:false,
                success: function (data) {

                    //hideLoading();
                    //alert('Lead Has Been Added Successfully');
                    //window.location.href = 'application-step3.php';
                    // $("")

                    $("#prelimModal").modal('hide');
                    $.ajax({

                        url: "qs-php-master/pdf_design_ahmad/pdf_design/prelim_pdf.php",
                        type: 'POST',
                        data: {application_id:$("#application_id").val(),name:"<?=$leads['client_name']?>",purchase_amount:$("#purchase_amount").val(),establishment_fee:$("#establishment_fee").val(),broker_origination_fee:$("#broker_origination_fee").val(),less_deposit_already_paid:$("#less_deposit_already_paid").val(),loan_amount_to_be_financed:$("#loan_amount_to_be_financed").val(),credit_provider:$("#credit_provider").val(),interest_rate:$("#interest_rate").val()},
                        dataType:"text",
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

        $('#docs').on('submit', function (e) {
            e.preventDefault();



            //addLoading();

            $.ajax({
                url: "assets/ajax/docs.php",
                type: 'POST',
                data: new FormData(this),
                contentType: false,       // The content type used when sending data to the server.
                cache: false,             // To unable request pages to be cached
                processData:false,
                success: function (data) {

                    swal({
                        title: "Documet Successfully Added",

                    });
                    console.log("ahmad");
                    console.log("ahmad"); console.log("ahmad"); console.log("ahmad"); console.log("ahmad"); console.log("ahmad"); console.log("ahmad");
                    console.log("ahmad"); console.log("ahmad"); console.log("ahmad"); console.log("ahmad"); console.log("ahmad"); console.log("ahmad");
                    console.log("ahmad"); console.log("ahmad"); console.log("ahmad"); console.log("ahmad"); console.log("ahmad"); console.log("ahmad");
                    window.location.reload();

                }
            });

        });
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
