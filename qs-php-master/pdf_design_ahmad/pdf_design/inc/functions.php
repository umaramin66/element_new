<?php

//CHECK WHETHER ADMIN LOGGED IN OR NOT


function getSettings($var)
{
    DB::useDB('orderapp_b2b_b2c');
    return DB::queryFirstField("select value from settings where var=%s", $var);
}

function setSettings($var, $value)
{
    DB::useDB('orderapp_b2b_b2c');
    DB::update('settings', array("value" => $value), "var=%s", $var);
}




//GET ALL RESTAURANTS FROM DATABSE (SHOWING ON INDEX.PHP)
function getAllRestaurants()
{
    $restaurants = DB::query("select r.*,cities.name_en as city_name from restaurants as r inner join cities on r.city_id = cities.id where r.id <> '99999' order by r.sort ASC ");
    return $restaurants;
}




//GET ALL RESTAURANTS ON CITY BASIS
function getAllRestaurantsByCity($city_id)
{
    $restaurants = DB::query("select restaurants.*,cities.name_en as city_name from restaurants inner join cities on restaurants.city_id = cities.id where restaurants.city_id = '$city_id' and restaurants.id <> '99999'");
    return $restaurants;
}


// GET TOTAL COUNT OF RESTAURANTS
function getTotalRestaurants()
{
    DB::query("select * from restaurants where id <> '99999'");
    return $restaurants = DB::count();
}



// GET TOTAL COUNT OF RESTAURANTS ON CITY BASIS
function getRestaurantsCountByCity($city_id)
{
    DB::query("select * from restaurants where city_id = '$city_id' and id <> '99999' ");
    return $restaurants = DB::count();
}


// GET ALL ORDERS FROM DATABASE (SHOWING ON ORDERS.PHP)
function getAllOrders()
{
    //$orders = DB::query("select o.*, r.name_en as restaurant_name, u.smooch_id as email from user_orders as o inner join restaurants as r on o.restaurant_id = r.id  inner join users as u on o.user_id = u.id order by o.id DESC ");
    $orders = DB::query("select * from user_orders");
    return $orders;
}

// GET ALL ORDERS FROM DATABASE (SHOWING ON ORDERS.PHP)
function getAllB2BOrders()
{
    DB::useDB('orderapp_b2b');
    $orders = DB::query("select o.*, c.name as company_name, u.smooch_id as email from b2b_orders as o inner join company as c on o.company_id = c.id  inner join b2b_users as u on o.user_id = u.id order by o.id DESC ");
    return $orders;
}

// GET ALL ORDERS FROM DATABASE (SHOWING ON ORDERS.PHP)
function getSpecificUserB2BOrders($user_id)
{
    DB::useDB('orderapp_b2b');
    $orders = DB::query("select o.*, c.name as company_name, u.smooch_id as email from b2b_orders as o inner join company as c on o.company_id = c.id  inner join b2b_users as u on o.user_id = u.id where u.id = '$user_id' order by o.id DESC ");
    return $orders;
}

function UserTotalSpenditure($user_id)
{
    DB::useDB('orderapp_b2b');
    $monthly = DB::queryFirstRow("SELECT SUM( actual_total ) AS monthly_total FROM b2b_orders WHERE MONTH(DATE) = MONTH(CURDATE())  AND user_id =  '$user_id'");
    return $monthly['monthly_total'];
}
function getOrderItems($order_id)
{
    DB::useDB('orderapp_user');
    $order_detail = DB::query("select * from order_detail where order_id = '$order_id'");
    return $order_detail;
}

//GET ALL TIMINGS OF RESTAURANTS
function getAllTimings($restaurant_id)
{

    $timings = DB::query("select * from weekly_availibility where restaurant_id = '$restaurant_id'");
    return $timings;
}



function getOrderItemsB2B($order_id)
{

    DB::useDB('orderapp_b2b');
    $order_detail = DB::query("select * from b2b_order_detail where order_id = '$order_id'");
    return $order_detail;
}




//function getRestaurantNameByOrderId($order_id)
//{
//    $orders = DB::queryFirstRow("select o.*, r.name_en as restaurant_name from user_orders as o  inner join restaurants as r on o.restaurant_id = r.id where o.id = '$order_id'");
//    return $orders;
//}



function getCompanyNameByOrderId($order_id)
{
    DB::useDB('orderapp_b2b');
    $orders = DB::queryFirstRow("select o.*, c.name as company_name from b2b_orders as o  inner join company as c on o.company_id = c.id where o.id = '$order_id'");
    return $orders;
}



function getTotalPriceOfSpecificOrder($order_id)
{
    DB::useDB('orderapp_user');
    $total = 0;
    $orders = DB::query("select * from order_detail where order_id = '$order_id'");
    foreach($orders as $order)
    {
        $total = $total + $order['sub_total'];
    }
    return $total;
}

