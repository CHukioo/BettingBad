<?php

$username = $_POST['username'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
$email = $_POST['email'];
$fbuser = $_POST['fbuser'];


	$conn = mysql_connect("localhost", "root", "root");

	$sql = "INSERT INTO user (username, password, email, fbuser)
	VALUES ('".$username."', '".$password."', '".$email."', '".$fbuser."')";

	$sql2 = "SELECT username FROM user WHERE username='".$username."'";

	      
	mysql_select_db('betting_bad');
	$brojac = mysql_query($sql2, $conn);
	$broj = mysql_num_rows($brojac);

	if ($broj == 0) {
		$retval = mysql_query( $sql, $conn );
	   
		if(! $retval ) {
			header('Location: login.php?tocno=2');
		}
		header('Location: register.php?tocno=1');
				// the message
		$msg = "link: http://bettingbad.hol.es/confrim.php?user=".$username;

		// use wordwrap() if lines are longer than 70 characters
		$msg = wordwrap($msg,70);

		// send email
		mail($email,"Confirm",$msg);
		
	}
	else{
		header('Location: register.php?tocno=3');
	}   
	mysql_close($conn);
?>