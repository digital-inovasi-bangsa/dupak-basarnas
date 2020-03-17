<?php
session_start();
require_once('../../config/koneksi.php');
require_once('../../config/fungsi_sqltgl.php');
require_once('class.pegawai.php');
$pegawai = new pegawai($pdo);
if(!empty($_POST['nip'])){
	$nip				= $_POST['nip'];
	$nama_pegawai		= $_POST['nama_pegawai'];
	$tempat_lahir 		= $_POST['tempat_lahir'];
	$tgl_lahir	 		= $_POST['tgl_lahir'];
	$nomor_karpeg 		= $_POST['nomor_karpeg'];
	$jenis_kelamin 		= $_POST['jenis_kelamin'];
	$pendidikan 		= $_POST['pendidikan'];
	$Pangkat 			= $_POST['pangkat'];
	$golongan 			= $_POST['golongan'];
	$tgl_tmt	 		= $_POST['tgl_tmt'];
	$id_jabatan	 		= $_POST['id_jabatan'];
	$masa_kerja_lama	= $_POST['masa_kerja_lama'];
	$masa_kerja_baru	= $_POST['masa_kerja_baru'];
	$id_unit_kerja		= $_POST['id_unit_kerja'];
	$created_by 		= $_SESSION['s_user'];
	if($pegawai->create($nip,$nama_pegawai,$tempat_lahir,$tgl_lahir,$nomor_karpeg,$jenis_kelamin,$pendidikan,$Pangkat,$golongan,$tgl_tmt,$id_jabatan,$masa_kerja_baru,$masa_kerja_lama,$id_unit_kerja,$created_by)){
		$sg   = "ok";
		$msg1 = "Data telah ditambahkan";
		$alert='alert-success';
	}else{
		$g = "err";
		$msg2 = "Data tidak bisa dimasukan";
		$alert='alert-error';
	}
}
?>

<form id="forms" method="post" onSubmit="return submitForm('<?php echo $_SERVER['PHP_SELF']; ?>')" class="form-horizontal">
	<fieldset>
		<legend>Tambah Pegawai</legend>
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
			<div class="span6">
				<div class="control-group">
				<label class="control-label" for="nip" >NIP</label>
					<div class="controls">
					<input class="form-control input-mask-nip" name="nip" type="text" id="form-field-mask-2" name="nip" required />
					</div>
				</div>
				<div class="control-group">
				<label class="control-label" for="nama_pegawai" >Nama Pegawai</label>
					<div class="controls">
					<input type="text" class="span12" id="nama_pegawai" name="nama_pegawai" required>
					</div>
				</div>
				<div class="control-group">
				<label class="control-label" for="tempat_lahir" >Tempat Lahir</label>
					<div class="controls">
					<input type="text" class="span12" id="tempat_lahir" name="tempat_lahir">
					</div>
				</div>
				<div class="control-group">
						<label class="control-label" for="tgl_lahir">Tanggal Lahir</label>
							<div class="controls" >								
								<input type="text" id="tgl_lahir" class="tanggal span4" name="tgl_lahir" data-date-format="yyyy-mm-dd" />
						<i class="icon-calendar bigger-120"></i>
					</div>
				</div>

				<div class="control-group">
				<label class="control-label" for="nomor_karpeg" >Nomor Karpeg</label>
					<div class="controls">
					<input type="text" class="span12" id="nomor_karpeg" name="nomor_karpeg">
					</div>
				</div>
				<div class="control-group">
						<label class="control-label">Jenis Kelamin</label>
							<div class="controls">
							  <label>
									<input name="jenis_kelamin" type="radio" value="Laki-laki" checked="checked"/>
									<span class="lbl">Laki-laki</span>								
									<input name="jenis_kelamin" type="radio" value="Perempuan"  />
								    <span class="lbl">Perempuan</span>
								</label>
							</div>
						</div>
				<div class="control-group">
				<label class="control-label" for="pendidikan" >Pendidikan</label>
					<div class="controls">
					<input type="text" class="span12" id="pendidikan" name="pendidikan">
					</div>
				</div>
			</div>
			<div class="span6">
				<div class="control-group">
				<label class="control-label" for="pangkat" >Pangkat</label>
					<div class="controls">
					<input type="text" class="span12" id="pangkat" name="pangkat">
					</div>
				</div>
				<div class="control-group">
				<label class="control-label" for="golongan" >Golongan</label>
					<div class="controls">
					<input type="text" class="span12" id="golongan" name="golongan">
					</div>
				</div>
				
				<div class="control-group">
					<label class="control-label" for="id_jabatan" >Jabatan</label>
					<div class="controls">
					<select name="id_jabatan" id="id_jabatan" required>
						<option value=""></option>						
						<?php					
							$query = "SELECT * FROM jabatan ";
							$pegawai->select_jabatan($query);						
						?>
					</select>
					</div>
				</div>
				<div class="control-group">
						<label class="control-label" for="tgl_tmt">TMT</label>
							<div class="controls" >								
								<input type="text" id="tgl_tmt" required class="tanggal span4" name="tgl_tmt" data-date-format="yyyy-mm-dd" />
						<i class="icon-calendar bigger-120"></i>
					</div>
				</div>
				<div class="control-group">
				<label class="control-label" for="masa_kerja_lama" >Masa Kerja Lama</label>
					<div class="controls">
					<input type="text" class="span12" id="masa_kerja_lama" name="masa_kerja_lama">
					</div>
				</div>
				<div class="control-group">
				<label class="control-label" for="masa_kerja_baru" >Masa Kerja Baru</label>
					<div class="controls">
					<input type="text" class="span12" id="masa_kerja_baru" name="masa_kerja_baru">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="id_unit_kerja" >Unit Kerja</label>
					<div class="controls">
					<select name="id_unit_kerja" id="id_unit_kerja" required>
						<option value=""></option>						
						<?php				
							$query = "SELECT * FROM unit_kerja ";
							$pegawai->select_unit_kerja($query);						
						?>
					</select>
					</div>
				</div>
				
				</div>						
		</div>
		<div class="form-actions">
			<div class="controls">
			<button type="submit" class="btn btn-primary">Tambah</button>
			<button type="button" id="close" class="btn btn-primary" >Tutup</button>
			</div>
		</div>
		
	</fieldset>
</form>

<script type="text/javascript">
	
	$('.date-picker').datepicker().next().on(ace.click_event, function(){
		$(this).prev().focus();
	});
	$(".tanggal").datepicker({
			dateFormat: "yyyy-mm-dd",
            changeMonth: true,
            changeYear: true,
			yearRange: '1970:2050',
			autoclose: true,
			todayHighlight: true,
	});
	
	$(document).ready(function(){
		$("#close").click(function(){
			$("#form-nest").hide("slow");
		});
		$(".chosen-select").chosen();
		$.mask.definitions['~']='[+-]';
	$('.input-mask-phone').mask('9999-9999-9999');
	$('.input-mask-nip').mask('999999999999999999');
	$(".input-mask-product").mask("a*-999-a999",{placeholder:" ",completed:function(){alert("You typed the following: "+this.val());}});
	});

</script>