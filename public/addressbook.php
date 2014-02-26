<?php

$address_book = [
	['The White House', '1600 Pennsylvania Avenue NW', 'Washington', 'DC', '20500'],
    ['Marvel Comics', 'P.O. Box 1527', 'Long Island City', 'NY', '11101'],
    ['LucasArts', 'P.O. Box 29901', 'San Francisco', 'CA', '94129-0901']
];

$filename = ('address_book.csv');
function open_csv($filename){
	if(filesize($filename) == 0) {
			return array();
		}
		$handle = fopen($filename, 'c+');
		foreach ($address_book as $fields) {
			fputcsv($handle, $fields);
			}
		fclose($handle);
	}


	function save_to_file($filename, $address_book) {
	$fields = implode("\n", $address_book);
	$handle = fopen($filename, 'w');
	fputcsv($handle, $fields);
	fclose($handle);
}


$address_book = open_csv($filename);

if (!empty($_POST["item1"])){
	$item = $_POST["item1"];
	array_push($address_book, $fields);
	save_to_file($filename, $fields);
}

var_dump($_POST);

?>

<!DOCTYPE html>

<html>
<head>
	<title>Addressbook</title>
</head>
<body>

	<h2>Address Book</h2>

	<table>
		<tr>
	<? foreach ($address_book as $key => $field) {
		$newTodo = $key + 1; ?>
		<?= "<td>" . strip_tags($field) . "</td>";
	} ?>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
	</table>
	

	<form method="POST">
		<p>
			<label>Enter Name: </label>
			<input type="text" name="Name" id="item1" placeholder="Enter Name">
		</p>
		<p>
			<label>Enter Address: </label>
			<input type="text" name="Adrress" id="item2" placeholder="Enter Address">
		</p>
		<p>
			<label>Enter City: </label>
			<input type="text" name="City" id="item3" placeholder="Enter City">
		</p>
		<p>
			<label>Enter State: </label>
			<input type="text" name="State" id="item4" placeholder="Enter State">
		</p>
		<p>
			<label>Enter Zip: </label>
			<input type="text" name="State" id="item5" placeholder="Enter Zip">
		</p>
		<p>
			<input type="submit" value="add" >
	</form>

</body>
</html>
