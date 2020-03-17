<script type="text/javascript">
	$(document).ready(function(){
		$("#data").load("master_ref/kategori_jabatan/data_kat_jab.php");
		$("#id-breadcrumbs").html("Kategori Jabatan");
	});

	function kat_jab() {
		$("#data").load("master_ref/kategori_jabatan/data_kat_jab.php");
		$("#id-breadcrumbs").html("Kategori Jabatan");
	}
	
	function tambahForm(){
		$("#form-nest").css({display:"block"});
		$.ajax({
			type:"GET",
			url:"master_ref/kategori_jabatan/tambah_kat_jab.php",
			data:null,
			beforeSend:function(){
				$("#form").html("<img src='assets/images/ajax-loader.gif' />");
			},
			success:function(data){
				$('#form').html(data);
			}
		});
		$('#form').show("slow");
	}
	
	function submitForm(url){
		var thisPost = $("#forms").serialize();
		$.ajax({
			type:"POST",
			url:url,
			data:thisPost,
			beforeSend:function(){
				$("#form").html("<img src='assets/images/ajax-loader.gif' />");
				$("#data").html("<img src='assets/images/ajax-loader.gif' />");
			},
			success:function(data){
				$('#form').html(data);
				$("#data").load("master_ref/kategori_jabatan/data_kat_jab.php");
			}
		});
		return false;
	}
	
	function deleteData(id,kat_jab){
		var pilih = confirm('Hapus '+kat_jab+' dari daftar ??');
		if(pilih==true){
				$.ajax({
					type:"GET",
					url:'master_ref/kategori_jabatan/hapus_kat_jab.php',
					data:"id_kat_jab="+id,
					beforeSend:function(){
						$("#data").html("<img src='assets/images/ajax-loader.gif' />");
					},
					success:function(data){
						$('#data').html(data);
						$('#alert').load("master_ref/kategori_jabatan/alert_error.php");
					},
					error:function(data){
						$('#data').html(data);
						$('#alert').load("master_ref/kategori_jabatan/alert_error.php");
					}

				});
		}
	}
	
	function editData(id){
		$.ajax({
			type:"GET",
			url:'master_ref/kategori_jabatan/edit_kat_jab.php',
			data:"id_kat_jab="+id,
			beforeSend:function(){
				$("#form-nest").css({display:"block"});
				$("#form").html("<img src='assets/images/ajax-loader.gif' />");
			},
			success:function(data){
				$('#form').html(data);
			}
		});
		$('#form').fadeIn(3000);
	}
	
	
</script>


<div id="form-nest" class="row-fluid" style="display:none">
	<div id="form" class="span12 well">
		
	</div>
</div>

<div class="row-fluid">
	<div id="data" class="span12 well">
		<img src='assets/images/ajax-loader.gif' />
	</div>
</div>