function getPaymentMethod($order_id)
{
    DB::useDB('orderapp_user');
    $payment                =  DB::queryFirstRow("select * from user_orders where id = '$order_id' ");
    $payment_info           =  $payment['payment_method'];
    $total                  =  $payment['total'];
    $transaction_id         =  $payment['transaction_id'];
    $order_date             =  $payment['order_date'];

    return array('payment_info' => $payment_info, 'total' => $total, 'transaction_id' => $transaction_id, 'order_date' => $order_date );

}



function getPaymentMethodB2B($order_id)
{
    DB::useDB('orderapp_b2b_wui');

    $payment       =  DB::queryFirstRow("select * from b2b_orders where id = '$order_id' ");

    $total                   =  $payment['total'];
    $remaining_balance       =  $payment['discount'];
    $transaction_id          =  $payment['transaction_id'];
    $billing_amount          =  $payment['actual_total'];
    $order_date              =   $payment['date'];

    return array('total' => $total, 'transaction_id' => $transaction_id, 'remaining_balance' => $remaining_balance ,'billing_amount' => $billing_amount, 'order_date' => $order_date );

}

function getRefundCount($order_id)
{
    DB::useDB('orderapp_user');
    DB::query("select * from refund where order_id = '$order_id'");
    return $refund_count = DB::count();
}


function getRefundCountB2B($order_id)
{
    DB::useDB('orderapp_b2b');
    DB::query("select * from b2b_refund where order_id = '$order_id'");
    return $refund_count = DB::count();
}

function getRefundDetail($order_id)
{
    DB::useDB('orderapp_user');
    $refund_orders = DB::query("select * from refund where order_id = '$order_id'");
    return $refund_orders;
}



function getTotalRefundAmount($order_id)
{
    DB::useDB('orderapp_user');
    $total = 0;
    $orders = DB::query("select * from refund where order_id = '$order_id'");
    foreach($orders as $order)
    {
        $total = $total + $order['amount'];
    }
    return $total;
}

function getTotalRefundAmountB2B($order_id)
{
    DB::useDB('orderapp_b2b');
    $total = 0;
    $orders = DB::query("select * from b2b_refund where order_id = '$order_id'");
    foreach($orders as $order)
    {
        $total = $total + $order['amount'];
    }
    return $total;
}

function getCurrentTime()
{
    date_default_timezone_set("Asia/Jerusalem");
    $currentTime           =    date("H:i:s");
    $currentDay            =    date("Y-m-d");

    return $currentDay." ".$currentTime;
}

function getAllCities()
{
    $cities = DB::query("select * from cities");
    return $cities;
}

/*function getAllSettings()
{

    DB::useDB("orderapp_b2b_b2c");
    DB::query("SELECT * from settings");
    return $settings;
}*/

//GET ALL B2B COMPANIES
function getAllCompanies()
{
    DB::useDB('orderapp_b2b');
    $cities = DB::query("select * from company");
    return $cities;
}

//function getRestaurantsOfSpecificCompany($company_id)
//{
//    $restaurants = DB::query("select company_rest.*, restaurants.name_en as restaurants_name from company_rest inner join restaurants on company_rest.rest_id = restaurants.id where company_id = '$company_id'");
//    return  $restaurants;
//}

//GET COMPANY NAME
function getCompanyName($company_id)
{
    DB::useDB('orderapp_b2b');
    $company = DB::queryFirstRow("select * from company where id = '$company_id'");
    return  $company['name'];
}

//GET ALL COMPANIES
function getSpecificCompanies($company_id)
{
    DB::useDB('orderapp_b2b');
    $edit_company = DB::queryFirstRow("select * from company where id = '$company_id'");
    return  $edit_company;
}
//GET ALL COMPANIES TIMINGS
function getSpecificCompanyTiming($company_id)
{
    DB::useDB('orderapp_b2b');
    $edit_company_time = DB::query("select * from company_timing where company_id = '$company_id'");
    return  $edit_company_time;
}


//GET USERS OF SPECIFIC COMPANY
function getUsersOfSpecificCompany($companies_id)
{
    DB::useDB('orderapp_b2b');


    $company = DB::query("select * from b2b_users where company_id = '$companies_id'");
    return $company;
}


// GET MENU ID FROM RESTAURANT ID
function getMenuId($restaurant_id)
{
    $menu = DB::queryFirstRow("select id from menus where restaurant_id = '$restaurant_id'");
    return  $menu['id'];
}

function getAllCategories($menu_id)
{
    return $categories = DB::query("select * from categories where menu_id = '$menu_id' order by sort ASC");

}
function getSpecificCategories($cat_id)
{
    return $categories = DB::query("select * from categories where id = '$cat_id'");

}

