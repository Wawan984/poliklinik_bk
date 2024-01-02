<?php 
	include "../config/crud.php";

	$tm = $proses->tampil("*","pasien","WHERE kodepsn='$_POST[kodepsn]'") or die(mysql_error());
	$hsl = $tm->fetch();
	$ar = array("nama"=>$hsl['nama']);//nama yang depan dr database, belakang dr variabe di ajax variabel
	echo json_encode($ar);
?>