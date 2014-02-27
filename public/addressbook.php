<?php

class AddressDataStore {

	public $filename = '';

	function __construct($filename ='address_book.csv'){
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

$book = new AddressDataStore();

$address_book = $book->read_file($book->filename);


$book->save_file($address_book);

if (!empty($_POST)){
	$name = $_POST['name'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$zip = $_POST['zip'];

	$entry = [$name, $address, $city, $state, $zip];
	array_push($address_book, $entry);

	$book->save_file($address_book);
}

if (isset($_GET['remove'])){
	unset($address_book[$_GET['remove']]);
	$book->save_file($address_book);
	
}

var_dump($_POST);
var_dump($_GET);

?>

<!DOCTYPE html>

<html>
<head>
	<title>Addressbook</title>
</head>
<body>

	<h2>Address Book</h2>

	<table>
			<? foreach ($address_book as $key => $row) { ?> 
				<tr>
				<? foreach ($row as $entry) { ?>
					 <?= "<td>" . htmlspecialchars(strip_tags($entry))  .  "</td>"; } ?>
					<td> <a href='?remove=<?=$key ?>'>Remove Item</a></td>
				<? } ?>

				</tr>
	</table>
	

	<form method="POST">
		<p>
			<label>Name: </label>
			<input type="text" name="name" id="name" placeholder="Enter Name">
		</p>
		<p>
			<label>Address: </label>
			<input type="text" name="address" id="address" placeholder="Enter Address">
		</p>
		<p>
			<label>City: </label>
			<input type="text" name="city" id="city" placeholder="Enter City">
		</p>
		<p>
			<label>State: </label>
			<input type="text" name="state" id="state" placeholder="Enter State">
		</p>
		<p>
			<label>Zip: </label>
			<input type="text" name="zip" id="zip" placeholder="Enter Zip">
		</p>
		<p>
			<input type="submit" value="add" >
	</form>

</body>
</html>
