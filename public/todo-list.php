

<!DOCTYPE html>

<html>
<head>
	<title>TODO List</title>
</head>
<body>

<?php 

	session_start();

	$items = [];

	$filename = 'todo.txt';

	$handle = fopen($filename, 'r');
    $contents = fread($handle, filesize($filename));
    $items = explode("\n", $contents);
    fclose($handle);
    
    

	var_dump($_POST);
	// $newItem = $_POST['newitem'];
	// //load file
	if (isset($_POST["newitem"])){
		$item = $_POST["newitem"];
		array_push($items, $item);
		$string = implode("\n", $items);
		$handle = fopen($filename, 'w+');
		fwrite($handle, $string);
		fclose($handle);
	}


	//remove
	
	if (isset($_GET['remove'])){
		unset($items[$_GET['remove']]);
		$string = implode("\n", $items);
		$handle = fopen($filename, 'w+');
		fwrite($handle, $string);
		fclose($handle);
	}
?>

	<h2>TODO List</h2>
	<ul>
		<?php foreach ($items as $key => $item) {
			$newTodo = $key + 1;
			echo "<li>$item</li>";
?>
			<form method="GET">
				<?php echo "<a href='?remove=$key'>Remove Item</a>"; ?>
			</form>


	<?php } ?>

	</ul>
	

	<form method="POST">
		<input type="text" id="newitem" name="newitem">
		<input type="submit" value="add">
	</form>

</body>
</html>