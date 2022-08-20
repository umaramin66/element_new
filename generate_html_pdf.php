<?php
require 'assets/inc/initDb.php';

if(isset($_GET['application_id']))
{
    $application_id = $_GET['application_id'];
}

$data               = DB::queryFirstRow("select * from new_application_customer where application_id = $application_id");
$app_id             = DB::queryFirstRow("select * from new_application where id = '".$application_id."'");
$broker             = DB::queryFirstRow("select * from User where id = '".$app_id['broker_id']."'");
$employ_data        = DB::query("select * from new_application_employement where application_id = $application_id");
$income_data        = DB::queryFirstRow("select * from new_application_income where application_id = $application_id");
$expense_data       = DB::queryFirstRow("select * from new_application_expenses where application_id = $application_id");
$loan_detail        = DB::queryFirstRow("select * from new_application_finance_asset_detail where application_id = $application_id");
$basic_assets        = DB::queryFirstRow("select * from new_application_basic_assets where application_id = $application_id");


$company_detail =    DB::queryFirstRow("select id,logo from company where id = '".$broker['company_id']."' ");
$logoo = $company_detail['logo'];



$html = "
<html>
<head>
<style>
legend {
   
    color: #ccc;
    padding: 5px 10px;
    margin: 0 auto;
    width: 100px;
     
         
  }
  .leg{
  padding: 11px 31px;
   border: 2px solid #ccc;
      
         text-align: center;
        
         color: black;
         
  }
  .new{
 
 
  margin: 50px;
 
 }
table {
 margin-top: 60px;
}

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
footer {
                position: fixed; 
                bottom: 0cm; 
                left: 0cm; 
                right: 0cm;
                height: 2cm;

                /** Extra personal styles **/
                background-color: #fff;
                color: #8C8E90;
                text-align: center;
                line-height: 1.5cm;
            }
</style>
</head>
<body>";


$html .="<div class=\"div1\">
<h3 align='center'> <img src=\"chapter.PNG\" class=\"img-rounded\" alt=\"Cinque Terre\" width=\"250\" height=\"100\"> 
									 
									 </h3>
    <br>
    <h3 align='center'> <img src='$logoo' class=\"img-rounded\" alt=\"Company Logo\" width=\"400\" height=\"200\"> 
									 
									 </h3>
        <h2 style=\"color:#4CAF50;text-align:left;float:left;\">Application For :</h2>  <h2 style=\"text-align:center;\">".ucfirst($data['name_type'])." ".$data['first_name']." ".$data['last_name']." </h2>
         <br><br>
        <h2 style=\"color:#4CAF50;text-align:left;float:left;\">Broker :  ".$broker['name'] ."</h2><br><br><br>
        <h2 style=\"color:#4CAF50;text-align:left;float:left;\">Date Submitted  :  ".$data['application_date'] ."</h2><br><br><br>
        <h2 style=\"color:#4CAF50;text-align:left;float:left;\">Application Name  :  ".$app_id['application_name'] ."</h2><br><br>
        
</div>

 <footer>
            
            <h4 style=\"text-align:left;float:left;\"><b>Date : ".$data['application_date']."</b></h4>
            <h4 style=\"text-align:right;float:right;\"><b>Broker Name : ".$broker['name']."</b></h4>
 </footer>
<br>
<div class=\"page-break\"></div>




 <div class=\"new\">
    <Fieldset style=\"border: 1px solid #c7c4c4;\">
    <legend align=\"center\" style=\"margin-left: 354px; background: linear-gradient(-135deg, #1de9b6 0%, #1dc4e9 100%);\" class=\"leg\"><strong>Loan Details</strong></legend>
        
        <table style=\"width: 100%;  border-collapse: collapse;\">
       
          
            <tr>
                <th>Applying Loan as:</th>
                <td>".ucfirst($app_id['applying_loan_as'])."</td>
                
              </tr>
              <tr>
                <th>Loan Type:</th>
                <td>".ucfirst($loan_detail['loan_type'])."</td>
                
              </tr>
              <tr>
                <th>Loan Amount:</th>
                <td>$".$loan_detail['loan_amount_asset_finance']."</td>
              </tr>";
                if(!empty($loan_detail['residual_balloon_asset_finance']))
                {
                    $html .="<tr>
                     <th>Residual Balloon :</th>
                        <td>".$loan_detail['residual_balloon_asset_finance']."%</td>
                    </tr>";
                }

              $html .="<tr>
                <th>Loan Term (Length) :</th>
                <td>".$loan_detail['loan_term']." Year"."</td>
              </tr>
             
        </table>

        </Fieldset>
      </div>

