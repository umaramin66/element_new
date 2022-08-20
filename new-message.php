<?php
include 'header.php';

$id = $_GET['id'];
if($id != "")
{
    $leads   =   DB::queryFirstRow("select * from leads where id = '".$id."' ");
    $broker  =   DB::queryFirstRow("select * from User where id = '".$leads['broker_id']."' ");
}
else{
    $leads['email'] = "";
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
            		<h1><i class='fa fa-envelope'></i> E-mail</h1>
            		            	</div>
            	<!-- Page Heading End-->				
				<!-- Your awesome content goes here -->
				<div class="box-info box-messages animated fadeInDown">
					<div class="row">
						<div class="col-md-3">
							<!-- Sidebar Message -->

							<div class="btn-group new-message-btns stacked">
								<a href="inbox.php" class="btn btn-primary btn-lg btn-block text-left"><i class="icon-left-open-1"></i> Back to Inbox</a>
							</div>
							<div class="list-group menu-message">
							  <a href="inbox.php" class="list-group-item"><i class="icon-inbox"></i> Inbox <span class="badge pull-right">4</span></a>
<!--							  <a href="#fakelink" class="list-group-item"><i class="icon-pencil"></i> Draft <span class="badge bg-green-1 pull-right">1</span></a>-->
<!--							  <a href="#fakelink" class="list-group-item"><i class="icon-star"></i> Important <span class="badge bg-red-1 pull-right">2</span></a>-->
<!--							  <a href="#fakelink" class="list-group-item"><i class="icon-export"></i> Sent</a>-->
<!--							  <a href="#fakelink" class="list-group-item"><i class="icon-cup"></i> Trash <span class="badge bg-lightblue-1 pull-right">1</span></a>-->
							</div>


						</div><!-- ENd div .col-md-2 -->
						
						
						<div class="col-md-9">
							<div class="widget">
								<div class="widget-content padding">
									<form id="new-message" role="form" class="form-horizontal">
										<div class="form-group">
											<label class="control-label col-sm-1 col-xs-1">To:</label>
											<div class="col-sm-10 col-xs-8">
												<input type="text" class="form-control input-invis" id="email" name="email" value="<?=$leads['email']?>" placeholder="someone@company.com">
                                                <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="email_error"></span>
											</div>
											<div class="col-sm-1 col-xs-3 text-right">
												<div class="btn-group">
													<a class="btn btn-default btn-xs" href="javascript:;" onclick="$('.cc-hidden').toggleClass('hidden')">Cc</a>
<!--													<a class="btn btn-default btn-xs" href="javascript:;" onclick="$('.bcc-hidden').toggleClass('hidden')">Bcc</a>-->
												</div>
											</div>
										</div>
										<div class="form-group cc-hidden hidden">
											<label class="control-label col-sm-1">Cc:</label>
											<div class="col-sm-11">
												<input type="text" class="form-control input-invis">
											</div>
										</div>
<!--										<div class="form-group bcc-hidden hidden">-->
<!--											<label class="control-label col-sm-1">Bcc:</label>-->
<!--											<div class="col-sm-11">-->
<!--												<input type="text" class="form-control input-invis">-->
<!--											</div>-->
<!--										</div>-->
										<div class="form-group">
											<label class="control-label col-sm-1">Subject:</label>
											<div class="col-sm-11">
												<input type="text" class="form-control input-invis" id="subject" name="subject">
                                                <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="subject_error"></span>
											</div>
										</div>
										<div class="form-group">
											<div class="col-sm-12">
												<textarea class="summernote-small form-control" id="message" name="message"></textarea>
                                                <span style="font-size: 12px; color: red; width: 100%;text-align: left; padding: 9px;text-transform: none;" id="message_error"></span>
                                                
											</div>
										</div>

                                        <input type="hidden" name="broker_id"  value="<?=$_SESSION['broker_id']?>">
                                        <input type="hidden" name="lead_id"  value="<?=$_SESSION['lead_id']?>">

										<div class="row">
											<div class="col-xs-8">
												<button type="submit" class="btn btn-success"><i class="icon-paper-plane-1"></i> Send</button>
<!--												<button type="" class="btn btn-danger">Save</button>-->
											</div>
											<div class="col-xs-4">
												<p class="quick-post message">
													<a href="javascript" title="Attach Picture" data-toggle="tooltip"><i class="fa fa-picture-o"></i></a>
													<a href="javascript" title="Attach Video" data-toggle="tooltip"><i class="fa fa-video-camera"></i></a>
													<a href="javascript" title="Attach Files" data-toggle="tooltip"><i class="fa fa-paperclip"></i></a>
												</p>
											</div>
										</div>	
									</form>
								</div>
							</div>
						</div>
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
		<!-- End right content -->

		<!-- Modal New message -->	
		<div class="md-modal md-slide-stick-top" id="new-message">
			<div class="md-content">
			<div class="md-close-btn"><a class="md-close"><i class="fa fa-times"></i></a></div>
				<h3><strong>New</strong> Message</h3>
				<div>
					<form role="form">
						<div class="form-group">
							<input type="text" class="form-control input-lg" placeholder="Message to">
						</div>
						<div class="form-group">
							<input type="text" class="form-control input-lg" placeholder="Message subject">
						</div>
						<div class="form-group">
							<textarea class="summernote-small form-control"></textarea>
						</div>
						<div class="row">
							<div class="col-xs-8">
								<button type="submit" class="btn btn-success btn-sm">Send</button>
								<button class="btn btn-warning btn-sm">Draft</button>
							</div>
							<div class="col-xs-4">
								<p class="quick-post message">
									<a><i class="fa fa-picture-o"></i></a>
									<a><i class="fa fa-video-camera"></i></a>
									<a><i class="icon-attach-3" data-toggle="tooltip" title="Business Contract.pdf - 2,238KB"></i></a>
								</p>
							</div>
						</div>	
					</form>
				</div>
			</div>
		</div>
		<!--
		MODAL OVERLAY
		Always place this div at the end of the page content
		-->
		<div class="md-overlay"></div>
	</div>
	<!-- End of page -->
		<!-- the overlay modal element -->
	<div class="md-overlay"></div>
	<!-- End of eoverlay modal -->

	<script src="assets/js/new-message.js"></script>

<?php

include 'footer.php';

?>