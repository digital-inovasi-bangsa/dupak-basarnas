<?php
	include_once('../../config/koneksi.php');
	include_once('class.pegawai.php');
	$peg = new pegawai($pdo);
	$id = $_GET['id_pegawai'];
	$peg->delete($id);
?>