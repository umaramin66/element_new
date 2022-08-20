<?php
session_start();
require_once '../inc/initDb.php';
DB::insert('tax_invoice', array(
    "broker_id"                                               =>  $_POST['broker_id'],
    "invoice_to"                                              =>  $_POST['invoice_to'],
    "delivery_to"                                             =>  $_POST['delivery_to'],
    "asset_description"                                       =>  $_POST['asset_description'],
    "gross_price"                                             =>  $_POST['gross_price'],
    "less_trade_in"                                           =>  $_POST['less_trade_in'],
    "less_deposit"                                            =>  $_POST['less_deposit'],
    "plus_finance_payout_on_trade_in_"                         =>  $_POST['plus_finance_payout_on_trade_in'],
    "refund_to_customer"                                      =>  $_POST['refund_to_customer'],
    "total_finance_amount"                                    =>  $_POST['total_finance_amount'],
));
echo DB::insertId();