";

  if($loan_detail['loan_type'] == 'asset_finance')
  {
$html .="</div>



 <div class=\"new\">
    <Fieldset style=\"border: 1px solid #c7c4c4;\">
    <legend align=\"center\" style=\"margin-left: 354px;background: linear-gradient(-135deg, #1de9b6 0%, #1dc4e9 100%);\" class=\"leg\"><strong>Asset Details</strong></legend>
        
        <table style=\"width: 100%;\">
      
            <tr>
                <th>Buying a:</th>
                <td>".$loan_detail['asset_detail_radio']."</td>
              </tr>
              <tr>
                <th>Build Year:</th>
                <td>".$loan_detail['asset_detail_build_year']."</td>
              </tr>
              <tr>
                <th>Make:</th>
                <td>".$loan_detail['asset_detail_make']."</td>
              </tr>
              <tr>
                <th>Model :</th>
                <td>".$loan_detail['asset_detail_model']."</td>
              </tr>
              <tr>
                <th>Buying From :</th>
                <td>".$loan_detail['asset_detail_buying_from_radio']."</td>
              </tr>
             
        </table>

        </Fieldset>
      </div>
";
}

$html .="<div class=\"page-break\"></div>

<div class=\"new\">
    <Fieldset style=\"border: 1px solid #c7c4c4;\">
    <legend align=\"center\" style=\"margin-left: 354px;background: linear-gradient(-135deg, #1de9b6 0%, #1dc4e9 100%);\" class=\"leg\"><strong>Main Applicant</strong></legend>
        
        <table style=\"width: 100%;\">
           <br><br>
            <tr>
                <th>First Name:</th>
                <td>".$data ['first_name']."</td>
              </tr>
              <tr>
                <th>Last Name:</th>
                <td>".$data ['last_name']."</td>
              </tr>
              <tr>
                <th>Email:</th>
                <td>".ucfirst($data ['email'])."</td>
              </tr>
              <tr>
                <th>Contact No :</th>
                <td>".$data ['contact_no']."</td>
              </tr>
              <tr>
                <th>Gender :</th>
                <td>".$data ['gender']."</td>
              </tr>
               <tr>
                <th>Date of Birth:</th>
                <td>".$data ['birth_date']."</td>
              </tr>
              <tr>
                <th>Marital Status:</th>
                <td>".ucfirst($data ['marital_status'])."</td>
              </tr>
              <tr>
                <th>Driving License No :</th>
                <td>".ucfirst($data['driver_license_no'])."</td>
              </tr>
              <tr>
                <th>Driving License Expiry :</th>
                <td>".ucfirst($data['driver_license_expiry_date'])."</td>
              </tr>
              <tr>
                <th>Driving License State :</th>
                <td>".ucfirst($data['state_issued'])."</td>
              </tr>
               <tr>
                <th>Residence Status :</th>
                <td>".ucfirst($data['residence_status'])."</td>
              </tr>
             
        </table>

    </Fieldset>
</div>


";


$html .="<div class=\"page-break\"></div>";
$html .="<div class=\"new\">
    <Fieldset style=\"border: 1px solid #c7c4c4;\">
    <legend align=\"center\" style=\"margin-left: 354px;background: linear-gradient(-135deg, #1de9b6 0%, #1dc4e9 100%);\" class=\"leg\"><strong>Employement History</strong></legend>
        
        <table style=\"width: 100%;\"> ";
