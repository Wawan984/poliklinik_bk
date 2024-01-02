<?php 
	@include "../config/crud.php";
	@include "config/crud.php";
 ?>
<div class="box-header">
	<h3>Tampil Data Dokter</h3>
</div>
<div class="box-body">
	<button class="btn btn-primary" style="float: right;margin: 3px;" onclick="thickbox('views/thickbox/input_dokter.php','show')">+Tambah</button>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>#</th>
				<th>Kode Dokter</th>
				<th>Nama</th>
				<th>Spesialis</th>
				<th>Alamat</th>
				<th>Telepon</th>
				<th>Kode Poliklinik</th>
				<th>Tarif</th>
				<th>Action</th>
			</tr>
		</thead>
		<?php
			$no="1";
			$sql = $proses->tampil("*","dokter","");
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
				<td width="140px">
					<button class="btn btn-warning" onclick="e_dokter('<?php echo $data[0]; ?>');">Edit</button>
					<button class="btn btn-danger" onclick="h_dokter('<?php echo $data[0]; ?>');">Hapus</button>
				</td>
			</tr>
		</tbody>
		<?php } ?>

	</table>
</div>