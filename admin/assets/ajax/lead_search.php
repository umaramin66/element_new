<?php
session_start();
require_once __DIR__ . '/../inc/initDb.php';

$orderss = $_POST['query'];

$lead = DB::query("SELECT * from leads  WHERE CONCAT(id, '', email, '', `client_name`, '', contact_no, '') LIKE '%$orderss%' limit 0,30  ");
$output = "";
foreach ($lead as $leads)
{
     $output .='<tr class="unread">
                                                                    <td>
                                                                        <a style="text-decoration: none" href="new-page.php?lead_id='.$leads['id'].'">
                                                                            <h6 class="mb-1">'.ucfirst($leads['client_name']).'</h6></a>
<a style="text-decoration: none" href="new-page.php?lead_id='.$leads['id'].'">
    <p class="m-0">'.$leads['contact_no'].'</p></a>
</td>
<td>
    <h6 class="text-muted"><i class="fas fa-circle text-c-green f-10 m-r-15"></i>'.$leads['lead_time'].'</h6>
</td>


</tr>';

}
echo $output;
