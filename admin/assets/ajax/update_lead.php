<?php
session_start();
require_once __DIR__ . '/../inc/initDb.php';

DB::update('leads', [
    "client_name"              =>  $_POST['client_name'],
    "company_name"             =>  $_POST['company_name'],
    "contact_no"               =>  $_POST['contact_no'],
    "email"                    =>  $_POST['email'],


], "id=%d", $_POST['lead_id']);

echo json_encode("success");




