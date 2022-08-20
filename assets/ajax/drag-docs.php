<?php
session_start();
require_once '../inc/initDb.php';

if (isset($_FILES['pdfFile'])) {
//    if ($_FILES['pdfFile']['type'] == "application/pdf") {
    $source_file = $_FILES['pdfFile']['tmp_name'];
    $dest_file = "../../docs/". $_POST['lead_id']."/".$_FILES['pdfFile']['name'];



    $directoryName = '../../docs/'.$_SESSION['lead_id'];

//Check if the directory already exists.
    if(!is_dir($directoryName)){
        //Directory does not exist, so lets create it.
        mkdir($directoryName, 0755, true);
    }

    move_uploaded_file($source_file, $dest_file)
    or die ("Error!!");
    if ($_FILES['pdfFile']['error'] == 0) {
        //INSERT FILE LINK INTO DATAABSE



        DB::insert('application_docs', array(
            "lead_id" => $_SESSION['lead_id'],
            "application_id" => $_POST['application_id'],
            "url" => $_SERVER['HTTP_HOST'] . "/element_new/docs/" . $_SESSION['lead_id']."/".$_FILES['pdfFile']['name'],
            "name" => $_FILES['pdfFile']['name'],

        ));
        //  print "File location : upload/".$_FILES['pdfFile']['name']."<br/>";
    }

    DB::insert('logs', array(
        "broker_id"         =>  $_SESSION['broker_id'],
        "lead_id"           =>  $_SESSION['lead_id'],
        "log_date"          =>  date("d-m-Y H:i:s"),
        "log_detail"        =>  "File uploaded"

    ));
}
?>