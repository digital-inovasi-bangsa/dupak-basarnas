<?php 
	session_start();
	include_once '../../config/koneksi.php';
	require_once 'class.kat_jab.php';
	$jab = new kat_jab($pdo);
	if(!empty($_POST['id_kat_jab'])){
		$id_kat_jab		= $_POST['id_kat_jab'];
		$kat_jab		= $_POST['kat_jab'];
		$update_by		= $_SESSION['s_user'];
		if($jab->update($id_kat_jab,$kat_jab,$update_by)){
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
		<legend>Edit Kategori Jabatan</legend>
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
		if(isset($_GET['id_kat_jab']))
		{
			$id = $_GET['id_kat_jab'];
			extract($jab->getID($id));	
		} 
		?>
		</span>
		<div class="row-fluid">
			<div class="span9">
				<div class="control-group">
				<label class="control-label" for="id_kat_jab" >ID</label>
					<div class="controls">
					<input type="text" id="id_kat_jab" name="id_kat_jab" value="<?php echo $id_kat_jab; ?>" readonly="readonly">
					</div>
				</div>
				
				<div class="control-group">
				<label class="control-label" for="kat_jab" >Kategori Jabatan</label>
					<div class="controls">
					<textarea class="span12" id="kat_jab" name="kat_jab" value="<?php echo $kat_jab; ?>" required><?php echo $kat_jab; ?></textarea>
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