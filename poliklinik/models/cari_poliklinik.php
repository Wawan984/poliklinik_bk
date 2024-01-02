<?php 
	include "../config/crud.php";

	$tm = $proses->tampil("*","poliklinik","WHERE kodeplk='$_POST[kodeplk]'") or die(mysql_error());
	$hsl = $tm->fetch();
	$ar = array("namaplk"=>$hsl['namaplk']);//nama yang depan dr database, belakang dr variabe di ajax variabel
	echo json_encode($ar);
?>