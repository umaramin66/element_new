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

						  
							</div>
						</div><!-- ENd div .col-md-2 -->
						<div class="col-md-9">
							<div class="mail-list">
							   <div class="clearfix"></div>
							
							    <!-- Toolbar message -->
							   <div class="data-table-toolbar">
								    <div class="row">
									    <div class="col-sm-8">
										
										    <div class="btn-toolbar" role="toolbar">									
										    </div>
									    </div>
								    </div><!-- End div .row -->
							    </div><!-- End div .data-table-toolbar -->
							    <!-- End toolbar message -->
							
								
								<!-- Message table -->
								<div class="table-responsive">
									<table class="table table-hover table-message">
										<tbody>
									    <?php
	                                             $list = DB::query("select * from logs_email order by id DESC limit 4 ");
	                                                 foreach($list as $lists){
	                                           ?>
	                                                    <tr class="unread">
	                                                         <td><a href="read-message.php?logs_email=<?=$lists['id']?>"><?=$lists['subject']?></a></td>
												             <td> <a href="read-message.php?logs_email=<?=$lists['id']?>"><?= substr($lists['message'], 0,50)?></a></td>
												             <td><?=$lists['date']?></td> 
											            </tr>
	                                            <?php } ?>
											<input type="hidden" name="broker_id"  value="<?=$_SESSION['broker_id']?>">
	                                        <input type="hidden" name="lead_id"  value="<?=$_SESSION['lead_id']?>">
										</tbody>
									</table>
								</div><!-- End div .table-responsive -->
								<!-- End message table -->
								
								<!-- Footer message toolbar -->
								<!-- <div class="data-table-toolbar-footer">
									<div class="pull-right"> -->
										<!-- <span class="paging-status">20 of 250</span> -->
										<!-- <div class="btn-group">
										  <a class="btn btn-default"><i class="fa fa-chevron-left"></i></a>
										  <a class="btn btn-default"><i class="fa fa-chevron-right"></i></a>
										</div> --><!-- End div .btn-group -->
									<!-- </div> --><!-- End div .pull-right -->
								<!-- </div> --><!-- End div .data-table-toolbar -->
								<!-- End Footer message toolbar -->
							</div>
						</div><!-- End div .col-md-10 -->
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



<?php

include 'footer.php';

?>