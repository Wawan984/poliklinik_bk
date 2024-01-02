function tmb_dokter() {
	id_dokter = $("#id_dokter").val();
	nama = $("#nama").val();
	spesialis = $("#spesialis").val();
	id_poli = $("#id_poli").val();
	telepon = $("#telepon").val();
	alamat = $("#alamat").val();
	tarif = $("#tarif").val();
	if (nama == "") {
		alert("Nama Kosong");
		$("#nama").focus();
	}else if (spesialis == "") {
		alert("Spesialis Kosong");
		$("#spesialis").focus();
	}else if (id_poli == "") {
		alert("Kode Poliklinik Kosong");
		$("#id_poli").focus();
	}else if (telepon == "" || telepon.length!= 12 || telepon.match('/^[0-9]+$/')) {
		alert("No Telepon salah");
		$("#telepon").focus();
	}else if (alamat == "") {
		alert("Alamat Kosong");
		$("#alamat").focus();
	}else if (tarif == "") {
		alert("Tarif Kosong");
		$("#tarif").focus();
	}else{
		$.ajax({
			url : "models/s_dokter.php",
			type : "POST",
			data : {
				id_dokter : id_dokter,
				nama : nama,
				spesialis : spesialis,
				id_poli : id_poli,
				telepon : telepon,
				tarif : tarif,
				alamat : alamat
			},
			success:function (msg) {
				if (msg == "1") {
					swal("Berhasil !!","Berhasil Menyimpan Data ","success");
					$(".content").load("views/tmp_dokter.php");
					$(".bg-thick").fadeOut(500);
				}else{
					swal("Gagal !!","Gagal Menyimpan Data ","error");
				}
			}
		})
	}
}
function e_dokter(id) {
	var url = "views/thickbox/input_dokter.php?id="+id;
	thickbox(url,'show');
}
function p_e_dokter(id) {
	nama = $("#nama").val();
	spesialis = $("#spesialis").val();
	id_poli = $("#id_poli").val();
	telepon = $("#telepon").val();
	alamat = $("#alamat").val();
	tarif = $("#tarif").val();
	if (nama == "") {
		alert("Nama Kosong");
		$("#nama").focus();
	}else if (spesialis == "") {
		alert("Spesialis Kosong");
		$("#spesialis").focus();
	}else if (id_poli == "") {
		alert("Kode Poliklinik Kosong");
		$("#id_poli").focus();
	}else if (telepon == "" || telepon.length!= 12 || telepon.match('/^[0-9]+$/')) {
		alert("No Telepon salah");
		$("#telepon").focus();
	}else if (alamat == "") {
		alert("Alamat Kosong");
		$("#alamat").focus();
	}else if (tarif == "") {
		alert("Tarif Kosong");
		$("#tarif").focus();
	}else{
		$.ajax({
			url : "models/e_dokter.php",
			type : "POST",
			data : {
				id : id,
				nama : nama,
				spesialis : spesialis,
				id_poli : id_poli,
				telepon : telepon,
				tarif : tarif,
				alamat : alamat
			},
			success:function (msg) {
				if (msg == "1") {
					swal("Berhasil !!","Berhasil Menyimpan Data ","success");
					$(".content").load("views/tmp_dokter.php");
					$(".bg-thick").fadeOut(500);
				}else{
					swal("Gagal !!","Gagal Menyimpan Data ","error");
				}
			}
		})
	}
}
function h_dokter(id) {
	swal({
		title: "Peringatan !",
		text: "Anda yakin ingin menghapus data ini!",
		type: "warning",
		confirmButtonText: "Ya",
		cancelButtonText: "Tidak",
		confirmButtonColor: "#DD6B55",
		showCancelButton: true,
		closeOnConfirm: false,
		closeOnCancel: false
		},
		function(confirm) {
			if (confirm) {
				$.ajax({
					url : "models/h_dokter.php",
					type : "POST",
					data:{
						id : id
					},
					success:function (msg) {
						if (msg == "1") {
							swal("Berhasil !!","Berhasil menghapus data","success");
							$(".content").load("views/tmp_dokter.php");
							$(".bg-thick").fadeOut(500);
						}
					}
				})
			}else{
				swal("Batal !!","Batal menghapus data","error");
			}
		})
}

