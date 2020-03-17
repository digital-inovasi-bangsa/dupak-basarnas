<?php
	include_once('../config/koneksi.php');
	include_once('class.kegiatan.php');
	$kat 	= $_GET['id_sub_kategori'];
	$keg1 	= new kegiatan_harian($pdo);
	$query 	= "SELECT * FROM kegiatan WHERE id_sub_kategori = '$kat' ORDER BY id_kegiatan";
	$keg1->ambilkegiatan($query);
?>