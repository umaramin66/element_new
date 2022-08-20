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
    .phone-b{
        background: #178afd;
    }
    .doc-b{
        background: #6462d4;
    }
    .doc-upload{
        background: #a7cf38;
    }
    .doc-refresh{
        background: #CF7712;
    }
    .doc-u{
        background: #cf0957;
    }
    .three-box .form-horizontal label {
        font-size:16px;
    }
    .three-box .form-horizontal .field-txt {
        font-size:15px;
    }
    #drop_file_zone {
        background-color: #EEE;
        border: #999 5px dashed;

        height: 200px;
        padding: 8px;
        font-size: 18px;
    }
    #drag_upload_file {
        width:100%;
        margin:0 auto;
    }
    #drag_upload_file p {
        text-align: center;
    }
    #drag_upload_file #selectfile {
        display: none;
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

    
        <div class="row no-gutters">
            <div class="col-sm-4">
            <div class="three-box">
                <div class="box-frame">
                    <div class="header-box">
                        <div class="img-box">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </div>
                        <div class="txt">
                            <h3><?=$leads['client_name']?></h3>
<!--                            <p>Copper / $250,000.00</p>-->
                            <div style="float:right; margin:-30px 3px 0px -4px;">
                                <a href='new-message.php?id=<?=$leads['id']?>'> <button class='btn btn-primary' type='button'>Email</button></a>
                            </div>
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
                        <button type="button" class="btn btn-outline-success"><a href="new-application.php" class="Private">New Application</a></button><br>
                    <button type="button" class="btn btn-outline-success"><a href="new-application.php" class="lender">Send App Link</a></button>


                    </form>
                </div>
            </div>
</div>
            <div class="col-sm-4">
            <div class="three-box">
                <div class="box-frame">
                    <b><h3>Consumer Applications</h3></b>
                    <button type="button" class="credit btn btn-outline-primary"><a>NCCP</a></button>
                    <button type="button" class="btn btn-outline-danger"> <a  data-toggle="modal" data-target="#prelimModal"  class="prelim">Prelim Assesment</a></button>
                    <button type="button" class="btn btn-outline-success"><a href="" data-toggle="modal" data-target="#nccpModal" class="credit">Credit guide</a></button><br>
                    <b><h3>Commercial Applications</h3></b>
                    <button type="button" class="btn btn-outline-primary"><a class="privacy">Privacy</a></button><br>
                    <b><h3>Invoice Detailes</h3></b>
                    <button type="button" class="btn btn-outline-primary"><a href="" data-toggle="modal" data-target="#TaxInvoiceModal" class="Tax">Tax Invoice </a></button>
                    <button type="button" class="btn btn-outline-danger"><a href="" data-toggle="modal" data-target="#privateSaleInvoiceModal" class="Private">Private Sale Invoice</a></button>
                    <button type="button" class="btn btn-outline-success"><a href="" data-toggle="modal" data-target="#lenderInvoiceModal" class="lender">Lender Invoice</a></button>
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
                        if(!empty($date['application_date']))
                        { ?>
                                 <a  href="" data-toggle="modal" data-target="#applicationModal" data-id="<?=$date['application_id']?>"  class="application"><button type="button" class="btn btn-outline-purple">App Date: <?= $date['application_date'] ?></button></a>

                   <?php  }
                        ?>
<!--                        <a href='generate_html_pdf.php?application_id=--><?//=$date['application_id']?><!--'><button class="btn btn-foursquare btn-lg btn-block" type="button">App Date: --><?//= $date['application_date'] ?><!--</button></a><br>-->
<!--                        <a href='generate_html_pdf.php?application_id=--><?//=$date['application_id']?><!--'><button type="button" class="btn btn-outline-purple">App Date: --><?//= $date['application_date'] ?><!--</button></a>-->
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
<!--						<li class="active">-->
<!--							<a href="#tab_default_1" data-toggle="tab">Log Activity</a>-->
<!--						</li>-->
						<li class="active">
							<a href="#tab_default_2" data-toggle="tab">Create Note</a>
						</li>
					</ul>
					<div class="tab-content">
