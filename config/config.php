<?php
define("HOST", "localhost"); // Host database
define("USER", "root"); // Username database
define("PASSWORD", "izahrm12"); // Password database
define("DATABASE", "sias"); // Nama database
define('url', $_SERVER['SERVER_NAME']);
 
$koneksi = new mysqli(HOST, USER, PASSWORD, DATABASE); // Melakukan koneksi ke database berdasarkan konfigurasi diatas
 
if($koneksi->connect_error){
   trigger_error('Koneksi ke database gagal: ' . $mysqli->connect_error, E_USER_ERROR); // Jika koneksi gagal, tampilkan pesan "Koneksi ke database gagal"  
}