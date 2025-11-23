<?php

namespace Pelican\Client;

use GuzzleHttp\Client as GuzzleClient;
use OpenAPI\Client\Configuration;
use OpenAPI\Client\Api\ServerApi;
use OpenAPI\Client\Api\UserApi;

class PelicanClient
{
    private Configuration $config;
    private GuzzleClient $http;

    public function __construct(
        string $baseUri,
        string $token,
        ?GuzzleClient $httpClient = null,
    ) {
        $this->http = $httpClient ?: new GuzzleClient();

        $this->config = Configuration::getDefaultConfiguration()
            ->setHost($baseUri)          // z. B. https://panel/api/application
            ->setAccessToken($token);    // Bearer Token
    }

    public function servers(): ServerApi
    {
        return new ServerApi($this->http, $this->config);
    }

    public function users(): UserApi
    {
        return new UserApi($this->http, $this->config);
    }

    // nodes(), mounts(), databases() usw. bei Bedarf
}

