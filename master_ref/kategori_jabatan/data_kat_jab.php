<?php
session_start();
include_once '../../config/koneksi.php';
include_once 'class.kat_jab.php';
?>
<?php if ($_SESSION['s_level'] == 'administrator' || $_SESSION['s_level'] == 'supervisor' ) { ?>
<div id="alert"></div>
<div class="row-fluid">
<h3 class="header smaller lighter blue">Daftar Kategori Jabatan</h3>
	<div class="table-header">
		<a href="javascript:void(0)" onclick="tambahForm()" class="btn btn-primary" ><i class="icon-plus icon-white"></i>Tambah</a>
	 <?php } ?>
	 <a href="javascript:void(0)" target="" onclick="window.open('../dupak/master_ref/kategori_jabatan/print_kat_jab.php','name','width=900,height=600')" class="btn btn-primary" ><i class="icon-print icon-white"></i>Print</a>
	 <a href="javascript:void(0)" target="" onclick="window.open('../dupak/master_ref/kategori_jabatan/print_kat_jab_pdf.php','name','width=900,height=600')" class="btn btn-primary" ><i class="icon-download icon-download"></i>Export PDF</a>
	 <a href="javascript:void(0)" onclick="window.open('../dupak/master_ref/kategori_jabatan/print_kat_jab_xls.php','name','width=900,height=600')" class="btn btn-primary" ><i class="icon-download icon-download"></i>Export Xls</a>
	</div>

<table id="tabeldata" class="table table-striped table-bordered table-hover" width="100%">
	<thead>
		<tr>
			<th width="50px">No</th>
			<th>Kategori Jabatan</th>
			<th>Aksi</th>
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


