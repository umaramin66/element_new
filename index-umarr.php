<?php
include 'header.php';

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
                <div id="calendar-widget2" class="widget blue-1">
                            <div class="widget-header transparent">
                                <h2><strong>Calendar</strong> Widget</h2>
                                <div class="additional-btn">
                                    <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                    <a href="#" class="widget-popout hidden tt" title="Pop Out/In"><i class="icon-publish"></i></a>
                                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                    <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                                </div>
                            </div>
                            <div id="calendar-box2" class="widget-content col-sm-12">

                            </div>
                    </div>

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

            <div style="margin-bottom:20px; padding:5px;" class=" col-lg-5 col-md-6">
                <input class="form-control" type="text" id="search-leadss" name="search-leads" placeholder="Search Leads">
                <small>*Press Enter To Search Your Leads</small>
            </div>
        </div>

        <br>

        <div id="search-row" class="row top-summary">
            <div class="col-lg-3 col-md-6">
                <div  style="height: 93px;" class="widget green-1 animated fadeInDown" type="button" class="btn btn-demo">
                    <div class="widget-content padding">
                        <h5>Search Leads</h5>
                    </div>
                </div>
                <div class="scrollbar" id="dd">
                </div>
            </div>

        </div>
        <div id="main-row" class="row top-summary">
            <div>
                <div style="margin-bottom:20px; padding:5px; border-top-left-radius: 25px;" class=" col-lg-3 col-md-6">
                    <div style="background-color: rgba(55, 41, 139, 0.1);" class="widget green-1 animated fadeInDown">
                        <div class="widget-content padding">
                            <div class="widget-icon widget-icon1">
                                <i class="icon-users"></i>
                            </div>
                            <div class="text-box">
                                <p class="maindata">TOTAL <b>LEADS</b></p>
                                <h2><span class="animate-number" data-value="25" data-duration="3000">0</span></h2>
                                <div class="clearfix"></div>
                            </div>
                        </div>

                    </div>
                </div>

                <div style="margin-bottom:20px; padding:5px;" class="col-lg-3 col-md-6">
                    <div style="background-color: rgba(253,113,175,.1);" class="widget darkblue-2 animated fadeInDown">
                        <div class="widget-content padding">
                            <div class="widget-icon widget-icon2">
                                <i class="icon-check"></i>
                            </div>
                            <div class="text-box">
                                <p class="maindata">APPROVED <b>LEADS</b></p>
                                <h2><span class="animate-number" data-value="6" data-duration="3000">0</span></h2>

                                <div class="clearfix"></div>
                            </div>
                        </div>

                    </div>
                </div>
                <div style="margin-bottom:20px; padding:5px;" class="col-lg-3 col-md-6">
                    <div style="background-color: rgba(0,184,136,.1);" class="widget lightblue-1 animated fadeInDown">
                        <div class="widget-content padding">
                            <div class="widget-icon widget-icon4">
                                <i class="fa fa-users"></i>
                            </div>
                            <div class="text-box">
                                <p class="maindata"><b>FOLLOW UP</b></p>
                                <h2><span class="animate-number" data-value="1" data-duration="3000">0</span></h2>
                                <div class="clearfix"></div>
                            </div>
                        </div>

                    </div>
                </div>

                <div style="margin-bottom:20px; padding:5px;" class="col-lg-3 col-md-6">
                    <div style="background-color: rgba(244,110,110,.1);" class="widget pink-1 animated fadeInDown">
                        <div class="widget-content padding">
                            <div class="widget-icon widget-icon3">
                                <i class="fa fa-dollar"></i>
                            </div>
                            <div class="text-box">
                                <p class="maindata"> <b>SETTLEMENTS</b></p>
                                <h2>$<span class="animate-number" data-value="7" data-duration="3000">0</span></h2>
                                <div class="clearfix"></div>
                            </div>
                        </div>

                    </div>
                </div>


            </div>



            <!-- info-box-menu -->
            <div class="col-lg-3 col-md-6">
<!--                <div  style="height: 93px;" class="widget green-1 animated fadeInDown" type="button" class="btn btn-demo">-->
<!--                    <div class="widget-content padding">-->
<!--                        <h5>New Leads</h5>-->
<!---->
<!--                    </div>-->
<!--                </div>-->
                <div class="scrollbar" id="style-2">
                    <?php
                    $query = DB::query("select * from leads where broker_id = '".$_SESSION['broker_id']."' and lead_status IN (1,5) order by sort DESC");
                    foreach($query as $leads)
                    {
                    ?>
                    <a style="text-decoration: none" href="new-page.php?lead_id=<?=$leads['id']?>">
                        <div class="widget green-1 animated fadeInDown first" type="button" class="btn btn-demo" >
                            <div class="widget-content padding">
                                <h5><?=ucfirst($leads['client_name'])?></h5>
                                <p><?=$leads['contact_no']?></p><p><?=$leads['lead_time']?></p>
                            </div>
                        </div>
                    </a>

                    <?php
                    }
                    ?>

                </div>
            </div>

            <div class="col-lg-3 col-md-6">
