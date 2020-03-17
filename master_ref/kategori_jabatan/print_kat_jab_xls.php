<?php
session_start();
// Fungsi header dengan mengirimkan raw data excel
header("Content-type: application/ms-excel"); 
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=Data-Kategori-Jabatan.xls");
require_once('../../config/koneksi.php');
require_once('../kategori_jabatan/class.kat_jab.php'); 
?>
<div class="row-fluid">
<h3 class="header smaller lighter blue">Daftar Kategori jabatan</h3>
</div>
<table id="tabeldata" class="table table-striped table-bordered table-hover" width="100%" border="1">
	<thead>
		<tr align="center">
			<th width="50px">No</th>
			<th>Kategori Kategori Jabatan</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$kat_jab = new kat_jab($pdo);		
		$query = "SELECT * FROM kat_jab";		
		$kat_jab->view($query);
	?>
	</tbody>
</table>