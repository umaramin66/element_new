<?php
session_start();
require_once __DIR__ . '/../inc/initDb.php';

$broker_id = $_SESSION['broker_id'];
date_default_timezone_set("Australia/Sydney");

$max1 = "0";
//echo $max1."  - ";
$max = DB::query("select * from leads");
foreach($max as $m)
{
    if($m['sort'] >  $max1)
    {
        $max1 = $m['sort'];
    }

}
$maximum =  $max1 + 1;

$date = date("d-m-Y H:i");

DB::queryFirstRow("select * from leads where broker_id = '$broker_id'  and lead_time = '$date' and client_name = '".$_POST['client_name']."' ");
if(DB::count() == 0)
{
    DB::insert('leads', array(
        "client_name"              =>  $_POST['client_name'],
        "company_name"             =>  $_POST['company_name'],
        "contact_no"               =>  $_POST['contact_no'],
        "broker_id"                =>  $broker_id,
        "referrer_id"              =>  $_POST['referrer'],
        "email"                    =>  $_POST['email'],
        "lead_status"              =>  1,
        "lead_time"                =>  date("d-m-Y H:i"),
        "sort"                     =>  $maximum,
    ));
}


echo json_encode("success");