<?php
session_start();
include_once '../../config/koneksi.php';
include_once 'class.jabatan.php';
?>
<?php if ($_SESSION['s_level'] == 'administrator' || $_SESSION['s_level'] == 'supervisor' ) { ?>
<div id="alert"></div>
<div class="row-fluid">
<h3 class="header smaller lighter blue">Daftar Jabatan</h3>
	<div class="table-header">
		<a href="javascript:void(0)" onclick="tambahForm()" class="btn btn-primary" ><i class="icon-plus icon-white"></i>Tambah</a>
	 <?php } ?>
	 <a href="javascript:void(0)" target="" onclick="window.open('../dupak/master_ref/jabatan/print_jabatan.php','name','width=900,height=600')" class="btn btn-primary" ><i class="icon-print icon-white"></i>Print</a>
	 <a href="javascript:void(0)" target="" onclick="window.open('../dupak/master_ref/jabatan/print_jabatan_pdf.php','name','width=900,height=600')" class="btn btn-primary" ><i class="icon-download icon-download"></i>Export PDF</a>
	 <a href="javascript:void(0)" onclick="window.open('../dupak/master_ref/jabatan/print_jabatan_xls.php','name','width=900,height=600')" class="btn btn-primary" ><i class="icon-download icon-download"></i>Export Xls</a>
	</div>

<table id="tabeldata" class="table table-striped table-bordered table-hover" width="100%">
	<thead>
		<tr>
			<th width="50px">No</th>
			<th width="50px">Kategori Jabatan</th>
			<th>Jabatan</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$jabatan = new jabatan($pdo);		
		$query = "SELECT * FROM v_jab_katjab";		
		$jabatan->view($query);
	?>
	</tbody>
</table>