function tmb_obat() {
	id_obat = $("#id_obat").val();
	nama = $("#nama").val();
	jenis = $("#jenis").val();
	kategori = $("#kategori").val();
	harga = $("#harga").val();
	jumlah = $("#jumlah").val();
	if (nama == "") {
		alert("Nama Kosong");
		$("#nama").focus();
	}else if (jenis == "") {
		alert("Jenis Kosong");
		$("#jenis").focus();
	}else if (kategori == "") {
		alert("Kategori Kosong");
		$("#kategori").focus();
	}else if (harga == "") {
		alert("Harga Obat Kosong");
		$("#harga").focus();
	}else if (jumlah == "") {
		alert("Jumlah Obat Kosong");
		$("#jumlah").focus();
	}else{
		$.ajax({
			url : "models/s_obat.php",
			type : "POST",
			data : {
				id_obat : id_obat,
				nama : nama,
				jenis : jenis,
				kategori : kategori,
				harga : harga,
				jumlah : jumlah
			},
			success:function (msg) {
				if (msg == "1") {
					swal("Berhasil !!","Berhasil Menyimpan Data ","success");
					$(".content").load("views/tmp_obat.php");
					$(".bg-thick").fadeOut(500);
				}else{
					swal("Gagal !!","Gagal Menyimpan Data ","error");
				}
			}
		})
	}
}
function e_obat(id) {
	var url = "views/thickbox/input_obat.php?id="+id;
	thickbox(url,'show');
}
function p_e_obat(id) {
	nama = $("#nama").val();
	jenis = $("#jenis").val();
	kategori = $("#kategori").val();
	harga = $("#harga").val();
	jumlah = $("#jumlah").val();
	if (nama == "") {
		alert("Nama Kosong");
		$("#nama").focus();
	}else if (jenis == "") {
		alert("Jenis Kosong");
		$("#jenis").focus();
	}else if (kategori == "") {
		alert("Kategori Kosong");
		$("#kategori").focus();
	}else if (harga == "") {
		alert("Harga Obat Kosong");
		$("#harga").focus();
	}else if (jumlah == "") {
		alert("Jumlah Obat Kosong");
		$("#jumlah").focus();
	}else{
		$.ajax({
			url : "models/e_obat.php",
			type : "POST",
			data : {
				id : id,
				nama : nama,
				jenis : jenis,
				kategori : kategori,
				harga : harga,
				jumlah : jumlah
			},
			success:function (msg) {
				if (msg == "1") {
					swal("Berhasil !!","Berhasil Menyimpan Data ","success");
					$(".content").load("views/tmp_obat.php");
					$(".bg-thick").fadeOut(500);
				}else{
					swal("Gagal !!","Gagal Menyimpan Data ","error");
				}
			}
		})
	}
}
function h_obat(id) {
	swal({
		title: "Peringatan !",
		text: "Anda yakin ingin menghapus data ini!",
		type: "warning",
		confirmButtonText: "Ya",
		cancelButtonText: "Tidak",
		confirmButtonColor: "#DD6B55",
		showCancelButton: true,
		closeOnConfirm: false,
		closeOnCancel: false
		},
		function(confirm) {
			if (confirm) {
				$.ajax({
					url : "models/h_obat.php",
					type : "POST",
					data:{
						id : id
					},
					success:function (msg) {
						if (msg == "1") {
							swal("Berhasil !!","Berhasil menghapus data","success");
							$(".content").load("views/tmp_obat.php");
							$(".bg-thick").fadeOut(500);
						}
					}
				})
			}else{
				swal("Batal !!","Batal menghapus data","error");
			}
		})
}

