<?php
session_start();
require_once __DIR__ . '/../inc/initDb.php';

$broker_id = $_SESSION['broker_id'];
//$_POST['application_id'] = 1;

DB::queryFirstRow("select application_id  from new_application_finance_asset_detail where application_id = '".$_POST['application_id']."'");
if(DB::count() != 0)
{
    DB::delete('new_application_finance_asset_detail', 'application_id=%d', $_POST['application_id']);
}


if($_POST['loan_type'] == 'asset_finance')
{
    DB::insert('new_application_finance_asset_detail', array(
        "application_id"                                    =>  $_POST['application_id'],
        "loan_type"                                         =>  $_POST['loan_type'],
        "loan_amount_asset_finance"                         =>  $_POST['loan_amount_asset_finance'],
        "deposit_asset_finance"                             =>  $_POST['deposit_asset_finance'],
        "residual_balloon_asset_finance"                    =>  $_POST['residual_balloon_asset_finance'],
        "amount_asset_finance"                              =>  $_POST['amount_asset_finance'],
        "loan_term"                                         =>  $_POST['loan_term'],
        "asset_detail_radio"                                =>  $_POST['asset_detail_radio'],
        "asset_detail_build_year"                           =>  $_POST['asset_detail_build_year'],
        "asset_detail_build_year_radio"                     =>  $_POST['asset_detail_build_year_radio'],
        "asset_detail_make"                                 =>  $_POST['asset_detail_make'],
        "asset_detail_make_radio"                           =>  $_POST['asset_detail_make_radio'],
        "asset_detail_model"                                =>  $_POST['asset_detail_model'],
        "asset_detail_model_radio"                          =>  $_POST['asset_detail_model_radio'],
        "asset_detail_buying_from_radio"                    =>  $_POST['asset_detail_buying_from_radio'],


    ));
}
else if ($_POST['loan_type'] == 'personal_loan')
{
    DB::insert('new_application_finance_asset_detail', array(
        "application_id"                                    =>  $_POST['application_id'],
        "loan_type"                                         =>  $_POST['loan_type'],
        "loan_amount_asset_finance"                         =>  $_POST['loan_amount_personal'],
        "loan_term"                                         =>  $_POST['loan_term_personal']



    ));
}
else if ($_POST['loan_type'] == 'business_loan')
{
    DB::insert('new_application_finance_asset_detail', array(
        "application_id"                                    =>  $_POST['application_id'],
        "loan_type"                                         =>  $_POST['loan_type'],
        "loan_amount_asset_finance"                         =>  $_POST['loan_amount_business'],
        "loan_term"                                         =>  $_POST['loan_term_business'],

    ));
}

DB::update('new_application', [
    "status_step"              =>  "step2",
    "status"              =>  "incomplete",
], "id=%d", $_POST['application_id']);


echo json_encode("success");