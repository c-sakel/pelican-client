<?php

namespace App\Services\Pelican;

use GuzzleHttp\Client as GuzzleClient;
use Pelican\Client\Configuration;
use Pelican\Client\Api\ServerApi;
use Pelican\Client\Api\UserApi;

class PelicanClient
{
    private Configuration $config;
    private GuzzleClient $http;

    public function __construct(string $baseUri, string $token)
    {
        $this->http = new GuzzleClient();

        $this->config = Configuration::getDefaultConfiguration()
            ->setHost($baseUri)
            ->setAccessToken($token);
    }

    public function servers(): ServerApi
    {
        return new ServerApi($this->http, $this->config);
    }

    public function users(): UserApi
    {
        return new UserApi($this->http, $this->config);
    }
}

