<?php
	include_once('../config/koneksi.php');
	include_once('class.kegiatan.php');
	$jab 	= $_GET['id_jabatan'];
	$keg1 = new kegiatan_harian($pdo);
	$query 	= " SELECT * FROM pegawai WHERE id_jabatan = $jab ORDER BY nama_pegawai ";
	$keg1->ambilpegawai($query);
?>