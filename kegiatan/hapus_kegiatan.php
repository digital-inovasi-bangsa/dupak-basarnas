<?php
	include_once('../config/koneksi.php');
	include_once('class.kegiatan.php');
	$keg = new kegiatan_harian($pdo);
	$id = $_GET['id_kh'];
	$keg->delete($id);
?>