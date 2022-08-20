<?php

include 'header.php';
?>
        <!-- Left Sidebar End -->           <!-- Right Sidebar Start -->
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
      <!--<div class="page-content">

				<nav class="page-breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Tables</a></li>
						<li class="breadcrumb-item active" aria-current="page">Data Table</li>
					</ol>
				</nav>

				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">Data Table</h6>
                <p class="card-description">Read the <a href="https://datatables.net/" target="_blank"> Official DataTables Documentation </a>for a full list of instructions and other options.</p>
                <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                      </tr>
                      <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2011/07/25</td>
                        <td>$170,750</td>
                      </tr>
                      <tr>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td>66</td>
                        <td>2009/01/12</td>
                        <td>$86,000</td>
                      </tr>
                      <tr>
                        <td>Cedric Kelly</td>
                        <td>Senior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2012/03/29</td>
                        <td>$433,060</td>
                      </tr>
                      <tr>
                        <td>Airi Satou</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>33</td>
                        <td>2008/11/28</td>
                        <td>$162,700</td>
                      </tr>
                      <tr>
                        <td>Brielle Williamson</td>
                        <td>Integration Specialist</td>
                        <td>New York</td>
                        <td>61</td>
                        <td>2012/12/02</td>
                        <td>$372,000</td>
                      </tr>
                      <tr>
                        <td>Herrod Chandler</td>
                        <td>Sales Assistant</td>
                        <td>San Francisco</td>
                        <td>59</td>
                        <td>2012/08/06</td>
                        <td>$137,500</td>
                      </tr>
                      <tr>
                        <td>Rhona Davidson</td>
                        <td>Integration Specialist</td>
                        <td>Tokyo</td>
                        <td>55</td>
                        <td>2010/10/14</td>
                        <td>$327,900</td>
                      </tr>
                      <tr>
                        <td>Colleen Hurst</td>
                        <td>Javascript Developer</td>
                        <td>San Francisco</td>
                        <td>39</td>
                        <td>2009/09/15</td>
                        <td>$205,500</td>
                      </tr>
                      <tr>
                        <td>Sonya Frost</td>
                        <td>Software Engineer</td>
                        <td>Edinburgh</td>
                        <td>23</td>
                        <td>2008/12/13</td>
                        <td>$103,600</td>
                      </tr>
                      <tr>
                        <td>Jena Gaines</td>
                        <td>Office Manager</td>
                        <td>London</td>
                        <td>30</td>
                        <td>2008/12/19</td>
                        <td>$90,560</td>
                      </tr>
                      <tr>
                        <td>Quinn Flynn</td>
                        <td>Support Lead</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2013/03/03</td>
                        <td>$342,000</td>
                      </tr>
                      <tr>
                        <td>Charde Marshall</td>
                        <td>Regional Director</td>
                        <td>San Francisco</td>
                        <td>36</td>
                        <td>2008/10/16</td>
                        <td>$470,600</td>
                      </tr>
                      <tr>
                        <td>Haley Kennedy</td>
                        <td>Senior Marketing Designer</td>
                        <td>London</td>
                        <td>43</td>
                        <td>2012/12/18</td>
                        <td>$313,500</td>
                      </tr>
                      <tr>
                    <td>Tatyana Fitzpatrick</td>
                        <td>Regional Director</td>
                        <td>London</td>
                        <td>19</td>
                        <td>2010/03/17</td>
                        <td>$385,750</td>
                      </tr>
                      <tr>
                        <td>Michael Silva</td>
                        <td>Marketing Designer</td>
                        <td>London</td>
                        <td>66</td>
                        <td>2012/11/27</td>
                        <td>$198,500</td>
                      </tr>
                      <tr>
                        <td>Paul Byrd</td>
                        <td>Chief Financial Officer (CFO)</td>
                        <td>New York</td>
                        <td>64</td>
                        <td>2010/06/09</td>
                        <td>$725,000</td>
                      </tr>
                      <tr>
                        <td>Gloria Little</td>
                        <td>Systems Administrator</td>
                        <td>New York</td>
                        <td>59</td>
                        <td>2009/04/10</td>
                        <td>$237,500</td>
                      </tr>
                      <tr>
                        <td>Bradley Greer</td>
                        <td>Software Engineer</td>
                        <td>London</td>
                        <td>41</td>
                        <td>2012/10/13</td>
                        <td>$132,000</td>
                      </tr>
                      <tr>
                        <td>Dai Rios</td>
                        <td>Personnel Lead</td>
                        <td>Edinburgh</td>
                        <td>35</td>
                        <td>2012/09/26</td>
                        <td>$217,500</td>
                      </tr>
                      <tr>
                        <td>Jenette Caldwell</td>
                        <td>Development Lead</td>
                        <td>New York</td>
                        <td>30</td>
                        <td>2011/09/03</td>
                        <td>$345,000</td>
                      </tr>
                      <tr>
                        <td>Yuri Berry</td>
                        <td>Chief Marketing Officer (CMO)</td>
                        <td>New York</td>
                        <td>40</td>
                        <td>2009/06/25</td>
                        <td>$675,000</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
					</div>
				</div>
			</div>-->

      <div class="content-page">
            <!-- ============================================================== -->
            <!-- Start Content here -->
            <!-- ============================================================== -->
            <div class="content">
                                <!-- Page Heading Start -->
                <div class="page-heading">
                    <h1>Lead Section</h1>
                </div>
                <!-- Page Heading End-->                <!-- Your awesome content goes here -->
                            
                
              
                <div class="row">
                    <div class="col-md-12">
                        <div class="widget">
                            <div class="widget-header transparent">
                                <h2><strong>Lead Details</strong>
                                <i style="margin-left:300px;" class="btn btn-info mt-3 " onclick=" relocate_home()">Add Leads</i>
                               <!-- <input style="margin-left:300px;"type="button" class="btn btn-foursquare" value="Create Lead" onclick=" relocate_home()">-->
                                </h2>
                                <div class="additional-btn">
                                    <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                    <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                                </div>
                            </div>
                            <div class="widget-content">
                                <div class="data-table-toolbar">
                                    <div class="row">
                                        <div class="col-md-4">
