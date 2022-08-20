<?php 
include 'header.php';
$index = new index();

$broker_id = $_GET["broker_id"];
$lead_id = $_GET["broker_id"];

$result = $index->editTaskStatus($broker_id, $lead_id);
?>