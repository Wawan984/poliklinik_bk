<?php 
	@include "../config/crud.php";
	@include "config/crud.php";
 ?>
<div class="box-header">
	<h3>Tampil Data Pendaftaran</h3>
</div>
<div class="box-body">
	<button class="btn btn-primary" style="float: right;margin: 3px;" onclick="thickbox('views/thickbox/input_pendaf.php','show')">+Tambah</button>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>#</th>
				<th>Kode Pendaftaran</th>
				<th>Tanggal</th>
				<th>Kode Dokter</th>
				<th>Kode Pasien</th>
				<th>Kode Poloklinik</th>
				<th>Biaya</th>
				<th>Status</th>
				<th>Keterangan</th>
				<th>Action</th>
			</tr>
		</thead>
		<?php
			$no="1";
			$sql = $proses->tampil("*","pendaftaran","");
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
				<td><?php echo $data[6]; ?></td>
				<td><?php echo $data[7]; ?></td>
				<td width="100px">
					<button class="btn btn-danger" onclick="h_pendaf('<?php echo $data[0]; ?>');">Hapus</button>
				</td>
			</tr>
		</tbody>
		<?php } ?>

	</table>
</div>