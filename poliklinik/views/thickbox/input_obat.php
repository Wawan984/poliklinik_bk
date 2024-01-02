<?php 
	include '../../config/crud.php';
	$sql4 = $proses->tampil("MAX(kodeobat) as kode","obat","");
	$dt4 = $sql4->fetch();
	$kode = $dt4['kode'];

	$nu = (int) substr($kode, 3,5);
	$nu++;

	$char = "OBT";
	$newid = $char . sprintf("%05s",$nu);

	@$qr = $proses->tampil("*","obat","WHERE kodeobat = '$_GET[id]'");
	$dt = $qr->fetch();

	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$judul = "Edit Data Obat";
		$button = "Edit";
		$onclick = "p_e_obat('$id')";
		$no = "$dt[0]";
	}else{
		$id = "";
		$judul = "Input Data Obat";
		$button = "Tambah";
		$onclick = "tmb_obat()";
		$no = "$newid";
	}
 ?>
<div class="bg-box">
	<div class="bar">
		<p onclick="thickbox('','exit')">&times;</p>
		<h2><?php echo $judul; ?></h2>
	</div>
	<div class="in-box">
		<p>Kode Obat</p>
		<input type="text" id="id_obat" value="<?php echo $no; ?>" readonly>

		<p>Nama</p>
		<input type="text" id="nama" value="<?php echo $dt['nama']; ?>">

		<?php 
			if ($dt['jenis'] == "Padat") {
					$p = "selected";
					$c = "";
					$sp = "";
				}elseif ($dt['jenis'] == "Cair") {
					$c = "selected";
					$p = "";
					$sp = "";
				}elseif ($dt['jenis'] == "Semi Padat") {
					$p = "";
					$c = "";
					$sp = "selected";
				}else{
					$p = "";
					$c = "";
					$sp = "";
				}
		 ?>
		<p>Jenis</p>
		<select id="jenis">
			<option value="">--PILIH--</option>
			<option value="Padat" <?php echo $p ?> >Padat</option>
			<option value="Cair" <?php echo $c ?>>Cair</option>
			<option value="Semi Padat" <?php echo $sp ?>>Semi Padat</option>
		</select>

		<?php 
			if ($dt['kategori'] == "A") {
					$a = "selected";
					$b = "";
					$c1 = "";
					$d = "";
				}elseif ($dt['kategori'] == "B") {
					$a = "";
					$b = "selected";
					$c1 = "";
					$d = "";
				}elseif ($dt['kategori'] == "C") {
					$a = "";
					$b = "";
					$c1 = "selected";
					$d = "";
				}elseif ($dt['kategori'] == "D") {
					$a = "";
					$b = "";
					$c1 = "";
					$d = "selected";
				}else{
					$a = "selected";
					$b = "";
					$c1 = "";
					$d = "";
				}
		 ?>

		<p>Kategori</p>
		<select id="kategori">
			<option value="">--PILIH--</option>
			<option value="A" <?php echo $a ?> >A</option>
			<option value="B" <?php echo $b ?> >B</option>
			<option value="C" <?php echo $c1 ?>>C</option>
			<option value="D" <?php echo $d ?>>D</option>
		</select>

		<p>Harga</p>
		<input type="text" id="harga" value="<?php echo $dt['harga']; ?>">

		<p>Jumlah Obat</p>
		<input type="number" id="jumlah" min="0" value="<?php echo $dt['jumlah']; ?>">

		<button class="btn btn-primary" onclick="<?php echo $onclick; ?>"><?php echo $button; ?></button>
		<button class="btn btn-danger" onclick="thickbox('','exit')">Batal</button>
	</div>
</div>