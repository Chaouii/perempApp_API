<?php
/**
 * ProductsApiInterface
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Server
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Products API
 *
 * This is Product API for product data management
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Server\Api;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Swagger\Server\Model\ApplicationError;
use Swagger\Server\Model\Products;

/**
 * ProductsApiInterface Interface Doc Comment
 *
 * @category Interface
 * @package  Swagger\Server\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
interface ProductsApiInterface
{

    /**
     * Operation createProduct
     *
     * Create new Products and insert it in Products collection
     *
     * @param  Swagger\Server\Model\Products $products  All necessary informations required to create a new Products:name, category, PerempDate and UserId (required)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return Swagger\Server\Model\Products[]
     *
     */
    public function createProduct(Products $products, &$responseCode, array &$responseHeaders);

    /**
     * Operation userProduct
     *
     * get the product of a user
     *
     * @param  string $userId  userId of product (required)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return Swagger\Server\Model\Products[]
     *
     */
    public function userProduct($userId, &$responseCode, array &$responseHeaders);
}