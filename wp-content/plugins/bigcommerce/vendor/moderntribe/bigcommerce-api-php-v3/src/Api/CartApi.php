<?php
/**
 * CartApi
 *
 * @package  BigCommerce\Api\v3
 */

/**
 * Data Model for BigCommerce's v3 Server-to-Server Cart API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v0.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BigCommerce\Api\v3\Api;

use \BigCommerce\Api\v3\Configuration;
use \BigCommerce\Api\v3\ApiClient;
use \BigCommerce\Api\v3\ApiException;
use \BigCommerce\Api\v3\ObjectSerializer;

class CartApi
{

    /**
     * API Client
     *
     * @var \BigCommerce\Api\v3\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \BigCommerce\Api\v3\ApiClient $apiClient The api client to use
     */
    public function __construct(\BigCommerce\Api\v3\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
    }

    /**
    * Get API client
    *
    * @return \BigCommerce\Api\v3\ApiClient get the API client
    */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
    * Set the API client
    *
    * @param \BigCommerce\Api\v3\ApiClient $apiClient set the API client
    *
    * @return CartApi
    */
    public function setApiClient(\BigCommerce\Api\v3\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation cartsCartIdDelete
     * 
     *
     *
     * @param string $cart_id This cart&#39;s unique ID. (required)
     * @param array $params = []
     * @return null
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     */
    public function cartsCartIdDelete($cart_id, array $params = [])
    {
        list($response) = $this->cartsCartIdDeleteWithHttpInfo($cart_id, $params);
        return $response;
    }


    /**
     * Operation cartsCartIdDeleteWithHttpInfo
     *
     * @see self::cartsCartIdDelete()
     * @param string $cart_id This cart&#39;s unique ID. (required)
     * @param array $params = []
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function cartsCartIdDeleteWithHttpInfo($cart_id, array $params = [])
    {
        
        // verify the required parameter 'cart_id' is set
        if (!isset($cart_id)) {
            throw new \InvalidArgumentException('Missing the required parameter $cart_id when calling cartsCartIdDelete');
        }
        

        // parse inputs
        $resourcePath = "/carts/{cartId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        foreach ( $params as $key => $param ) {
            $queryParams[ $key ] = $this->apiClient->getSerializer()->toQueryValue( $param );
        }

        // path params


        if (isset($cart_id)) {
            $resourcePath = str_replace(
                "{" . "cartId" . "}",
                $this->apiClient->getSerializer()->toPathValue($cart_id),
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
                null,
                '/carts/{cartId}'
            );
            return [null, $statusCode, $httpHeader];

         } catch (ApiException $e) {
            switch ($e->getCode()) {
            
            }

            throw $e;
        }
    }
    /**
     * Operation cartsCartIdGet
     * 
     *
     *
     * @param string $cart_id The identifier of a specific cart. (required)
     * @param array $params = []
     *     - include string Supports Physical and Digital product options as include param (optional)
     * @return \BigCommerce\Api\v3\Model\CartResponse
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     */
    public function cartsCartIdGet($cart_id, array $params = [])
    {
        list($response) = $this->cartsCartIdGetWithHttpInfo($cart_id, $params);
        return $response;
    }


    /**
     * Operation cartsCartIdGetWithHttpInfo
     *
     * @see self::cartsCartIdGet()
     * @param string $cart_id The identifier of a specific cart. (required)
     * @param array $params = []
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BigCommerce\Api\v3\Model\CartResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function cartsCartIdGetWithHttpInfo($cart_id, array $params = [])
    {
        
        // verify the required parameter 'cart_id' is set
        if (!isset($cart_id)) {
            throw new \InvalidArgumentException('Missing the required parameter $cart_id when calling cartsCartIdGet');
        }
        

        // parse inputs
        $resourcePath = "/carts/{cartId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        foreach ( $params as $key => $param ) {
            $queryParams[ $key ] = $this->apiClient->getSerializer()->toQueryValue( $param );
        }

        // path params


        if (isset($cart_id)) {
            $resourcePath = str_replace(
                "{" . "cartId" . "}",
                $this->apiClient->getSerializer()->toPathValue($cart_id),
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
                '\BigCommerce\Api\v3\Model\CartResponse',
                '/carts/{cartId}'
            );
            return [$this->apiClient->getSerializer()->deserialize($response, '\BigCommerce\Api\v3\Model\CartResponse', $httpHeader), $statusCode, $httpHeader];

         } catch (ApiException $e) {
            switch ($e->getCode()) {
            
                case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\v3\Model\CartResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            
            }

            throw $e;
        }
    }
    /**
     * Operation cartsCartIdItemsItemIdDelete
     * 
     *
     *
     * @param string $cart_id  (required)
     * @param int $item_id  (required)
     * @param array $params = []
     * @return \BigCommerce\Api\v3\Model\CartResponse
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     */
    public function cartsCartIdItemsItemIdDelete($cart_id, $item_id, array $params = [])
    {
        list($response) = $this->cartsCartIdItemsItemIdDeleteWithHttpInfo($cart_id, $item_id, $params);
        return $response;
    }


    /**
     * Operation cartsCartIdItemsItemIdDeleteWithHttpInfo
     *
     * @see self::cartsCartIdItemsItemIdDelete()
     * @param string $cart_id  (required)
     * @param int $item_id  (required)
     * @param array $params = []
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BigCommerce\Api\v3\Model\CartResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function cartsCartIdItemsItemIdDeleteWithHttpInfo($cart_id, $item_id, array $params = [])
    {
        
        // verify the required parameter 'cart_id' is set
        if (!isset($cart_id)) {
            throw new \InvalidArgumentException('Missing the required parameter $cart_id when calling cartsCartIdItemsItemIdDelete');
        }
        
        // verify the required parameter 'item_id' is set
        if (!isset($item_id)) {
            throw new \InvalidArgumentException('Missing the required parameter $item_id when calling cartsCartIdItemsItemIdDelete');
        }
        

        // parse inputs
        $resourcePath = "/carts/{cartId}/items/{itemId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        foreach ( $params as $key => $param ) {
            $queryParams[ $key ] = $this->apiClient->getSerializer()->toQueryValue( $param );
        }

        // path params


        if (isset($cart_id)) {
            $resourcePath = str_replace(
                "{" . "cartId" . "}",
                $this->apiClient->getSerializer()->toPathValue($cart_id),
                $resourcePath
            );
        }
        // path params


        if (isset($item_id)) {
            $resourcePath = str_replace(
                "{" . "itemId" . "}",
                $this->apiClient->getSerializer()->toPathValue($item_id),
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
                '\BigCommerce\Api\v3\Model\CartResponse',
                '/carts/{cartId}/items/{itemId}'
            );
            return [$this->apiClient->getSerializer()->deserialize($response, '\BigCommerce\Api\v3\Model\CartResponse', $httpHeader), $statusCode, $httpHeader];

         } catch (ApiException $e) {
            switch ($e->getCode()) {
            
                case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\v3\Model\CartResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            
            }

            throw $e;
        }
    }
    /**
     * Operation cartsCartIdItemsItemIdPut
     * 
     *
     *
     * @param string $cart_id  (required)
     * @param int $item_id  (required)
     * @param \BigCommerce\Api\v3\Model\CartUpdateRequest $line_item  (required)
     * @param array $params = []
     * @return \BigCommerce\Api\v3\Model\CartResponse
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     */
    public function cartsCartIdItemsItemIdPut($cart_id, $item_id, $line_item, array $params = [])
    {
        list($response) = $this->cartsCartIdItemsItemIdPutWithHttpInfo($cart_id, $item_id,  $line_item, $params);
        return $response;
    }


    /**
     * Operation cartsCartIdItemsItemIdPutWithHttpInfo
     *
     * @see self::cartsCartIdItemsItemIdPut()
     * @param string $cart_id  (required)
     * @param int $item_id  (required)
     * @param \BigCommerce\Api\v3\Model\CartUpdateRequest $line_item  (required)
     * @param array $params = []
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BigCommerce\Api\v3\Model\CartResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function cartsCartIdItemsItemIdPutWithHttpInfo($cart_id, $item_id,  $line_item, array $params = [])
    {
        
        // verify the required parameter 'cart_id' is set
        if (!isset($cart_id)) {
            throw new \InvalidArgumentException('Missing the required parameter $cart_id when calling cartsCartIdItemsItemIdPut');
        }
        
        // verify the required parameter 'item_id' is set
        if (!isset($item_id)) {
            throw new \InvalidArgumentException('Missing the required parameter $item_id when calling cartsCartIdItemsItemIdPut');
        }
        
        // verify the required parameter 'line_item' is set
        if (!isset($line_item)) {
            throw new \InvalidArgumentException('Missing the required parameter $line_item when calling cartsCartIdItemsItemIdPut');
        }
        

        // parse inputs
        $resourcePath = "/carts/{cartId}/items/{itemId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        foreach ( $params as $key => $param ) {
            $queryParams[ $key ] = $this->apiClient->getSerializer()->toQueryValue( $param );
        }

        // path params


        if (isset($cart_id)) {
            $resourcePath = str_replace(
                "{" . "cartId" . "}",
                $this->apiClient->getSerializer()->toPathValue($cart_id),
                $resourcePath
            );
        }
        // path params


        if (isset($item_id)) {
            $resourcePath = str_replace(
                "{" . "itemId" . "}",
                $this->apiClient->getSerializer()->toPathValue($item_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($line_item)) {
        $_tempBody = $line_item;
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
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BigCommerce\Api\v3\Model\CartResponse',
                '/carts/{cartId}/items/{itemId}'
            );
            return [$this->apiClient->getSerializer()->deserialize($response, '\BigCommerce\Api\v3\Model\CartResponse', $httpHeader), $statusCode, $httpHeader];

         } catch (ApiException $e) {
            switch ($e->getCode()) {
            
                case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\v3\Model\CartResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            
            }

            throw $e;
        }
    }
    /**
     * Operation cartsCartIdItemsPost
     * 
     *
     *
     * @param string $cart_id  (required)
     * @param \BigCommerce\Api\v3\Model\CartRequestData $item_data  (required)
     * @param array $params = []
     * @return \BigCommerce\Api\v3\Model\CartResponse
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     */
    public function cartsCartIdItemsPost($cart_id, $item_data, array $params = [])
    {
        list($response) = $this->cartsCartIdItemsPostWithHttpInfo($cart_id,  $item_data, $params);
        return $response;
    }


    /**
     * Operation cartsCartIdItemsPostWithHttpInfo
     *
     * @see self::cartsCartIdItemsPost()
     * @param string $cart_id  (required)
     * @param \BigCommerce\Api\v3\Model\CartRequestData $item_data  (required)
     * @param array $params = []
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BigCommerce\Api\v3\Model\CartResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function cartsCartIdItemsPostWithHttpInfo($cart_id,  $item_data, array $params = [])
    {
        
        // verify the required parameter 'cart_id' is set
        if (!isset($cart_id)) {
            throw new \InvalidArgumentException('Missing the required parameter $cart_id when calling cartsCartIdItemsPost');
        }
        
        // verify the required parameter 'item_data' is set
        if (!isset($item_data)) {
            throw new \InvalidArgumentException('Missing the required parameter $item_data when calling cartsCartIdItemsPost');
        }
        

        // parse inputs
        $resourcePath = "/carts/{cartId}/items";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        foreach ( $params as $key => $param ) {
            $queryParams[ $key ] = $this->apiClient->getSerializer()->toQueryValue( $param );
        }

        // path params


        if (isset($cart_id)) {
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
        if (isset($item_data)) {
        $_tempBody = $item_data;
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
                '\BigCommerce\Api\v3\Model\CartResponse',
                '/carts/{cartId}/items'
            );
            return [$this->apiClient->getSerializer()->deserialize($response, '\BigCommerce\Api\v3\Model\CartResponse', $httpHeader), $statusCode, $httpHeader];

         } catch (ApiException $e) {
            switch ($e->getCode()) {
            
                case 201:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\v3\Model\CartResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            
            }

            throw $e;
        }
    }
    /**
     * Operation cartsCartIdPut
     * 
     *
     *
     * @param string $cart_id  (required)
     * @param \BigCommerce\Api\v3\Model\CartUpdateRequestData $cart_update_data  (required)
     * @param array $params = []
     * @return \BigCommerce\Api\v3\Model\Cart
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     */
    public function cartsCartIdPut($cart_id, $cart_update_data, array $params = [])
    {
        list($response) = $this->cartsCartIdPutWithHttpInfo($cart_id,  $cart_update_data, $params);
        return $response;
    }


    /**
     * Operation cartsCartIdPutWithHttpInfo
     *
     * @see self::cartsCartIdPut()
     * @param string $cart_id  (required)
     * @param \BigCommerce\Api\v3\Model\CartUpdateRequestData $cart_update_data  (required)
     * @param array $params = []
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BigCommerce\Api\v3\Model\Cart, HTTP status code, HTTP response headers (array of strings)
     */
    public function cartsCartIdPutWithHttpInfo($cart_id,  $cart_update_data, array $params = [])
    {
        
        // verify the required parameter 'cart_id' is set
        if (!isset($cart_id)) {
            throw new \InvalidArgumentException('Missing the required parameter $cart_id when calling cartsCartIdPut');
        }
        
        // verify the required parameter 'cart_update_data' is set
        if (!isset($cart_update_data)) {
            throw new \InvalidArgumentException('Missing the required parameter $cart_update_data when calling cartsCartIdPut');
        }
        

        // parse inputs
        $resourcePath = "/carts/{cartId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        foreach ( $params as $key => $param ) {
            $queryParams[ $key ] = $this->apiClient->getSerializer()->toQueryValue( $param );
        }

        // path params


        if (isset($cart_id)) {
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
        if (isset($cart_update_data)) {
        $_tempBody = $cart_update_data;
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
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BigCommerce\Api\v3\Model\Cart',
                '/carts/{cartId}'
            );
            return [$this->apiClient->getSerializer()->deserialize($response, '\BigCommerce\Api\v3\Model\Cart', $httpHeader), $statusCode, $httpHeader];

         } catch (ApiException $e) {
            switch ($e->getCode()) {
            
                case 201:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\v3\Model\Cart', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            
            }

            throw $e;
        }
    }
    /**
     * Operation cartsCartIdRedirectUrlsPost
     * 
     *
     *
     * @param string $cart_id  (required)
     * @param array $params = []
     * @return \BigCommerce\Api\v3\Model\CartRedirectUrlsResponse
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     */
    public function cartsCartIdRedirectUrlsPost($cart_id, array $params = [])
    {
        list($response) = $this->cartsCartIdRedirectUrlsPostWithHttpInfo($cart_id, $params);
        return $response;
    }


    /**
     * Operation cartsCartIdRedirectUrlsPostWithHttpInfo
     *
     * @see self::cartsCartIdRedirectUrlsPost()
     * @param string $cart_id  (required)
     * @param array $params = []
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BigCommerce\Api\v3\Model\CartRedirectUrlsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function cartsCartIdRedirectUrlsPostWithHttpInfo($cart_id, array $params = [])
    {
        
        // verify the required parameter 'cart_id' is set
        if (!isset($cart_id)) {
            throw new \InvalidArgumentException('Missing the required parameter $cart_id when calling cartsCartIdRedirectUrlsPost');
        }
        

        // parse inputs
        $resourcePath = "/carts/{cartId}/redirect_urls";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        foreach ( $params as $key => $param ) {
            $queryParams[ $key ] = $this->apiClient->getSerializer()->toQueryValue( $param );
        }

        // path params


        if (isset($cart_id)) {
            $resourcePath = str_replace(
                "{" . "cartId" . "}",
                $this->apiClient->getSerializer()->toPathValue($cart_id),
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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BigCommerce\Api\v3\Model\CartRedirectUrlsResponse',
                '/carts/{cartId}/redirect_urls'
            );
            return [$this->apiClient->getSerializer()->deserialize($response, '\BigCommerce\Api\v3\Model\CartRedirectUrlsResponse', $httpHeader), $statusCode, $httpHeader];

         } catch (ApiException $e) {
            switch ($e->getCode()) {
            
                case 201:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\v3\Model\CartRedirectUrlsResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            
            }

            throw $e;
        }
    }
    /**
     * Operation cartsPost
     * 
     *
     *
     * @param \BigCommerce\Api\v3\Model\CartCreateRequestData $cart_data  (required)
     * @param array $params = []
     * @return \BigCommerce\Api\v3\Model\CartResponse
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     */
    public function cartsPost($cart_data, array $params = [])
    {
        list($response) = $this->cartsPostWithHttpInfo( $cart_data, $params);
        return $response;
    }


    /**
     * Operation cartsPostWithHttpInfo
     *
     * @see self::cartsPost()
     * @param \BigCommerce\Api\v3\Model\CartCreateRequestData $cart_data  (required)
     * @param array $params = []
     * @throws \BigCommerce\Api\v3\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \BigCommerce\Api\v3\Model\CartResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function cartsPostWithHttpInfo( $cart_data, array $params = [])
    {
        
        // verify the required parameter 'cart_data' is set
        if (!isset($cart_data)) {
            throw new \InvalidArgumentException('Missing the required parameter $cart_data when calling cartsPost');
        }
        

        // parse inputs
        $resourcePath = "/carts";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        foreach ( $params as $key => $param ) {
            $queryParams[ $key ] = $this->apiClient->getSerializer()->toQueryValue( $param );
        }

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($cart_data)) {
        $_tempBody = $cart_data;
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
                '\BigCommerce\Api\v3\Model\CartResponse',
                '/carts'
            );
            return [$this->apiClient->getSerializer()->deserialize($response, '\BigCommerce\Api\v3\Model\CartResponse', $httpHeader), $statusCode, $httpHeader];

         } catch (ApiException $e) {
            switch ($e->getCode()) {
            
                case 201:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BigCommerce\Api\v3\Model\CartResponse', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            
            }

            throw $e;
        }
    }
}