foreach ($employ_data as $employ){
    $html.="<tr>
                <th>From :</th>
                <td>".$employ['type_of_employment_month']."  ".$employ['type_of_employment_year']."</td>
              </tr>
              <tr>
                <th>Type of Employment:</th>
                <td>".$employ['type_of_employment']."</td>
                
              </tr>
              <tr>
                <th>Company/business name:</th>
                <td>".$employ['company_business_name']."</td>
              </tr>
              <tr>
                <th>Job Title :</th>
                <td>".$employ['job_title']."</td>
              </tr>
              <tr>
                <th>Company Address :</th>
                <td>".$employ['company_address']."</td>
              </tr><br>";

}
$html .="</table>

        </Fieldset>
      </div>";




$html .="</div><div class=\"page-break\"></div>";

$html .="
<div class=\"new\">
    <Fieldset style=\"border: 1px solid #c7c4c4;\">
    <legend align=\"center\" style=\"margin-left: 354px;background: linear-gradient(-135deg, #1de9b6 0%, #1dc4e9 100%);\" class=\"leg\"><strong>Income</strong></legend>
        
        <table style=\"width: 100%;\">
           <br><br>
            <tr>
                <th>Income (Net) after Tax:</th>
                <td>$".$income_data['income_net_after_tax']." Per
                ".$income_data['income_net_after_tax_select']."</td>
              </tr>
              <tr>
                <th>Spouse Income:</th>
                <td>$".$income_data['spouse_income']." Per
                ".$income_data['spouse_income_select']."</td>
              </tr>
              <tr>
                <th>Any Foreseen Changes in Income:</th>
                <td>".$income_data['forseen_changes_employment_select']."</td>
              </tr>
              <tr>
                <th>Other Income :</th>
                <td>$".$income_data['other_income']." Per 
".$income_data['other_income_select']."</td>
              </tr>
              <tr>
                <th>Description of Other Income :</th>
                <td>".$income_data['description_other_income']."</td>
              </tr>
               <tr>
                <th>Any Foreseen Changes in Employement:</th>
                <td>".$income_data['forseen_changes_employment_detail']."</td>
              </tr>
             
        </table>

        </Fieldset>
      </div>

";






$html .="

<div class=\"page-break\"></div>


<div class=\"new\">
    <Fieldset style=\"border: 1px solid #c7c4c4;\">
    <legend align=\"center\" style=\"margin-left: 354px;background: linear-gradient(-135deg, #1de9b6 0%, #1dc4e9 100%);\" class=\"leg\"><strong>Expense Details</strong></legend>
        
        <table style=\"width: 100%;\">
           <br><br>
            <tr>
                <th>Groceries Payment:</th>
                <td>$".$expense_data['groceries'].' per  '.$expense_data['groceries_select']."</td>
              </tr>
              <tr>
                <th>Utility Payments:</th>
                <td>$".$expense_data['utility_bills'].' per  '.$expense_data['utility_bills_select']."</td>
              </tr>
              <tr>
                <th>Insurance Payments:</th>
                <td>$".$expense_data['insurance_bills'].' per  '.$expense_data['insurance_bills_select']."</td>
              </tr>
              <tr>
                <th>Mobile Phone  :</th>
                <td>$".$expense_data['mobile_phone'].' per  '.$expense_data['mobile_phone_select']."</td>
              </tr>
              <tr>
                <th>Fuel Car Expenses :</th>
                <td>$".$expense_data['fuel_car_expenses'].' per  '.$expense_data['fuel_car_expenses_select']."</td>
              </tr>
               <tr>
                <th>Other Expenses:</th>
                <td>$".$expense_data['other_regular_expenses'].' per  '.$expense_data['other_regular_expenses_select']."</td>
              </tr>
               <tr>
                <th>Rent:</th>
                <td>$".$expense_data['rent'].' per  '.$expense_data['rent_select']."</td>
              </tr>
               <tr>
                <th>Mortagege Repayment:</th>
                <td>$".$expense_data['mortagege_repayment'].' per  '.$expense_data['mortagege_repayment_select']."</td>
              </tr>
               <tr>
                <th>Any Forseen Changes:</th>
                <td>".$expense_data['forseen_changes_expenses_select'].'   '.$expense_data['forseen_changes_expenses_detail']."</td>
              </tr>
             
        </table>
        </Fieldset>
      </div>





