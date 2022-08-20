<?php
session_start();
require_once '../inc/initDb.php';


DB::update('leads', [
    "broker_id"                              	 =>  $_POST['broker_id'],
    "sort"                              	     =>  1,

], "id=%d", $_POST['lead_id']);

echo "success";