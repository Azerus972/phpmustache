<?php


$request = new \GuzzleHttp\Psr7\Request('GET', 'http://dog.ceo//api/breeds/image/randomg');
$promise = $client->sendAsync($request)->then(function ($response) {
    echo 'I completed! ' . $response->getBody();
});
$promise->wait();


?>