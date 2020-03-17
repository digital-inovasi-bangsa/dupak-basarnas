<?php
session_start();
require_once('../config/koneksi.php');
require_once('class.kegiatan.php');
require_once('../config/fungsi_sqltgl.php');
$keg = new kegiatan_harian($pdo);
if(!empty($_POST['id_jabatan'])){
	$id_jabatan		= $_POST['id_jabatan'];
	$id_pegawai 	= $_POST['id_pegawai'];
	$tgl 			= tgl_sql($_POST['tgl']);
	$id_kategori 	= $_POST['id_kategori'];
	$id_sub_kategori= $_POST['id_sub_kategori'];
	$id_kegiatan 	= $_POST['id_kegiatan'];
	$nilai 		 	= $_POST['nilai'];
	$katjab 		= $_POST['id_kat_jab'];
	$created_by 	= $_SESSION['s_user'];
	if($keg->create($id_jabatan,$id_pegawai,$tgl,$id_kategori,$id_sub_kategori,$id_kegiatan,$nilai,$created_by)){
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
		<legend>Tambah Kegiatan Harian</legend>
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
				<label class="control-label" for="inputtgl">Tanggal Kegiatan</label>
					<div class="controls" >								
						<input type="text" id="tgl" class="tanggal span7" value="<?php echo date('d-m-Y'); ?>" required name="tgl" data-date-format="dd-mm-yyyy" />
						<i class="icon-calendar bigger-120"></i>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Kategori</label>
					<div class="controls">
						<select name="id_kategori" id="id_kategori" required class="span12px">
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
						<select name="id_sub_kategori" id="id_sub_kategori" required class="span12px"  >
							<option value=""></option>	

						</select>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label"> Kegiatan</label>
					<div class="controls">
						<select name="id_kegiatan" id="id_kegiatan" required class="span12px" >
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
	  $("#id_kategori").change(function(){
	    var id_kategori = $("#id_kategori").val();
	    $.ajax({
	        url: "kegiatan/ambilkategori.php",
	        data: "id_kategori="+id_kategori,
	        cache: false,
	        success: function(msg){
	            $("#id_sub_kategori").html(msg);
	        }
	    });
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

	  $("#id_sub_kategori").change(function(){
	    var id_sub_kategori = $("#id_sub_kategori").val();
	    $.ajax({
	        url: "kegiatan/ambilkegiatan.php",
	        data: "id_sub_kategori="+id_sub_kategori,
	        cache: false,
	        success: function(msg){
	            $("#id_kegiatan").html(msg);
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
	        url: "kegiatan/ambilkeg.php",
	        data: "id_jabatan="+id_jabatan,
	        cache: false,
	        success: function(msg){
	            $("#id_kategori").html(msg);
	        }
	    });
	  });
	});	
</script>