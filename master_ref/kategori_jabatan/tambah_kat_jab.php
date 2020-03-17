<?php
session_start();
require_once '../../config/koneksi.php';
require_once 'class.kat_jab.php';
require_once '../../config/fungsi_sqltgl.php';
$jab = new kat_jab($pdo);
if(!empty($_POST['kat_jab'])){
	$kat_jab		= $_POST['kat_jab'];
	$created_by 	= $_SESSION['s_user'];
	if($jab->create($kat_jab,$created_by)){
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
		<legend>Tambah Kategori Jabatan</legend>
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
				<label class="control-label" for="kat_jab" >Kategori jabatan</label>
					<div class="controls">
					<textarea class="span12" id="kat_jab" name="kat_jab" required></textarea>
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