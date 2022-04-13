<?php
	include_once("pert6lat1.php");

	$cnn = mysqli_connect(DBHOST,DBUSER,DBPASCODE) or die("koneksi ke DBMS Mysql gagal<br>");
	echo "Koneksi ke DBMS sukses<br>";