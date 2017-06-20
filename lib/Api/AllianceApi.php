<?php
/**
 * AllianceApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * EVE Swagger Interface
 *
 * An OpenAPI for EVE Online
 *
 * OpenAPI spec version: 0.5.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\Configuration;
use \Swagger\Client\ObjectSerializer;

/**
 * AllianceApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AllianceApi
{
    /**
     * API Client
     *
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Swagger\Client\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     *
     * @return AllianceApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getAlliances
     *
     * List all alliances
     *
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param string $user_agent Client identifier, takes precedence over headers (optional)
     * @param string $x_user_agent Client identifier, takes precedence over User-Agent (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return int[]
     */
    public function getAlliances($datasource = null, $user_agent = null, $x_user_agent = null)
    {
        list($response) = $this->getAlliancesWithHttpInfo($datasource, $user_agent, $x_user_agent);
        return $response;
    }

    /**
     * Operation getAlliancesWithHttpInfo
     *
     * List all alliances
     *
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param string $user_agent Client identifier, takes precedence over headers (optional)
     * @param string $x_user_agent Client identifier, takes precedence over User-Agent (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of int[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getAlliancesWithHttpInfo($datasource = null, $user_agent = null, $x_user_agent = null)
    {
        // parse inputs
        $resourcePath = "/alliances/";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($datasource !== null) {
            $queryParams['datasource'] = $this->apiClient->getSerializer()->toQueryValue($datasource);
        }
        // query params
        if ($user_agent !== null) {
            $queryParams['user_agent'] = $this->apiClient->getSerializer()->toQueryValue($user_agent);
        }
        // header params
        if ($x_user_agent !== null) {
            $headerParams['X-User-Agent'] = $this->apiClient->getSerializer()->toHeaderValue($x_user_agent);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                'int[]',
                '/alliances/'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, 'int[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'int[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\GetAlliancesInternalServerError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getAlliancesAllianceId
     *
     * Get alliance information
     *
     * @param int $alliance_id An Eve alliance ID (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param string $user_agent Client identifier, takes precedence over headers (optional)
     * @param string $x_user_agent Client identifier, takes precedence over User-Agent (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\GetAlliancesAllianceIdOk
     */
    public function getAlliancesAllianceId($alliance_id, $datasource = null, $user_agent = null, $x_user_agent = null)
    {
        list($response) = $this->getAlliancesAllianceIdWithHttpInfo($alliance_id, $datasource, $user_agent, $x_user_agent);
        return $response;
    }

    /**
     * Operation getAlliancesAllianceIdWithHttpInfo
     *
     * Get alliance information
     *
     * @param int $alliance_id An Eve alliance ID (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param string $user_agent Client identifier, takes precedence over headers (optional)
     * @param string $x_user_agent Client identifier, takes precedence over User-Agent (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\GetAlliancesAllianceIdOk, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAlliancesAllianceIdWithHttpInfo($alliance_id, $datasource = null, $user_agent = null, $x_user_agent = null)
    {
        // verify the required parameter 'alliance_id' is set
        if ($alliance_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $alliance_id when calling getAlliancesAllianceId');
        }
        // parse inputs
        $resourcePath = "/alliances/{alliance_id}/";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($datasource !== null) {
            $queryParams['datasource'] = $this->apiClient->getSerializer()->toQueryValue($datasource);
        }
        // query params
        if ($user_agent !== null) {
            $queryParams['user_agent'] = $this->apiClient->getSerializer()->toQueryValue($user_agent);
        }
        // header params
        if ($x_user_agent !== null) {
            $headerParams['X-User-Agent'] = $this->apiClient->getSerializer()->toHeaderValue($x_user_agent);
        }
        // path params
        if ($alliance_id !== null) {
            $resourcePath = str_replace(
                "{" . "alliance_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($alliance_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\GetAlliancesAllianceIdOk',
                '/alliances/{alliance_id}/'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\GetAlliancesAllianceIdOk', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\GetAlliancesAllianceIdOk', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\GetAlliancesAllianceIdNotFound', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\GetAlliancesAllianceIdInternalServerError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getAlliancesAllianceIdCorporations
     *
     * List alliance's corporations
     *
     * @param int $alliance_id An EVE alliance ID (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param string $user_agent Client identifier, takes precedence over headers (optional)
     * @param string $x_user_agent Client identifier, takes precedence over User-Agent (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return int[]
     */
    public function getAlliancesAllianceIdCorporations($alliance_id, $datasource = null, $user_agent = null, $x_user_agent = null)
    {
        list($response) = $this->getAlliancesAllianceIdCorporationsWithHttpInfo($alliance_id, $datasource, $user_agent, $x_user_agent);
        return $response;
    }

    /**
     * Operation getAlliancesAllianceIdCorporationsWithHttpInfo
     *
     * List alliance's corporations
     *
     * @param int $alliance_id An EVE alliance ID (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param string $user_agent Client identifier, takes precedence over headers (optional)
     * @param string $x_user_agent Client identifier, takes precedence over User-Agent (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of int[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getAlliancesAllianceIdCorporationsWithHttpInfo($alliance_id, $datasource = null, $user_agent = null, $x_user_agent = null)
    {
        // verify the required parameter 'alliance_id' is set
        if ($alliance_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $alliance_id when calling getAlliancesAllianceIdCorporations');
        }
        // parse inputs
        $resourcePath = "/alliances/{alliance_id}/corporations/";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($datasource !== null) {
            $queryParams['datasource'] = $this->apiClient->getSerializer()->toQueryValue($datasource);
        }
        // query params
        if ($user_agent !== null) {
            $queryParams['user_agent'] = $this->apiClient->getSerializer()->toQueryValue($user_agent);
        }
        // header params
        if ($x_user_agent !== null) {
            $headerParams['X-User-Agent'] = $this->apiClient->getSerializer()->toHeaderValue($x_user_agent);
        }
        // path params
        if ($alliance_id !== null) {
            $resourcePath = str_replace(
                "{" . "alliance_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($alliance_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                'int[]',
                '/alliances/{alliance_id}/corporations/'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, 'int[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'int[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\GetAlliancesAllianceIdCorporationsInternalServerError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getAlliancesAllianceIdIcons
     *
     * Get alliance icon
     *
     * @param int $alliance_id An EVE alliance ID (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param string $user_agent Client identifier, takes precedence over headers (optional)
     * @param string $x_user_agent Client identifier, takes precedence over User-Agent (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\GetAlliancesAllianceIdIconsOk
     */
    public function getAlliancesAllianceIdIcons($alliance_id, $datasource = null, $user_agent = null, $x_user_agent = null)
    {
        list($response) = $this->getAlliancesAllianceIdIconsWithHttpInfo($alliance_id, $datasource, $user_agent, $x_user_agent);
        return $response;
    }

    /**
     * Operation getAlliancesAllianceIdIconsWithHttpInfo
     *
     * Get alliance icon
     *
     * @param int $alliance_id An EVE alliance ID (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param string $user_agent Client identifier, takes precedence over headers (optional)
     * @param string $x_user_agent Client identifier, takes precedence over User-Agent (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\GetAlliancesAllianceIdIconsOk, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAlliancesAllianceIdIconsWithHttpInfo($alliance_id, $datasource = null, $user_agent = null, $x_user_agent = null)
    {
        // verify the required parameter 'alliance_id' is set
        if ($alliance_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $alliance_id when calling getAlliancesAllianceIdIcons');
        }
        // parse inputs
        $resourcePath = "/alliances/{alliance_id}/icons/";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($datasource !== null) {
            $queryParams['datasource'] = $this->apiClient->getSerializer()->toQueryValue($datasource);
        }
        // query params
        if ($user_agent !== null) {
            $queryParams['user_agent'] = $this->apiClient->getSerializer()->toQueryValue($user_agent);
        }
        // header params
        if ($x_user_agent !== null) {
            $headerParams['X-User-Agent'] = $this->apiClient->getSerializer()->toHeaderValue($x_user_agent);
        }
        // path params
        if ($alliance_id !== null) {
            $resourcePath = str_replace(
                "{" . "alliance_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($alliance_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\GetAlliancesAllianceIdIconsOk',
                '/alliances/{alliance_id}/icons/'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\GetAlliancesAllianceIdIconsOk', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\GetAlliancesAllianceIdIconsOk', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\GetAlliancesAllianceIdIconsNotFound', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\GetAlliancesAllianceIdIconsInternalServerError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getAlliancesNames
     *
     * Get alliance names
     *
     * @param int[] $alliance_ids A comma separated list of alliance IDs (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param string $user_agent Client identifier, takes precedence over headers (optional)
     * @param string $x_user_agent Client identifier, takes precedence over User-Agent (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\GetAlliancesNames200Ok[]
     */
    public function getAlliancesNames($alliance_ids, $datasource = null, $user_agent = null, $x_user_agent = null)
    {
        list($response) = $this->getAlliancesNamesWithHttpInfo($alliance_ids, $datasource, $user_agent, $x_user_agent);
        return $response;
    }

    /**
     * Operation getAlliancesNamesWithHttpInfo
     *
     * Get alliance names
     *
     * @param int[] $alliance_ids A comma separated list of alliance IDs (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param string $user_agent Client identifier, takes precedence over headers (optional)
     * @param string $x_user_agent Client identifier, takes precedence over User-Agent (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\GetAlliancesNames200Ok[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getAlliancesNamesWithHttpInfo($alliance_ids, $datasource = null, $user_agent = null, $x_user_agent = null)
    {
        // verify the required parameter 'alliance_ids' is set
        if ($alliance_ids === null) {
            throw new \InvalidArgumentException('Missing the required parameter $alliance_ids when calling getAlliancesNames');
        }
        if ((count($alliance_ids) > 100)) {
            throw new \InvalidArgumentException('invalid value for "$alliance_ids" when calling AllianceApi.getAlliancesNames, number of items must be less than or equal to 100.');
        }
        if ((count($alliance_ids) < 1)) {
            throw new \InvalidArgumentException('invalid value for "$alliance_ids" when calling AllianceApi.getAlliancesNames, number of items must be greater than or equal to 1.');
        }

        // parse inputs
        $resourcePath = "/alliances/names/";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if (is_array($alliance_ids)) {
            $alliance_ids = $this->apiClient->getSerializer()->serializeCollection($alliance_ids, 'csv', true);
        }
        if ($alliance_ids !== null) {
            $queryParams['alliance_ids'] = $this->apiClient->getSerializer()->toQueryValue($alliance_ids);
        }
        // query params
        if ($datasource !== null) {
            $queryParams['datasource'] = $this->apiClient->getSerializer()->toQueryValue($datasource);
        }
        // query params
        if ($user_agent !== null) {
            $queryParams['user_agent'] = $this->apiClient->getSerializer()->toQueryValue($user_agent);
        }
        // header params
        if ($x_user_agent !== null) {
            $headerParams['X-User-Agent'] = $this->apiClient->getSerializer()->toHeaderValue($x_user_agent);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\GetAlliancesNames200Ok[]',
                '/alliances/names/'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\GetAlliancesNames200Ok[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\GetAlliancesNames200Ok[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\GetAlliancesNamesInternalServerError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
