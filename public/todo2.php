<!DOCTYPE html>


<?php

	session_start();

	$items =[];

	$filename = 'stufftolearn.txt';

	$handle = fopen($filename, 'r');
	$contents = fread($handle, filesize($filename));
	$items = explode("\n", $contents);
	fclose($handle);

	function file_ops($filename, $items){
		$string = implode("\n", $items);
		$handle = fopen($filename, 'w');
		fwrite($handle, $string);
		fclose($handle);

	}

	if(isset($_POST["newitem"])) {
		$item = $_POST["newitem"];
		array_push($items, $item);
		file_ops($filename, $items);
	}

	if(isset($_GET['remove'])) {
		unset($items[$_GET['remove']]);
		file_ops($filename, $items);
		header("location: todo2.php");
		exit;
	}
?>




<html>
<head>
	<title>To Do List</title>
</head>
<body>

	<h2>To Do List</h2>

	<ul>
		<?php foreach ($items as $key => $item) {
			$addItem = $key +1; 
			echo "<li>$item <a href='?remove=$key'>Remove Item</a></li>" ?>
		<?php } ?>
	</ul>

	<form method="POST">
		<input type="text" id="newitem" name="newitem">
		<input type="submit" value="add">

	</form>


</body>
</html>