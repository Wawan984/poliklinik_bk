<?php 
	include '../config/crud.php';
	$proses->edit("pasien","	nama = '$_POST[nama]',
								alamat = '$_POST[alamat]',
								gender = '$_POST[gender]',
								umur = '$_POST[umur]',
								telepon = '$_POST[telepon]' ","kodepsn = '$_POST[id]'");
	echo "1";
 ?>