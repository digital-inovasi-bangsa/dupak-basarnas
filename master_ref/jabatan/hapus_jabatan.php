<?php
	include_once('../../config/koneksi.php');
	include_once('class.jabatan.php');
	$jabatan = new jabatan($pdo);
	$id = $_GET['id_jabatan'];
	$jabatan->delete($id);
?>