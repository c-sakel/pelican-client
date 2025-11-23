# Pelican\Client\EggApi



All URIs are relative to https://game.prepaid-host.com/api/application, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**applicationEggsEggs()**](EggApi.md#applicationEggsEggs) | **GET** /eggs | List eggs |
| [**applicationEggsEggsExport()**](EggApi.md#applicationEggsEggsExport) | **GET** /eggs/{egg}/export | Export egg |
| [**applicationEggsEggsView()**](EggApi.md#applicationEggsEggsView) | **GET** /eggs/{egg} | View egg |


## `applicationEggsEggs()`

```php
applicationEggsEggs(): object[]
```

List eggs

Return all eggs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = Pelican\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pelican\Client\Api\EggApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->applicationEggsEggs();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EggApi->applicationEggsEggs: ', $e->getMessage(), PHP_EOL;
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

## `applicationEggsEggsExport()`

```php
applicationEggsEggsExport($egg, $format): string
```

Export egg

Return a single egg as yaml or json file (defaults to YAML)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = Pelican\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pelican\Client\Api\EggApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$egg = 56; // int | The egg ID
$format = 'format_example'; // string

try {
    $result = $apiInstance->applicationEggsEggsExport($egg, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EggApi->applicationEggsEggsExport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **egg** | **int**| The egg ID | |
| **format** | **string**|  | [optional] |

### Return type

**string**

### Authorization

[http](../../README.md#http)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/html`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `applicationEggsEggsView()`

```php
applicationEggsEggsView($egg): object[]
```

View egg

Return a single egg that exists

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = Pelican\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pelican\Client\Api\EggApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$egg = 56; // int | The egg ID

try {
    $result = $apiInstance->applicationEggsEggsView($egg);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EggApi->applicationEggsEggsView: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **egg** | **int**| The egg ID | |

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
