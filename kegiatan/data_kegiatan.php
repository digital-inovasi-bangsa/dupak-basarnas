<?php
session_start();
include_once('../config/koneksi.php');
include_once('../config/fungsi_indotgl.php');
include_once('class.kegiatan.php');
?>
<?php if ($_SESSION['s_level'] == 'administrator' || $_SESSION['s_level'] == 'supervisor' ) { ?>
<div id="alert"></div>
<div class="row-fluid">
<h3 class="header smaller lighter blue">Daftar Kegiatan Harian </h3><!-- <input type="text" name="tgl" id="tgl" class="tanggal" value="<?php echo date('d-m-Y'); ?>" required name="tgl" data-date-format="dd-mm-yyyy" /> <i class="icon-calendar bigger-150"></i>--> 


	<div class="table-header">
		<a href="javascript:void(0)" onclick="tambahForm()" class="btn btn-primary" ><i class="icon-plus icon-white"></i>Tambah</a>
	 <?php } ?>
	 <!--
	 <a href="javascript:void(0)" target="" onclick="window.open('../dupak/kegiatan/print_kegiatan.php','name','width=900,height=600')" class="btn btn-primary" ><i class="icon-print icon-white"></i>Print</a>
	 <a href="javascript:void(0)" target="" onclick="window.open('../dupak/kegiatan/print_kegiatan_pdf.php','name','width=900,height=600')" class="btn btn-primary" ><i class="icon-download icon-download"></i>Export PDF</a>
	 <a href="javascript:void(0)" onclick="window.open('../dupak/kegiatan/print_kegiatan_xls.php','name','width=900,height=600')" class="btn btn-primary" ><i class="icon-download icon-download"></i>Export Xls</a>
		-->
	</div>

<table id="tabeldata" class="table table-striped table-bordered table-hover" width="100%">
	<thead>
		<tr>
			<th width="50px"><div align="center">No</div></th>
			<th><div align="center">kegiatan</div></th>
			<th><div align="center">Nilai</div></th>
			<th><div align="center">Tgl Kegiatan</div></th>
			<th><div align="center">Pegawai</div></th>
			<th><div align="center">Jabatan</div></th>
			<th><div align="center">Aksi</div></th>
		</tr>
	</thead>
	<tbody>
		<?php
		
		$tgl1  = date('Y-m-d');
		$keg   = new kegiatan_harian($pdo);		
		$query = "SELECT * FROM v_kegiatan #WHERE tgl_kegiatan = '$tgl1' ";		
		$keg->view($query);
	?>
	</tbody>
</table>
<script type="text/javascript">
	$(".tanggal").datepicker({
		dateFormat: "dd-mm-yy",
        changeMonth: true,
        changeYear: true,
		yearRange: '1970:2050',
		autoclose: true,
		todayHighlight: true,		
	});
</script>
