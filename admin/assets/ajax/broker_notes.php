<?php
session_start();
require_once '../inc/initDb.php';


DB::insert('logs', array(
    "broker_id"         =>  $_SESSION['broker_id'],
    "lead_id"           =>  $_POST['lead_id'],
    "log_date"          =>  date("d-m-Y H:i:s"),
    "log_detail"        =>  $_POST['broker_notes']

));

echo "success";