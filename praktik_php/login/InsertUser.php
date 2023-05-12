<?php  
	include "connection.php"

	$sql = ("INSERT INTO user
			VALUES(1, 'admin', MD5('123'))");

	if (mysqli_query($connect, $sql)) {
		echo "Data berhasil ditambahkan";
	} else {
		echo "Data gagal ditambahkan <br>".mysqli_error($connect);
	}
	
	mysqli_close($connect);	
?>