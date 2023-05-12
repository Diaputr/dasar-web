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
		session_start();
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "login";
		header("Location:homeSession.php");
	} else {
		header("Location:sessionLoginForm.php?error=failed");
	}
?>