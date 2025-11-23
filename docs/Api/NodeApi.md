# Pelican\Client\NodeApi



All URIs are relative to https://game.prepaid-host.com/api/application, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**applicationNodes()**](NodeApi.md#applicationNodes) | **GET** /nodes | List nodes |
| [**applicationNodesView()**](NodeApi.md#applicationNodesView) | **GET** /nodes/{node} | View node |
| [**nodeDelete()**](NodeApi.md#nodeDelete) | **DELETE** /nodes/{node} | Delete node |
| [**nodeStore()**](NodeApi.md#nodeStore) | **POST** /nodes | Create node |
| [**nodeUpdate()**](NodeApi.md#nodeUpdate) | **PATCH** /nodes/{node} | Update node |
| [**nodesNodeConfiguration()**](NodeApi.md#nodesNodeConfiguration) | **GET** /nodes/{node}/configuration | Get node configuration |
| [**nodesNodeDeployment()**](NodeApi.md#nodesNodeDeployment) | **GET** /nodes/deployable | Get deployable nodes |


## `applicationNodes()`

```php
applicationNodes(): object[]
```

List nodes

Return all the nodes currently available on the Panel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = Pelican\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pelican\Client\Api\NodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->applicationNodes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodeApi->applicationNodes: ', $e->getMessage(), PHP_EOL;
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

## `applicationNodesView()`

```php
applicationNodesView($node): object[]
```

View node

Return data for a single instance of a node.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = Pelican\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pelican\Client\Api\NodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$node = 56; // int | The node ID

try {
    $result = $apiInstance->applicationNodesView($node);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodeApi->applicationNodesView: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **node** | **int**| The node ID | |

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

## `nodeDelete()`

```php
nodeDelete($node): string[]
```

Delete node

Deletes a given node from the Panel as long as there are no servers currently attached to it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = Pelican\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pelican\Client\Api\NodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$node = 56; // int | The node ID

try {
    $result = $apiInstance->nodeDelete($node);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodeApi->nodeDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **node** | **int**| The node ID | |

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

## `nodeStore()`

```php
nodeStore($store_node_request): object
```

Create node

Create a new node on the Panel. Returns the created node and an HTTP/201 status response on success.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = Pelican\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pelican\Client\Api\NodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_node_request = new \Pelican\Client\Model\StoreNodeRequest(); // \Pelican\Client\Model\StoreNodeRequest

try {
    $result = $apiInstance->nodeStore($store_node_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodeApi->nodeStore: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **store_node_request** | [**\Pelican\Client\Model\StoreNodeRequest**](../Model/StoreNodeRequest.md)|  | |

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

## `nodeUpdate()`

```php
nodeUpdate($node): object[]
```

Update node

Update an existing node on the Panel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = Pelican\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pelican\Client\Api\NodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$node = 56; // int | The node ID

try {
    $result = $apiInstance->nodeUpdate($node);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodeApi->nodeUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **node** | **int**| The node ID | |

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

## `nodesNodeConfiguration()`

```php
nodesNodeConfiguration($node): \Pelican\Client\Model\NodesNodeConfiguration200Response
```

Get node configuration

Returns the configuration information for a node. This allows for automated deployments to remote machines so long as an API key is provided to the machine to make the request with, and the node is known.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = Pelican\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pelican\Client\Api\NodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$node = 56; // int | The node ID

try {
    $result = $apiInstance->nodesNodeConfiguration($node);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodeApi->nodesNodeConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **node** | **int**| The node ID | |

### Return type

[**\Pelican\Client\Model\NodesNodeConfiguration200Response**](../Model/NodesNodeConfiguration200Response.md)

### Authorization

[http](../../README.md#http)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `nodesNodeDeployment()`

```php
nodesNodeDeployment($memory, $disk, $page, $cpu, $tags, $location_ids): object[]
```

Get deployable nodes

Finds any nodes that are available using the given deployment criteria. This works similarly to the server creation process, but allows you to pass the deployment object to this endpoint and get back a list of all Nodes satisfying the requirements.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = Pelican\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pelican\Client\Api\NodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$memory = 56; // int
$disk = 56; // int
$page = 56; // int
$cpu = 56; // int
$tags = array('tags_example'); // string[]
$location_ids = array('location_ids_example'); // string[]

try {
    $result = $apiInstance->nodesNodeDeployment($memory, $disk, $page, $cpu, $tags, $location_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodeApi->nodesNodeDeployment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **memory** | **int**|  | |
| **disk** | **int**|  | |
| **page** | **int**|  | [optional] |
| **cpu** | **int**|  | [optional] |
| **tags** | [**string[]**](../Model/string.md)|  | [optional] |
| **location_ids** | [**string[]**](../Model/string.md)|  | [optional] |

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
