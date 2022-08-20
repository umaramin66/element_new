<?php
session_start();
require_once __DIR__ . '/../inc/initDb.php';

$broker_id = $_SESSION['broker_id'];



                    $name = $_POST['client_name'];
                  

                    $company_name = $_POST['company_name'];
                  

                    $contactno = $_POST['contact_no'];
                    

                    $association = $_POST['association'];
                   

                    $notes = $_POST['notes'];                 

		

DB::query("insert into contacts(name,broker_id,company_name,contact_no,association,notes) values ('$name','$broker_id','$company_name','$contactno','$association','$notes')");



echo json_encode("success");
