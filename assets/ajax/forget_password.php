<?php
session_start();
require_once '../inc/initDb.php';



$User=  DB::queryFirstRow("select * from User where email = '".$_POST['email']."' ");

    if(DB::count() > 0) //IT MEAN WE HAVE FOUND THE EMAIL OR USER
    {


        echo json_encode($_POST['email']);


    }
    else {
        //startAdminSession();

        echo json_encode(false);
    }


