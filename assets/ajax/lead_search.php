<?php
session_start();
require_once __DIR__ . '/../inc/initDb.php';

$orderss = $_POST['query'];

$lead = DB::query("SELECT * from leads  WHERE CONCAT(id, '', email, '', `client_name`, '', contact_no, '') LIKE '%$orderss%' limit 0,30  ");
$output = "";
foreach ($lead as $leads)
{
     $output .='
                                                                 
                                                                        <a style="text-decoration: none" href="new-page.php?lead_id='.$leads['id'].'">
                                                                        <div class="widget green-1 animated fadeInDown" type="button" class="btn btn-demo" data-toggle="modal" href="#myModal2">
                            <div class="widget-content padding">
                                                                            <h5>'.ucfirst($leads['client_name']).'</h5>
                                                                            <p>'.$leads['contact_no'].'</p>
                                                                            <p>'.$leads['lead_time'].'</p></div></div></a>

';

}
echo $output;
