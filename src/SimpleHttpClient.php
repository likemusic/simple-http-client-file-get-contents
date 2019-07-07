<?php

namespace Likemusic\SimpleHttpClientFopen;

use Likemusic\SimpleHttpClient\HttpClientInterface;

/**
 * Class SimpleHttpClient
 * @package Likemusic\SimpleHttpClientFopen
 */
class SimpleHttpClient implements HttpClientInterface
{
    public function getUrlContent($url)
    {
        return file_get_contents($url);
    }
}
