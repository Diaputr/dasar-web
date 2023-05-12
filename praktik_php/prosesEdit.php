<?php  
	include "koneksi.php";

	$id = $_POST['id'];
	$nama = $_POST['name'];
	$harga = $_POST['price'];

    $tmp = $_FILES['url-foto']['tmp_name'];
    $namaFiles = $_FILES['url-foto']['name'];
    $ext = substr(strrchr($namaFiles, '.'), 1);
	$nmFile = date("YmdHis") . '.' . $ext;

	$query = "UPDATE product SET product_name = '$nama',
	harga = '$harga' WHERE id = '$id'";

	move_uploaded_file($tmp, 'uploads/' . date("YmdHis") . '.' . $ext);

	$result = mysqli_query($connect, $query);

	if ($result) {
		echo "Berhasil update data";
?>
	<a href="homeCRUD.php">Lihat Data</a>
<?php
	} else {
		echo "Gagal update data ".mysqli_error($connect);
	}
?> 