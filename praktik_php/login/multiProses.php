<?php  
	include "connection.php";

	$username = $_POST['username'];
	$password = md5($_POST['password']);

	$query = "SELECT * FROM user
			WHERE username = '$username' &&
			password = '$password'";

	$result = mysqli_query($connect, $query);
	$row = mysqli_fetch_array($result);

	if ($row['level'] == "1") {
		header("Location: adminHome.html");
	} else if ($row['level'] == "2") {
		header("Location:guestHome.html");
	} else {
		header("Location: multiLogin.php?error=failed");
	}
?>