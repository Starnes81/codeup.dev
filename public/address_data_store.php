<?php



class AddressDataStore {

	public $filename = '';

	function __construct($filename = 'address_book.csv'){
		$this->filename = $filename;
	}

	function read_file() {
		$contents = [];
		$handle = fopen($this->filename, "r");
		while (($data = fgetcsv($handle)) !== FALSE) {
			$contents[] = $data;
		}
		fclose($handle);
		return $contents;
	}

	function save_file($address_book){
			$handle = fopen($this->filename, 'w');
			foreach ($address_book as $row) {
				fputcsv($handle, $row);
				}
			fclose($handle);
		}

	
}