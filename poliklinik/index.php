<?php
	include 'models/login.php';
	if (isset($_SESSION['id'])) {
		if ($_SESSION['level'] == "admin") {
			$admin = "";
			$manager = "hidden";
			$apotek = "hidden";
			$pendaftar = "hidden";
		}else if ($_SESSION['level'] == "manager"){
			$admin = "hidden";
			$manager = "";
			$apotek = "hidden";
			$pendaftar = "hidden";
		}else if ($_SESSION['level'] == "apotek"){
			$admin = "hidden";
			$manager = "hidden";
			$apotek = "";
			$pendaftar = "hidden";
		}else if ($_SESSION['level'] == "pendaftar"){
			$admin = "hidden";
			$manager = "hidden";
			$apotek = "hidden";
			$pendaftar = "";
		}
	}else{
		echo "<script>document.location = 'views/login.php'</script>";
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Andministrator | Poliklinik</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="assets/css/thickbox.css">
	<link rel="stylesheet" type="text/css" href="assets/dist/sweetalert.css">
</head>
<body style="background-color: #ecf0f5;width: 1366px;">
	<div class="bg-thick" hidden>
		
	</div>
	<div class="header">
		<h2>Poliklinik</h2>
	</div>
	<div class="side-menu">
		<div class="avatar">
			<img src="assets/img/user.svg">
			<p><?php echo $_SESSION['level']; ?></p>
		</div>
		<ul>
		<div <?php echo $admin; ?>>
			<a href="?p=beranda"><li>Beranda</li></a>
			<a href="?p=tmp_pasien"><li>Pasien</li></a>
			<a href="?p=tmp_dokter"><li>Dokter</li></a>
			<a href="?p=tmp_obat" ><li>Obat</li></a>
			<a href="#" onclick="toggle()"><li>Laporan</li></a>
				<div id="main" hidden="" style="margin-left: 20px;">
					<a href="?p=tmp_l_pembayaran"><li>Pembayaran</li></a>
					<a href="?p=tmp_pemba_pendaf"><li>Pendaftaran</li></a>
					<a href="?p=tmp_l_obat"><li>Pembayaran Obat</li></a>
				</div>
		</div>
		<div <?php echo $manager; ?>>
			<a href="?p=beranda"><li>Beranda</li></a>
			<a href="#" onclick="toggle()"><li>Laporan</li></a>
				<div id="main" hidden="" style="margin-left: 20px;">
					<a href="?p=tmp_l_pembayaran"><li>Pembayaran</li></a>
					<a href="?p=tmp_pemba_pendaf"><li>Pendaftaran</li></a>
					<a href="?p=tmp_l_obat"><li>Pembayaran Obat</li></a>
				</div>
		</div>
		<div <?php echo $apotek; ?>>
			<a href="?p=beranda"><li>Beranda</li></a>
			<a href="?p=tmp_obat" ><li>Obat</li></a>
			<a href="?p=tmp_resep"><li>Resep</li></a>
			<a href="?p=tmp_pembayaran"><li>Pembayaran</li></a>
		</div>
		<div <?php echo $pendaftar; ?>>
			<a href="?p=tmp_pasien"><li>Pasien</li></a>
			<a href="?p=tmp_pendaf"><li>Pendaftaran</li></a>
			<a href="?p=tmp_pembayaran"><li>Pembayaran</li></a>
		</div>
			<a href="models/logout.php"><li>Logout</li></a>
		</ul>
	</div>
	<div class="content">
		<?php 
			if (isset($_GET['p'])) {
				include "views/".$_GET['p'].".php";
			}else{
				include "views/beranda.php";
			}
		 ?>
	</div>
</body>
<script type="text/javascript" src="assets/js/function.js"></script>
<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>
<script type="text/javascript" src="assets/dist/sweetalert.min.js"></script>
<script type="text/javascript" src="models/js/proses.js"></script>
<script type="text/javascript">
	function toggle() {
		$("#main").toggle(400);
	}
</script>
</html>