<!DOCTYPE html>

<?php 


$filename = 'todo.txt';
function open_file ($filename){
$handle = fopen($filename, 'r');
$contents = fread($handle, filesize($filename));
$items = explode("\n", $contents);
fclose($handle);
return $items;

}
//fiel operation 
function save_to_file($filename, $items) {
	$string = implode("\n", $items);
	$handle = fopen($filename, 'w');
	fwrite($handle, $string);
	fclose($handle);
}
//work on this later
// if(filesize($filename) > 0) ?  {
// 	$items = (filesize($filename));
// }

$items = open_file($filename);
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
	header("Location: todo-list.php");
	exit;
}

if (count($_FILES) > 0 && $_FILES['file1']['error'] == 0) {
	$upload_dir = '/vagrant/sites/codeup.dev/public/uploads/';
	$new_file = basename($_FILES['file1']['name']);
	$saved_filename = $upload_dir . $new_file;
	move_uploaded_file($_FILES['file1']['tmp_name'], $saved_filename);
    
    $addFile = open_file($new_file);
	foreach ($addFile as $key => $item) {
        array_push($items, $addFile[$key]);
        save_to_file($filename, $items);

    }

}


var_dump($_FILES);
?>

<html>
<head>
	<title>TODO List</title>
</head>
<body>

<h2>TODO List</h2>
<ul>
	<?php foreach ($items as $key => $item) {
		$newTodo = $key + 1;
		echo "<li>$item <a href='?remove=$key'>Remove Item</a></li>";
} 

		if (isset($saved_filename)) {
		echo "<p>You can download your file <a href='/uploads/{$new_file}'>here</a>.</p>";
}
 
?>
</ul>
	<form method="POST" enctype="multipart/form-data" action="/todo-list.php">
		<p>
		<input type="text" id="newitem" name="newitem" autofocus="autofocus" placeholder="add item">
		<input type="submit" value="add" >
		</p>
		<p>
		<label for="file1">add file:</label>
		<input type="file" id="file1" name="file1" >
		</p>
		<p>
		<input type="submit" value="Upload" >
		</p>
	</form>
</body>
</html>