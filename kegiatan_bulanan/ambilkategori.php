<?php
	include_once('../config/koneksi.php');
	include_once('class.keg_bln.php');
	$kat 	= $_GET['id_kat_bln'];
	$keg1 	= new keg_bln($pdo);
	$query 	= "SELECT * FROM sub_kat_bln where id_kat_bln = '$kat' ";
	$keg1->ambilkategori($query);
?>