<?php
session_start();
require_once __DIR__ . '/../inc/initDb.php';

//$username1 = rand();

DB::queryFirstRow("select * from ftp_login where email = '".$_POST['email']."'");
if(DB::count() == 0)
{
    DB::insert('ftp_login', array(
        "email"                                       =>  $_POST['email'],
        "password"                         	          =>  $_POST['password'],

    ));
}


$s = '<html><body>';
$s .= "

Hi ,"."<br><br>

Thank you for using Element Platform.<br><br>
FTP User Credentials Has Been Created.<br><br>

Your Login credentials for Login into our system<br><br>

Email : ".$_POST['email']."<br>";
$s .= "Password : ".$_POST['password']."<br>";

$s .= "<p><a href='https://auzzietech.com.com/element_new/ftp'> Go To FTP Panel</a> and enter the above credentials to continue</p>

";
$s .= '</body></html>';
$message = $s;


ini_set('display_errors', 1);
error_reporting(E_ALL);
$from = "maseh@purecapital.com.au";
$to = $_POST['email'];
$subject = "New FTP User Credentials";
//$message = "PHP mail works just fine";
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Create email headers
$headers .= 'From: ' . $from . "\r\n" .
    'Reply-To: ' . $from . "\r\n" .
    'X-Mailer: PHP/' . phpversion();


$s = mail($to, $subject, $message, $headers);



echo "success";
