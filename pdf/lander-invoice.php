<?php

$html = "

<html>
<head>
<style>
body{
font-size: 17px;
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
</style>
</head>


<body>
<div class=\'header\'>
    <div style='border-bottom: 2px solid #b3b7bb;'>
        <div>
            <div>
            <h3 style='margin: 60px; color: #0c5460;'>Connective Lender Services Pty Ltd<br>
            ABN: 55 161 731 460<br>
            Level 20, 567 Collins Street<br>
            Melbourne, VIC 3000<br>
             <img style='margin: -100px -50px 50px 600px;' src=\"Capture.JPG\" width=\"250\" height=\"100\"> 
            </h3>
            </div>
           
        
        </div>
    </div>
    <div>
         <h1 style='color: green; margin-top: 70px; border-bottom: 2px solid green;'>Tax Invoice</h1>
    </div> 
    <div style='padding-left: 70px;'>
        <p style='font-size: 20px;'><b>Invoice To:</b> Metro (Asset Finance)<br></p>
        <p style='padding-left: 80px; font-size: 20px;'> ABN: 44 600 674 093<br>
            Metro Finance Pty Limited Level 14, 60<br>
            Castlereagh Street Sydney NSW 2000<br>
        </p>
        <h3 style='padding: -100px 0px 0px 600px; line-height: 1.5; color: green; font-weight: lighter;' >Invoice Ref: CAF027240<br>
            Date: 21/08/2020</h3>
    </div> 
    <div style='border-bottom: 2px solid green;'>
        <h2 style='color: green;'>Finance Particulars</h2>
    </div>
    <div> 
        <table>
            <tr>
            <th><p>Introducer:</p></th>
            <td><p>Broker: Samuel Roby
            Company: Pure Capital Finance Pty Ltd<br>
            ABN/ACN: 51143651496<br>
            ACL: 389328<br>
            Contact: Tel: 0424 26 296 / Mobile: 0424 26 296</p></td>
            </tr>
            <tr>
            <th>Application Ref:</th>
            <td>M121993</td>
            </tr>
            <tr>
            <th>Client:</th>
            <td>Tyler Lombardo</td>
            </tr>
            <tr>
            <th>Amount Financed:</th>
            <td>$30,150.00</td>
            </tr>
            <tr>
            <th>Settlement Date:</th>
            <td>21/08/2020</td>
            </tr>
            <tr>
            <th>Broker Ref #</th>
            <td></td>
            </tr>
        </table>
        <h1 style='color: green; border-bottom: 2px solid green; '>Invoice Amounts</h1>
        <table>
            <tr>
            <th>Invoice To:</th>
            <th>Net</th>
            <th>GST</th>
            <th>Total</th>
            </tr>
            <tr>
            <td>Brokerage/Commission:</td>
            <td>$1,206.00</td>
            <td>$ 120.60</td>
            <td>$1326.60</td>
            </tr>
            <tr>
            <td>Documentation Fee</td>
            <td>$ 0.00</td>
            <td>$ 0.00</td>
            <td>$ 0.00</td>
            </tr>
            <tr>
            <td>Origination Fee / Broker Administration Fee</td>
            <td>$250.00</td>
            <td>$25.00</td>
            <td>$275,00</td>
            </tr>
            <tr>
            <th>Invoice Total</th>
            <th>$1,456.00</th>
            <th>$1,45.60</th>
            <th>$1,601.60</th>
            </tr>
        </table>
        <div style='border-bottom: 2px solid green; color: green;'>
        <h2>Payment Details</h2>
        </div>
        <div><p style='text-align: center;'>
                Please make payment to<b> Connective Lender Services,</b> quoting Ref No: CAF027240<br>
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

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream($filename);