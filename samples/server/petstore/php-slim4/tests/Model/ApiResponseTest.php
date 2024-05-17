<?php

/**
 * OpenAPI Petstore
 * PHP version 7.4
 *
 * @package OpenAPIServer
 * @author  OpenAPI Generator team
 * @link    https://github.com/openapitools/openapi-generator
 */

/**
 * This is a sample server Petstore server. For this sample, you can use the api key `special-key` to test the authorization filters.
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Please update the test case below to test the model.
 */
namespace OpenAPIServer\Model;

use PHPUnit\Framework\TestCase;
use OpenAPIServer\Model\ApiResponse;

/**
 * ApiResponseTest Class Doc Comment
 *
 * @package OpenAPIServer\Model
 * @author  OpenAPI Generator team
 * @link    https://github.com/openapitools/openapi-generator
 *
 * @coversDefaultClass \OpenAPIServer\Model\ApiResponse
 */
class ApiResponseTest extends TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test "ApiResponse"
     */
    public function testApiResponse()
    {
        $testApiResponse = new ApiResponse();
        $namespacedClassname = ApiResponse::getModelsNamespace() . '\\ApiResponse';
        $this->assertSame('\\' . ApiResponse::class, $namespacedClassname);
        $this->assertTrue(
            class_exists($namespacedClassname),
            sprintf('Assertion failed that "%s" class exists', $namespacedClassname)
        );
        $this->markTestIncomplete(
            'Test of "ApiResponse" model has not been implemented yet.'
        );
    }

    /**
     * Test attribute "code"
     */
    public function testPropertyCode()
    {
        $this->markTestIncomplete(
            'Test of "code" property in "ApiResponse" model has not been implemented yet.'
        );
    }

    /**
     * Test attribute "type"
     */
    public function testPropertyType()
    {
        $this->markTestIncomplete(
            'Test of "type" property in "ApiResponse" model has not been implemented yet.'
        );
    }

    /**
     * Test attribute "message"
     */
    public function testPropertyMessage()
    {
        $this->markTestIncomplete(
            'Test of "message" property in "ApiResponse" model has not been implemented yet.'
        );
    }

    /**
     * Test getOpenApiSchema static method
     * @covers ::getOpenApiSchema
     */
    public function testGetOpenApiSchema()
    {
        $schemaArr = ApiResponse::getOpenApiSchema();
        $this->assertIsArray($schemaArr);
    }
}
