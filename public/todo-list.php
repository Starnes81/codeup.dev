<?php

echo "<p>GET</p>";
var_dump($_GET);

echo "<p>POST</p>";
var_dump($_POST);

?>

<!DOCTYPE html>

<html>
<head>
	<title>TODO List</title>
</head>
<body>
	<h2>TODO List</h2>

	<ol>
		<li>Ride bike</li>
		<li>Edit images</li>
		<li>Go to sleep</li>
	</ol>

	<h2>Add new todo items:</h2>

	<form method="POST" action="">
		<p>
			<label for="item">Enter Item </label>
			<input id="item" name="item" type="text">
		</p>
		<button>Submit</button>
	</form>

</body>
</html>