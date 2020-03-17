<?php
	include_once('../config/koneksi.php');
	include_once('class.keg_bln.php');
	$keg = new keg_bln($pdo);
	$id = $_GET['id_kh_bln'];
	$keg->delete($id);
?>