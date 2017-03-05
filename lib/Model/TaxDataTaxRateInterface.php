<?php
/**
 * TaxDataTaxRateInterface
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
 * TaxDataTaxRateInterface Class Doc Comment
 *
 * @category    Class
 * @description Tax rate interface.
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TaxDataTaxRateInterface implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'tax-data-tax-rate-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'tax_country_id' => 'string',
        'tax_region_id' => 'int',
        'region_name' => 'string',
        'tax_postcode' => 'string',
        'zip_is_range' => 'int',
        'zip_from' => 'int',
        'zip_to' => 'int',
        'rate' => 'float',
        'code' => 'string',
        'titles' => '\Swagger\Client\Model\TaxDataTaxRateTitleInterface[]',
        'extension_attributes' => '\Swagger\Client\Model\TaxDataTaxRateExtensionInterface'
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
        'id' => 'id',
        'tax_country_id' => 'tax_country_id',
        'tax_region_id' => 'tax_region_id',
        'region_name' => 'region_name',
        'tax_postcode' => 'tax_postcode',
        'zip_is_range' => 'zip_is_range',
        'zip_from' => 'zip_from',
        'zip_to' => 'zip_to',
        'rate' => 'rate',
        'code' => 'code',
        'titles' => 'titles',
        'extension_attributes' => 'extension_attributes'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'tax_country_id' => 'setTaxCountryId',
        'tax_region_id' => 'setTaxRegionId',
        'region_name' => 'setRegionName',
        'tax_postcode' => 'setTaxPostcode',
        'zip_is_range' => 'setZipIsRange',
        'zip_from' => 'setZipFrom',
        'zip_to' => 'setZipTo',
        'rate' => 'setRate',
        'code' => 'setCode',
        'titles' => 'setTitles',
        'extension_attributes' => 'setExtensionAttributes'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'tax_country_id' => 'getTaxCountryId',
        'tax_region_id' => 'getTaxRegionId',
        'region_name' => 'getRegionName',
        'tax_postcode' => 'getTaxPostcode',
        'zip_is_range' => 'getZipIsRange',
        'zip_from' => 'getZipFrom',
        'zip_to' => 'getZipTo',
        'rate' => 'getRate',
        'code' => 'getCode',
        'titles' => 'getTitles',
        'extension_attributes' => 'getExtensionAttributes'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['tax_country_id'] = isset($data['tax_country_id']) ? $data['tax_country_id'] : null;
        $this->container['tax_region_id'] = isset($data['tax_region_id']) ? $data['tax_region_id'] : null;
        $this->container['region_name'] = isset($data['region_name']) ? $data['region_name'] : null;
        $this->container['tax_postcode'] = isset($data['tax_postcode']) ? $data['tax_postcode'] : null;
        $this->container['zip_is_range'] = isset($data['zip_is_range']) ? $data['zip_is_range'] : null;
        $this->container['zip_from'] = isset($data['zip_from']) ? $data['zip_from'] : null;
        $this->container['zip_to'] = isset($data['zip_to']) ? $data['zip_to'] : null;
        $this->container['rate'] = isset($data['rate']) ? $data['rate'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['titles'] = isset($data['titles']) ? $data['titles'] : null;
        $this->container['extension_attributes'] = isset($data['extension_attributes']) ? $data['extension_attributes'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['tax_country_id'] === null) {
            $invalid_properties[] = "'tax_country_id' can't be null";
        }
        if ($this->container['rate'] === null) {
            $invalid_properties[] = "'rate' can't be null";
        }
        if ($this->container['code'] === null) {
            $invalid_properties[] = "'code' can't be null";
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

        if ($this->container['tax_country_id'] === null) {
            return false;
        }
        if ($this->container['rate'] === null) {
            return false;
        }
        if ($this->container['code'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id Id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets tax_country_id
     * @return string
     */
    public function getTaxCountryId()
    {
        return $this->container['tax_country_id'];
    }

    /**
     * Sets tax_country_id
     * @param string $tax_country_id Country id
     * @return $this
     */
    public function setTaxCountryId($tax_country_id)
    {
        $this->container['tax_country_id'] = $tax_country_id;

        return $this;
    }

    /**
     * Gets tax_region_id
     * @return int
     */
    public function getTaxRegionId()
    {
        return $this->container['tax_region_id'];
    }

    /**
     * Sets tax_region_id
     * @param int $tax_region_id Region id
     * @return $this
     */
    public function setTaxRegionId($tax_region_id)
    {
        $this->container['tax_region_id'] = $tax_region_id;

        return $this;
    }

    /**
     * Gets region_name
     * @return string
     */
    public function getRegionName()
    {
        return $this->container['region_name'];
    }

    /**
     * Sets region_name
     * @param string $region_name Region name
     * @return $this
     */
    public function setRegionName($region_name)
    {
        $this->container['region_name'] = $region_name;

        return $this;
    }

    /**
     * Gets tax_postcode
     * @return string
     */
    public function getTaxPostcode()
    {
        return $this->container['tax_postcode'];
    }

    /**
     * Sets tax_postcode
     * @param string $tax_postcode Postcode
     * @return $this
     */
    public function setTaxPostcode($tax_postcode)
    {
        $this->container['tax_postcode'] = $tax_postcode;

        return $this;
    }

    /**
     * Gets zip_is_range
     * @return int
     */
    public function getZipIsRange()
    {
        return $this->container['zip_is_range'];
    }

    /**
     * Sets zip_is_range
     * @param int $zip_is_range Zip is range
     * @return $this
     */
    public function setZipIsRange($zip_is_range)
    {
        $this->container['zip_is_range'] = $zip_is_range;

        return $this;
    }

    /**
     * Gets zip_from
     * @return int
     */
    public function getZipFrom()
    {
        return $this->container['zip_from'];
    }

    /**
     * Sets zip_from
     * @param int $zip_from Zip range from
     * @return $this
     */
    public function setZipFrom($zip_from)
    {
        $this->container['zip_from'] = $zip_from;

        return $this;
    }

    /**
     * Gets zip_to
     * @return int
     */
    public function getZipTo()
    {
        return $this->container['zip_to'];
    }

    /**
     * Sets zip_to
     * @param int $zip_to Zip range to
     * @return $this
     */
    public function setZipTo($zip_to)
    {
        $this->container['zip_to'] = $zip_to;

        return $this;
    }

    /**
     * Gets rate
     * @return float
     */
    public function getRate()
    {
        return $this->container['rate'];
    }

    /**
     * Sets rate
     * @param float $rate Tax rate in percentage
     * @return $this
     */
    public function setRate($rate)
    {
        $this->container['rate'] = $rate;

        return $this;
    }

    /**
     * Gets code
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     * @param string $code Tax rate code
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets titles
     * @return \Swagger\Client\Model\TaxDataTaxRateTitleInterface[]
     */
    public function getTitles()
    {
        return $this->container['titles'];
    }

    /**
     * Sets titles
     * @param \Swagger\Client\Model\TaxDataTaxRateTitleInterface[] $titles Tax rate titles
     * @return $this
     */
    public function setTitles($titles)
    {
        $this->container['titles'] = $titles;

        return $this;
    }

    /**
     * Gets extension_attributes
     * @return \Swagger\Client\Model\TaxDataTaxRateExtensionInterface
     */
    public function getExtensionAttributes()
    {
        return $this->container['extension_attributes'];
    }

    /**
     * Sets extension_attributes
     * @param \Swagger\Client\Model\TaxDataTaxRateExtensionInterface $extension_attributes
     * @return $this
     */
    public function setExtensionAttributes($extension_attributes)
    {
        $this->container['extension_attributes'] = $extension_attributes;

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


