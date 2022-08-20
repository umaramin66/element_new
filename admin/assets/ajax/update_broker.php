<?php
session_start();
require_once __DIR__ . '/../inc/initDb.php';

DB::update('brokers', [
     "company_id"                              	 =>  $_POST['company_id'],
    "office_address"                              =>  $_POST['office_address'],
    "contact_name"                           	 =>  $_POST['contact_name'],
    "contact_number"                         	 =>  $_POST['contact_number'],
    "contact_email"                           	 =>  $_POST['contact_email'],
    "password"                         	         =>  $_POST['password'],

], "id=%d", $_POST['broker_id']);




echo "success";




