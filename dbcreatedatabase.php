<?php

	include_once("koneksi.php");
	if($cnn){
		$sql = "CREATE DATABASE mahasiswa;";

		$hsl = mysql_query($cnn,$sql);
		if ($hsl){
			echo "DATABASE mahasiswa <strong>sukses</strong> dibuat<br>";
		}else{
			echo "DATABASE mahasiswa <strong>gagal</strong> dibuat<br>";
		}
		mysqli_close($cnn);
	}