function getItemsFromCategoryId($category_id)
{

    return $items = DB::query("select * from items where category_id = '$category_id'");

}

//GET CATEGORY NAME
function getCategoryName($category_id)
{
    $category = DB::queryFirstRow("select name_en from categories where id = '$category_id'");
    return  $category['name_en'];
}

function getItemName($item_id)
{
    $item = DB::queryFirstRow("select name_en from items where id = '$item_id'");
    return  $item['name_en'];
}

function getExtraName($extra_id)
{
    $extra = DB::queryFirstRow("select name_en from extras where id = '$extra_id'");
    return  $extra['name_en'];
}

function getExtrasFromItemId($item_id)
{
    return $extras = DB::query("select * from extras where item_id = '$item_id'");
}

function getSubItemsFromItemId($extra_id)
{
    return $subItems = DB::query("select * from subitems where extra_id = '$extra_id'");
}

function getRestaurantName($restaurant_id)
{
    $restaurant = DB::queryFirstRow("select name_en from restaurants where id = '$restaurant_id'");
    return  $restaurant['name_en'];
}

function getSubItem($subitem_id)
{
    return $subitem = DB::queryFirstRow("select * from subitems where id = '$subitem_id'");

}

function getExtra($extra_id)
{
    return $extra = DB::queryFirstRow("select * from extras where id = '$extra_id'");
}

function getItem($item_id)
{
    return $item = DB::queryFirstRow("select * from items where id = '$item_id'");
}

function getCategory($category_id)
{
    return $category = DB::queryFirstRow("select * from categories where id = '$category_id'");
}

function getRestaurant($restaurant_id)
{
    return $restaurant = DB::queryFirstRow("select * from restaurants where id = '$restaurant_id'");
}

//
function getTagsOfSpecificRestaurant($restaurant_id)
{
    return $tags = DB::query("select * from tags inner join restaurant_tags on tags.id = restaurant_tags.tag_id where restaurant_tags.restaurant_id = '$restaurant_id' ");
}

function getSpecificTags($tags_id)
{
    return $tags = DB::queryFirstRow("select * from tags  where id = '$tags_id' ");
}


function getSpecificTagsRestaurant($tags_id)
{
    return $tags = DB::query("select * from restaurants inner join restaurant_tags on restaurants.id = restaurant_tags.tag_id where restaurant_tags.restaurant_id = '$tags_id' ");
}

//GET ALL DELIVERY ADDRESS OF RESTAURANTS
function getAllDeliveryAddress($restaurant_id)
{
    $delivery_address = DB::query("select * from delivery_fee where restaurant_id = '$restaurant_id'");
    return $delivery_address;
}
//GET ALL DELIVERY ADDRESS OF RESTAURANTS
function getSpecificDeliveryAddress($delivery_id)
{
    $delivery_address = DB::queryFirstRow("select * from delivery_fee where id = '$delivery_id'");
    return $delivery_address;
}

function getSpecificCity($city_id)
{
    $city = DB::queryFirstRow("select * from cities where id = '$city_id'");
    return $city;
}

function getAllTags()
{
    return $tags= DB::query("select * from tags");
}

function getSpecificCompanyUser($user_id)
{
    DB::useDB('orderapp_b2b');
    return $users = DB::queryFirstRow("select * from b2b_users where id = '$user_id'");
}

function getSpecificBusinessOffer($busines_id)
{
    DB::useDB('orderapp_restaurants');
    return $business = DB::queryFirstRow("select * from business_lunch_detail where id = '$busines_id'");
}

function getSpecificb2bRestDisc($rest_id)
{
    DB::useDB('orderapp_b2b');
    return $rest_discounts = DB::queryFirstRow("select * from b2b_rest_discounts where id = '$rest_id'");
}

function getAllB2BRestDiscounts()
{
    $b2bRestDiscounts  =  DB::query("select brd.*,c.name,r.name_en from b2b_rest_discounts as brd inner join restaurants as r on brd.rest_id = r.id  inner join company as c on brd.company_id = c.id");
    return $b2bRestDiscounts;
}

function getCurrency($rest_id)
{
    DB::useDB('orderapp_restaurants');
    $currency = DB::queryFirstRow("select currency_en from restaurants where id = '$rest_id)'");
    return $currency['currency_en'];
}

function getAllRestaurantsProfit($rest_name)
{
    DB::useDB('orderapp_b2b_b2c');
    $total = 0;
    $count = DB::query("select net_revenue from investor_ledger where restaurant_name = '$rest_name'");
    foreach ($count as $c)
    {
        $total = $total + $c['net_revenue'];
    }
    return $total;
}

