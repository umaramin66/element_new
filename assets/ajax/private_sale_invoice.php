<?php
session_start();
require_once '../inc/initDb.php';


DB::insert('private_sale_invoice', array(
    "invoice_type"                                   =>  $_POST['invoice_type'],
    "invoice_date"                                   =>  $_POST['invoice_date'],
    "vendor_detail"                                  =>  $_POST['vendor_detail'],
    "invoice_to"                                     =>  $_POST['invoice_to'],
    "delivery_to"                                    =>  $_POST['delivery_to'],
    "invoice_amount"                                 =>  $_POST['invoice_amount'],
    "gst"                                            =>  $_POST['gst'],
    "deposit_inc_gst"                                =>  $_POST['deposit_inc_gst'],
    "total_amount_due"                               =>  $_POST['total_amount_due'],
));
$id = DB::insertId();


if(!empty($_POST['rego_no']))
{
    $itemCount = count($_POST["rego_no"]);


    for($i=0; $i<$itemCount; $i++)
    {
        if($_POST['rego_no'][$i] != "")
        {
            DB::insert('private_sale_invoice_assets', array(
                "invoice_id"                           =>  $id,
                "one_only"                                 =>  $_POST['one_only'][$i],
                "year"                                     =>  $_POST['year'][$i],
                "rego_no"                                  =>  $_POST['rego_no'][$i],
                "engine_no"                                =>  $_POST['engine_no'][$i],
                "vin_no"                                   =>  $_POST['vin_no'][$i],
                "odometer"                                 =>  $_POST['odometer'][$i]
            ));
        }

    }

}


if(!empty($_POST['bank']))
{
    $itemCount = count($_POST["bank"]);


    for($i=0; $i<$itemCount; $i++)
    {
        if($_POST['bank'][$i] != "")
        {
            DB::insert('private_sale_invoice_bank', array(
                "invoice_id"                           =>  $id,
                "bank"                                 =>  $_POST['bank'][$i],
                "ac_name"                              =>  $_POST['ac_name'][$i],
                "bsb"                                  =>  $_POST['bsb'][$i],
                "ac_no"                                =>  $_POST['ac_no'][$i],
                "amount"                               =>  $_POST['amount'][$i]
            ));
        }

    }
}
echo $id;