<?php 
	include "../config/crud.php";
	$proses->edit("pendaftaran","	kodedkt = '$_POST[kodedkt]',
									kodepsn = '$_POST[kodepsn]',
									kodeplk = '$_POST[kodeplk]',
									biaya = '$_POST[biaya]',
									status_pasien = '$_POST[status]',
									ket = '$_POST[ket]'","no_pendaftaran = '$_POST[id]' ");
	echo "1";
 ?>