<?php
session_start();
require_once __DIR__ . '/../inc/initDb.php';

$broker_id = $_SESSION['broker_id'];

DB::insert('referrer', array(
    "name"                     =>  $_POST['name'],
    "company_name"             =>  $_POST['company_name'],
    "contact_no"               =>  $_POST['contact_no'],
    "broker_id"                =>   $broker_id,
    "email"                    =>  $_POST['email'],
    "set_fee"                  =>  $_POST['set_fee'],
    "ref_agreement"            =>  $_POST['ref_agreement']
));

echo json_encode("success");
