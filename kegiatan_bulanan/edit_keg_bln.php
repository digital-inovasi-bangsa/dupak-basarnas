<?php 
	session_start();
	include_once('../config/koneksi.php');
	require_once('../config/fungsi_indotgl.php');
	require_once('class.keg_bln.php');
	$keg = new keg_bln($pdo);
	if(!empty($_POST['id_kh_bln'])){
		$id_kh_bln		= $_POST['id_kh_bln'];
		$id_jabatan		= $_POST['id_jabatan'];
		$id_pegawai 	= $_POST['id_pegawai'];
		$bulan 			= $_POST['bulan'];
		$tahun 			= $_POST['tahun'];
		$id_kat_bln 	= $_POST['id_kat_bln'];
		$id_sub_kat_bln = $_POST['id_sub_kat_bln'];
		$id_keg_bln		= $_POST['id_keg_bln'];
		$nilai 		 	= $_POST['nilai'];
		$update_by		= $_SESSION['s_user'];
		if($keg->update($id_kh_bln,$id_jabatan,$id_pegawai,$bulan,$tahun,$id_kat_bln,$id_sub_kat_bln,$id_keg_bln,$nilai,$update_by)){
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
		<legend>Edit Kegiatan Bulanan</legend>
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
		if(isset($_GET['id_kh_bln']))
		{
			$id = $_GET['id_kh_bln'];
			extract($keg->getID($id));	
		} 
		?>
		</span>
		<div class="row-fluid">
			<div class="span8">
			<input type="hidden" id="id_kh_bln" name="id_kh_bln" value="<?php echo $id_kh_bln; ?>" required>
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
					<label class="control-label"> Priode</label>
					<div class="controls">
						<select name="bulan" id="bulan" required >							
							<option value="<?php echo $bln_keg; ?>"><?php echo getBulan($bln_keg); ?></option>
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
						<select name="tahun" id="tahun" required >
							<option value="<?php echo $thn_keg; ?>"><?php echo $thn_keg; ?></option>
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
							<option value="<?php echo $id_kat_bln; ?>"><?php echo $kat_bln; ?></option>
							<?php 
								$query = "SELECT * FROM kat_bln WHERE id_kat_jab = '$id_kat_jab' ";
								$keg->kategori($query);	
							?>						
						</select>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label"> Sub Kategori</label>
					<div class="controls">
						<select name="id_sub_kat_bln" id="id_sub_kat_bln" required class="span12px"  >
							<option value="<?php echo $id_sub_kat_bln; ?>"><?php echo $sub_kat_bln; ?></option>	

						</select>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label"> Kegiatan</label>
					<div class="controls">
						<select name="id_keg_bln" id="id_keg_bln" required class="span12px" >
							<option value="<?php echo $id_keg_bln; ?>"><?php echo $keg_bln; ?></option>					
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