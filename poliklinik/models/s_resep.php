<?php 
	include '../config/crud.php';
	$proses->simpan("resep","	'$_POST[id_resep]',
								'$_POST[tgl]',
								'$_POST[kodepsn]',
								'$_POST[t_harga]',
								'$_POST[bayar]',
								'$_POST[kembali]'");
	echo "1";
 ?>