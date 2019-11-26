<?php
// Panggil koneksi database
require_once "../config/koneksi.php";

if (isset($_POST['simpan'])) {
	$nip           = mysqli_real_escape_string($koneksi, trim($_POST['nip']));
	$nama          = mysqli_real_escape_string($koneksi, trim($_POST['nama']));
	$tempat_lahir  = mysqli_real_escape_string($koneksi, trim($_POST['tempat_lahir']));

	$tanggal       = $_POST['tgl_lahir'];
	$tgl           = explode('-',$tanggal);
	$tgl_lahir 		= $tgl[2]."-".$tgl[1]."-".$tgl[0];

	$jenis_kelamin = $_POST['jenis_kelamin'];

	// perintah query untuk menyimpan data ke tabel guru
	$query = mysqli_query($koneksi, "INSERT INTO guru(nip,
													 nama,
													 tempat_lahir,
													 tgl_lahir,
													 jenis_kelamin)	
											  VALUES('$nip',
													 '$nama',
													 '$tempat_lahir',
													 '$tgl_lahir',
													 '$jenis_kelamin')");		
	// cek hasil query
	if ($query) {
		// jika berhasil tampilkan pesan berhasil insert data
		header('location: daftar_guru.php?alert=2');
	} else {
		// jika gagal tampilkan pesan kesalahan
		header('location: daftar_guru.php?alert=1');
	}	
}	

?>