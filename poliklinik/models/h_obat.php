<?php 
	include '../config/crud.php';
	$proses->hapus("obat","kodeobat = '$_POST[id]'");
	echo "1";
 ?>