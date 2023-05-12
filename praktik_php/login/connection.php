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
?>