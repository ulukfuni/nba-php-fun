<?php

require_once 'vendor/autoload.php'; // skip this if using a framework / autoloading elsewhere

use JasonRoman\NbaApi\Client\Client;
use JasonRoman\NbaApi\Request\StatsProd\StatsCms\Rotowire\RotowirePlayersRequest;

$client = new Client();

$request = RotowirePlayersRequest::fromArray([
    'team'   => null,
    'limit'  => 100,
    'offset' => 0,
]);

$response = $client->request($request);

var_dump($response); die;