<?php
session_start();
require_once __DIR__ . '/../inc/initDb.php';

$broker_id = $_SESSION['broker_id'];

//DB::queryFirstRow("select application_id  from new_application_basic_assets where application_id = '".$_POST['application_id']."'");
//if(DB::count() != 0)
//{
//    DB::delete('new_application_basic_assets', 'application_id=%d', $_POST['application_id']);
//}

//$_POST['application_id'] = 1;
//DB::insert('new_application_basic_assets', array(
//    "application_id"                                    =>  $_POST['application_id'],
//    "saving_cash_in_hand"                               =>  $_POST['saving_cash_in_hand'],
//    "home_and_contents"                                 =>  $_POST['home_and_contents'],
//    "superannuation"                                    =>  $_POST['superannuation'],
//    "home_estimated_value"                              =>  $_POST['home_estimated_value']
//));


if(!empty($_POST['personal_loans_outstanding_balance']))
{
    $itemCount = count($_POST["personal_loans_outstanding_balance"]);


    for($i=0; $i<$itemCount; $i++)
    {
        DB::insert('new_application_liabilities_personal_loans', array(
            "application_id"                                                 =>  $_POST['application_id'],
            "personal_loans_outstanding_balance"                             =>  $_POST['personal_loans_outstanding_balance'][$i],
            "personal_loans_repayments"                                      =>  $_POST['personal_loans_repayments'][$i],
            "personal_loans_repayments_select"                               =>  $_POST['personal_loans_repayments_select'][$i],
            "personal_loans_description"                                     =>  $_POST['personal_loans_description'][$i],
            "personal_loans_lender_bank"                                     =>  $_POST['personal_loans_lender_bank'][$i],
        ));
    }

}


if(!empty($_POST['secured_loans_outstanding_balance']))
{
    $itemCount = count($_POST["secured_loans_outstanding_balance"]);


    for($i=0; $i<$itemCount; $i++)
    {
        DB::insert('new_application_liabilities_secured_loans', array(
            "application_id"                                                =>  $_POST['application_id'],
            "secured_loans_outstanding_balance"                             =>  $_POST['secured_loans_outstanding_balance'][$i],
            "secured_loans_repayments"                                      =>  $_POST['secured_loans_repayments'][$i],
            "secured_loans_repayments_select"                               =>  $_POST['secured_loans_repayments_select'][$i],
            "secured_loans_description"                                     =>  $_POST['secured_loans_description'][$i],
            "secured_loans_lender_bank"                                     =>  $_POST['secured_loans_lender_bank'][$i],
        ));
    }

}


if(!empty($_POST['other_liabilities_outstanding_balance']))
{
    $itemCount = count($_POST["other_liabilities_outstanding_balance"]);


    for($i=0; $i<$itemCount; $i++)
    {
        DB::insert('new_application_liabilities_other_liabilities', array(
            "application_id"                                                      =>  $_POST['application_id'],
            "other_liabilities_outstanding_balance"                               =>  $_POST['other_liabilities_outstanding_balance'][$i],
            "other_liabilities_repayments"                                        =>  $_POST['other_liabilities_repayments'][$i],
            "other_liabilities_repayments_select"                                 =>  $_POST['other_liabilities_repayments_select'][$i],
            "other_liabilities_description"                                       =>  $_POST['other_liabilities_description'][$i],
            "other_liabilities_lender_bank"                                       =>  $_POST['other_liabilities_lender_bank'][$i],
        ));
    }

}


if(!empty($_POST['bank_type']))
{
    $itemCount = count($_POST["bank_type"]);


    for($i=0; $i<$itemCount; $i++)
    {
        DB::insert('new_application_credit_cards', array(
            "application_id"                                =>  $_POST['application_id'],
            "bank_type"                                     =>  $_POST['bank_type'][$i],
            "card_limit"                                    =>  $_POST['card_limit'][$i],
            "outstanding_balance"                           =>  $_POST['outstanding_balance'][$i]

        ));
    }

}

DB::update('new_application_customer', [
    "no_of_credit_cards"              =>  $_POST['no_of_credit_cards'],

], "application_id=%d", $_POST['application_id']);


DB::update('new_application', [
    "status_step"              =>  "step9",
    "status"              =>  "complete",
], "id=%d", $_POST['application_id']);




echo json_encode("success");