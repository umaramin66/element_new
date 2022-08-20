<?php
session_start();
require_once '../inc/initDb.php';


//var_dump($s);
//echo "The email message was sent.";

function generateRandomString($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
$random = generateRandomString("9");


$e = DB::queryFirstRow("select * from User where email = '".$_POST['customer_email_application']."'");
if(DB::count() != 0)
{
        $random = $e['password'];
}
else{
    DB::insert('User', array(
        "email"         =>  $_POST['customer_email_application'],
        "password"      =>  $random,
        "role_type"     => "customer",
        "invitation_by_broker_id"     => $_SESSION['broker_id'],

    ));
}

$output = "";

$s = '<html><body>';
$s .= "

Hi ,"."<br><br>

Thank you for using Elements online application form.<br><br>

Your Login credentials for Login into our system<br><br>

Email : ".$_POST['customer_email_application']."<br>";
$s .= "Password : ".$random."<br>";

$s .= "<p><a href='https://auzzietech.com/element_new/redirect_from_email.php'> Go To Application</a> and enter the above credentials to continue</p>

";
$s .= '</body></html>';
$message = $s;


ini_set('display_errors', 1);
error_reporting(E_ALL);
$from = "fahadhanifau@gmail.com";
$to = $_POST['customer_email_application'];
$subject = "Finance Application Credentials";
//$message = "PHP mail works just fine";
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Create email headers
$headers .= 'From: ' . $from . "\r\n" .
    'Reply-To: ' . $from . "\r\n" .
    'X-Mailer: PHP/' . phpversion();


$s = mail($to, $subject, $message, $headers);
