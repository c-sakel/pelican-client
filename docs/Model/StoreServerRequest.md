# # StoreServerRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**external_id** | **string** |  | [optional]
**name** | **string** |  |
**description** | **string** |  | [optional]
**user** | **int** |  |
**egg** | **int** |  |
**docker_image** | **string** |  | [optional]
**startup** | **string** |  | [optional]
**environment** | **string[]** |  |
**skip_scripts** | **bool** |  | [optional]
**oom_killer** | **bool** |  | [optional]
**start_on_completion** | **bool** |  | [optional]
**limits** | [**\Pelican\Client\Model\StoreServerRequestLimits**](StoreServerRequestLimits.md) |  |
**feature_limits** | [**\Pelican\Client\Model\StoreServerRequestFeatureLimits**](StoreServerRequestFeatureLimits.md) |  |
**allocation** | [**\Pelican\Client\Model\StoreServerRequestAllocation**](StoreServerRequestAllocation.md) |  | [optional]
**deploy** | [**\Pelican\Client\Model\StoreServerRequestDeploy**](StoreServerRequestDeploy.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
