<!-- [ navigation menu ] start -->
<?php  include 'header.php';
 if(isset($_GET['application_id']))
 {
     $_SESSION['application_id'] = $_GET['application_id'];
    $broker  = DB::queryFirstRow("select broker_id from new_application where id = '". $_SESSION['application_id']."'");
     $_SESSION['broker_id'] = $broker['broker_id'];
 }

$app = DB::queryFirstRow("select * from new_application_income where application_id = '".$_SESSION['application_id']."'");
if(DB::count() != 0)
{
    $income_net_after_tax                       = $app['income_net_after_tax'];
    $income_net_after_tax_select                = $app['income_net_after_tax_select'];
    $spouse_income                              = $app['spouse_income'];
    $spouse_income_select                       = $app['spouse_income_select'];
    $other_income                               = $app['other_income'];
    $other_income_select                        = $app['other_income_select'];
    $description_other_income                   = $app['description_other_income'];
    $forseen_changes_employment_select          = $app['forseen_changes_employment_select'];
    $forseen_changes_employment_detail          = $app['forseen_changes_employment_detail'];


}
else{
    
    $income_net_after_tax                       = "";
    $income_net_after_tax_select                = "";
    $spouse_income                              = "";
    $other_income                               = "";
    $other_income_select                        = "";
    $description_other_income                   = "";
    $forseen_changes_employment_select          = "";
    $forseen_changes_employment_detail          = "";

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
<!--            <h1><i class='fa fa-check'></i>L</h1>-->
        </div>
        <!-- Page Heading End-->

        <!-- Your awesome content goes here -->
        <div class="widget">
            <div class="widget-header transparent">
                <h2><strong>Income Section</strong></h2>
                <div class="additional-btn">
                    <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                    <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                </div>
            </div>
            <div class="widget-content padding">
                <form id="add-step4"  method="post" enctype="multipart/form-data" class="form-horizontal" role="form">

                    <div class="form-group">
                        <h4>INCOME</h4>
                    </div>
                <div class="widget">
                    <div class="form-group">
                        <label for="input-text-help" class="col-sm-2 control-label">Income (Net) After Tax</label>
                     <div class="col-sm-10">
                            <input type="text" class="form-control" id="income_net_after_tax" name="income_net_after_tax" value="<?=$income_net_after_tax?>"  placeholder="">
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="income_net_after_tax_error"></span>

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Per</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="income_net_after_tax_select" name="income_net_after_tax_select">
                                <option value="" disabled>Select</option>
                                                          
                                <option value="week"<?=$income_net_after_tax_select == 'week' ? ' selected="selected"' : '';?>>Week</option>

                                <option value="fortnight"<?=$income_net_after_tax_select == 'fortnight' ? ' selected="selected"' : '';?>>Fortnight</option>

                                <option value="month"<?=$income_net_after_tax_select == 'month' ? ' selected="selected"' : '';?>>Month</option>

                                <option value="year"<?=$income_net_after_tax_select == 'year' ? ' selected="selected"' : '';?>>Year</option>
                                                                
                            </select>
                        </div>
                    </div>

                    </div>


                    <div class="form-group">
                        <label for="input-text-help" class="col-sm-2 control-label">Spouse Income<br><small>(If Applicable)</small></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="spouse_income" name="spouse_income" value="<?=$spouse_income?>"  placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Per</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="income_net_after_tax_select" name="income_net_after_tax_select">
                                <option value="" disabled>Select</option>
                                                          
                                <option value="week"<?=$spouse_income_select== 'week' ? ' selected="selected"' : '';?>>Week</option>

                                <option value="fortnight"<?=$spouse_income_select == 'fortnight' ? ' selected="selected"' : '';?>>Fortnight</option>

                                <option value="month"<?=$spouse_income_select == 'month' ? ' selected="selected"' : '';?>>Month</option>

                                <option value="year"<?=$spouse_income_select == 'year' ? ' selected="selected"' : '';?>>Year</option>
                                                                
                            </select>
                        </div>
                    </div>
                    <input type="hidden" name="application_id" value="<?=$_SESSION['application_id']?>">
                    <div class="form-group">
                        <label for="input-text-help" class="col-sm-2 control-label">Other Income (Net) After tax<br> <small>Rental Income, Centerlink other income</small></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="other_income" name="other_income" value="<?=$other_income?>"  placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Per</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="other_income_select" name="other_income_select">
                                <option value="" disabled>Select</option>
                                                          
                                <option value="week"<?=$other_income_select == 'week' ? ' selected="selected"' : '';?>>Week</option>

                                <option value="fortnight"<?=$other_income_select == 'fortnight' ? ' selected="selected"' : '';?>>Fortnight</option>

                                <option value="month"<?=$other_income_select == 'month' ? ' selected="selected"' : '';?>>Month</option>

                                <option value="year"<?=$other_income_select == 'year' ? ' selected="selected"' : '';?>>Year</option>
                                                                
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="input-text-help" class="col-sm-2 control-label">Description Of Other Income</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="description_other_income" name="description_other_income" value="<?=$description_other_income?>"  placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Any Foreseen Changes In Income or employemnt:</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="forseen_changes_employment_select" name="forseen_changes_employment_select">
                                <option value="" disabled>Select</option>
                                                          
                                <option value="yes"<?=$forseen_changes_employment_select == 'yes' ? ' selected="selected"' : '';?>>Yes</option>

                                <option value="no"<?=$forseen_changes_employment_select == 'no' ? ' selected="selected"' : '';?>>No</option>
                                                                
                            </select>
                        </div>
                    </div>
                   

                    <div class="form-group">
                        <label for="input-text-help" class="col-sm-2 control-label">If Yes Please Specify</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="forseen_changes_employment_detail" name="forseen_changes_employment_detail" value="<?=$forseen_changes_employment_detail?>"  placeholder="">
                        </div>
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
<script src="assets/js/individual-step4.js"></script>
<?php
include 'footer.php';
?>
