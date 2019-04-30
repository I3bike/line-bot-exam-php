<?php
$access_token = 'FdaI9iGFV3tbfRGQd3LlENtD9DvazBlw6xzgf8TVgvfayMntk2aIPRrVxJ+eTNxznvSXo/9DRT/o9QSYor6mrshtfma+ZokAgNj7NoW0fAtGa5Wib6JJDuRo1f/YeLUyXNFrIU/un5R/Oe3Mic9engdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;