<?php  
	include "connection.php";

	$sql = "CREATE TABLE user(
			id INT AUTO_INCREMENT PRIMARY KEY,
			username VARCHAR(20),
			password VARCHAR(50))";

	if (mysqli_query($connect, $sql)) {
		echo "Tabel User berhasil dibuat";
	} else {
		echo "Tabel User gagal dibuat <br>".mysqli_error($connect);
	}
	
	mysqli_close($connect);	
?>