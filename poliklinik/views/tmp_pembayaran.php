<?php 
	@include "../config/crud.php";
	@include "config/crud.php";
 ?>
<div class="box-header">
	<h3>Tampil Pembayaran</h3>
</div>
<div class="box-body">
	<button class="btn btn-primary" style="float: right;margin: 3px;" onclick="thickbox('views/thickbox/input_pendaf.php','show')">+Tambah</button>
	<table class="table table-bordered">
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
			$no="1";
			$sql = $proses->tampil("pasien.nama,dokter.nama,pembayaran.tgl_bayar,pembayaran.jumlah_bayar","pembayaran,dokter,pasien","WHERE pembayaran.kodepsn = pasien.kodepsn AND pembayaran.kodedkt = dokter.kodedkt");
			foreach ($sql as $data) {
		 ?>
		<tbody>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $data[0]; ?></td>
				<td><?php echo $data[1]; ?></td>
				<td><?php echo $data[2]; ?></td>
				<td><?php echo $data[3]; ?></td>
			</tr>
		</tbody>
		<?php } ?>

	</table>
</div>