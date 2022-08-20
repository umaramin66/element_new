
<?php
session_start();
require_once __DIR__ . '/../inc/initDb.php';
DB::insert('bank', array(
    "name"                           	   =>  $_POST['name'],
    "address"                              =>  $_POST['address'],
));



echo "success";
