<?php 
	@include "../config/crud.php";
	@include "config/crud.php";
 ?>
<div class="box-header">
	<h3>Tampil Data Pasien</h3>
</div>
<div class="box-body">
	<button class="btn btn-primary" style="float: right;margin: 3px;" onclick="thickbox('views/thickbox/input_pasien.php','show')">+Tambah</button>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>#</th>
				<th>Kode Pasien</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Gender</th>
				<th>Umur</th>
				<th>Telepon</th>
				<th>Action</th>
			</tr>
		</thead>
		<?php
			$no="1";
			$sql = $proses->tampil("*","pasien","");
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
				<td width="220px">
					<button class="btn btn-warning" onclick="e_pasien('<?php echo $data[0]; ?>');">Edit</button>
					<a href="views/krt_pasien.php?id=<?php echo $data[0]; ?>" target="_blank"><button class="btn btn-info">Cetak</button></a>
					<button class="btn btn-danger" onclick="h_pasien('<?php echo $data[0]; ?>');">Hapus</button>
				</td>
			</tr>
		</tbody>
		<?php } ?>

	</table>
</div>