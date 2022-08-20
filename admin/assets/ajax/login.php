<?php
session_start();
require_once '../inc/initDb.php';

$email = $_POST['email'];
$password = $_POST['password'];


$admin = DB::queryFirstRow("select * from super_admin where email = '$email' and password = '$password'");


    if ($email == $admin['email'] and $password == $admin['password']) {

        //IF CUSTOMER LOGINS, WE NEED TO REDIRECT TO APPLICATION FORMS
        $_SESSION['admin_email'] = $email;
        $_SESSION['admin_id'] = $admin['id'];
       echo json_encode("success");

}
    else{
        echo json_encode("false");
    }
