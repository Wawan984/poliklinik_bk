<?php 
	include "../config/crud.php";

	$tm = $proses->tampil("*","dokter,poliklinik","WHERE dokter.kodedkt='$_POST[kodedkt]' AND poliklinik.kodeplk = dokter.kodeplk ") or die(mysql_error());
	$hsl = $tm->fetch();
	$ar = array("nama"=>$hsl['nama'],"tarif"=>$hsl['tarif'],"namaplk"=>$hsl['namaplk']);//nama yang depan dr database, belakang dr variabe di ajax variabel
	echo json_encode($ar);
?>