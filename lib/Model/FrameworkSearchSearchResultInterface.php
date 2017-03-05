<?php
/**
 * FrameworkSearchSearchResultInterface
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
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

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * FrameworkSearchSearchResultInterface Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class FrameworkSearchSearchResultInterface implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'framework-search-search-result-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'items' => '\Swagger\Client\Model\FrameworkSearchDocumentInterface[]',
        'aggregations' => '\Swagger\Client\Model\FrameworkSearchAggregationInterface',
        'search_criteria' => '\Swagger\Client\Model\FrameworkSearchSearchCriteriaInterface',
        'total_count' => 'int'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'items' => 'items',
        'aggregations' => 'aggregations',
        'search_criteria' => 'search_criteria',
        'total_count' => 'total_count'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'items' => 'setItems',
        'aggregations' => 'setAggregations',
        'search_criteria' => 'setSearchCriteria',
        'total_count' => 'setTotalCount'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'items' => 'getItems',
        'aggregations' => 'getAggregations',
        'search_criteria' => 'getSearchCriteria',
        'total_count' => 'getTotalCount'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['aggregations'] = isset($data['aggregations']) ? $data['aggregations'] : null;
        $this->container['search_criteria'] = isset($data['search_criteria']) ? $data['search_criteria'] : null;
        $this->container['total_count'] = isset($data['total_count']) ? $data['total_count'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['items'] === null) {
            $invalid_properties[] = "'items' can't be null";
        }
        if ($this->container['aggregations'] === null) {
            $invalid_properties[] = "'aggregations' can't be null";
        }
        if ($this->container['search_criteria'] === null) {
            $invalid_properties[] = "'search_criteria' can't be null";
        }
        if ($this->container['total_count'] === null) {
            $invalid_properties[] = "'total_count' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['items'] === null) {
            return false;
        }
        if ($this->container['aggregations'] === null) {
            return false;
        }
        if ($this->container['search_criteria'] === null) {
            return false;
        }
        if ($this->container['total_count'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets items
     * @return \Swagger\Client\Model\FrameworkSearchDocumentInterface[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     * @param \Swagger\Client\Model\FrameworkSearchDocumentInterface[] $items
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets aggregations
     * @return \Swagger\Client\Model\FrameworkSearchAggregationInterface
     */
    public function getAggregations()
    {
        return $this->container['aggregations'];
    }

    /**
     * Sets aggregations
     * @param \Swagger\Client\Model\FrameworkSearchAggregationInterface $aggregations
     * @return $this
     */
    public function setAggregations($aggregations)
    {
        $this->container['aggregations'] = $aggregations;

        return $this;
    }

    /**
     * Gets search_criteria
     * @return \Swagger\Client\Model\FrameworkSearchSearchCriteriaInterface
     */
    public function getSearchCriteria()
    {
        return $this->container['search_criteria'];
    }

    /**
     * Sets search_criteria
     * @param \Swagger\Client\Model\FrameworkSearchSearchCriteriaInterface $search_criteria
     * @return $this
     */
    public function setSearchCriteria($search_criteria)
    {
        $this->container['search_criteria'] = $search_criteria;

        return $this;
    }

    /**
     * Gets total_count
     * @return int
     */
    public function getTotalCount()
    {
        return $this->container['total_count'];
    }

    /**
     * Sets total_count
     * @param int $total_count Total count.
     * @return $this
     */
    public function setTotalCount($total_count)
    {
        $this->container['total_count'] = $total_count;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


