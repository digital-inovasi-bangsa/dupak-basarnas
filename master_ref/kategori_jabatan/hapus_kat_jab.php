<?php
	include_once('../../config/koneksi.php');
	include_once('class.kat_jab.php');
	$kat_jab = new kat_jab($pdo);
	$id = $_GET['id_kat_jab'];
	$kat_jab->delete($id);
?>