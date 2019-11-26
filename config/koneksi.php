<?php
$domain = 'http://'.$_SERVER['SERVER_NAME'];
define("HOST", "localhost"); // Host database
define("USER", "root"); // Username database
define("PASSWORD", ""); // Password database
define("DATABASE", "e-sekolah"); // Nama database
 
$koneksi = new mysqli(HOST, USER, PASSWORD, DATABASE); // Melakukan koneksi ke database berdasarkan konfigurasi diatas
 
if($koneksi->connect_error){
   trigger_error('Koneksi ke database gagal: ' . $mysqli->connect_error, E_USER_ERROR); // Jika koneksi gagal, tampilkan pesan "Koneksi ke database gagal"  
}