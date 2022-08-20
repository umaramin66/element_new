<?php
session_start();
require_once '../inc/initDb.php';

$email = $_POST['email'];
$password = $_POST['password'];


$admin = DB::queryFirstRow("select * from User where email = '$email' and password = '$password'");


    if ($email == $admin['email'] and $password == $admin['password']) {

        //IF CUSTOMER LOGINS, WE NEED TO REDIRECT TO APPLICATION FORMS
        if($admin['role_type'] == 'customer')
        {

            $_SESSION['customer_email'] = $email;
            $_SESSION['customer_id'] = $admin['id'];
            $_SESSION['broker_id'] = $admin['invitation_by_broker_id'];
            echo json_encode("customer");


        }
        else if ($admin['role_type'] == 'broker'){
            //startAdminSession();
            $_SESSION['admin'] = $email;
            $_SESSION['broker_id'] = $admin['id'];
            $_SESSION['customer_id'] = "";
            echo json_encode("broker");
        }
}
    else{
        echo json_encode("false");
    }
