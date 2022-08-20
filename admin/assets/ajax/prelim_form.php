<?php
session_start();
require_once __DIR__ . '/../inc/initDb.php';

$broker_id = $_SESSION['broker_id'];

DB::queryFirstRow("select * from prelim_form where application_id = '".$_POST['application_id']."'");
if(DB::count() != 0)
{
    DB::delete('prelim_form', 'application_id=%d', $_POST['application_id']);
}
DB::insert('prelim_form', array(
    "lead_id"                                        =>  $_POST['lead_id'],
    "broker_id"                                      =>  $_POST['broker_id'],
    "application_id"                                 =>  $_POST['application_id'],
    "purchase_amount"                                =>  $_POST['purchase_amount'],
    "establishment_fee"                              =>  $_POST['establishment_fee'],
    "broker_origination_fee"                         =>  $_POST['broker_origination_fee'],
    "less_deposit_already_paid"                      =>  $_POST['less_deposit_already_paid'],
    "loan_amount_to_be_financed"                     =>  $_POST['loan_amount_to_be_financed'],
    "credit_provider"                                =>  $_POST['credit_provider'],
    "interest_rate"                                  =>  $_POST['interest_rate'],
));
DB::insert('logs', array(
    "broker_id"         =>  $_POST['broker_id'],
    "lead_id"           =>  $_POST['lead_id'],
    "log_date"          =>  date("d-m-Y H:i:s"),
    "log_detail"        =>  "Prelim Form Sent To Client For E-Signature"

));
echo "success";