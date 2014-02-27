<?php


class Converstation {

	public $name = ''; //property holds name

	public $lastname = '';

	function say_hello($newline = FALSE){
		$greeting = "Hello {$this->$name} {$this->$lastname}";
		if ($newline == FALSE) {
			return "<p>{$greeting}</p>;";
		} else {
			return $greeting . PHP_EOL;
		}
	}

	function say_Goodbye() {
		return "Goodbye {$this->name} {$this->lastname}";
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
	<title><?= $chat->say_hello(FALSE); ?></title>
</head>
<body>
	<?= $chat->say_hello(); ?>
	<hr>
	<p><?= $chat->say_Goodbye(); ?></p>

</body>
</html>