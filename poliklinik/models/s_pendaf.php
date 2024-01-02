<?php 
	include "../config/crud.php";
	$sql = $proses->tampil("kodeplk","dokter","WHERE kodedkt = '$_POST[kodedkt]'");
	$data = $sql->fetch();
	$kodeplk = $data[0];
	$proses->simpan("pendaftaran"," '$_POST[id_pendaf]',
										'$_POST[tgl]',
										'$_POST[kodedkt]',
										'$_POST[kodepsn]',
										'$kodeplk',
										'$_POST[biaya]',
										'$_POST[status]',
										'$_POST[ket]'");
	$proses->simpan("pembayaran","'',
								'$_POST[kodepsn]',
								'$_POST[kodedkt]',
								'$_POST[tgl]',
								'$_POST[jm_bayar]'");
	echo "1";
 ?>