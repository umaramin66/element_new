<?php
session_start();
require_once '../inc/initDb.php';
 $rand = rand();


DB::insert('lender_invoice', array(

    "broker_id"                                                  =>  $_POST['broker_id'],
    "lender_invoice_client_name"                                 =>  $_POST['lender_invoice_client_name'],
    "lender_invoice_application_id"                              =>  $_POST['lender_invoice_application_id'],
    "lender_invoice_broker_reference"                            =>  $_POST['lender_invoice_broker_reference'],
    "settlement_date"                                            =>  $_POST['settlement_date'],
    "amount_financed"                                            =>  $_POST['amount_financed'],
    "total_brokerage"                                            =>  $_POST['total_brokerage'],
    "total_doc_fee"                                              =>  $_POST['total_doc_fee'],
    "total_origination_fee"                                      =>  $_POST['total_origination_fee'],
    "invoice_ref"                                                =>  $rand

));

echo DB::insertId();