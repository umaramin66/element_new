<!-- [ navigation menu ] start -->
<?php include 'header.php';
if(isset($_GET['application_id']))
 {
    $_SESSION['application_id'] = $_GET['application_id'];
    $broker  = DB::queryFirstRow("select broker_id from new_application where id = '". $_SESSION['application_id']."'");
    $_SESSION['broker_id'] = $broker['broker_id'];

    $get  = DB::queryFirstRow("select id,residence_status from new_application_customer where application_id = '". $_SESSION['application_id']."'");

 }
 else
 {
     $get  = DB::queryFirstRow("select id,residence_status from new_application_customer where application_id = '". $_SESSION['application_id']."'");


 }

$app = DB::queryFirstRow("select * from new_application_basic_assets where application_id = '".$_SESSION['application_id']."'");
if(DB::count() != 0)
{
    $saving_cash_in_hand                              =   $app['saving_cash_in_hand'];
    $home_and_contents                                =   $app['home_and_contents'];
    $superannuation                                   =   $app['superannuation'];
    $home_estimated_value                             =   $app['home_estimated_value'];
}
else{
    $saving_cash_in_hand = "";
    $home_and_contents = "";
    $superannuation = "";
    $home_estimated_value = "";
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
        <!-- Page Heading Start -->
        <div class="page-heading">
<!--            <h1><i class='fa fa-check'></i> Forms</h1>-->
        </div>
        <!-- Page Heading End-->

        <!-- Your awesome content goes here -->
        <div class="widget">
            <div class="widget-header transparent">
                <h2><strong>Assets Section</strong></h2>
                <div class="additional-btn">
                    <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                    <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                </div>
            </div>
            <div class="widget-content padding">
                <form id="add-client6"  method="post" enctype="multipart/form-data" class="form-horizontal" role="form">

                    <div class="form-group">
                        <h4>BASIC ASSETS</h4>
                    </div>
                    <div class="form-group">
                        <label for="input-text-help" class="col-sm-2 control-label">Saving/Cash On Hand:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="saving_cash_in_hand" name="saving_cash_in_hand" value="<?=$saving_cash_in_hand?>"  placeholder="">

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input-text-help" class="col-sm-2 control-label">Home and Contents:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="home_and_contents" name="home_and_contents" value="<?=$home_and_contents?>"  placeholder="">

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input-text-help" class="col-sm-2 control-label">Superannuation:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="superannuation" name="superannuation" value="<?=$superannuation?>"  placeholder="">

                        </div>
                    </div>


                    <!--                                     NOTE:                                                                                                                                -->
                    <!--                                    Please note if in the first page main application page they selected From “residence status” ifFully owned (no Mortgage) , -->
                    <!--                                    Owned (mortgaged) then should ask for ‘your home” option if NOT do not show-->
                    <?php
                        if(($get['residence_status'] == 'fully_owned_no_mortgage') || ($get['residence_status'] == 'owned_mortgage')) {
                    ?>
                    <div class="form-group">
                        <label for="input-text-help" class="col-sm-2 control-label">Your Home (Estimated Value)</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="home_estimated_value" name="home_estimated_value" value="<?=$home_estimated_value?>"  placeholder="">
                        </div>
                    </div>
                    <?php } ?>
                    <input type="hidden" name="application_id" value="<?=$_SESSION['application_id']?>">
                    <br><br>
                    <div class="form-group">
                        <label for="input-text-help" class="col-sm-2 control-label"><b>Investment Properties</b></label>
                        <div class="col-sm-10">
                            <div class="form-group">
                                <button id="investment-button" type="button" class="btn btn-primary">Add</button>
                                <small>*You can add multiple properties by adding ADD button</small>
                            </div>
                        </div>
                    </div>

                    <div id="investment_properties_div">
                         <?php
                         $app1 = DB::query("select * from new_application_investment_properties where application_id = '".$_SESSION['application_id']."'");
                         if(DB::count() != 0)
                            {foreach($app1 as $ap)
                            { ?>

                                <div class="form-group">
                                   <label for="input-text-help" class="col-sm-2 control-label">Estimated Value:</label>
                                    <div class="col-sm-10">
                                       <input type="text" class="form-control" id="investment_properties_estimated_value" name="investment_properties_estimated_value[]" value="<?=$ap['investment_properties_estimated_value']?>"  placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                   <label for="input-text-help" class="col-sm-2 control-label">Mortgage Value(IF ANY):</label>
                                    <div class="col-sm-10">
                                       <input type="text" class="form-control" id="investment_properties_mortgage_value" name="investment_properties_mortgage_value[]" value="<?=$ap['investment_properties_mortgage_value']?>"  placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                   <label for="input-text-help" class="col-sm-2 control-label">Lender/Bank</label>
                                    <div class="col-sm-10">
                                       <input type="text" class="form-control" id="investment_properties_lender_bank" name="investment_properties_lender_bank[]" value="<?=$ap['investment_properties_lender_bank']?>"  placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                   <label for="input-text-help" class="col-sm-2 control-label">Repayments(IF ANY)</label>
                                    <div class="col-sm-10">
                                       <input type="text" class="form-control" id="investment_properties_repayments" name="investment_properties_repayments[]" value="<?=$ap['investment_properties_repayments']?>"  placeholder="">
                                    </div>
                                </div>

                                <div class="form-group">
                                   <label class="col-sm-2 control-label">Per</label>
                                   <div class="col-sm-10">
                                        <select class="form-control" id="investment_properties_repayments_select[]" name="investment_properties_repayments_select[]">
                                           <option value="" disabled>Select</option>

                                           <option value="week"<?=$ap['investment_properties_repayments_select'] == 'week' ? ' selected="selected"' : '';?>>Week</option>

                                           <option value="fortnight"<?=$ap['investment_properties_repayments_select'] == 'fortnight' ? ' selected="selected"' : '';?>>Fortnight</option>

                                           <option value="month"<?=$ap['investment_properties_repayments_select'] == 'month' ? ' selected="selected"' : '';?>>Month</option>

                                           <option value="year"<?=$ap['investment_properties_repayments_select'] == 'year' ? ' selected="selected"' : '';?>>Year</option>

                                        </select>

                                    </div>
                                </div>
                                 <button id="remove-investment-button" type="button" class="btn btn-primary">Remove</button>

                            <?php
                            }
                         }
                        ?>
                    </div>
                    <br><br>
                    <div class="form-group">
                        <label for="input-text-help" class="col-sm-2 control-label"><b>Motor Vehicles</b></label>
                        <div class="col-sm-10">
                            <div class="form-group">
                                <button id="motor-button" type="button" class="btn btn-primary">Add</button>
                                <small>*You can add multiple vehicles by adding ADD button</small>
                            </div>
                        </div>
                    </div>
                    <div id="motor_vehicles_div">
                         <?php
                        $app1 = DB::query("select * from new_application_motor_vehicles where application_id = '".$_SESSION['application_id']."'");
                        if(DB::count() != 0)
                            {
                                foreach($app1 as $ap2)
                            { ?>

                                <div class="form-group">
                                   <label for="input-text-help" class="col-sm-2 control-label">Estimated Value:</label>
                                    <div class="col-sm-10">
                                       <input type="text" class="form-control" name="motor_vehicles_estimated_value[]" value="<?=$ap2['motor_vehicles_estimated_value']?>"  placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                   <label for="input-text-help" class="col-sm-2 control-label">Loan Balance (IF ANY):</label>
                                    <div class="col-sm-10">
                                       <input type="text" class="form-control" name="motor_vehicles_loan_balance[]" value="<?=$ap2['motor_vehicles_loan_balance']?>"  placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                   <label for="input-text-help" class="col-sm-2 control-label">Lender/Bank</label>
                                    <div class="col-sm-10">
                                       <input type="text" class="form-control" name="motor_vehicles_lender_bank[]" value="<?=$ap2['motor_vehicles_lender_bank']?>"  placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                   <label for="input-text-help" class="col-sm-2 control-label">Repayments(IF ANY)</label>
                                    <div class="col-sm-10">
                                       <input type="text" class="form-control" id="motor_vehicles_repayments" name="motor_vehicles_repayments[]" value="<?=$ap2['motor_vehicles_repayments']?>"  placeholder="">
                                    </div>
                                </div>

                                <div class="form-group">
                                   <label class="col-sm-2 control-label">Per</label>
                                   <div class="col-sm-10">
                                        <select class="form-control" name="motor_vehicles_repayments_select[]">
                                           <option value="" disabled>Select</option>

                                           <option value="week"<?=$ap2['motor_vehicles_repayments_select'] == 'week' ? ' selected="selected"' : '';?>>Week</option>

                                           <option value="fortnight"<?=$ap2['motor_vehicles_repayments_select'] == 'fortnight' ? ' selected="selected"' : '';?>>Fortnight</option>

                                           <option value="month"<?=$ap2['motor_vehicles_repayments_select'] == 'month' ? ' selected="selected"' : '';?>>Month</option>

                                           <option value="year"<?=$ap2['motor_vehicles_repayments_select'] == 'year' ? ' selected="selected"' : '';?>>Year</option>

                                        </select>

                                    </div>
                                </div>
                            <?php
                            }

                         }
                        ?>
                    </div> 
                    <br><br>

                    <div class="form-group">
                        <label for="input-text-help" class="col-sm-2 control-label"><b>Recreational Assets</b><br> <small>*Bike Boats</small></label>
                        <div class="col-sm-10">
                            <div class="form-group">
                                <button id="recreational-button" type="button" class="btn btn-primary">Add</button>
                                <small>*You can add multiple assets by adding ADD button</small>
                            </div>
                        </div>
                    </div>
                    <div id="recreational_assets_div">

                         <?php
                            $app1 = DB::query("select * from new_application_recreational_assets where application_id = '".$_SESSION['application_id']."'");
                            if(DB::count() != 0)
                            {
                                foreach($app1 as $ap3)
                                { ?>

                                    <div class="form-group">
                                       <label for="input-text-help" class="col-sm-2 control-label">Estimated Value:</label>
                                        <div class="col-sm-10">
                                           <input type="text" class="form-control" name="recreational_assets_estimated_value[]" value="<?=$ap3['recreational_assets_estimated_value']?>"  placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                       <label for="input-text-help" class="col-sm-2 control-label">Loan Balance (IF ANY):</label>
                                        <div class="col-sm-10">
                                           <input type="text" class="form-control" name="recreational_assets_loan_balance[]" value="<?=$ap3['recreational_assets_loan_balance']?>"  placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                       <label for="input-text-help" class="col-sm-2 control-label">Lender/Bank</label>
                                        <div class="col-sm-10">
                                           <input type="text" class="form-control" name="recreational_assets_lender_bank[]" value="<?=$ap3['recreational_assets_lender_bank']?>"  placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                       <label for="input-text-help" class="col-sm-2 control-label">Repayments(IF ANY)</label>
                                        <div class="col-sm-10">
                                           <input type="text" class="form-control" id="recreational_assets_repayments" name="recreational_assets_repayments[]" value="<?=$ap3['recreational_assets_repayments']?>"  placeholder="">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                       <label class="col-sm-2 control-label">Per</label>
                                       <div class="col-sm-10">
                                            <select class="form-control" name="recreational_assets_repayments_select[]">
                                               <option value="" disabled>Select</option>
                                                          
                                               <option value="week"<?=$ap3['recreational_assets_repayments_select'] == 'week' ? ' selected="selected"' : '';?>>Week</option>

                                               <option value="fortnight"<?=$ap3['recreational_assets_repayments_select'] == 'fortnight' ? ' selected="selected"' : '';?>>Fortnight</option>

                                               <option value="month"<?=$ap3['recreational_assets_repayments_select'] == 'month' ? ' selected="selected"' : '';?>>Month</option>

                                               <option value="year"<?=$ap3['recreational_assets_repayments_select'] == 'year' ? ' selected="selected"' : '';?>>Year</option>
                                                                
                                            </select>

                                        </div>
                                    </div> 
                                <?php
                                }
                            }
                            ?>        
                    </div>  
                    <br><br>


                    <div class="form-group">
                        <label for="input-text-help" class="col-sm-2 control-label"><b>Other Assets</b><br> <small>*Bike Boats</small></label>
                        <div class="col-sm-10">
                            <div class="form-group">
                                <button id="other-assets-button" type="button" class="btn btn-primary">Add</button>
                                <small>*You can add multiple assets by adding ADD button</small>
                            </div>
                        </div>
                    </div>
                     <div id="other_assets_div">
                         <?php
                            $app1 = DB::query("select * from new_application_other_assets where application_id = '".$_SESSION['application_id']."'");
                            if(DB::count() != 0)
                            {
                                foreach($app1 as $ap4)
                                { ?>

                                    <div class="form-group">
                                       <label for="input-text-help" class="col-sm-2 control-label">Estimated Value:</label>
                                        <div class="col-sm-10">
                                           <input type="text" class="form-control" name="other_assets_estimated_value[]" value="<?=$ap4['other_assets_estimated_value']?>"  placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                       <label for="input-text-help" class="col-sm-2 control-label">Loan Balance (IF ANY):</label>
                                        <div class="col-sm-10">
                                           <input type="text" class="form-control" name="other_assets_loan_balance[]" value="<?=$ap4['other_assets_loan_balance']?>"  placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                       <label for="input-text-help" class="col-sm-2 control-label">Lender/Bank</label>
                                        <div class="col-sm-10">
                                           <input type="text" class="form-control" name="other_assets_lender_bank[]" value="<?=$ap4['other_assets_lender_bank']?>"  placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                       <label for="input-text-help" class="col-sm-2 control-label">Repayments(IF ANY)</label>
                                        <div class="col-sm-10">
                                           <input type="text" class="form-control" id="other_assets_repayments" name="other_assets_repayments[]" value="<?=$ap4['recreational_assets_repayments']?>"  placeholder="">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                       <label class="col-sm-2 control-label">Per</label>
                                       <div class="col-sm-10">
                                            <select class="form-control" name="other_assets_repayments_select[]">
                                               <option value="" disabled>Select</option>
                                                          
                                               <option value="week"<?=$ap4['other_assets_repayments_select'] == 'week' ? ' selected="selected"' : '';?>>Week</option>

                                               <option value="fortnight"<?=$ap4['other_assets_repayments_select'] == 'fortnight' ? ' selected="selected"' : '';?>>Fortnight</option>

                                               <option value="month"<?=$ap4['other_assets_select'] == 'month' ? ' selected="selected"' : '';?>>Month</option>

                                               <option value="year"<?=$ap4['other_assets_repayments_select'] == 'year' ? ' selected="selected"' : '';?>>Year</option>
                                                                
                                            </select>
                                       </div>
                                    </div> 
                                     <div class="form-group">
                                       <label for="input-text-help" class="col-sm-2 control-label">Description</label>
                                        <div class="col-sm-10">
                                           <input type="text" class="form-control" name="other_assets_description[]" value="<?=$ap4['other_assets_description']?>"  placeholder="">
                                        </div>
                                    </div>
                                <?php
                                }
                            }
                            ?>        
                    </div>
                    <div class="col-md-2"></div>
                    <div class="form-group">
                         <button type="submit" class="btn btn-primary">Next</button>
                        
                    </div>                 
                    
                </form>
            </div>

        </div>
        <!-- End of your awesome content -->

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
<script type="text/javascript">
    $(document).ready(function(){
        //$("#investment_properties_div").hide();
        var x = 1;
        var fieldHTMLInvestment = '<div class="ahmad">' +
            '<div class="form-group row"> ' +
            '<div class="col-md-2"> ' +
            '<label>Estimated Value:</label> ' +
            '</div> ' +
            '<div class="col-md-3">' +
            '<input  name="investment_properties_estimated_value[]" type="text" class="form-control" placeholder="">' +
            '</div> ' +
            '<div class="col-md-2">' +
            '<label>Mortgage Value(IF ANY):</label>'+
            '</div> ' +

            '<div class="col-md-3">'+

            '<input  name="investment_properties_mortgage_value[]" type="text" class="form-control" placeholder="">'+

            '</div>'+

            '               </div> ' +


            '               <div class="form-group row"> ' +
            '<div class="col-md-2">' +
            ' <label>Lender/Bank</label>' +

            '</div>' +
            '                   <div class="col-md-6">' +
            '                        <input  name="investment_properties_lender_bank[]" type="text" class="form-control" placeholder="">' +
            '                    </div>' +
            '               </div>' +



            '               <div class="form-group row"> ' +

            '<div class="col-md-2">' +
            ' <label>Repayments(IF ANY)</label>' +

            '</div>' +
            '                   <div class="col-md-3">' +
            '                        <input  name="investment_properties_repayments[]" type="text" class="form-control" placeholder="">' +
            '                    </div>' +
            '                    <div class="col-md-2">' +
            '                        <label>Per</label>' +
            '                    </div>' +
            '                    <div class="col-md-3">' +
            '                        <select class="form-control"  name="investment_properties_repayments_select[]">' +
            '                           <option value="" disabled>Select</option>' +
            '                           <option value="week">Week</option>' +
            '                            <option value="fortnight">Fortnight</option>' +
            '                           <option value="month">Month</option>' +
            '                           <option value="year">Year</option>' +
            '                       </select>' +
            '                   </div>' +
            '                   <div class="col-md-2">' +
            '                       <button  class="btn remove_button btn-primary mb-2" type="button">Remove</button> ' +
            '                   </div> ' +
            '               </div>' +
            '           </div>';

        //var x = 1;
        var maxField = 5;
        $("#investment-button").click(function(){
            //Check maximum number of input fields
            if(x < maxField){
                x++; //Increment field counter
                $("#investment_properties_div").append(fieldHTMLInvestment); //Add field html
            }
        });

        $("#investment_properties_div").on('click', '.remove_button', function(e){
            e.preventDefault();
            $(this).closest('.ahmad').remove();  //Remove field html
            x--; //Decrement field counter
        });




        var fieldHTMLMotor =
            '<div class="ahmad-motor-vehicle"><div class="form-group row">'+
            '<div class="col-md-2">'+
            '<label>Estimated Value:</label>'+
            '</div>'+


            '<div class="col-md-3">'+
            '<input  name="motor_vehicles_estimated_value[]" type="text" class="form-control" placeholder="">'+
            '</div>'+


            '<div class="col-md-2">'+
            '<label>Loan Balance (IF ANY):</label>'+
            '</div>' +

            '<div class="col-md-3">' +

            '            <input  name="motor_vehicles_loan_balance[]" type="text" class="form-control" placeholder="">' +
            '            </div>' +
            '            </div>' +

            '               <div class="form-group row"> ' +
            '<div class="col-md-2">' +
            ' <label>Lender/Bank</label>' +

            '</div>' +
            '                   <div class="col-md-6">' +
            '                        <input  name="motor_vehicles_lender_bank[]" type="text" class="form-control" placeholder="">' +
            '                    </div>' +
            '               </div>' +


            '            <div class="form-group row">' +
            '            <div class="col-md-2">' +
            '            <label>Repayments(IF ANY)</label>' +
            '        </div>' +
            '        <div class="col-md-3">' +
            '            <input  name="motor_vehicles_repayments[]" type="text" class="form-control" placeholder="">' +
            '            </div>' +
            '            <div class="col-md-2">' +
            '            <label>Per</label>' +
            '            </div>' +
            '            <div class="col-md-3">' +
            '            <select class="form-control"  name="motor_vehicles_repayments_select[]">' +
            '            <option value="" disabled>Select</option>' +
            '            <option value="week">Week</option>' +
            '            <option value="fortnight">Fortnight</option>' +
            '            <option value="month">Month</option>' +
            '            <option value="year">Year</option>' +
            '            </select>' +
            '            </div>' +
            '                   <div class="col-md-2">' +
            '                       <button  class="btn remove_motor_button btn-primary mb-2" type="button">Remove</button> ' +
            '                   </div> ' +
            '            </div></div>';

        var xMotor = 1;
        var maxFieldMotor = 5;
        $("#motor-button").click(function(){
            //Check maximum number of input fields
            if(xMotor < maxFieldMotor){
                xMotor++; //Increment field counter
                $("#motor_vehicles_div").append(fieldHTMLMotor); //Add field html
            }
        });

        $("#motor_vehicles_div").on('click', '.remove_motor_button', function(e){
            e.preventDefault();
            $(this).closest('.ahmad-motor-vehicle').remove();  //Remove field html
            xMotor--; //Decrement field counter
        });








        var inputFieldRecreation = '<div class="ahmad-recreational"> <div class="form-group row">' +
            '                                            <div class="col-md-2">' +
            '                                                <label>Estimated Value:</label>' +
            '                                            </div>' +


            '                                            <div class="col-md-3">' +
            '                                                <input  name="recreational_assets_estimated_value[]" type="text" class="form-control" placeholder="">' +
            '                                            </div>' +


            '                                            <div class="col-md-2">' +
            '                                                <label>Loan Balance(IF ANY):</label>' +
            '                                            </div>' +

            '                                            <div class="col-md-3">' +

            '                                                <input  name="recreational_assets_loan_balance[]" type="text" class="form-control" placeholder="">' +

            '                                            </div>' +
            '                                        </div>' +

            ' <div class="form-group row"> ' +
            '<div class="col-md-2">' +
            ' <label>Lender/Bank</label>' +

            '</div>' +
            '                   <div class="col-md-6">' +
            '                        <input  name="recreational_assets_lender_bank[]" type="text" class="form-control" placeholder="">' +
            '                    </div>' +
            '               </div>' +




            '                                        <div class="form-group row">' +
            '                                            <div class="col-md-2">' +
            '                                                <label>Repayments(IF ANY)</label>' +

            '                                            </div>' +
            '                                            <div class="col-md-3">' +
            '                                                <input  name="recreational_assets_repayments[]" type="text" class="form-control" placeholder="">' +
            '                                            </div>' +
            '                                            <div class="col-md-2">' +
            '                                                <label>Per</label>' +
            '                                            </div>' +
            '                                            <div class="col-md-3">' +
            '                                                <select class="form-control"  name="recreational_assets_repayments_select[]">' +
            '                                                    <option value="" disabled>Select</option>' +
            '                                                    <option value="week">Week</option>' +
            '                                                    <option value="fortnight">Fortnight</option>' +
            '                                                    <option value="month">Month</option>' +
            '                                                    <option value="year">Year</option>' +
            '                                                </select>' +
            '                                            </div>' +
            '                   <div class="col-md-2">' +
            '                       <button  class="btn remove_recreational_button btn-primary mb-2" type="button">Remove</button> ' +
            '                   </div> ' +
            '                                        </div></div>';


        var xrecreational = 1;
        var maxFieldrecreational = 5;
        $("#recreational-button").click(function(){
            //Check maximum number of input fields
            if(xrecreational < maxFieldrecreational){
                xrecreational++; //Increment field counter
                $("#recreational_assets_div").append(inputFieldRecreation); //Add field html
            }
        });

        $("#recreational_assets_div").on('click', '.remove_recreational_button', function(e){
            e.preventDefault();
            $(this).closest('.ahmad-recreational').remove();  //Remove field html
            xrecreational--; //Decrement field counter
        });






        var inputFieldOthers = ' <div class="ahmad-other">  <div class="form-group row">' +
            '                                                <div class="col-md-2">' +
            '                                                    <label>Estimated Value:</label>' +
            '                                                </div>' +


            '                                                <div class="col-md-3">' +
            '                                                    <input id="other_assets_estimated_value" name="other_assets_estimated_value[]" type="text" class="form-control" placeholder="">' +
            '                                                </div>' +


            '                                                <div class="col-md-2">' +
            '                                                    <label>Loan Balance(IF ANY):</label>' +
            '                                                </div>' +

            '                                                <div class="col-md-3">' +

            '                                                    <input  name="other_assets_loan_balance[]" type="text" class="form-control" placeholder="">' +

            '                                                </div>' +
            '                                            </div>' +

            ' <div class="form-group row"> ' +
            '<div class="col-md-2">' +
            ' <label>Lender/Bank</label>' +

            '</div>' +
            '                   <div class="col-md-6">' +
            '                        <input  name="other_assets_lender_bank[]" type="text" class="form-control" placeholder="">' +
            '                    </div>' +
            '               </div>' +

            '                                            <div class="form-group row">' +
            '                                                <div class="col-md-2">' +
            '                                                    <label>Repayments(IF ANY)</label>' +

            '                                                </div>' +
            '                                                <div class="col-md-3">' +
            '                                                    <input  name="other_assets_repayments[]" type="text" class="form-control" placeholder="">' +
            '                                                </div>' +
            '                                                <div class="col-md-2">' +
            '                                                    <label>Per</label>' +
            '                                                </div>' +
            '                                                <div class="col-md-3">' +
            '                                                    <select class="form-control"  name="other_assets_repayments_select[]">' +
            '                                                        <option value="" disabled>Select</option>' +
            '                                                        <option value="week">Week</option>' +
            '                                                        <option value="fortnight">Fortnight</option>' +
            '                                                        <option value="month">Month</option>' +
            '                                                        <option value="year">Year</option>' +
            '                                                    </select>' +
            '                                                </div>' +
            '                                            </div>' +

            '                                      ' +
            '                                            <div class="form-group row">' +
            '                                                <div class="col-md-2">' +
            '                                                    <label>Description</label>' +
            '                                                </div>' +
            '                                                <div class="col-md-7">' +
            '                                                    <input  name="other_assets_description[]" type="text" class="form-control" placeholder="">' +
            '                                                </div>' +
            '                   <div class="col-md-2">' +
            '                       <button  class="btn remove_others_button btn-primary mb-2" type="button">Remove</button> ' +
            '                   </div> ' +
            '                                            </div>' +

            '</div>';

        var xOthers = 1;
        var maxFieldOthers = 5;
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




    });
</script>
<?php
include 'footer.php';
?>
