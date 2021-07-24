<?php
require_once("koneksi.php");

$sql_get = "SELECT * FROM penjualan";
$query_penjualan = mysqli_query($koneksi, $sql_get);

$results = [];
while ($row = mysqli_fetch_assoc($query_penjualan)) {
	$results[] = $row;
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Cek Toko Sebelah</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<table>
		<center><p>Data Barang</p>
			<br>
		<button><a class="u" href="tambah.php">Tambah Data</a></button>
		<button><a  href="index.php">Kembali ke Dashboard</a></button>
</center>
	<tr>
		<th>No</th>
		<th>Id Barang</th>
		<th>Nama Barang</th>
		<th>Stok Barang</th>
		<th>Harga Beli</th>
		<th>Harga Jual</th>
		<th>Nama Supplier</th>
		<th>Aksi</th>
	</tr>

	<?php
	$no = 1;
	foreach ($results as $result):
	?>
	<tr>
		<td><?= $no; ?></td>
		<td><?= $result['id_barang'] ?></td>
		<td><?= $result['nama_barang'] ?></td>
		<td><?= $result['stok'] ?></td>
		<td><?= $result['harga_beli'] ?></td>
		<td><?= $result['harga_jual'] ?></td>
		<td><?= $result['nama_supplier'] ?></td>
	<td>
		<a
href="edit.php?id_barang=<?=$result['id_barang']; ?>">Edit</a>
<a
href="hapus.php?id_barang=<?=$result['id_barang'];?>">Hapus</a>
		</td>
	</tr>
	<?php
	$no++;
	endforeach;
	?>
	</td>
</table>
</body>
</html