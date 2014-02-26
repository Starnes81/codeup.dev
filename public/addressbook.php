<?php

$address_book = [[]];

$handle = fopen('address_book.csv', 'w');

foreach ($address_book as $fields) {
	fputcsv(($handle, $fields);
}

fclose($handle);
?>



<!DOCTYPE html>
<html>
<head>
	<title>Addressbook</title>
</head>
<body>
	<table>
		<tr>
			<td>cell</td>
			<td>cell</td>
			<td>cell</td>
			<td>cell</td>
			<td>cell</td>
		</tr>
	</table>

</body>
</html>
