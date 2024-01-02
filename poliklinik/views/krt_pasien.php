<?php 
	include "../config/crud.php";
 ?>
 <!DOCTYPE html>
  <html>
  <head>
  	<title>Cetak Kartu Pasien</title>
  </head>
  <body>
  	<div class="kotak">
  		<div class="header">
  			<h3>Kartu Pasien</h3>
  			<h1>Poliklinik One</h1>
  		</div>
  		<div class="isi">
  			<div class="identitas">
  			<?php 
  				$sql = $proses->tampil("*", "pasien","WHERE kodepsn='$_GET[id]'");
  				$data = $sql->fetch();
  			 ?>
  				<table>
  					<tr>
  						<td>Kode Pasien</td>
  						<td>:</td>
  						<td><?php echo $data[0]; ?></td>
  					</tr>
  					<tr>
  						<td>Nama</td>
  						<td>:</td>
  						<td><?php echo $data[1]; ?></td>
  					</tr>
  					<tr>
  						<td>Alamat</td>
  						<td>:</td>
  						<td><?php echo $data[2]; ?></td>
  					</tr>
            <tr>
              <td>Gender</td>
              <td>:</td>
              <td><?php echo $data[3]; ?></td>
            </tr>
            <tr>
              <td>Umur</td>
              <td>:</td>
              <td><?php echo $data[4]; ?></td>
            </tr>
  					<tr>
  						<td>No.Telephone</td>
  						<td>:</td>
  						<td><?php echo $data[5]; ?></td>
  					</tr>
  					<tr>
  						<td colspan="3">
  						</td>
  					</tr>
  				</table>
  			</div>
  		</div>
  	</div>
  </body>
  </html> 
<script type="text/javascript">
	window.load=b_print();
	function b_print(){
		window.print();
	};

</script>
  <style type="text/css">
  *{
  	font-family: segoe ui;
  }
  	.kotak{
  		width: 500px;
  		height: 340px;
  		padding: 5px;
  		border: 1px solid #000;
  	}
  	.header{
  		width: 100%;
  		height: 100px;
      margin-top: 100px;
  		border-bottom: 2px solid #092677;
  		background-color: rgba(32, 65, 163,0.8); 
  	}
  	.foto{
  		width: 130px;
  		height: 160px;
  		float: left;
  		border: 1px solid #000;
      z-index: 999999999999;
  		margin: 10px 0px 10px 10px;
  	}
  	.header h3{
  		text-align: center;
  		margin: -100px 0px 0px 80px;
  		font-weight: 100;
  		font-size: 20px;
  	}
  	.header h1{
  		text-align: center;
  		font-weight: 100;
  		font-size: 35px;
  		margin: -1px 0px 0px 100px;
  	}
  	.identitas table{
  		padding: 10px;
  	}
  </style>