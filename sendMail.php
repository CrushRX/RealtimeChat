<?php
	$server = '127.0.0.1';
	$username = 'root';
	$password = '';
	$dbname = 'tet';
	$connect = mysqli_connect($server, $username, $password, $dbname);

    $username = $_POST['username'];
	$message = $_POST['message'];

	if (isset($username) && isset($message)) { 
		mysqli_query($connect, "INSERT INTO `messages` (`username`, `message`) VALUES ('$username', '$message')");
	}
