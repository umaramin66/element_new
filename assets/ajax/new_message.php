<?php
session_start();
require_once __DIR__ . '/../inc/initDb.php';


$query = DB::queryFirstRow("select * from User where id = '".$_POST['broker_id']."'");

$s = '<html><body>';
$s .= "

 ".$_POST['message'];
$s .= '</body></html>';
$message = $s;


ini_set('display_errors', 1);
error_reporting(E_ALL);
$from = "fahadhanifau@gmail.com";
$to = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
//$message = "PHP mail works just fine";
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Create email headers
$headers .= 'From: ' . $from . "\r\n" .
    'Reply-To: ' . $from . "\r\n" .
    'X-Mailer: PHP/' . phpversion();


$s = mail($to, $subject, $message, $headers);


//var_dump($s);
//echo "The email message was sent.";

DB::insert('logs', array(
    "broker_id"         =>  $_POST['broker_id'],
    "lead_id"           =>  $_POST['lead_id'],
    "log_date"          =>  date("d-m-Y H:i:s"),
    "log_detail"        =>  "Email To Client"
));

$log_id = DB::insertId();

DB::insert('logs_email', array(
    "log_id"         =>  $log_id,
    "broker_id"      =>  $_POST['broker_id'],
    "email_to"       =>  $_POST['email'],
    "subject"        =>  $_POST['subject'],
    "message"        =>  $_POST['message'],
    "date"       =>  date("d-m-Y H:i:s"),
));

echo "success";
//echo "success";


