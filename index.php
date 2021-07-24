<?php
require 'fungsi.php';
require 'cek.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UAS Akmal Hafif Alkafi</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <span class="text1">Welcome In</span>
        <span class="text1">My Website</span>
    </div>
    <nav>
        <input type="checkbox"id="check">
        <label for="check">
            <i class="material-icons"id="btn">subject</i>
            <i class="material-icons"id="close">close</i>
        </label>
        <h2> Dashboard</h2>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="Tambah.php">Tambah Barang Toko</a></li>
            <li><a href="barang.php">Data Barang Masuk</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
    <div class="footer-buttom"style="color:black;margin-top:45%;margin-right:35%;">
			<ul>
				&copy; copyright | Designed By Akmal Hafif Alkafi<a href="copyright"></a>
			</ul>
		</div>
</body>
</html>