<?php
require_once 'inc/initDb.php';

$bank_id  = $_GET['bank_id'];

$lead_id  = $_GET['lead_id'];

$private_invoice_id = $_GET['lender_invoice_id'];


$data = DB::queryFirstRow("select * from private_sale_invoice where id = '$private_invoice_id'");

$date = date('d-m-Y');

$banks = DB::query("select * from private_sale_invoice_bank where invoice_id = '$private_invoice_id'");


$one = DB::query("select * from private_sale_invoice_assets where invoice_id = '$private_invoice_id'");


$html = "
<html>
<head>
<style>



body{
font-size: 14px;
}

@page{
        margin-top: 100px; /* create space for header */
        margin-bottom: 70px; /* create space for footer */
      }
       header{
        position: fixed;
        left: 61px;
        right: 61px;
        height: 60px;
        margin-top: -60px;
        border-bottom: 1px solid #1b1e21 ;
      }
     footer {
                position: fixed; 
                bottom: 0cm; 
                margin-top :10px;
                left: 61px;
                right: 61px;
                height: 2cm;
                border-bottom: 1px solid #1b1e21 ;
            }
           


.main{
    margin: 0px 60px;
}
h1{
   color: lightgreen;
    font-size: 30px;
    text-align: right;
    margin: 80px 70px 0px 0px;
}

table{
    width: 100%;
}
th{
    text-align: left;
}
table,th
{
border:1px solid black;
border-collapse: collapse;
}
.p td{
border:1px solid black;
border-collapse: collapse;
}

.bank td,th {
border:1px solid black;
border-collapse: collapse;
}
</style>
</head>


<body>
<header>
      
    </header>
     <footer>

    </footer>
    
<div class='main'>
    <div class=\'header\'>
        <h1>INVOICE</h1>
        <h4 style='text-align: right; margin-right: 70px;'>DATE: ".$data['invoice_date']."</h4>
        
        <p style='padding-top: -80px;'><b>Vendor: </b><br>
            John Smith<br>
            100 JAMES Dr<br>
            Narrabri NSW 2390<br>
        </p>
        
        <p style='margin: 100px -50px 0px 0px;'>
            <b> Invoice To:</b><br>
           ".$data['invoice_to']."
        </p>
        <p style='padding: -50px 0px 0px 0px; text-align: center;'> <b>Delivered To:</b><br>
           
           ".$data['delivery_to']."
        </p>


    </div>
    <div>
        <p style='font-size: 20px;'>THE VENDOR WARRANTS:</p>
        <p>That the Vendor has possession of and is free to sell the motor vehicle which is beneficially owned by the
            Vendor.<br>
            That the Motor Vehicle is free from any claim, mortgage, lien or pledge of any sort except as detailed below
            (where applicable).<br>
            That the Motor Vehicle corresponds with the below description<br>
        </p>
        <p>SIGNED: ____________________John Smith</p><br><br>
        <div>";
            foreach ($one as $assets) {


                $html .= "<br><br><table class='p'>

                
                <tr style='border: none;text-align:left;'><td>One (1) only</td><td style='text-align: center;'><a>" . $assets['one_only'] . "</a></td></tr>
                <tr style='border: none;text-align:left;'><td>Year:</td><td style='text-align: center;'><a>" . $assets['year'] . "</a></td></tr>
                <tr style='border: none;text-align:left;'><td>Reg No:</td><td style='text-align: center;'><a>" . $assets['reg_no'] . "</a></td></tr>
                <tr style='border: none;text-align:left;'><td>Engine No:</td><td style='text-align: center;'><a>" . $assets['engine_no'] . "</a></td></tr>
                <tr style='border: none;text-align:left;'><td>Vin No:</td><td style='text-align: center;'><a>" . $assets['vin_no'] . "</a></td></tr>
                <tr style='border: none;text-align:left;'><td>Odometer: </td><td style='text-align: center;'><a>" . $assets['odometer'] . "</a></td></tr>
                </table>";
            }
             $html .="<br><table style='margin-bottom: 30px;'>
                <tr style='text-align: right;'>
                <th style='border-right:none;'><p>Invoice Amount: </p></th><th style='border-left:none;'><a style='text-align: right;'>$".$data['invoice_amount']."</a></th>
                </tr>
                <tr><th style='border-right:none;'><p>GST: </p></th><th style='border-left:none;'><a style='text-align: right;'>$".$data['gst']."</a></th>
                 </tr>
                 <tr><th style='border-right:none;'><p>Deposit inc GST:</p></th><th style='border-left:none;'><a style='text-align: right;'>$".$data['deposit_inc_gst']."</a></th>
                 </tr>
                 <tr><th style='border-right:none;'><p>TOTAL AMOUNT DUE:</p></th><th style='border-left:none;'><a style='text-align: right;'>$".$data['total_amount_due']."</a></th>           
                </tr>
            </table>
        </div>
        <div >
            <table>
                <tr>
                    <td><p>DISBURSEMENT AUTHORITY:<br>(If two disbursements please enter on separate lines as per below)</p></td>
                </tr>
            </table>";
            foreach ($banks as $bank) {
                $html .= "<br><table class='bank'>
                <tr style='text-align: left;' >
                <td>
                <span style='color: red'>BANK:</span> &nbsp;&nbsp;".$bank['bank']."
                <br><span style='color: red'>A/C NAME:</span> &nbsp;&nbsp;".$bank['ac_no']."
               <br><span style='color: red'>BSB:</span> &nbsp;&nbsp;".$bank['bsb']."
                <br><span style='color: red'>ACOUNT NUMBER:</span>&nbsp;&nbsp; ".$bank['amount']."</td>
                <td style='font-size: 19px; text-align: center'><b>$".$data['total_amount_due']."</b></td></tr>
                

            </table>";
            }

            $html .= "
            
            


    </div>


</div>

</body>
</html>";

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
$x          = 455;
$y          = 790;
$text       = "Page {PAGE_NUM} of {PAGE_COUNT}";

$font       = $dompdf->getFontMetrics()->getFont('Helvetica', 'normal');
$size       = 10;
$color      = array(0,0,0);
$word_space = 0.0;
$char_space = 0.0;
$angle      = 0.0;
$dompdf->getCanvas()->page_text($x, $y, $text, $font, $size, $color, $word_space, $char_space, $angle);


// Output the generated PDF to Browser
$dompdf->stream($filename);


