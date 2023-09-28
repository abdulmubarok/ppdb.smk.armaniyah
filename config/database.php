<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS','');
define('DB_NAME','ppdb5free');

$koneksi= new mysqli(DB_HOST,DB_USER, DB_PASS, DB_NAME);
if($koneksi==false){
	die("Gagal melakukan koneksi ke database.".$koneksi->connect_error());
}


?>