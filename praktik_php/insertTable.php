<?php  
	include "connection.php"

	if ($connect) {
		echo("Koneksi ke MySQL berhasil <br>");
	} else {
		echo("Koneksi ke MySQL gagal <br>".mysqli_connect_error);
	}

	$sql = ("INSERT INTO product
			VALUES(1, 'Pensil', 3000)");

	if (mysqli_query($connect, $sql)) {
		echo "Data berhasil ditambahkan";
	} else {
		echo "Data gagal ditambahkan <br>".mysqli_error($connect);
	}
	
	mysqli_close($connect);	
?>

