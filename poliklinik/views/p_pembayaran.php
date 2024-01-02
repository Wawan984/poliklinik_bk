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
	<h1>Laporan Pembayaran</h1>
	<h2>Poliklinik One</h2> 	
</div>

 <table class="tb_isi" cellspacing="0" border="1" width="100%">
 	<thead>
			<tr>
				<th>#</th>
				<th>Nama Pasien</th>
				<th>Nama Dokter</th>
				<th>Tanggal Bayar</th>
				<th>Jumlah Bayar</th>
			</tr>
		</thead>
 	<?php
 		$sql = $proses->tampil("*","pembayaran","WHERE tgl_bayar BETWEEN '$_GET[tgl1]' AND '$_GET[tgl2]'");
 		$no = 1;
		foreach ($sql as $data) {
 	 ?>
 	<tbody>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $data[1]; ?></td>
				<td><?php echo $data[2]; ?></td>
				<td><?php echo $data[3]; ?></td>
				<td><?php echo $data[4]; ?></td>
			</tr>
		</tbody>
		<?php } ?>
 </table>
 <?php 
 	$sql1 = $proses->tampil("SUM(pembayaran.jumlah_bayar)","pembayaran","WHERE pembayaran.tgl_bayar BETWEEN '$_GET[tgl1]' AND '$_GET[tgl2]'");
 	$dt1 = $sql1->fetch();
  ?>
 <table class="tb_isi" cellspacing="0" border="1">
 	<tr>
 		<td width="78%">Total Pendapatan</td>
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