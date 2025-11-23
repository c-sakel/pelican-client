# Pelican\Client\DatabaseHostApi



All URIs are relative to https://game.prepaid-host.com/api/application, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**applicationDatabasehosts()**](DatabaseHostApi.md#applicationDatabasehosts) | **GET** /database-hosts | List database hosts |
| [**applicationDatabasehostsView()**](DatabaseHostApi.md#applicationDatabasehostsView) | **GET** /database-hosts/{databaseHost} | View database host |
| [**databaseHostDelete()**](DatabaseHostApi.md#databaseHostDelete) | **DELETE** /database-hosts/{databaseHost} | Delete database host |
| [**databaseHostStore()**](DatabaseHostApi.md#databaseHostStore) | **POST** /database-hosts | Create database host |
| [**databaseHostUpdate()**](DatabaseHostApi.md#databaseHostUpdate) | **PATCH** /database-hosts/{databaseHost} | Update database host |


## `applicationDatabasehosts()`

```php
applicationDatabasehosts(): object[]
```

List database hosts

Return all the database hosts currently registered on the Panel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = Pelican\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pelican\Client\Api\DatabaseHostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->applicationDatabasehosts();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatabaseHostApi->applicationDatabasehosts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**object[]**

### Authorization

[http](../../README.md#http)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `applicationDatabasehostsView()`

```php
applicationDatabasehostsView($database_host): object[]
```

View database host

Return a single database host.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = Pelican\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pelican\Client\Api\DatabaseHostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$database_host = 56; // int | The database host ID

try {
    $result = $apiInstance->applicationDatabasehostsView($database_host);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatabaseHostApi->applicationDatabasehostsView: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **database_host** | **int**| The database host ID | |

### Return type

**object[]**

### Authorization

[http](../../README.md#http)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `databaseHostDelete()`

```php
databaseHostDelete($database_host)
```

Delete database host

Delete a database host from the Panel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = Pelican\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pelican\Client\Api\DatabaseHostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$database_host = 56; // int | The database host ID

try {
    $apiInstance->databaseHostDelete($database_host);
} catch (Exception $e) {
    echo 'Exception when calling DatabaseHostApi->databaseHostDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **database_host** | **int**| The database host ID | |

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

## `databaseHostStore()`

```php
databaseHostStore($store_database_host_request): object
```

Create database host

Store a new database host on the Panel and return an HTTP/201 response code with the new database host attached.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = Pelican\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pelican\Client\Api\DatabaseHostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_database_host_request = new \Pelican\Client\Model\StoreDatabaseHostRequest(); // \Pelican\Client\Model\StoreDatabaseHostRequest

try {
    $result = $apiInstance->databaseHostStore($store_database_host_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatabaseHostApi->databaseHostStore: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **store_database_host_request** | [**\Pelican\Client\Model\StoreDatabaseHostRequest**](../Model/StoreDatabaseHostRequest.md)|  | |

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

## `databaseHostUpdate()`

```php
databaseHostUpdate($database_host): object[]
```

Update database host

Update a database host on the Panel and return the updated record to the user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = Pelican\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pelican\Client\Api\DatabaseHostApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$database_host = 56; // int | The database host ID

try {
    $result = $apiInstance->databaseHostUpdate($database_host);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatabaseHostApi->databaseHostUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **database_host** | **int**| The database host ID | |

### Return type

**object[]**

### Authorization

[http](../../README.md#http)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
