<?php
	include_once('../config/koneksi.php');
	include_once('class.kegiatan.php');
	$kat 	= $_GET['id_kategori'];
	$keg1 	= new kegiatan_harian($pdo);
	$query 	= "SELECT * FROM sub_kategori where id_kategori = '$kat' ORDER BY id_sub_kategori";
	$keg1->ambilkategori($query);
?>