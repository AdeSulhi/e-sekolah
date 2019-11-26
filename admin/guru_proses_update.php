<?php
// Panggil koneksi database
require_once "../config/koneksi.php";

if (isset($_POST['update'])) {
	if (isset($_POST['id'])) {
		$id           = mysqli_real_escape_string($koneksi, trim($_POST['id']));
		$nip           = mysqli_real_escape_string($koneksi, trim($_POST['nip']));
		$nama          = mysqli_real_escape_string($koneksi, trim($_POST['nama']));
		$tempat_lahir  = mysqli_real_escape_string($koneksi, trim($_POST['tempat_lahir']));

		$tanggal       = $_POST['tgl_lahir'];
		$tgl           = explode('-',$tanggal);
		$tgl_lahir 		= $tgl[2]."-".$tgl[1]."-".$tgl[0];

		$jenis_kelamin = $_POST['jenis_kelamin'];

		// perintah query untuk mengubah data pada tabel guru
		$query = mysqli_query($koneksi, " 
			UPDATE guru 
			SET nip='$nip', nama='$nama', tempat_lahir='$tempat_lahir', tgl_lahir='$tgl_lahir', jenis_kelamin='$jenis_kelamin' 
			WHERE id='$id'
		");

	// cek query
		if ($query) {
			// jika berhasil tampilkan pesan berhasil update data
			header('location: daftar_guru.php?alert=3');
		} else {
			// jika gagal tampilkan pesan kesalahan
			header('location: daftar_guru.php?alert=1');
		}	
	}
}					
?>