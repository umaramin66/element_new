<?php
include 'new-application-header.php';

if(isset($_GET['application_id']))
{
    $_SESSION['application_id'] = $_GET['application_id'];
    $broker  = DB::queryFirstRow("select broker_id from new_application where id = '". $_SESSION['application_id']."'");
    $_SESSION['broker_id'] = $broker['broker_id'];


    //Check user comes from backside

}
if(empty($_SESSION['application_id']))
{
    echo "<script>alert('Something Went Wrong, You are redirecting back to dashboard'); </script>";
    if(!empty($_SESSION['broker_id']))
    {
        echo "<script>window.location.href='index.php'</script>";
    }
    else{
        echo "<script>window.location.href='logout.php'</script>";
    }

}
//echo "asd : ".$_SESSION['application_id'];

$app = DB::queryFirstRow("select * from new_application_customer where application_id = '".$_SESSION['application_id']."'");
if(DB::count() != 0)
{
    $name_type                  = $app['name_type'];
    $first_name                 = $app['first_name'];
    $middle_name                = $app['middle_name'];
    $last_name                  = $app['last_name'];
    $email                      = $app['email'];
    $contact_no                 = $app['contact_no'];
    $gender                     = $app['gender'];
    $birth_date                 = $app['birth_date'];
    $marital_status             = $app['marital_status'];
    $dependant_children         = $app['dependant_children'];
    $driver_license_no          = $app['driver_license_no'];
    $state_issued               = $app['state_issued'];
    $driver_license_expiry_date = $app['driver_license_expiry_date'];
    $residence_status           = $app['residence_status'];

}
else{
    $first_name                 = "";
    $middle_name                = "";
    $name_type                  = "";
    $last_name                  = "";
    $email                      = "";
    $contact_no                 = "";
    $gender                     = "";
    $birth_date                 = "";
    $marital_status             = "";
    $dependant_children         = "";
    $driver_license_no          = "";
    $state_issued               = "";
    $driver_license_expiry_date = "";
    $residence_status           = "";


}





$app5 = DB::query("select * from new_application_address_status where application_id = '".$_SESSION['application_id']."'");

$count = DB::count();
$arr = [];

foreach($app5 as $app6)
{
    $arr[] = $app6['id'];
}
$counter = 0;
$counter3 = "";
$counter1 = "";
$counter2 = "";
foreach($arr as $id)
{
    if($counter == 0)
    {
        $counter1 = $id;
    }
    if($counter == 1)
    {
        $counter2 = $id;
    }
    if($counter == 2)
    {
        $counter3 = $id;
    }
    $counter++;


}

//echo $counter1;
//echo $counter2;
//echo $counter3;

if(!empty($counter1))
{
    $app = DB::queryFirstRow("select * from new_application_address_status where application_id = '".$_SESSION['application_id']."' and id = '$counter1'");
    if(DB::count() != 0)
    {
        $current_address                 = $app['current_address'];
        $time_at_address                 = $app['time_at_address'];


    }
    else{
        $current_address                 = "";
        $time_at_address                 = "";

    }
}


$current_address1                 = "";
$time_at_address1                 = "";



if(!empty($counter2))
{
    $app = DB::queryFirstRow("select * from new_application_address_status where application_id = '".$_SESSION['application_id']."' and id = '$counter2'");
    if(DB::count() != 0)
    {
        $current_address1                 = $app['current_address'];
        $time_at_address1                 = $app['time_at_address'];


    }
    else{
        $current_address1                 = "";
        $time_at_address1                 = "";

    }
}

$current_address2                 = "";
$time_at_address2                 = "";



