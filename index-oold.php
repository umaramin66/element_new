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
        <div class="row top-summary">
            <div>
                <div style="margin-bottom:20px; padding:5px;" class=" col-lg-3 col-md-5">
                    <div class="widget green-1 animated fadeInDown">
                        <div class="widget-content padding">
                            <div class="widget-icon widget-icon1">
                                <i class="icon-globe-inv"></i>
                            </div>
                            <div class="text-box">
                                <p class="maindata">TOTAL <b>LEADS</b></p>
                                <h2><span class="animate-number" data-value="25" data-duration="3000">0</span></h2>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="widget-footer">
                            <div class="row">
                                <div class="col-sm-12 w-f-1">
                                    <i class="fa fa-caret-up rel-change1"></i> <b>39%</b> increase in traffic
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

                <div style="margin-bottom:20px; padding:5px;" class="col-lg-3 col-md-5">
                    <div class="widget darkblue-2 animated fadeInDown">
                        <div class="widget-content padding">
                            <div class="widget-icon widget-icon2">
                                <i class="icon-bag"></i>
                            </div>
                            <div class="text-box">
                                <p class="maindata">APPROVED <b>LEADS</b></p>
                                <h2><span class="animate-number" data-value="6" data-duration="3000">0</span></h2>

                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="widget-footer">
                            <div class="row">
                                <div class="col-sm-12 w-f-2">
                                    <i class="fa fa-caret-down rel-change2"></i> <b>11%</b> decrease in sales
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

                <div style="margin-bottom:20px; padding:5px;" class="col-lg-3 col-md-5">
                    <div class="widget pink-1 animated fadeInDown">
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
                        <div class="widget-footer">
                            <div class="row">
                                <div class="col-sm-12 w-f-3">
                                    <i class="fa fa-caret-down rel-change3"></i> <b>7</b> decrease in income
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

                <div style="margin-bottom:20px; padding:5px;" class="col-lg-3 col-md-5">
                    <div class="widget lightblue-1 animated fadeInDown">
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
                        <div class="widget-footer">
                            <div class="row">
                                <div class="col-sm-12 w-f-4">
                                    <i class="fa fa-caret-up rel-change4"></i> <b>6%</b> increase in users
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>



            <!-- info-box-menu -->
            <div class="col-lg-3 col-md-5">
                <div class="widget green-1 animated fadeInDown" type="button" class="btn btn-demo">
                    <div class="widget-content padding">
                        <h5>New Leads</h5>

                    </div>
                </div>
                <div class="scrollbar" id="style-2">
                    <?php
                    $query = DB::query("select * from leads where broker_id = '".$_SESSION['broker_id']."' and lead_status IN (1,5) order by sort DESC");
                    foreach($query as $leads)
                    {
                    ?>
                    <a style="text-decoration: none" href="new-page.php?lead_id=<?=$leads['id']?>">
                        <div class="widget green-1 animated fadeInDown" type="button" class="btn btn-demo" >
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

            <div class="col-lg-3 col-md-5">
                <div class="widget green-1 animated fadeInDown" type="button" class="btn btn-demo">
                    <div class="widget-content padding">
                        <h5>Approve Leads</h5>

                    </div>
                </div>
                <div class="scrollbar" id="style-2">
                    <?php
                    $query = DB::query("select * from leads where broker_id = '".$_SESSION['broker_id']."' and lead_status = 2 order by sort DESC");
                    foreach($query as $leads) {
                        ?>
                    <a style="text-decoration: none" href="new-page.php?lead_id=<?=$leads['id']?>">
                        <div class="widget green-1 animated fadeInDown" type="button" class="btn btn-demo" data-toggle="modal" href="#myModal2">
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

            <div class="col-lg-3 col-md-5">
                <div class="widget green-1 animated fadeInDown" type="button" class="btn btn-demo">
                    <div class="widget-content padding">
                        <h5>Follow Up Leads</h5>

                    </div>
                </div>
                <div class="scrollbar" id="style-2">
                    <?php
                    //                                                            $query = DB::query("select * from leads where broker_id = '".$_SESSION['broker_id']."' and lead_status = 1 order by id DESC");
                    $query = DB::query("select * from follow_up_leads where broker_id = '".$_SESSION['broker_id']."' and follow_up = 0 order by id DESC");
                    foreach($query as $lead)
                    {
                    $leads = DB::queryFirstRow("select * from leads where id = '".$lead['lead_id']."' ");

                    ?>
                    <a style="text-decoration: none" href="new-page.php?lead_id=<?=$leads['id']?>">
                    <div class="widget green-1 animated fadeInDown" type="button" class="btn btn-demo" data-toggle="modal" href="#myModal2">
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
                        <div class="widget green-1 animated fadeInDown" type="button" class="btn btn-demo" data-toggle="modal" href="#myModal2">
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
            <div class="col-lg-3 col-md-5">
                <div class="widget green-1 animated fadeInDown" type="button" class="btn btn-demo">
                    <div class="widget-content padding">
                        <h5>Settlements</h5>

                    </div>
                </div>
                <div class="scrollbar" id="style-2">
                    <?php
                    //                                                            $query = DB::query("select * from leads where broker_id = '".$_SESSION['broker_id']."' and lead_status = 1 order by id DESC");
                    $query = DB::query("select * from leads where broker_id = '".$_SESSION['broker_id']."' and lead_status = 4 order by id DESC");

                    foreach($query as $leads)
                    {


                    ?>
                    <a style="text-decoration: none" href="new-page.php?lead_id=<?=$leads['id']?>">
                    <div class="widget green-1 animated fadeInDown" type="button" class="btn btn-demo" data-toggle="modal" href="#myModal2">
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

    <div class="row">
        <div class="col-lg-8 portlets">
            <div id="website-statistics1" class="widget">
                <div class="widget-header transparent">
                    <h2><i class="icon-chart-line"></i> <strong>Website</strong> Statistics</h2>
                    <div class="additional-btn">
                        <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                        <a class="hidden" id="dropdownMenu1" data-toggle="dropdown">
                            <i class="fa fa-cogs"></i>
                        </a>
                        <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="dropdownMenu1">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                        <a href="#" class="widget-popout hidden tt" title="Pop Out/In"><i class="icon-publish"></i></a>
                        <a href="#" class="widget-maximize hidden"><i class="icon-resize-full-1"></i></a>
                        <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                        <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                    </div>
                </div>
                <div class="widget-content">
                    <div id="website-statistic" class="statistic-chart">
                        <div class="row stacked">
                            <div class="col-sm-12">
                                <div class="toolbar">
                                    <div class="pull-left">
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-default btn-xs">Daily</a>
                                            <a href="#" class="btn btn-default btn-xs active">Monthly</a>
                                            <a href="#" class="btn btn-default btn-xs">Yearly</a>
                                        </div>
                                    </div>
                                    <div class="pull-right">
                                        <div class="btn-group">
                                            <a class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                                Export <i class="icon-down-open-2"></i>
                                            </a>
                                            <ul class="dropdown-menu pull-right" role="menu">
                                                <li><a href="#">Export as PDF</a></li>
                                                <li><a href="#">Export as CSV</a></li>
                                                <li><a href="#">Export as PNG</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <a href="#" class="btn btn-primary btn-xs"><i class="icon-cog-2"></i></a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="clearfix"></div>
                                <div id="morris-home" class="morris-chart" style="height: 270px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 portlets">
            <div class="widget darkblue-3">
                <div class="widget-header transparent">
                    <h2><strong>Server</strong> Status</h2>
                    <div class="additional-btn">
                        <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                        <a class="hidden" id="dropdownMenu1" data-toggle="dropdown">
                            <i class="fa fa-cogs"></i>
                        </a>
                        <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="dropdownMenu1">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                        <a href="#" class="widget-popout hidden tt" title="Pop Out/In"><i class="icon-publish"></i></a>
                        <a href="#" class="widget-maximize hidden"><i class="icon-resize-full-1"></i></a>
                        <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                        <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                    </div>
                </div>
                <div class="widget-content">
                    <div id="website-statistic2" class="statistic-chart">

                        <div class="col-sm-12 stacked">
                            <h4><i class="fa fa-circle-o text-green-1"></i> Server Loads</h4>
                            <div class="col-sm-8 status-data">

                                <div class="col-xs-12">
                                    <div class="row stacked">
                                        <div class="col-xs-4 text-center right-border">
                                            Processes<br>
                                            <span class="animate-number" data-value="322" data-duration="3000">0</span>
                                        </div>
                                        <div class="col-xs-4 text-center right-border">
                                            Connections<br>
                                            <span class="animate-number" data-value="4789" data-duration="3000">0</span>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            Avg. Load<br>
                                            <span class="animate-number" data-value="76" data-duration="3000">0</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="progress progress-xs">
                                    <div style="width: 72%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="72" role="progressbar" class="progress-bar bg-orange-2" title="Average Load: 76%" data-placement="right" data-toggle="tooltip">
                                        <span class="sr-only">72% Complete (success)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 text-center">
                                <div class="ws-load echart" data-percent="50"><span class="percent"></span></div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div id="home-chart-2"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-lg-8 portlets">
            <div class="widget">
                <div class="widget-header">
                    <h2><i class="icon-chart-pie-1"></i> <strong>Sales</strong> Report</h2>
                    <div class="additional-btn">
                        <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                        <a class="hidden" id="dropdownMenu1" data-toggle="dropdown">
                            <i class="fa fa-cogs"></i>
                        </a>
                        <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="dropdownMenu1">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                        <a href="#" class="widget-popout hidden tt" title="Pop Out/In"><i class="icon-publish"></i></a>
                        <a href="#" class="widget-maximize hidden"><i class="icon-resize-full-1"></i></a>
                        <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                        <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                    </div>
                </div>
                <div class="widget-content">
                    <div class="row stacked">
                        <div class="col-sm-5 mini-stats">
                            <div id="morris-bar-home" class="morris-chart" style="height: 170px;"></div>
                            <div class="sales-report-data">
                                <span class="pull-left">Completed Sales</span><span class="pull-right">65 / 174</span>
                                <div class="progress progress-xs">
                                    <div style="width: 38%;" class="progress-bar bg-blue-1"></div>
                                </div>
                                <div class="clearfix"></div>
                                <span class="pull-left">Return(s) Processed</span><span class="pull-right">22 / 25</span>
                                <div class="progress progress-xs">
                                    <div style="width: 88%;" class="progress-bar bg-lightblue-1"></div>
                                </div>
                                <div class="clearfix"></div>
                                <span class="pull-left">Shipped Products</span><span class="pull-right">418 / 624</span>
                                <div class="progress progress-xs">
                                    <div style="width: 58%;" class="progress-bar"></div>
                                </div>
                                <div class="clearfix"></div>
                                <span class="pull-left">Overall Product Stock</span><span class="pull-right">19%</span>
                                <div class="progress progress-xs">
                                    <div style="width: 19%;" class="progress-bar bg-pink-1"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div id="vector-map" style="height:370px"></div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div id="sales-report" class="collapse in hidden-xs">
                        <div class="table-responsive">
                            <table data-sortable class="table table-striped">
                                <thead>
                                <tr><th width="70">No</th><th data-sortable="false" width="40"><input type="checkbox" id="select-all-rows"></th><th width="120">Order ID</th><th>Buyer</th><th width="100">Status</th><th width="150">Location</th><th width="120">Total</th></tr>
                                </thead>
                                <tbody>
                                <tr><td>1</td><td><input type="checkbox" class="rows-check"></td><td>#0021</td><td><a href="#">John Doe</a></td><td><span class="label label-primary">Order</span></td><td>Yogyakarta, ID</td><td><strong class="text-primary">&#36; 1,245</strong></td></tr>
                                <tr><td>2</td><td><input type="checkbox" class="rows-check"></td><td>#0022</td><td><a href="#">Johnny Depp</a></td><td><span class="label label-success">Payment</span></td><td>London, UK</td><td><strong class="text-success">&#36; 1,245</strong></td></tr>
                                <tr><td>3</td><td><input type="checkbox" class="rows-check"></td><td>#0023</td><td><a href="#">Scarlett Johansson</a></td><td><span class="label label-success">Payment</span></td><td>Canbera, AU</td><td><strong class="text-success">&#36; 1,245</strong></td></tr>
                                <tr><td>4</td><td><input type="checkbox" class="rows-check"></td><td>#0024</td><td><a href="#">Hanna Barbara</a></td><td><span class="label label-danger">Cancel</span></td><td>Bali, ID</td><td><strong class="text-danger">&#36; 1,245</strong></td></tr>
                                <tr><td>5</td><td><input type="checkbox" class="rows-check"></td><td>#0025</td><td><a href="#">Ali Larter</a></td><td><span class="label label-primary">Order</span></td><td>Bandung, ID</td><td><strong class="text-primary">&#36; 1,245</strong></td></tr>
                                <tr><td>6</td><td><input type="checkbox" class="rows-check"></td><td>#0026</td><td><a href="#">Willy Wonka</a></td><td><span class="label label-danger">Cancel</span></td><td>Semarang, ID</td><td><strong class="text-danger">&#36; 1,245</strong></td></tr>
                                <tr><td>7</td><td><input type="checkbox" class="rows-check"></td><td>#0027</td><td><a href="#">Chris Isaac</a></td><td><span class="label label-warning">Waiting</span></td><td>New York, US</td><td><strong class="text-warning">&#36; 1,245</strong></td></tr>
                                <tr><td>8</td><td><input type="checkbox" class="rows-check"></td><td>#0028</td><td><a href="#">Jenny Doe</a></td><td><span class="label label-primary">Order</span></td><td>Boston, US</td><td><strong class="text-primary">&#36; 1,245</strong></td></tr>
                                <tr><td>9</td><td><input type="checkbox" class="rows-check"></td><td>#0029</td><td><a href="#">Ban ki moon</a></td><td><span class="label label-danger">Cancel</span></td><td>Boston, US</td><td><strong class="text-danger">&#36; 1,245</strong></td></tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 portlets">
            <div class="row">
                <div class="col-sm-12">
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
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div id="notes-app" class="widget">
                        <div class="notes-line"></div>
                        <div class="widget-header centered transparent">
                            <div class="left-btn btn-group"><a class="btn btn-sm btn-primary add-note"><i class="fa fa-plus"></i></a><a class="btn btn-sm btn-primary back-note-list"><i class="icon-align-justify"></i></a></div>
                            <h2>Notes</h2>
                            <div class="additional-btn">
                                <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                <a href="#" class="widget-popout hidden tt" title="Pop Out/In"><i class="icon-publish"></i></a>
                                <a href="#" class="widget-maximize hidden"><i class="icon-resize-full-1"></i></a>
                                <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                            </div>
                        </div>
                        <div class="widget-content padding-sm">
                            <div id="notes-list">
                                <div class="scroller">
                                    <ul class="list-unstyled">
                                    </ul>
                                </div>
                            </div>
                            <div id="note-data">
                                <form>
                                    <textarea class="form-control" id="note-text" placeholder="Your note..."></textarea>
                                </form>
                            </div>
                            <div class="status-indicator">Saved</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-6 portlets">
            <div id="weather-widget" class="widget">
                <div class="widget-header transparent">
                    <h2><strong>Weather</strong> Widget</h2>
                    <div class="additional-btn">
                        <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                        <a class="hidden" id="dropdownMenu1" data-toggle="dropdown">
                            <i class="fa fa-cogs"></i>
                        </a>
                        <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="dropdownMenu1">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                        <a href="#" class="widget-popout hidden tt" title="Pop Out/In"><i class="icon-publish"></i></a>
                        <a href="#" class="widget-maximize hidden"><i class="icon-resize-full-1"></i></a>
                        <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                        <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                    </div>
                </div>
                <div id="weather" class="widget-content">

                </div><i class="wi-day-rain-mix"></i>
                <button class="js-geolocation btn btn-sm btn-default" style="display: none;">Use Your Location</button>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 portlets">
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
        </div>
        <div class="col-lg-4 col-md-6 portlets">
            <div id="calc" class="widget darkblue-2">
                <div class="widget-header">
                    <div class="additional-btn left-toolbar">
                        <div class="btn-group">
                            <a class="additional-icon" id="dropdownMenu2" data-toggle="dropdown">
                                Calculator <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu2">
                                <li><a href="#">Save</a></li>
                                <li><a href="#">Export</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Quit</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="additional-btn">
                        <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>

                        <a href="#" class="widget-popout hidden tt" title="Pop Out/In"><i class="icon-publish"></i></a>
                        <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                    </div>
                </div>
                <div id="calculator" class="widget-content">
                    <div class="calc-top col-xs-12">
                        <div class="row">
                            <div class="col-xs-3"><span class="calc-clean">C</span></div>
                            <div class="col-xs-9"><div class="calc-screen"></div></div>
                        </div>
                    </div>

                    <div class="calc-keys col-xs-12">
                        <div class="row">
                            <div class="col-xs-3"><span>7</span></div>
                            <div class="col-xs-3"><span>8</span></div>
                            <div class="col-xs-3"><span>9</span></div>
                            <div class="col-xs-3"><span class="calc-operator">+</span></div>
                        </div>
                        <div class="row">
                            <div class="col-xs-3"><span>4</span></div>
                            <div class="col-xs-3"><span>5</span></div>
                            <div class="col-xs-3"><span>6</span></div>
                            <div class="col-xs-3"><span class="calc-operator">-</span></div>
                        </div>
                        <div class="row">
                            <div class="col-xs-3"><span>1</span></div>
                            <div class="col-xs-3"><span>2</span></div>
                            <div class="col-xs-3"><span>3</span></div>
                            <div class="col-xs-3"><span class="calc-operator">÷</span></div>
                        </div>
                        <div class="row">
                            <div class="col-xs-3"><span>0</span></div>
                            <div class="col-xs-3"><span>.</span></div>
                            <div class="col-xs-3"><span class="calc-eval">=</span></div>
                            <div class="col-xs-3"><span class="calc-operator">x</span></div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8 col-md-6 portlets">
            <!-- <div id="stock-widget" class="widget">
                <div class="widget-header transparent">
                    <h2><strong>Realtime</strong> Stock Chart</h2>
                    <div class="additional-btn">
                        <a href="#" onclick="fetchData()" class="hidden reload"><i class="icon-ccw-1"></i></a>
                        <a href="#" class="widget-maximize hidden"><i class="icon-resize-full-1"></i></a>
                        <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                        <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                    </div>
                </div>
                <div class="widget-content">
                    <h4 id="stock-title"><strong>Google Inc</strong> Stock Chart</h4>
                    <div class="stock-options pull-right btn-group">
                        <a class="btn btn-sm btn-default active" href="javascript:;" data-stock="GOOG">GOOGLE</a>
                        <a class="btn btn-sm btn-default" href="javascript:;" data-stock="AMZN">AMAZON</a>
                        <a class="btn btn-sm btn-default" href="javascript:;" data-stock="^IXIC">NASDAQ</a>
                        <a class="btn btn-sm btn-default" href="javascript:;" data-stock="^GSPC">S&P</a>
                    </div>
                    <div id="stock-chart"></div>
                </div>
            </div>-->
        </div>
        <div class="col-lg-4 col-md-6 portlets">
            <div id="stock-app" class="widget green-3">
                <div class="widget-header transparent">
                    <h2><strong>Stock</strong> Markets</h2>
                    <div class="additional-btn">
                        <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                        <a class="hidden" id="dropdownMenu1" data-toggle="dropdown">
                            <i class="fa fa-cogs"></i>
                        </a>
                        <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="dropdownMenu1">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                        <a href="#" class="widget-popout hidden tt" title="Pop Out/In"><i class="icon-publish"></i></a>
                        <a href="#" class="widget-maximize hidden"><i class="icon-resize-full-1"></i></a>
                        <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                        <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                    </div>
                </div>
                <div class="widget-content">
                    <div id="website-statistic3" class="statistic-chart">
                        <div class="row">
                            <div class="col-xs-6">
                                <h2>NASDAQ</h2>
                            </div>
                            <div class="col-xs-6">
                                <label id="nasdaq-status" class="stock-status"></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <h2>DOW JONES</h2>
                            </div>
                            <div class="col-xs-6">
                                <label id="dow-status" class="stock-status"></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <h2>S&P</h2>
                            </div>
                            <div class="col-xs-6">
                                <label id="sp-status" class="stock-status"></label>
                            </div>
                        </div>
                    </div>
                    <div id="home-chart-3"></div>
                </div>
                <div class="widget-footer">
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Start -->
    <footer>
        Element &copy; 2020
        <div class="footer-links pull-right">
            <a href="#">About</a><a href="#">Support</a><a href="#">Terms of Service</a><a href="#">Legal</a><a href="#">Help</a><a href="#">Contact Us</a>
        </div>
    </footer>
    <!-- Footer End -->
</div>
<?php
include 'footer.php';
?>
