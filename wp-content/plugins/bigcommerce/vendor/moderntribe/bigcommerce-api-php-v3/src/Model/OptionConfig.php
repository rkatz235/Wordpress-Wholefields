<?php
/**
 * OptionConfig
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

class OptionConfig implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'OptionConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'default_value' => 'string',
        'checked_by_default' => 'bool',
        'checkbox_label' => 'string',
        'date_limited' => 'bool',
        'date_limit_mode' => 'string',
        'date_earliest_value' => '\DateTime',
        'date_latest_value' => '\DateTime',
        'file_types_mode' => 'string',
        'file_types_supported' => 'string[]',
        'file_types_other' => 'string[]',
        'file_max_size' => 'int',
        'text_characters_limited' => 'bool',
        'text_min_length' => 'int',
        'text_max_length' => 'int',
        'text_lines_limited' => 'bool',
        'text_max_lines' => 'int',
        'number_limited' => 'bool',
        'number_limit_mode' => 'string',
        'number_lowest_value' => 'float',
        'number_highest_value' => 'float',
        'number_integers_only' => 'bool',
        'product_list_adjusts_inventory' => 'bool',
        'product_list_adjusts_pricing' => 'bool',
        'product_list_shipping_calc' => 'string'
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
        'default_value' => 'default_value',
        'checked_by_default' => 'checked_by_default',
        'checkbox_label' => 'checkbox_label',
        'date_limited' => 'date_limited',
        'date_limit_mode' => 'date_limit_mode',
        'date_earliest_value' => 'date_earliest_value',
        'date_latest_value' => 'date_latest_value',
        'file_types_mode' => 'file_types_mode',
        'file_types_supported' => 'file_types_supported',
        'file_types_other' => 'file_types_other',
        'file_max_size' => 'file_max_size',
        'text_characters_limited' => 'text_characters_limited',
        'text_min_length' => 'text_min_length',
        'text_max_length' => 'text_max_length',
        'text_lines_limited' => 'text_lines_limited',
        'text_max_lines' => 'text_max_lines',
        'number_limited' => 'number_limited',
        'number_limit_mode' => 'number_limit_mode',
        'number_lowest_value' => 'number_lowest_value',
        'number_highest_value' => 'number_highest_value',
        'number_integers_only' => 'number_integers_only',
        'product_list_adjusts_inventory' => 'product_list_adjusts_inventory',
        'product_list_adjusts_pricing' => 'product_list_adjusts_pricing',
        'product_list_shipping_calc' => 'product_list_shipping_calc'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'default_value' => 'setDefaultValue',
        'checked_by_default' => 'setCheckedByDefault',
        'checkbox_label' => 'setCheckboxLabel',
        'date_limited' => 'setDateLimited',
        'date_limit_mode' => 'setDateLimitMode',
        'date_earliest_value' => 'setDateEarliestValue',
        'date_latest_value' => 'setDateLatestValue',
        'file_types_mode' => 'setFileTypesMode',
        'file_types_supported' => 'setFileTypesSupported',
        'file_types_other' => 'setFileTypesOther',
        'file_max_size' => 'setFileMaxSize',
        'text_characters_limited' => 'setTextCharactersLimited',
        'text_min_length' => 'setTextMinLength',
        'text_max_length' => 'setTextMaxLength',
        'text_lines_limited' => 'setTextLinesLimited',
        'text_max_lines' => 'setTextMaxLines',
        'number_limited' => 'setNumberLimited',
        'number_limit_mode' => 'setNumberLimitMode',
        'number_lowest_value' => 'setNumberLowestValue',
        'number_highest_value' => 'setNumberHighestValue',
        'number_integers_only' => 'setNumberIntegersOnly',
        'product_list_adjusts_inventory' => 'setProductListAdjustsInventory',
        'product_list_adjusts_pricing' => 'setProductListAdjustsPricing',
        'product_list_shipping_calc' => 'setProductListShippingCalc'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'default_value' => 'getDefaultValue',
        'checked_by_default' => 'getCheckedByDefault',
        'checkbox_label' => 'getCheckboxLabel',
        'date_limited' => 'getDateLimited',
        'date_limit_mode' => 'getDateLimitMode',
        'date_earliest_value' => 'getDateEarliestValue',
        'date_latest_value' => 'getDateLatestValue',
        'file_types_mode' => 'getFileTypesMode',
        'file_types_supported' => 'getFileTypesSupported',
        'file_types_other' => 'getFileTypesOther',
        'file_max_size' => 'getFileMaxSize',
        'text_characters_limited' => 'getTextCharactersLimited',
        'text_min_length' => 'getTextMinLength',
        'text_max_length' => 'getTextMaxLength',
        'text_lines_limited' => 'getTextLinesLimited',
        'text_max_lines' => 'getTextMaxLines',
        'number_limited' => 'getNumberLimited',
        'number_limit_mode' => 'getNumberLimitMode',
        'number_lowest_value' => 'getNumberLowestValue',
        'number_highest_value' => 'getNumberHighestValue',
        'number_integers_only' => 'getNumberIntegersOnly',
        'product_list_adjusts_inventory' => 'getProductListAdjustsInventory',
        'product_list_adjusts_pricing' => 'getProductListAdjustsPricing',
        'product_list_shipping_calc' => 'getProductListShippingCalc'
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

    const DATE_LIMIT_MODE_EARLIEST = 'earliest';
    const DATE_LIMIT_MODE_RANGE = 'range';
    const DATE_LIMIT_MODE_LATEST = 'latest';
    const FILE_TYPES_MODE_SPECIFIC = 'specific';
    const FILE_TYPES_MODE_ALL = 'all';
    const NUMBER_LIMIT_MODE_ = '';
    const NUMBER_LIMIT_MODE_LOWEST = 'lowest';
    const NUMBER_LIMIT_MODE_HIGHEST = 'highest';
    const NUMBER_LIMIT_MODE_RANGE = 'range';
    const PRODUCT_LIST_SHIPPING_CALC_NONE = 'none';
    const PRODUCT_LIST_SHIPPING_CALC_WEIGHT = 'weight';
    const PRODUCT_LIST_SHIPPING_CALC_PACKAGE = 'package';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getDateLimitModeAllowableValues()
    {
        return [
            self::DATE_LIMIT_MODE_EARLIEST,
            self::DATE_LIMIT_MODE_RANGE,
            self::DATE_LIMIT_MODE_LATEST,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getFileTypesModeAllowableValues()
    {
        return [
            self::FILE_TYPES_MODE_SPECIFIC,
            self::FILE_TYPES_MODE_ALL,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getNumberLimitModeAllowableValues()
    {
        return [
            self::NUMBER_LIMIT_MODE_,
            self::NUMBER_LIMIT_MODE_LOWEST,
            self::NUMBER_LIMIT_MODE_HIGHEST,
            self::NUMBER_LIMIT_MODE_RANGE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getProductListShippingCalcAllowableValues()
    {
        return [
            self::PRODUCT_LIST_SHIPPING_CALC_NONE,
            self::PRODUCT_LIST_SHIPPING_CALC_WEIGHT,
            self::PRODUCT_LIST_SHIPPING_CALC_PACKAGE,
        ];
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
        $this->container['default_value'] = array_key_exists('default_value', $data) ? $data['default_value'] : null;
        $this->container['checked_by_default'] = array_key_exists('checked_by_default', $data) ? $data['checked_by_default'] : null;
        $this->container['checkbox_label'] = array_key_exists('checkbox_label', $data) ? $data['checkbox_label'] : null;
        $this->container['date_limited'] = array_key_exists('date_limited', $data) ? $data['date_limited'] : null;
        $this->container['date_limit_mode'] = array_key_exists('date_limit_mode', $data) ? $data['date_limit_mode'] : null;
        $this->container['date_earliest_value'] = array_key_exists('date_earliest_value', $data) ? $data['date_earliest_value'] : null;
        $this->container['date_latest_value'] = array_key_exists('date_latest_value', $data) ? $data['date_latest_value'] : null;
        $this->container['file_types_mode'] = array_key_exists('file_types_mode', $data) ? $data['file_types_mode'] : null;
        $this->container['file_types_supported'] = array_key_exists('file_types_supported', $data) ? $data['file_types_supported'] : null;
        $this->container['file_types_other'] = array_key_exists('file_types_other', $data) ? $data['file_types_other'] : null;
        $this->container['file_max_size'] = array_key_exists('file_max_size', $data) ? $data['file_max_size'] : null;
        $this->container['text_characters_limited'] = array_key_exists('text_characters_limited', $data) ? $data['text_characters_limited'] : null;
        $this->container['text_min_length'] = array_key_exists('text_min_length', $data) ? $data['text_min_length'] : null;
        $this->container['text_max_length'] = array_key_exists('text_max_length', $data) ? $data['text_max_length'] : null;
        $this->container['text_lines_limited'] = array_key_exists('text_lines_limited', $data) ? $data['text_lines_limited'] : null;
        $this->container['text_max_lines'] = array_key_exists('text_max_lines', $data) ? $data['text_max_lines'] : null;
        $this->container['number_limited'] = array_key_exists('number_limited', $data) ? $data['number_limited'] : null;
        $this->container['number_limit_mode'] = array_key_exists('number_limit_mode', $data) ? $data['number_limit_mode'] : null;
        $this->container['number_lowest_value'] = array_key_exists('number_lowest_value', $data) ? $data['number_lowest_value'] : null;
        $this->container['number_highest_value'] = array_key_exists('number_highest_value', $data) ? $data['number_highest_value'] : null;
        $this->container['number_integers_only'] = array_key_exists('number_integers_only', $data) ? $data['number_integers_only'] : null;
        $this->container['product_list_adjusts_inventory'] = array_key_exists('product_list_adjusts_inventory', $data) ? $data['product_list_adjusts_inventory'] : null;
        $this->container['product_list_adjusts_pricing'] = array_key_exists('product_list_adjusts_pricing', $data) ? $data['product_list_adjusts_pricing'] : null;
        $this->container['product_list_shipping_calc'] = array_key_exists('product_list_shipping_calc', $data) ? $data['product_list_shipping_calc'] : null;
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
        $allowed_values = ["earliest", "range", "latest"];
        if (!in_array($this->container['date_limit_mode'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'date_limit_mode', must be one of #{allowed_values}.";
        }
        $allowed_values = ["specific", "all"];
        if (!in_array($this->container['file_types_mode'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'file_types_mode', must be one of #{allowed_values}.";
        }
        $allowed_values = ["", "lowest", "highest", "range"];
        if (!in_array($this->container['number_limit_mode'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'number_limit_mode', must be one of #{allowed_values}.";
        }
        $allowed_values = ["none", "weight", "package"];
        if (!in_array($this->container['product_list_shipping_calc'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'product_list_shipping_calc', must be one of #{allowed_values}.";
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
        $allowed_values = ["earliest", "range", "latest"];
        if (!in_array($this->container['date_limit_mode'], $allowed_values)) {
            return false;
        }
        $allowed_values = ["specific", "all"];
        if (!in_array($this->container['file_types_mode'], $allowed_values)) {
            return false;
        }
        $allowed_values = ["", "lowest", "highest", "range"];
        if (!in_array($this->container['number_limit_mode'], $allowed_values)) {
            return false;
        }
        $allowed_values = ["none", "weight", "package"];
        if (!in_array($this->container['product_list_shipping_calc'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets default_value
     * @return string
     */
    public function getDefaultValue()
    {
        return $this->container['default_value'];
    }

    /**
     * Sets default_value
     * @param string $default_value (date, text, multi_line_text, numbers_only_text) The default value. Shown on a date option as an ISO-8601???formatted string, or on a text option as a string.
     * @return $this
     */
    public function setDefaultValue($default_value)
    {
        $this->container['default_value'] = $default_value;

        return $this;
    }

    /**
     * Gets checked_by_default
     * @return bool
     */
    public function getCheckedByDefault()
    {
        return $this->container['checked_by_default'];
    }

    /**
     * Sets checked_by_default
     * @param bool $checked_by_default (checkbox) Flag for setting the checkbox to be checked by default.
     * @return $this
     */
    public function setCheckedByDefault($checked_by_default)
    {
        $this->container['checked_by_default'] = $checked_by_default;

        return $this;
    }

    /**
     * Gets checkbox_label
     * @return string
     */
    public function getCheckboxLabel()
    {
        return $this->container['checkbox_label'];
    }

    /**
     * Sets checkbox_label
     * @param string $checkbox_label (checkbox) Label displayed for the checkbox option.
     * @return $this
     */
    public function setCheckboxLabel($checkbox_label)
    {
        $this->container['checkbox_label'] = $checkbox_label;

        return $this;
    }

    /**
     * Gets date_limited
     * @return bool
     */
    public function getDateLimited()
    {
        return $this->container['date_limited'];
    }

    /**
     * Sets date_limited
     * @param bool $date_limited (date) Flag to limit the dates allowed to be entered on a date option.
     * @return $this
     */
    public function setDateLimited($date_limited)
    {
        $this->container['date_limited'] = $date_limited;

        return $this;
    }

    /**
     * Gets date_limit_mode
     * @return string
     */
    public function getDateLimitMode()
    {
        return $this->container['date_limit_mode'];
    }

    /**
     * Sets date_limit_mode
     * @param string $date_limit_mode (date) The type of limit that is allowed to be entered on a date option.
     * @return $this
     */
    public function setDateLimitMode($date_limit_mode)
    {
        $allowed_values = ['earliest', 'range', 'latest'];
        if (!is_null($date_limit_mode) && (!in_array($date_limit_mode, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'date_limit_mode', must be one of 'earliest', 'range', 'latest'");
        }
        $this->container['date_limit_mode'] = $date_limit_mode;

        return $this;
    }

    /**
     * Gets date_earliest_value
     * @return \DateTime
     */
    public function getDateEarliestValue()
    {
        return $this->container['date_earliest_value'];
    }

    /**
     * Sets date_earliest_value
     * @param \DateTime $date_earliest_value (date) The earliest date allowed to be entered on the date option, as an ISO-8601 formatted string.
     * @return $this
     */
    public function setDateEarliestValue($date_earliest_value)
    {
        $this->container['date_earliest_value'] = $date_earliest_value;

        return $this;
    }

    /**
     * Gets date_latest_value
     * @return \DateTime
     */
    public function getDateLatestValue()
    {
        return $this->container['date_latest_value'];
    }

    /**
     * Sets date_latest_value
     * @param \DateTime $date_latest_value (date) The latest date allowed to be entered on the date option, as an ISO-8601 formatted string.
     * @return $this
     */
    public function setDateLatestValue($date_latest_value)
    {
        $this->container['date_latest_value'] = $date_latest_value;

        return $this;
    }

    /**
     * Gets file_types_mode
     * @return string
     */
    public function getFileTypesMode()
    {
        return $this->container['file_types_mode'];
    }

    /**
     * Sets file_types_mode
     * @param string $file_types_mode (file) The kind of restriction on the file types that can be uploaded with a file upload option. Values: `specific` - restricts uploads to particular file types; `all` - allows all file types.
     * @return $this
     */
    public function setFileTypesMode($file_types_mode)
    {
        $allowed_values = ['specific', 'all'];
        if (!is_null($file_types_mode) && (!in_array($file_types_mode, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'file_types_mode', must be one of 'specific', 'all'");
        }
        $this->container['file_types_mode'] = $file_types_mode;

        return $this;
    }

    /**
     * Gets file_types_supported
     * @return string[]
     */
    public function getFileTypesSupported()
    {
        return $this->container['file_types_supported'];
    }

    /**
     * Sets file_types_supported
     * @param string[] $file_types_supported (file) The type of files allowed to be uploaded if the `file_type_option` is set to `specific`. Values:   `images` - Allows upload of image MIME types (`bmp`, `gif`, `jpg`, `jpeg`, `jpe`, `jif`, `jfif`, `jfi`, `png`, `wbmp`, `xbm`, `tiff`). `documents` - Allows upload of document MIME types (`txt`, `pdf`, `rtf`, `doc`, `docx`, `xls`, `xlsx`, `accdb`, `mdb`, `one`, `pps`, `ppsx`, `ppt`, `pptx`, `pub`, `odt`, `ods`, `odp`, `odg`, `odf`).   `other` - Allows file types defined in the `file_types_other` array.
     * @return $this
     */
    public function setFileTypesSupported($file_types_supported)
    {
        $this->container['file_types_supported'] = $file_types_supported;

        return $this;
    }

    /**
     * Gets file_types_other
     * @return string[]
     */
    public function getFileTypesOther()
    {
        return $this->container['file_types_other'];
    }

    /**
     * Sets file_types_other
     * @param string[] $file_types_other (file) A list of other file types allowed with the file upload option.
     * @return $this
     */
    public function setFileTypesOther($file_types_other)
    {
        $this->container['file_types_other'] = $file_types_other;

        return $this;
    }

    /**
     * Gets file_max_size
     * @return int
     */
    public function getFileMaxSize()
    {
        return $this->container['file_max_size'];
    }

    /**
     * Sets file_max_size
     * @param int $file_max_size (file) The maximum size for a file that can be used with the file upload option.
     * @return $this
     */
    public function setFileMaxSize($file_max_size)
    {
        $this->container['file_max_size'] = $file_max_size;

        return $this;
    }

    /**
     * Gets text_characters_limited
     * @return bool
     */
    public function getTextCharactersLimited()
    {
        return $this->container['text_characters_limited'];
    }

    /**
     * Sets text_characters_limited
     * @param bool $text_characters_limited (text, multi_line_text) Flag to validate the length of a text or multi-line text input.
     * @return $this
     */
    public function setTextCharactersLimited($text_characters_limited)
    {
        $this->container['text_characters_limited'] = $text_characters_limited;

        return $this;
    }

    /**
     * Gets text_min_length
     * @return int
     */
    public function getTextMinLength()
    {
        return $this->container['text_min_length'];
    }

    /**
     * Sets text_min_length
     * @param int $text_min_length (text, multi_line_text) The minimum length allowed for a text or multi-line text option.
     * @return $this
     */
    public function setTextMinLength($text_min_length)
    {
        $this->container['text_min_length'] = $text_min_length;

        return $this;
    }

    /**
     * Gets text_max_length
     * @return int
     */
    public function getTextMaxLength()
    {
        return $this->container['text_max_length'];
    }

    /**
     * Sets text_max_length
     * @param int $text_max_length (text, multi_line_text) The maximum length allowed for a text or multi line text option.
     * @return $this
     */
    public function setTextMaxLength($text_max_length)
    {
        $this->container['text_max_length'] = $text_max_length;

        return $this;
    }

    /**
     * Gets text_lines_limited
     * @return bool
     */
    public function getTextLinesLimited()
    {
        return $this->container['text_lines_limited'];
    }

    /**
     * Sets text_lines_limited
     * @param bool $text_lines_limited (multi_line_text) Flag to validate the maximum number of lines allowed on a multi-line text input.
     * @return $this
     */
    public function setTextLinesLimited($text_lines_limited)
    {
        $this->container['text_lines_limited'] = $text_lines_limited;

        return $this;
    }

    /**
     * Gets text_max_lines
     * @return int
     */
    public function getTextMaxLines()
    {
        return $this->container['text_max_lines'];
    }

    /**
     * Sets text_max_lines
     * @param int $text_max_lines (multi_line_text) The maximum number of lines allowed on a multi-line text input.
     * @return $this
     */
    public function setTextMaxLines($text_max_lines)
    {
        $this->container['text_max_lines'] = $text_max_lines;

        return $this;
    }

    /**
     * Gets number_limited
     * @return bool
     */
    public function getNumberLimited()
    {
        return $this->container['number_limited'];
    }

    /**
     * Sets number_limited
     * @param bool $number_limited (numbers_only_text) Flag to limit the value of a number option.
     * @return $this
     */
    public function setNumberLimited($number_limited)
    {
        $this->container['number_limited'] = $number_limited;

        return $this;
    }

    /**
     * Gets number_limit_mode
     * @return string
     */
    public function getNumberLimitMode()
    {
        return $this->container['number_limit_mode'];
    }

    /**
     * Sets number_limit_mode
     * @param string $number_limit_mode (numbers_only_text) The type of limit on values entered for a number option.
     * @return $this
     */
    public function setNumberLimitMode($number_limit_mode)
    {
        $allowed_values = ['', 'lowest', 'highest', 'range'];
        if (!is_null($number_limit_mode) && (!in_array($number_limit_mode, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'number_limit_mode', must be one of '', 'lowest', 'highest', 'range'");
        }
        $this->container['number_limit_mode'] = $number_limit_mode;

        return $this;
    }

    /**
     * Gets number_lowest_value
     * @return float
     */
    public function getNumberLowestValue()
    {
        return $this->container['number_lowest_value'];
    }

    /**
     * Sets number_lowest_value
     * @param float $number_lowest_value (numbers_only_text) The lowest allowed value for a number option if `number_limited` is true.
     * @return $this
     */
    public function setNumberLowestValue($number_lowest_value)
    {
        $this->container['number_lowest_value'] = $number_lowest_value;

        return $this;
    }

    /**
     * Gets number_highest_value
     * @return float
     */
    public function getNumberHighestValue()
    {
        return $this->container['number_highest_value'];
    }

    /**
     * Sets number_highest_value
     * @param float $number_highest_value (numbers_only_text) The highest allowed value for a number option if `number_limited` is true.
     * @return $this
     */
    public function setNumberHighestValue($number_highest_value)
    {
        $this->container['number_highest_value'] = $number_highest_value;

        return $this;
    }

    /**
     * Gets number_integers_only
     * @return bool
     */
    public function getNumberIntegersOnly()
    {
        return $this->container['number_integers_only'];
    }

    /**
     * Sets number_integers_only
     * @param bool $number_integers_only (numbers_only_text) Flag to limit the input on a number option to whole numbers only.
     * @return $this
     */
    public function setNumberIntegersOnly($number_integers_only)
    {
        $this->container['number_integers_only'] = $number_integers_only;

        return $this;
    }

    /**
     * Gets product_list_adjusts_inventory
     * @return bool
     */
    public function getProductListAdjustsInventory()
    {
        return $this->container['product_list_adjusts_inventory'];
    }

    /**
     * Sets product_list_adjusts_inventory
     * @param bool $product_list_adjusts_inventory (product_list, product_list_with_images) Flag for automatically adjusting inventory on a product included in the list.
     * @return $this
     */
    public function setProductListAdjustsInventory($product_list_adjusts_inventory)
    {
        $this->container['product_list_adjusts_inventory'] = $product_list_adjusts_inventory;

        return $this;
    }

    /**
     * Gets product_list_adjusts_pricing
     * @return bool
     */
    public function getProductListAdjustsPricing()
    {
        return $this->container['product_list_adjusts_pricing'];
    }

    /**
     * Sets product_list_adjusts_pricing
     * @param bool $product_list_adjusts_pricing (product_list, product_list_with_images) Flag to add the optional product's price to the main product's price.
     * @return $this
     */
    public function setProductListAdjustsPricing($product_list_adjusts_pricing)
    {
        $this->container['product_list_adjusts_pricing'] = $product_list_adjusts_pricing;

        return $this;
    }

    /**
     * Gets product_list_shipping_calc
     * @return string
     */
    public function getProductListShippingCalc()
    {
        return $this->container['product_list_shipping_calc'];
    }

    /**
     * Sets product_list_shipping_calc
     * @param string $product_list_shipping_calc (product_list, product_list_with_images) How to factor the optional product's weight and package dimensions into the shipping quote. Values: `none` - don't adjust; `weight` - use shipping weight only; `package` - use weight and dimensions.
     * @return $this
     */
    public function setProductListShippingCalc($product_list_shipping_calc)
    {
        $allowed_values = ['none', 'weight', 'package'];
        if (!is_null($product_list_shipping_calc) && (!in_array($product_list_shipping_calc, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'product_list_shipping_calc', must be one of 'none', 'weight', 'package'");
        }
        $this->container['product_list_shipping_calc'] = $product_list_shipping_calc;

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


