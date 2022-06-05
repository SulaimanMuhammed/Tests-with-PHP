<?php
// karam zeyad hussein kz17018@auis.edu.krd
//bawan hama salih aziz bh17025@auis.edu.krd

// this page is only for checking the usernames and the paswards 
session_start();

?>

<!DOCTYPE html>

<html>

<head>

	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title></title>

</head>

<body>

<?php

$username=$_POST['username'];

$password=$_POST['password'];



$names = array('karam' =>1234 ,'bawan' =>12345, 'sami' =>123456 );

// this code will check if the user is stored in the array.

foreach ($names as $key => $value) {

	// code...

	if ($username==$key && $password==$value) {

		// if the user is in the array it will assign it to a server side where it stored it inside a session. 
		$_SESSION["username"] = $username;

		include 'todo.php';
	
}

}

?>

</body>

</html>