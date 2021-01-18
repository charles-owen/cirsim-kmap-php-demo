<?php
/**
 * Example adapter class for Kmap
 */

namespace Demo;


class KmapDemo extends \CL\KmapPHP\Kmap {
    public function __construct($instructor=false, ApiDemo $apiDemo=null) {
        parent::__construct();

        $this->instructor = $instructor;
        $this->apiDemo = $apiDemo;
        $this->appTag = 'general';
        $this->encode = true;

        $this->__get('api')->test = "api/test.php";

        if(!$instructor) {

        }
    }

    /**
     * Property set magic method
     *
     * <b>Properties</b>
     * Property | Type | Description
     * -------- | ---- | -----------
     *
     * @param string $property Property name
     * @param mixed $value Value to set
     */
    public function __set($property, $value) {
        switch($property) {

            default:
                parent::__set($property, $value);
                break;
        }
    }


    private $instructor;
    private $apiDemo;
}