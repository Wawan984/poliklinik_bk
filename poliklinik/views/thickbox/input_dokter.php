<?php 
	include '../../config/crud.php';
	$sql4 = $proses->tampil("MAX(kodedkt) as kode","dokter","");
	$dt4 = $sql4->fetch();
	$kode = $dt4['kode'];

	$nu = (int) substr($kode, 3,5);
	$nu++;

	$char = "DKT";
	$newid = $char . sprintf("%05s",$nu);

	@$qr = $proses->tampil("*","dokter","WHERE kodedkt = '$_GET[id]'");
	$dt = $qr->fetch();

	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$judul = "Edit Data Dokter";
		$button = "Edit";
		$onclick = "p_e_dokter('$id')";
		$no = "$dt[0]";
	}else{
		$id = "";
		$judul = "Input Data Dokter";
		$button = "Tambah";
		$onclick = "tmb_dokter()";
		$no = "$newid";
	}
 ?>
<div class="bg-box">
	<div class="bar">
		<p onclick="thickbox('','exit')">&times;</p>
		<h2><?php echo $judul; ?></h2>
	</div>
	<div class="in-box">
		<p>Kode Dokter</p>
		<input type="text" id="id_dokter" value="<?php echo $no; ?>" readonly>

		<p>Nama</p>
		<input type="text" id="nama" value="<?php echo $dt['nama']; ?>">

		<p>Spesialis</p>
		<input type="text" id="spesialis" value="<?php echo $dt['spesialis']; ?>">

		<p>Kode Poliklonik</p>
		<input type="text" id="id_poli" value="<?php echo $dt['kodeplk']; ?>">

		<p>Tarif</p>
		<input type="text" id="tarif" value="<?php echo $dt['tarif']; ?>">

		<p>No Telepon</p>
		<input type="text" id="telepon" value="<?php echo $dt['telepon']; ?>">

		<p>Alamat</p>
		<textarea id="alamat"><?php echo $dt['alamat']; ?></textarea>

		<button class="btn btn-primary" onclick="<?php echo $onclick; ?>"><?php echo $button; ?></button>
		<button class="btn btn-danger" onclick="thickbox('','exit')">Batal</button>
	</div>
</div>