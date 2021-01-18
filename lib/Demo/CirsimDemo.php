<?php
/**
 * Example adapter class for Cirsim
 */

namespace Demo;


class CirsimDemo extends \CL\CirsimPHP\Cirsim {
    public function __construct($instructor=false, ApiDemo $apiDemo=null) {
        parent::__construct();

        $this->instructor = $instructor;
        $this->apiDemo = $apiDemo;
        $this->appTag = 'general';

        $this->__set('save', true);
        $this->__get('api')->save = "api/save.php";
        $this->__get('api')->load = "api/load.php";
        $this->__get('api')->files = "api/files.php";
        $this->__get('api')->test = "api/test.php";

        if(!$instructor) {
            $this->__set('export', false);
        }
    }

    /**
     * Property set magic method
     *
     * <b>Properties</b>
     * Property | Type | Description
     * -------- | ---- | -----------
     * answer | string | JSON answer to the problem
     *
     * @param string $property Property name
     * @param mixed $value Value to set
     */
    public function __set($property, $value) {
        switch($property) {
            case 'answer':
                // Only allow answer to set set if this is an instructor
                if($this->instructor) {
                    parent::__set($property, $value);
                }
                break;

            default:
                parent::__set($property, $value);
                break;
        }
    }

    /**
     * Calling this function puts Cirsim into single file mode.
     * Only one file can be saved in this mode.
     *
     * The application tag is an assignment tag if the submission is
     * limited to submission only during the assignment.
     *
     * @param string $appTag The application tag. Can be an assignment tag
     * @param string $name The name to use
     * @param boolean $save If true, the save option is included.
     * @param boolean $singleAjaxLoad If true, load the single file using Ajax
     * This option is forced false by this function
     */
    public function single($appTag, $name, $save = true, $singleAjaxLoad = true) {
        parent::single($appTag, $name, $save, false);

        $data = $this->apiDemo->load($appTag, $name);
        if($data !== null) {
           $this->__set('load', $data['data']);
        }
    }

    private $instructor;
    private $apiDemo;
}