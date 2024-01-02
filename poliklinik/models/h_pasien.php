<?php
	include "../config/crud.php";
	$proses->hapus("pasien","kodepsn = '$_POST[id]' ");
	echo "1";
?>