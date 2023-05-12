<?php  
	include "connection.php";

	$username = $_POST['username'];
	$password = md5($_POST['password']);

	$query = "SELECT * FROM user
			WHERE username = '$username' &&
			password = '$password'";

	$result = mysqli_query($connect, $query);
	$check = mysqli_num_rows($result);

	if ($check > 0) {
		header("Location: adminHome.html");
	} else {
		var_dump($check);
		header("Location: loginForm.php?error=failed");
	} 
?>