<script type="text/javascript">
	$(document).ready(function(){
		$("#data").load("kegiatan/data_kegiatan.php");
		$("#id-breadcrumbs").html("kegiatan");
	});

	function kegiatan() {
		$("#data").load("kegiatan/data_kegiatan.php");
		$("#id-breadcrumbs").html("kegiatan");
	}
	
	function tambahForm(){
		$("#form-nest").css({display:"block"});
		$.ajax({
			type:"GET",
			url:"kegiatan/tambah_kegiatan.php",
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
				$("#data").load("kegiatan/data_kegiatan.php");
			}
		});
		return false;
	}

	
	
	function deleteData(id,kegiatan){
		var pilih = confirm('Hapus '+kegiatan+' dari daftar ??');
		if(pilih==true){
				$.ajax({
					type:"GET",
					url:'kegiatan/hapus_kegiatan.php',
					data:"id_kh="+id,
					beforeSend:function(){
						$("#data").html("<img src='assets/images/ajax-loader.gif' />");
					},
					success:function(data){
						$('#data').html(data);
						$('#alert').load("kegiatan/alert_error.php");
					},
					error:function(data){
						$('#data').html(data);
						$('#alert').load("kegiatan/alert_error.php");
					}

				});
		}
	}
	
	function editData(id){
		$.ajax({
			type:"GET",
			url:'kegiatan/edit_kegiatan.php',
			data:"id_kh="+id,
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