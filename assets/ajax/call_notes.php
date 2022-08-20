<?php
session_start();
require_once '../inc/initDb.php';


DB::insert('logs', array(
    "broker_id"         =>  $_SESSION['broker_id'],
    "lead_id"           =>  $_POST['lead_id'],
    "log_date"          =>  date("d-m-Y H:i:s"),
    "log_detail"        =>  "Call To Client"

));

echo "success";

//.container-fluid, .container-lg, .container-md, .container-sm, .container-xl {
//    width: 100%;
//    padding-right: 15px;
//    padding-left: 15px;
//    margin-right: auto;
//    margin-left: auto;
//}
//@media (min-width: 1200px)
//.container, .container-lg, .container-md, .container-sm, .container-xl {
//    max-width: 1140px;
//}
//
//@media (min-width: 992px)
//.container, .container-lg, .container-md, .container-sm {
//    max-width: 960px;
//}
//@media (min-width: 768px)
//.container, .container-md, .container-sm {
//    max-width: 720px;
//}
//@media (min-width: 576px)
//.container, .container-sm {
//    max-width: 540px;
//}
//@media (min-width: 1200px)
//.container {
//    max-width: 1140px;
//}
//@media (min-width: 992px)
//.container {
//    max-width: 960px;
//}
//@media (min-width: 768px)
//.container {
//    max-width: 720px;
//}
//@media (min-width: 576px)
//.container {
//    max-width: 540px;
//}
//.container {
//    width: 100%;
//    padding-right: 15px;
//    padding-left: 15px;
//    margin-right: auto;
//    margin-left: auto;
//}
//.row {
//    display: -ms-flexbox;
//    display: flex;
//    -ms-flex-wrap: wrap;
//    flex-wrap: wrap;
//    margin-right: -15px;
//    margin-left: -15px;
//}
//@media (min-width: 768px)
//.col-md-6 {
//    -ms-flex: 0 0 50%;
//    flex: 0 0 50%;
//    max-width: 50%;
//}
//@media (min-width: 576px)
//.col-sm-6 {
//    -ms-flex: 0 0 50%;
//    flex: 0 0 50%;
//    max-width: 50%;
//}
//
//p {
//    margin-top: 0;
//    margin-bottom: 1rem;
//}
//.h6, h6 {
//    font-size: 1rem;
//}
//
//.h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
//    margin-bottom: .5rem;
//    font-weight: 500;
//    line-height: 1.2;
//}