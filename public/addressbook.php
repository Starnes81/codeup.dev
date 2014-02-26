<?php

$address_book = [[]];


function open_csv(){
$handle = fopen('address_book.csv', 'w');
foreach ($address_book as $fields) {
	fputcsv($handle, $fields);
	}
fclose($handle);
}



?>

<!DOCTYPE html>
<html>
<head>
	<title>Addressbook</title>
</head>
<body>
	<form method="$_POST">
		<p>
		<label>Enter Name: </label>
		<input type="text" name="Name" id="item1">
		</p>
		<p>
		<label>Enter Address: </label>
		<input type="text" name="Adrress" id="item2">
		</p>
		<p>
		<label>Enter City: </label>
		<input type="text" name="City" id="item3">
		</p>
		<p>
		<label>Enter State: </label>
		<input type="text" name="State" id="item4">
		</p>
		<p>
		<label>Enter Zip: </label>
		<input type="text" name="State" id="item5">
		</p>
		<p>
		<input type="submit" value="add" >
	</form>
	<table>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
	</table>

</body>
</html>
