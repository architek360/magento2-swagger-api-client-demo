<?php
/**
 * SalesDataTotalInterface
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
 * SalesDataTotalInterface Class Doc Comment
 *
 * @category    Class
 * @description Interface TotalInterface
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SalesDataTotalInterface implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'sales-data-total-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'base_shipping_amount' => 'float',
        'base_shipping_canceled' => 'float',
        'base_shipping_discount_amount' => 'float',
        'base_shipping_discount_tax_compensation_amnt' => 'float',
        'base_shipping_incl_tax' => 'float',
        'base_shipping_invoiced' => 'float',
        'base_shipping_refunded' => 'float',
        'base_shipping_tax_amount' => 'float',
        'base_shipping_tax_refunded' => 'float',
        'shipping_amount' => 'float',
        'shipping_canceled' => 'float',
        'shipping_discount_amount' => 'float',
        'shipping_discount_tax_compensation_amount' => 'float',
        'shipping_incl_tax' => 'float',
        'shipping_invoiced' => 'float',
        'shipping_refunded' => 'float',
        'shipping_tax_amount' => 'float',
        'shipping_tax_refunded' => 'float',
        'extension_attributes' => '\Swagger\Client\Model\SalesDataTotalExtensionInterface'
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
        'base_shipping_amount' => 'base_shipping_amount',
        'base_shipping_canceled' => 'base_shipping_canceled',
        'base_shipping_discount_amount' => 'base_shipping_discount_amount',
        'base_shipping_discount_tax_compensation_amnt' => 'base_shipping_discount_tax_compensation_amnt',
        'base_shipping_incl_tax' => 'base_shipping_incl_tax',
        'base_shipping_invoiced' => 'base_shipping_invoiced',
        'base_shipping_refunded' => 'base_shipping_refunded',
        'base_shipping_tax_amount' => 'base_shipping_tax_amount',
        'base_shipping_tax_refunded' => 'base_shipping_tax_refunded',
        'shipping_amount' => 'shipping_amount',
        'shipping_canceled' => 'shipping_canceled',
        'shipping_discount_amount' => 'shipping_discount_amount',
        'shipping_discount_tax_compensation_amount' => 'shipping_discount_tax_compensation_amount',
        'shipping_incl_tax' => 'shipping_incl_tax',
        'shipping_invoiced' => 'shipping_invoiced',
        'shipping_refunded' => 'shipping_refunded',
        'shipping_tax_amount' => 'shipping_tax_amount',
        'shipping_tax_refunded' => 'shipping_tax_refunded',
        'extension_attributes' => 'extension_attributes'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'base_shipping_amount' => 'setBaseShippingAmount',
        'base_shipping_canceled' => 'setBaseShippingCanceled',
        'base_shipping_discount_amount' => 'setBaseShippingDiscountAmount',
        'base_shipping_discount_tax_compensation_amnt' => 'setBaseShippingDiscountTaxCompensationAmnt',
        'base_shipping_incl_tax' => 'setBaseShippingInclTax',
        'base_shipping_invoiced' => 'setBaseShippingInvoiced',
        'base_shipping_refunded' => 'setBaseShippingRefunded',
        'base_shipping_tax_amount' => 'setBaseShippingTaxAmount',
        'base_shipping_tax_refunded' => 'setBaseShippingTaxRefunded',
        'shipping_amount' => 'setShippingAmount',
        'shipping_canceled' => 'setShippingCanceled',
        'shipping_discount_amount' => 'setShippingDiscountAmount',
        'shipping_discount_tax_compensation_amount' => 'setShippingDiscountTaxCompensationAmount',
        'shipping_incl_tax' => 'setShippingInclTax',
        'shipping_invoiced' => 'setShippingInvoiced',
        'shipping_refunded' => 'setShippingRefunded',
        'shipping_tax_amount' => 'setShippingTaxAmount',
        'shipping_tax_refunded' => 'setShippingTaxRefunded',
        'extension_attributes' => 'setExtensionAttributes'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'base_shipping_amount' => 'getBaseShippingAmount',
        'base_shipping_canceled' => 'getBaseShippingCanceled',
        'base_shipping_discount_amount' => 'getBaseShippingDiscountAmount',
        'base_shipping_discount_tax_compensation_amnt' => 'getBaseShippingDiscountTaxCompensationAmnt',
        'base_shipping_incl_tax' => 'getBaseShippingInclTax',
        'base_shipping_invoiced' => 'getBaseShippingInvoiced',
        'base_shipping_refunded' => 'getBaseShippingRefunded',
        'base_shipping_tax_amount' => 'getBaseShippingTaxAmount',
        'base_shipping_tax_refunded' => 'getBaseShippingTaxRefunded',
        'shipping_amount' => 'getShippingAmount',
        'shipping_canceled' => 'getShippingCanceled',
        'shipping_discount_amount' => 'getShippingDiscountAmount',
        'shipping_discount_tax_compensation_amount' => 'getShippingDiscountTaxCompensationAmount',
        'shipping_incl_tax' => 'getShippingInclTax',
        'shipping_invoiced' => 'getShippingInvoiced',
        'shipping_refunded' => 'getShippingRefunded',
        'shipping_tax_amount' => 'getShippingTaxAmount',
        'shipping_tax_refunded' => 'getShippingTaxRefunded',
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
        $this->container['base_shipping_amount'] = isset($data['base_shipping_amount']) ? $data['base_shipping_amount'] : null;
        $this->container['base_shipping_canceled'] = isset($data['base_shipping_canceled']) ? $data['base_shipping_canceled'] : null;
        $this->container['base_shipping_discount_amount'] = isset($data['base_shipping_discount_amount']) ? $data['base_shipping_discount_amount'] : null;
        $this->container['base_shipping_discount_tax_compensation_amnt'] = isset($data['base_shipping_discount_tax_compensation_amnt']) ? $data['base_shipping_discount_tax_compensation_amnt'] : null;
        $this->container['base_shipping_incl_tax'] = isset($data['base_shipping_incl_tax']) ? $data['base_shipping_incl_tax'] : null;
        $this->container['base_shipping_invoiced'] = isset($data['base_shipping_invoiced']) ? $data['base_shipping_invoiced'] : null;
        $this->container['base_shipping_refunded'] = isset($data['base_shipping_refunded']) ? $data['base_shipping_refunded'] : null;
        $this->container['base_shipping_tax_amount'] = isset($data['base_shipping_tax_amount']) ? $data['base_shipping_tax_amount'] : null;
        $this->container['base_shipping_tax_refunded'] = isset($data['base_shipping_tax_refunded']) ? $data['base_shipping_tax_refunded'] : null;
        $this->container['shipping_amount'] = isset($data['shipping_amount']) ? $data['shipping_amount'] : null;
        $this->container['shipping_canceled'] = isset($data['shipping_canceled']) ? $data['shipping_canceled'] : null;
        $this->container['shipping_discount_amount'] = isset($data['shipping_discount_amount']) ? $data['shipping_discount_amount'] : null;
        $this->container['shipping_discount_tax_compensation_amount'] = isset($data['shipping_discount_tax_compensation_amount']) ? $data['shipping_discount_tax_compensation_amount'] : null;
        $this->container['shipping_incl_tax'] = isset($data['shipping_incl_tax']) ? $data['shipping_incl_tax'] : null;
        $this->container['shipping_invoiced'] = isset($data['shipping_invoiced']) ? $data['shipping_invoiced'] : null;
        $this->container['shipping_refunded'] = isset($data['shipping_refunded']) ? $data['shipping_refunded'] : null;
        $this->container['shipping_tax_amount'] = isset($data['shipping_tax_amount']) ? $data['shipping_tax_amount'] : null;
        $this->container['shipping_tax_refunded'] = isset($data['shipping_tax_refunded']) ? $data['shipping_tax_refunded'] : null;
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

        return true;
    }


    /**
     * Gets base_shipping_amount
     * @return float
     */
    public function getBaseShippingAmount()
    {
        return $this->container['base_shipping_amount'];
    }

    /**
     * Sets base_shipping_amount
     * @param float $base_shipping_amount Base shipping amount.
     * @return $this
     */
    public function setBaseShippingAmount($base_shipping_amount)
    {
        $this->container['base_shipping_amount'] = $base_shipping_amount;

        return $this;
    }

    /**
     * Gets base_shipping_canceled
     * @return float
     */
    public function getBaseShippingCanceled()
    {
        return $this->container['base_shipping_canceled'];
    }

    /**
     * Sets base_shipping_canceled
     * @param float $base_shipping_canceled Base shipping canceled.
     * @return $this
     */
    public function setBaseShippingCanceled($base_shipping_canceled)
    {
        $this->container['base_shipping_canceled'] = $base_shipping_canceled;

        return $this;
    }

    /**
     * Gets base_shipping_discount_amount
     * @return float
     */
    public function getBaseShippingDiscountAmount()
    {
        return $this->container['base_shipping_discount_amount'];
    }

    /**
     * Sets base_shipping_discount_amount
     * @param float $base_shipping_discount_amount Base shipping discount amount.
     * @return $this
     */
    public function setBaseShippingDiscountAmount($base_shipping_discount_amount)
    {
        $this->container['base_shipping_discount_amount'] = $base_shipping_discount_amount;

        return $this;
    }

    /**
     * Gets base_shipping_discount_tax_compensation_amnt
     * @return float
     */
    public function getBaseShippingDiscountTaxCompensationAmnt()
    {
        return $this->container['base_shipping_discount_tax_compensation_amnt'];
    }

    /**
     * Sets base_shipping_discount_tax_compensation_amnt
     * @param float $base_shipping_discount_tax_compensation_amnt Base shipping discount tax compensation amount.
     * @return $this
     */
    public function setBaseShippingDiscountTaxCompensationAmnt($base_shipping_discount_tax_compensation_amnt)
    {
        $this->container['base_shipping_discount_tax_compensation_amnt'] = $base_shipping_discount_tax_compensation_amnt;

        return $this;
    }

    /**
     * Gets base_shipping_incl_tax
     * @return float
     */
    public function getBaseShippingInclTax()
    {
        return $this->container['base_shipping_incl_tax'];
    }

    /**
     * Sets base_shipping_incl_tax
     * @param float $base_shipping_incl_tax Base shipping including tax.
     * @return $this
     */
    public function setBaseShippingInclTax($base_shipping_incl_tax)
    {
        $this->container['base_shipping_incl_tax'] = $base_shipping_incl_tax;

        return $this;
    }

    /**
     * Gets base_shipping_invoiced
     * @return float
     */
    public function getBaseShippingInvoiced()
    {
        return $this->container['base_shipping_invoiced'];
    }

    /**
     * Sets base_shipping_invoiced
     * @param float $base_shipping_invoiced Base shipping invoiced.
     * @return $this
     */
    public function setBaseShippingInvoiced($base_shipping_invoiced)
    {
        $this->container['base_shipping_invoiced'] = $base_shipping_invoiced;

        return $this;
    }

    /**
     * Gets base_shipping_refunded
     * @return float
     */
    public function getBaseShippingRefunded()
    {
        return $this->container['base_shipping_refunded'];
    }

    /**
     * Sets base_shipping_refunded
     * @param float $base_shipping_refunded Base shipping refunded.
     * @return $this
     */
    public function setBaseShippingRefunded($base_shipping_refunded)
    {
        $this->container['base_shipping_refunded'] = $base_shipping_refunded;

        return $this;
    }

    /**
     * Gets base_shipping_tax_amount
     * @return float
     */
    public function getBaseShippingTaxAmount()
    {
        return $this->container['base_shipping_tax_amount'];
    }

    /**
     * Sets base_shipping_tax_amount
     * @param float $base_shipping_tax_amount Base shipping tax amount.
     * @return $this
     */
    public function setBaseShippingTaxAmount($base_shipping_tax_amount)
    {
        $this->container['base_shipping_tax_amount'] = $base_shipping_tax_amount;

        return $this;
    }

    /**
     * Gets base_shipping_tax_refunded
     * @return float
     */
    public function getBaseShippingTaxRefunded()
    {
        return $this->container['base_shipping_tax_refunded'];
    }

    /**
     * Sets base_shipping_tax_refunded
     * @param float $base_shipping_tax_refunded Base shipping tax refunded.
     * @return $this
     */
    public function setBaseShippingTaxRefunded($base_shipping_tax_refunded)
    {
        $this->container['base_shipping_tax_refunded'] = $base_shipping_tax_refunded;

        return $this;
    }

    /**
     * Gets shipping_amount
     * @return float
     */
    public function getShippingAmount()
    {
        return $this->container['shipping_amount'];
    }

    /**
     * Sets shipping_amount
     * @param float $shipping_amount Shipping amount.
     * @return $this
     */
    public function setShippingAmount($shipping_amount)
    {
        $this->container['shipping_amount'] = $shipping_amount;

        return $this;
    }

    /**
     * Gets shipping_canceled
     * @return float
     */
    public function getShippingCanceled()
    {
        return $this->container['shipping_canceled'];
    }

    /**
     * Sets shipping_canceled
     * @param float $shipping_canceled Shipping canceled amount.
     * @return $this
     */
    public function setShippingCanceled($shipping_canceled)
    {
        $this->container['shipping_canceled'] = $shipping_canceled;

        return $this;
    }

    /**
     * Gets shipping_discount_amount
     * @return float
     */
    public function getShippingDiscountAmount()
    {
        return $this->container['shipping_discount_amount'];
    }

    /**
     * Sets shipping_discount_amount
     * @param float $shipping_discount_amount Shipping discount amount.
     * @return $this
     */
    public function setShippingDiscountAmount($shipping_discount_amount)
    {
        $this->container['shipping_discount_amount'] = $shipping_discount_amount;

        return $this;
    }

    /**
     * Gets shipping_discount_tax_compensation_amount
     * @return float
     */
    public function getShippingDiscountTaxCompensationAmount()
    {
        return $this->container['shipping_discount_tax_compensation_amount'];
    }

    /**
     * Sets shipping_discount_tax_compensation_amount
     * @param float $shipping_discount_tax_compensation_amount Shipping discount tax compensation amount.
     * @return $this
     */
    public function setShippingDiscountTaxCompensationAmount($shipping_discount_tax_compensation_amount)
    {
        $this->container['shipping_discount_tax_compensation_amount'] = $shipping_discount_tax_compensation_amount;

        return $this;
    }

    /**
     * Gets shipping_incl_tax
     * @return float
     */
    public function getShippingInclTax()
    {
        return $this->container['shipping_incl_tax'];
    }

    /**
     * Sets shipping_incl_tax
     * @param float $shipping_incl_tax Shipping including tax amount.
     * @return $this
     */
    public function setShippingInclTax($shipping_incl_tax)
    {
        $this->container['shipping_incl_tax'] = $shipping_incl_tax;

        return $this;
    }

    /**
     * Gets shipping_invoiced
     * @return float
     */
    public function getShippingInvoiced()
    {
        return $this->container['shipping_invoiced'];
    }

    /**
     * Sets shipping_invoiced
     * @param float $shipping_invoiced Shipping invoiced amount.
     * @return $this
     */
    public function setShippingInvoiced($shipping_invoiced)
    {
        $this->container['shipping_invoiced'] = $shipping_invoiced;

        return $this;
    }

    /**
     * Gets shipping_refunded
     * @return float
     */
    public function getShippingRefunded()
    {
        return $this->container['shipping_refunded'];
    }

    /**
     * Sets shipping_refunded
     * @param float $shipping_refunded Shipping refunded amount.
     * @return $this
     */
    public function setShippingRefunded($shipping_refunded)
    {
        $this->container['shipping_refunded'] = $shipping_refunded;

        return $this;
    }

    /**
     * Gets shipping_tax_amount
     * @return float
     */
    public function getShippingTaxAmount()
    {
        return $this->container['shipping_tax_amount'];
    }

    /**
     * Sets shipping_tax_amount
     * @param float $shipping_tax_amount Shipping tax amount.
     * @return $this
     */
    public function setShippingTaxAmount($shipping_tax_amount)
    {
        $this->container['shipping_tax_amount'] = $shipping_tax_amount;

        return $this;
    }

    /**
     * Gets shipping_tax_refunded
     * @return float
     */
    public function getShippingTaxRefunded()
    {
        return $this->container['shipping_tax_refunded'];
    }

    /**
     * Sets shipping_tax_refunded
     * @param float $shipping_tax_refunded Shipping tax refunded amount.
     * @return $this
     */
    public function setShippingTaxRefunded($shipping_tax_refunded)
    {
        $this->container['shipping_tax_refunded'] = $shipping_tax_refunded;

        return $this;
    }

    /**
     * Gets extension_attributes
     * @return \Swagger\Client\Model\SalesDataTotalExtensionInterface
     */
    public function getExtensionAttributes()
    {
        return $this->container['extension_attributes'];
    }

    /**
     * Sets extension_attributes
     * @param \Swagger\Client\Model\SalesDataTotalExtensionInterface $extension_attributes
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


