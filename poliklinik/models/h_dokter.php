<?php 
	include '../config/crud.php';
	$proses->hapus("dokter","kodedkt = '$_POST[id]'");
	echo "1";
 ?>