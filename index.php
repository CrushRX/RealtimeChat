<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<title>Document</title>
</head>
<body>
	
	<div class="messages">
		<div class="messages-t">
		
		</div>
		<div class="messages-window" id="messages-window">
			<div id="messagesi">
				
			</div>
		</div>
		<div class="messages-b">
		<form method="POST" id="sendForm">
				<input type="text" name="message" id="message" required>
				<input type="button" id="send">
			</form>
	</div>
	</div>
	<div class="user">
		<div class="center">
			<p>Введите логин</p>
			<input form="sendForm" type="text" name="username" id="username" maxlength="25">
		</div>
	</div>
	
	<script src="scripts/script.js"></script>
</body>
</html>