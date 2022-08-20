<?php
session_start();
require_once __DIR__ . '/../inc/initDb.php';
$max1 = "0";
//echo $max1."  - ";
$max = DB::query("select * from leads");
foreach($max as $m)
{
    if($m['sort'] >  $max1)
    {
//        echo"true<br>";
        $max1 = $m['sort'];
//        echo "if chala  >";
    }
//    echo $m['sort']." - ";
}
$maximum =  $max1 + 1;
//echo $max1."  - ";1
//echo $maximum."  - ";2

DB::update('leads', [
    "lead_status"                    =>  $_POST['status'],
    "sort"                           =>  $maximum

], "id=%d", $_POST['lead_id']);

DB::insert('logs', array(
    "broker_id"         =>  $_SESSION['broker_id'],
    "lead_id"           =>  $_POST['lead_id'],
    "log_date"          =>  date("d-m-Y H:i:s"),
    "log_detail"        =>  "Change Lead Status"

));

echo $maximum;