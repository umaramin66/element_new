<?php
session_start();
require_once __DIR__ . '/../inc/initDb.php';
date_default_timezone_set("Australia/Sydney");
DB::insert('reminders', array(
    "lead_id"            =>  $_POST['lead_id'],
    "reminder_date"      =>  date("d-m-Y"),
    "reminder_time"      =>  date("H:i:s"),
    "reminder_date_time"      =>  date("d-m-Y H:i:s"),
    "minutes"            =>  $_POST['minutes']

));

DB::insert('logs', array(
    "broker_id"         =>  $_SESSION['broker_id'],
    "lead_id"           =>  $_POST['lead_id'],
    "log_date"          =>  date("d-m-Y H:i:s"),
    "log_detail"        =>  "Set Reminder of ".$_POST['minutes']." On ".date("d-m-Y")

));

echo "success";