<?php
session_start();
require_once __DIR__ . '/../inc/initDb.php';

$broker_id = $_SESSION['broker_id'];

DB::queryFirstRow("select application_id  from new_application_income where application_id = '".$_POST['application_id']."'");
if(DB::count() != 0)
{
    DB::delete('new_application_income', 'application_id=%d', $_POST['application_id']);
}


DB::insert('new_application_income', array(
    "application_id"                        =>  $_POST['application_id'],
    "income_net_after_tax"                  =>  $_POST['income_net_after_tax'],
    "income_net_after_tax_select"           =>  $_POST['income_net_after_tax_select'],
    "spouse_income"                         =>  $_POST['spouse_income'],
    "spouse_income_select"                  =>  $_POST['spouse_income_select'],
    "other_income"                          =>  $_POST['other_income'],
    "other_income_select"                   =>  $_POST['other_income_select'],
    "description_other_income"              =>  $_POST['description_other_income'],
    "forseen_changes_employment_select"     =>  $_POST['forseen_changes_employment_select'],
    "forseen_changes_employment_detail"     =>  $_POST['forseen_changes_employment_detail']

));

DB::update('new_application', [
    "status_step"              =>  "step5",
    "status"              =>  "incomplete",
], "id=%d", $_POST['application_id']);

echo json_encode("success");