function tmb_pasien() {
	id_pasien = $("#id_pasien").val();
	nama = $("#nama").val();
	alamat = $("#alamat").val();
	gender = $("#gender").val();
	umur = $("#umur").val();
	telepon = $("#telepon").val();
	if (nama == "") {
		alert("Nama Kosong");
		$("#nama").focus();
	}else if (alamat == "") {
		alert("Alamat Kosong");
		$("#alamat").focus();
	}else if (gender == "") {
		alert("Gender Kosong");
		$("#gender").focus();
	}else if (umur == "") {
		alert("Umur pasien Kosong");
		$("#umur").focus();
	}else if (telepon == "" || telepon.length!= 12 || telepon.match('/^[0-9]+$/')) {
		alert("Telepon pasien salah");
		$("#telepon").focus();
	}else{
		$.ajax({
			url : "models/s_pasien.php",
			type : "POST",
			data : {
				id_pasien : id_pasien,
				nama : nama,
				alamat : alamat,
				gender : gender,
				umur : umur,
				telepon : telepon
			},
			success:function (msg) {
				if (msg == "1") {
					swal("Berhasil !!","Berhasil Menyimpan Data ","success");
					$(".content").load("views/tmp_pasien.php");
					$(".bg-thick").fadeOut(500);
				}else{
					swal("Gagal !!","Gagal Menyimpan Data ","error");
				}
			}
		})
	}
}
function e_pasien(id) {
	var url = "views/thickbox/input_pasien.php?id="+id;
	thickbox(url,'show');
}
function p_e_pasien(id) {
	nama = $("#nama").val();
	alamat = $("#alamat").val();
	gender = $("#gender").val();
	umur = $("#umur").val();
	telepon = $("#telepon").val();
	if (nama == "") {
		alert("Nama Kosong");
		$("#nama").focus();
	}else if (alamat == "") {
		alert("Alamat Kosong");
		$("#alamat").focus();
	}else if (gender == "") {
		alert("Gender Kosong");
		$("#gender").focus();
	}else if (umur == "") {
		alert("Umur pasien Kosong");
		$("#umur").focus();
	}else if (telepon == "" || telepon.length!= 12 || telepon.match('/^[0-9]+$/')) {
		alert("Telepon pasien salah");
		$("#telepon").focus();
	}else{
		$.ajax({
			url : "models/e_pasien.php",
			type : "POST",
			data : {
				id : id,
				nama : nama,
				alamat : alamat,
				gender : gender,
				umur : umur,
				telepon : telepon
			},
			success:function (msg) {
				if (msg == "1") {
					swal("Berhasil !!","Berhasil Menyimpan Data ","success");
					$(".content").load("views/tmp_pasien.php");
					$(".bg-thick").fadeOut(500);
				}else{
					swal("Gagal !!","Gagal Menyimpan Data ","error");
				}
			}
		})
	}
}
function h_pasien(id) {
	swal({
		title: "Peringatan !",
		text: "Anda yakin ingin menghapus data ini!",
		type: "warning",
		confirmButtonText: "Ya",
		cancelButtonText: "Tidak",
		confirmButtonColor: "#DD6B55",
		showCancelButton: true,
		closeOnConfirm: false,
		closeOnCancel: false
		},
		function(confirm) {
			if (confirm) {
				$.ajax({
					url : "models/h_pasien.php",
					type : "POST",
					data:{
						id : id
					},
					success:function (msg) {
						if (msg == "1") {
							swal("Berhasil !!","Berhasil menghapus data","success");
							$(".content").load("views/tmp_pasien.php");
							$(".bg-thick").fadeOut(500);
						}
					}
				})
			}else{
				swal("Batal !!","Batal menghapus data","error");
			}
		})
}

