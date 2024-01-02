<?php 
	include "../../config/crud.php";
	$sql4 = $proses->tampil("MAX(no_resep) as kode","resep","");
	$dt4 = $sql4->fetch();
	$kode = $dt4['kode'];

	$nu = (int) substr($kode, 3,5);
	$nu++;

	$char = "RSP";
	$newid = $char . sprintf("%05s",$nu);

	$query = $proses->tampil("SUM(detail.subtotal)","detail","WHERE no_resep = '$newid'");
	$dat = $query->fetch();

	if (isset($_GET['id_resep'])) {
		$id = $_GET['id_resep'];
	}else{
		$id = $newid;
	}
 ?>
<table class="table table-bordered">
	<tr>
		<th>Kode Resep</th>
		<th>Nama Obat</th>
		<th>Harga Obat</th>
		<th>Jumlah Beli</th>
		<th>Dosis</th>
		<th>Sub Total</th>
		<th>Action</th>
	</tr>
		<?php 
			$sql = $proses->tampil("detail.kodedetail,
									detail.no_resep,
									obat.nama,
									detail.harga,
									detail.jumlah_beli,
									detail.dosis,
									detail.subtotal",

									"detail,obat",

									"WHERE detail.no_resep = '$id' AND detail.kodeobat = obat.kodeobat");
			foreach ($sql as $dts) {
		 ?>
	 <tr>
	 	<td><?php echo $dts[1]; ?></td>
	 	<td><?php echo $dts[2]; ?></td>
		<td><?php echo $dts[3]; ?></td>
	 	<td><?php echo $dts[4]; ?></td>
	 	<td><?php echo $dts[5]; ?></td>
	 	<td><?php echo $dts[6]; ?></td>
		<td width="100px">
	 		<button class="btn btn-danger" onclick="h_detail('<?php echo $dts[0]; ?>','<?php echo $dts[1]; ?>')">Hapus</button>
	 	</td>
	 </tr>
		<?php } ?>
</table>
<table>
	<tr>
		<td>Total Harga</td>
		<td>
			<input type="text" id="t_harga" value="<?php echo $dat[0]; ?>" >
			Bayar <input type="text" id="bayar" onkeyup="kurang()">
			Kembalian <input type="text" id="kembali" readonly="">
		</td>
	</tr>
</table>
		<button class="btn btn-primary" onclick="tmb_resep()">Simpan</button>
		<button class="btn btn-danger" onclick="thickbox('','exit')">Batal</button>
<script type="text/javascript">
	function kurang() {
		var t_harga = $("#t_harga").val();
		var bayar = $("#bayar").val();

		jum = parseInt(bayar) - parseInt(t_harga);
		$("#kembali").val(jum);
	}
</script>