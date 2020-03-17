<?php 
	session_start();
	include_once('../../config/koneksi.php');
	require_once('class.unit_kerja.php');
	$unit = new unit_kerja($pdo);
	if(!empty($_POST['id_unit_kerja'])){
		$unit_kerja 		= $_POST['unit_kerja'];
		$id_unit_kerja		= $_POST['id_unit_kerja'];
		$alamat_unit_kerja	= $_POST['alamat_unit_kerja'];
		$keterangan 		= $_POST['keterangan'];
		$aktif				= $_POST['aktif'];
		$update_by			= $_SESSION['s_user'];
		if($unit->update($id_unit_kerja,$unit_kerja,$alamat_unit_kerja,$keterangan,$aktif,$update_by)){
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
		<legend>Edit Unit Kerja</legend>
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
		if(isset($_GET['id_unit_kerja']))
		{
			$id = $_GET['id_unit_kerja'];
			extract($unit->getID($id));	
		} 
		?>
		</span>
		<div class="row-fluid">
			<div class="span9">
				<div class="control-group">
				<label class="control-label" for="id_unit_kerja" >ID</label>
					<div class="controls">
					<input type="text" id="id_unit_kerja" name="id_unit_kerja" value="<?php echo $id_unit_kerja; ?>" readonly="readonly">
					</div>
				</div>
				<div class="control-group">
				<label class="control-label" for="unit_kerja" >Unit Kerja</label>
					<div class="controls">
					<input type="text" id="unit_kerja" name="unit_kerja" autocomplite="off" value="<?php echo $unit_kerja; ?>" required  />
					</div>
				</div>
				<div class="control-group">
				<label class="control-label" for="alamat_unit_kerja" >Alamat</label>
					<div class="controls">
					<textarea class="span12" id="alamat_unit_kerja" name="alamat_unit_kerja" value="<?php echo $alamat_unit_kerja; ?>" required><?php echo $alamat_unit_kerja; ?></textarea>
					</div>
				</div>
				<div class="control-group">
				<label class="control-label" for="keterangan" >Keterangan</label>
					<div class="controls">
					<textarea class="span12" id="keterangan" name="keterangan" value="<?php echo $keterangan; ?>" ><?php echo $keterangan; ?></textarea>
					</div>
				</div>		
				<div class="control-group">
					<label class="control-label">Aktif</label>
					<div class="controls">
						<label>
							<input name="aktif" type="radio" value="Y" <?php echo ($aktif=='Y')?'checked':''; ?> />
							<span class="lbl"> Y</span>
						</label>
						<label>
							<input name="aktif" type="radio" value="N" <?php echo ($aktif=='N')?'checked':''; ?> />
							<span class="lbl"> N</span>
						</label>
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
	});	
</script>