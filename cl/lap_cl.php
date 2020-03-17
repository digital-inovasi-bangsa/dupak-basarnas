
<?php
session_start();
include_once('../config/koneksi.php');
include_once('../config/fungsi_indotgl.php');
include_once('class.cl.php');
$cl = new cl($pdo);
?>
<div id="alert"></div>
<div class="row-fluid">
<h3 class="header smaller lighter blue">Laporan lembar Pengecekan Data Kegiatan</h3>
	<div class="table-header">		
	</div>

<form id="forms" method="post" action="cl/print_cl.php" target="window.open()" class="form-horizontal">
<div class="span8">

	<div class="control-group">
		<label class="control-label">Kategori Jabatan</label>
		<div class="controls">
			<select name="id_kat_jab" id="id_kat_jab" required class="span10" >
				<option value=""></option>	
				<?php					
					$cl->kat_jab();
				?>			
			</select>
		</div>
	</div>

	<div class="control-group">
	<label class="control-label"> Jabatan</label>
	<div class="controls">
		<select name="id_jabatan" id="id_jabatan" required class="span10">
			<option value=""></option>			
		</select>
	</div>
	</div>

	<div class="control-group">
		<label class="control-label"> Pegawai</label>
		<div class="controls">
			<select name="id_pegawai" id="id_pegawai" required class="span10">
				<option value=""></option>			
			</select>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label"> Priode</label>
		<div class="controls">
			<select name="bulan" id="bulan" required class="span3">
				<option value="">Pilih Bulan</option>
				<option value="01">Januari</option>
				<option value="02">Februari</option>
				<option value="03">Maret</option>
				<option value="04">April</option>
				<option value="05">Mei</option>
				<option value="06">Juni</option>						
				<option value="07">Juli</option>
				<option value="08">Agustus</option>
				<option value="09">September</option>
				<option value="10">Oktober</option>
				<option value="11">November</option>
				<option value="12">Desember</option>
			</select> s/d
			<select name="bulan1" id="bulan1" required class="span3" >
				<option value="">Pilih Bulan</option>
				<option value="01">Januari</option>
				<option value="02">Februari</option>
				<option value="03">Maret</option>
				<option value="04">April</option>
				<option value="05">Mei</option>
				<option value="06">Juni</option>						
				<option value="07">Juli</option>
				<option value="08">Agustus</option>
				<option value="09">September</option>
				<option value="10">Oktober</option>
				<option value="11">November</option>
				<option value="12">Desember</option>
			</select>			
			<select name="tahun" id="tahun" required class="span4" >
				<option value="">Pilih Tahun</option>
				<option value="2016">2016</option>
				<option value="2017">2017</option>
				<option value="2018">2018</option>
				<option value="2019">2019</option>
				<option value="2020">2020</option>
				<option value="2021">2021</option>
				<option value="2022">2022</option>
				<option value="2023">2032</option>
				<option value="2024">2024</option>
				<option value="2025">2025</option>
				<option value="2026">2026</option>
				<option value="2027">2027</option>
				<option value="2028">2028</option>
				<option value="2029">2029</option>
				<option value="2030">2030</option>
				<option value="2031">2031</option>
				<option value="2032">2032</option>
				<option value="2033">2033</option>
				<option value="2034">2034</option>
				<option value="2035">2035</option>
				<option value="2036">2036</option>
				<option value="2037">2037</option>
				<option value="2038">2038</option>
				<option value="2039">2039</option>
				<option value="2040">2040</option>
			</select>
		</div>
	</div>

	<div class="control-group">
	<label class="control-label" for="kepala" >Petugas Pemeriksa</label>
		<div class="controls">
		<input type="text" id="petugas_pemeriksa" name="petugas_pemeriksa" required class="span6" placeholder="Nama Petugas Pemeriksa">
		<input type="text" id="nip1" name="nip1" required class="span4" placeholder="NIP">
		</div>
	</div>
	<div class="control-group">
	<label class="control-label" for="kepala" >Tim Penilai</label>
		<div class="controls">
		<input type="text" id="tim_penilai" name="tim_penilai" required class="span6" placeholder="Nama Ketua Tim Penilai">
		<input type="text" id="nip2" name="nip2" required class="span4" placeholder="NIP">
		</div>
	</div>
	<div class="control-group">
	<label class="control-label" for="petugas_pengelola" >Petugas Pengelola</label>
		<div class="controls">
		<input type="text" id="petugas_pengelola" name="petugas_pengelola" required class="span6" placeholder="Nama Petugas Pengelola ">
		<input type="text" id="nip3" name="nip3" required class="span4" placeholder="NIP">
		</div>
	</div>
	<div class="control-group">
	<label class="control-label" for="print_type" >Print/Download Type</label>
		<div class="controls">
			<select name="print_type" id="print_type" required class="span10">
				<option value="view">view</option>
				<option value="pdf">pdf</option>
				<option value="xls">xls</option>
			</select>
		</div>
	</div>

	<div class="controls">		
		<button type="submit" class="btn btn-primary"> OK</button>
		<a href="" class="btn btn-primary">Cancel</a>
	</div>
</div>
</form>
<script type="text/javascript">
	$(document).ready(function(){
		$(".chzn-select").chosen();
		$(".tanggal").datepicker({
				dateFormat: "yyyy-mm-dd",
	            changeMonth: true,
	            changeYear: true,
				yearRange: '1970:2050',
				autoclose: true,
				todayHighlight: true,
		});
		$("#id_kat_jab").change(function(){
	    var id_kat_jab = $("#id_kat_jab").val();
	    $.ajax({
	        url: "kegiatan/ambilkatjab.php",
	        data: "id_kat_jab="+id_kat_jab,
	        cache: false,
	        success: function(msg){
	            $("#id_jabatan").html(msg);
	        }
	      });
	 	});
		$("#id_jabatan").change(function(){
	    var id_jabatan = $("#id_jabatan").val();
	    $.ajax({
	        url: "kegiatan/ambilpegawai.php",
	        data: "id_jabatan="+id_jabatan,
	        cache: false,
	        success: function(msg){
	            $("#id_pegawai").html(msg);
	        }
	    });
	  });
	});
</script>
