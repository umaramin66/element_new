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
$html.= "<div class=\"container\">
	<div class=\"col-md-4\">
	
		

	</div>
	<div>
		
		<div class=\"col-md-4\">
	
			<h2 style=\"color:#339933; text-align: left;\">NCCP CREDIT PROPOSAL (broker Use)<br><br></h2>
		</div>
			<p>Pure Capital Finance Pty Ltd ( ABN:30 629 448 951 CRN: 512885)<br><br>
			CREDIT PROPOSAL<br><br>
			We are required by law to give you this document. It provides information about commissions, fees and<br>
		charges we pay or receive and the fees and charges if you proceed with this finance proposal. The information disclosed in this<br> Proposal is current as at the date of this document. This Proposal has been prepared<br>
			based on all relevant information concerning this application for credit known to Stratton as at the date of<br>
			this document.<br>
		Date:19 Dec 2017<br>

		once only. You do not have to pay us any other fees and charges for assisting you source finance. However,<br>
		you may be required to pay fees to the financier.<br><br>
		Commission we will receive from to financier named above for assisting you to obtain finance. Commission<br>
		can include various types of commission and volume Bonus.<br>
		We estimate the commissions we will likely receive for the introduction of the business to be $486.00 (in-<br>
		cluding GST). We may receive additional commission depending on the total volume of the business that we<br>
		arrange with this financier each month. Based on similar loans of a similar period, a reasonable estimate of<br>
		the maximum amount of commission likely to be received by Pure Capital finance in relation to this con-<br>
		sumer loan that will result from a volume Bonus arrangement range from 0% - 1.80% of the total amount of<br>
		Credit ($0 - $252.00). The financier is responsible for paying commission to Pure Capital under this volume<br>
		Bonus arrangement. From time to time the financier involved provides us with benefits such as conferences<br>
		and training sessions. We cannot tell you to value of these benefits.<br><br>
		FINANCIER FEES & CHARGES <br><br>
		

	


			</p>
		
	</div>
			
		

		
		
	</div>
</div></body>";

$filename = "nccppdf1";

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

if (file_exists('nccp1.pdf'))
{
    unlink('nccp1.pdf');
}

file_put_contents('nccp1.pdf', $output);
