<?php
require_once 'inc/initDb.php';


$lead_id        = $_GET['lead_id'];

$tax_id         = $_GET['tax_id'];

$tax            = DB::queryFirstRow("select * from tax_invoice where id = '$tax_id'");

$get_broker     = DB::queryFirstRow("select * from User where id = '".$_GET['broker_id']."'");

$broker         = DB::queryFirstRow("select * from brokers where contact_email = '".$get_broker['email']."'");

$company        = DB::queryFirstRow("select * from company where id = '".$broker['company_id']."'");

$val            = $tax['gross_price'] + $tax['less_trade_in'] + $tax['less_deposit'] + $tax['plus_finance_payout_on_trade_in_'];

$logo2          = $company['logo'];

$logo1          = explode("/",$logo2);

$logo           = end($logo1);

$date           = date('d-m-Y');

$html = "

<html>
<head>
<style>

a{
padding-left:50px;
}
footer {
                position: fixed; 
                bottom: 0cm; 
                left: 0cm; 
                right: 0cm;
                height: 2cm;
                border-bottom: 1px solid #1b1e21 ;
            }
      
</style>

</head>
<body>
    <footer>

    </footer>
     

<div style='margin: -20px 0px 0px 0px;' class='header'>
<h3 style='font-size: 20px; padding-top: 0px;'>Tax Invoice Request
<img style='padding:-50px 0px 0px 500px;' src=\"/home2/auzziech/public_html/element_new/images/company/".$logo."\" alt=\"Company Logo\" width=\"200\" height=\"90\"> 
</h3>
</div>

<div>
<table>
    <tr>
        <td>INVOICE TO:</td>
        <td><a>".ucfirst($tax['invoice_to'])."</a></td>
    </tr>
    <br> <br>
    <tr>
        <td>DELIVERY TO:</td>
        <td><a>".ucfirst($tax['delivery_to'])."</a></td>
    </tr>
</table>


<div class='div1'>
<p>Please ensure the invoice state the <b>vehicle is NEW or USED</b></p>
<table>
<tr>
<td>Asset Description:</td>
<td><a>".$tax['asset_description']."</a></td>
</tr>
<tr>
<td>Vehicle Status:</td>
<td><a>NEW / DEMO / USED</a></td>
</tr>

<tr>
<td>Make & Model:</td>
<td><a>Please detail on invoice</a></td>
</tr>
<tr>
<td>Kilometres:</td>
<td><a>Please detail on invoice</a></td>
</tr>
<tr>
<td>Colour / Trim:</td>
<td><a>Please detail on invoice</a></td>
</tr>
<tr>
<td>Engine No:</td>
<td><a>Please detail on invoice</a></td>
</tr>
<tr>
<td>VIN / Chasis No:</td>
<td><a>Please detail on invoice</a></td>
</tr>
<tr>
<td>Registration No:</td>
<td><a>Please detail on invoice</a></td>
</tr>
<tr>
<td>Complaince Date:</td>
<td><a>Please detail on invoice</a></td>
</tr>
<tr>
<td>Built Date:</td>
<td><a>Please detail on invoice</a></td>
</tr>
<br>
<tr>
<td>Refund to Customer</td>
<td><a>$".$tax['refund_to_customer']."</a></td>
</tr>
<br>
<tr>
<td>Cash Price (incl.GST):</td>
<td><a>Please detail on invoice</a></td>
</tr>
<tr>
<td>Plus LCT (if applicable):</td>
<td><a>Please detail on invoice</a></td>
</tr>
<tr>
<td>GST included:</td>
<td><a>Please detail on invoice</a></td>
</tr>
<tr>
<td>Plus on-road costs:</td>
<td><a>Please detail on invoice</a></td>
</tr>
<tr>
<td>GROSS PRICE:</td>
<td><a>$".$tax['gross_price']."</a></td>
</tr>
<tr>
<td>less trade-in:</td>
<td><a>$".$tax['less_trade_in']."</a></td>
</tr>
<tr>
<td>less cash deposit:</td>
<td><a>$".$tax['less_deposit']."</a></td>
</tr>
<tr>
<td>plus finance payout on trade-in:</td>
<td><a>$".$tax['plus_finance_payout_on_trade_in_']."</a></td>
</tr>
<tr>
<td>Total:</td>
<td><a>$".$val."</a></td>
</tr>
</table>
</div>
</div>
<div class=\"page-break\"></div>
<div style='border:1px solid black;' class='div2'>
<p>&nbsp;&nbsp;&nbsp;PLEASE RETURN DOCUMENTATION TO:</p>
<p>&nbsp;&nbsp;&nbsp;".$broker['contact_name']."<br>
&nbsp;&nbsp;&nbsp;".$company['name']."<br>
&nbsp;&nbsp;&nbsp;Phone : ".$broker['contact_number']."<br>
&nbsp;&nbsp;&nbsp;Email: ".$broker['contact_email']."</p>
<p>&nbsp;&nbsp;&nbsp;Please provide the following documentation ASAP - it is required for finance settlement:</p>
<p>&nbsp;&nbsp;&nbsp;- A Tax Invoice for the vehicle listed above:</p>
<p>&nbsp;&nbsp;&nbsp;- A copy of the retail order for the vehicle listed above</p>
<p>&nbsp;&nbsp;&nbsp;- Your dealership’s bank details to allow us to E.F.T. Payment into your bank account.</p>

</div>


</body>
</html>
";

// include autoloader
require_once 'dompdf/autoload.inc.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();

$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();

$canvas = $dompdf->getCanvas();
$x          = 505;
$y          = 790;
$text       = "Page {PAGE_NUM} of {PAGE_COUNT}";

$font       = $dompdf->getFontMetrics()->getFont('Helvetica', 'normal');
$size       = 10;
$color      = array(0,0,0);
$word_space = 0.0;
$char_space = 0.0;
$angle      = 0.0;
$dompdf->getCanvas()->page_text($x, $y, $text, $font, $size, $color, $word_space, $char_space, $angle);


$filename = 'tax_invoice_pdf_'.$lead_id.'_'.$date.'.pdf';

// Output the generated PDF to Browser
$dompdf->stream($filename);


