# OpenAPI\Client\ServerApi



All URIs are relative to https://game.prepaid-host.com/api/application, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**applicationServers()**](ServerApi.md#applicationServers) | **GET** /servers | List servers |
| [**applicationServersBuild()**](ServerApi.md#applicationServersBuild) | **PATCH** /servers/{server}/build | Update build |
| [**applicationServersDetails()**](ServerApi.md#applicationServersDetails) | **PATCH** /servers/{server}/details | Update details |
| [**applicationServersExternal()**](ServerApi.md#applicationServersExternal) | **GET** /servers/external/{external_id} | View server (external id) |
| [**applicationServersReinstall()**](ServerApi.md#applicationServersReinstall) | **POST** /servers/{server}/reinstall | Reinstall |
| [**applicationServersServerDelete0()**](ServerApi.md#applicationServersServerDelete0) | **DELETE** /servers/{server}/{force} | Delete server |
| [**applicationServersServerDelete1()**](ServerApi.md#applicationServersServerDelete1) | **DELETE** /servers/{server} | Delete server |
| [**applicationServersStartup()**](ServerApi.md#applicationServersStartup) | **PATCH** /servers/{server}/startup | Update startup |
| [**applicationServersSuspend()**](ServerApi.md#applicationServersSuspend) | **POST** /servers/{server}/suspend | Suspsend |
| [**applicationServersTransfer()**](ServerApi.md#applicationServersTransfer) | **POST** /servers/{server}/transfer | Start transfer |
| [**applicationServersTransferCancel()**](ServerApi.md#applicationServersTransferCancel) | **POST** /servers/{server}/transfer/cancel | Cancel transfer |
| [**applicationServersUnsuspend()**](ServerApi.md#applicationServersUnsuspend) | **POST** /servers/{server}/unsuspend | Unsuspsend |
| [**applicationServersView()**](ServerApi.md#applicationServersView) | **GET** /servers/{server} | View server |
| [**serverStore()**](ServerApi.md#serverStore) | **POST** /servers | Create server |


## `applicationServers()`

```php
applicationServers($search): mixed[]
```

List servers

Return all the servers that currently exist on the Panel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = 'search_example'; // string

try {
    $result = $apiInstance->applicationServers($search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->applicationServers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **search** | **string**|  | [optional] |

### Return type

**mixed[]**

### Authorization

[http](../../README.md#http)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `applicationServersBuild()`

```php
applicationServersBuild($server, $update_server_build_configuration_request): mixed[]
```

Update build

Update the build details for a specific server.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server = 56; // int | The server ID
$update_server_build_configuration_request = new \OpenAPI\Client\Model\UpdateServerBuildConfigurationRequest(); // \OpenAPI\Client\Model\UpdateServerBuildConfigurationRequest

try {
    $result = $apiInstance->applicationServersBuild($server, $update_server_build_configuration_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->applicationServersBuild: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server** | **int**| The server ID | |
| **update_server_build_configuration_request** | [**\OpenAPI\Client\Model\UpdateServerBuildConfigurationRequest**](../Model/UpdateServerBuildConfigurationRequest.md)|  | |

### Return type

**mixed[]**

### Authorization

[http](../../README.md#http)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `applicationServersDetails()`

```php
applicationServersDetails($server, $update_server_details_request): mixed[]
```

Update details

Update the details for a specific server.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server = 56; // int | The server ID
$update_server_details_request = new \OpenAPI\Client\Model\UpdateServerDetailsRequest(); // \OpenAPI\Client\Model\UpdateServerDetailsRequest

try {
    $result = $apiInstance->applicationServersDetails($server, $update_server_details_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->applicationServersDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server** | **int**| The server ID | |
| **update_server_details_request** | [**\OpenAPI\Client\Model\UpdateServerDetailsRequest**](../Model/UpdateServerDetailsRequest.md)|  | |

### Return type

**mixed[]**

### Authorization

[http](../../README.md#http)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `applicationServersExternal()`

```php
applicationServersExternal($external_id): mixed[]
```

View server (external id)

Retrieve a specific server from the database using its external ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_id = 'external_id_example'; // string

try {
    $result = $apiInstance->applicationServersExternal($external_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->applicationServersExternal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **external_id** | **string**|  | |

### Return type

**mixed[]**

### Authorization

[http](../../README.md#http)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `applicationServersReinstall()`

```php
applicationServersReinstall($server)
```

Reinstall

Mark a server as needing to be reinstalled.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server = 56; // int | The server ID

try {
    $apiInstance->applicationServersReinstall($server);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->applicationServersReinstall: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server** | **int**| The server ID | |

### Return type

void (empty response body)

### Authorization

[http](../../README.md#http)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `applicationServersServerDelete0()`

```php
applicationServersServerDelete0($server, $force)
```

Delete server

Deletes a server.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server = 56; // int | The server ID
$force = ''; // string | **Optional**

try {
    $apiInstance->applicationServersServerDelete0($server, $force);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->applicationServersServerDelete0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server** | **int**| The server ID | |
| **force** | **string**| **Optional** | [default to &#39;&#39;] |

### Return type

void (empty response body)

### Authorization

[http](../../README.md#http)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `applicationServersServerDelete1()`

```php
applicationServersServerDelete1($server)
```

Delete server

Deletes a server.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server = 56; // int | The server ID

try {
    $apiInstance->applicationServersServerDelete1($server);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->applicationServersServerDelete1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server** | **int**| The server ID | |

### Return type

void (empty response body)

### Authorization

[http](../../README.md#http)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `applicationServersStartup()`

```php
applicationServersStartup($server, $update_server_startup_request): mixed[]
```

Update startup

Update the startup and environment settings for a specific server.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server = 56; // int | The server ID
$update_server_startup_request = new \OpenAPI\Client\Model\UpdateServerStartupRequest(); // \OpenAPI\Client\Model\UpdateServerStartupRequest

try {
    $result = $apiInstance->applicationServersStartup($server, $update_server_startup_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->applicationServersStartup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server** | **int**| The server ID | |
| **update_server_startup_request** | [**\OpenAPI\Client\Model\UpdateServerStartupRequest**](../Model/UpdateServerStartupRequest.md)|  | |

### Return type

**mixed[]**

### Authorization

[http](../../README.md#http)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `applicationServersSuspend()`

```php
applicationServersSuspend($server)
```

Suspsend

Suspend a server on the Panel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server = 56; // int | The server ID

try {
    $apiInstance->applicationServersSuspend($server);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->applicationServersSuspend: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server** | **int**| The server ID | |

### Return type

void (empty response body)

### Authorization

[http](../../README.md#http)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `applicationServersTransfer()`

```php
applicationServersTransfer($server, $application_servers_transfer_request)
```

Start transfer

Starts a transfer of a server to a new node.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server = 56; // int | The server ID
$application_servers_transfer_request = new \OpenAPI\Client\Model\ApplicationServersTransferRequest(); // \OpenAPI\Client\Model\ApplicationServersTransferRequest

try {
    $apiInstance->applicationServersTransfer($server, $application_servers_transfer_request);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->applicationServersTransfer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server** | **int**| The server ID | |
| **application_servers_transfer_request** | [**\OpenAPI\Client\Model\ApplicationServersTransferRequest**](../Model/ApplicationServersTransferRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[http](../../README.md#http)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `applicationServersTransferCancel()`

```php
applicationServersTransferCancel($server)
```

Cancel transfer

Cancels a transfer of a server to a new node.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server = 56; // int | The server ID

try {
    $apiInstance->applicationServersTransferCancel($server);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->applicationServersTransferCancel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server** | **int**| The server ID | |

### Return type

void (empty response body)

### Authorization

[http](../../README.md#http)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `applicationServersUnsuspend()`

```php
applicationServersUnsuspend($server)
```

Unsuspsend

Unsuspend a server on the Panel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server = 56; // int | The server ID

try {
    $apiInstance->applicationServersUnsuspend($server);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->applicationServersUnsuspend: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server** | **int**| The server ID | |

### Return type

void (empty response body)

### Authorization

[http](../../README.md#http)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `applicationServersView()`

```php
applicationServersView($server): mixed[]
```

View server

Show a single server transformed for the application API.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server = 56; // int | The server ID

try {
    $result = $apiInstance->applicationServersView($server);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->applicationServersView: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server** | **int**| The server ID | |

### Return type

**mixed[]**

### Authorization

[http](../../README.md#http)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `serverStore()`

```php
serverStore($store_server_request): object
```

Create server

Create a new server on the system.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_server_request = new \OpenAPI\Client\Model\StoreServerRequest(); // \OpenAPI\Client\Model\StoreServerRequest

try {
    $result = $apiInstance->serverStore($store_server_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->serverStore: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **store_server_request** | [**\OpenAPI\Client\Model\StoreServerRequest**](../Model/StoreServerRequest.md)|  | |

### Return type

**object**

### Authorization

[http](../../README.md#http)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
