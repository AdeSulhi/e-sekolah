<?php
// Panggil koneksi database
require_once "../config/koneksi.php";

if (isset($_POST['simpan'])) {
	$nama	= mysqli_real_escape_string($koneksi, trim($_POST['nama']));
	$status = $_POST['status'];

	// perintah query untuk menyimpan data ke tabel guru
	$query = mysqli_query($koneksi, "INSERT INTO tahun_pelajaran(nama, status) VALUES('$nama','$status')");		
	// cek hasil query
	if ($query) {
		// jika berhasil tampilkan pesan berhasil insert data
		header('location: setting_tp.php?alert=2');
	} else {
		// jika gagal tampilkan pesan kesalahan
		header('location: setting_tp.php?alert=1');
	}	
}	

?>