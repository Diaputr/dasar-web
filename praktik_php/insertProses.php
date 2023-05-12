<?php  
	include "koneksi.php";

	$id = $_POST['id'];
	$nama = $_POST['name'];
	$harga = $_POST['price'];
	
    $tmp = $_FILES['url-foto']['tmp_name'];
    $namaFiles = $_FILES['url-foto']['name'];
    $ext = substr(strrchr($namaFiles, '.'), 1);
	$nmFile = date("YmdHis") . '.' . $ext;

	$sql = ("INSERT INTO product
			VALUES('$id', '$nama', '$harga', '$nmFile')");
	move_uploaded_file($tmp, 'uploads/' . date("YmdHis") . '.' . $ext);

	if (mysqli_query($connect, $sql)) {
		echo "Data berhasil ditambahkan ";
		?><a href="homeCRUD.php">Lihat Data</a><?php
	} else {
		echo "Data gagal ditambahkan <br>".mysqli_error($connect);
	}
	
	mysqli_close($connect);	
?>