<?php
require 'vendor/autoload.php';
use GuzzleHttp\Client;


$client = new Client(['base_uri' => 'https://itea.ua']);
$res = $client->request('GET','/');
echo $res->getBody();