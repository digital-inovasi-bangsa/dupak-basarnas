<?php 
	session_start();
	include_once('../config/koneksi.php');
	require_once('../config/fungsi_sqltgl.php');
	require_once('class.kegiatan.php');
	$keg = new kegiatan_harian($pdo);
	if(!empty($_POST['id_kegiatan'])){
		$id_kh 			= $_POST['id_kh'];
		$id_jabatan		= $_POST['id_jabatan'];
		$id_pegawai 	= $_POST['id_pegawai'];
		$tgl 			= tgl_sql($_POST['tgl']);
		$id_kategori 	= $_POST['id_kategori'];
		$id_sub_kategori= $_POST['id_sub_kategori'];
		$id_kegiatan 	= $_POST['id_kegiatan'];
		$nilai 		 	= $_POST['nilai'];
		$update_by		= $_SESSION['s_user'];
		if($keg->update($id_kh,$id_jabatan,$id_pegawai,$tgl,$id_kategori,$id_sub_kategori,$id_kegiatan,$nilai,$update_by)){
			$sg   = "ok";
			$msg1 = "Data Berhasil Di Update";
			$alert='alert-success';
		}else{
			$g = "err";
			$msg2 = "Data Gagal Di Update";
			$alert='alert-error';
		}
	}
?>

<form id="forms" method="post" onSubmit="return submitForm('<?php echo $_SERVER['PHP_SELF']; ?>')" class="form-horizontal">
	<fieldset>
		<legend>Edit kegiatan</legend>
		<span>
		<?php
		if(isset($sg) and $sg=='ok'){
			echo "
			<div class='alert $alert'>
			<button type='button' class='close' data-dismiss='alert'>&times;</button>
			$msg1
			</div>";
        	?>
        <div class="form-actions">
			<div class="controls">
				<button type="button" id="close" class="btn btn-primary" >Tutup</button>
			</div>
		</div>
		<?php }elseif(isset($sg) and $sg=='err')
		{
			echo "
			<div class='alert $alert'>
			<button type='button' class='close' data-dismiss='alert'>&times;</button>
			$msg2
			</div>"; 
		}
		else
		{
		if(isset($_GET['id_kh']))
		{
			$id = $_GET['id_kh'];
			extract($keg->getID($id));	
		} 
		?>
		</span>
		<div class="row-fluid">
			<div class="span8">
			<input type="hidden" id="id_kh" name="id_kh" value="<?php echo $id_kh; ?>" required>
				<div class="control-group">
					<label class="control-label"> Jabatan</label>
					<div class="controls">
						<select name="id_jabatan" id="id_jabatan" required class="span12px" >
							<option value="<?php echo $id_jabatan; ?>"><?php echo $jabatan; ?></option>	
							<?php
								$keg->jabatan();
							?>			
						</select>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label"> Pegawai</label>
					<div class="controls">
						<select name="id_pegawai" id="id_pegawai" required class="span12px">
							<option value="<?php echo $id_pegawai; ?>"><?php echo $nama_pegawai; ?></option>	

						</select>
					</div>
				</div>
				
				<div class="control-group">
				<label class="control-label" for="inputtgl">Tanggal Kegiatan</label>
					<div class="controls" >								
						<input type="text" id="tgl" class="tanggal span7" value="<?php echo tgl_sql1($tgl_kegiatan); ?>" required name="tgl" data-date-format="dd-mm-yyyy" />
						<i class="icon-calendar bigger-120"></i>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Kategori</label>
					<div class="controls">
						<select name="id_kategori" id="id_kategori" required class="span12px">
							<option value="<?php echo $id_kategori; ?>"><?php echo $kategori; ?></option>
							<?php 
								$query = "SELECT * FROM kategori WHERE id_kat_jab = '$id_kat_jab' ";
								$keg->kategori($query); 
							?>						
						</select>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label"> Sub Kategori</label>
					<div class="controls">
						<select name="id_sub_kategori" id="id_sub_kategori" required class="span12px"  >
							<option value="<?php echo $id_sub_kategori; ?>"><?php echo $sub_kategori; ?></option>
						</select>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label"> Kegiatan</label>
					<div class="controls">
						<select name="id_kegiatan" id="id_kegiatan" required class="span12px" >
							<option value="<?php echo $id_kegiatan; ?>"><?php echo $kegiatan; ?></option>				
						</select>
					</div>
				</div>

				<div class="control-group">
				<label class="control-label" for="Nilai" >Nilai</label>
					<div class="controls">
					<input type="text" id="spinner1" name="nilai" required />
					<div class="space-6"></div>
					</div>
				</div>


				
				</div>						
		</div>
		<div class="form-actions">
			<div class="span6">
				<div class="controls-group">
				<button type="submit" class="btn btn-primary">Edit</button>
				<button type="button" id="close" class="btn btn-primary" >Tutup</button>
				</div>
			</div>
			<div class="span6">
			<div class="control-group">
				<label class="control">Data Input :<?php echo "$created_by"; echo " - "; echo "$created_at"; ?> </label>
				<label class="control">Data Update :<?php echo "$update_by"; echo " - "; echo "$update_at"; ?> </label>
			</div>
		</div>
		<?php 
		}
		?>		
	</fieldset>
</form>
<script type="text/javascript">
	$(document).ready(function(){
		$("#close").click(function(){
			$("#form-nest").hide("slow");
		});

		$('#spinner1').ace_spinner({value:'<?php echo $nilai ?>',min:0,max:200,step:1, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
		.closest('.ace-spinner')
		.on('changed.fu.spinbox', function(){
			//alert($('#spinner1').val())
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

		var htmlobjek;		  
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
		  });
	});	
</script>