<?php
session_start();
require_once '../inc/initDb.php';
$output = "";

$output .='<div style="height:120px" class="scrollbar" id="style-2"><div>';

$d = DB::query("select * from application_docs where application_id = '".$_POST['application_id']."' ");

foreach ($d as $data)
{
    $output .= '<a href="'.$data['url'].'">&nbsp;&nbsp;<p>'.$data['name'].'</p></a><br>';
}
$output .="</div></div>";

echo $output;
