

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
    
    function save_to_file($filename, $items) {
    	$string = implode("\n", $items);
		$handle = fopen($filename, 'w');
		fwrite($handle, $string);
		fclose($handle);
    }

	// $newItem = $_POST['newitem'];
	// //load file
	if (!empty($_POST["newitem"])){
		$item = $_POST["newitem"];
		array_push($items, $item);
		save_to_file($filename, $items);
	}
	//remove
	if (isset($_GET['remove'])){
		unset($items[$_GET['remove']]);
		save_to_file($filename, $items);
		header("location: todo-list.php");
		exit;
	}
?>
	<h2>TODO List</h2>
	<ul>
		<?php foreach ($items as $key => $item) {
			$newTodo = $key + 1;
			echo "<li>$item <a href='?remove=$key'>Remove Item</a></li>";
} 
?>
	</ul>
		<form method="POST">
			<input type="text" id="newitem" name="newitem" autofocus="autofocus" placeholder="add item">
			<input type="submit" value="add" >
		</form>
</body>
</html>