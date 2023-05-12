<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<?php  
		session_start();
		if ($_SESSION['status'] == "login") {
			echo "Welcome ".$_SESSION['username'];
	?>
		<br> <a href="sessionLogout.php">Log Out</a>
	<?php  
		} else {
			echo "You are not logged in. Please ";
	?>
		<a href="sessionLoginForm.php">Login</a>
	<?php
		}
	?>
</body>
</html>