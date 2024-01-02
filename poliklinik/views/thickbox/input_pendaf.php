<?php 
	include '../../config/crud.php';
	$sql4 = $proses->tampil("MAX(no_pendaftaran) as kode","pendaftaran","");
	$dt4 = $sql4->fetch();
	$kode = $dt4['kode'];

	$nu = (int) substr($kode, 3,5);
	$nu++;

	$char = "PND";
	$newid = $char . sprintf("%05s",$nu);


	@$qr = $proses->tampil("*","pendaftaran","WHERE no_pendaftaran = '$_GET[id]'");
	@$dt = $qr->fetch();

	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$judul = "Edit Data Pendaftaran";
		$button = "Edit";
		$onclick = "p_e_pendaf('$id')";
		$no = $dt[0];
		$date = $dt['tgl_pendaf'];
	}else{
		$id = "";
		$judul = "Input Data Pendaftaran";
		$button = "Simpan";
		$onclick = "tmb_pendaf()";
		$no = "$newid";
		$date = date('Y-m-d');
	}
 ?>
<div class="bg-box" style="width: 80%;">
	<div class="bar">
		<p onclick="thickbox('','exit')">&times;</p>
		<h2><?php echo $judul; ?></h2>
	</div>
	<div class="in-box2">
		<table>
			<tr>
				<td>No Pendaftaran</td>
				<td><input type="text" id="id_pendaf" value="<?php echo $no; ?>" readonly></td>
			</tr>
			<tr>
				<td>Tanggal Pendaftaran</td>
				<td><input type="date" id="tgl" value="<?php echo $date; ?>" placeholder="yy/mm/dd" readonly></td>
			</tr>
			<tr>
				<td>Kode Dokter</td>
				<td><input type="text" id="kodedkt" value="<?php echo $dt['kodedkt']; ?>" onkeyup="cari_dokter()"></td>
				<td>Nama <input type="text" id="namadkt"></td>
				<td>Tarif <input type="text" id="tarif"></td>
				<td>Jenis <input type="text" id="namaplk" value="<?php echo $dt['namaplk']; ?>"></td>
			</tr>
			<tr>
				<td>Kode Pasien</td>
				<td><input type="text" id="kodepsn" value="<?php echo $dt['kodepsn']; ?>" onkeyup="cari_pasien()"></td>
				<td>Nama <input type="text" id="namapsn"></td>
				<td>Status <input type="text" id="status" value="Aktif" readonly=""></td>
			</tr>
			<tr>
				<td>Biaya</td>
				<td><input type="text" id="biaya" value="<?php echo $dt['biaya']; ?>" onkeyup="tambah()"></td>
				<td>Jumlah Bayar<input type="text" id="jm_bayar" value="<?php echo $dt['jumlah_bayar']; ?>"></td>
			</tr>
		</table>

		<p>Keterangan</p>
		<textarea id="ket"><?php echo $dt['ket']; ?></textarea>

		<button class="btn btn-primary" onclick="<?php echo $onclick; ?>"><?php echo $button; ?></button>
		<button class="btn btn-danger" onclick="thickbox('','exit')">Batal</button>
	</div>
</div>
<script type="text/javascript">
	function tambah() {
		var tarif = $("#tarif").val();
		var biaya = $("#biaya").val();

		jum = parseInt(tarif) + parseInt(biaya);
		$("#jm_bayar").val(jum);
	}
</script>