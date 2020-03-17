<?php
	include_once('../../config/koneksi.php');
	include_once('class.unit_kerja.php');
	$unit_kerja = new unit_kerja($pdo);
	$id = $_GET['id_unit_kerja'];
	$unit_kerja->delete($id);
?>