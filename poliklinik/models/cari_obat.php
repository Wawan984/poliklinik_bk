<?php 
	include "../config/crud.php";

	$tm = $proses->tampil("*","obat","WHERE kodeobat='$_POST[kodeobat]'") or die(mysql_error());
	$hsl = $tm->fetch();
	$ar = array("nama"=>$hsl['nama'],"harga"=>$hsl['harga']);//nama yang depan dr database, belakang dr variabe di ajax variabel
	echo json_encode($ar);
?>