if(!empty($counter3))
{
    $app = DB::queryFirstRow("select * from new_application_address_status where application_id = '".$_SESSION['application_id']."' and id = '$counter3'");
    if(DB::count() != 0)
    {
        $current_address2                 = $app['current_address'];
        $time_at_address2                 = $app['time_at_address'];

    }
    else{

        $current_address2                 = "";
        $time_at_address2                 = "";
    }
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
                <form id="add-step2"  method="post" enctype="multipart/form-data" class="form-horizontal" role="form">

                    <div class="form-group">
                        <label class="col-sm-2 control-label">No of Applicants</label>
                        <div class="col-sm-10">
                            <select id="no_of_applicant" name="no_of_applicant" class="form-control">
                                <option value="1" disabled>Select Applicant</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select>
                            <small id="emailHelp" class="form-text text-muted">*Maximum 2</small>
                        </div>
                    </div>



                    <div class="form-group">
                        <label class="col-sm-2 control-label">No of Applicants</label>
                        <div class="col-sm-10">
                            <select id="name_type" name="name_type" class="form-control">
                                <option value="1" disabled>Select</option>
                                <option value="mr"<?=$name_type == 'mr' ? ' selected="selected"' : '';?>>Mr</option>
                                <option value="mrs"<?=$name_type == 'mrs' ? ' selected="selected"' : '';?>>Mrs</option>
                            </select>

                        </div>
                    </div>



                    <div class="form-group">
                        <label for="input-text-help" class="col-sm-2 control-label">First Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="first_name" name="first_name" value="<?=$first_name?>"  placeholder="First Name">
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="first_name_error"></span>

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="input-text-help" class="col-sm-2 control-label">Middle Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="middle_name" name="middle_name" value="<?=$middle_name?>"  placeholder="Middle Name">
                            <p class="help-block">Example block-level help text here.</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input-text-help" class="col-sm-2 control-label">Last Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="last_name" name="last_name" value="<?=$last_name?>"  placeholder="Last Name">
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="last_name_error"></span>

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputPassword" class="col-sm-2 control-label">Email address</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" value="<?=$email?>" name="email" id="email" placeholder="Email">
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="email_error"></span>

                        </div>
                    </div>




                    <div class="form-group">
                        <label for="inputPassword" class="col-sm-2 control-label">Contact No</label>
                        <div class="col-sm-10">
                            <input type="text" value="<?=$contact_no?>" class="form-control" id="contact_no" name="contact_no" placeholder="Contact No">
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="contact_no_error"></span>
                        </div>
                    </div>



                    <div class="form-group">
                        <label class="col-sm-2 control-label">Gender</label>
                        <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="gender_error"></span>
                        <div class="col-sm-10">
                            <div class="radio iradio">
                                <label>
                                    <input class="iradio_square-aero icheckbox_square-aero" type="radio" id="female" name="gender"   <?php if($gender == "female") { echo "checked";  }?>  value="female" >
                                   Female
                                </label>
                            </div>
                            <div class="radio iradio">
                                <label>
                                    <input class="iradio_square-aero icheckbox_square-aero" type="radio" name="gender" id="male" value="male">
                                   Male
                                </label>
                            </div>
                        </div>
                    </div>



                    <div class="form-group">
                        <label for="inputPassword" class="col-sm-2 control-label">Date of Birth</label>
                        <div class="col-sm-10">
                            <input type="text"  class="form-control" id="birth_date" name="birth_date" value="<?=$birth_date?>" placeholder="Date of Birth">
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="contact_no_error"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Martial Status</label>
                        <div class="col-sm-10">
                            <select id="marital_status" name="marital_status" class="form-control">
                                <option value="single">Single</option>
                                <option value="married">Married</option>
                                <option value="defacto">Defacto</option>
                            </select>

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputPassword" class="col-sm-2 control-label">No of Dependant Children</label>
                        <div class="col-sm-10">
                            <input type="text"  class="form-control" id="dependant_children" name="dependant_children" value="<?=$dependant_children?>" placeholder="Numbers of dependent Children:">

                        </div>
                    </div>


                    <div class="form-group">
                        <label for="inputPassword" class="col-sm-2 control-label">Driver license No</label>
                        <div class="col-sm-10">
                            <input id="driver_license_no" name="driver_license_no" type="text" value="<?=$driver_license_no?>" class="form-control" placeholder="Driver license no">
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="driver_license_no_error"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">State issued</label>
                        <div class="col-sm-10">
                            <select id="state_issued" name="state_issued" class="form-control">
                                <option value="1" disabled>Select</option>
                                <option value="New South Wales"<?=$state_issued == 'New South Wales' ? ' selected="selected"' : '';?>>New South Wales</option>
                                <option value="Queensland"<?=$state_issued == 'Queensland' ? ' selected="selected"' : '';?>>Queensland</option>
                                <option value="South Australia"<?=$state_issued == 'South Australia' ? ' selected="selected"' : '';?>>South Australia</option>
                                <option value="Tasmania"<?=$state_issued == 'Tasmania' ? ' selected="selected"' : '';?>>Tasmania</option>
                                <option value="Victoria"<?=$state_issued == 'Victoria' ? ' selected="selected"' : '';?>>Victoria</option>
                                <option value="Western Australia"<?=$state_issued == 'Western Australia' ? ' selected="selected"' : '';?>>Western Australia</option>
                                <option value="Australian Capital Territory"<?=$state_issued == 'Australian Capital Territory' ? ' selected="selected"' : '';?>>Australian Capital Territory</option>
                                <option value="Northern Territory"<?=$state_issued == 'Northern Territory' ? ' selected="selected"' : '';?>>Northern Territory</option>

                            </select>

                        </div>
                    </div>


                    <div class="form-group">
                        <label for="inputPassword" class="col-sm-2 control-label">Expiry Date</label>
                        <div class="col-sm-10">
                            <input id="driver_license_expiry_date" name="driver_license_expiry_date" value="<?=$driver_license_expiry_date?>" type="text" class="form-control" placeholder="Expiry Date">
                            <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="driver_license_expiry_date_error"></span>
                        </div>
                    </div>
                    <!--                                    Residence Status-->
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Residence Status:</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="residence_status" name="residence_status">
                                <option value="" disabled>Select</option>

                                <option value="fully_owned_no_mortgage"<?=$residence_status == 'fully_owned_no_mortgage' ? ' selected="selected"' : '';?>>Fully Owned (No Mortgage)</option>
                                <option value="owned_mortgage"<?=$residence_status == 'owned_mortgage' ? ' selected="selected"' : '';?>>Owned Mortgage</option>
                                <option value="renting"<?=$residence_status == 'renting' ? ' selected="selected"' : '';?>>Renting</option>
                                <option value="living_rent_free"<?=$residence_status == 'living_rent_free' ? ' selected="selected"' : '';?>>Living Rent Free (parents or family)</option>
                                <option value="boarding"<?=$residence_status == 'boarding' ? ' selected="selected"' : '';?>>Boarding</option>

                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword" class="col-sm-2 control-label">Time At The Address:</label>
                        <div class="col-sm-10">
<!--                            <input id="time_at_the_address" name="time_at_the_address[]" value="--><?//=$time_at_the_address?><!--" type="text" class="form-control" placeholder="Time at the Addresss">-->
                            <select onchange="open_panel()" class="form-control" id="time_at_address" name="time_at_address[]">
                                <option value="" disabled>Years</option>

                                <option value="2020"<?=$time_at_address == '2020' ? ' selected="selected"' : '';?>>2020</option>

                                <option value="2019"<?=$time_at_address == '2019' ? ' selected="selected"' : '';?>>2019</option>

                                <option value="2018"<?=$time_at_address == '2018' ? ' selected="selected"' : '';?>>2018</option>

                                <option value="2017"<?=$time_at_address == '2017' ? ' selected="selected"' : '';?>>2017</option>

                                <option value="2016"<?=$time_at_address == '2016' ? 'selected="selected"' : '';?>>2016</option>

                                <option value="2015"<?=$time_at_address == '2015' ? 'selected="selected"' : '';?>>2015</option>

                                <option value="2014"<?=$time_at_address == '2014' ? 'selected="selected"' : '';?>>2014</option>

                                <option value="2013"<?=$time_at_address == '2013' ? 'selected="selected"' : '';?>>2013</option>

                                <option value="2012"<?=$time_at_address == '2012' ? ' selected="selected"' : '';?>>2012</option>

                                <option value="2011"<?=$time_at_address == '2011' ? ' selected="selected"' : '';?>>2011</option>

                                <option value="2010"<?=$time_at_address == '2010' ? ' selected="selected"' : '';?>>2010</option>

                                <option value="2009"<?=$time_at_address == '2009' ? ' select="selected"' : '';?>>2009</option>
                            </select>
                        
                        
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword" class="col-sm-2 control-label">Current Address:</label>
                            <div class="col-sm-10">
                                <input id="current_address" name="current_address[]" value="<?=$current_address?>" type="text" class="form-control" placeholder="Current Address">
                                <small id="emailHelp" class="form-text text-muted">*If less than 3years please provide previous address below (minimum 3 years required)</small>
                            </div>
                    </div>

                    <div id="previous-address1">
                        <div class="form-group">
                            <label for="inputPassword" class="col-sm-2 control-label">Previous Address (If Applicable): </label>
                            <div class="col-sm-10">
                                <input id="current_address1" name="current_address[]" value="<?=$current_address1?>" type="text" class="form-control" placeholder="Current Address">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword" class="col-sm-2 control-label">Time At The Address:</label>
                            <div class="col-sm-10">
                                <!--                            <input id="time_at_the_address" name="time_at_the_address[]" value="--><?//=$time_at_the_address?><!--" type="text" class="form-control" placeholder="Time at the Addresss">-->
                                <select onchange="open_panel2()" class="form-control" id="time_at_address1" name="time_at_address[]">
                                    <option value="" disabled>Years</option>

                                    <option value="2020"<?=$time_at_address1 == '2020' ? ' selected="selected"' : '';?>>2020</option>

                                    <option value="2019"<?=$time_at_address1 == '2019' ? ' selected="selected"' : '';?>>2019</option>

                                    <option value="2018"<?=$time_at_address1 == '2018' ? ' selected="selected"' : '';?>>2018</option>

                                    <option value="2017"<?=$time_at_address1 == '2017' ? ' selected="selected"' : '';?>>2017</option>

                                    <option value="2016"<?=$time_at_address1 == '2016' ? 'selected="selected"' : '';?>>2016</option>

                                    <option value="2015"<?=$time_at_address1 == '2015' ? 'selected="selected"' : '';?>>2015</option>

                                    <option value="2014"<?=$time_at_address1 == '2014' ? 'selected="selected"' : '';?>>2014</option>

                                    <option value="2013"<?=$time_at_address1 == '2013' ? 'selected="selected"' : '';?>>2013</option>

                                    <option value="2012"<?=$time_at_address1 == '2012' ? ' selected="selected"' : '';?>>2012</option>

                                    <option value="2011"<?=$time_at_address1 == '2011' ? ' selected="selected"' : '';?>>2011</option>

                                    <option value="2010"<?=$time_at_address1 == '2010' ? ' selected="selected"' : '';?>>2010</option>

                                    <option value="2009"<?=$time_at_address1 == '2009' ? ' select="selected"' : '';?>>2009</option>
                                </select>


                            </div>
                        </div>
                    </div>
                    <div id="previous-address2">
                        <div class="form-group">
                            <label for="inputPassword" class="col-sm-2 control-label">Previous Address (If Applicable): </label>
                            <div class="col-sm-10">
                                <input id="current_address2" name="current_address[]" value="<?=$current_address2?>" type="text" class="form-control" placeholder="Current Address">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword" class="col-sm-2 control-label">Time At The Address:</label>
                            <div class="col-sm-10">
                                <!--                            <input id="time_at_the_address" name="time_at_the_address[]" value="--><?//=$time_at_the_address?><!--" type="text" class="form-control" placeholder="Time at the Addresss">-->
                                <select  class="form-control" id="time_at_address2" name="time_at_address[]">
                                    <option value="" disabled>Years</option>

                                    <option value="2020"<?=$time_at_address2 == '2020' ? ' selected="selected"' : '';?>>2020</option>

                                    <option value="2019"<?=$time_at_address2 == '2019' ? ' selected="selected"' : '';?>>2019</option>

                                    <option value="2018"<?=$time_at_address2 == '2018' ? ' selected="selected"' : '';?>>2018</option>

                                    <option value="2017"<?=$time_at_address2 == '2017' ? ' selected="selected"' : '';?>>2017</option>

                                    <option value="2016"<?=$time_at_address2 == '2016' ? 'selected="selected"' : '';?>>2016</option>

                                    <option value="2015"<?=$time_at_address2 == '2015' ? 'selected="selected"' : '';?>>2015</option>

                                    <option value="2014"<?=$time_at_address2 == '2014' ? 'selected="selected"' : '';?>>2014</option>

                                    <option value="2013"<?=$time_at_address2 == '2013' ? 'selected="selected"' : '';?>>2013</option>

                                    <option value="2012"<?=$time_at_address2 == '2012' ? ' selected="selected"' : '';?>>2012</option>

                                    <option value="2011"<?=$time_at_address2 == '2011' ? ' selected="selected"' : '';?>>2011</option>

                                    <option value="2010"<?=$time_at_address2 == '2010' ? ' selected="selected"' : '';?>>2010</option>

                                    <option value="2009"<?=$time_at_address2 == '2009' ? ' select="selected"' : '';?>>2009</option>
                                </select>


                            </div>
                        </div>
                    </div>




                    <div class="form-group">
                        <div class="col-md-2"></div>
                        <div class="col-md-10">
                            <button type="submit" class="btn btn-primary"  data-toggle="tooltip">Continue</button>
                        </div>

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

<?php
include 'footer.php';
?>
<script>

    $("#previous-address1").hide();
    $("#previous-address2").hide();
    <?php
    if($count == 2)
    { ?>
    $("#previous-address1").show();
    $("#previous-address2").hide();
    <?php }
    if($count == 3)
    {  ?>
    $("#previous-address1").show();
    $("#previous-address2").show();
    <?php
    }
    ?>
    function open_panel()
    {
        var current_year = 2020;

        var year = $("#time_at_address").val();


        var difference = current_year - year;


        if(difference < 3 )
        {
            $("#previous-address1").show();
        }

        if(difference > 3)
        {
            $("#previous-address1").hide();
            $("#previous-address2").hide();
        }

    }


    function open_panel2()
    {

        var current_year1 = 2020;

        var year1 = $("#previous-address1").val();

        var difference1 = current_year1 - year1;

        if(difference1 < 3)
        {
            $("#previous-address2").show();
        }

        if(difference1 > 3)
        {
            //$("#previous-employment1").hide();
            $("#previous-address2").hide();
        }

    }
</script>
