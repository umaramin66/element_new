<?php
session_start();
require_once '../inc/initDb.php';

DB::update('User', array(
    "password"              =>  $_POST['new_password']

), "email=%s", $_POST['email']);

echo "success";
