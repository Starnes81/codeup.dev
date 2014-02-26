<?php

$address_book = [[]];

$filename = 'address_book.csv';
function open_csv($filename){
$handle = fopen($filename, 'c+');
foreach ($address_book as $fields) {
	fputcsv($handle, $fields);
	}
fclose($handle);
}

$address_book = open_csv($filename)

?>

<!DOCTYPE html>
<html>
<head>
	<title>Addressbook</title>
</head>
<body>

	<ul>
	<? foreach ($address_book as $key => $item) {
		$newTodo = $key + 1; ?>
		<?= "<li>" . htmlspecialchars(strip_tags($item)) . " <a href='?remove=$key'>Remove Item</a></li>";
	} ?>
 	
	</ul>

	<form method="$_POST">
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
