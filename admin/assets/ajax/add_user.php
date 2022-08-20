<?php
session_start();
require_once __DIR__ . '/../inc/initDb.php';

$username = rand();

if($_POST['user_type'] == 'company')
{
    // IF USER SELECTS COMPANIES
    DB::insert('company', array(
        "name"                              		 =>  $_POST['name'],
        "username"                           	 	 =>  $_POST['username'],
        "trading_name"                         		 =>  $_POST['trading_name'],
        "abn"                              	 	     =>  $_POST['abn'],
        "office_address"                           	 =>  $_POST['office_address'],
        "acl_no"                         			 =>  $_POST['acl_no'],
        "credit_rep_no"                              =>  $_POST['credit_rep_no'],
        "contact_name"                           	 =>  $_POST['contact_name'],
        "contact_number"                         	 =>  $_POST['contact_number'],
        "number_of_directors"                        =>  $_POST['number_of_directors'],
        "contact_email"                           	 =>  $_POST['contact_email'],
        "password"                         	         =>  $_POST['password'],
        "logo"                         	             =>  $_POST['logo'],

    ));

}
else if ($_POST['user_type'] == 'broker')
{


// IF USER SELECTS BROKERS
    DB::insert('brokers', array(
        "company_id"                              =>  $_POST['company_id'],
        "trading_name"                         		 =>  $_POST['trading_name'],
        "office_address"                              =>  $_POST['office_address'],
        "contact_name"                           	 =>  $_POST['contact_name'],
        "contact_number"                         	 =>  $_POST['contact_number'],
        "contact_email"                           	 =>  $_POST['contact_email'],
        "username"                                    =>  $username,
        "password"                         	         =>  $_POST['password'],
    ));

    DB::insert('User', array(
        "company_id"                                  =>  $_POST['company_id'],
        "name"                                        =>  $_POST['contact_name'],
        "email"                                       =>  $_POST['contact_email'],
        "password"                         	          =>  $_POST['password'],
        "role_type"                         	          =>  "broker",
    ));
}
else if ($_POST['user_type'] == 'admin')
{
    DB::insert('super_admin', array(
        "name"                                        =>  $_POST['contact_name'],
        "email"                                       =>  $_POST['contact_email'],
        "password"                         	          =>  $_POST['password']
    ));
}



//
//$s = '<html><body>';
//$s .= "
//
//Hi ,"."<br><br>
//
//Thank you for using Element Platform.<br><br>
//Your Credentials Has Been Created.<br><br>
//
//Your Login credentials for Login into our system<br><br>
//
//Email : ".$_POST['contact_email']."<br>";
//$s .= "Password : ".$_POST['password']."<br>";
//
//$s .= "<p><a href='https://hotfixtech.com/element/'> Go To Broker Panel</a> and enter the above credentials to continue</p>
//
//";
//$s .= '</body></html>';
//$message = $s;
//
//
//ini_set('display_errors', 1);
//error_reporting(E_ALL);
//$from = "maseh@purecapital.com.au";
//$to = $_POST['email'];
//$subject = "New Broker Credentials";
////$message = "PHP mail works just fine";
//$headers = 'MIME-Version: 1.0' . "\r\n";
//$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
//
//// Create email headers
//$headers .= 'From: ' . $from . "\r\n" .
//    'Reply-To: ' . $from . "\r\n" .
//    'X-Mailer: PHP/' . phpversion();
//
//
//$s = mail($to, $subject, $message, $headers);
//


echo "success";
