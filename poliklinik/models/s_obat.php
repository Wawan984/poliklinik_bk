<?php 
	include "../config/crud.php";
	$proses->simpan("obat","	'$_POST[id_obat]',
								'$_POST[nama]',
								'$_POST[jenis]',
								'$_POST[kategori]',
								'$_POST[harga]',
								'$_POST[jumlah]'");
	echo "1";
 ?>