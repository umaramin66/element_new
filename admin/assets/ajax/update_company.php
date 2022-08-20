<?php
session_start();
require_once __DIR__ . '/../inc/initDb.php';

if($_POST['hidden_image'] == 1)
{
    $fileName = $_FILES['logo']['name'];
    $fileTmpName  = $_FILES['logo']['tmp_name'];



    $uploadDirectory = "../../../images/company/";

    $uploadPath =  $uploadDirectory . $fileName;

    $didUpload = move_uploaded_file($fileTmpName, $uploadPath);

    $imagePath = "https://hotfixtech.com/element/images/company/".$fileName;

    DB::update('company', [
        "logo"                         	         =>  $imagePath
    ], "id=%d", $_POST['company_id']);

}

DB::update('company', [
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
    "password"                         	         =>  $_POST['password']


], "id=%d", $_POST['company_id']);



echo "success";




