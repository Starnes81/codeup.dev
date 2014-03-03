<?php

class Conversation {

	public $name = '';

	function __construct($name = '') {
		$this->name = $name;
	}

	function say_hello($new_line = FALSE){

		$greeting = "Hello {$this->name}";

		return $new_line == TRUE ? "$gretting\n" : $gretting;

	}
}

class LocationConversation extends Conversation {

	public $location ='';

	function say_hello($new_line = FALSE) {

		$greeting = "Hi there {$this->name}";

		return $new_line == TRUE ? "$greeting\n" : $greeting;
	}

	function say_hello_from_location($new_line = FALSE) {

		$greeting = "{$this->say_hello()} from {$this->location}";

		return $new_line == TRUE ? "$greeting\n" : $greeting;
	}

}

$local_chat = new LocationConversation('Codeup');

echo $local_chat->say_hello(TRUE);

$local_chat->location = 'San Antonio';

echo $local_chat->say_hello_from_location(TRUE);
