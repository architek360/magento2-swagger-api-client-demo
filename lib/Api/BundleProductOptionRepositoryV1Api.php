<?php
/**
 * BundleProductOptionRepositoryV1Api
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Magento Enterprise
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2.1
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
 * BundleProductOptionRepositoryV1Api Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BundleProductOptionRepositoryV1Api
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
     * @return BundleProductOptionRepositoryV1Api
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation bundleProductOptionRepositoryV1DeleteByIdDelete
     *
     * 
     *
     * @param string $sku  (required)
     * @param int $option_id  (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return bool
     */
    public function bundleProductOptionRepositoryV1DeleteByIdDelete($sku, $option_id)
    {
        list($response) = $this->bundleProductOptionRepositoryV1DeleteByIdDeleteWithHttpInfo($sku, $option_id);
        return $response;
    }

    /**
     * Operation bundleProductOptionRepositoryV1DeleteByIdDeleteWithHttpInfo
     *
     * 
     *
     * @param string $sku  (required)
     * @param int $option_id  (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of bool, HTTP status code, HTTP response headers (array of strings)
     */
    public function bundleProductOptionRepositoryV1DeleteByIdDeleteWithHttpInfo($sku, $option_id)
    {
        // verify the required parameter 'sku' is set
        if ($sku === null) {
            throw new \InvalidArgumentException('Missing the required parameter $sku when calling bundleProductOptionRepositoryV1DeleteByIdDelete');
        }
        // verify the required parameter 'option_id' is set
        if ($option_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $option_id when calling bundleProductOptionRepositoryV1DeleteByIdDelete');
        }
        // parse inputs
        $resourcePath = "/V1/bundle-products/{sku}/options/{optionId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($sku !== null) {
            $resourcePath = str_replace(
                "{" . "sku" . "}",
                $this->apiClient->getSerializer()->toPathValue($sku),
                $resourcePath
            );
        }
        // path params
        if ($option_id !== null) {
            $resourcePath = str_replace(
                "{" . "optionId" . "}",
                $this->apiClient->getSerializer()->toPathValue($option_id),
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
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                'bool',
                '/V1/bundle-products/{sku}/options/{optionId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, 'bool', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'bool', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation bundleProductOptionRepositoryV1GetGet
     *
     * 
     *
     * @param string $sku  (required)
     * @param int $option_id  (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\BundleDataOptionInterface
     */
    public function bundleProductOptionRepositoryV1GetGet($sku, $option_id)
    {
        list($response) = $this->bundleProductOptionRepositoryV1GetGetWithHttpInfo($sku, $option_id);
        return $response;
    }

    /**
     * Operation bundleProductOptionRepositoryV1GetGetWithHttpInfo
     *
     * 
     *
     * @param string $sku  (required)
     * @param int $option_id  (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\BundleDataOptionInterface, HTTP status code, HTTP response headers (array of strings)
     */
    public function bundleProductOptionRepositoryV1GetGetWithHttpInfo($sku, $option_id)
    {
        // verify the required parameter 'sku' is set
        if ($sku === null) {
            throw new \InvalidArgumentException('Missing the required parameter $sku when calling bundleProductOptionRepositoryV1GetGet');
        }
        // verify the required parameter 'option_id' is set
        if ($option_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $option_id when calling bundleProductOptionRepositoryV1GetGet');
        }
        // parse inputs
        $resourcePath = "/V1/bundle-products/{sku}/options/{optionId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($sku !== null) {
            $resourcePath = str_replace(
                "{" . "sku" . "}",
                $this->apiClient->getSerializer()->toPathValue($sku),
                $resourcePath
            );
        }
        // path params
        if ($option_id !== null) {
            $resourcePath = str_replace(
                "{" . "optionId" . "}",
                $this->apiClient->getSerializer()->toPathValue($option_id),
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
                '\Swagger\Client\Model\BundleDataOptionInterface',
                '/V1/bundle-products/{sku}/options/{optionId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\BundleDataOptionInterface', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\BundleDataOptionInterface', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation bundleProductOptionRepositoryV1GetListGet
     *
     * 
     *
     * @param string $sku  (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\BundleDataOptionInterface[]
     */
    public function bundleProductOptionRepositoryV1GetListGet($sku)
    {
        list($response) = $this->bundleProductOptionRepositoryV1GetListGetWithHttpInfo($sku);
        return $response;
    }

    /**
     * Operation bundleProductOptionRepositoryV1GetListGetWithHttpInfo
     *
     * 
     *
     * @param string $sku  (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\BundleDataOptionInterface[], HTTP status code, HTTP response headers (array of strings)
     */
    public function bundleProductOptionRepositoryV1GetListGetWithHttpInfo($sku)
    {
        // verify the required parameter 'sku' is set
        if ($sku === null) {
            throw new \InvalidArgumentException('Missing the required parameter $sku when calling bundleProductOptionRepositoryV1GetListGet');
        }
        // parse inputs
        $resourcePath = "/V1/bundle-products/{sku}/options/all";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($sku !== null) {
            $resourcePath = str_replace(
                "{" . "sku" . "}",
                $this->apiClient->getSerializer()->toPathValue($sku),
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
                '\Swagger\Client\Model\BundleDataOptionInterface[]',
                '/V1/bundle-products/{sku}/options/all'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\BundleDataOptionInterface[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\BundleDataOptionInterface[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
