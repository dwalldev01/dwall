<?php
/**
 * Config
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * TruEdit REST API
 *
 * Welcome to the TruEdit Platform REST API Reference! You can use this REST API to develop integrations between TruEdit and other applications or script interactions with TruEdit.
 *
 * OpenAPI spec version: 1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * Config Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Config implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Config';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'external_config' => 'bool',
        'form_config' => 'object',
        'form_remote' => 'bool',
        'form_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'external_config' => null,
        'form_config' => null,
        'form_remote' => null,
        'form_url' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'external_config' => 'externalConfig',
        'form_config' => 'formConfig',
        'form_remote' => 'formRemote',
        'form_url' => 'formUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'external_config' => 'setExternalConfig',
        'form_config' => 'setFormConfig',
        'form_remote' => 'setFormRemote',
        'form_url' => 'setFormUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'external_config' => 'getExternalConfig',
        'form_config' => 'getFormConfig',
        'form_remote' => 'getFormRemote',
        'form_url' => 'getFormUrl'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['external_config'] = isset($data['external_config']) ? $data['external_config'] : null;
        $this->container['form_config'] = isset($data['form_config']) ? $data['form_config'] : null;
        $this->container['form_remote'] = isset($data['form_remote']) ? $data['form_remote'] : null;
        $this->container['form_url'] = isset($data['form_url']) ? $data['form_url'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets external_config
     *
     * @return bool
     */
    public function getExternalConfig()
    {
        return $this->container['external_config'];
    }

    /**
     * Sets external_config
     *
     * @param bool $external_config external_config
     *
     * @return $this
     */
    public function setExternalConfig($external_config)
    {
        $this->container['external_config'] = $external_config;

        return $this;
    }

    /**
     * Gets form_config
     *
     * @return object
     */
    public function getFormConfig()
    {
        return $this->container['form_config'];
    }

    /**
     * Sets form_config
     *
     * @param object $form_config form_config
     *
     * @return $this
     */
    public function setFormConfig($form_config)
    {
        $this->container['form_config'] = $form_config;

        return $this;
    }

    /**
     * Gets form_remote
     *
     * @return bool
     */
    public function getFormRemote()
    {
        return $this->container['form_remote'];
    }

    /**
     * Sets form_remote
     *
     * @param bool $form_remote form_remote
     *
     * @return $this
     */
    public function setFormRemote($form_remote)
    {
        $this->container['form_remote'] = $form_remote;

        return $this;
    }

    /**
     * Gets form_url
     *
     * @return string
     */
    public function getFormUrl()
    {
        return $this->container['form_url'];
    }

    /**
     * Sets form_url
     *
     * @param string $form_url form_url
     *
     * @return $this
     */
    public function setFormUrl($form_url)
    {
        $this->container['form_url'] = $form_url;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


