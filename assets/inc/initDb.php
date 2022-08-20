<?php
//session_set_cookie_params(0, '/', '.itpvt.net');


require_once 'meekrodb.2.3.class.php';


//if($_SERVER['HTTP_HOST'] == "orderapp.com" || $_SERVER['HTTP_HOST'] == "app.orderapp.com" || $_SERVER['HTTP_HOST'] == "eluna.orderapp.com"
//    || $_SERVER['HTTP_HOST'] == "staging.orderapp.com" || $_SERVER['HTTP_HOST'] == "backup.orderapp.com" || $_SERVER['HTTP_HOST'] == "kosher.orderapp.com") {
//
//    DB::$host = 'orderappdb.crv4lzhgi1gx.eu-central-1.rds.amazonaws.com';
//    DB::$port = '3306';
//    DB::$user = 'orderappnew';
//    DB::$password = 'orderapp';
//}
//else{
DB::$user = 'auzziech_element';
DB::$password = 'element1234567890!';
//}



DB::$dbName = 'auzziech_element';

?>
