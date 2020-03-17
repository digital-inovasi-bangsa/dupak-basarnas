<?php 
	session_start();
	include_once '../../config/koneksi.php';
	require_once 'class.jabatan.php';
	$jab = new jabatan($pdo);
	if(!empty($_POST['id_jabatan'])){
		$id_jabatan		= $_POST['id_jabatan'];
		$id_kat_jab		= $_POST['id_kat_jab'];
		$jabatan		= $_POST['jabatan'];
		$update_by		= $_SESSION['s_user'];
		if($jab->update($id_jabatan,$id_kat_jab,$jabatan,$update_by)){
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
		<legend>Edit Jabatan</legend>
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
		if(isset($_GET['id_jabatan']))
		{
			$id = $_GET['id_jabatan'];
			extract($jab->getID($id));	
		} 
		?>
		</span>
		<div class="row-fluid">
			<div class="span9">
				<div class="control-group">
				<label class="control-label" for="id_jabatan" >ID</label>
					<div class="controls">
					<input type="text" id="id_jabatan" name="id_jabatan" value="<?php echo $id_jabatan; ?>" readonly="readonly">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="id_kat_jab" > Kategori Jabatan</label>
					<div class="controls">
					<select name="id_kat_jab" id="id_kat_jab" class="chosen-select span10px" data-placeholder="Choose to Kategori Jabatan..." required>
						<option value="<?php echo $id_kat_jab; ?>"><?php echo $kat_jab; ?></option>						
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
					<textarea class="span12" id="jabatan" name="jabatan" value="<?php echo $jabatan; ?>" required><?php echo $jabatan; ?></textarea>
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