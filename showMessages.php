<?php
	$server = '127.0.0.1';
	$username = 'root';
	$password = '';
	$dbname = 'tet';
	$connect = mysqli_connect($server, $username, $password, $dbname);

	$messages = mysqli_query($connect, "SELECT * FROM `messages`");

	while($row = mysqli_fetch_assoc($messages))
    {
    	if($row['message'] != '') {
    	?>
        	<p class="username-show"><?php if($row['username'] != ''){echo $row['username'];} else {echo "Unnamed";}?></p>
        	<div class="message-show-window">
        		<p class="message-show"><?= $row['message'] ?></p>
        		<p class="time-show"><?= date('H:i', strtotime($row['time'])) ?></p>
        	</div>
        	<form method="POST" id="deleteMessage">
        		<input type="button" id="dagger" onclick = 'deleteMessage(<?=$row["id"]?>)'>
        	</form>
        <?php }
    }