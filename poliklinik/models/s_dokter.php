<?php 
	include "../config/crud.php";
	$proses->simpan("dokter","	'$_POST[id_dokter]',
								'$_POST[nama]',
								'$_POST[spesialis]',
								'$_POST[alamat]',
								'$_POST[telepon]',
								'$_POST[id_poli]',
								'$_POST[tarif]'");
	echo "1";
 ?>