<?php

require_once("koneksi.php");

$id_barang = $_GET['id_barang'];

$sql_delete = "DELETE FROM penjualan WHERE id_barang = '$id_barang'";
mysqli_query($koneksi, $sql_delete);

header("Location:barang.php");
?>