function getCommitionByRest($rest_name)
{
    DB::useDB('orderapp_b2b_b2c');
    $comission = DB::queryFirstRow("select comission from restaurant_balance where restaurant_name = '$rest_name'");
    $comission['comission'] = str_replace("%","",$comission['comission']);
    return $comission['comission'];
}

function getCountOrderPerUser($uesr_id)
{
    DB::useDB('orderapp_user');
	$total = 0;
    $count = DB::queryFirstRow("select user_id from user_orders where user_id='$uesr_id'");
    return DB::count();

}

function getUserEmail($user_id)
{
    DB::useDB('orderapp_user');
    $total = 0;
    $users = DB::queryFirstRow("select * from users where id ='$user_id'");
    $email = $users['email'];

    if (strpos($users['smooch_id'], '@') !== false)
    {
        $email = $users['smooch_id'];
    }
    if (strpos($users['email'], '@') !== false)
    {
        $email = $users['email'];
    }

    return array('email' => $email, 'name' => $users['name']);

}

function getSpecificUserShort($user)
{

    DB::useDB('orderapp_user');


    if (strpos($user['smooch_id'], '@') !== false)
    {
        $user['email'] = $user['smooch_id'];
    }
    if (strpos($user['email'], '@') !== false)
    {
        $user['email'] = $user['email'];
    }

    //FIRST FIND WITH EMAIL
    $user_email = DB::queryFirstRow("select * from users where email = '".lcfirst($user['email'])."' ");
    if(empty($user_email['voucherify_id']))
    {
        $user_email = DB::queryFirstRow("select * from users where email = '".ucfirst($user['email'])."' ");

        if(empty($user_email['voucherify_id']))
        {
            $user_email = DB::queryFirstRow("select * from users where smooch_id = '".lcfirst($user['email'])."' ");

            if(empty($user_email['voucherify_id']))
            {
                $user_email = DB::queryFirstRow("select * from users where smooch_id = '".ucfirst($user['email'])."' ");

                if(empty($user_email['voucherify_id']))
                {
                    return 0;
                }
                else
                {
                    return $user_email['voucherify_id'];
                }
            }
            else
            {
                return $user_email['voucherify_id'];
            }

        }
        else{
            return $user_email['voucherify_id'];
        }
    }
    else{
        return $user_email['voucherify_id'];
    }
}

function getVoucherifyId($user){
    DB::useDB('orderapp_user');


    if (strpos($user['smooch_id'], '@') !== false)
    {
        $user['email'] = $user['smooch_id'];
    }
    if (strpos($user['email'], '@') !== false)
    {
        $user['email'] = $user['email'];
    }

    //FIRST FIND WITH EMAIL
    $user_email = DB::queryFirstRow("select * from users where email = '".lcfirst($user['email'])."' and voucherify_id <> '' ");
    if(empty($user_email['voucherify_id']))
    {
        $user_email = DB::queryFirstRow("select * from users where email = '".ucfirst($user['email'])."' and voucherify_id <> '' ");

        if(empty($user_email['voucherify_id']))
        {
            $user_email = DB::queryFirstRow("select * from users where smooch_id = '".lcfirst($user['email'])."' and voucherify_id <> '' ");

            if(empty($user_email['voucherify_id']))
            {
                $user_email = DB::queryFirstRow("select * from users where smooch_id = '".ucfirst($user['email'])."' and voucherify_id <> '' ");

                if(empty($user_email['voucherify_id']))
                {
                    return 0;
                }
                else
                {
                    return $user_email['voucherify_id'];
                }
            }
            else
            {
                return $user_email['voucherify_id'];
            }

        }
        else{
            return $user_email['voucherify_id'];
        }
    }
    else{
        return $user_email['voucherify_id'];
    }
}

function findAndroidUser($user_id)
{
    DB::useDB('orderapp_user');
    $user = DB::queryFirstRow("select provider from users where id = '$user_id'");
    if (strpos($user['provider'], 'Android') !== false)
    {
       return 1;
    }
    else{
        return 0;
    }

}

function findAppleUser($user_id)
{
    DB::useDB('orderapp_user');
    $user = DB::queryFirstRow("select provider from users where id = '$user_id'");
    if (strpos($user['provider'], 'iOS') !== false)
    {
        return 1;
    }
    else{
        return 0;
    }
}

function getOrderDate($user_id)
{
    DB::useDB('orderapp_user');
    $orders = DB::queryFirstRow("select order_date from user_orders where user_id = '$user_id'");
    $date = explode(" ",$orders['order_date']);
    $timestamp = strtotime($date[0]);

//Convert it to DD-MM-YYYY
    $dmy = date("d-m-Y", $timestamp);
    return $dmy;
}