<!--						<div class="tab-pane" id="tab_default_1">-->
<!--                            -->
<!--                           <form class="form-horizontal" action="" method="post">-->
<!--                                <div class="form-group">-->
<!--                                    <label>Full Name:</label>-->
<!--                                    <input type="text" class="form-control" />-->
<!--                                </div>-->
<!--                            </form> -->
<!--                            <div class="header-box">-->
<!--                                <div class="img-box">-->
<!--                                    <i class="fa fa-user" aria-hidden="true"></i>-->
<!--                                    <div class="fa-icon">-->
<!--                                        <i class="fa fa-phone" aria-hidden="true"></i>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="txt">-->
<!--                                    <h3>8 New Copy Machines (Sample - Try me!)</h3>-->
<!--                                    <p>Copper / $250,000.00</p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--						</div>-->
						<div class="tab-pane active" id="tab_default_2">
                            <div id="fancy-inputs">
                                <form id="broker-notes" method="post" enctype="multipart/form-data">
<!--                                    <label class="input">-->
<!--                                      <input name="broker_notes" id="broker_notes"  type="text">-->
<!--                                       <span><span>Click here to add a note</span></span>-->
<!--                                       <textarea rows="4" cols="30" name="broker_notes" id="broker_notes" form="broker_notes">-->
<!--                                       </textarea><br>-->
<!--                                    </label>-->
                                    <textarea class="form-control" rows="5" cols="65" name="broker_notes" id="broker_notes" >

                                        </textarea>
                                    <input type="hidden" name="lead_id" value="<?=$_GET['lead_id']?>">
                                    <input type="hidden" id="url" name="url" value="<?=$_SERVER['REQUEST_URI']?>">
                                    <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="notes_error"></span>
                                <div>
                                    <button style="margin-top: 10px;" type="submit" class="btn btn-blue-3">Add Note</button>
                                </div>

                                </form>
                            </div>
                            </div>
					    </div>
				    </div>
            </div>
<!--                    <form  id="broker-notes"  method="post" enctype="multipart/form-data">-->
<!--                        Name: <br><input type="text" id="broker_notes"  name="broker_notes"><br>-->
<!--                        <br>-->
<!--                        <textarea rows="4" cols="40" name="broker_notes" id="broker_notes" form="broker_notes">-->
<!--                          </textarea><br>-->
<!--                        <input type="hidden" name="lead_id" value="--><?//=$_GET['lead_id']?><!--">-->
<!--                        <input type="hidden" id="url" name="url" value="--><?//=$_SERVER['REQUEST_URI']?><!--">-->
<!--                        <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="notes_error"></span>-->
<!---->
<!--                        <div><button style="margin-top: 10px;" type="submit" class="btn btn-blue-3">Add Note</button></div>-->
<!--                    </form>-->

            <div class="box-frame">
                <div class="scrollbar" >


                <?php
                $list = DB::query("select * from logs where lead_id = '".$_GET['lead_id']."' order by id DESC limit 12");
                foreach($list as $lists)
                {
                    if($lists['log_detail'] == 'Call To Client')
                    {
                        $class = "fa-phone";
                        $class_color = "phone-b";
                    }
                    else if($lists['log_detail'] == 'Email To Client')
                    {
                        $class = "fa-envelope";
                        $class_color = "doc-b";
                    }
                    else if($lists['log_detail'] == 'Change Lead Status')
                    {
                        $class = "fa-refresh";
                        $class_color = "doc-refresh";
                    }
                    else if($lists['log_detail'] == 'File uploaded')
                    {
                        $class = "fa-upload";
                        $class_color = "doc-upload";
                    }
                    else{
                        $class = "fa-file";
                        $class_color = "doc-u";
                    }

                ?>
                    <div class="header-box">
                        <div class="img-box">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <div class="fa-icon <?=$class_color?>">
                                <i class="fa <?=$class?>" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="txt">

<!--                            $x = '37';-->
<!--                            $array = explode( "\n", wordwrap( $dat['name'], $x));-->
                            <?php
                            if(strlen($lists['log_detail']) > 48)
                            {
                                $x = '48';
                                $array = explode( "\n", wordwrap( $lists['log_detail'], $x));
                                foreach ( $array as $item ) {
                                    echo '<h5><b>'.$item . '</b></h5>';
                                }
                            }
                            else{


                            ?>
                                <h5><b><?=$lists['log_detail']?></b></h5>
                            <?php } ?>
                            <p><?=$lists['log_date']?></p>

                        </div>
                    </div>



                <?php
                }
                ?>
