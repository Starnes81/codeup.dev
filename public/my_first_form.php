<?php

echo "<p>GET</p>";
var_dump($_GET);

echo "<p>POST</p>";
var_dump($_POST);

?>

<!DOCTYPE html>

<html>
<head>
	<title>My first HTML form</title>
</head>
<body>
    <h1>User Log In</h1>

	<form method="POST" action="">
    <p>
        <label for="username">Username</label>
        <input id="username" name="username" placeholder="Enter user name" value="Steve" type="text">
    </p>
    <p>
        <label for="password">Password</label>
        <input id="password" name="password" placeholder="Enter password" type="password">
    </p>
    <p>
        <button>submit</button> 
    </p>
</form>

 <p>Do you want to save your email?</p>
        <label for="Save"><input type="checkbox" id="Save" name="save[]" value="Save"> Save Email</label>
    <h2>Compose Email</h2>
    <form method="POST" action="">
    <p>
        <label for="From">From</label>
        <input id="From" name="From" placeholder="sender email" type="text">
    </p>
    <p>
        <label for="To">To</label>
        <input id="To" name="To" placeholder="sender email" type="text">
    </p>
   
    <p>
        <label for="Subject">Subject</label>
        <input id="Subject" name="Subject" placeholder="Subject" type="text">
    </p>
    <p>
        <label for="Comments">Comments</label>
        <textarea id="Comments" name="Comments" rows="20" cols="40">Enter text here</textarea>
    </p>
    <p>
        <button>Send Email</button> 
    </p>
</form>

    <form method="POST" action=""> 
    <H3>Multiple Choice Test 1</h3>
    <p>Which is not a vegitable?</p>
      <label for="q1a">
        <input type="radio" id="q1a" name="q1" value="broccoli">
    broccoli
    </label>
        <label for="q1b">
        <input type="radio" id="q1b" name="q1" value="peas">
    peas
    </label>
        <label for="q1c">
        <input type="radio" id="q1c" name="q1" value="carrots">
    carrots
    </label>
        <label for="q1d">
        <input type="radio" id="q1d" name="q1" value="pizza">
    pizza
    </label>
    <p>
    <button>submit</button> 
    </p>
</form>

    <form method="GET" action="">
    <H3>Multiple Choice Test 2</h3>
    <label for="favorite"> Which are you favorite?</label>
        <select id="favorite" name="fav[]" multiple>
            <option value="1">Cars</option>
            <option value="2">Motorcycles</option>
            <option value="3">Boats</option>
            <option value="4">Jets</option>
    </select>
    <p>
    <button>submit</button> 
    </p>
</form>

    <form method="POST" action="">
    <h3>Select Testing</h3>
        <label for="icecream">Do you like Ice Cream? </label>
        <select id="icecream" name="icecream">
            <option value="1">Yes</option>
            <option value="2" selected>No</option>
        </select>
    <p>
    <button>submit</button> 
    </p>
</form>

</body>
</html>