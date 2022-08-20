
<?php 
 include 'header.php';
//if(isset($_GET['application_id']))
// {
//     $_SESSION['application_id'] = $_GET['application_id'];
//     echo "as".$_SESSION['application_id'];
//     $broker  = DB::queryFirstRow("select broker_id from new_application where id = '". $_SESSION['application_id']."'");
//     $_SESSION['broker_id'] = $broker['broker_id'];

// }
// if(empty($_SESSION['application_id']))
// {
//     echo "<script>alert('Something Went Wrong, You are redirecting back to dashboard'); </script>";
//     if(!empty($_SESSION['broker_id']))
//     {
//         echo "<script>window.location.href='index.php'</script>";
//     }
//     else{
//         echo "<script>window.location.href='logout.php'</script>";
//     }

// }

//  $app5 = DB::query("select * from new_application_employement where application_id = //'".$_SESSION['application_id']."'");

// $count = DB::count();
// $arr = [];

// foreach($app5 as $app6)
// {
//     $arr[] = $app6['id'];
// }
// $counter = 0;
// $counter3 = "";
// $counter1 = "";
// $counter2 = "";
// foreach($arr as $id)
// {
//     if($counter == 0)
//     {
//         $counter1 = $id;
//     }
//     if($counter == 1)
//     {
//         $counter2 = $id;
//     }
//     if($counter == 2)
//     {
//         $counter3 = $id;
//     }
//     $counter++;


// }

//echo $counter1;
//echo $counter2;
//echo $counter3;

if(!empty($counter1))
{
    $app = DB::queryFirstRow("select * from new_application_employement where application_id = '".$_SESSION['application_id']."' and id = '$counter1'");
    if(DB::count() != 0)
    {
        $type_of_employment                 = $app['type_of_employment'];
        $job_title                          = $app['job_title'];
        $company_business_name              = $app['company_business_name'];
        $company_address                    = $app['company_address'];
        $manager_hr_name                    = $app['manager_hr_name'];
        $manager_hr_contact_no              = $app['manager_hr_contact_no'];
        $type_of_employment_month           = $app['type_of_employment_month'];
        $type_of_employment_year           = $app['type_of_employment_year'];

    }
    else{
        $type_of_employment         = "";
        $job_title                  = "";
        $company_business_name      = "";
        $company_address            = "";
        $manager_hr_name            = "";
        $manager_hr_contact_no      = "";
        $type_of_employment_month   = "";
        $type_of_employment_year    = "";

    }
}


$type_of_employment1         = "";
$job_title1                  = "";
$company_business_name1      = "";
$company_address1            = "";
$manager_hr_name1            = "";
$manager_hr_contact_no1      = "";
$type_of_employment_month1   = "";
$type_of_employment_year1    = "";


if(!empty($counter2))
{
    $app = DB::queryFirstRow("select * from new_application_employement where application_id = '".$_SESSION['application_id']."' and id = '$counter2'");
    if(DB::count() != 0)
    {
        $type_of_employment1                 = $app['type_of_employment'];
        $job_title1                          = $app['job_title'];
        $company_business_name1              = $app['company_business_name'];
        $company_address1                    = $app['company_address'];
        $manager_hr_name1                    = $app['manager_hr_name'];
        $manager_hr_contact_no1              = $app['manager_hr_contact_no'];
        $type_of_employment_month1           = $app['type_of_employment_month'];
        $type_of_employment_year1            = $app['type_of_employment_year'];

    }
    else{
        $type_of_employment1         = "";
        $job_title1                  = "";
        $company_business_name1      = "";
        $company_address1            = "";
        $manager_hr_name1            = "";
        $manager_hr_contact_no1      = "";
        $type_of_employment_month1   = "";
        $type_of_employment_year1    = "";

    }
}
$type_of_employment2         = "";
$job_title2                  = "";
$company_business_name2      = "";
$company_address2            = "";
$manager_hr_name2            = "";
$manager_hr_contact_no2      = "";
$type_of_employment_month2   = "";
$type_of_employment_year2    = "";


if(!empty($counter3))
{
    $app = DB::queryFirstRow("select * from new_application_employement where application_id = '".$_SESSION['application_id']."' and id = '$counter3'");
    if(DB::count() != 0)
    {
        $type_of_employment2                 = $app['type_of_employment'];
        $job_title2                          = $app['job_title'];
        $company_business_name2              = $app['company_business_name'];
        $company_address2                    = $app['company_address'];
        $manager_hr_name2                    = $app['manager_hr_name'];
        $manager_hr_contact_no2              = $app['manager_hr_contact_no'];
        $type_of_employment_month2           = $app['type_of_employment_month'];
        $type_of_employment_year2            = $app['type_of_employment_year'];

    }
    else{
        $type_of_employment2         = "";
        $job_title2                  = "";
        $company_business_name2      = "";
        $company_address2            = "";
        $manager_hr_name2            = "";
        $manager_hr_contact_no2      = "";
        $type_of_employment_month2   = "";
        $type_of_employment_year2    = "";

    }
}



