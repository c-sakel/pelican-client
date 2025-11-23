# OpenAPI\Client\ServerDatabaseApi



All URIs are relative to https://game.prepaid-host.com/api/application, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**applicationServersDatabases()**](ServerDatabaseApi.md#applicationServersDatabases) | **GET** /servers/{server}/databases | List databases |
| [**applicationServersDatabasesView()**](ServerDatabaseApi.md#applicationServersDatabasesView) | **GET** /servers/{server}/databases/{database} | View database |
| [**databaseDelete()**](ServerDatabaseApi.md#databaseDelete) | **DELETE** /servers/{server}/databases/{database} | Delete database |
| [**databaseResetPassword()**](ServerDatabaseApi.md#databaseResetPassword) | **POST** /servers/{server}/databases/{database}/reset-password | Reset password |
| [**databaseStore()**](ServerDatabaseApi.md#databaseStore) | **POST** /servers/{server}/databases | Create database |


## `applicationServersDatabases()`

```php
applicationServersDatabases($server): mixed[]
```

List databases

Return a listing of all databases currently available to a single server.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ServerDatabaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server = 56; // int | The server ID

try {
    $result = $apiInstance->applicationServersDatabases($server);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerDatabaseApi->applicationServersDatabases: ', $e->getMessage(), PHP_EOL;
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

## `applicationServersDatabasesView()`

```php
applicationServersDatabasesView($server, $database): mixed[]
```

View database

Return a single server database.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ServerDatabaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server = 56; // int | The server ID
$database = 56; // int | The database ID

try {
    $result = $apiInstance->applicationServersDatabasesView($server, $database);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerDatabaseApi->applicationServersDatabasesView: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server** | **int**| The server ID | |
| **database** | **int**| The database ID | |

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

## `databaseDelete()`

```php
databaseDelete($server, $database)
```

Delete database

Handle a request to delete a specific server database from the Panel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ServerDatabaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server = 56; // int | The server ID
$database = 56; // int | The database ID

try {
    $apiInstance->databaseDelete($server, $database);
} catch (Exception $e) {
    echo 'Exception when calling ServerDatabaseApi->databaseDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server** | **int**| The server ID | |
| **database** | **int**| The database ID | |

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

## `databaseResetPassword()`

```php
databaseResetPassword($server, $database): string[]
```

Reset password

Reset the password for a specific server database.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ServerDatabaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server = 56; // int | The server ID
$database = 56; // int | The database ID

try {
    $result = $apiInstance->databaseResetPassword($server, $database);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerDatabaseApi->databaseResetPassword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server** | **int**| The server ID | |
| **database** | **int**| The database ID | |

### Return type

**string[]**

### Authorization

[http](../../README.md#http)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `databaseStore()`

```php
databaseStore($server, $store_server_database_request): object
```

Create database

Create a new database on the Panel for a given server.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ServerDatabaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server = 56; // int | The server ID
$store_server_database_request = new \OpenAPI\Client\Model\StoreServerDatabaseRequest(); // \OpenAPI\Client\Model\StoreServerDatabaseRequest

try {
    $result = $apiInstance->databaseStore($server, $store_server_database_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerDatabaseApi->databaseStore: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server** | **int**| The server ID | |
| **store_server_database_request** | [**\OpenAPI\Client\Model\StoreServerDatabaseRequest**](../Model/StoreServerDatabaseRequest.md)|  | |

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
