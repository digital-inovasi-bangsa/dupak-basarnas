<?php
session_start();
// Fungsi header dengan mengirimkan raw data excel
header("Content-type: application/ms-excel"); 
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=Data-jabatan.xls");
require_once('../../config/koneksi.php');
require_once('../jabatan/class.jabatan.php'); 
?>
<div class="row-fluid">
<h3 class="header smaller lighter blue">Daftar jabatan</h3>
</div>
<table id="tabeldata" class="table table-striped table-bordered table-hover" width="100%" border="1">
	<thead>
		<tr align="center">
			<th width="50px">No</th>
			<th width="50px">ID</th>
			<th>Jabatan</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$jabatan = new jabatan($pdo);		
		$query = "SELECT * FROM jabatan";		
		$jabatan->view($query);
	?>
	</tbody>
</table>