<?php

	include_once("koneksi2.php");
	$sql = "CREATE TABLE mhs(
		NIM varchar(8) PRIMARY KEY,
		NAMA varchar(30),
		JURUSAN varchar(20),
		JK varchar(1),
		TGLLAHIR date,
		PASCODE varchar(10)
	);";

	$hsl = mysqli_query($cnn, $sql);

	if($hsl){
		echo "Pembuatan Tabel <strong>mhs</strong> sukses<br>";
	}else{
		echo "Pembuatan Tabel <strong>mhs</strong> gagal<br>";
	}
	mysqli_close($cnn);