<?php

$address_book = [
	['The White House', '1600 Pennsylvania Avenue NW', 'Washington', 'DC', '20500'],
    ['Marvel Comics', 'P.O. Box 1527', 'Long Island City', 'NY', '11101'],
    ['LucasArts', 'P.O. Box 29901', 'San Francisco', 'CA', '94129-0901']
];


$filename = ('address_book.csv');
function file_operation($filename, $address_book){
		$handle = fopen($filename, 'w');
		foreach ($address_book as $row) {
			fputcsv($handle, $row);
			}
		fclose($handle);
	}


// 	function save_to_file($filename, $rows) {
// 	$handle = fopen($filename, 'w');
// 	fputcsv($handle, $rows);
// 	fclose($handle);
// }

file_operation('address_book.csv',$address_book);

if (!empty($_POST)){
	$name = $_POST['name'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$zip = $_POST['zip'];

	$entry = [$name, $address, $city, $state, $zip];
	array_push($address_book, $entry);

	file_operation('address_book.csv', $address_book);
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
			<? foreach ($address_book as $entry) { ?> 
				<tr>
				<? foreach ($entry as $row) { ?>
					 <td><?= $row ?></td> 
					<? }
					
				} ?>

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
