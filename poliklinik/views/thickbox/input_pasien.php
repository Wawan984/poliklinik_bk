<?php 
	include '../../config/crud.php';
	$sql4 = $proses->tampil("MAX(kodepsn) as kode","pasien","");
	$dt4 = $sql4->fetch();
	$kode = $dt4['kode'];

	$nu = (int) substr($kode, 3,5);
	$nu++;

	$char = "PSN";
	$newid = $char . sprintf("%05s",$nu);

	@$qr = $proses->tampil("*","pasien","WHERE kodepsn = '$_GET[id]'");
	$dt = $qr->fetch();

	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$judul = "Edit Data pasien";
		$button = "Edit";
		$onclick = "p_e_pasien('$id')";
		$no = "$dt[0]";
	}else{
		$id = "";
		$judul = "Input Data pasien";
		$button = "Tambah";
		$onclick = "tmb_pasien()";
		$no = "$newid";
	}
 ?>
<div class="bg-box">
	<div class="bar">
		<p onclick="thickbox('','exit')">&times;</p>
		<h2><?php echo $judul; ?></h2>
	</div>
	<div class="in-box">
		<p>Kode Pasien</p>
		<input type="text" id="id_pasien" value="<?php echo $no; ?>" readonly>

		<p>Nama</p>
		<input type="text" id="nama" value="<?php echo $dt['nama']; ?>">

		<p>Umur</p>
		<input type="number" id="umur" min="0" value="<?php echo $dt['umur']; ?>">
		<?php 
			if ($dt['gender'] == "Laki-laki") {
				$l = "selected";
				$p = "";
			}elseif ($dt['gender'] == "Perempuan"){
				$l = "";
				$p = "selected";
			}else{
				$l = "";
				$p ="";
			}
		 ?>
		<p>Gender</p>
		<select id="gender">
			<option value="">--PILIH--</option>
			<option value="Laki-laki" <?php echo $l ?>>Laki-laki</option>
			<option value="Perempuan" <?php echo $p ?>>Perempuan</option>
		</select>
		<p>Telepon</p>
		<input type="text" id="telepon" value="<?php echo $dt['telepon']; ?>">

		<p>Alamat</p>
		<textarea id="alamat"><?php echo $dt['alamat']; ?></textarea>

		<button class="btn btn-primary" onclick="<?php echo $onclick; ?>"><?php echo $button; ?></button>
		<button class="btn btn-danger" onclick="thickbox('','exit')">Batal</button>
	</div>
</div>