<!--                <div class="header-box">-->
<!--                    <div class="img-box">-->
<!--                        <i class="fa fa-user" aria-hidden="true"></i>-->
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
                    <table class="table table-bordered">

                        <tr>
                            <td>Invoice To:</td>
                            <td><textarea class="form-control" name="invoice_to" id="invoice_to"></textarea></td>
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="invoice_to_error"></span>
                        </tr>


                        <tr>
                            <td>Delivery To:</td>
                            <td><textarea class="form-control" name="delivery_to" id="delivery_to"></textarea></td>
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="delivery_to_error"></span>
                        </tr>


                        <tr>

                            <td>Asset Description:</td>
                            <td><input type="text" class="form-control" name="asset_description" id="asset_description"></td>
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="asset_description_error"></span>
                        </tr>


                            <td>Gross Price:</td>
                            <td>
                                <div class="input-group">
                                    <span class="input-group-addon">$</span>
                                    <input type="text" class="form-control" name="gross_price" id="gross_price">
                                </div>
                            </td>

                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="gross_price_error"></span>
                        </tr>
                        <tr>

                            <td>Less Trade-in:</td>
                            <td>
                                <div class="input-group">
                                    <span class="input-group-addon">$</span><input type="text" class="form-control" name="less_trade_in" id="less_trade_in" placeholder="">
                                </div>
                            </td>
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="less_trade_in_error"></span>
                        </tr>

                        <input type="hidden" name="lead_id" id="lead_id"  value="<?=$_GET['lead_id']?>">
                        <input type="hidden" name="broker_id" id="broker_id"  value="<?=$leads['broker_id']?>">

                        <tr>

                            <td>Less Deposit:</td>
                            <td>
                                <div class="input-group">
                                    <span class="input-group-addon">$</span><input type="text" class="form-control" name="less_deposit" id="less_deposit" placeholder="">
                                </div>
                            </td>
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="less_deposit_error"></span>
                        </tr>
                        <tr>

                            <td>Plus Finance Payout On Trade-in :</td>
                            <td>
                                <div class="input-group">
                                    <span class="input-group-addon">$</span><input type="text" class="form-control" name="plus_finance_payout_on_trade_in" id="plus_finance_payout_on_trade_in" placeholder="">
                                </div>
                            </td>
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="plus_finance_payout_on_trade_in_error"></span>
                        </tr>
                        <tr>

                            <td>Refund To Customer:</td>
                            <td>
                                <div class="input-group">
                                    <span class="input-group-addon">$</span><input type="text" class="form-control" name="refund_to_customer" id="refund_to_customer" placeholder="">
                                </div>
                            </td>
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="refund_to_customer_error"></span>
                        </tr>
                        <tr>

                            <td>Total Finance Amount:</td>
                            <td>
                                <div class="input-group">
                                    <span class="input-group-addon">$</span><input type="text" class="form-control" name="total_finance_amount" id="total_finance_amount" placeholder="">
                                </div>
                            </td>
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

                            <td><b>INVOICE TYPE</b></td>
                            <td>
                                <select id="invoice_type" name="invoice_type" class="form-control">
                                    <option value="invoice">Invoice</option>
                                    <option value="tax_invoice">Tax invoice</option>
                                </select>
                                <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="invoice_type_error"></span>
                        </tr>
                        <tr>

                            <td><b>INVOICE DATE</b></td>
                            <td><input type="text" class="form-control datepicker-input" name="invoice_date" id="invoice_date"></td>
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="invoice_date_error"></span>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Datepicker</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control datepicker-input">
                                </div>
                            </div>

                        </tr>
                        <tr>

                            <td><b>VENDOR DETAILS</b>&nbsp;&nbsp;<small>(Name and Address)</small></td>
                            <td><textarea rows="4" cols="50" class="form-control" name="vendor_detail" id="vendor_detail"></textarea></td>
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="vendor_detail_error"></span>
                        </tr>
                        <tr>

                            <td><b>INVOICE TO</b></td>
                            <td><textarea rows="4" cols="50" class="form-control" name="invoice_to" id="invoice_to1"></textarea></td>
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="invoice_to_error"></span>
                        </tr>
                        <tr>

                            <td><b>DELIVERY TO</b></td>
                            <td><textarea rows="4" cols="50" class="form-control" name="delivery_to" id="delivery_to1"></textarea></td>
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="delivery_to_error"></span>
                        </tr>

                    </table>

                    <h4><b>ASSET DESCRIPTION</b></h4>
                    <div id="other_assets_div">
                        <table class="table table-bordered">
                        <tr>

                            <td>One (1) Only</td>
                            <td><input type="text" class="form-control" name="one_only[]" id="one_only"></td>
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="one_only_error"></span>
                        </tr>
                        <tr>

                            <td>Year</td>
                            <td><input type="text" class="form-control" name="year[]" id="year"></td>
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="year_error"></span>
                        </tr>
                        <tr>

                            <td>Rego No</td>
                            <td><input type="text" class="form-control" name="rego_no[]" id="rego_no"></td>
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="rego_no_error"></span>
                        </tr>
                        <tr>

                            <td>Engine No</td>
                            <td><input type="text" class="form-control" name="engine_no[]" id="engine_no"></td>
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="engine_no_error"></span>
                        </tr>
                        <tr>

                            <td>Vin No</td>
                            <td><input type="text" class="form-control" name="vin_no[]" id="vin_no"></td>
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="vin_no_error"></span>
                        </tr>
                        <tr>

                            <td>Odometer</td>
                            <td><input type="text" class="form-control" name="odometer[]" id="odometer"></td>
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="odometer_error"></span>
                        </tr>
                        </table>
                    </div>

                    <div class="form-group">
                        <button id="other-assets-button" type="button" class="btn btn-primary">Add</button>
                        <small>*You can add multiple assets by adding ADD button</small>
                    </div>



                    <table class="table table-bordered">
                        <tr>

                            <td>INVOICE AMOUNT</td>
                            <td><input type="text" class="form-control" name="invoice_amount" id="invoice_amount"></td>
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="invoice_amount_error"></span>
                        </tr>
                        <tr>

                            <td>GST(If any)</td>
                            <td><input type="text" class="form-control" name="gst" id="gst"></td>
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="gst_error"></span>
                        </tr>
                        <tr>

                            <td>DEPOSIT INC GST</td>
                            <td><input type="text" class="form-control" name="deposit_inc_gst" id="deposit_inc_gst"></td>
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="deposit_inc_gst_error"></span>
                        </tr>
                        <tr>

                            <td>TOTAL AMOUNT DUE</td>
                            <td><input type="text" class="form-control" name="total_amount_due" id="total_amount_due"></td>
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="total_amount_due_error"></span>
                        </tr>
                    </table>



                    <h4><b>DISBURSEMENT AUTHORITY:</b></h4>
                    <div id="other_assets_div1">
                      <table class="table table-bordered">
                        <tr>

                            <td>Bank</td>
                            <td><input type="text" class="form-control" name="bank[]" id="bank"></td>
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="bank_error"></span>
                        </tr>
                        <tr>

                            <td>AC Name</td>
                            <td><input type="text" class="form-control" name="ac_name[]" id="ac_name"></td>
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="ac_name_error"></span>
                        </tr>
                        <tr>

                            <td>BSB</td>
                            <td><input type="text" class="form-control" name="bsb[]" id="bsb"></td>
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="bsb_error"></span>
                        </tr>
                        <tr>

                            <td>AC No</td>
                            <td><input type="text" class="form-control" name="ac_no[]" id="ac_no"></td>
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="ac_no_error"></span>
                        </tr>
                        <tr>

                            <td>Amount</td>
                            <td><input type="text" class="form-control" name="amount[]" id="amount"></td>
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="amount_error"></span>
                        </tr>


                    </table>

