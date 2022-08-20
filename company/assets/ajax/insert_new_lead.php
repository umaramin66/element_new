<?php
session_start();
require_once __DIR__ . '/../inc/initDb.php';

$broker_id = $_SESSION['broker_id'];
date_default_timezone_set("Australia/Sydney");
DB::insert('leads', array(
    "client_name"              =>  $_POST['client_name'],
    "company_name"             =>  $_POST['company_name'],
    "contact_no"               =>  $_POST['contact_no'],
    "broker_id"                =>  $broker_id,
    "referrer_id"              =>  $_POST['referrer'],
    "email"                    =>  $_POST['email'],
    "lead_status"              =>  1,
    "lead_time"                =>  date("d-m-Y H:i:s"),
));

echo json_encode("success");
