<?php

$keyGet = date('Y-m-d') . ' 09:00:00';
//echo $keyGet;
//die();
$curl = curl_init();
// Set some options - we are passing in a useragent too here
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
//    CURLOPT_URL => 'https://minfin.com.ua/data/currency/auction/usd.1000.median.daily.json',
    CURLOPT_URL => 'https://minfin.com.ua/data/currency/auction/usd.1000.median.hourly.json?v=2018031210',
    CURLOPT_USERAGENT => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36'
));
// Send the request & save response to $resp
$result = curl_exec($curl);
// Close request to clear up some resources
curl_close($curl);
$result_arr = json_decode($result, true);
foreach ($result_arr as $key => $value) {
    //var_dump($item);
   // echo $key . " buy: " . $value['b'] . " sell: " . $value['s'] .PHP_EOL;
   // echo $key[$keyGet] . " buy: " . $value['b'] . " sell: " . $value['s'] .PHP_EOL;
}
//echo $result_arr[$keyGet];
//var_dump($result_arr[$keyGet]);
echo $result_arr[$keyGet]['s'];