<!--                <div style="height: 93px;" class="widget green-1 animated fadeInDown" type="button" class="btn btn-demo">-->
<!--                    <div class="widget-content padding">-->
<!--                        <h5>Approve Leads</h5>-->
<!---->
<!--                    </div>-->
<!--                </div>-->
                <div class="scrollbar" id="style-2">
                    <?php
                    $query = DB::query("select * from leads where broker_id = '".$_SESSION['broker_id']."' and lead_status = 2 order by sort DESC");
                    foreach($query as $leads) {
                        ?>
                    <a style="text-decoration: none" href="new-page.php?lead_id=<?=$leads['id']?>">
                        <div class="widget green-1 animated fadeInDown second" type="button" class="btn btn-demo" data-toggle="modal" href="#myModal2">
                            <div class="widget-content padding">
                                <h5><?=ucfirst($leads['client_name'])?></h5>
                                <p><?=$leads['contact_no']?></p><p><?=$leads['lead_time']?></p>
                            </div>
                        </div></a>
                        <?php
                    }
                    ?>

                </div>
            </div>

            <div class="col-lg-3 col-md-6">
<!--                <div style="height: 93px;" class="widget green-1 animated fadeInDown" type="button" class="btn btn-demo">-->
<!--                    <div class="widget-content padding">-->
<!--                        <h5>Follow Up Leads</h5>-->
<!---->
<!--                    </div>-->
<!--                </div>-->
                <div class="scrollbar" id="style-2">
                    <?php
                    //                                                            $query = DB::query("select * from leads where broker_id = '".$_SESSION['broker_id']."' and lead_status = 1 order by id DESC");
                    $query = DB::query("select * from follow_up_leads where broker_id = '".$_SESSION['broker_id']."' and follow_up = 0 order by id DESC");
                    foreach($query as $lead)
                    {
                    $leads = DB::queryFirstRow("select * from leads where id = '".$lead['lead_id']."' ");

                    ?>
                    <a style="text-decoration: none" href="new-page.php?lead_id=<?=$leads['id']?>">
                    <div class="widget green-1 animated fadeInDown third" type="button" class="btn btn-demo" data-toggle="modal" href="#myModal2">
                        <div class="widget-content padding">
                            <h5><?=ucfirst($leads['client_name'])?></h5>
                            <p><?=$leads['contact_no']?></p><p><?=$leads['lead_time']?></p>
                        </div>
                    </div></a>
                    <?php
                    }
                    ?>

                    <?php
                    //                                                            $query = DB::query("select * from leads where broker_id = '".$_SESSION['broker_id']."' and lead_status = 1 order by id DESC");
                    $query = DB::query("select * from follow_up_leads where broker_id = '".$_SESSION['broker_id']."' and follow_up = 1 order by id DESC");
                    foreach($query as $lead)
                    {
                        $leads = DB::queryFirstRow("select * from leads where id = '".$lead['lead_id']."' ");

                        ?>
                    <a style="text-decoration: none" href="new-page.php?lead_id=<?=$leads['id']?>">
                        <div class="widget green-1 animated fadeInDown third" type="button" class="btn btn-demo" data-toggle="modal" href="#myModal2">
                            <div class="widget-content padding">
                                <h5><?=ucfirst($leads['client_name'])?></h5>
                                <p><?=$leads['contact_no']?></p><p><?=$leads['lead_time']?></p>
                            </div>
                        </div></a>
                        <?php
                    }
                    ?>

                </div>
            </div>
            <div class="col-lg-3 col-md-6">
<!--                <div style="height: 93px;" class="widget green-1 animated fadeInDown" type="button" class="btn btn-demo">-->
<!--                    <div class="widget-content padding">-->
<!--                        <h5>Settlements</h5>-->
<!---->
<!--                    </div>-->
<!--                </div>-->
                <div class="scrollbar" id="style-2">
                    <?php
                    //                                                            $query = DB::query("select * from leads where broker_id = '".$_SESSION['broker_id']."' and lead_status = 1 order by id DESC");
                    $query = DB::query("select * from leads where broker_id = '".$_SESSION['broker_id']."' and lead_status = 4 order by id DESC");

                    foreach($query as $leads)
                    {


                    ?>
                    <a style="text-decoration: none" href="new-page.php?lead_id=<?=$leads['id']?>">
                    <div class="widget green-1 animated fadeInDown fourth" type="button" class="btn btn-demo" data-toggle="modal" href="#myModal2">
                        <div class="widget-content padding">
                            <h5><?=ucfirst($leads['client_name'])?></h5>
                            <p><?=$leads['contact_no']?></p><p><?=$leads['lead_time']?></p>
                        </div>
                    </div></a>
                   <?php
                    }
                    ?>
                </div>
            </div>

        </div>

        <!-- info-box-menu-end -->

    </div>
    <!-- End of info box -->



    <!-- Footer Start -->
    <footer>
        Element &copy; 2021
        <div class="footer-links pull-right">
            <a href="#">About</a><a href="#">Support</a><a href="#">Terms of Service</a><a href="#">Legal</a><a href="#">Help</a><a href="#">Contact Us</a>
        </div>
    </footer>
    <!-- Footer End -->
</div>


<?php
include 'footer.php';
?>
