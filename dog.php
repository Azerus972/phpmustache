<?php

require('vendor/autoload.php');

$c = new \GuzzleHttp\Client();


$res = $c->request('GET','https://dog.ceo/api/breeds/list');


echo $res->getStatusCode();
echo $res->getBody();
echo "\n";


?>