<div class=\"page-break\"></div>


<div class=\"new\">
    <Fieldset style=\"border: 1px solid #c7c4c4;\">
    <legend align=\"center\" style=\"margin-left: 354px;background: linear-gradient(-135deg, #1de9b6 0%, #1dc4e9 100%);\" class=\"leg\"><strong>BASIC ASSETS</strong></legend>
        
        <table style=\"width: 100%;\">
              <tr>
                <th>Saving/Cash In hand  :</th>
                <td>".$basic_assets['saving_cash_in_hand']."</td>
              </tr>
              <tr>
                <th>Home And Contents:</th>
                <td>".$basic_assets['home_and_contents']."</td>
                
              </tr>
              <tr>
                <th>Superannuation:</th>
                <td>".$basic_assets['superannuation']."$</td>
              </tr>";
              if(!empty($basic_assets['home_estimated_value']))
              {
                  $html .="<tr>
                <th>Home Estimated value  :</th>
                <td>".$basic_assets['home_estimated_value']."%</td>
              </tr>";

              }

        $html .="</table>

        </Fieldset>
      </div>

";


$investment_properties  =   DB::query("select * from new_application_investment_properties where application_id = $application_id");
$motor_vehicles         =   DB::query("select * from new_application_motor_vehicles where application_id = $application_id");
$recreational_assets    =   DB::query("select * from new_application_recreational_assets where application_id = $application_id");
$other_assets           =   DB::query("select * from new_application_other_assets where application_id = $application_id");


if(!empty($investment_properties)) {
    $html .= "
<div class=\"page-break\"></div>";


    $html .= "<div class=\"new\">
    <Fieldset style=\"border: 1px solid #c7c4c4;\">
    <legend align=\"center\" style=\"margin-left: 354px;background: linear-gradient(-135deg, #1de9b6 0%, #1dc4e9 100%);\" class=\"leg\"><strong>BASIC ASSETS</strong></legend>
        
        <table style=\"width: 100%;\">";
    foreach ($investment_properties as $investment_property) {
        $html .= " <tr>
                <th>Estimated Value  :</th>
                <td>$" . $investment_property['investment_properties_estimated_value'] . "</td>
              </tr>
              <tr>
                <th>Mortgage Value:</th>
                <td>$" . $investment_property['investment_properties_mortgage_value'] . "</td>
                
              </tr>
              <tr>
                <th>Repayments:</th>
                <td>$" . $investment_property['investment_properties_repayments'] . " per 
               " . $investment_property['investment_properties_repayments_select'] . "</td>
              </tr>
              <tr>
                <th>Lender/Bank   :</th>
                <td>" . $investment_property['investment_properties_lender_bank'] . "</td>
              </tr>";

    }
    $html .= "</table>
        </Fieldset>
</div>";


}


if(!empty($motor_vehicles)) {
    $html .= "
<div class=\"page-break\"></div>";
    $html .= " <div class=\"new\">
    <Fieldset style=\"border: 1px solid #c7c4c4;\">
    <legend align=\"center\" style=\"margin-left: 354px;background: linear-gradient(-135deg, #1de9b6 0%, #1dc4e9 100%);\" class=\"leg\"><strong>Motor Vehicles</strong></legend>
        
        <table style=\"width: 100%;\">";
    foreach ($motor_vehicles as $motor_vehicle) {
        $html .= "<tr>
                <th>Estimated Value  :</th>
                <td>$" . $motor_vehicle['motor_vehicles_estimated_value'] . "</td>
              </tr>
              <tr>
                <th>Loan Value:</th>
                <td>$" . $motor_vehicle['motor_vehicles_loan_balance'] . "</td>
                
              </tr>
              <tr>
                <th>Repayments:</th>
                <td>$" . $motor_vehicle['motor_vehicles_repayments'] . " per
               " . $motor_vehicle['motor_vehicles_repayments_select'] . "</td>
              </tr>
              <tr>
                <th>Lender/Bank   :</th>
                <td>" . $motor_vehicle['motor_vehicles_lender_bank'] . "</td>
              </tr>";
    }
    $html .= "</table>

        </Fieldset>
      </div>";

}


















