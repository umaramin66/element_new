<?php
session_start();
require_once __DIR__ . '/../inc/initDb.php';

$broker_id = $_SESSION['broker_id'];
if(empty($_SESSION['application_id']))
{
    $_SESSION['application_id'] = $_POST['application_id'];
}

DB::queryFirstRow("select application_id  from new_application_customer where application_id = '".$_SESSION['application_id']."'");
if(DB::count() != 0)
{
    DB::delete('new_application_customer', 'application_id=%d', $_SESSION['application_id']);
}

DB::insert('new_application_customer', array(
    "application_id"                     =>  $_SESSION['application_id'],
    "name_type"                          =>  $_POST['name_type'],
    "first_name"                         =>  $_POST['first_name'],
    "middle_name"                        =>  $_POST['middle_name'],
    "last_name"                          =>  $_POST['last_name'],
    "email"                              =>  $_POST['email'],
    "contact_no"                         =>  $_POST['contact_no'],
    "gender"                             =>  $_POST['gender'],
    "birth_date"                         =>  $_POST['birth_date'],
    "marital_status"                     =>  $_POST['marital_status'],
    "dependant_children"                 =>  $_POST['dependant_children'],
    "driver_license_no"                  =>  $_POST['driver_license_no'],
    "state_issued"                       =>  $_POST['state_issued'],
    "driver_license_expiry_date"         =>  $_POST['driver_license_expiry_date'],
    "residence_status"                   =>  $_POST['residence_status'],
    "application_date"                   =>  date("d/m/Y")
));

DB::insert('new_application_address_status', array(
        "application_id"                     =>  $_SESSION['application_id'],
        "current_address"                    =>  $_POST['current_address'],
        "time_at_address"                =>  $_POST['time_at_the_address'],
));


function generateRandomString($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
$random = generateRandomString("8");
$random1 = generateRandomString("6");


$check = DB::queryFirstRow("select * from User where email = '".$_POST['email']."'");
if(DB::count() == 0)
{
    DB::insert('User', array(
        "email"         =>  $_POST['email'],
        "password"      =>  $random,
        "role_type"     => "customer",
        "invitation_by_broker_id"     => $broker_id

    ));
    $user_id = DB::insertId();

    $check['password'] = $random;

    DB::update('new_application', [
        "user_id"              =>  $user_id,
        "status_step"              =>  "step3",
        "status"              =>  "incomplete",
        "application_name"    =>  $random1,
        "no_of_applicant"    =>  $_POST['no_of_applicant']


    ], "id=%d", $_SESSION['application_id']);
}
else{
    DB::update('new_application', [
        "user_id"             =>  $check['id'],
        "status_step"         =>  "step3",
        "status"              =>  "incomplete",
        "application_name"    =>  $random1,
        "no_of_applicant"    =>  $_POST['no_of_applicant']


    ], "id=%d", $_SESSION['application_id']);
}

date_default_timezone_set("Australia/Sydney");
$max1 = "0";
//echo $max1."  - ";
$max = DB::query("select * from leads");
foreach($max as $m)
{
    if($m['sort'] >  $max1)
    {
//        echo"true<br>";
        $max1 = $m['sort'];
//        echo "if chala  >";
    }
//    echo $m['sort']." - ";
}
$maximum =  $max1 + 1;
//$max = DB::queryFirstField("select MAX(sort) from leads ");
//$maximum = $max['sort'] +1;
$l = DB::queryFirstRow("select * from leads where email = '".$_POST['email']."'");
if(DB::count() ==  0)
{


    DB::insert('leads', array(
        "client_name"              =>  $_POST['first_name']." ".$_POST['last_name'],
        "contact_no"               =>  $_POST['contact_no'],
        "broker_id"                =>  $broker_id,
        "email"                    =>  $_POST['email'],
        "lead_status"              =>  1,
        "lead_time"                =>  date("d-m-Y H:i:s"),
        "sort"                     =>  $maximum,
    ));
}
else{
    DB::update('leads', [
        "sort"             =>  $maximum,
        "lead_status"      =>  1,
    ], "id=%d", $l['id']);
}


$s = '<html><body>';
$s .= "

Hi ,"."<br><br>

Thank you for using Elements Online application form.<br><br>

Your Login credentials for Login into our system<br><br>

Email : ".$_POST['email']."<br>";
$s .= "Password : ".$check['password']."<br>";

$s .= "<p><a href='https://auzzietech.com/element_new/redirect_from_email.php'> Go To Application</a> and enter the above credentials to continue</p>

";
$s .= '</body></html>';
$message = $s;


ini_set('display_errors', 1);
error_reporting(E_ALL);
$from = "fahadhanifau@gmail.com";
$to = $_POST['email'];
$subject = "Finance Application Credentials";
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


echo "success";

echo json_encode("success");