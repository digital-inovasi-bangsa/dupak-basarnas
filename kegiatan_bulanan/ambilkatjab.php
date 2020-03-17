<?php
	include_once('../config/koneksi.php');
	include_once('class.keg_bln.php');
	$jab 	= $_GET['id_kat_jab'];
	$keg1 = new keg_bln($pdo);
	$query 	= " SELECT * FROM jabatan WHERE id_kat_jab = $jab  ";
	$keg1->ambilkatjab($query);
?>