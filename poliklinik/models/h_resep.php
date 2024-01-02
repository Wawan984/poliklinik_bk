<?php 
	include '../config/crud.php';
	$proses->hapus("resep","no_resep = '$_POST[id]'");
	$proses->hapus("detail","no_resep = '$_POST[id]'");
	echo "1";
 ?>