function tmb_pendaf() {
	id_pendaf = $("#id_pendaf").val();
	tgl = $("#tgl").val();
	kodedkt = $("#kodedkt").val();
	kodepsn = $("#kodepsn").val();
	kodeplk = $("#kodeplk").val();
	biaya = $("#biaya").val();
	status = $("#status").val();
	ket = $("#ket").val();
	tarif = $("#tarif").val();
	jm_bayar = $("#jm_bayar").val();
	if (tgl == "") {
		alert("Tanggal Pendaftaran Kosong");
		$("#tgl").focus();
	}else if (kodedkt == "") {
		alert("Kode Dokter Kosong");
		$("#kodedkt").focus();
	}else if (kodepsn == "") {
		alert("Kode Pasien Kosong");
		$("#kodepsn").focus();
	}else if (kodeplk == "") {
		alert("Kode Poliklinik Kosong");
		$("#kodeplk").focus();
	}else if (biaya == "") {
		alert("Biaya Kosong");
		$("#biaya").focus();
	}else if (status == "") {
		alert("Status Kosong");
		$("#status").focus();
	}else if (ket == "") {
		alert("Keterangan Kosong");
		$("#ket").focus();
	}else{
		$.ajax({
			url : "models/s_pendaf.php",
			type : "POST",
			data : {
				id_pendaf : id_pendaf,
				tgl : tgl,
				kodedkt : kodedkt,
				kodepsn : kodepsn,
				kodeplk : kodeplk,
				biaya : biaya,
				status : status,
				ket : ket,
				tarif : tarif,
				jm_bayar : jm_bayar
			},
			success:function (msg) {
				if (msg == "1") {
					swal("Berhasil !!","Berhasil Menyimpan Data ","success");
					$(".content").load("views/tmp_pendaf.php");
					$(".bg-thick").fadeOut(500);
				}else{
					swal("Gagal !!","Gagal Menyimpan Data ","error");
				}
			}
		})
	}
}
function e_pendaf(id) {
	var url = "views/thickbox/input_pendaf.php?id="+id;
	thickbox(url,'show');
}
function p_e_pendaf(id) {
	tgl = $("#tgl").val();
	kodedkt = $("#kodedkt").val();
	kodepsn = $("#kodepsn").val();
	kodeplk = $("#kodeplk").val();
	biaya = $("#biaya").val();
	status = $("#status").val();
	ket = $("#ket").val();
	if (tgl == "") {
		alert("Tanggal Pendaftaran Kosong");
		$("#tgl").focus();
	}else if (kodedkt == "") {
		alert("Kode Dokter Kosong");
		$("#kodedkt").focus();
	}else if (kodepsn == "") {
		alert("Kode Pasien Kosong");
		$("#kodepsn").focus();
	}else if (kodeplk == "") {
		alert("Kode Poliklinik Kosong");
		$("#kodeplk").focus();
	}else if (biaya == "") {
		alert("Biaya Kosong");
		$("#biaya").focus();
	}else if (status == "") {
		alert("Status Kosong");
		$("#status").focus();
	}else if (ket == "") {
		alert("Keterangan Kosong");
		$("#ket").focus();
	}else{
		$.ajax({
			url : "models/e_pendaf.php",
			type : "POST",
			data : {
				id : id,
				kodedkt : kodedkt,
				kodepsn : kodepsn,
				kodeplk : kodeplk,
				biaya : biaya,
				status : status,
				ket : ket
			},
			success:function (msg) {
				if (msg == "1") {
					swal("Berhasil !!","Berhasil Menyimpan Data ","success");
					$(".content").load("views/tmp_pendaf.php");
					$(".bg-thick").fadeOut(500);
				}else{
					swal("Gagal !!","Gagal Menyimpan Data ","error");
				}
			}
		})
	}
}
function h_pendaf(id) {
	swal({
		title: "Peringatan !",
		text: "Anda yakin ingin menghapus data ini!",
		type: "warning",
		confirmButtonText: "Ya",
		cancelButtonText: "Tidak",
		confirmButtonColor: "#DD6B55",
		showCancelButton: true,
		closeOnConfirm: false,
		closeOnCancel: false
		},
		function(confirm) {
			if (confirm) {
				$.ajax({
					url : "models/h_pendaf.php",
					type : "POST",
					data:{
						id : id
					},
					success:function (msg) {
						if (msg == "1") {
							swal("Berhasil !!","Berhasil menghapus data","success");
							$(".content").load("views/tmp_pendaf.php");
							$(".bg-thick").fadeOut(500);
						}
					}
				})
			}else{
				swal("Batal !!","Batal menghapus data","error");
			}
		})
}

function h_resep(id) {
	swal({
		title: "Peringatan !",
		text: "Anda yakin ingin menghapus data ini!",
		type: "warning",
		confirmButtonText: "Ya",
		cancelButtonText: "Tidak",
		confirmButtonColor: "#DD6B55",
		showCancelButton: true,
		closeOnConfirm: false,
		closeOnCancel: false
		},
		function(confirm) {
			if (confirm) {
				$.ajax({
					url : "models/h_resep.php",
					type : "POST",
					data:{
						id : id
					},
					success:function (msg) {
						if (msg == "1") {
							swal("Berhasil !!","Berhasil menghapus data","success");
							$(".content").load("views/tmp_resep.php");
							$(".bg-thick").fadeOut(500);
						}
					}
				})
			}else{
				swal("Batal !!","Batal menghapus data","error");
			}
		})
}
function h_detail(id,idr) {
	$.ajax({
		url : "models/h_detail.php",
		type : "POST",
		data:{
				id : id
		},
		success:function (msg) {
			$(".table_dtl").load('views/tabel/tabel_resep.php?id_resep='+idr);
		}
	})
}

