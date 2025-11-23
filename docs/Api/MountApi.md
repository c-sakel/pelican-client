# Pelican\Client\MountApi



All URIs are relative to https://game.prepaid-host.com/api/application, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**applicationMounts()**](MountApi.md#applicationMounts) | **GET** /mounts | List mounts |
| [**applicationMountsEggs()**](MountApi.md#applicationMountsEggs) | **POST** /mounts/{mount}/eggs | Assign eggs to mount |
| [**applicationMountsNodes()**](MountApi.md#applicationMountsNodes) | **POST** /mounts/{mount}/nodes | Assign nodes to mount |
| [**applicationMountsServers()**](MountApi.md#applicationMountsServers) | **POST** /mounts/{mount}/servers | Assign servers to mount |
| [**applicationMountsView()**](MountApi.md#applicationMountsView) | **GET** /mounts/{mount} | View mount |
| [**mountDelete()**](MountApi.md#mountDelete) | **DELETE** /mounts/{mount} | Delete mount |
| [**mountDeleteEgg()**](MountApi.md#mountDeleteEgg) | **DELETE** /mounts/{mount}/eggs/{egg_id} | Unassign egg from mount |
| [**mountDeleteNode()**](MountApi.md#mountDeleteNode) | **DELETE** /mounts/{mount}/nodes/{node_id} | Unassign node from mount |
| [**mountDeleteServer()**](MountApi.md#mountDeleteServer) | **DELETE** /mounts/{mount}/servers/{server_id} | Unassign server from mount |
| [**mountGetEggs()**](MountApi.md#mountGetEggs) | **GET** /mounts/{mount}/eggs | List assigned eggs |
| [**mountGetNodes()**](MountApi.md#mountGetNodes) | **GET** /mounts/{mount}/nodes | List assigned nodes |
| [**mountGetServers()**](MountApi.md#mountGetServers) | **GET** /mounts/{mount}/servers | List assigned servers |
| [**mountStore()**](MountApi.md#mountStore) | **POST** /mounts | Create mount |
| [**mountUpdate()**](MountApi.md#mountUpdate) | **PATCH** /mounts/{mount} | Update mount |


## `applicationMounts()`

```php
applicationMounts(): object[]
```

List mounts

Return all the mounts currently available on the Panel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = Pelican\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pelican\Client\Api\MountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->applicationMounts();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MountApi->applicationMounts: ', $e->getMessage(), PHP_EOL;
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

## `applicationMountsEggs()`

```php
applicationMountsEggs($mount, $application_mounts_eggs_request): object[]
```

Assign eggs to mount

Adds eggs to the mount's many-to-many relation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = Pelican\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pelican\Client\Api\MountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mount = 56; // int | The mount ID
$application_mounts_eggs_request = new \Pelican\Client\Model\ApplicationMountsEggsRequest(); // \Pelican\Client\Model\ApplicationMountsEggsRequest

try {
    $result = $apiInstance->applicationMountsEggs($mount, $application_mounts_eggs_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MountApi->applicationMountsEggs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mount** | **int**| The mount ID | |
| **application_mounts_eggs_request** | [**\Pelican\Client\Model\ApplicationMountsEggsRequest**](../Model/ApplicationMountsEggsRequest.md)|  | |

### Return type

**object[]**

### Authorization

[http](../../README.md#http)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `applicationMountsNodes()`

```php
applicationMountsNodes($mount, $application_mounts_nodes_request): object[]
```

Assign nodes to mount

Adds nodes to the mount's many-to-many relation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = Pelican\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pelican\Client\Api\MountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mount = 56; // int | The mount ID
$application_mounts_nodes_request = new \Pelican\Client\Model\ApplicationMountsNodesRequest(); // \Pelican\Client\Model\ApplicationMountsNodesRequest

try {
    $result = $apiInstance->applicationMountsNodes($mount, $application_mounts_nodes_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MountApi->applicationMountsNodes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mount** | **int**| The mount ID | |
| **application_mounts_nodes_request** | [**\Pelican\Client\Model\ApplicationMountsNodesRequest**](../Model/ApplicationMountsNodesRequest.md)|  | |

### Return type

**object[]**

### Authorization

[http](../../README.md#http)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `applicationMountsServers()`

```php
applicationMountsServers($mount, $application_mounts_servers_request): object[]
```

Assign servers to mount

Adds servers to the mount's many-to-many relation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = Pelican\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pelican\Client\Api\MountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mount = 56; // int | The mount ID
$application_mounts_servers_request = new \Pelican\Client\Model\ApplicationMountsServersRequest(); // \Pelican\Client\Model\ApplicationMountsServersRequest

try {
    $result = $apiInstance->applicationMountsServers($mount, $application_mounts_servers_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MountApi->applicationMountsServers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mount** | **int**| The mount ID | |
| **application_mounts_servers_request** | [**\Pelican\Client\Model\ApplicationMountsServersRequest**](../Model/ApplicationMountsServersRequest.md)|  | |

### Return type

**object[]**

### Authorization

[http](../../README.md#http)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `applicationMountsView()`

```php
applicationMountsView($mount): object[]
```

View mount

Return data for a single instance of a mount.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = Pelican\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pelican\Client\Api\MountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mount = 56; // int | The mount ID

try {
    $result = $apiInstance->applicationMountsView($mount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MountApi->applicationMountsView: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mount** | **int**| The mount ID | |

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

## `mountDelete()`

```php
mountDelete($mount): string[]
```

Delete mount

Deletes a given mount from the Panel as long as there are no servers currently attached to it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = Pelican\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pelican\Client\Api\MountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mount = 56; // int | The mount ID

try {
    $result = $apiInstance->mountDelete($mount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MountApi->mountDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mount** | **int**| The mount ID | |

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

## `mountDeleteEgg()`

```php
mountDeleteEgg($mount, $egg_id): string[]
```

Unassign egg from mount

Deletes an egg from the mount's many-to-many relation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = Pelican\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pelican\Client\Api\MountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mount = 56; // int | The mount ID
$egg_id = 56; // int

try {
    $result = $apiInstance->mountDeleteEgg($mount, $egg_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MountApi->mountDeleteEgg: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mount** | **int**| The mount ID | |
| **egg_id** | **int**|  | |

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

## `mountDeleteNode()`

```php
mountDeleteNode($mount, $node_id): string[]
```

Unassign node from mount

Deletes a node from the mount's many-to-many relation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = Pelican\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pelican\Client\Api\MountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mount = 56; // int | The mount ID
$node_id = 56; // int

try {
    $result = $apiInstance->mountDeleteNode($mount, $node_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MountApi->mountDeleteNode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mount** | **int**| The mount ID | |
| **node_id** | **int**|  | |

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

## `mountDeleteServer()`

```php
mountDeleteServer($mount, $server_id): string[]
```

Unassign server from mount

Deletes a server from the mount's many-to-many relation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = Pelican\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pelican\Client\Api\MountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mount = 56; // int | The mount ID
$server_id = 56; // int

try {
    $result = $apiInstance->mountDeleteServer($mount, $server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MountApi->mountDeleteServer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mount** | **int**| The mount ID | |
| **server_id** | **int**|  | |

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

## `mountGetEggs()`

```php
mountGetEggs($mount): object[]
```

List assigned eggs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = Pelican\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pelican\Client\Api\MountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mount = 56; // int | The mount ID

try {
    $result = $apiInstance->mountGetEggs($mount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MountApi->mountGetEggs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mount** | **int**| The mount ID | |

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

## `mountGetNodes()`

```php
mountGetNodes($mount): object[]
```

List assigned nodes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = Pelican\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pelican\Client\Api\MountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mount = 56; // int | The mount ID

try {
    $result = $apiInstance->mountGetNodes($mount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MountApi->mountGetNodes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mount** | **int**| The mount ID | |

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

## `mountGetServers()`

```php
mountGetServers($mount): object[]
```

List assigned servers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = Pelican\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pelican\Client\Api\MountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mount = 56; // int | The mount ID

try {
    $result = $apiInstance->mountGetServers($mount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MountApi->mountGetServers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mount** | **int**| The mount ID | |

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

## `mountStore()`

```php
mountStore(): object
```

Create mount

Create a new mount on the Panel. Returns the created mount and an HTTP/201 status response on success.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = Pelican\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pelican\Client\Api\MountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->mountStore();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MountApi->mountStore: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**object**

### Authorization

[http](../../README.md#http)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `mountUpdate()`

```php
mountUpdate($mount): object[]
```

Update mount

Update an existing mount on the Panel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = Pelican\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pelican\Client\Api\MountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mount = 56; // int | The mount ID

try {
    $result = $apiInstance->mountUpdate($mount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MountApi->mountUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mount** | **int**| The mount ID | |

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