<!--                        <input type="hidden" id="url" name="url" value="--><?//=$_SERVER['REQUEST_URI']?><!--">-->

                    </div>
                    <div class="form-group">
                        <button id="other-assets-button1" type="button" class="btn btn-primary">Add</button>
                        <small>*You can add multiple banks by adding ADD button</small>
                    </div>







                </div>
                <input type="hidden" name="lead_id"  value="<?=$_GET['lead_id']?>">
                <input type="hidden" name="broker_id"  value="<?=$leads['broker_id']?>">
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
                    <h4 class="modal-title"><b>Lender Invoice Details</b></h4>
                </div>
                <div class="modal-body mx-3">


                    <div class="form-group">
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
                            <option value="" disabled>Select</option>
                            <?php

                            $company  =  DB::query("select * from User where id = '".$leads['broker_id']."'");
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
                            <td><input type="text" class="form-control datepicker-input" placeholder="dd/mm/yy" name="settlement_date" id="settlement_date"></td>
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="settlement_date_error"></span>
                        </tr>
                        <tr>

                            <td>Amount Financed</td>
                            <td>
                                <div class="input-group">
                                    <span class="input-group-addon">$</span>
                                    <input type="text" class="form-control" name="amount_financed" id="amount_financed">
                                </div>
                            </td>
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="amount_financed_error"></span>

                        </tr>
                        <tr>

                            <td>Total Brokerage</td>
                            <td>
                                <div class="input-group">
                                    <span class="input-group-addon">$</span><input type="text" class="form-control" name="total_brokerage" id="total_brokerage">
                                </div>
                            </td>
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="total_brokerage_error"></span>
                        </tr>
                        <tr>

                            <td>Total Doc Fee</td>
                            <td>
                                <div class="input-group">
                                    <span class="input-group-addon">$</span>
                                    <input type="text" class="form-control" name="total_doc_fee" id="total_doc_fee"></div></td>
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="total_doc_fee_error"></span>
                        </tr>
                        <tr>

                            <td>Total Origination Fee</td>
                            <td>
                                <div class="input-group">
                                    <span class="input-group-addon">$</span>
                                    <input type="text" class="form-control" name="total_origination_fee" id="total_origination_fee"></div>
                            </td>
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
<div class="modal fade" id="applicationModal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->

        <div class="modal-content">
            <div style="" class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 style="color: white;" class="modal-title">Upload Doc</h4>
            </div>
            <div class="modal-body mx-3">

                <form id="docs1" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <input class="form-control" id="pdfFile" name="pdfFile"  type="file"  onchange="$('#docs1').submit();" />
                        <input type="hidden" id="lead_id" name="lead_id" value="<?=$_GET['lead_id']?>">
                        <input type="hidden" id="application_idd" name="application_id">
                    </div>
                </form>

                <div id="drop_file_zone" ondrop="upload_file(event)" ondragover="return false">
                    <div id="drag_upload_file">
                        <br><p>Drop file here</p>
                        <p>or</p>
                        <p><input type="button" value="Select File" onclick="file_explorer();"></p>
                        <input type="file" id="selectfile">

                    </div>
                </div>

                <div><h4>All Docs</h4></div>
                <div class="fetched-data">

                </div>
                <div class="modal-footer">
                    <a id="generate" href=''><button type="button" class="btn btn-primary">Download Application PDF</button></a>
                </div>

            </div>

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

    function myFunction() {
        var dots = document.getElementsByClassName("dots");
        var moreText = document.getElementsByClassName("more");
        var btnText = document.getElementsByClassName("myBtn");

        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Read less";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Read more";
            moreText.style.display = "inline";
        }
    }
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
    $(function () {
        $('#applicationModal').on('show.bs.modal', function (e) {
            var rowid = $(e.relatedTarget).data('id');
            $('#application_idd').prop('value', rowid);

                $("#generate").attr("href", "generate_html_pdf.php?application_id="+rowid);
            localStorage.setItem("app_id",rowid);
            //alert(rowid);
            $.ajax({
                type : 'post',
                url : 'assets/ajax/fetch_record.php', //Here you will fetch records
                data :  'application_id='+ rowid, //Pass $id
                success : function(data){
                    $('.fetched-data').html(data);//Show fetched data from database
                }
            });
        });

        $('#lenderInvoiceModal').on('shown.bs.modal', function() {
            $('.datepicker-input').css('z-index','1600');
        });



        var fileobj;
        function upload_file(e) {
            e.preventDefault();
            fileobj = e.dataTransfer.files[0];
            ajax_file_upload(fileobj);
        }

        function file_explorer() {
            document.getElementById('selectfile').click();
            document.getElementById('selectfile').onchange = function() {
                fileobj = document.getElementById('selectfile').files[0];
                ajax_file_upload(fileobj);
            };
        }

        function ajax_file_upload(file_obj) {
            //addLoading();
            if(file_obj != undefined) {
                var form_data = new FormData();
                form_data.append('file', file_obj);

                form_data.append('application_id', localStorage.getItem("app_id"));

                $.ajax({
                    type: 'POST',
                    url: 'assets/ajax/drag-docs.php',
                    contentType: false,
                    processData: false,
                    data: form_data,
                    success:function(response) {
                       // hideLoading();
                        swal(" Your file has been uploaded!", {
                            icon: "success",
                        });
                       // window.location.href = 'my-files.php';
                    }
                });
            }
        }



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
                            var newUrl = 'hellosign/prelim_pdf.php?email=<?=$mail?>&name=<?=$leads['client_name']?>';
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

        // data-toggle="modal" data-target="#applicationModal"

        // $(".application").click(function(){
        //
        //    $("#applicationModal").show();
        // });


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
                            var newUrl = 'hellosign/nccp_pdf.php?email=<?=$mail?>&name=<?=$leads['client_name']?>';
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
                var newUrl = 'hellosign/qs-credit_guide.php?email=<?=$mail?>&name=<?=$leads['client_name']?>';
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
                var newUrl = 'qs-php-master/privacy_pdf.php?email=<?=$mail?>&name=<?=$leads['client_name']?>';
                $(this).attr("href", newUrl);
                window.open($(this).attr("href"), "popupWindow", "width=650,height=200,scrollbars=yes");

            }
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



    var inputFieldOthers = ' <div class="ahmad-other"><table class="table table-bordered">'+
        '<tr> ' +

        '<td>One (1) Only</td>' +
        '<td><input type="text" class="form-control" name="one_only[]" ></td>' +
        '</tr>' +
        '<tr>' +

        '<td>Year</td>' +
        '<td><input type="text" class="form-control" name="year[]" ></td>' +
        '</tr>' +
        '<tr>' +

        '<td>Rego No</td>' +
        '<td><input type="text" class="form-control" name="rego_no[]" ></td>' +

        '</tr>' +
        '<tr>' +

        '<td>Engine No</td>' +
        '<td><input type="text" class="form-control" name="engine_no[]" ></td>' +

        ' </tr>' +
        '<tr>' +

        ' <td>Vin No</td>' +
        '<td><input type="text" class="form-control" name="vin_no[]" ></td>' +

        ' </tr>' +
        '<tr>' +

        '<td>Odometer</td>' +
        '<td><input type="text" class="form-control" name="odometer[]" ></td>' +

        '</tr>' +
        '</table>'+
        '                   <div class="form-group">' +
        '                       <button  class="btn remove_others_button btn-primary mb-2" type="button">Remove</button> ' +
        '                   </div> </div> ';


    var xOthers = 1;
    var maxFieldOthers = 3;
    $("#other-assets-button").click(function(){
        //Check maximum number of input fields
        if(xOthers < maxFieldOthers){
            xOthers++; //Increment field counter




            $("#other_assets_div").append(inputFieldOthers); //Add field html





        }
    });

    $("#other_assets_div").on('click', '.remove_others_button', function(e){
        e.preventDefault();
        $(this).closest('.ahmad-other').remove();  //Remove field html
        xOthers--; //Decrement field counter
    });



    var inputFieldOthers1 = ' <div class="ahmad-other1">    <table class="table table-bordered">' +
        ' <tr>' +

        '<td>Bank</td>' +
        '<td><input type="text" class="form-control" name="bank[]" ></td>' +

        '</tr>' +
        '<tr>' +

        '<td>AC Name</td>' +
        '<td><input type="text" class="form-control" name="ac_name[]" ></td>' +

        '</tr>' +
        '<tr>' +

        '<td>BSB</td>' +
        '<td><input type="text" class="form-control" name="bsb[]" ></td>' +

        '</tr>' +
        '<tr>' +

        '<td>AC No</td>' +
        '<td><input type="text" class="form-control" name="ac_no[]" ></td>' +

        '</tr>' +
        '<tr>' +

        '<td>Amount</td>' +
        '<td><input type="text" class="form-control" name="amount[]" ></td>' +

        '</tr>' +


        '</table>'+
        '                   <div class="form-group">' +
        '                       <button  class="btn remove_others_button1 btn-primary mb-2" type="button">Remove</button> ' +
        '                   </div> </div> ';


    var xOthers1 = 1;
    var maxFieldOthers1 = 3;
    $("#other-assets-button1").click(function(){
        //Check maximum number of input fields
        if(xOthers1 < maxFieldOthers1){
            xOthers1++; //Increment field counter
            $("#other_assets_div1").append(inputFieldOthers1); //Add field html
        }
    });

    $("#other_assets_div1").on('click', '.remove_others_button1', function(e){
        e.preventDefault();
        $(this).closest('.ahmad-other1').remove();  //Remove field html
        xOthers1--; //Decrement field counter
    });




    $(function ()
    {
        // $( "#invoice_date" ).datepicker();

        $('#private-sale-invoice-form').on('submit', function (e) {
            e.preventDefault();
            //addLoading();
            var broker_id = $("#broker_id").val();
            var lead_id   = $("#lead_id").val();

            $.ajax({
                url: "assets/ajax/private_sale_invoice.php",
                type: 'POST',
                data: new FormData(this),
                contentType: false,       // The content type used when sending data to the server.
                cache: false,             // To unable request pages to be cached
                processData:false,
                success: function (data) {

                    var lender_invoice_id = data;
                    $("#privateSaleInvoiceModal").modal('hide');
                    window.location.href = 'http://auzzietech.com/element_new/pdf/private-sale-invoice.php?lender_invoice_id='+lender_invoice_id+'&lead_id='+lead_id+'&broker_id='+broker_id;

                }
            });

        });
    });

    $('#lender_invoice_client_name').bind('input', function()  { document.getElementById('#lender_invoice_client_name_error').innerHTML = ""; })

    $('#lender_invoice_application_id').bind('input', function()  { document.getElementById('#lender_invoice_application_id_error').innerHTML = ""; })

    $('#lender_invoice_broker_reference').bind('input', function()  { document.getElementById('#lender_invoice_broker_reference_error').innerHTML = ""; })

    $('#settlement_date').bind('input', function()  { document.getElementById('#settlement_date_error').innerHTML = ""; })

    $('#amount_financed').bind('input', function()  { document.getElementById('#amount_financed_error').innerHTML = ""; })

    $('#total_brokerage').bind('input', function()  { document.getElementById('#total_brokerage_error').innerHTML = ""; })

    $('#total_doc_fee').bind('input', function()  { document.getElementById('#total_doc_fee_error').innerHTML = ""; })

    $('#total_origination_fee').bind('input', function()  { document.getElementById('#total_origination_fee_error').innerHTML = ""; })

    $(function ()
    {

        $('#lender-invoice-form').on('submit', function (e) {
            e.preventDefault();

            if ($("#lender_invoice_client_name").val() == "")
            {
                $('#lender_invoice_client_name_error').html('Required*');
                return;
            }
            if ($("#lender_invoice_application_id").val() == "")
            {
                $('#lender_invoice_application_id_error').html('Required*');
                return;
            }
            if ($("#lender_invoice_broker_reference").val() == "")
            {
                $('#lender_invoice_broker_reference_error').html('Required*');
                return;
            }

            if ($("#settlement_date").val() == "") {
                $('#settlement_date_error').html('Required*');
                return;
            }
            if ($("#amount_financed").val() == "") {
                $('#amount_financed_error').html('Required*');
                return;
            }
            if ($("#total_brokerage").val() == "") {
                $('#total_brokerage_error').html('Required*');
                return;
            }
            if ($("#total_doc_fee").val() == "") {
                $('#total_doc_fee_error').html('Required*');
                return;
            }
            if ($("#total_origination_fee").val() == "") {

                $('#total_origination_fee_error').html('Required*');
                return;
            }

            var broker_id = $("#broker_id").val();
            var lead_id   = $("#lead_id").val();


            //addLoading();

            $.ajax({
                url: "assets/ajax/lender_invoice.php",
                type: 'POST',
                data: new FormData(this),
                contentType: false,       // The content type used when sending data to the server.
                cache: false,             // To unable request pages to be cached
                processData: false,
                success: function (data) {

                    //hideLoading();
                    //alert('Lead Has Been Added Successfully');
                    var lender_invoice_id = data;



                    window.location.href = 'http://auzzietech.com/element_new/pdf/lender-invoice.php?lender_invoice_id='+lender_invoice_id+'&lead_id='+lead_id+'&broker_id='+broker_id;


                    // $("")

                    $("#lenderInvoiceModal").modal('hide');

                }
            });
        });
    });


</script>


<!--<script type="text/javascript">-->
<!--    $(document).ready(function(){-->
<!--    $(".datepicker-input").datetimepicker({-->
<!--        format: "dd MM yyyy - hh:ii",-->
<!--        autoclose: true,-->
<!--        todayBtn: true,-->
<!--        startDate: "2020-07-12 10:00",-->
<!--        minuteStep: 10-->
<!--    });-->
<!--    });-->
<!---->
<!--    </script>-->
<?php
include 'footer.php';
?>
