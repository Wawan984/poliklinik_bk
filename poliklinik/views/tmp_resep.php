<?php 
	@include "../config/crud.php";
	@include "config/crud.php";
 ?>
<div class="box-header">
	<h3>Tampil Data Resep</h3>
</div>
<div class="box-body">
	<button class="btn btn-primary" style="float: right;margin: 3px;" onclick="thickbox('views/thickbox/input_resep.php','show')">+Tambah</button>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>#</th>
				<th>Nomor Resep</th>
				<th>Tanggal</th>
				<th>Kode Pasien</th>
				<th>Total Harga</th>
				<th>Bayar</th>
				<th>Kembali</th>
				<th>Action</th>
			</tr>
		</thead>
		<?php
			$no="1";
			$sql = $proses->tampil("*","resep","");
			foreach ($sql as $data) {
		 ?>
		<tbody>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $data[0]; ?></td>
				<td><?php echo $data[1]; ?></td>
				<td><?php echo $data[2]; ?></td>
				<td><?php echo $data[3]; ?></td>
				<td><?php echo $data[4]; ?></td>
				<td><?php echo $data[5]; ?></td>
				<td width="140px">
					<button class="btn btn-danger" onclick="h_resep('<?php echo $data[0]; ?>');">Hapus</button>
				</td>
			</tr>
		</tbody>
		<?php } ?>

	</table>
</div>