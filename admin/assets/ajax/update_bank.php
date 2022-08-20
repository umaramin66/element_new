<?php
session_start();
require_once __DIR__ . '/../inc/initDb.php';

DB::update('bank', [
    "name"                           	     =>  $_POST['name'],
    "address"                                =>  $_POST['address'],

], "id=%d", $_POST['bank_id']);
echo "success";




