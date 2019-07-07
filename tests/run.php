<?php

require __DIR__ . '../../vendor/autoload.php';

use Likemusic\SimpleHttpClientFopen\SimpleHttpClient;

const DEFAULT_URL = 'http://example.com/';

$url = isset($argv[1]) ? $argv[1] : DEFAULT_URL;

$client = new SimpleHttpClient();
$urlContent = $client->getUrlContent($url);
//file_put_contents("example.com.html", $urlContent);

$modelFilename = 'Fixtures/example.com.html';
$modelContent = file_get_contents($modelFilename);

echo ($urlContent == $modelContent) ? 'OK' : 'FALSE';
echo "\n";
