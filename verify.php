<?php
$access_token = 'YqcSSBE2PsHaUsCAIrM9iGoz2BBVl8YjTzumuFZXthcE1Lna2dxJb+78lDhGjkZqLQHasBtODbvYsDGKy2jvg/M1NPKe9DzPlYqBqAIQ8yL+OwGqBhcGsfspcMTiJW0nuP9hdhPk5bF1nemzmPWfygdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
?>