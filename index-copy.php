<?php
include 'header.php';

?>


<!-- Start right content -->
<div class="content-page">
    <!-- ============================================================== -->
    <!-- Start Content here -->
    <!-- ============================================================== -->
    <div class="content">
        <!-- Start info box -->


        <div class="row">

            <div style="margin-bottom:20px; padding:5px;" class=" col-lg-5 col-md-6">
                <input class="form-control" type="text" id="search-leadss" name="search-leads" placeholder="Search Leads">
                <small>*Press Enter To Search Your Leads</small>
            </div>
        </div>

        <br>

        <div id="search-row" class="row top-summary">
            <div class="col-lg-3 col-md-6">
                <div  style="height: 93px;" class="widget green-1 animated fadeInDown" type="button" class="btn btn-demo">
                    <div class="widget-content padding">
                        <h5>Search Leads</h5>
                    </div>
                </div>
                <div class="scrollbar" id="dd">
                </div>
            </div>

        </div>
        <div id="main-row" class="row top-summary">
            <div>
                <div style="margin-bottom:20px; padding:5px;" class=" col-lg-3 col-md-6">
                    <div style="background-color: #edeeef;" class="widget green-1 animated fadeInDown">
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

                    </div>
                </div>

                <div style="margin-bottom:20px; padding:5px;" class="col-lg-3 col-md-6">
                    <div style="background-color: #edeeef;" class="widget darkblue-2 animated fadeInDown">
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

                    </div>
                </div>
                <div style="margin-bottom:20px; padding:5px;" class="col-lg-3 col-md-6">
                    <div style="background-color: #edeeef;" class="widget lightblue-1 animated fadeInDown">
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

                    </div>
                </div>

                <div style="margin-bottom:20px; padding:5px;" class="col-lg-3 col-md-6">
                    <div style="background-color: #edeeef;" class="widget pink-1 animated fadeInDown">
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

                    </div>
                </div>


            </div>



            <!-- info-box-menu -->
            <div class="col-lg-3 col-md-6">
<!--                <div  style="height: 93px;" class="widget green-1 animated fadeInDown" type="button" class="btn btn-demo">-->
<!--                    <div class="widget-content padding">-->
<!--                        <h5>New Leads</h5>-->
<!---->
<!--                    </div>-->
<!--                </div>-->
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

            <div class="col-lg-3 col-md-6">
<!--                <div style="height: 93px;" class="widget green-1 animated fadeInDown" type="button" class="btn btn-demo">-->
<!--                    <div class="widget-content padding">-->
<!--                        <h5>Approve Leads</h5>-->
<!---->
<!--                    </div>-->
<!--                </div>-->
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

            <div class="col-lg-3 col-md-6">
<!--                <div style="height: 93px;" class="widget green-1 animated fadeInDown" type="button" class="btn btn-demo">-->
<!--                    <div class="widget-content padding">-->
<!--                        <h5>Follow Up Leads</h5>-->
<!---->
<!--                    </div>-->
<!--                </div>-->
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
            <div class="col-lg-3 col-md-6">
<!--                <div style="height: 93px;" class="widget green-1 animated fadeInDown" type="button" class="btn btn-demo">-->
<!--                    <div class="widget-content padding">-->
<!--                        <h5>Settlements</h5>-->
<!---->
<!--                    </div>-->
<!--                </div>-->
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



    <!-- Footer Start -->
    <footer>
        Element &copy; 2021
        <div class="footer-links pull-right">
            <a href="#">About</a><a href="#">Support</a><a href="#">Terms of Service</a><a href="#">Legal</a><a href="#">Help</a><a href="#">Contact Us</a>
        </div>
    </footer>
    <!-- Footer End -->
</div>


<?php
include 'footer.php';
?>
