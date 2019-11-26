<?php
// Panggil koneksi database
require_once "../config/koneksi.php";

if (isset($_POST['simpan'])) {
	$nis           = mysqli_real_escape_string($koneksi, trim($_POST['nis']));
	$nama          = mysqli_real_escape_string($koneksi, trim($_POST['nama']));
	$tempat_lahir  = mysqli_real_escape_string($koneksi, trim($_POST['tempat_lahir']));

	$tanggal       = $_POST['tgl_lahir'];
	$tgl           = explode('-',$tanggal);
	$tgl_lahir 		= $tgl[2]."-".$tgl[1]."-".$tgl[0];

	$jenis_kelamin = $_POST['jenis_kelamin'];
	$angkatan		= $_POST['angkatan'];
	$status_siswa 	= $_POST['status_siswa'];

	// perintah query untuk menyimpan data ke tabel guru
	$query = mysqli_query($koneksi, "INSERT INTO siswa(nis,
													 nama,
													 tempat_lahir,
													 tgl_lahir,
													 jenis_kelamin,
													 angkatan,
													 status_siswa)	
											  VALUES('$nis',
													 '$nama',
													 '$tempat_lahir',
													 '$tgl_lahir',
													 '$jenis_kelamin',
													 '$angkatan',
													 '$status_siswa')");		
	// cek hasil query
	if ($query) {
		// jika berhasil tampilkan pesan berhasil insert data
		header('location: daftar_siswa.php?alert=2');
	} else {
		// jika gagal tampilkan pesan kesalahan
		header('location: daftar_siswa.php?alert=1');
	}	
}	

?>