<?php 
	include '../config/crud.php';
	$proses->hapus("pendaftaran","no_pendaftaran = '$_POST[id]' ");
	echo "1";
 ?>