if(!empty($recreational_assets )) {
    $html .= " <div class=\"page-break\"></div>";

    $html .= "<br>


<div class=\"new\">
    <Fieldset style=\"border: 1px solid #c7c4c4;\">
    <legend align=\"center\" style=\"margin-left: 354px;background: linear-gradient(-135deg, #1de9b6 0%, #1dc4e9 100%);\" class=\"leg\"><strong>Recreational Assets</strong></legend>
        
        <table style=\"width: 100%;\">";
    foreach ($recreational_assets as $recreational_asset) {
        $html .= " <tr>
                <th>Estimated Value  :</th>
                <td>$" . $recreational_asset['recreational_assets_estimated_value'] . "</td>
              </tr>
              <tr>
                <th>Loan Value:</th>
                <td>$" . $recreational_asset['recreational_assets_loan_balance'] . "</td>
                
              </tr>
              <tr>
                <th>Repayments:</th>
                <td>$" . $recreational_asset['recreational_assets_repayments'] . "</td>
               
              </tr>
              <tr>
                <th>Lender/Bank   :</th>
                <td>" . $recreational_asset['recreational_assets_lender_bank'] . "</td>
              </tr>";
    }

    $html .= "</table>

        </Fieldset>
      </div>";


}











    if(!empty($other_assets )) {
        $html .= "
<div class=\"page-break\"></div>";

        $html .= "<br>











<div class=\"new\">
    <Fieldset style=\"border: 1px solid #c7c4c4;\">
    <legend align=\"center\" style=\"margin-left: 354px;background: linear-gradient(-135deg, #1de9b6 0%, #1dc4e9 100%);\" class=\"leg\"><strong>Other Assets</strong></legend>
        
        <table style=\"width: 100%;\">";
        foreach ($other_assets as $other_asset) {
            $html .= "<tr>
                <th>Estimated Value  :</th>
                <td>" . $other_asset['other_assets_estimated_value'] . "</td>
              </tr>
              <tr>
                <th>Loan Value:</th>
                <td>" . $other_asset['other_assets_loan_balance'] . "</td>
                
              </tr>
              <tr>
                <th>Repayments:</th>
                <td>" . $other_asset['other_assets_repayments'] . "$ per
                " . $recreational_asset['other_assets_repayments_select'] . "</td>
              </tr>
              <tr>
                <th>Lender/Bank   :</th>
                <td>" . $other_asset['other_assets_lender_bank'] . "</td>
              </tr>
             <tr>
                <th>Description   :</th>
                <td>" . $other_asset['description'] . "</td>
              </tr>";
        }
        $html .= "</table>

        </Fieldset>
      </div>";


    }













$personal_loan          = DB::query("select * from new_application_liabilities_personal_loans where application_id = $application_id");
$secured_loan           = DB::query("select * from new_application_liabilities_secured_loans where application_id = $application_id");
$other_liabilities      = DB::query("select * from new_application_liabilities_other_liabilities where application_id = $application_id");

$html .= "<div class=\"page-break\"></div>
<h2 style=\"color:#4CAF50;text-align:center;float:left;\">Liabilities</h2><br><br>";


