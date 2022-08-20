
<?php  include 'header.php';
//if(isset($_GET['application_id']))
// {
//     $_SESSION['application_id'] = $_GET['application_id'];
//     $broker  = DB::queryFirstRow("select * from new_application where id = '". $_SESSION['application_id']."'");
//     $_SESSION['broker_id'] = $broker['broker_id'];

//     if(empty($_SESSION['customer_id']))
//     {
//         $customer_id     =   "";
//     }
//     else{
//         $customer_id     =    $_SESSION['customer_id'];
//     }
// }
$no_of_credit_cards  = DB::queryFirstRow("select id,application_id,no_of_credit_cards from  new_application_customer where id = '". $_SESSION['application_id']."'");

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
            <h1><i class='fa fa-check'></i> Forms</h1>
        </div>
        <!-- Page Heading End-->

        <!-- Your awesome content goes here -->
        <div class="widget">
            <div class="widget-header transparent">
                <h2><strong>Leads Section</strong></h2>
                <div class="additional-btn">
                    <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                    <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                </div>
            </div>
            <div class="widget-content padding">
                <form id="add-client"  method="post" enctype="multipart/form-data" class="form-horizontal" role="form">


                    <input type="hidden" value="<?=$broker['no_of_applicant']?>" id="no_of_applicant" name="no_of_applicant">>
                    <br><br>
                    <button type="submit" id="personal-button" class="btn btn-primary">Add</button>

                    <div id="personal_loan_div">
                         <?php
                            $app1 = DB::query("select * from new_application_liabilities_personal_loans where application_id = '".$_SESSION['application_id']."'");
                            if(DB::count() != 0)
                            {
                                foreach($app1 as $ap)
                                { ?>

                                    <div class="form-group">
                                       <label for="input-text-help" class="col-sm-2 control-label">Outstanding Balance:</label>
                                        <div class="col-sm-10">
                                           <input type="text" class="form-control" name="personal_loans_outstanding_balan[]" value="<?=$ap['investment_properties_estimated_value']?>"  placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                       <label for="input-text-help" class="col-sm-2 control-label">Repayments</label>
                                        <div class="col-sm-10">
                                           <input type="text" class="form-control" name="investment_properties_repayments[]" value="<?=$ap['investment_properties_repayments']?>"  placeholder="">
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="form-group">
                                       <label class="col-sm-2 control-label">Per</label>
                                       <div class="col-sm-10">
                                            <select class="form-control" name="personal_loans_repayments_select[]">
                                               <option value="" disabled>Select</option>
                                                          
                                               <option value="week"<?=$ap['personal_loans_repayments_select'] == 'week' ? ' selected="selected"' : '';?>>Week</option>

                                               <option value="fortnight"<?=$ap['personal_loans_repayments_select'] == 'fortnight' ? ' selected="selected"' : '';?>>Fortnight</option>

                                               <option value="month"<?=$ap['personal_loans_repayments_select'] == 'month' ? ' selected="selected"' : '';?>>Month</option>

                                               <option value="year"<?=$ap['personal_loans_repayments_select'] == 'year' ? ' selected="selected"' : '';?>>Year</option>
                                                                
                                            </select>

                                        </div>
                                    </div> 
                                     <button type="submit" class="btn btn-primary">Remove</button> 


                                    <div class="form-group">
                                       <label for="input-text-help" class="col-sm-2 control-label">Lender/Bank</label>
                                        <div class="col-sm-10">
                                           <input type="text" class="form-control" name="personal_loans_lender_bank[]" value="<?=$ap['personal_loans_lender_bank']?>"  placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                       <label for="input-text-help" class="col-sm-2 control-label">Description</label>
                                        <div class="col-sm-10">
                                           <input type="text" class="form-control" name="personal_loans_description[]" value="<?=$ap['personal_loans_description']?>"  placeholder="">
                                        </div>
                                    </div>    

                                <?php
                                }

                            }
                            ?>        
                    </div>
                    <br><br>

                    <button type="submit" id="secured-button" class="btn btn-primary">Add</button>

                    <input type="hidden" name="application_id" value="<?=$_SESSION['application_id']?>">
                    <div id="secured_loan_div">
                         <?php
                            $app1 = DB::query("select * from new_application_liabilities_secured_loans where application_id = '".$_SESSION['application_id']."'");
                            if(DB::count() != 0)
                            {
                                foreach($app1 as $ap)
                                { ?>

                                    <div class="form-group">
                                       <label for="input-text-help" class="col-sm-2 control-label">Outstanding Balance:</label>
                                        <div class="col-sm-10">
                                           <input type="text" class="form-control" name="secured_loans_outstanding_balan[]" value="<?=$ap['secured_loans_outstanding_balan']?>"  placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                       <label for="input-text-help" class="col-sm-2 control-label">Repayments</label>
                                        <div class="col-sm-10">
                                           <input type="text" class="form-control" name="secured_properties_repayments[]" value="<?=$ap['secured_properties_repayments']?>"  placeholder="">
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="form-group">
                                       <label class="col-sm-2 control-label">Per</label>
                                       <div class="col-sm-10">
                                            <select class="form-control" name="secured_loans_repayments_select[]">
                                               <option value="" disabled>Select</option>
                                                          
                                               <option value="week"<?=$ap['secured_loans_repayments_select'] == 'week' ? ' selected="selected"' : '';?>>Week</option>

                                               <option value="fortnight"<?=$ap['secured_loans_repayments_select'] == 'fortnight' ? ' selected="selected"' : '';?>>Fortnight</option>

                                               <option value="month"<?=$ap['secured_loans_repayments_select'] == 'month' ? ' selected="selected"' : '';?>>Month</option>

                                               <option value="year"<?=$ap['secured_loans_repayments_select'] == 'year' ? ' selected="selected"' : '';?>>Year</option>
                                                                
                                            </select>

                                        </div>
                                    </div> 
                                     <button type="submit" class="btn btn-primary">Remove</button> 


                                    <div class="form-group">
                                       <label for="input-text-help" class="col-sm-2 control-label">Lender/Bank</label>
                                        <div class="col-sm-10">
                                           <input type="text" class="form-control" name="secured_loans_lender_bank[]" value="<?=$ap['secured_loans_lender_bank']?>"  placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                       <label for="input-text-help" class="col-sm-2 control-label">Description</label>
                                        <div class="col-sm-10">
                                           <input type="text" class="form-control" name="secured_loans_description[]" value="<?=$ap['secured_loans_description']?>"  placeholder="">
                                        </div>
                                    </div>    

                                <?php
                                }

                            }
                            ?>        
                    </div>
                    <br><br>

                    <div class="form-group">
                            <div class="col-sm-10">
                                <input type="text" id="no_of_credit_cards" class="form-control" name="no_of_credit_cards" value="<?=$no_of_credit_cards['no_of_credit_cards']?>" pattern="\d*" maxlength="1" onchange="show_credit_card_div()" placeholder="">
                            </div>
                    </div>

                    <div id="main_credit_card_div">
                         <?php
                            $app1 = DB::query("select * from new_application_credit_cards where application_id = '".$_SESSION['application_id']."'");
                            if(DB::count() != 0)
                            {
                                foreach($app1 as $ap)
                                { ?>

                                    <div class="form-group">
                                       <label for="input-text-help" class="col-sm-2 control-label">Bank/Type:</label>
                                        <div class="col-sm-10">
                                           <input type="text" class="form-control" name="bank_type" value="<?=$ap['bank_type']?>"  placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                       <label for="input-text-help" class="col-sm-2 control-label">Limit:</label>
                                        <div class="col-sm-10">
                                           <input type="text" class="form-control" name="card_limit" value="<?=$ap['card_limit']?>"  placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                       <label for="input-text-help" class="col-sm-2 control-label">Outstanding Balance:</label>
                                        <div class="col-sm-10">
                                           <input type="text" class="form-control" name="outstanding_balance" value="<?=$ap['outstanding_balance']?>"  placeholder="">
                                        </div>
                                    </div>
                                    
                                    
                                    
                                     

                                <?php
                                }
                            }
                            ?> 

                    </div>
                    <br><br>
                               <button type="submit" class="btn btn-primary">Next</button>  


                                
                    
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
<script src="assets/js/individual-step7.js"></script>
<?php
include 'footer.php';
?>

