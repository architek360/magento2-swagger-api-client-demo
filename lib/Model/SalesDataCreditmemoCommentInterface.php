<?php
/**
 * SalesDataCreditmemoCommentInterface
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
 * SalesDataCreditmemoCommentInterface Class Doc Comment
 *
 * @category    Class
 * @description Credit memo comment interface. After a customer places and pays for an order and an invoice has been issued, the merchant can create a credit memo to refund all or part of the amount paid for any returned or undelivered items. The memo restores funds to the customer account so that the customer can make future purchases. A credit memo usually includes comments that detail why the credit memo amount was credited to the customer.
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SalesDataCreditmemoCommentInterface implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'sales-data-creditmemo-comment-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'comment' => 'string',
        'created_at' => 'string',
        'entity_id' => 'int',
        'is_customer_notified' => 'int',
        'is_visible_on_front' => 'int',
        'parent_id' => 'int',
        'extension_attributes' => '\Swagger\Client\Model\SalesDataCreditmemoCommentExtensionInterface'
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
        'comment' => 'comment',
        'created_at' => 'created_at',
        'entity_id' => 'entity_id',
        'is_customer_notified' => 'is_customer_notified',
        'is_visible_on_front' => 'is_visible_on_front',
        'parent_id' => 'parent_id',
        'extension_attributes' => 'extension_attributes'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'comment' => 'setComment',
        'created_at' => 'setCreatedAt',
        'entity_id' => 'setEntityId',
        'is_customer_notified' => 'setIsCustomerNotified',
        'is_visible_on_front' => 'setIsVisibleOnFront',
        'parent_id' => 'setParentId',
        'extension_attributes' => 'setExtensionAttributes'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'comment' => 'getComment',
        'created_at' => 'getCreatedAt',
        'entity_id' => 'getEntityId',
        'is_customer_notified' => 'getIsCustomerNotified',
        'is_visible_on_front' => 'getIsVisibleOnFront',
        'parent_id' => 'getParentId',
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
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['entity_id'] = isset($data['entity_id']) ? $data['entity_id'] : null;
        $this->container['is_customer_notified'] = isset($data['is_customer_notified']) ? $data['is_customer_notified'] : null;
        $this->container['is_visible_on_front'] = isset($data['is_visible_on_front']) ? $data['is_visible_on_front'] : null;
        $this->container['parent_id'] = isset($data['parent_id']) ? $data['parent_id'] : null;
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

        if ($this->container['comment'] === null) {
            $invalid_properties[] = "'comment' can't be null";
        }
        if ($this->container['is_customer_notified'] === null) {
            $invalid_properties[] = "'is_customer_notified' can't be null";
        }
        if ($this->container['is_visible_on_front'] === null) {
            $invalid_properties[] = "'is_visible_on_front' can't be null";
        }
        if ($this->container['parent_id'] === null) {
            $invalid_properties[] = "'parent_id' can't be null";
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

        if ($this->container['comment'] === null) {
            return false;
        }
        if ($this->container['is_customer_notified'] === null) {
            return false;
        }
        if ($this->container['is_visible_on_front'] === null) {
            return false;
        }
        if ($this->container['parent_id'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets comment
     * @return string
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     * @param string $comment Comment.
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets created_at
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     * @param string $created_at Created-at timestamp.
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets entity_id
     * @return int
     */
    public function getEntityId()
    {
        return $this->container['entity_id'];
    }

    /**
     * Sets entity_id
     * @param int $entity_id Credit memo ID.
     * @return $this
     */
    public function setEntityId($entity_id)
    {
        $this->container['entity_id'] = $entity_id;

        return $this;
    }

    /**
     * Gets is_customer_notified
     * @return int
     */
    public function getIsCustomerNotified()
    {
        return $this->container['is_customer_notified'];
    }

    /**
     * Sets is_customer_notified
     * @param int $is_customer_notified Is-customer-notified flag value.
     * @return $this
     */
    public function setIsCustomerNotified($is_customer_notified)
    {
        $this->container['is_customer_notified'] = $is_customer_notified;

        return $this;
    }

    /**
     * Gets is_visible_on_front
     * @return int
     */
    public function getIsVisibleOnFront()
    {
        return $this->container['is_visible_on_front'];
    }

    /**
     * Sets is_visible_on_front
     * @param int $is_visible_on_front Is-visible-on-storefront flag value.
     * @return $this
     */
    public function setIsVisibleOnFront($is_visible_on_front)
    {
        $this->container['is_visible_on_front'] = $is_visible_on_front;

        return $this;
    }

    /**
     * Gets parent_id
     * @return int
     */
    public function getParentId()
    {
        return $this->container['parent_id'];
    }

    /**
     * Sets parent_id
     * @param int $parent_id Parent ID.
     * @return $this
     */
    public function setParentId($parent_id)
    {
        $this->container['parent_id'] = $parent_id;

        return $this;
    }

    /**
     * Gets extension_attributes
     * @return \Swagger\Client\Model\SalesDataCreditmemoCommentExtensionInterface
     */
    public function getExtensionAttributes()
    {
        return $this->container['extension_attributes'];
    }

    /**
     * Sets extension_attributes
     * @param \Swagger\Client\Model\SalesDataCreditmemoCommentExtensionInterface $extension_attributes
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

