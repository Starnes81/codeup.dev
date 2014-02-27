<?php


class Converstation {

	public $name = ''; //property holds name

	public $lastname = '';

	function say_hello($newline = FALSE) //method says hello to name
	{
		$greeting "Hello {$this->$name} {$this->$lastname";
		if ($newline == FALSE) {
			return $greeting;
		} else {
			return $greeting . PHP_EOL;
		}
	}
}


$chat = new Conversation();


$chat->name = 'Codeup';
$chat->lastname = 'Cohort';


echo $chat->say_hello();
?>


<!DOCTYPE html>
<html>
<head>
	<title><?= $chat->say_hello(); ?></title>
</head>
<body>
	<p><?= $chat->say_hello(); ?></p>

</body>
</html>