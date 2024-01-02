<?php 
	include '../config/crud.php';
	$proses->hapus("detail","kodedetail = '$_POST[id]'");
	echo "1";
 ?>