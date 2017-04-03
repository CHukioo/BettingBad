
<!DOCTYPE html>
<html>
<head>
	<title>BettingBad- Singup</title>
	<link rel="stylesheet" type="text/css" href="styles/register.css">
	<link rel="icon" href="images/handshake.png" type="image/gif" sizes="16x16">
</head>
<header>
		<img src="images/handshake.png" class="logo">
	</header>
<body>
	<div class="container">
		<form action="rprocess.php" method="POST">
			<label>Username:</label><br>
			<input type="text" name="username" required><br>
			<label>Email:</label><br>
			<input type="email" name="email" required><br>
			<label>Password:</label><br>
			<input type="password" name="password" required minlength="6" maxlength="15" id="password"><br>
			<label>Confirm Password:&#160;&#160;</label><span id='message'></span><br>
			<input type="password" name="password2" required minlength="6" maxlength="15" id="confirm_password"><br>
			<label>Facebook usernmae:</label><br>
			<input type="text" name="fbuser" required><br>
			<input type="submit" value="Submit" class="button">
			<?php
				if ($_GET['tocno'] == 1) {
					echo "<br><label>Registration successful!</label>";
				}
				if ($_GET['tocno'] == 2) {
					echo "<br><label>Registration unsuccessful!</label>";
				}
				if ($_GET['tocno'] == 3) {
					echo "<br><label>Username exists!</label>";
				}

			?>
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