<?php
	$server = '127.0.0.1';
	$username = 'root';
	$password = '';
	$dbname = 'tet';
	$connect = mysqli_connect($server, $username, $password, $dbname);
	$daggerId = $_POST['id'];

	mysqli_query($connect, "DELETE FROM `messages` WHERE `id` = '$daggerId'");
