# Pelican\Client\UserApi



All URIs are relative to https://game.prepaid-host.com/api/application, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**applicationUsers()**](UserApi.md#applicationUsers) | **GET** /users | List users |
| [**applicationUsersExternal()**](UserApi.md#applicationUsersExternal) | **GET** /users/external/{externalId} | View user (external id) |
| [**applicationUsersView()**](UserApi.md#applicationUsersView) | **GET** /users/{user} | View user |
| [**userAssignRoles()**](UserApi.md#userAssignRoles) | **PATCH** /users/{user}/roles/assign | Assign role to user |
| [**userDelete()**](UserApi.md#userDelete) | **DELETE** /users/{user} | Delete user |
| [**userRemoveRoles()**](UserApi.md#userRemoveRoles) | **PATCH** /users/{user}/roles/remove | Unassign role from user |
| [**userStore()**](UserApi.md#userStore) | **POST** /users | Create user |
| [**userUpdate()**](UserApi.md#userUpdate) | **PATCH** /users/{user} | Update user |


## `applicationUsers()`

```php
applicationUsers(): object[]
```

List users

Handle request to list all users on the panel. Returns a JSON-API representation of a collection of users including any defined relations passed in the request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = Pelican\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pelican\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->applicationUsers();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->applicationUsers: ', $e->getMessage(), PHP_EOL;
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

## `applicationUsersExternal()`

```php
applicationUsersExternal($external_id): object[]
```

View user (external id)

Retrieve a specific user from the database using their external ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = Pelican\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pelican\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_id = 'external_id_example'; // string

try {
    $result = $apiInstance->applicationUsersExternal($external_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->applicationUsersExternal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **external_id** | **string**|  | |

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

## `applicationUsersView()`

```php
applicationUsersView($user): object[]
```

View user

Handle a request to view a single user. Includes any relations that were defined in the request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = Pelican\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pelican\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user = 56; // int | The user ID

try {
    $result = $apiInstance->applicationUsersView($user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->applicationUsersView: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user** | **int**| The user ID | |

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

## `userAssignRoles()`

```php
userAssignRoles($user, $assign_user_roles_request): object[]
```

Assign role to user

Assign roles to a user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = Pelican\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pelican\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user = 56; // int | The user ID
$assign_user_roles_request = new \Pelican\Client\Model\AssignUserRolesRequest(); // \Pelican\Client\Model\AssignUserRolesRequest

try {
    $result = $apiInstance->userAssignRoles($user, $assign_user_roles_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userAssignRoles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user** | **int**| The user ID | |
| **assign_user_roles_request** | [**\Pelican\Client\Model\AssignUserRolesRequest**](../Model/AssignUserRolesRequest.md)|  | |

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

## `userDelete()`

```php
userDelete($user): string[]
```

Delete user

Handle a request to delete a user from the Panel. Returns a HTTP/204 response on successful deletion.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = Pelican\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pelican\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user = 56; // int | The user ID

try {
    $result = $apiInstance->userDelete($user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user** | **int**| The user ID | |

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

## `userRemoveRoles()`

```php
userRemoveRoles($user, $assign_user_roles_request): object[]
```

Unassign role from user

Removes roles from a user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = Pelican\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pelican\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user = 56; // int | The user ID
$assign_user_roles_request = new \Pelican\Client\Model\AssignUserRolesRequest(); // \Pelican\Client\Model\AssignUserRolesRequest

try {
    $result = $apiInstance->userRemoveRoles($user, $assign_user_roles_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userRemoveRoles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user** | **int**| The user ID | |
| **assign_user_roles_request** | [**\Pelican\Client\Model\AssignUserRolesRequest**](../Model/AssignUserRolesRequest.md)|  | |

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

## `userStore()`

```php
userStore($store_user_request): object
```

Create user

Store a new user on the system. Returns the created user and an HTTP/201 header on successful creation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = Pelican\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pelican\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_user_request = new \Pelican\Client\Model\StoreUserRequest(); // \Pelican\Client\Model\StoreUserRequest

try {
    $result = $apiInstance->userStore($store_user_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userStore: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **store_user_request** | [**\Pelican\Client\Model\StoreUserRequest**](../Model/StoreUserRequest.md)|  | |

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

## `userUpdate()`

```php
userUpdate($user): object[]
```

Update user

Update an existing user on the system and return the response. Returns the updated user model response on success. Supports handling of token revocation errors when switching a user from an admin to a normal user.  Revocation errors are returned under the 'revocation_errors' key in the response meta. If there are no errors this is an empty array.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: http
$config = Pelican\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Pelican\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user = 56; // int | The user ID

try {
    $result = $apiInstance->userUpdate($user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user** | **int**| The user ID | |

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
