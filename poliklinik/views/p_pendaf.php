<?php 
	include "../config/crud.php";
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="header">
	<h1>Laporan Pendaftaran</h1>
	<h2>Poliklinik One</h2> 	
</div>

 <table class="tb_isi" cellspacing="0" border="1" width="100%">
 	<thead>
			<tr>
				<th>#</th>
				<th>Tanggal Pendaftaran</th>
				<th>Dokter</th>
				<th>Pasien</th>
				<th>Poliklinik</th>
				<th>Biaya</th>
				<th>Status</th>
				<th>Keterangan</th>
			</tr>
		</thead>
 	<?php
 		$sql = $proses->tampil("*","pendaftaran,pasien,dokter,poliklinik","WHERE pendaftaran.tgl_pendaf BETWEEN '$_GET[tgl1]' AND '$_GET[tgl2]' AND dokter.kodedkt = pendaftaran.kodedkt AND pasien.kodepsn = pendaftaran.kodepsn AND poliklinik.kodeplk = pendaftaran.kodeplk");
 		$no = 1;
		foreach ($sql as $data) {
 	 ?>
 	<tbody>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $data[1]; ?></td>
				<td><?php echo $data['nama']; ?></td>
				<td><?php echo $data[9]; ?></td>
				<td><?php echo $data['namaplk']; ?></td>
				<td><?php echo $data[5]; ?></td>
				<td><?php echo $data[6]; ?></td>
				<td><?php echo $data[7]; ?></td>
			</tr>
		</tbody>
		<?php } ?>
 </table>
 <?php 
 	$sql1 = $proses->tampil("SUM(pendaftaran.biaya)","pendaftaran","WHERE pendaftaran.tgl_pendaf BETWEEN '$_GET[tgl1]' AND '$_GET[tgl2]'");
 	$dt1 = $sql1->fetch();
  ?>
 <table class="tb_isi" cellspacing="0" border="1">
 	<tr>
 		<td width="72.5%">Total Biaya</td>
 		<td>Rp.<?php echo number_format($dt1[0],2,",","."); ?></td>
 	</tr>
 </table>
 <p class="info">Periode <?php echo date('d F Y', strtotime($_GET['tgl1'])); ?> - <?php echo date('d F Y', strtotime($_GET['tgl2'])); ?></p>
	<div class="ttd">
 	<p style="float: right;margin-right: 100px;">Yang Mengetahui</p><br>
		
	</div>
</body>
</html>
<style type="text/css">
	*{
 		font-family: segoe UI;
	}
 	.tb_isi{
 		width: 98%;
 		text-align: center;
 		margin: 0px auto;
 	}
 	.tb_isi th{
 		height: 45px;
 	}
 	.tb_isi td{
 		height: 35px;
 	}
 	.header h1{
 		text-align: center;
 		font-weight: 100;
 		font-size: 40px;
 		margin: 0px;

 	}
 	.header h2{
 		text-align: center;
 		margin:0px;
 		font-weight: 100;
 		margin: 0px 0px 20px 0px;
 	}
 	.info{
 		color:#d64242;
 		font-size: 13px;
 		margin: 10px 0px 0px 10px;
 		font-style:italic;
 	}
 	.ttd{
 		width: 250px;
 		height: 150px;
 		float: right;
 		border-bottom: 1px solid #111111;
 	}
</style>
 <script type="text/javascript">
 	window.load=cetak();
 	function cetak() {
 		window.print();
 	}
 </script>