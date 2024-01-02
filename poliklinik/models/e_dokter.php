<?php 
	include "../config/crud.php";
	$proses->edit("dokter","	nama = '$_POST[nama]',
								spesialis = '$_POST[spesialis]',
								alamat = '$_POST[alamat]',
								telepon = '$_POST[telepon]',
								kodeplk = '$_POST[id_poli]',
								tarif = '$_POST[tarif]'"," kodedkt = '$_POST[id]'");
	echo "1";
 ?>