<!DOCTYPE html>
<html>
	<title>Edit Data</title>
</head>
<body>
	<?php 
		include "koneksi.php";

		$id = $_GET['id'];
		$query = "SELECT * FROM product WHERE id = '$id'";
		$result = mysqli_query($connect, $query);
	?>
	<table>
		<form enctype="multipart/form-data" method="POST" action="prosesEdit.php">
			<?php  
				while ($row = mysqli_fetch_array($result)) {
			?>
			<tr>
				<td>ID</td>
				<td><input type="number" name="id" value="<?php echo $row['id']; ?>" readonly></td>
			</tr>
			<tr>
				<td>Nama Produk</td>
				<td><input type="text" name="name" value="<?php echo $row['product_name']; ?>"></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input type="number" name="price" value="<?php echo $row['harga']; ?>"></td>
			</tr>
			<tr>
				<td>Foto</td>
				<td><input type="file" name="url-foto" value="<?php echo $row['url-foto']; ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input value="<?php echo $row['url-foto'] ?>" name="tnmFile" type="text" readonly></td>
			</tr>
			<tr>
				<td><img width="200px" src="uploads/<?php echo $row['url-foto'] ?>" alt="Foto tidak ditemukan" width="90%"></td>
			</tr>
			<tr>
				<td><input type="submit" name="edit" value="Edit Data"></td>
			</tr>
			<?php
				}
			?>
		</form>
	</table>
</body>
</html>
<head>