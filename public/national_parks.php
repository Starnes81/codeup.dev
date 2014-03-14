<?php


// Get new instance of MySQLi object
$mysqli = @new mysqli('127.0.0.1', 'starnes', 'stuff', 'codeup_mysqli_test_db');

// Check for errors
if ($mysqli->connect_errno) {
    throw new Exception('Failed to connect to MySQL: (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

// $sortCol = $_GET['sort_column'];
// $sortOrder = $_GET['sort_order'];

// Retrieve a result set using SELECT
if(empty($_GET)){
$result = $mysqli->query("SELECT * FROM national_parks");
while ($row[] = $result->fetch_array(MYSQLI_ASSOC)) {}
	array_pop($row);
} else {
	$result = $mysqli->query("SELECT * FROM national_parks ORDER BY {$_GET['sort_column']} {$_GET['sort_order']}");
	while ($row[] = $result->fetch_array(MYSQLI_ASSOC)) {}
		array_pop($row);
}

// Use print_r() to show rows using MYSQLI_ASSOC
?>
<!DOCTTYPE html>
<html>
<head>
	<title>National Parks Data Base</title>
	<style type="text/css">
	a {
		text-decoration: none;
		color: #000;
	}
	table,td {
		
		border: 1px solid #000;
	}
	table {
		border-spacing: 0px;
	}
	</style>
</head>
<body>
	<table>
		<tr class="row">
	    	<td><a>Name</a><a href="?sort_column=name&amp;sort_order=asc">&#x25B2;<a href="?sort_column=name&amp;sort_order=desc">&#x25BC;</td>
	   		<td><a>Location</a><a href="?sort_column=name&amp;sort_order=asc">&#x25B2;<a href="?sort_column=name&amp;sort_order=desc">&#x25BC;</td>
	   		<td><a>Description</a><a href="?sort_column=name&amp;sort_order=asc">&#x25B2;<a href="?sort_column=name&amp;sort_order=desc">&#x25BC;</td>
	    	<td><a>Date Established</a><a href="?sort_column=name&amp;sort_order=asc">&#x25B2;<a href="?sort_column=name&amp;sort_order=desc">&#x25BC;</td>
	   		<td><a>Area in Acreage</a><a href="?sort_column=name&amp;sort_order=asc">&#x25B2;<a href="?sort_column=name&amp;sort_order=desc">&#x25BC;</td>
		</tr>	
<? foreach ($row as $key => $rows) { ?> 
        <tr>
	   		<td><?=$rows['name']?></td>
	   		<td><?=$rows['location']?></td>
	   		<td><?=$rows['description']?></td>
	   		<td><?=$rows['date_established']?></td>
	   		<td><?=$rows['area_in_acres']?></td>
		</tr>
	<?}?>
	</table>

	
  	

</body>
</html>