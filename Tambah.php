<?php
require_once("koneksi.php");
if(isset($_POST['submit'])){
	$id_barang = $_POST['id_barang'];
	$nama_barang = $_POST['nama_barang'];
	$stok = $_POST['stok'];
	$harga_beli = $_POST['harga_beli'];
	$harga_jual = $_POST['harga_jual'];
	$nama_supplier = $_POST['nama_supplier'];

	$sql_insert = "INSERT INTO penjualan VALUES('$id_barang', '$nama_barang',
'$stok', '$harga_jual', '$harga_beli', '$nama_supplier')";
	mysqli_query($koneksi, $sql_insert);


}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cek Toko Sebelah</title>
	<link rel="stylesheet" type="text/css" href="main2.css">
</head>
<body>
<button><a  href="index.php">Kembali ke Dashboard</a></button>
	<form action="tambah.php" method="POST">
		<center>
			<h1>Tambah Data</h1>
		<table>
		<tr>
			<td>ID Barang</td>
			<td>:</td>
			<td>
				<input type="text" name="id_barang">
			</td>
		</tr>
		<tr>
			<td>Nama Barang</td>
			<td>:</td>
			<td>
				<input type="text" name="nama_barang">
			</td>
		</tr>
		<tr>
			<td>Jumlah Barang</td>
			<td>:</td>
			<td>
				<input type="number" name="stok">
			</td>
		</tr>
		<tr>
			<td>Harga Beli</td>
			<td>:</td>
			<td>
				<input type="text" name="harga_beli">
			</td>
		</tr>
		<tr>
			<td>Harga Jual</td>
			<td>:</td>
			<td>
				<input type="text" name="harga_jual">
			</td>
		</tr>
		<tr>
			<td>Nama Supplier</td>
			<td>:</td>
			<td>
				<input type="text" name="nama_supplier">
			</td>
		</tr>
		</table>
				<button name="submit" type="submit">Submit</button>
			</center>
		</form>

</body>
</html>