?>


<html>
<
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

                    
                    <div id="current-employment">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Type of employment:</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="type_of_employment" name="type_of_employment[]">
                                        <option value="" disabled>Select</option>
                                                  
                                        <option value="full_time"<?=$type_of_employment == 'full_time' ? ' selected="selected"' : '';?>>Full Time</option>

                                        <option value="part_time"<?=$type_of_employment == 'part_time' ? ' selected="selected"' : '';?>>Part Time</option>
                                                     
                                        <option value="casual"<?=$type_of_employment == 'casual' ? ' selected="selected"' : '';?>>Casual</option>

                                        <option value="contract"<?=$type_of_employment == 'contract' ? ' selected="selected"' : '';?>>Contract</option>
                                                        
                                </select>

                            </div>
                        </div>



                        <div class="form-group">
                            <label for="input-text-help" class="col-sm-2 control-label">Job Title </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="job_title" name="job_title[]" value="<?=$job_title?>"  placeholder="Job Title">
                                <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="job_title_error"></span>

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="input-text-help" class="col-sm-2 control-label">Company/Business Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="company_business_name" name="company_business_name[]" value="<?=$company_business_name?>"  placeholder="company Business Name">
                               <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="company_business_name_error"></span>
                                <!--<p class="help-block">Example block-level help text here.</p>-->
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="input-text-help" class="col-sm-2 control-label">Company Address:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="company_address" name="company_address[]" value="<?=$company_address?>"  placeholder="Company Address">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="input-text-help" class="col-sm-2 control-label">Manager/HR Name:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="manager_hr_name" name="manager_hr_name[]" value="<?=$manager_hr_name?>"  placeholder="Manager/HR Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword" class="col-sm-2 control-label">Contact No</label>
                            <div class="col-sm-10">
                                <input type="text" value="<?=$manager_hr_contact_no?>" class="form-control" id="manager_hr_contact_no" name="manager_hr_contact_no" placeholder="Contact No">
                            </div>
                        </div>


                            <div class="form-group">
                                <label class="col-sm-2 control-label">Began Employment:</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="type_of_employment_month" name="type_of_employment_month[]">
                                            <option value="" disabled>Month</option>
                                                      
                                            <option value="January"<?=$type_of_employment_month == 'January' ? ' selected="selected"' : '';?>>January</option>

                                            <option value="Feburary"<?=$type_of_employment_month == 'Feburary' ? ' selected="selected"' : '';?>>Feburary</option>

                                            <option value="March"<?=$type_of_employment_month == 'March' ? ' selected="selected"' : '';?>>March</option>
                                            <option value="April"<?=$type_of_employment_month == 'April' ? ' selected="selected"' : '';?>>April</option>

                                            <option value="May"<?=$type_of_employment_month == 'May' ? 'selected="selected"' : '';?>>May</option>

                                            <option value="June"<?=$type_of_employment_month == 'June' ? 'selected="selected"' : '';?>>June</option>

                                            <option value="July"<?=$type_of_employment_month == 'July' ? 'selected="selected"' : '';?>>July</option>

                                            <option value="August"<?=$type_of_employment_month == 'August' ? 'selected="selected"' : '';?>>August</option>

                                            <option value="September"<?=$type_of_employment_month == 'September' ? ' selected="selected"' : '';?>>September</option>

                                            <option value="October"<?=$type_of_employment_month == 'October' ? ' selected="selected"' : '';?>>October</option>

                                            <option value="November"<?=$type_of_employment_month == 'November' ? ' selected="selected"' : '';?>>November</option>

                                            <option value="december"<?=$type_of_employment_month == 'december' ? ' selected="selected"' : '';?>>December</option>
                                                            
                                    </select>
                                </div> 
                                <div class="col-sm-2"></div>
                                    <div class="col-sm-10">
                                        <select onchange="open_panel()" class="form-control" id="type_of_employment_year" name="type_of_employment_year[]">
                                                <option value="" disabled>Years</option>
                                                          
                                                 <option value="2020"<?=$type_of_employment_year == '2020' ? ' selected="selected"' : '';?>>2020</option>

                                                <option value="F2019"<?=$type_of_employment_year == '2019' ? ' selected="selected"' : '';?>>2019</option>

                                                <option value="2018"<?=$type_of_employment_year == '2018' ? ' selected="selected"' : '';?>>2018</option>
                                                <option value="2017"<?=$type_of_employment_year == '2017' ? ' selected="selected"' : '';?>>2017</option>

                                                <option value="2016"<?=$type_of_employment_year == '2016' ? 'selected="selected"' : '';?>>2016</option>

                                                <option value="2015"<?=$type_of_employment_year == '2015' ? 'selected="selected"' : '';?>>2015</option>

                                                <option value="2014"<?=$type_of_employment_year == '2014' ? 'selected="selected"' : '';?>>2014</option>

                                                <option value="2013"<?=$type_of_employment_year == '2013' ? 'selected="selected"' : '';?>>2013</option>

                                                <option value="2012"<?=$type_of_employment_year == '2012' ? ' selected="selected"' : '';?>>2012</option>

                                                <option value="2011"<?=$type_of_employment_year == '2011' ? ' selected="selected"' : '';?>>2011</option>

                                                <option value="2010"<?=$type_of_employment_year == '2010' ? ' selected="selected"' : '';?>>2010</option>

                                                <option value="2009"<?=$type_of_employment_year == '2009' ? ' select="selected"' : '';?>>2009</option>                  
                                        </select>
                                    </div>                                
                            </div>     
                            
                    </div>
                     <input type="hidden" name="application_id" value="<?=$_SESSION['application_id']?>"><br><br>
                    <div id="previous-employment1">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Type of employment:</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="type_of_employment1" name="type_of_employment[]">
                                        <option value="" disabled>Select</option>
                                                  
                                        <option value="full_time"<?=$type_of_employment1 == 'full_time' ? ' selected="selected"' : '';?>>Full Time</option>

                                        <option value="part_time"<?=$type_of_employment1 == 'part_time' ? ' selected="selected"' : '';?>>Part Time</option>
                                                     
                                        <option value="casual"<?=$type_of_employment1 == 'casual' ? ' selected="selected"' : '';?>>Casual</option>

                                        <option value="contract"<?=$type_of_employment1 == 'contract' ? ' selected="selected"' : '';?>>Contract</option>
                                                        
                                </select>

                            </div>

                        </div>



                        <div class="form-group">
                            <label for="input-text-help" class="col-sm-2 control-label">Job Title </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="job_title1" name="job_title[]" value="<?=$job_title1?>"  placeholder="Job Title">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="input-text-help" class="col-sm-2 control-label">Company/Business Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="company_business_name1" name="company_business_name[]" value="<?=$company_business_name1?>"  placeholder="company Business Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="input-text-help" class="col-sm-2 control-label">Company Address:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="company_address1" name="company_address[]" value="<?=$company_address1?>"  placeholder="Company Address">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="input-text-help" class="col-sm-2 control-label">Manager/HR Name:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="manager_hr_name1" name="manager_hr_name[]" value="<?=$manager_hr_name1?>"  placeholder="Manager/HR Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword" class="col-sm-2 control-label">Contact No</label>
                            <div class="col-sm-10">
                                <input type="text" value="<?=$manager_hr_contact_no1?>" class="form-control" id="manager_hr_contact_no1" name="manager_hr_contact_no" placeholder="Contact No">
                            </div>
                        </div>


                            <div class="form-group">
                                <label class="col-sm-2 control-label">Began Employment:</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="type_of_employment_month1" name="type_of_employment_month[]">
                                            <option value="" disabled>Month</option>
                                                      
                                            <option value="January"<?=$type_of_employment_month1 == 'January' ? ' selected="selected"' : '';?>>January</option>

                                            <option value="Feburary"<?=$type_of_employment_month1 == 'Feburary' ? ' selected="selected"' : '';?>>Feburary</option>

                                            <option value="March"<?=$type_of_employment_month1 == 'March' ? ' selected="selected"' : '';?>>March</option>
                                            <option value="April"<?=$type_of_employment_month1 == 'April' ? ' selected="selected"' : '';?>>April</option>

                                            <option value="May"<?=$type_of_employment_month1 == 'May' ? 'selected="selected"' : '';?>>May</option>

                                            <option value="June"<?=$type_of_employment_month1 == 'June' ? 'selected="selected"' : '';?>>June</option>

                                            <option value="July"<?=$type_of_employment_month1 == 'July' ? 'selected="selected"' : '';?>>July</option>

                                            <option value="August"<?=$type_of_employment_month1 == 'August' ? 'selected="selected"' : '';?>>August</option>

                                            <option value="September"<?=$type_of_employment_month1 == 'September' ? ' selected="selected"' : '';?>>September</option>

                                            <option value="October"<?=$type_of_employment_month1 == 'October' ? ' selected="selected"' : '';?>>October</option>

                                            <option value="November"<?=$type_of_employment_month1 == 'November' ? ' selected="selected"' : '';?>>November</option>

                                            <option value="december"<?=$type_of_employment_month1 == 'december' ? ' selected="selected"' : '';?>>December</option>
                                                            
                                    </select>
                                </div>
                                <div class="col-sm-2"></div>     
                                <div class="col-sm-10">
                                    <select onchange="open_panel2()" class="form-control" id="type_of_employment_year1" name="type_of_employment_year[]">
                                        <option value="" disabled>Years</option>
                                                  
                                         <option value="2020"<?=$type_of_employment_year1 == '2020' ? ' selected="selected"' : '';?>>2020</option>

                                        <option value="F2019"<?=$type_of_employment_year1 == '2019' ? ' selected="selected"' : '';?>>2019</option>

                                        <option value="2018"<?=$type_of_employment_year1 == '2018' ? ' selected="selected"' : '';?>>2018</option>
                                        <option value="2017"<?=$type_of_employment_year1 == '2017' ? ' selected="selected"' : '';?>>2017</option>

                                        <option value="2016"<?=$type_of_employment_year1 == '2016' ? 'selected="selected"' : '';?>>2016</option>

                                        <option value="2015"<?=$type_of_employment_year1 == '2015' ? 'selected="selected"' : '';?>>2015</option>

                                        <option value="2014"<?=$type_of_employment_year1 == '2014' ? 'selected="selected"' : '';?>>2014</option>

                                        <option value="2013"<?=$type_of_employment_year1 == '2013' ? 'selected="selected"' : '';?>>2013</option>

                                        <option value="2012"<?=$type_of_employment_year1 == '2012' ? ' selected="selected"' : '';?>>2012</option>

                                        <option value="2011"<?=$type_of_employment_year1 == '2011' ? ' selected="selected"' : '';?>>2011</option>

                                        <option value="2010"<?=$type_of_employment_year1 == '2010' ? ' selected="selected"' : '';?>>2010</option>

                                        <option value="2009"<?=$type_of_employment_year1 == '2009' ? ' select="selected"' : '';?>>2009</option>
                                                        
                                    </select>
                                </div>
                            </div>
                            
                    </div><br><br>
                    <div id="previous-employment2">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Type of employment:</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="type_of_employment2" name="type_of_employment[]">
                                        <option value="" disabled>Select</option>
                                                  
                                        <option value="full_time"<?=$type_of_employment2 == 'full_time' ? ' selected="selected"' : '';?>>Full Time</option>

                                        <option value="part_time"<?=$type_of_employment2 == 'part_time' ? ' selected="selected"' : '';?>>Part Time</option>
                                                     
                                        <option value="casual"<?=$type_of_employment2 == 'casual' ? ' selected="selected"' : '';?>>Casual</option>

                                        <option value="contract"<?=$type_of_employment2 == 'contract' ? ' selected="selected"' : '';?>>Contract</option>
                                                        
                                </select>

                            </div>
                        </div>



                        <div class="form-group">
                            <label for="input-text-help" class="col-sm-2 control-label">Job Title </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="job_title2" name="job_title[]" value="<?=$job_title1?>"  placeholder="Job Title">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="input-text-help" class="col-sm-2 control-label">Company/Business Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="company_business_name2" name="company_business_name[]" value="<?=$company_business_name1?>"  placeholder="company Business Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="input-text-help" class="col-sm-2 control-label">Company Address:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="company_address2" name="company_address[]" value="<?=$company_address2?>"  placeholder="Company Address">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="input-text-help" class="col-sm-2 control-label">Manager/HR Name:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="manager_hr_name2" name="manager_hr_name[]" value="<?=$manager_hr_name2?>"  placeholder="Manager/HR Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword" class="col-sm-2 control-label">Contact No</label>
                            <div class="col-sm-10">
                                <input type="text" value="<?=$manager_hr_contact_no2?>" class="form-control" id="manager_hr_contact_no2" name="manager_hr_contact_no" placeholder="Contact No">
                            </div>
                        </div>


                            <div class="form-group">
                                <label class="col-sm-2 control-label">Began Employment:</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="type_of_employment_month2" name="type_of_employment_month[]">
                                            <option value="" disabled>Month</option>
                                                      
                                            <option value="January"<?=$type_of_employment_month2 == 'January' ? ' selected="selected"' : '';?>>January</option>

                                            <option value="Feburary"<?=$type_of_employment_month2 == 'Feburary' ? ' selected="selected"' : '';?>>Feburary</option>

                                            <option value="March"<?=$type_of_employment_month2 == 'March' ? ' selected="selected"' : '';?>>March</option>
                                            <option value="April"<?=$type_of_employment_month2 == 'April' ? ' selected="selected"' : '';?>>April</option>

                                            <option value="May"<?=$type_of_employment_month2 == 'May' ? 'selected="selected"' : '';?>>May</option>

                                            <option value="June"<?=$type_of_employment_month2 == 'June' ? 'selected="selected"' : '';?>>June</option>

                                            <option value="July"<?=$type_of_employment_month2 == 'July' ? 'selected="selected"' : '';?>>July</option>

                                            <option value="August"<?=$type_of_employment_month2 == 'August' ? 'selected="selected"' : '';?>>August</option>

                                            <option value="September"<?=$type_of_employment_month2 == 'September' ? ' selected="selected"' : '';?>>September</option>

                                            <option value="October"<?=$type_of_employment_month2 == 'October' ? ' selected="selected"' : '';?>>October</option>

                                            <option value="November"<?=$type_of_employment_month2 == 'November' ? ' selected="selected"' : '';?>>November</option>

                                            <option value="december"<?=$type_of_employment_month2 == 'december' ? ' selected="selected"' : '';?>>December</option>
                                                            
                                    </select>
                                </div>
                                <div class="col-sm-2"></div>    
                                <div class="col-sm-10">
                                    <select class="form-control" id="type_of_employment_year2" name="type_of_employment_year[]">
                                        <option value="" disabled>Years</option>
                                                  
                                         <option value="2020"<?=$type_of_employment_year2 == '2020' ? ' selected="selected"' : '';?>>2020</option>

                                        <option value="F2019"<?=$type_of_employment_year2 == '2019' ? ' selected="selected"' : '';?>>2019</option>

                                        <option value="2018"<?=$type_of_employment_year2 == '2018' ? ' selected="selected"' : '';?>>2018</option>
                                        <option value="2017"<?=$type_of_employment_year2 == '2017' ? ' selected="selected"' : '';?>>2017</option>

                                        <option value="2016"<?=$type_of_employment_year2 == '2016' ? 'selected="selected"' : '';?>>2016</option>

                                        <option value="2015"<?=$type_of_employment_year2 == '2015' ? 'selected="selected"' : '';?>>2015</option>

                                        <option value="2014"<?=$type_of_employment_year2 == '2014' ? 'selected="selected"' : '';?>>2014</option>

                                        <option value="2013"<?=$type_of_employment_year2 == '2013' ? 'selected="selected"' : '';?>>2013</option>

                                        <option value="2012"<?=$type_of_employment_yea2 == '2012' ? ' selected="selected"' : '';?>>2012</option>

                                        <option value="2011"<?=$type_of_employment_year2 == '2011' ? ' selected="selected"' : '';?>>2011</option>

                                        <option value="2010"<?=$type_of_employment_year2 == '2010' ? ' selected="selected"' : '';?>>2010</option>

                                        <option value="2009"<?=$type_of_employment_year2 == '2009' ? ' select="selected"' : '';?>>2009</option>
                                                        
                                    </select>
                                </div>
                            </div> 

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
<script src="assets/js/individual-step3.js"></script>
<script>

    $("#previous-employment1").hide();
    $("#previous-employment2").hide();
    <?php
    if($count == 2)
    { ?>
        $("#previous-employment1").show();
        $("#previous-employment2").hide();
    <?php }
    if($count == 3)
    {  ?>
        $("#previous-employment1").show();
        $("#previous-employment2").show();
    <?php
    }
    ?>
    function open_panel()
    {
        var current_year = 2020;

        var year = $("#type_of_employment_year").val();


        var difference = current_year - year;


        if(difference < 3 )
        {
            $("#previous-employment1").show();
        }

        if(difference > 3)
        {
            $("#previous-employment1").hide();
            $("#previous-employment2").hide();
        }

    }


    function open_panel2()
    {

        var current_year1 = 2020;

        var year1 = $("#type_of_employment_year1").val();

        var difference1 = current_year1 - year1;

        if(difference1 < 3)
        {
            $("#previous-employment2").show();
        }

        if(difference1 > 3)
        {
            //$("#previous-employment1").hide();
            $("#previous-employment2").hide();
        }

    }
</script>
<?php
include 'footer.php';
?>