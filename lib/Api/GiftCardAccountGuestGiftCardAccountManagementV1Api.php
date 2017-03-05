<?php
/**
 * GiftCardAccountGuestGiftCardAccountManagementV1Api
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
 * GiftCardAccountGuestGiftCardAccountManagementV1Api Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GiftCardAccountGuestGiftCardAccountManagementV1Api
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
     * @return GiftCardAccountGuestGiftCardAccountManagementV1Api
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPost
     *
     * 
     *
     * @param string $cart_id  (required)
     * @param \Swagger\Client\Model\Body120 $body  (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return bool
     */
    public function giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPost($cart_id, $body = null)
    {
        list($response) = $this->giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPostWithHttpInfo($cart_id, $body);
        return $response;
    }

    /**
     * Operation giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPostWithHttpInfo
     *
     * 
     *
     * @param string $cart_id  (required)
     * @param \Swagger\Client\Model\Body120 $body  (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of bool, HTTP status code, HTTP response headers (array of strings)
     */
    public function giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPostWithHttpInfo($cart_id, $body = null)
    {
        // verify the required parameter 'cart_id' is set
        if ($cart_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $cart_id when calling giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPost');
        }
        // parse inputs
        $resourcePath = "/V1/carts/guest-carts/{cartId}/giftCards";
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
        if ($cart_id !== null) {
            $resourcePath = str_replace(
                "{" . "cartId" . "}",
                $this->apiClient->getSerializer()->toPathValue($cart_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                'bool',
                '/V1/carts/guest-carts/{cartId}/giftCards'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, 'bool', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'bool', $e->getResponseHeaders());
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
     * Operation giftCardAccountGuestGiftCardAccountManagementV1CheckGiftCardGet
     *
     * 
     *
     * @param string $cart_id  (required)
     * @param string $gift_card_code  (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return float
     */
    public function giftCardAccountGuestGiftCardAccountManagementV1CheckGiftCardGet($cart_id, $gift_card_code)
    {
        list($response) = $this->giftCardAccountGuestGiftCardAccountManagementV1CheckGiftCardGetWithHttpInfo($cart_id, $gift_card_code);
        return $response;
    }

    /**
     * Operation giftCardAccountGuestGiftCardAccountManagementV1CheckGiftCardGetWithHttpInfo
     *
     * 
     *
     * @param string $cart_id  (required)
     * @param string $gift_card_code  (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of float, HTTP status code, HTTP response headers (array of strings)
     */
    public function giftCardAccountGuestGiftCardAccountManagementV1CheckGiftCardGetWithHttpInfo($cart_id, $gift_card_code)
    {
        // verify the required parameter 'cart_id' is set
        if ($cart_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $cart_id when calling giftCardAccountGuestGiftCardAccountManagementV1CheckGiftCardGet');
        }
        // verify the required parameter 'gift_card_code' is set
        if ($gift_card_code === null) {
            throw new \InvalidArgumentException('Missing the required parameter $gift_card_code when calling giftCardAccountGuestGiftCardAccountManagementV1CheckGiftCardGet');
        }
        // parse inputs
        $resourcePath = "/V1/carts/guest-carts/{cartId}/checkGiftCard/{giftCardCode}";
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
        if ($cart_id !== null) {
            $resourcePath = str_replace(
                "{" . "cartId" . "}",
                $this->apiClient->getSerializer()->toPathValue($cart_id),
                $resourcePath
            );
        }
        // path params
        if ($gift_card_code !== null) {
            $resourcePath = str_replace(
                "{" . "giftCardCode" . "}",
                $this->apiClient->getSerializer()->toPathValue($gift_card_code),
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
                'float',
                '/V1/carts/guest-carts/{cartId}/checkGiftCard/{giftCardCode}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, 'float', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'float', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
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
     * Operation giftCardAccountGuestGiftCardAccountManagementV1DeleteByQuoteIdDelete
     *
     * 
     *
     * @param string $cart_id  (required)
     * @param string $gift_card_code  (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return bool
     */
    public function giftCardAccountGuestGiftCardAccountManagementV1DeleteByQuoteIdDelete($cart_id, $gift_card_code)
    {
        list($response) = $this->giftCardAccountGuestGiftCardAccountManagementV1DeleteByQuoteIdDeleteWithHttpInfo($cart_id, $gift_card_code);
        return $response;
    }

    /**
     * Operation giftCardAccountGuestGiftCardAccountManagementV1DeleteByQuoteIdDeleteWithHttpInfo
     *
     * 
     *
     * @param string $cart_id  (required)
     * @param string $gift_card_code  (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of bool, HTTP status code, HTTP response headers (array of strings)
     */
    public function giftCardAccountGuestGiftCardAccountManagementV1DeleteByQuoteIdDeleteWithHttpInfo($cart_id, $gift_card_code)
    {
        // verify the required parameter 'cart_id' is set
        if ($cart_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $cart_id when calling giftCardAccountGuestGiftCardAccountManagementV1DeleteByQuoteIdDelete');
        }
        // verify the required parameter 'gift_card_code' is set
        if ($gift_card_code === null) {
            throw new \InvalidArgumentException('Missing the required parameter $gift_card_code when calling giftCardAccountGuestGiftCardAccountManagementV1DeleteByQuoteIdDelete');
        }
        // parse inputs
        $resourcePath = "/V1/carts/guest-carts/{cartId}/giftCards/{giftCardCode}";
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
        if ($cart_id !== null) {
            $resourcePath = str_replace(
                "{" . "cartId" . "}",
                $this->apiClient->getSerializer()->toPathValue($cart_id),
                $resourcePath
            );
        }
        // path params
        if ($gift_card_code !== null) {
            $resourcePath = str_replace(
                "{" . "giftCardCode" . "}",
                $this->apiClient->getSerializer()->toPathValue($gift_card_code),
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
                '/V1/carts/guest-carts/{cartId}/giftCards/{giftCardCode}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, 'bool', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'bool', $e->getResponseHeaders());
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
