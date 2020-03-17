<?php
session_start();
// Fungsi header dengan mengirimkan raw data excel
header("Content-type: application/ms-excel"); 
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=Data_unit_kerja.xls");
require_once('../../config/koneksi.php');
require_once('../unit_kerja/class.unit_kerja.php'); 
?>
<div class="row-fluid">
<h3 class="header smaller lighter blue">Daftar Unit Kerja</h3>
</div>
<table id="tabeldata" class="table table-striped table-bordered table-hover" width="100%" border="1">
	<thead>
		<tr align="center">
			<th width="50px" align="center">No</th>
			<th width="50px">ID</th>
			<th>Unit Kerja</th>
			<th>Alamat</th>
			<th>Keterangan</th>
			<th width="50px">Aktif</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$unit_kerja = new unit_kerja($pdo);		
		$query = "SELECT * FROM unit_kerja";		
		$unit_kerja->prin($query);
	?>
	</tbody>
</table>