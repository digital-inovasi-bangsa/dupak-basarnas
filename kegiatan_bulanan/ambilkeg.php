<?php
	include_once('../config/koneksi.php');
	include_once('class.keg_bln.php');
	$jab 	= $_GET['id_jabatan'];
	$keg1 = new keg_bln($pdo);
	$query 	= " SELECT * FROM jabatan WHERE id_jabatan = $jab  ";
	$keg1->ambilkeg($query);
?>