<?php
require_once 'inc/initDb.php';

$bank_id  = $_GET['bank_id'];

$lead_id  = $_GET['lead_id'];

$lender_invoice_id = $_GET['lender_invoice_id'];

$lender = DB::queryFirstRow("select * from lender_invoice where id = '".$lender_invoice_id."'    ");

$invoice_ref = $_GET['lender_invoice_id'];

$broker_id = $_GET['broker_id'];

$bank = DB::queryFirstRow("select * from bank where id = '$bank_id'");

$leads = DB::queryFirstRow("select * from leads where id = '$lead_id'");

$broker = DB::queryFirstRow("select * from User where id = '".$broker_id."'");



$company = DB::queryFirstRow("select * from company where id = '".$broker['company_id']."'");

$date = date('d-m-Y');

$html = "

<html>
<head>
<style>
@page{
        margin-top: 100px; /* create space for header */
        margin-bottom: 70px; /* create space for footer */
      }
body{
font-size: 14px;
}
table{
width: 100%;
}
th,td{
padding:20px;
}
table,th,td{
border:1px solid black;
border-collapse: collapse;


}
.page_break { page-break-before: always; }

.first-page {
    page-break-after: always;
  }
footer {
                position: fixed; 
                bottom: 0cm; 
                left: 0cm; 
                right: 0cm;
                height: 2cm;
                border-bottom: 1px solid #1b1e21 ;
            }
            header{
        position: fixed;
        left: 0px;
        right: 0px;
        height: 60px;
        margin-top: -60px;
        border-bottom: 1px solid #1b1e21 ;
      }
      
</style>
</head>


<body>
<header>
      
    </header>
   <footer>

    </footer><br>  
    
    
<div class=\'header\'>
    <div style='border-bottom: 2px solid #b3b7bb;'>
        <div>
            <div>
            <h3 style='margin: 60px; color: #0c5460;'>".$bank['name']."<br>
            ABN: ".$bank['abn']."<br>
            ".$bank['address']."<br>
             <img style='margin: -100px -50px 50px 400px;' src=\"Capture.JPG\" width=\"250\" height=\"100\"> 
            </h3>
            </div>
           
        </div>
    </div>
    <div>
         <h1 style='color: green; margin-top: 70px; border-bottom: 2px solid green;'>Tax Invoice</h1>
    </div> 
    <div style='padding-left: 20px;'>
        <p style='font-size: 20px;'><b>Invoice To: </b> Metro (Asset Finance)<br></p>
        
        <p style='padding-left: 40px; font-size: 20px;'> ABN: 44 600 674 093<br>
            Metro Finance Pty Limited Level 14, 60<br>
            Castlereagh Street Sydney NSW 2000<br>
        </p>
        
        <h3 style='padding: -150px 0px 100px 450px; line-height: 1.5; color: green; font-weight: lighter;' >Invoice Ref: ".$lender['invoice_ref']."<br>
            Date:  ".$date."
        </h3>
        
    </div> 
    <div class=\"page_break\">
        <div style='border-bottom: 2px solid green;'>
            <h2 style='color: green;'>Finance Particulars</h2>
        </div>
       
     
        <table>
            <tr>
            <th><p>Introducer:</p></th>
            <td><p> &nbsp;&nbsp;Broker : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$broker['name']."<br><br>
            &nbsp;&nbsp;Company : &nbsp;&nbsp;&nbsp;".$company['name']."<br><br>
            &nbsp;&nbsp;ABN/ACN : &nbsp;".$company['abn']."<br><br>
            &nbsp;&nbsp;ACL : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$company['acl_no']."<br><br>
            &nbsp;&nbsp;Contact : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$company['contact_number']."</p></td>
            </tr>
            
            <tr>
            <th>Application Ref:</th>
            <td>M121993</td>
            </tr>
            
            
            <tr>
            <th>Client:</th>
            <td>".$leads['client_name']."</td>
            </tr>
            <tr>
            <th>Amount Financed:</th>
            <td>$".$lender['amount_financed']."</td>
            </tr>
            <tr>
            <th>Settlement Date:</th>
            <td>".$lender['settlement_date']."</td>
            </tr>
            <tr>
            <th>Broker Ref #</th>
            <td></td>
            </tr>
        </table></div>";

//          / by 100 *  by 10

$gst_brokerage = ($lender['total_brokerage'] /100) * 10;
$gst_lender = ($lender['total_doc_fee'] /100) * 10;
$gst_origination = ($lender['total_origination_fee'] /100) * 10;

$t = $lender['total_brokerage'] + $gst_brokerage;
$t1 = $lender['total_doc_fee'] + $gst_lender;
$t2 = $lender['total_origination_fee'] + $gst_origination;





$html.="<div class=\"page_break\">
        <h1 style='color: green; border-bottom: 2px solid green; '>Invoice Amounts</h1>
        <table>
            <tr>
            <td><b>Invoice To:</b></th>
            <td><b>Net</b></th>
            <td><b>GST</b></td>
            <td><b>Total</b></td>
            </tr>
            <tr>
            <td>Brokerage/Commission:</td>
            <td>$".$lender['total_brokerage']."</td>
            <td>$ ".$gst_brokerage."</td>
            <td>$".$t."</td>
            </tr>
            <tr>
            <td>Documentation Fee</td>
            <td>$ ".$lender['total_doc_fee']."</td>
            <td>$ ".$gst_lender."</td>
            <td>$".$t1."</td>
            </tr>
            <tr>
            <td>Origination Fee / Broker Administration Fee</td>
            <td>$".$lender['total_origination_fee']."</td>
            <td>$ ".$gst_origination."</td>
            <td>$".$t2."</td>
            </tr>
            <tr>";
$total = $lender['total_brokerage'] + $lender['total_doc_fee'] + $lender['total_origination_fee'];
$total1 = $gst_origination + $gst_brokerage + $gst_lender;
$total2 = $t + $t1 + $t2;

$html.="<td><b>Invoice Total</b></th>
            <td><b>$".$total."</b></td>
            <td><b>$".$total1."</b></td>
            <td><b>$".$total2."</b></td>
            </tr>
        </table></div>
        <div style='border-bottom: 2px solid green; color: green;'>
        <h2>Payment Details</h2>
        </div>
        <div><p style='text-align: center;'>
                Please make payment to <b> Connective Lender Services,</b> quoting Ref No: CAF027240<br>
                ANZ Bank - BSB: 013-006 – Account: 838 162 513<br>
                Email remittances to commissions@connective.com.au<br>
            </p>
            </div>
    </div>
</div>

</div>
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
$dompdf->setPaper('A4','portrait');

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



$filename = 'lender_invoice_pdf_'.$lead_id.'_'.$date.'.pdf';
// Output the generated PDF to Browser
$dompdf->stream($filename);