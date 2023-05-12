<?php  
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$database = "web_db";

	$connect = mysqli_connect($hostname, $username, $password, $database);

	if ($connect) {
		echo("Koneksi ke MySQL berhasil <br>");
	} else {
		echo("Koneksi ke MySQL gagal <br>".mysqli_connect_error);
	}

	$sql = "CREATE TABLE user(
			id INT PRIMARY KEY AUTO_INCREMENT,
			username VARCHAR(20),
			password VARCHAR(50))";

	if (mysqli_query($connect, $sql)) {
		echo "Tabel Product berhasil dibuat";
	} else {
		echo "Tabel Product gagal dibuat <br>".mysqli_error($connect);
	}
	
	mysqli_close($connect);	
?>