<!--                                            <form role="form">-->
<!--                                            <input type="text" id=" m-search" class="form-control" placeholder="Search...">-->
<!--                                            </form>-->
                                        </div>
<!--                                        <div class="col-md-8">-->
<!--                                            <div class="toolbar-btn-action">-->
<!--                                                <a class="btn btn-success"><i class="fa fa-plus-circle"></i> Add new</a>-->
<!--                                                <a class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete</a>-->
<!--                                                <a class="btn btn-primary"><i class="fa fa-refresh"></i> Update</a>-->
<!--                                            </div>-->
<!--                                        </div>-->
                                    </div>
                                </div>
                                    
                                <div class="table-responsive">
                                   <!-- <table id="datatables-1" class="table table-striped table-bordered" cellspacing="0" width="100%">-->
                                    <table id="dataTableExample" class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Client Name</th>
                                                <th>Company Name</th>
                                                <th>Contact No</th>
                                                <th>Email</th>
                                                <th>Time</th>
                                                <th data-sortable="false">Referrer</th>
                                                <th data-sortable="false">Email</th>
                                                <th data-sortable="false">Action</th>
                                            </tr>
                                        </thead> 
                                        <tbody>
                                            
                                            <?php
                                                listLeads();
                                            ?>

                                        </tbody>  
                                    </table>
                                </div>
                                    
                               <!-- <div class="data-table-toolbar">
                                    <ul class="pagination">
                                      <li class="disabled"><a href="#">&laquo;</a></li>
                                      <li class="active"><a href="#">1</a></li>
                                      <li><a href="#">2</a></li>
                                      <li><a href="#">3</a></li>
                                      <li><a href="#">4</a></li>
                                      <li><a href="#">5</a></li>
                                      <li><a href="#">&raquo;</a></li>
                                    </ul>
                                </div>-->
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
            <!-- ============================================================== -->
            <!-- End content here -->
            <!-- ============================================================== -->

        </div>
        <!-- End right content -->

    </div>
    <!-- End of page -->
        <!-- the overlay modal element -->
   

    <script>
    function relocate_home()
    {
        location.href = "create_leads.php";
    }
    // $(document).ready(function() {
    //     $('#leads_table').DataTable();
    // } );
</script>

<?php
include 'footer.php';


function listLeads()
{

//    $contact  = DB::query("select * from leads where broker_id = '".$_SESSION['broker_id']."'  ");
    $contact  = DB::query("select * from leads order by id DESC  ");
    if(DB::count() > 0)
    {
        foreach($contact as $contacts)
        {
            $id = $contacts['id'];
            $name= $contacts['client_name'];
            $companyName = $contacts['company_name'];
            $contactNo = $contacts['contact_no'];
            $email = $contacts['email'];
            $referrer = $contacts['referrer'];
            $time = $contacts['lead_time'];

            echo"<tr><th scope='row'>$id</th>
                <td>$name </td>
                <td>$companyName </td>
                <td>$contactNo </td>
                <td>$email </td>
                <td>$time </td>
                <td>$referrer </td>
                
                <td><a href='new-message.php?id=$id'> <button class='btn btn-info' type='button'>Email</button> </a></td>
                
                <td><a href='edit_leads.php?edit_lead=$id'><button class='btn btn-success' type='button'>Edit</button></a> </td>
               
                </tr>";


        }
    }
    else
    {
        echo "0 results";
    }
}
function validation($var)
{
    $var = trim($var);
    $var = stripslashes($var);
    $var = htmlspecialchars($var);
    return $var;
}
?>
    </body>
</html>