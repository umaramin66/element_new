<?php
require_once __DIR__ . '/../inc/initDb.php';
session_start();
$broker_id = $_SESSION['broker_id'];



                    $name = $_POST['client_name'];
                  

                    $company_name = $_POST['company_name'];
                  

                    $contactno = $_POST['contact_no'];
                    

                    $association = $_POST['association'];
                   

                    $notes = $_POST['notes'];   
                    
                    $id = $_POST['edit_id'];

		echo "update contacts set name='$name', company_name='$company_name', contact_no='$contactno', association='$association', notes='$notes' where id='$id'";

DB::query("update contacts set name='$name', company_name='$company_name', contact_no='$contactno', association='$association', notes='$notes' where id='$id'");



echo json_encode("success");
