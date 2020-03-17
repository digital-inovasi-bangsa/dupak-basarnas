<?php
session_start();
include_once('../../config/koneksi.php');
include_once('../../config/fungsi_indotgl.php');
include_once('class.pegawai.php');
?>
<?php if ($_SESSION['s_level'] == 'administrator' || $_SESSION['s_level'] == 'supervisor' ) { ?>
<div id="alert"></div>
<div class="row-fluid">
<h3 class="header smaller lighter blue">Daftar Pegawai</h3>
	<div class="table-header">
		<a href="javascript:void(0)" onclick="tambahForm()" class="btn btn-primary" ><i class="icon-plus icon-white"></i>Tambah</a>
	 <?php } ?>
	 <a href="javascript:void(0)" target="" onclick="window.open('../dupak/master_ref/pegawai/print_pegawai.php','name','width=900,height=600')" class="btn btn-primary" ><i class="icon-print icon-white"></i>Print</a>
	 <a href="javascript:void(0)" target="" onclick="window.open('../dupak/master_ref/pegawai/print_pegawai_pdf.php','name','width=900,height=600')" class="btn btn-primary" ><i class="icon-download icon-download"></i>Export PDF</a>
	 <a href="javascript:void(0)" onclick="window.open('../dupak/master_ref/pegawai/print_pegawai_xls.php','name','width=900,height=600')" class="btn btn-primary" ><i class="icon-download icon-download"></i>Export Xls</a>
	</div>

<table id="tabeldata" class="table table-striped table-bordered table-hover" width="100%">
	<thead>
		<tr>
			<th width="50px"><div align="center">No</div></th>
			<th><div align="center">NIP</div></th>
			<th><div align="center">No Karpeg</div></th>
			<th><div align="center">Nama Pegawai</div></th>
			<th><div align="center">Tempat Tanggal Lahir</div></th>
			<th><div align="center">JK</div></th>
			<th><div align="center">Jabatan</div></th>
			<th><div align="center">Unit Kerja</div></th>
			<th><div align="center">Aksi</div></th>
		</tr>
	</thead>
	<tbody>
		<?php
			$pegawai = new pegawai($pdo);
			if($_SESSION['s_level']=='administrator'){		
			$query = "SELECT * FROM v_peg_unit_jab";
			}else{
			$query =  "SELECT * FROM v_peg_unit_jab";
				}
			$pegawai->view($query);
		?>
	</tbody>
</table>



