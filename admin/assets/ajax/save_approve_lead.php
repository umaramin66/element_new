<?php
session_start();
require_once '../inc/initDb.php';
$max = DB::queryFirstField("select MAX(sort) from leads ");
$maximum = $max['sort'] +1;

DB::update('leads', [
    "lead_status"                    =>  2,
    "sort"                           => $maximum

], "id=%d", $_POST['lead_id']);

echo "success";
