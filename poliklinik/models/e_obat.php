<?php 
	include "../config/crud.php";
	$proses->edit("obat","	nama = '$_POST[nama]',
							jenis = '$_POST[jenis]',
							kategori = '$_POST[kategori]',
							harga = '$_POST[harga]',
							jumlah = '$_POST[jumlah]'","kodeobat = '$_POST[id]'");
	echo "1";
 ?>