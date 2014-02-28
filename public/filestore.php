<?php

class Filestore {

    public $filename = '';

    function __construct($filename = '') {
    	if(!empty($filename))
        // Sets $this->filename
        $this->filename = $filename;
    }

    /**
     * Returns array of lines in $this->filename
     */
    function read_lines() {
    	if(filesize($this->filename) == 0) {
		return array();
			}
			$handle = fopen($this->filename, 'r');
			$contents = fread($handle, filesize($this->filename));
			$items = explode("\n", $contents);
			fclose($handle);
			return $items;
    }

    /**
     * Writes each element in $array to a new line in $this->filename
     */
    function write_lines($array) {
    	$string = implode("\n", $items);
		$handle = fopen($this->filename, 'w');
		fwrite($handle, $string);
		fclose($handle);
    }

    /**
     * Reads contents of csv $this->filename, returns an array
     */
    function read_csv() {
		$contents = [];
		$handle = fopen($this->filename, "r");
		while (($data = fgetcsv($handle)) !== FALSE) {
			$contents[] = $data;
		}
		fclose($handle);
		return $contents;
	}

    /**
     * Writes contents of $array to csv $this->filename
     */
    function write_csv($address_book) {
			$handle = fopen($this->filename, 'w');
			foreach ($address_book as $row) {
				fputcsv($handle, $row);
				}
			fclose($handle);
		}

}