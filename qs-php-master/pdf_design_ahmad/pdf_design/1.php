<?php
require 'inc/initDb.php';

if(isset($_GET['application_id']))
{
    $application_id = $_GET['application_id'];
}
else{
    $application_id = 1;
}

$data               = DB::queryFirstRow("select * from new_application_customer where application_id = $application_id");
$employ_data        = DB::query("select * from new_application_employement where application_id = $application_id");
$income_data        = DB::queryFirstRow("select * from new_application_income where application_id = $application_id");
$expense_data       = DB::queryFirstRow("select * from new_application_expenses where application_id = $application_id");
$loan_detail        = DB::queryFirstRow("select * from new_application_finance_asset_detail where application_id = $application_id");




$html = "
<html>
<head>
<style>
.page-break {
    page-break-after: always;
}
.div2 {
  width: 700px;
  height: auto;  
  padding: 50px;
  border: 3px solid #8C8E90;
  border-radius : 12px;
}
.investment_properties{
width: 700px;
  height: auto;  
  padding: 50px;
  border: 3px solid #8C8E90;
  border-radius : 12px;
}
.basic_assets{
 width: 700px;
  height: auto;  
  padding: 50px;
  border: 3px solid #8C8E90;
  border-radius : 12px;
}
.expense_details{
 width: 700px;
  height: auto;  
  padding: 50px;
  border: 3px solid #8C8E90;
  border-radius : 12px;
}
.finance_details{
width: 700px;
  height: auto;  
  padding: 50px;
  border: 3px solid #8C8E90;
  border-radius : 12px;
}
.employement_history{
width: 700px;
  height: auto;  
  padding: 50px;
  border: 3px solid #8C8E90;
  border-radius : 12px;
}
.div3 {
  width: 700px;
  height: auto;  
  padding: 50px;
  border: 3px solid #8C8E90;
  border-radius : 12px;
}
.loan_heading{
        color:color:#4CAF50;
}
</style>
</head>
<body>


<div class=\"div1\">
    <h4>ABN : ".$data['abn']."</h4>
    <h4>Address : ".$data['current_address']." </h4>
    <h4>date : ".$data['application_date']."</h4>
    <br><br>
        <h2 style=\"color:#4CAF50;text-align:left;float:left;\">Applicant Name :</h2>  <h2 style=\"text-align:center;\">".ucfirst($data['name_type'])." ".$data['first_name']." ".$data['last_name']." </h2>
       
</div>
<br>
<div class=\"div2\">
    <h3 style=\"color:#4CAF50\">Loan Details</h3>
    <h4>Amount : ".$loan_detail['loan_amount_asset_finance']."</h4>
    <h4>Loan Type : ".ucfirst($loan_detail['loan_type'])."</h4>
    <h4>Loan Term : ".$loan_detail['loan_term']." Year"."</h4>
</div>

<div class=\"page-break\"></div>
<div class=\"div3\">
    <h3 style=\"color:#4CAF50\">Personal Details</h3>
    <h4>First Name : ".$data ['first_name']."</h4>
    <h4>Last Name : ".$data ['last_name']."</h4>
    <h4>Gender : ".$data ['gender']."</h4>
    <h4>Email : ".ucfirst($data ['email'])."</h4>
    <h4>Marital Status : ".ucfirst($data ['marital_status'])."</h4>
    <h4>Driving License No : ".ucfirst($data['driver_license_no'])."</h4>
    <h4>Driving License Expiry  : ".ucfirst($data['driver_license_expiry_date'])."</h4>
    <h4>Driving License State : ".ucfirst($data['state_issued'])."</h4>
    <h4>Residence Status : ".ucfirst($data['residence_status'])."</h4>
</div>
<div class=\"page-break\"></div>
<div class=\"employement_history\">
    <h3 style=\"color:#4CAF50\">Employement History</h3>";
foreach ($employ_data as $employ)
{
    $html.="<h4>From : ".$employ['type_of_employment_month']."  ".$employ['type_of_employment_year']."</h4>
        <h4>Type of Employment : ".$employ['type_of_employment']."</h4>
        <h4>Company/business name : ".$employ['company_business_name']."</h4>
        <h4>Job Title : ".$employ['job_title']."</h4>
        <h4>Company Address : ".$employ['company_address']."</h4>";

}


$html .="</div><div class=\"page-break\"></div>";

$html .="<div class=\"finance_details\">
    <h3 style=\"color:#4CAF50\">Finance Details</h3>
    <h4>Net salary : ".$income_data['income_net_after_tax']."$ per  ".$income_data['income_net_after_tax_select']."</h4>
    <h4>Details of Foreseen Changes in Income : ".$income_data['forseen_changes_employment_select']."</h4>
    <h4>Spouse Income : ".$income_data['spouse_income']."$ per  ".$income_data['spouse_income_select']."</h4>
    <h4>Other Income : ".$income_data['other_income']."$ per  ".$income_data['other_income_select']."</h4>

  
</div><br>";

