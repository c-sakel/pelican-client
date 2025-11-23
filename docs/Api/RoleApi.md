# Pelican\Client\RoleApi



All URIs are relative to https://game.prepaid-host.com/api/application, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**applicationRoles()**](RoleApi.md#applicationRoles) | **GET** /roles | List roles |
| [**applicationRolesView()**](RoleApi.md#applicationRolesView) | **GET** /roles/{role} | View role |
| [**roleDelete()**](RoleApi.md#roleDelete) | **DELETE** /roles/{role} | Delete role |
| [**roleStore()**](RoleApi.md#roleStore) | **POST** /roles | Create role |
| [**roleUpdate()**](RoleApi.md#roleUpdate) | **PATCH** /roles/{role} | Update role |


## `applicationRoles()`

```php
applicationRoles(): object[]
```

List roles

Return all the roles currently registered on the Panel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = Pelican\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pelican\Client\Api\RoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->applicationRoles();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->applicationRoles: ', $e->getMessage(), PHP_EOL;
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

## `applicationRolesView()`

```php
applicationRolesView($role): object[]
```

View role

Return a single role.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = Pelican\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pelican\Client\Api\RoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$role = 56; // int | The role ID

try {
    $result = $apiInstance->applicationRolesView($role);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->applicationRolesView: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **role** | **int**| The role ID | |

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

## `roleDelete()`

```php
roleDelete($role)
```

Delete role

Delete a role from the Panel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = Pelican\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pelican\Client\Api\RoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$role = 56; // int | The role ID

try {
    $apiInstance->roleDelete($role);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->roleDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **role** | **int**| The role ID | |

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

## `roleStore()`

```php
roleStore($store_role_request): object
```

Create role

Store a new role on the Panel and return an HTTP/201 response code with the new role attached.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = Pelican\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pelican\Client\Api\RoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_role_request = new \Pelican\Client\Model\StoreRoleRequest(); // \Pelican\Client\Model\StoreRoleRequest

try {
    $result = $apiInstance->roleStore($store_role_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->roleStore: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **store_role_request** | [**\Pelican\Client\Model\StoreRoleRequest**](../Model/StoreRoleRequest.md)|  | |

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

## `roleUpdate()`

```php
roleUpdate($role, $update_role_request): object[]
```

Update role

Update a role on the Panel and return the updated record to the user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = Pelican\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pelican\Client\Api\RoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$role = 56; // int | The role ID
$update_role_request = new \Pelican\Client\Model\UpdateRoleRequest(); // \Pelican\Client\Model\UpdateRoleRequest

try {
    $result = $apiInstance->roleUpdate($role, $update_role_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleApi->roleUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **role** | **int**| The role ID | |
| **update_role_request** | [**\Pelican\Client\Model\UpdateRoleRequest**](../Model/UpdateRoleRequest.md)|  | |

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
