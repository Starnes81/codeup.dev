<!DOCTYPE=html>
<?php




if(!empty($_POST['currency'])) {

$input['currency'] = $_POST['currency'];

}

$euros = floatval(.73);

$pounds = floatval(.60);

$pesos = 13;

$result = '';

if (isset($_POST['click1'])){
	$result = $input * $euros;
} 

elseif (isset($_POST['click2'])){
	$result = $input * $pounds;
}

elseif (isset($_POST['click3'])){
	$result = $input * $pesos;

}


?>

<html>
<head>
	<title>Currency Calculator</title>
</head>
<body>
	<h2> Currency Calculator </h2>
<form method="POST" enctype="multipart/form-data" action="/currency.php">
		<p>
			<label>Enter Currency Amount: </label>
			<input type="text" name="currency" id="currency" placeholder="Enter Amount">
		</p>
		<p>Choose conversion: </p>
		<button id="Euros" name="Euros" value="click1">Euros</button>
    	<button id="Pounds" name="Pounds" value="click2">Pounds</button>
    	<button id="Pesos" name="Pesos" value="click3">Pesos</button>

</body>
</html>


