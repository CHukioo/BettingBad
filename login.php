<?php 

session_start();

if ($_SESSION['usernameMy'] == null && $_SESSION['passwordMy'] == null) {
	
}
else {
	header('Location: lprocess.php');
}

$gresenPass = $_GET['tocno'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>BettingBad- Singup</title>
	<link rel="stylesheet" type="text/css" href="styles/login.css">
	<link rel="icon" href="images/handshake.png" type="image/gif" sizes="16x16">
</head>
<header>
		<img src="images/handshake.png" class="logo">
	</header>
<body>
	<div class="container">
		<form action="lprocess.php" method="POST">
			<label>Username:</label><br>
			<input type="text" name="username" required><br>
			<label>Password:</label><br>
			<input type="password" name="password" required><br>
			<input type="submit" value="Login" class="button">
			<?php
				if ($gresenPass == 1) {
					echo "<br><label><strong>WRONG USERNAME OR PASSWORD!<strong></label>";
				}
			 ?>
			<br><br>
			<a href="forget.php" class="forget">Forget password?</a>
		</form>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script> $('#confirm_password').on('keyup', function () {
	    if ($(this).val() == $('#password').val()) {
	        $('#message').html('Matching!').css('color', 'green');
	    } else $('#message').html('Not matching!').css('color', 'red');
	    });
    </script>
</body>
</html>