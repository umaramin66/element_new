<?php
session_start();
require_once __DIR__ . '/../inc/initDb.php';

$broker_id = $_SESSION['broker_id'];

DB::queryFirstRow("select application_id  from new_application_employement where application_id = '".$_POST['application_id']."'");
if(DB::count() != 0)
{
    DB::delete('new_application_employement', 'application_id=%d', $_POST['application_id']);
}


$itemCount = count($_POST['job_title']);

for($i=0; $i<$itemCount; $i++)
{
    if(!empty($_POST['job_title'][$i])){


        DB::insert('new_application_employement', array(
            "application_id"                        => $_POST['application_id'],
            "type_of_employment"                    => $_POST['type_of_employment'][$i],
            "job_title"                             => $_POST['job_title'][$i],
            "company_business_name"                 => $_POST['company_business_name'][$i],
            "company_address"                       => $_POST['company_address'][$i],
            "manager_hr_name"                       => $_POST['manager_hr_name'][$i],
            "manager_hr_contact_no"                 => $_POST['manager_hr_contact_no'][$i],
            "type_of_employment_month"              => $_POST['type_of_employment_month'][$i],
            "type_of_employment_year"               => $_POST['type_of_employment_year'][$i]
        ));
    }
}

DB::update('new_application', [
    "status_step"              =>  "step4",
    "status"              =>  "incomplete"
], "id=%d", $_POST['application_id']);


echo json_encode("success");