$html .="<div class=\"basic_assets\">
    <h3 style=\"color:#4CAF50\">BASIC ASSETS</h3>
    <h4>Saving Cash In hand : ".$basic_assets['saving_cash_in_hand']."</h4>
    <h4>Home And Contents : ".$basic_assets['home_and_contents']."</h4>
    <h4>Superannuation : ".$basic_assets['superannuation']."</h4>
    <h4>Home Estimated value : ".$basic_assets['home_estimated_value']."</h4>
  
  
</div><br><div class=\"page-break\"></div>";

$html .="<div class=\"expense_details\">
    <h3 style=\"color:#4CAF50\">Expense Details</h3>
    <h4>Groceries Payment : ".$expense_data['groceries'].'$ per  '.$expense_data['groceries_select']."</h4>
    <h4>Utility Payments : ".$expense_data['utility_bills'].'$ per  '.$expense_data['utility_bills_select']."</h4>
    <h4>Insurance Payments : ".$expense_data['insurance_bills'].'$ per  '.$expense_data['insurance_bills_select']."</h4>
    <h4>Mobile Phone : ".$expense_data['mobile_phone'].'$ per  '.$expense_data['mobile_phone_select']."</h4>
    <h4>Fuel Car Expenses : ".$expense_data['fuel_car_expenses'].'$ per  '.$expense_data['fuel_car_expenses_select']."</h4>
    <h4>Other Expenses : ".$expense_data['other_regular_expenses'].'$ per  '.$expense_data['other_regular_expenses_select']."</h4>
    <h4>Rent : ".$expense_data['rent'].'$ per  '.$expense_data['rent_select']."</h4>
    <h4>Mortagege Repayment : ".$expense_data['mortagege_repayment'].'$ per  '.$expense_data['mortagege_repayment_select']."</h4>
    <h4>Any Forseen Changes  : ".$expense_data['forseen_changes_expenses_select'].'   '.$expense_data['forseen_changes_expenses_detail']."</h4>

  
</div>";



$investment_properties  = DB::query("select * from new_application_investment_properties where application_id = $application_id");
$motor_vehicles         = DB::query("select * from new_application_motor_vehicles where application_id = $application_id");
$recreational_assets    = DB::query("select * from new_application_recreational_assets where application_id = $application_id");
$other_assets           = DB::query("select * from new_application_other_assets where application_id = $application_id");
$personal_loan          = DB::query("select * from new_application_liabilities_personal_loans where application_id = $application_id");
$secured_loan           = DB::query("select * from new_application_liabilities_secured_loans where application_id = $application_id");
$other_liabilities      = DB::query("select * from new_application_liabilities_other_liabilities where application_id = $application_id");


if(!empty($investment_properties))
{
    $html .="
<div class=\"page-break\"></div><div class=\"investment_properties\">
    <h3 style=\"color:#4CAF50\">Investment properties</h3>";
    foreach ($investment_properties as $investment_property)
    {
        $html.="<h4>Property Value : ".$investment_property['investment_properties_estimated_value']."</h4>
        <h4>Mortgage Value : ".$investment_property['investment_properties_mortgage_value']."</h4>";


    }


    $html .="</div><br>";
}


if(!empty($motor_vehicles))
{
    $html .="
<div class=\"page-break\"></div><div class=\"investment_properties\">
    <h3 style=\"color:#4CAF50\">Motor Vehicles</h3>";
    foreach ($motor_vehicles as $motor_vehicle)
    {
        $html.="<h4>Vehicle Value : ".$motor_vehicle['motor_vehicles_estimated_value']."</h4>
        <h4>Loan balance : ".$motor_vehicle['motor_vehicles_loan_balance']."</h4>";

    }

    $html .="</div><br>";
}


if(!empty($recreational_assets ))
{
    $html .="
<div class=\"page-break\"></div><div class=\"investment_properties\">
    <h3 style=\"color:#4CAF50\">Recreational Assets </h3>";
    foreach ($recreational_assets  as $recreational_asset)
    {
        $html.="<h4>Estimated Value : ".$recreational_asset['recreational_assets_estimated_value']."</h4>
        <h4>Loan balance : ".$recreational_asset['recreational_assets_loan_balance']."</h4>";

    }

    $html .="</div><br>";
}



if(!empty($other_assets ))
{
    $html .="
<div class=\"page-break\"></div><div class=\"investment_properties\">
    <h3 style=\"color:#4CAF50\">Other Assets </h3>";
    foreach ($other_assets   as $other_asset)
    {
        $html.="<h4>Estimated Value : ".$other_asset['other_assets_estimated_value']."</h4>
        <h4>Loan balance : ".$other_asset['other_assets_loan_balance']."</h4>";

    }

    $html .="</div><br>";
}

$html .="</body>
</html>";

$filename = "newpdffile";

// include autoloader
require_once 'pdf/dompdf/autoload.inc.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();

$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream($filename);

//for saving onto browser
//$output = $dompdf->output();
//file_put_contents('Brochure.pdf', $output);





