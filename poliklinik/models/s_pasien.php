<?php 
	include '../config/crud.php';
	$proses->simpan("pasien"," '$_POST[id_pasien]',
								'$_POST[nama]',
								'$_POST[alamat]',
								'$_POST[gender]',
								'$_POST[umur]',
								'$_POST[telepon]' ");
	echo "1";
 ?>