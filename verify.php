<?php
$access_token = 'xNSgpb4BNjuK5sdbinYo4AU0odx5mHOuth+jcWr46JRPcgSHKpfp94vPaSCLqTXlTSbN7N12bT9J/15Bm3NbUPpBnAuYmPVjWyCjloKd+TDcJj1/5T4dV9cKiq4J6ONc8WdJzBZdZrQfZnqE8jU8KQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