function add_obat_resep() {
	id_resep = $("#id_resep").val();
	kodepsn = $("#kodepsn").val();
	namapsn = $("#namapsn").val();
	kodeobt = $("#kodeobt").val();
	namaobt = $("#namaobt").val();
	harga = $("#harga").val();
	jml_beli = $("#jml_beli").val();
	dosis = $("#dosis").val();
	sub_total = $("#sub_total").val();
	if (kodepsn == "") {
		alert("Kode Pasien Kosong");
		$("#kodepsn").focus();
	}else if (namapsn == "") {
		alert("Nama Pasien Kosong");
		$("#namapsn").focus();
	}else if (kodeobt == "") {
		alert("Kode Obat Kosong");
		$("#kodeobt").focus();
	}else if (namaobt == "") {
		alert("Nama Obat Kosong");
		$("#namaobt").focus();
	}else if (harga == "") {
		alert("Harga Kosong");
		$("#harga").focus();
	}else if (jml_beli == "") {
		alert("Jumlah Beli Kosong");
		$("#jml_beli").focus();
	}else if (dosis == "") {
		alert("Dosis Obat Kosong");
		$("#dosis").focus();
	}else{
		$.ajax({
			url : "models/s_add_resep.php",
			type : "POST",
			data : {
				id_resep :id_resep,
				kodeobt : kodeobt,
				harga :harga,
				jml_beli :jml_beli,
				dosis : dosis,
				sub_total : sub_total
			},
			success:function (msg) {

				$(".table_dtl").load('views/tabel/tabel_resep.php?id_resep='+id_resep);

				$("#kodeobt").val("");
				$("#namaobt").val("");
				$("#harga").val("");
				$("#dosis").val("");
				$("#jml_beli").val("");
				$("#sub_total").val("");
				
			}
		})
	}	
}

function tmb_resep() {
	id_resep = $("#id_resep").val();
	kodepsn = $("#kodepsn").val();
	namapsn = $("#namapsn").val();
	tgl = $("#tgl").val();
	t_harga = $("#t_harga").val();
	bayar = $("#bayar").val();
	kembali = $("#kembali").val();
	if (kodepsn == "") {
		alert("Kode Pasien Kosong");
		$("#kodepsn").focus();
	}else if (namapsn == "") {
		alert("Nama Pasien Kosong");
		$("#namapsn").focus();
	}else if (bayar == "") {
		alert("Bayar Kosong");
		$("#bayar").focus();
	}else{
		$.ajax({
			url : "models/s_resep.php",
			type : "POST",
			data : {
				id_resep :id_resep,
				tgl : tgl,
				kodepsn : kodepsn,
				t_harga : t_harga,
				bayar : bayar,
				kembali : kembali
			},	
			success:function (msg) {
				if (msg == "1") {
					swal("Berhasil !!","Berhasil Menyimpan Data ","success");
					$(".content").load("views/tmp_resep.php");
					$(".bg-thick").fadeOut(500);
				}else{
					swal("Gagal !!","Gagal Menyimpan Data ","error");
				}
			}
		})
	}
}
	function cari_pasien() {
		$.ajax({
			url : "models/cari_pasien.php",
			type : "POST",
			dataType : "json",
			data : {
				kodepsn : $("#kodepsn").val()
			},
			success:function (hasil) {
				$("#namapsn").val(hasil.nama);
			}
		})
	}
	function cari_obat() {
		$.ajax({
			url : "models/cari_obat.php",
			type : "POST",
			dataType :"json",
			data : {
				kodeobat : $("#kodeobt").val()
			},
			success:function(hasil){
				$("#namaobt").val(hasil.nama);//mengabil variabel dari proses
				$("#harga").val(hasil.harga);
			}
		});
	}
	function cari_dokter() {
		$.ajax({
			url : "models/cari_dokter.php",
			type : "POST",
			dataType :"json",
			data : {
				kodedkt : $("#kodedkt").val()
			},
			success:function(hasil){
				$("#namadkt").val(hasil.nama);//mengabil variabel dari proses
				$("#tarif").val(hasil.tarif);
				$("#namaplk").val(hasil.namaplk);
			}
		});
	}