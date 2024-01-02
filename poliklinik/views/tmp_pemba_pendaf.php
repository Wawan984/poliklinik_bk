<div class="box-header">
	<h3>Laporan Pendaftaran</h3>
</div>
<div class="box-body">
	<div class="form-inline">
		<p>Dari Tanggal</p>
		<input type="date" class="form-control" id="tgl1" placeholder="yy/mm/dd">
		<p>Sampai Tanggal</p>
		<input type="date" class="form-control" id="tgl2" placeholder="yy/mm/dd"><br><br>
		<button class="btn btn-primary" onclick="cetak()">Cetak</button>
	</div>
</div>
<script type="text/javascript">
	function cetak() {
		tgl1 = $("#tgl1").val();
		tgl2 = $("#tgl2").val();
		window.open('views/p_pendaf.php?tgl1='+tgl1+"&tgl2="+tgl2);
	}
</script>