# # UpdateServerBuildConfigurationRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**allocation** | **int** |  | [optional]
**oom_killer** | **bool** |  | [optional]
**memory** | **float** | Deprecated - use limits.memory | [optional]
**swap** | **float** | Deprecated - use limits.swap | [optional]
**io** | **float** | Deprecated - use limits.io | [optional]
**cpu** | **float** | Deprecated - use limits.cpu | [optional]
**threads** | **string** | Deprecated - use limits.threads | [optional]
**disk** | **float** | Deprecated - use limits.disk | [optional]
**limits** | [**\OpenAPI\Client\Model\UpdateServerBuildConfigurationRequestLimits**](UpdateServerBuildConfigurationRequestLimits.md) |  | [optional]
**add_allocations** | **int[]** |  | [optional]
**remove_allocations** | **int[]** |  | [optional]
**feature_limits** | [**\OpenAPI\Client\Model\UpdateServerBuildConfigurationRequestFeatureLimits**](UpdateServerBuildConfigurationRequestFeatureLimits.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
