<?php
session_start();
// Fungsi header dengan mengirimkan raw data excel
header("Content-type: application/ms-excel"); 
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=Data_Pegawai.xls");
require_once('../../config/koneksi.php');
include_once('../../config/fungsi_indotgl.php');
require_once('class.pegawai.php'); 
?>
<div class="row-fluid">
<h3 class="header smaller lighter blue">Daftar Pegawai</h3>
</div>
<table id="tabeldata" class="table table-striped table-bordered table-hover" width="100%" border="1">
	<thead>
		<th width="50px"><div align="center">No</div></th>
		<th><div align="center">NIP</div></th>
		<th><div align="center">No Karpeg</div></th>
		<th><div align="center">Nama Pegawai</div></th>
		<th><div align="center">Tempat Tanggal Lahir</div></th>
		<th><div align="center">JK</div></th>
		<th><div align="center">Jabatan</div></th>
		<th><div align="center">Unit Kerja</div></th>
	</thead>
	<tbody>
		<?php
			$pegawai = new pegawai($pdo);
			if($_SESSION['s_level']=='administrator'){		
			$query = "SELECT * FROM v_peg_unit_jab";
			}else{
			$query = "SELECT * FROM v_peg_unit_jab";
				}
			$pegawai->prin($query);
		?>
	</tbody>
</table>