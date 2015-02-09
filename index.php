<?php

require_once 'vendor/autoload.php';

$client = new DraperStudio\HasOffers\Client(
    '6f35b6ffaecf70736e1624573ad122b4fe320de623c1dfd4059b5774d1556837',
    'yeahmobi'
);

$hofer = $client->api('Affiliate\Offer');

try {
    $response = $hofer->findAll(['limit' => 5]);

    var_dump($response);
} catch (DraperStudio\HasOffers\Exception $e) {
    echo($e->getMessage());
}
