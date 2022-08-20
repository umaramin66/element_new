<?php
session_start();
require_once __DIR__ . '/../inc/initDb.php';

$broker_id = $_SESSION['broker_id'];

DB::queryFirstRow("select * from nccp_form where application_id = '".$_POST['application_id_nccp']."'");
if(DB::count() != 0)
{
    DB::delete('nccp_form', 'application_id=%d', $_POST['application_id_nccp']);
}
DB::insert('nccp_form', array(
    "lead_id"                                        =>  $_POST['lead_id'],
    "broker_id"                                      =>  $_POST['broker_id'],
    "application_id"                                 =>  $_POST['application_id_nccp'],
    "proposed_financer"                              =>  $_POST['proposed_financer'],
    "service_fee"                                    =>  $_POST['service_fee'],
    "establishment_application_fee"                  =>  $_POST['establishment_application_fee'],
    "registration_fee"                               =>  $_POST['registration_fee'],
    "stamp_mortgage_duty"                            =>  $_POST['stamp_mortgage_duty'],
    "credit_search_fees"                             =>  $_POST['credit_search_fees'],
    "other_fees"                                     =>  $_POST['other_fees'],
    "total"                                          =>  $_POST['total'],
    "amount_financed"                                =>  $_POST['amount_financed']
));

DB::insert('logs', array(
    "broker_id"         =>  $_POST['broker_id'],
    "lead_id"           =>  $_POST['lead_id'],
    "log_date"          =>  date("d-m-Y H:i:s"),
    "log_detail"        =>  "NCCP Form Sent To Client"

));
echo "success";