if(!empty($personal_loan)) {
    $html .= "<div class=\"new\">
    <Fieldset style=\"border: 1px solid #c7c4c4;\">
    <legend align=\"center\" style=\"margin-left: 354px;background: linear-gradient(-135deg, #1de9b6 0%, #1dc4e9 100%);\" class=\"leg\"><strong>Personal Loans</strong></legend>
        
        <table style=\"width: 100%;\">";
    foreach ($personal_loan as $personal_loans) {
        $html .= "<tr>
                <th>Outstanding Balance  :</th>
                <td>$" . $personal_loans['personal_loans_outstanding_balance'] . "</td>
              </tr>
              <tr>
                <th>Repayments:</th>
                <td>$" . $personal_loans['personal_loans_repayments'] . " per
                 " . $personal_loans['personal_loans_repayments_select'] . "</td>
              </tr>
              <tr>
                <th>Lender/Bank:</th>
                <td>" . $personal_loans['personal_loans_lender_bank'] . "</td>
               
              </tr>
             
             <tr>
                <th>Description   :</th>
                <td>" . $personal_loans['personal_loans_description'] . "</td>
              </tr>
             ";
    }
    $html .= "</table>

        </Fieldset>
      </div>";


}







if(!empty($secured_loan)) {
    $html .= "
<div class=\"page-break\"></div>";

    $html .= "






<div class=\"new\">
    <Fieldset style=\"border: 1px solid #c7c4c4;\">
    <legend align=\"center\" style=\"margin-left: 354px;background: linear-gradient(-135deg, #1de9b6 0%, #1dc4e9 100%);\" class=\"leg\"><strong>Secured Loans</strong></legend>
        
        <table style=\"width: 100%;\">";
    foreach ($secured_loan as $secured_loans) {
        $html .= "<tr>
                <th>Outstanding Balance  :</th>
                <td>$" . $secured_loans['secured_loans_outstanding_balance'] . "</td>
              </tr>
              <tr>
                <th>Repayments:</th>
                <td>$" . $secured_loans['secured_loans_repayments'] . " per 
                 " . $secured_loans['secured_loans_repayments_select'] . "</td>
              </tr>
              <tr>
                <th>Lender/Bank:</th>
                <td>" . $secured_loans['secured_loans_lender_bank'] . "</td>
               
              </tr>
             <tr>
                <th>Description:</th>
                <td>" . $secured_loans['secured_loans_description'] . "</td>
              </tr>";
    }
    $html .= " </table>

        </Fieldset>
      </div>";

}











if(!empty($other_liabilities)) {
    $html .= "
<div class=\"page-break\"></div>








<div class=\"new\">
    <Fieldset style=\"border: 1px solid #c7c4c4;\">
    <legend align=\"center\" style=\"margin-left: 354px;background: linear-gradient(-135deg, #1de9b6 0%, #1dc4e9 100%);\" class=\"leg\"><strong>Other Loans</strong></legend>
        
        <table style=\"width: 100%;\">";
    foreach ($other_liabilities as $other_liabilitiess) {
        $html .= "<tr>
                <th>Outstanding Balance  :</th>
                <td>$" . $other_liabilitiess['other_liabilitiess_outstanding_balance'] . "</td>
              </tr>
              <tr>
                <th>Repayments:</th>
                <td>$" . $other_liabilitiess['other_liabilitiess_repayments'] . " per </td>
                 <td>" . $other_liabilitiess['other_liabilitiess_repayments_select'] . "</td>
              </tr>
              <tr>
                <th>Lender/Bank:</th>
                <td>" . $other_liabilitiess['other_liabilitiess_lender_bank'] . "</td>
               
              </tr>
             <tr>
                <th>Description:</th>
                <td>" . $other_liabilitiess['other_liabilitiess_description'] . "</td>
              </tr>";
    }

    $html .= "</table>

        </Fieldset>
      </div>";
}





$html .="</body>
</html>";

$filename = "application";

// include autoloader
require_once 'pdf/dompdf/autoload.inc.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->set_option('isHtml5ParserEnabled', true);
$dompdf->set_option('isRemoteEnabled', true);

$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream($filename);



//Advance USAGE
//$dompdf = new DOMPDF();
//$dompdf->load_html($html);
//$dompdf->render();

//$output = $dompdf->output();
//file_put_contents("/path/to/file.pdf", $output);









//for saving onto browser
//$output = $dompdf->output();
//file_put_contents('Brochure.pdf', $output);





