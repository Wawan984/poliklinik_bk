<?php 
	include '../../config/crud.php';
	$sql4 = $proses->tampil("MAX(no_resep) as kode","resep","");
	$dt4 = $sql4->fetch();
	$kode = $dt4['kode'];

	$nu = (int) substr($kode, 3,5);
	$nu++;

	$char = "RSP";
	$newid = $char . sprintf("%05s",$nu);

	@$qr = $proses->tampil("*","resep","WHERE no_resep = '$_GET[id]'");
	@$dt = $qr->fetch();

	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$judul = "Edit Data resep";
		$button = "Edit";
		$no = $dt[0];
		$date = $dt['tgl_resep'];
	}else{
		$id = "";
		$judul = "Input Data resep";
		$button = "Tambah";
		$no = "$newid";
		$date = date('Y-m-d');
	}
 ?>
<div class="bg-box" style="width: 85%;">
	<div class="bar">
		<p onclick="thickbox('','exit')">&times;</p>
		<h2><?php echo $judul; ?></h2>
	</div>
	<div class="in-box2">
		<table>
			<tr>
				<td>Tanggal</td>
				<td><input type="date" id="tgl" value="<?php echo $date; ?>" placeholder="yy/mm/dd" readonly ></td>
			</tr>
			<tr>
				<td>Kode Resep</td>
				<td><input type="text" id="id_resep" value="<?php echo $no; ?>" readonly ></td>
			</tr>
			<tr>
				<td>Kode Pasien</td>
				<td>
					<input type="text" id="kodepsn" value="<?php echo $dt['kodepsn']; ?>" onkeyup="cari_pasien()">
					<input type="text" id="namapsn" readonly="">
				</td>
			</tr>
			<tr>
				<td>Kode Obat</td>
				<td>
					<input type="text" id="kodeobt" value="<?php echo $dt['kodeobat']; ?>" onkeyup="cari_obat()">
					Nama <input type="text" id="namaobt" readonly="">
					Harga <input type="text" id="harga" readonly="">
				</td>
			</tr>
			<tr>
				<td>Dosis</td>
				<td>
					<input type="number" id="dosis" min="0" style="width: 50px;"> <i style="margin-right: 105px;">/ Hari</i>
					Jumlah Beli <input type="number" min="0" id="jml_beli" style="width: 50px;" onchange="kali()" onkeyup="kali()">
					Sub Total <input type="text" id="sub_total">
					<button class="btn btn-primary" onclick="add_obat_resep()">+</button>
				</td>
			</tr>
		</table>
		<div class="table_dtl">
			
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function () {
		$.ajax({
			url : "views/tabel/tabel_resep.php",
			type : "GET",
			data : {
				id_resep : $("#id_resep").val()
			},
			success:function (data) {
				$(".table_dtl").html(data);
			}
		})
	})
	function kali() {
		var harga = $("#harga").val();
		var jumlah = $("#jml_beli").val();

		jm = harga * jumlah;
		$("#sub_total").val(jm);
	}
</script>