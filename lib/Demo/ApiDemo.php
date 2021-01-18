<?php
/**
 * @file
 * Simple session-based demonstration of Cirsim API features.
 */

namespace Demo;


class ApiDemo {

	public function __construct() {
	}

	public function dir($appTag) {
	    $this->ensure($appTag);

	    $result = [];
		foreach($this->files[$appTag] as $fileName => $data) {
                $result[] = ['name'=>$fileName];
        }

		return $result;
	}

	public function save($appTag, $filename, $data, $type) {
	    $this->ensure($appTag);

		$this->files[$appTag][$filename] = ['data'=>$data, 'type'=>$type];
	}

	public function load($appTag, $filename) {
		if(isset($this->files[$appTag]) && isset($this->files[$appTag][$filename])) {
			return $this->files[$appTag][$filename];
		}

		return null;
	}

    /**
     * Ensure a collection of files exists for the supplied application tag.
     * @param string $appTag Application tag
     */
	private function ensure($appTag) {
	    if(!array_key_exists($appTag, $this->files)) {
	        $this->files[$appTag] = [];
        }
    }

    public function test($appTag, $filename, $result, $data, $type) {
        $this->tests[] = ['appTag'=>$appTag, 'filename'=>$filename, 'result'=>$result, 'data'=>$data, 'type'=>$type];
    }

    public function getTests() {
	    return $this->tests;
    }

    private $files = [];
	private $tests = [];
}