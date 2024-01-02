<?php 
	include "../config/crud.php";
	$proses->simpan("detail","
								'',
								'$_POST[id_resep]',
								'$_POST[kodeobt]',
								'$_POST[harga]',
								'$_POST[jml_beli]',
								'$_POST[dosis]',
								'$_POST[sub_total]' ");
	echo "1";
 ?>