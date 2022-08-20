<?php
session_start();
require_once __DIR__ . '/../inc/initDb.php';

$broker_id = $_SESSION['broker_id'];

if(empty($_SESSION['customer_id']))
{
    $_SESSION['customer_id'] = "";
}

if($_POST['application_id'] == "")
{
    DB::insert('new_application', array(
        "customer_type"              =>  $_POST['customRadio'],
        "broker_id"                  =>  $broker_id,
        "applying_loan_as"           =>  $_POST['customRadio'],
        "user_id"                    =>  $_SESSION['customer_id'],
        "status_step"                =>  "step8",
        "status"                     =>  "incomplete"

    ));
    $id = DB::insertId();

    $_SESSION['application_id'] = $id;
}
else{
    DB::update('new_application', [
        "customer_type"              =>  $_POST['customRadio'],
        "applying_loan_as"           =>  $_POST['customRadio'],
    ], "id=%d", $_POST['application_id']);

    $_SESSION['application_id'] = $_POST['application_id'];
}


echo json_encode("success");