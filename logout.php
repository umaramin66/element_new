<?php
session_start();
require_once 'assets/inc/initDb.php';

session_destroy();
echo "<script>window.open('login.php','_self')</script>";