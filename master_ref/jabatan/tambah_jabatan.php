<?php
session_start();
require_once '../../config/koneksi.php';
require_once 'class.jabatan.php';
require_once '../../config/fungsi_sqltgl.php';
$jab = new jabatan($pdo);
if(!empty($_POST['jabatan'])){
	$jabatan		= $_POST['jabatan'];
	$id_kat_jab		= $_POST['id_kat_jab'];
	$created_by 	= $_SESSION['s_user'];
	if($jab->create($id_kat_jab,$jabatan,$created_by)){
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
		<legend>Tambah Jabatan</legend>
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
					<label class="control-label" for="id_kat_jab" >Kategori Jabatan</label>
					<div class="controls">
					<select name="id_kat_jab" id="id_kat_jab" class="chosen-select span10px" data-placeholder="Choose to Kategori Jabatan..." required>
						<option value=""></option>						
						<?php					
							$query = "SELECT * FROM kat_jab ";
							$jab->select_kat_jab($query);						
						?>
					</select>
					</div>
				</div>
				<div class="control-group">
				<label class="control-label" for="jabatan" >Jabatan</label>
					<div class="controls">
					<textarea class="span12" id="jabatan" name="jabatan" required></textarea>
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

	$(document).ready(function(){
		$("#close").click(function(){
			$("#form-nest").hide("slow");
		});
	});
</script>