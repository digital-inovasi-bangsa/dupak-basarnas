<?php
session_start();
require_once('../config/koneksi.php');
require_once('class.keg_bln.php');
require_once('../config/fungsi_sqltgl.php');
$keg = new keg_bln($pdo);
if(!empty($_POST['id_jabatan'])){
	$id_jabatan		= $_POST['id_jabatan'];
	$id_pegawai 	= $_POST['id_pegawai'];
	$bulan 			= $_POST['bulan'];
	$tahun 			= $_POST['tahun'];
	$id_kat_bln 	= $_POST['id_kat_bln'];
	$id_sub_kat_bln = $_POST['id_sub_kat_bln'];
	$id_keg_bln		= $_POST['id_keg_bln'];
	$nilai 		 	= $_POST['nilai'];
	$katjab 		= $_POST['id_kat_jab'];
	$created_by 	= $_SESSION['s_user'];
	if($keg->create($id_jabatan,$id_pegawai,$bulan,$tahun,$id_kat_bln,$id_sub_kat_bln,$id_keg_bln,$nilai,$created_by)){
		$sg   = "ok";
		$msg1 = "Data telah ditambahkan";
		$alert='alert-success';
		$query1 = " SELECT * FROM jabatan WHERE id_jabatan = '$id_jabatan' ";
		$query2 = " SELECT * FROM pegawai WHERE id_pegawai = '$id_pegawai' ";
		$query3 = " SELECT * FROM kat_jab WHERE id_kat_jab = '$katjab' ";
	}else{
		$g = "err";
		$msg2 = "Data tidak bisa dimasukan";
		$alert='alert-error';
	}
}
?>

<form id="forms" name="forms" method="post" onSubmit="return submitForm('<?php echo $_SERVER['PHP_SELF']; ?>')" class="form-horizontal">
	<fieldset>
		<legend>Tambah kegiatan Bulanan</legend>
		<span>
		 <?php
		if(isset($sg) and $sg=='ok'){
			echo "
			<div class='alert $alert'>
			<button type='button' class='close' data-dismiss='alert'>&times;</button>
			$msg1
			</div>";
		}elseif(isset($sg) and $sg=='err'){
			echo "
			<div class='alert $alert'>
			<button type='button' class='close' data-dismiss='alert'>&times;</button>
			$msg2
			</div>";}
			
		?>
		</span>
		<div class="row-fluid">
			<div class="span8">
				<div class="control-group">
					<label class="control-label">Kategori Jabatan</label>
					<div class="controls">
						<select name="id_kat_jab" id="id_kat_jab" required class="span12px" >
							<option value=""></option>	
							<?php
								
								if(isset($sg) and $sg=='ok'){								 	
								 	$keg->katjab_post($query3);
								 } else {
									$keg->kat_jab();
								} 
							?>			
						</select>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label"> Jabatan</label>
					<div class="controls">
						<select name="id_jabatan" id="id_jabatan" required class="span12px" >
							<option value=""></option>	
							<?php
								
								if(isset($sg) and $sg=='ok'){								 	
								 	$keg->jabatan_post($query1);
								} 
							?>			
						</select>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label"> Pegawai</label>
					<div class="controls">
						<select name="id_pegawai" id="id_pegawai" required class="span12px">
							<option value=""></option>	
								<?php								
									if(isset($sg) and $sg=='ok'){								 	
									 	$keg->pegawai_post($query2);
									 } 
								?>				
						</select>
					</div>
				</div>
				
				<div class="control-group">
					<label class="control-label"> Priode</label>
					<div class="controls">
						<select name="bulan" id="bulan" required class="chzn-select" data-placeholder="Pilih Bulan.............">
							<option value=""></option>
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
						<select name="tahun" id="tahun" required class="chzn-select" data-placeholder="Pilih Tahun.............">
							<option value=""></option>
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
					<label class="control-label">Kategori</label>
					<div class="controls">
						<select name="id_kat_bln" id="id_kat_bln" required class="span12px">
							<option value=""></option>
							<?php								
									if(isset($sg) and $sg=='ok'){								 	
									 	$keg->ambilkeg($query1);
									 } 
								?>						
						</select>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label"> Sub Kategori</label>
					<div class="controls">
						<select name="id_sub_kat_bln" id="id_sub_kat_bln" required class="span12px"  >
							<option value=""></option>	

						</select>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label"> Kegiatan</label>
					<div class="controls">
						<select name="id_keg_bln" id="id_keg_bln" required class="span12px" >
							<option value=""></option>					
						</select>
					</div>
				</div>

				<div class="control-group">
				<label class="control-label" for="NIlai" >Nilai</label>
					<div class="controls">
					<input type="text" id="spinner1" name="nilai" required />
					<div class="space-6"></div>
					</div>
				</div>				
			</div>						
		</div>
		<div class="form-actions">
			<div class="controls">
			<button type="submit" class="btn btn-primary" id="tambah">Tambah</button>
			<button type="button" id="close" class="btn btn-primary" >Tutup</button>
			</div>
		</div>
		
	</fieldset>
</form>

<script type="text/javascript">

	$(document).ready(function(){
		$("#close").click(function(){
			$("#form-nest").hide("slow");
		});
		$(".chzn-select").chosen();
	});

	$(".tanggal").datepicker({
		dateFormat: "dd-mm-yy",
        changeMonth: true,
        changeYear: true,
		yearRange: '1970:2050',
		autoclose: true,
		todayHighlight: true,
		todaySelected: true,

	});

	$('#spinner1').ace_spinner({value:'',min:0,max:200,step:1, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
	.closest('.ace-spinner')
	.on('changed.fu.spinbox', function(){
		//alert($('#spinner1').val())
	});

	  var htmlobjek;
	  $(document).ready(function(){
	  $("#id_kat_bln").change(function(){
	    var id_kat_bln = $("#id_kat_bln").val();
	    $.ajax({
	        url: "kegiatan_bulanan/ambilkategori.php",
	        data: "id_kat_bln="+id_kat_bln,
	        cache: false,
	        success: function(msg){
	            $("#id_sub_kat_bln").html(msg);
	        }
	    });
	  });

	  $("#id_sub_kat_bln").change(function(){
	    var id_sub_kat_bln = $("#id_sub_kat_bln").val();
	    $.ajax({
	        url: "kegiatan_bulanan/ambilkegiatan.php",
	        data: "id_sub_kat_bln="+id_sub_kat_bln,
	        cache: false,
	        success: function(msg){
	            $("#id_keg_bln").html(msg);
	        }
	    });
	  });

	  $("#id_kat_jab").change(function(){
	    var id_kat_jab = $("#id_kat_jab").val();
	    $.ajax({
	        url: "kegiatan_bulanan/ambilkatjab.php",
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
	    $.ajax({
	        url: "kegiatan_bulanan/ambilkeg.php",
	        data: "id_jabatan="+id_jabatan,
	        cache: false,
	        success: function(msg){
	            $("#id_kat_bln").html(msg);
	        }
	    });
	  });
	});	
</script>