<?php
session_start();
require_once __DIR__ . '/../inc/initDb.php';

$broker_id = $_SESSION['broker_id'];

DB::insert('todo_list', array(

    "message"                          =>  $_POST['message'],
    "broker_id"                       =>   $broker_id,
));

echo json_encode("success");