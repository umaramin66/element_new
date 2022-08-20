<?php
session_start();
require_once __DIR__ . '/../inc/initDb.php';

$broker_id = $_SESSION['broker_id'];

DB::queryFirstRow("select application_id  from new_application_basic_assets where application_id = '".$_POST['application_id']."'");
if(DB::count() != 0)
{
    DB::delete('new_application_basic_assets', 'application_id=%d', $_POST['application_id']);


}

DB::queryFirstRow("select application_id  from new_application_investment_properties  where application_id = '".$_POST['application_id']."'");
if(DB::count() != 0)
{


    DB::delete('new_application_investment_properties', 'application_id=%d', $_POST['application_id']);


}

DB::queryFirstRow("select application_id  from new_application_motor_vehicles where application_id = '".$_POST['application_id']."'");
if(DB::count() != 0)
{
    DB::delete('new_application_motor_vehicles', 'application_id=%d', $_POST['application_id']);

}

DB::queryFirstRow("select application_id  from new_application_recreational_assets where application_id = '".$_POST['application_id']."'");
if(DB::count() != 0)
{
    DB::delete('new_application_recreational_assets', 'application_id=%d', $_POST['application_id']);

}

DB::queryFirstRow("select application_id  from new_application_other_assets where application_id = '".$_POST['application_id']."'");
if(DB::count() != 0)
{
    DB::delete('new_application_other_assets', 'application_id=%d', $_POST['application_id']);

}



//$_POST['application_id'] = 1;
DB::insert('new_application_basic_assets', array(
    "application_id"                                    =>  $_POST['application_id'],
    "saving_cash_in_hand"                               =>  $_POST['saving_cash_in_hand'],
    "home_and_contents"                                 =>  $_POST['home_and_contents'],
    "superannuation"                                    =>  $_POST['superannuation'],
    "home_estimated_value"                              =>  $_POST['home_estimated_value']
));


if(!empty($_POST['investment_properties_estimated_value']))
{
    $itemCount = count($_POST["investment_properties_estimated_value"]);


    for($i=0; $i<$itemCount; $i++)
    {
        if($_POST['investment_properties_estimated_value'][$i] != "")
        {
            DB::insert('new_application_investment_properties', array(
                "application_id"                                                            =>  $_POST['application_id'],
                "investment_properties_estimated_value"                                     =>  $_POST['investment_properties_estimated_value'][$i],
                "investment_properties_mortgage_value"                                      =>  $_POST['investment_properties_mortgage_value'][$i],
                "investment_properties_repayments"                                          =>  $_POST['investment_properties_repayments'][$i],
                "investment_properties_repayments_select"                                   =>  $_POST['investment_properties_repayments_select'][$i],
                "investment_properties_lender_bank"                                   =>  $_POST['investment_properties_lender_bank'][$i]
            ));
        }

    }

}


if(!empty($_POST['motor_vehicles_estimated_value']))
{
    $itemCount1 = count($_POST["motor_vehicles_estimated_value"]);


    for($i=0; $i<$itemCount1; $i++)
    {

        if($_POST['motor_vehicles_estimated_value'][$i] != "") {
            DB::insert('new_application_motor_vehicles', array(
                "application_id" => $_POST['application_id'],
                "motor_vehicles_estimated_value" => $_POST['motor_vehicles_estimated_value'][$i],
                "motor_vehicles_loan_balance" => $_POST['motor_vehicles_loan_balance'][$i],
                "motor_vehicles_repayments" => $_POST['motor_vehicles_repayments'][$i],
                "motor_vehicles_repayments_select" => $_POST['motor_vehicles_repayments_select'][$i],
                "motor_vehicles_lender_bank" => $_POST['motor_vehicles_lender_bank'][$i]
            ));
        }

    }
}


if(!empty($_POST['recreational_assets_estimated_value']))
{
    $itemCount2 = count($_POST["recreational_assets_estimated_value"]);

    for($i=0; $i<$itemCount2; $i++)
    {

        if($_POST['recreational_assets_estimated_value'][$i] != "") {
            DB::insert('new_application_recreational_assets', array(
                "application_id" => $_POST['application_id'],
                "recreational_assets_estimated_value" => $_POST['recreational_assets_estimated_value'][$i],
                "recreational_assets_loan_balance" => $_POST['recreational_assets_loan_balance'][$i],
                "recreational_assets_repayments" => $_POST['recreational_assets_repayments'][$i],
                "recreational_assets_repayments_select" => $_POST['recreational_assets_repayments_select'][$i],
                "recreational_assets_lender_bank" => $_POST['recreational_assets_lender_bank'][$i]
            ));
        }

    }
}


if(!empty($_POST['other_assets_estimated_value']))
{
    $itemCount3 = count($_POST["other_assets_estimated_value"]);

    for($i=0; $i<$itemCount3; $i++)
    {

        if($_POST['other_assets_estimated_value'][$i] != "") {
            DB::insert('new_application_other_assets', array(
                "application_id" => $_POST['application_id'],
                "other_assets_estimated_value" => $_POST['other_assets_estimated_value'][$i],
                "other_assets_loan_balance" => $_POST['other_assets_loan_balance'][$i],
                "other_assets_repayments" => $_POST['other_assets_repayments'][$i],
                "other_assets_repayments_select" => $_POST['other_assets_repayments_select'][$i],
                "description" => $_POST['other_assets_description'][$i],
                "other_assets_lender_bank" => $_POST['other_assets_lender_bank'][$i],
            ));
        }

    }
}

DB::update('new_application', [
    "status_step"              =>  "step7",
    "status"              =>  "incomplete",
], "id=%d", $_POST['application_id']);

echo json_encode("success");