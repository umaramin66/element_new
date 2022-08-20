<?php include 'new-application-header.php';

 if(isset($_GET['application_id']))
 {
     $_SESSION['application_id'] = $_GET['application_id'];
     $broker  = DB::queryFirstRow("select broker_id,applying_loan_as from new_application where id = '". $_SESSION['application_id']."'");
     $_SESSION['broker_id'] = $broker['broker_id'];
 }
$loan = DB::queryFirstRow("select * from new_application_finance_asset_detail where application_id = '". $_SESSION['application_id']."'");
if(DB::count() == 0)
{
    $loan_type                          = "";
    $loan_amount_asset_finance          = "";
    $deposit_asset_finance              = "";
    $residual_balloon_asset_finance     = "";
    $amount_asset_finance               = "";
    $loan_term                          = "";
    $asset_detail_radio                 = "";
    $asset_detail_build_year            = "";
    $asset_detail_build_year_radio      = "";
    $asset_detail_make                  = "";
    $asset_detail_make_radio            = "";
    $asset_detail_model                 = "";
    $asset_detail_model_radio           = "";
    $asset_detail_buying_from_radio     = "";
}
else{
    $loan_type                          = $loan['loan_type'];
    $loan_amount_asset_finance          = $loan['loan_amount_asset_finance'];
    $deposit_asset_finance              = $loan['deposit_asset_finance'];
    $residual_balloon_asset_finance     = $loan['residual_balloon_asset_finance'];
    $amount_asset_finance               = $loan['amount_asset_finance'];
    $loan_term                          = $loan['loan_term'];
    $asset_detail_radio                 = $loan['asset_detail_radio'];
    $asset_detail_build_year            = $loan['asset_detail_build_year'];
    $asset_detail_build_year_radio      = $loan['asset_detail_build_year_radio'];
    $asset_detail_make                  = $loan['asset_detail_make'];
    $asset_detail_make_radio            = $loan['asset_detail_make_radio'];
    $asset_detail_model                 = $loan['asset_detail_model'];
    $asset_detail_model_radio           = $loan['asset_detail_model_radio'];
    $asset_detail_buying_from_radio     = $loan['asset_detail_buying_from_radio'];


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
                <h2><strong>What do you need Loan for ?</strong></h2>
                <div class="additional-btn">
                    <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                    <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                </div>
            </div>
            <div class="widget-content padding">
                <form id="add-client8"  method="post" enctype="multipart/form-data" class="form-horizontal" role="form">




                    <div class="form-group">
                        <div class="col-sm-10">
                            <div class="radio iradio">
                                <label>
                                    <input class="iradio_square-aero icheckbox_square-aero" type="radio"  id="asset_finance"  value="asset_finance"  <?php if($loan_type == "asset_finance") { echo "checked";  }?> name="loan_type" class="form-control">
                                    ASSET FIANANCE
                                </label>
                            </div>

                    <?php  if($broker['applying_loan_as'] == 'individual') {   ?>

                            <div class="radio iradio">
                                <label>
                                    <input class="iradio_square-aero icheckbox_square-aero" type="radio"  id="personal_loan" value="personal_loan"  <?php if($loan_type == "personal_loan") { echo "checked";  }?> name="loan_type" class="form-control">
                                    PERSONAL LOAN
                                </label>
                            </div>
                    <?php } ?>

                            <div class="radio iradio">
                                <label>
                                    <input class="iradio_square-aero icheckbox_square-aero" type="radio"  id="business_loan" name="loan_type"  value="business_loan"  <?php if($loan_type == "business_loan") { echo "checked";  }?>  class="form-control">

                                    BUSINESS LOAN
                                </label>
                            </div>
                        </div>
                    </div>

                    <br><br>


                    <div id="asset_finance_box">

                        <div class="widget-header transparent">
                            <h2><strong>FINANCE DETAILS</strong></h2>

                        </div>

                        <div class="form-group">
                           <label for="input-text-help" class="col-sm-2 control-label">Loan Amount</label>
                            <div class="col-sm-10">
                               <input type="text" id="loan_amount_asset_finance" class="form-control" name="loan_amount_asset_finance" value="<?=$loan_amount_asset_finance?>"  placeholder="">
                            </div>
                        </div>

                        <div class="form-group">
                           <label for="input-text-help" class="col-sm-2 control-label">Deposit (If Any)</label>
                            <div class="col-sm-10">
                               <input type="text" class="form-control" id="deposit_asset_finance" name="deposit_asset_finance" value="<?=$deposit_asset_finance?>"  placeholder="">
                            </div>
                        </div>

                        <input type="hidden" name="application_id" value="<?=$_SESSION['application_id']?>">

                        <div class="form-group">
                           <label for="input-text-help" class="col-sm-2 control-label">Residual Balloon</label>
                            <div class="col-sm-10">
                               <input type="text" class="form-control" id="residual_balloon_asset_finance" name="residual_balloon_asset_finance" value="<?=$residual_balloon_asset_finance?>"  placeholder="">
                            </div>
                        </div>


                        <div class="form-group">
                           <label for="input-text-help" class="col-sm-2 control-label">Or Amount $</label>
                            <div class="col-sm-10">
                               <input type="text" class="form-control" id="amount_asset_finance" name="amount_asset_finance" value="<?=$amount_asset_finance?>"  placeholder="">
                            </div>
                        </div>
                        
                        <div class="form-group">
                           <label class="col-sm-2 control-label">Loan Term (Length):</label>
                           <div class="col-sm-10">
                                <select  class="form-control" id="loan_term" name="loan_term">
                                    <option value="" disabled>Select</option>
                                    <option value="1"<?=$loan_term == '1' ? ' selected="selected"' : '';?>>1</option>
                                    <option value="2"<?=$loan_term == '2' ? ' selected="selected"' : '';?>>2</option>
                                    <option value="3"<?=$loan_term == '3' ? ' selected="selected"' : '';?>>3</option>
                                    <option value="4"<?=$loan_term == '4' ? ' selected="selected"' : '';?>>4</option>
                                    <option value="5"<?=$loan_term == '5' ? ' selected="selected"' : '';?>>5</option>
                                    <option value="6"<?=$loan_term == '6' ? ' selected="selected"' : '';?>>6</option>
                                    <option value="7"<?=$loan_term == '7' ? ' selected="selected"' : '';?>>7</option>

                                </select>
                            </div>
                        </div>
                        <br><br>




                        <div class="widget-header transparent">
                            <h2><strong>ASSET DETAILS</strong></h2>

                        </div>



                        <div class="form-group">
                            <label class="col-sm-2 control-label">Buying A</label>
                            <div class="col-sm-10">
                                        <div class="radio iradio">
                                            <label>
                                                <input class="iradio_square-aero icheckbox_square-aero" type="radio"  id="asset_detail1" name="asset_detail_radio"   <?php if($asset_detail_radio=="new") { echo "checked";  }?>  value="new" class="form-control">
                                                New
                                            </label>
                                        </div>


                                        <div class="radio iradio">
                                            <label>
                                                <input class="iradio_square-aero icheckbox_square-aero" type="radio"  id="asset_detail2" name="asset_detail_radio"   <?php if($asset_detail_radio=="used") { echo "checked";  }?>  value="used" class="form-control">

                                                Used
                                            </label>
                                        </div>



                                        <div class="radio iradio">
                                            <label>
                                                <input class="iradio_square-aero icheckbox_square-aero" type="radio"  id="asset_detail3" name="asset_detail_radio"   <?php if($asset_detail_radio=="demo") { echo "checked";  }?>  value="demo" class="form-control">

                                                Demo
                                            </label>
                                        </div>
                            </div>
                        </div>
                        <br><br>











                        <div class="form-group">
                           <label  class="col-sm-2 control-label">Build Year </label>
                            <div class="col-sm-10">
                               <input type="text" class="form-control" id="asset_detail_build_year" name="asset_detail_build_year" placeholder="">
                                <div class="radio iradio">
                                    <label>
                                        <input class="iradio_square-aero icheckbox_square-aero" type="radio"  id="asset_detail_build_year_id" name="asset_detail_build_year_radio"    <?php if($asset_detail_build_year_radio=="unsure") { echo "checked";  }?>  value="unsure" class="form-control">
                                        Unsure
                                    </label>
                                </div>
                            </div>
                        </div>



                        <br><br>


                        <div class="form-group">
                           <label  class="col-sm-2 control-label">Make </label>
                            <div class="col-sm-10">
                               <input type="text" class="form-control" id="asset_detail_make" name="asset_detail_make"  value="<?=$asset_detail_make?>" placeholder="">
                                <div class="radio iradio">
                                    <label>
                                        <input class="iradio_square-aero icheckbox_square-aero" type="radio"  id="asset_detail_make_id" name="asset_detail_make_radio"    <?php if($asset_detail_make_radio == "unsure") { echo "checked";  }?>  value="unsure" class="form-control">
                                        Unsure
                                    </label>
                                </div>
                            </div>
                        </div>


                        <br><br>


                        <div class="form-group">
                            <label  class="col-sm-2 control-label">Model </label>
                            <div class="col-sm-10">
                                <input class="form-control" id="asset_detail_model" value="<?=$asset_detail_model?>" name="asset_detail_model" type="text" placeholder="">
                                <div class="radio iradio">
                                    <label>
                                        <input class="iradio_square-aero icheckbox_square-aero" type="radio"  id="asset_detail_model_id" value="unsure" name="asset_detail_model_radio"    <?php if($asset_detail_model_radio == "unsure") { echo "checked";  }?>   class="form-control">
                                        Unsure
                                    </label>
                                </div>
                            </div>
                        </div>

                        <br><br>

                        <div class="form-group">
                           <label  class="col-sm-2 control-label">Buying From : </label>

                            <div class="col-sm-10">

                                <div class="radio iradio">
                                    <label>
                                        <input class="iradio_square-aero icheckbox_square-aero" type="radio"  id="asset_detail_buying_from" value="dealer"    <?php if($asset_detail_buying_from_radio=="dealer") { echo "checked";  }?>  name="asset_detail_buying_from_radio"  class="form-control">
                                        Dealer
                                    </label>
                                </div>





                                <div class="radio iradio">
                                    <label>
                                        <input class="iradio_square-aero icheckbox_square-aero" type="radio"  id="asset_detail_buying_from1"  value="private"    <?php if($asset_detail_buying_from_radio=="private") { echo "checked";  }?>  name="asset_detail_buying_from_radio"  class="form-control">
                                        Private
                                    </label>
                                </div>




                                <div class="radio iradio">
                                    <label>
                                        <input class="iradio_square-aero icheckbox_square-aero" type="radio"  id="asset_detail_buying_from2"  value="unsure"    <?php if($asset_detail_buying_from_radio=="unsure") { echo "checked";  }?>  name="asset_detail_buying_from_radio"  class="form-control">
                                        Unsure
                                    </label>
                                </div>
                            </div>

                        </div>
                    </div>
                    <br><br>



                    <div id="personal_loan_box">

                        <div class="form-group">
                           <label for="input-text-help" class="col-sm-2 control-label">Loan Amount</label>
                            <div class="col-sm-10">
                               <input type="text" id="loan_amount_personal" class="form-control" name="loan_amount_personal" value="<?=$loan_amount_asset_finance?>"  placeholder="">
                            </div>
                        </div>
                    
                        
                        <div class="form-group">
                           <label class="col-sm-2 control-label">Loan Term (Length):</label>
                           <div class="col-sm-10">
                                <select  class="form-control" id="loan_term_personal" name="loan_term_personal">
                                    <option value="" disabled>Select</option>
                                    <option value="1"<?=$loan_term == '1' ? ' selected="selected"' : '';?>>1</option>
                                    <option value="2"<?=$loan_term == '2' ? ' selected="selected"' : '';?>>2</option>
                                    <option value="3"<?=$loan_term == '3' ? ' selected="selected"' : '';?>>3</option>
                                    <option value="4"<?=$loan_term == '4' ? ' selected="selected"' : '';?>>4</option>
                                    <option value="5"<?=$loan_term == '5' ? ' selected="selected"' : '';?>>5</option>
                                    <option value="6"<?=$loan_term == '6' ? ' selected="selected"' : '';?>>6</option>
                                    <option value="7"<?=$loan_term == '7' ? ' selected="selected"' : '';?>>7</option>

                                </select>
                            </div>
                        </div>   
                    </div>


                    <br><br>

                    <div id="business_loan_box">

                        <div class="form-group">
                           <label for="input-text-help" class="col-sm-2 control-label">Loan Amount</label>
                            <div class="col-sm-10">
                               <input type="text" id="loan_amount_business" class="form-control" name="loan_amount_business" value="<?=$loan_amount_asset_finance?>"   placeholder="">
                            </div>
                        </div>
                       
                    
                        
                        <div class="form-group">
                           <label class="col-sm-2 control-label">Loan Term (Length):</label>
                           <div class="col-sm-10">
                                <select  class="form-control" id="loan_term_business" name="loan_term_business">
                                    <option value="" disabled>Select</option>
                                    <option value="1"<?=$loan_term == '1' ? ' selected="selected"' : '';?>>1</option>
                                    <option value="2"<?=$loan_term == '2' ? ' selected="selected"' : '';?>>2</option>
                                    <option value="3"<?=$loan_term == '3' ? ' selected="selected"' : '';?>>3</option>
                                    <option value="4"<?=$loan_term == '4' ? ' selected="selected"' : '';?>>4</option>
                                    <option value="5"<?=$loan_term == '5' ? ' selected="selected"' : '';?>>5</option>
                                    <option value="6"<?=$loan_term == '6' ? ' selected="selected"' : '';?>>6</option>
                                    <option value="7"<?=$loan_term == '7' ? ' selected="selected"' : '';?>>7</option>

                                </select>
                            </div>
                        </div>   
                    </div>
                    <br><br>

                    <div class="form-group">
                         <button type="submit" class="btn btn-primary">Next</button>
                        
                    </div>                 
                    
                </form>
            </div>

        </div>
        <!-- End of your awesome content -->

        <!-- Footer Start -->
        <footer>
            Element &copy; 2020
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

            <?php if(empty($loan_type )) {  ?>
            $("#asset_finance_box").hide();
            $("#personal_loan_box").hide();
            $("#business_loan_box").hide();
            <?php } ?>


            $('input[id="asset_finance"]').on("click", function(e) {


                $("#asset_finance_box").show();
                $("#personal_loan_box").hide();
                $("#business_loan_box").hide();
            });


            $('input[id="personal_loan"]').on("click", function(e) {
                $("#asset_finance_box").hide();
                $("#personal_loan_box").show();
                $("#business_loan_box").hide();
            });

            $('input[id="business_loan"]').on("click", function(e) {
                $("#asset_finance_box").hide();
                $("#personal_loan_box").hide();
                $("#business_loan_box").show();

            });


        });


    </script>
<?php
if($loan_type=="asset_finance")
{
    echo "<script>
 $(\"#asset_finance_box\").show();
            $(\"#personal_loan_box\").hide();
            $(\"#business_loan_box\").hide();
</script>";
}
else if ($loan_type=="personal_loan")
{
    echo "<script>
 $(\"#asset_finance_box\").hide();
            $(\"#personal_loan_box\").show();
            $(\"#business_loan_box\").hide();
</script>";
}
else if ($loan_type=="business_loan")
{
    echo "<script>
   $(\"#asset_finance_box\").hide();
            $(\"#personal_loan_box\").hide();
            $(\"#business_loan_box\").show();
</script>";
}
?>
<?php
include 'footer.php';
?>


