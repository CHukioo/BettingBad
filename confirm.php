<?php
$user = $_GET['user'];

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "betting_bad";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

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
			<?php $sql = "UPDATE user SET confirm=1 WHERE username='".$user."'";

				if ($conn->query($sql) === TRUE) {
				    echo "<h2>CONFIRMED!</h2>";
				} else {
				    echo "<h2>UNCONFIRMED</h2>" . $conn->error;
				}

				$conn->close();
				?>
		</div>
	</body>
</html>