<script type="text/javascript">

    function show_credit_card_div(){
        var value = $("#no_of_credit_cards").val();

        var str = '';
        for (i = 0; i < value; i++) {
            str += '<div class="form-group row">' +
                '                                        <div class="col-md-2">' +
                '                                            <label>Bank/Type:</label>' +
                '                                        </div>' +
                
                '                                        <div class="col-md-2">' +
                '                                            <input  name="bank_type[]" type="text" class="form-control" placeholder="">' +
                '                                        </div>' +
                
                
                '                                        <div class="col-md-1">' +
                '                                            <label>Limit:</label>' +
                '                                        </div>' +
                
                '                                        <div class="col-md-2">' +
                '                                            <input  name="card_limit[]" type="text" class="form-control" placeholder="">' +
                '                                        </div>' +
                
                
                '                                        <div class="col-md-1">' +
                '                                            <label>Outstanding Balance:</label>' +
                '                                        </div>' +
                
                '                                        <div class="col-md-2">' +
                '                                            <input  name="outstanding_balance[]" type="text" class="form-control" placeholder="">' +
                '                                        </div>' +
                '                                    </div>';
        }

        $("#main_credit_card_div").html(str);

    }




    $(document).ready(function(){
        var x = 1;
    var inputFieldPersonalLoan = ' <div class="ahmad">' +
        ' <div class="form-group row">' +
        '                                            <div class="col-md-2">' +
        '                                                <label>Outstanding Balance:</label>' +
        '                                            </div>' +
        
        
        '                                            <div class="col-md-2">' +
        '                                                <input  name="personal_loans_outstanding_balance[]" type="text" class="form-control" placeholder="">' +
        '                                            </div>' +
        
        '                                            <div class="col-md-1">' +
        '                                                <label>Repayments</label>' +
        
        '                                            </div>' +
        '                                            <div class="col-md-2">' +
        '                                                <input  name="personal_loans_repayments[]" type="text" class="form-control" placeholder="">' +
        '                                            </div>' +
        '                                            <div class="col-md-1">' +
        '                                                <label>Per</label>' +
        '                                            </div>' +
        '                                            <div class="col-md-2">' +
        '                                                <select class="form-control"  name="personal_loans_repayments_select[]">' +
        '                                                    <option value="" disabled>Select</option>' +
        '                                                    <option value="week">Week</option>' +
        '                                                    <option value="fortnight">Fortnight</option>' +
        '                                                    <option value="month">Month</option>' +
        '                                                    <option value="year">Year</option>' +
        '                                                </select>' +
        '                                            </div>' +

        
        '                                        </div>' +

        '<div class="form-group row"> ' +
        '<div class="col-md-2">' +
        ' <label>Lender/Bank</label>' +

        '</div>' +
        '                   <div class="col-md-6">' +
        '                        <input  name="personal_loans_lender_bank[]" type="text" class="form-control" placeholder="">' +
        '                    </div>' +
        '               </div>' +



        '                                        <div class="form-group row">' +
        '                                            <div class="col-md-2">' +
        '                                                <label>Description</label>' +
        '                                            </div>' +
        '                                            <div class="col-md-7">' +
        '                                                <input  name="personal_loans_description[]" type="text" class="form-control" placeholder="">' +
        '                                            </div>' +
        '                                            <div class="col-md-2">' +
        '                                              <button  class="btn remove_personal_loan_button btn-primary mb-2" type="button">Remove</button>' +
        '                                            </div>' +
        '                                        </div></div>';


        var maxField = 5;
        $("#personal-button").click(function(){
            //Check maximum number of input fields
            if(x < maxField){
                x++; //Increment field counter
                $("#personal_loan_div").append(inputFieldPersonalLoan); //Add field html
            }
        });

        $("#personal_loan_div").on('click', '.remove_personal_loan_button', function(e){
            e.preventDefault();
            $(this).closest('.ahmad').remove();  //Remove field html
            x--; //Decrement field counter
        });





        var xS = 1;
        var inputFieldSecuredLoan = '<div class="ahmad-secured">'+
            ' <div class="form-group row">' +
            '                                            <div class="col-md-2">' +
            '                                                <label>Outstanding Balance:</label>' +
            '                                            </div>' +
            
            
            '                                            <div class="col-md-2">' +
            '                                                <input  name="secured_loans_outstanding_balance[]" type="text" class="form-control" placeholder="">' +
            '                                            </div>' +
            
            '                                            <div class="col-md-1">' +
            '                                                <label>Repayments</label>' +
            
            '                                            </div>' +
            '                                            <div class="col-md-2">' +
            '                                                <input  name="secured_loans_repayments[]" type="text" class="form-control" placeholder="">' +
            '                                            </div>' +
            '                                            <div class="col-md-1">' +
            '                                                <label>Per</label>' +
            '                                            </div>' +
            '                                            <div class="col-md-2">' +
            '                                                <select class="form-control"  name="secured_loans_repayments_select[]">' +
            '                                                    <option value="" disabled>Select</option>' +
            '                                                    <option value="week">Week</option>' +
            '                                                    <option value="fortnight">Fortnight</option>' +
            '                                                    <option value="month">Month</option>' +
            '                                                    <option value="year">Year</option>' +
            '                                                </select>' +
            '                                            </div>' +
            
            

            
            '                                        </div>' +


           ' <div class="form-group row"> ' +
        '<div class="col-md-2">' +
        ' <label>Lender/Bank</label>' +

        '</div>' +
        '                   <div class="col-md-6">' +
        '                        <input  name="secured_loans_lender_bank[]" type="text" class="form-control" placeholder="">' +
        '                    </div>' +
        '               </div>' +




            '                                        <div class="form-group row">' +
            '                                            <div class="col-md-2">' +
            '                                                <label>Description</label>' +
            '                                            </div>' +
            '                                            <div class="col-md-8">' +
            '                                                <input  name="secured_loans_description[]" type="text" class="form-control" placeholder="">' +
            '                                            </div>' +
            '                                            <div class="col-md-2">' +
            '                                              <button  class="btn remove_secured_loan_button btn-primary mb-2" type="button">Remove</button>' +
            '                                            </div>' +
            '                                        </div></div>';





        var maxFieldSecured = 5;
        $("#secured-button").click(function(){
            //Check maximum number of input fields
            if(xS < maxFieldSecured){
                xS++; //Increment field counter
                $("#secured_loan_div").append(inputFieldSecuredLoan); //Add field html
            }
        });

        $("#secured_loan_div").on('click', '.remove_secured_loan_button', function(e){
            e.preventDefault();
            $(this).closest('.ahmad-secured').remove();  //Remove field html
            xS--; //Decrement field counter
        });
        
        
        
        
        
        
        var inputFieldOthers = '   <div class="ahmad-others">' +
            '   <div class="form-group row">' +
            '                                            <div class="col-md-2">' +
            '                                                <label>Outstanding Balance:</label>' +
            '                                            </div>' +
            
            
            '                                            <div class="col-md-2">' +
            '                                                <input  name="other_liabilities_outstanding_balance[]" type="text" class="form-control" placeholder="">' +
            '                                            </div>' +
            
            '                                            <div class="col-md-1">' +
            '                                                <label>Repayments</label>' +
            
            '                                            </div>' +
            '                                            <div class="col-md-2">' +
            '                                                <input  name="other_liabilities_repayments[]" type="text" class="form-control" placeholder="">' +
            '                                            </div>' +
            '                                            <div class="col-md-1">' +
            '                                                <label>Per</label>' +
            '                                            </div>' +
            '                                            <div class="col-md-2">' +
            '                                                <select class="form-control"  name="other_liabilities_repayments_select[]">' +
            '                                                    <option value="" disabled>Select</option>' +
            '                                                    <option value="week">Week</option>' +
            '                                                    <option value="fortnight">Fortnight</option>' +
            '                                                    <option value="month">Month</option>' +
            '                                                    <option value="year">Year</option>' +
            '                                                </select>' +
            '                                            </div>' +
            '                                            </div>' +


           ' <div class="form-group row"> ' +
        '<div class="col-md-2">' +
        ' <label>Lender/Bank</label>' +

        '</div>' +
        '                   <div class="col-md-6">' +
        '                        <input  name="other_liabilities_lender_bank[]" type="text" class="form-control" placeholder="">' +
        '                    </div>' +
        '               </div>' +




            
            '                                        </div>' +
            '                                        <div class="form-group row">' +
            '                                            <div class="col-md-2">' +
            '                                                <label>Description</label>' +
            '                                            </div>' +
            '                                            <div class="col-md-8">' +
            '                                                <input  name="other_liabilities_description[]" type="text" class="form-control" placeholder="">' +
            '                                            </div>' +
            '                                            <div class="col-md-2">' +
            '                                              <button  class="btn remove_other_loan_button btn-primary mb-2" type="button">Remove</button>' +
            '                                            </div>' +
            '                                        </div></div>';

        var xO = 1;
        var maxFieldOthers = 5;
        $("#others-button").click(function(){
            //Check maximum number of input fields
            if(xO < maxFieldOthers){
                xO++; //Increment field counter
                $("#other_liabilities_div").append(inputFieldOthers); //Add field html
            }
        });

        $("#other_liabilities_div").on('click', '.remove_other_loan_button', function(e){
            e.preventDefault();
            $(this).closest('.ahmad-others').remove();  //Remove field html
            xO--; //Decrement field counter
        });

    });
</script>