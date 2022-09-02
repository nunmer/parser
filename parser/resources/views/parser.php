<?php
include_once 'C:\xampp\htdocs\parser\parser\simple_html_dom.php';

function curlGetPage($url, $referer = 'https://www.google.com/'){

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36');
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_REFERER, $referer);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($ch);
    curl_close($ch);

    return $response;
}
//
//$page = curlGetPage('https://www.google.com/finance/quote/KZT-USD?sa=X&ved=2ahUKEwjt6_mrofb5AhWSlMMKHVIpBmUQmY0JegQIAhAb');
//$html = str_get_html($page);
//
//foreach($html->find('.e1AOyf') AS $currencies){
//    $name = $currencies->find('.pKBk1e', 10);
//    $value = $currencies->find('.wzUQBf', 10); //0,1 Dou jones 2,3 S&P 4,5 Nasdaq 6,7 Russel 8,9 VIX
//    echo $name . ' ' . $value;
//}

function getCurrency($currency){
    $currency_name = curlGetPage('https://www.google.com/finance/quote/' . $currency);
    $value = str_get_html($currency_name);

    echo $value;

    //Не законченная задумка

    
//    foreach($value->find('main') AS $cur){
//        $name = $cur->find('.zzDege', 0);
//        $value = $cur->find('.YMlKec.fxKbKc', 0);
//        return $name . ' ' . $value;
//    }
}

?>
