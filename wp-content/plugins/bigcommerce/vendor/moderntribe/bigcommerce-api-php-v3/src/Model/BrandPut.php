<?php
/**
 * BrandPut
 *
 * @package  BigCommerce\Api\v3
 */

/**
 * BigCommerce API
 *
 * A Swagger Document for the BigCommmerce v3 API.
 *
 * OpenAPI spec version: 3.0.0b
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BigCommerce\Api\v3\Model;

use \ArrayAccess;

class BrandPut extends BrandBase implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'BrandPut';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'page_title' => 'string',
        'meta_keywords' => 'string[]',
        'meta_description' => 'string',
        'search_keywords' => 'string',
        'image_url' => 'string',
        'custom_url' => '\BigCommerce\Api\v3\Model\CustomUrlBrand',
        'id' => 'int'
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
        'name' => 'name',
        'page_title' => 'page_title',
        'meta_keywords' => 'meta_keywords',
        'meta_description' => 'meta_description',
        'search_keywords' => 'search_keywords',
        'image_url' => 'image_url',
        'custom_url' => 'custom_url',
        'id' => 'id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'page_title' => 'setPageTitle',
        'meta_keywords' => 'setMetaKeywords',
        'meta_description' => 'setMetaDescription',
        'search_keywords' => 'setSearchKeywords',
        'image_url' => 'setImageUrl',
        'custom_url' => 'setCustomUrl',
        'id' => 'setId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'page_title' => 'getPageTitle',
        'meta_keywords' => 'getMetaKeywords',
        'meta_description' => 'getMetaDescription',
        'search_keywords' => 'getSearchKeywords',
        'image_url' => 'getImageUrl',
        'custom_url' => 'getCustomUrl',
        'id' => 'getId'
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
    public function __construct(array $data = [])
    {
        $this->container['name'] = array_key_exists('name', $data) ? $data['name'] : null;
        $this->container['page_title'] = array_key_exists('page_title', $data) ? $data['page_title'] : null;
        $this->container['meta_keywords'] = array_key_exists('meta_keywords', $data) ? $data['meta_keywords'] : null;
        $this->container['meta_description'] = array_key_exists('meta_description', $data) ? $data['meta_description'] : null;
        $this->container['search_keywords'] = array_key_exists('search_keywords', $data) ? $data['search_keywords'] : null;
        $this->container['image_url'] = array_key_exists('image_url', $data) ? $data['image_url'] : null;
        $this->container['custom_url'] = array_key_exists('custom_url', $data) ? $data['custom_url'] : null;
        $this->container['id'] = array_key_exists('id', $data) ? $data['id'] : null;
    }

    /**
     * returns container
     * @return array
     */
    public function get()
    {
        return $this->container;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if (strlen($this->container['name']) > 255) {
            $invalid_properties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
        }
        if (strlen($this->container['name']) < 1) {
            $invalid_properties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }
        if (strlen($this->container['page_title']) > 255) {
            $invalid_properties[] = "invalid value for 'page_title', the character length must be smaller than or equal to 255.";
        }
        if (strlen($this->container['page_title']) < 0) {
            $invalid_properties[] = "invalid value for 'page_title', the character length must be bigger than or equal to 0.";
        }
        if (strlen($this->container['meta_description']) > 65535) {
            $invalid_properties[] = "invalid value for 'meta_description', the character length must be smaller than or equal to 65535.";
        }
        if (strlen($this->container['meta_description']) < 0) {
            $invalid_properties[] = "invalid value for 'meta_description', the character length must be bigger than or equal to 0.";
        }
        if (strlen($this->container['search_keywords']) > 65535) {
            $invalid_properties[] = "invalid value for 'search_keywords', the character length must be smaller than or equal to 65535.";
        }
        if (strlen($this->container['search_keywords']) < 0) {
            $invalid_properties[] = "invalid value for 'search_keywords', the character length must be bigger than or equal to 0.";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if (strlen($this->container['name']) > 255) {
            return false;
        }
        if (strlen($this->container['name']) < 1) {
            return false;
        }
        if (strlen($this->container['page_title']) > 255) {
            return false;
        }
        if (strlen($this->container['page_title']) < 0) {
            return false;
        }
        if (strlen($this->container['meta_description']) > 65535) {
            return false;
        }
        if (strlen($this->container['meta_description']) < 0) {
            return false;
        }
        if (strlen($this->container['search_keywords']) > 65535) {
            return false;
        }
        if (strlen($this->container['search_keywords']) < 0) {
            return false;
        }
        return true;
    }


    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name The name of the brand. Must be unique.
     * @return $this
     */
    public function setName($name)
    {
        if (strlen($name) > 255) {
            throw new \InvalidArgumentException('invalid length for $name when calling BrandPut., must be smaller than or equal to 255.');
        }
        if (strlen($name) < 1) {
            throw new \InvalidArgumentException('invalid length for $name when calling BrandPut., must be bigger than or equal to 1.');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets page_title
     * @return string
     */
    public function getPageTitle()
    {
        return $this->container['page_title'];
    }

    /**
     * Sets page_title
     * @param string $page_title The title shown in the browser while viewing the brand.
     * @return $this
     */
    public function setPageTitle($page_title)
    {
        if (strlen($page_title) > 255) {
            throw new \InvalidArgumentException('invalid length for $page_title when calling BrandPut., must be smaller than or equal to 255.');
        }
        if (strlen($page_title) < 0) {
            throw new \InvalidArgumentException('invalid length for $page_title when calling BrandPut., must be bigger than or equal to 0.');
        }
        $this->container['page_title'] = $page_title;

        return $this;
    }

    /**
     * Gets meta_keywords
     * @return string[]
     */
    public function getMetaKeywords()
    {
        return $this->container['meta_keywords'];
    }

    /**
     * Sets meta_keywords
     * @param string[] $meta_keywords Comma-separated list of meta keywords to include in the HTML.
     * @return $this
     */
    public function setMetaKeywords($meta_keywords)
    {
        $this->container['meta_keywords'] = $meta_keywords;

        return $this;
    }

    /**
     * Gets meta_description
     * @return string
     */
    public function getMetaDescription()
    {
        return $this->container['meta_description'];
    }

    /**
     * Sets meta_description
     * @param string $meta_description A meta description to include.
     * @return $this
     */
    public function setMetaDescription($meta_description)
    {
        if (strlen($meta_description) > 65535) {
            throw new \InvalidArgumentException('invalid length for $meta_description when calling BrandPut., must be smaller than or equal to 65535.');
        }
        if (strlen($meta_description) < 0) {
            throw new \InvalidArgumentException('invalid length for $meta_description when calling BrandPut., must be bigger than or equal to 0.');
        }
        $this->container['meta_description'] = $meta_description;

        return $this;
    }

    /**
     * Gets search_keywords
     * @return string
     */
    public function getSearchKeywords()
    {
        return $this->container['search_keywords'];
    }

    /**
     * Sets search_keywords
     * @param string $search_keywords A comma-separated list of keywords that can be used to locate this brand.
     * @return $this
     */
    public function setSearchKeywords($search_keywords)
    {
        if (strlen($search_keywords) > 65535) {
            throw new \InvalidArgumentException('invalid length for $search_keywords when calling BrandPut., must be smaller than or equal to 65535.');
        }
        if (strlen($search_keywords) < 0) {
            throw new \InvalidArgumentException('invalid length for $search_keywords when calling BrandPut., must be bigger than or equal to 0.');
        }
        $this->container['search_keywords'] = $search_keywords;

        return $this;
    }

    /**
     * Gets image_url
     * @return string
     */
    public function getImageUrl()
    {
        return $this->container['image_url'];
    }

    /**
     * Sets image_url
     * @param string $image_url Image URL used for this category on the storefront. Images can be uploaded via form file post to `/brands/{brandId}/image`, or by providing a publicly accessible URL in this field.
     * @return $this
     */
    public function setImageUrl($image_url)
    {
        $this->container['image_url'] = $image_url;

        return $this;
    }

    /**
     * Gets custom_url
     * @return \BigCommerce\Api\v3\Model\CustomUrlBrand
     */
    public function getCustomUrl()
    {
        return $this->container['custom_url'];
    }

    /**
     * Sets custom_url
     * @param \BigCommerce\Api\v3\Model\CustomUrlBrand $custom_url
     * @return $this
     */
    public function setCustomUrl($custom_url)
    {
        $this->container['custom_url'] = $custom_url;

        return $this;
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
     * @param int $id The unique numeric ID of the brand; increments sequentially.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
            return json_encode(\BigCommerce\Api\v3\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\BigCommerce\Api\v3\ObjectSerializer::sanitizeForSerialization($this));
    }
}


