<?php

$html = "<html> 
<head>
<style>



h6,h4,h3,p{
line-height: 2.2;
}
.table-bordered {
    border: 1px solid #343535;
}

.table {
    width: 100%;
    margin-bottom: 1rem;
    color: #212529;
}
.table-bordered td, .table-bordered th {
    border: 1px solid #343535;
}

.table td, .table th {
    padding: .75rem;
    vertical-align: top;
    
}



</style>
</head>
<body>";
$html.= "<div  class=\"container\">
 	 
   			 <div class=\"col-sm-12\">
   			 <div align=\"center\">
   			 			<div class=\"page-header\">

							<h5><b>Preliminary Assessment & Product Recommendation</b></h5> <br>
						</div>
							
   							
     								 <h3> <img src=\"chapter.PNG\" class=\"img-rounded\" alt=\"Cinque Terre\" width=\"250\" height=\"100\"> 
									 
									 </h3> <br><br><br>
     					
     									
     										
      										 	<h1><p class=\"text-warning\">PRELIMINARY ASSESSMENT<br>
												&<br>
												PRODUCT RECOMMENDATION</p></h1><br>
												<b>Prepared For : ".$_POST['name']."</b><br><br><br><br>
										
										

											<h5>Prepared by Maseh Barakzai<br>
											     Monday, June 1, 2020</h5> <br><br><br><br></div>
							
											 
											   <h5><b> Preliminary Assessment & Product Recommendation</b></h5><br>
											   <h5><b>Introduction & Overview</b></h5><br>
													<p>  This document is a record of our product recommendation(s) to you. You are entitled to receive a<br>
													further preliminary assessment whenever we provide you with any additional product information.<br>
													This product recommendation is prepared solely for the use of the people to whom it is addressed<br>
													and listed as the borrowers in the personal information section of this document.<br><br>
													We do not accept any liability whatsoever for any third party relying on any information contained<br>
													within the document.<br>
													The document includes:<br>
													&nbsp;&nbsp;&nbsp;&nbsp;o Our product recommendation<br>
													&nbsp;&nbsp;&nbsp;&nbsp;o The basis on which the recommendation is given<br>
													&nbsp;&nbsp;&nbsp;&nbsp;o All fees, commissions, interests or associations that might influence the recommendation.<br>


														<b>We have relied on the information you have provided to us</b><br><br>


													In preparing this product recommendation we have relied on the information that you have given to<br>
													us. We take no responsibility for this recommendation if the information provided by you is incorrect,<br>
													incomplete or inaccurate.<br><br>
													If you believe that any aspect of your situation has been overlooked or is not correctly represented, it<br>
													is your responsibility to bring it to our attention before acting on our recommendations.<br><br>
													This recommendation may only be considered to be current as at the time of production. The nature<br>
													of the recommendation can be altered should interest rates and fees change at any point after the<br>
													production of this document.<br><br>
													Once you have selected an appropriate product, an application will be submitted to a lending<br>
													institution. The lending institution will provide you a loan agreement or contract, which will detail all the<br>
													terms and conditions associated with the product that you have selected.<br><br>


													  <b>No taxation advice of information</b><br><br>


													This product recommendation does not constitute or contain taxation advice.<br><br>
													Whilst every effort has been made to include relevant taxation considerations, the adviser with whom<br>
													you have dealt is not a licensed taxation agent.<br><br>
													Any taxation considerations contained in this document are intended as a guide only. If you require<br>
													taxation advice we strongly recommend that you seek independent taxation advice from a licensed<br>
													taxation agent.<br><br>

													  <b>Personal Information</b><br><br>";

													$html .="Below is a summary of the financial and employment status of each applicant as disclosed to us.<br><br>

														<b>Funding position Worksheet</b><br><br>

														Maseh Barakzai Pure Capital Finance Pty Ltd Friday, January 11, 2019<br><br><br><br><br><br>

														<b>Preliminary Assessment & Product Recommendation</b><br><br>
														
														<b>Purchase Amount :               $".$_POST['purchase_amount']."<br>
														Establishment Fee  :          $".$_POST['establishment_fee']."<br>
														Broker Origination Fee  :      $".$_POST['broker_origination_fee']."<br>
														Less Deposit Already Paid  :   $".$_POST['less_deposit_already_paid']."<br>						
														Loan Amount To Be Financed  :   $".$_POST['loan_amount_to_be_financed']."</b><br><br><br>


														Note* - The fees quoted above are estimations as advised by the various lenders and government<br>
														bodies. Final fees will be quoted on the Letter of Offer from the lending institution that you choose to<br>
														proceed with.<br><br>

														<b>Product Recommendation</b><br><br>

														<b>Reasoning behind the recommendation</b><br><br>

														This recommendation has been developed taking into account:<br><br>

															• Your personal & financial profile<br><br>
															• Your requirements and objectives in your needs analysis responses<br><br>

															<b>Product recommendation</b><br><br>

															Based on the information you have provided to us in our needs analysis questionnaire, we have<br>
															selected the following product as being suitable for your requirements.	<br><br>

															Credit Provider               Pepper (Asset Finance)<br><br>
															Product Name                  Chattel Mortgage<br><br>
															<b>Interest Rate                 ".$_POST['interest_rate']."%</b><br><br>

														In some instances, there may be an ongoing account fee. If applicable, this will be disclosed to you in<br>
														the final amount of fees and charges within the credit contract which will be issued by the lender.<br><br>
														Based upon the information you have supplied to us during the course of the interview and in your<br>
														needs analysis responses, this information will be provided to the lender or originator to source a loan<br>
														which is appropriate to your needs and objectives.<br><br>

														<b>Appendix A – Consumer requirements Needs Analysis responses</b><br><br>

														<table class=\"table table-bordered\"> 
															<tr> 
																<td>No.</td>
																<td>Question</td>
																<td>Response</td>
															</tr>
															<tr>
																<td>1.1</td>
																<td>What is the loan amount you are<br>
																applying for? (if known)</td>
																<td>$26,300</td>
															</tr>
															<tr>
																<td>1.2</td>
																<td>What is the purpose of the loan?</td>
																<td>Business use</td>
															</tr>
															<tr>
																<td>1.3</td>
																<td>Will this new loan refinance an existing<br>
																	loan?</td>
																<td>No</td> 

															</tr>
														</table>
															Maseh Barakzai Pure Capital Finance Pty Ltd Friday, January 11, 2019 <br><br>

															<b><u>Preliminary Assessment & Product Recommendation</u></b><br><br>";

															$html.= "<table class=\"table table-bordered\"> 
															<tr> 
																<td>No.</td>
																<td>Question</td>
																<td>Response</td>
															</tr>
															<tr>
																<td>1.4</td>
																<td>If you answered Yes, please provide<br>
																information on what your objectives are<br>
																for seeking this?<br>
																</td>
																<td></td>
															</tr>
															<tr>
																<td>1.5</td>
																<td>How long do you expect to remain in the<br>
																	new Credit Contract?
																</td>
																<td>3 - 5 years</td>
															</tr>
															<tr>
																<td>1.6</td>
																<td>What will be your preferred loan<br>
																	repayment frequency<br>
																</td>
																<td>Monthly</td><br>
															</tr>
															<tr> 
																<td>2.1</td>
																<td>Applicant 1: Have you ever had any<br>
																defaults, judgements or legal<br>
																proceedings recorded against you?<br></td>
																<td>No</td>
															 </tr>
															 <tr> 
																 	<td>2.2</td>														 	
																 	<td>Applicant 1: If you answered Yes to the<br>
																	above question, please provide details.</td>
																 	<td></td>															 						
															 </tr>
															 <tr> 
															 	<td>2.3</td>
															 	<td>Applicant 1: Are all of your current credit<br>
																	commitments up to date?</td>
															 	<td>Yes</td>

															 </tr>
															 <tr>
															 <td>2.4</td>
															 <td>Applicant 1: If you answered No to the<br>
																above question, please provide details<br>
																on how you plan to bring your existing<br>
																loan repayments up to date.</td>
															 <td></td>

															 </tr>
															 <tr> 
															 	<td>2.5</td>
															 	<td>
															 	Applicant 2: Have you ever had any<br>
																defaults, judgements or legal<br>
																proceedings recorded against you?
																</td>
																	
															 	<td>No</td>
															 </tr>
															 <tr> 
															 	<td>2.6</td>
															 	<td>
															 	Applicant 2: If you answered Yes to the<br>
																above question, please provide details.
															</td>
															 	<td></td>
															 </tr>
															 <tr> 
															 	<td>2.7</td>
															 	<td>
															 	Applicant 2: Are all of your current credit<br>
																commitments up to date?
															</td>
															 	<td>Yes</td>

															 </tr>
															 <tr> 
															 	<td>2.8</td>
															 	<td>
															 	Applicant 2: If you answered No to the<br>
																above question, please provide details<br>
																on how you plan to bring your existing<br>
																loan repayments up to date.
																</td>
															 	<td></td>
															 </tr>
															 <tr> 
															 	<td>3.1</td>
															 	<td>
															 	Applicant 1: On a scale of 1-10 how<br>
																would you rate your current job security?<br>
																(the higher the number, the more secure<br>
																you feel - 1 is Not Secure; 10 is Highly<br>
																Secure)
																</td>
															 	<td>10</td>
															 </tr>
															 <tr> 
															 	<td>3.2</td>
															 	<td>
															 	Applicant 2: On a scale of 1-10 how<br>
																would you rate your current job security?<br>
																(the higher the number, the more secure<br>
																you feel - 1 is Not Secure, 10 is Highly<br>
																Secure)</td>
															 	<td></td>
															 </tr>
															 <tr> 
															 	<td>4.1</td>
															 	<td>
															 	Do you anticipate any changes to your<br>
																income in the next 6-12 months?
																</td>
															 	<td>No</td>
															 </tr>
															 <tr> 
															 	<td>4.2</td>
															 	<td>
															 	If you answered Yes to the above,<br>
																please provide further information.</td>
															 	<td></td>

															 </tr>

														</table><br>												
														
														Maseh Barakzai Pure Capital Finance Pty Ltd Friday, January 11, 2019 <br><br>

														<b><u>Preliminary Assessment & Product Recommendation</u></b><br><br>";

                                                        $html.= "<table class=\"table table-bordered\"> 
															<tr>
															    <td>4.3</td>
															    <td>
                                                                Do you anticipate your expenses will<br>
                                                                change materially in the next 6-12<br>
                                                                months?
                                                                </td>			
                                                                <td>No</td> 
															</tr>
															<tr>
															    <td>4.4</td>
															    <td>
                                                                    If you answered Yes to the above,<br>
                                                                    please provide further information.</td>
                                                                    <td></td> 
															</tr>
															<tr>
                                                                <td>4.5</td>
                                                                <td>
                                                                Are there any other factors that you can<br>
                                                                think of that may materially affect your<br>
                                                                income and/or expenses in the next 6-12<br>
                                                                months?</td>
                                                                <td>No</td> 
															</tr>
															<tr>
                                                                <td>4.6</td>
                                                                <td>If you answered Yes to the above,<br>
                                                                please provide further information.
                                                                </td>
                                                                <td></td> 
															</tr>
															<tr>
                                                                <td>5.1</td>
                                                                <td>Are there any lenders that you don't wish<br>
                                                                to deal with? (Please provide their name)					
                                                                </td>
                                                                <td>No</td> 
															</tr>
															<tr>
                                                                <td>5.2</td>
                                                                <td>Are you considering having a Balloon<br>
                                                                Payment or Residual Value in this new<br>
                                                                Credit Contract?</td>
                                                                <td>No</td> 
															</tr>
															<tr>
                                                                <td>6.1</td>
                                                                <td>Do you currently have adequate Life<br>
                                                                Insurance?
                                                                </td>
                                                                <td>No</td> 
															</tr>
															<tr>
                                                                <td>6.2</td>
                                                                <td>Do you currently have adequate Debt
                                                                Protection Insurance?</td>
                                                                <td>No</td> 
															</tr>
															<tr>
                                                                <td>6.3</td>
                                                                <td>Do you currently have adequate Debt
                                                                Protection Insurance?</td>
                                                                <td>No</td> 
															</tr>
															<tr>
                                                                <td>6.4</td>
                                                                <td>Do you have adequate insurance that<br>
                                                                will repay your loan repayments and/or<br>
                                                                outstanding balance (current and/or<br>
                                                                new) should you not be able to work?</td>
                                                                <td>No</td> 
															</tr>
															<tr> 
																<td>6.5</td>
																<td>If you answered No, or Unsure to any of<br>
																the above questions, would you like us<br>
																to arrange a meeting for you to discuss<br>
																options regarding your insurance needs<br>
																and requirements?</td>
																<td>No</td>


															</tr>
															
															<tr> 
																<td>7.1</td>
																<td>On a monthly basis, how much do you<br>
																currently repay and/or spend on the<br>
																following items?</td>
																<td></td>


															</tr>
															<tr> 
																<td>7.2</td>
																<td>Home Loan repayment</td>
																<td>$2,000</td>


															</tr>
															<tr> 
																<td>7.3</td>
																<td>Investment Property Loan repayment</td>
																<td>$0</td>


															</tr>
															<tr> 
																<td>7.4</td>
																<td>Personal Loan repayment</td>
																<td>$0</td>


															</tr>
															<tr> 
																<td>7.5</td>
																<td>Credit Card payment (3% of total limit)</td>
																<td>$0</td>


															</tr>
															<tr> 
																<td>7.6</td>
																<td>Other loans and/or debt commitments</td>
																<td>$0</td>


															</tr>
															<tr> 
																<td>7.7</td>
																<td>Rental or Board paid</td>
																<td>$0</td>


															</tr>
															<tr>
																<td>7.8</td>
																<td>Utilities - Electricity, Rates, Gas, Water,
																Body Corporate</td>
																<td>$300</td>
															</tr>
															</table>

																Maseh Barakzai Pure Capital Finance Pty Ltd Friday, January 11, 2019 <br><br>

																<b>Preliminary Assessment & Product Recommendation</b><br><br>
																	<table class=\"table table-bordered\">
																		<tr>
																			<td>7.9</td>
																			<td>Connections - Phone, Mobile, Internet,<br>
																			Cable TV</td>
																			<td>$100</td>

																		</tr>
																		<tr>
																			<td>7.10</td>
																			<td>Education - Child Care, School Fees,<br>
																			Uniforms &amp; Activities</td>
																			<td>$0</td>

																		</tr>
																		<tr>
																			<td>7.11</td>
																			<td>Food - Groceries, Meat, Fruit &amp;<br>
																			Vegetables</td>
																			<td>$300</td>

																		</tr>
																		<tr>
																			<td>7.12</td>
																			<td>Transport - Public, Petrol, Registration,<br>
																			Insurance &amp; Servicing</td>
																			<td>$50</td>

																		</tr>
																		<tr>
																			<td>7.13</td>
																			<td>Medical - Private Health Insurance<br>
																			&amp; Ongoing Medical Bills</td>
																			<td>$0</td>

																		</tr>
																		<tr>
																			<td>7.14</td>
																			<td>Insurances - Home &amp; Personal<br>
																			(Life/TPD/Trauma) &amp; Voluntary
																			Super
																				</td>
																			<td>$0</td>

																		</tr>
																		<tr>
																			<td>7.15</td>
																			<td>Household Purchases and Maintenance</td>
																			<td>$100</td>

																		</tr>
																		<tr>
																			<td>7.16</td>
																			<td>Entertainment - Dining Out, Movies, Gifts<br>
																			&amp; Other</td>
																			<td>$100</td>

																		</tr>
																		<tr>
																			<td>7.17</td>
																			<td>Sports, Hobbies and Memberships</td>
																			<td>$0</td>

																		</tr>
																		<tr>
																			<td>7.18</td>
																			<td>Other Regular Expenditure</td>
																			<td>$0</td>

																		</tr>
																		

																	</table>";
																	$html .= "<br><br><<br><br><br>
                                                                    <table class=\" table table-borderd\">
																	<tr>
																			<td></td>
																			<td>Net monthly Income for all applications</td>
																			<td>3,857</td>

																		</tr>
																		<tr>
																			<td></td>
																			<td>Marital Status</td>
																			<td>Defacto Married</td>

																		</tr>
																		<tr>
																			<td></td>
																			<td>Spouse Income</td>
																			<td>0</td>

																		</tr>
																		<tr>
																			<td></td>
																			<td>Dependants</td>
																			<td>1</td>

																		</tr>
																		<tr>
																			<td></td>
																			<td>Other Loans + monthly expenses </td>
																			<td>0</td>

																		</tr>
																		<tr>
																			<td></td>
																			<td>Rent/Mortagage</td>
																			<td>516</td>

																		</tr>
																		<tr>
																			<td></td>
																			<td>Living Expenses</td>
																			<td>1250</td>

																		</tr>
																	<tr>
																			<td></td>
																			<td>proposed Repayment</td>
																			<td>500</td>

																	</tr>
																	<tr> 
																		<td></td>
																		<td></td>
																		<td></td>

																	</tr></table>
																	Surplus After repayment $
																	<textarea></textarea><br><br>
																	 <div class=\"form-group\">
    															<label> - Evidence of Income:</label>
   																<input  type=\"text\" class=\"form-control\" name=\"text\" placeholder=\"(type here)\"><br>
 																 </div>
																		 <div class=\"form-group\">
    															<label> - NOTES:</label>
   																<input  type=\"text\" class=\"form-control\" name=\"text\" placeholder=\"(type here)\"><br><br>
 																 </div>	
																	
																	<h6>Maseh Barakzai Pure Capital Finance Pty Ltd Friday, January 11, 2019</h6> <br><br><br>
																</p>
												
										</div>
		
   			</div>
	
	</div>
</body>";

$filename = "prelimpdf";

// include autoloader
require_once '../../../pdf/dompdf/autoload.inc.php';

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
//$dompdf->stream($filename);

$output = $dompdf->output();

if (file_exists('prelim.pdf'))
{
    unlink('prelim.pdf');
}

file_put_contents('prelim.pdf', $output);
