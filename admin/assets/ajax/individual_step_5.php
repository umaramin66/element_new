<?php
session_start();
require_once __DIR__ . '/../inc/initDb.php';

$broker_id = $_SESSION['broker_id'];

DB::queryFirstRow("select application_id  from new_application_expenses where application_id = '".$_POST['application_id']."'");
if(DB::count() != 0)
{
    DB::delete('new_application_expenses', 'application_id=%d', $_POST['application_id']);
}


DB::insert('new_application_expenses', array(
    "application_id"                                    =>  $_POST['application_id'],
    "groceries"                                         =>  $_POST['groceries'],
    "groceries_select"                                  =>  $_POST['groceries_select'],
    "utility_bills"                                     =>  $_POST['utility_bills'],
    "utility_bills_select"                              =>  $_POST['utility_bills_select'],
    "insurance_bills"                                   =>  $_POST['insurance_bills'],
    "insurance_bills_select"                            =>  $_POST['insurance_bills_select'],
    "mobile_phone"                                      =>  $_POST['mobile_phone'],
    "mobile_phone_select"                               =>  $_POST['mobile_phone_select'],
    "fuel_car_expenses"                                 =>  $_POST['fuel_car_expenses'],
    "fuel_car_expenses_select"                          =>  $_POST['fuel_car_expenses_select'],
    "other_regular_expenses"                            =>  $_POST['other_regular_expenses'],
    "other_regular_expenses_select"                     =>  $_POST['other_regular_expenses_select'],
    "description_other_expenses"                        =>  $_POST['description_other_expenses'],
    "rent"                                              =>  $_POST['rent'],
    "rent_select"                                       =>  $_POST['rent_select'],
    "mortagege_repayment"                               =>  $_POST['mortagege_repayment'],
    "mortagege_repayment_select"                        =>  $_POST['mortagege_repayment_select'],
    "forseen_changes_expenses_select"                   =>  $_POST['forseen_changes_expenses_select'],
    "forseen_changes_expenses_detail"                   =>  $_POST['forseen_changes_expenses_detail']

));
DB::update('new_application', [
    "status_step"              =>  "step6",
    "status"              =>  "incomplete",
], "id=%d", $_POST['application_id']);

echo json_encode("success");