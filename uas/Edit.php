<?php

require_once("koneksi.php");

$id_barang = $_GET['id_barang'];
$sql_cari = "SELECT * FROM penjualan WHERE id_barang = '$id_barang'";
$query = mysqli_query($koneksi, $sql_cari);
$result = mysqli_fetch_assoc($query);

if(isset($_POST['submit'])){
	$id_barang = $_POST['id_barang'];
	$nama_barang = $_POST['nama_barang'];
	$stok = $_POST['stok'];
	$harga_beli = $_POST['harga_beli'];
	$harga_jual = $_POST['harga_jual'];
	$nama_supplier = $_POST['nama_supplier'];
	
	$sql_edit = "UPDATE penjualan SET nama_barang = '$nama_barang', stok =
'$stok', harga_beli = '$harga_beli', harga_jual = '$harga_jual', nama_supplier
= '$nama_supplier' WHERE id_barang = '$id_barang'";
	mysqli_query($koneksi, $sql_edit);
	
	header("Location:barang.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Cek Toko Sebelah</title>
	<link rel="stylesheet" type="text/css" href="main2.css">
</head>
<body>

	<form action="edit.php" method="POST">
		<center>
				<h1>Edit Data</h1>
		<table>
			<tr>
				<td>ID Barang</td>
				<td>:</td>
				<td>
					<input type="text" name="id_barang" value="<?=
$result['id_barang']; ?>">
			</td>
			</tr>	
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>
					<input type="text" name="nama_barang" value="<?=
$result['nama_barang']; ?>">
				</td>
			</tr>
			<tr>
				<td>Jumlah</td>
				<td>:</td>
				<td>
					<input type="number" name="stok" value="<?=
$result['stok']; ?>">
				</td>
			</tr>
			<tr>
				<td>Harga Beli</td>
				<td>:</td>
				<td>
					<input type="text" name="harga_beli" value="<?=
$result['harga_beli']; ?>">
				</td>
			</tr>
			<tr>
				<td>Harga Jual</td>
				<td>:</td>
				<td>
					<input type="text" name="harga_jual" value="<?=
$result['harga_jual']; ?>">
				</td>
			</tr>
			<tr>
				<td>Nama Supplier</td>
				<td>:</td>
				<td>
					<input type="text" name="nama_supplier" value="<?=
$result['nama_supplier']; ?>">
				</td>
			</tr>
		</table>
		<button name="submit" type="submit">Ubah Data</button>
		</center>
	</form>

</body>
</html>