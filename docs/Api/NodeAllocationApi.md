# OpenAPI\Client\NodeAllocationApi



All URIs are relative to https://game.prepaid-host.com/api/application, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**allocationStore()**](NodeAllocationApi.md#allocationStore) | **POST** /nodes/{node}/allocations | Create allocation |
| [**applicationAllocations()**](NodeAllocationApi.md#applicationAllocations) | **GET** /nodes/{node}/allocations | List allocations |
| [**applicationAllocationsView()**](NodeAllocationApi.md#applicationAllocationsView) | **DELETE** /nodes/{node}/allocations/{allocation} | Delete allocation |


## `allocationStore()`

```php
allocationStore($node, $store_allocation_request): string[]
```

Create allocation

Store new allocations for a given node.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NodeAllocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$node = 56; // int | The node ID
$store_allocation_request = new \OpenAPI\Client\Model\StoreAllocationRequest(); // \OpenAPI\Client\Model\StoreAllocationRequest

try {
    $result = $apiInstance->allocationStore($node, $store_allocation_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodeAllocationApi->allocationStore: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **node** | **int**| The node ID | |
| **store_allocation_request** | [**\OpenAPI\Client\Model\StoreAllocationRequest**](../Model/StoreAllocationRequest.md)|  | |

### Return type

**string[]**

### Authorization

[http](../../README.md#http)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `applicationAllocations()`

```php
applicationAllocations($node): mixed[]
```

List allocations

Return all the allocations that exist for a given node.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NodeAllocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$node = 56; // int | The node ID

try {
    $result = $apiInstance->applicationAllocations($node);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodeAllocationApi->applicationAllocations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **node** | **int**| The node ID | |

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

## `applicationAllocationsView()`

```php
applicationAllocationsView($node, $allocation): string[]
```

Delete allocation

Delete a specific allocation from the Panel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NodeAllocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$node = 56; // int | The node ID
$allocation = 56; // int | The allocation ID

try {
    $result = $apiInstance->applicationAllocationsView($node, $allocation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodeAllocationApi->applicationAllocationsView: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **node** | **int**| The node ID | |
| **allocation** | **int**| The allocation ID | |

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
