<?php
session_start();
require_once __DIR__ . '/../inc/initDb.php';
date_default_timezone_set("Australia/Sydney");
$today_date = date('d-m-Y');
$output = "";
//echo $today_date;
$item = DB::queryFirstRow("select * from reminders where reminder_date = '$today_date' and send_notification = 0 ");
if(DB::count()!= 0)
{
    $response = [];
    $s = 0;

    $counter = 0;

//foreach ($data  as $item) {


    $to_time = strtotime($item['reminder_date_time']);
    $curr = date("Y-m-d H:i:s");
    $from_time = strtotime($curr);
    $min =  round(abs($to_time - $from_time) / 60,2);
//    echo $min." -- ";
//    echo $item['minutes']." -- ";
//    echo $today_date."<br>";
    if($min >= $item['minutes'])
    {
        $counter ++;
        //echo "Min: $min." -  $item['minutes'];
//
        DB::update('reminders', [
            "send_notification"  =>  "1",
        ], "id=%d", $item['id']);


        //echo $item['lead_id'];
        $broker = DB::queryFirstRow("select * from leads where id = '".$item['lead_id']."'");

        date_default_timezone_set("Australia/Sydney");
        DB::insert('follow_up_leads', array(
            "lead_id"            =>  $item['lead_id'],
            "broker_id"            =>  $broker['broker_id'],
            "follow_date"      =>  date("d-m-Y"),
            "follow_time"      =>  date("H:i:s"),
            "follow_date_time"      =>  date("d-m-Y H:i:s"),
        ));



        //$response = sendMessage($item['lead_id']);



        // $return["allresponses"] = $response;
        //$return = json_encode( $return);
//        print("\n\nJSON received:\n");
//        print($return);
//        print("\n");



       // echo $s = "s.".$item['lead_id'];


    }



    $output = '<div class="row">

                                <div class="col-xl-10 col-md-10">
                                    <div class="card Recent-Users">
    
                                        <div style="padding: 15px 15px;" class="card-body">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="red" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <h4 id="noti-content">Notification : Reminder for Lead ID : '.$item['lead_id'].'</h4></div>
    
                                                </div>
                                            </div>
                                        </div>
    
                                    </div>
                                </div>
                            </div>';
    echo $output;
}
else{
    echo "false";
}



//function sendMessage($i){
//    $content = array(
//        "en" => "Reminder for LEAD ID : ".$i
//    );
//
//    $fields = array(
//        'app_id' => "e9382a83-7d90-48fe-a1b6-312f0a2ef231",
//        'included_segments' => array('All'),
//        'data' => array("foo" => "bar"),
//        'large_icon' =>"ic_launcher_round.png",
//        'contents' => $content
//    );
//
//    $fields = json_encode($fields);
////    print("\nJSON sent:\n");
////    print($fields);
//
//    $ch = curl_init();
//
//    curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
//    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8',
//        'Authorization: Basic Yzc1MjZlYmUtZjFjMC00NzRmLTk5NTgtODdjYjlhYmJlZDcw'));
//    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
//    curl_setopt($ch, CURLOPT_HEADER, FALSE);
//    curl_setopt($ch, CURLOPT_POST, TRUE);
//    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
//    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
//
//    $response = curl_exec($ch);
//    curl_close($ch);
//
//    return $response;
//}







