<script type="text/javascript">
	$(document).ready(function(){
		$("#data").load("kegiatan_bulanan/data_keg_bln.php");
		$("#id-breadcrumbs").html("kegiatan Bulanan");
	});

	function kegiatan_bulanan() {
		$("#data").load("kegiatan_bulanan/data_keg_bln.php");
		$("#id-breadcrumbs").html("kegiatan");
	}
	
	function tambahForm(){
		$("#form-nest").css({display:"block"});
		$.ajax({
			type:"GET",
			url:"kegiatan_bulanan/tambah_keg_bln.php",
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
				$("#data").load("kegiatan_bulanan/data_keg_bln.php");
			}
		});
		return false;
	}

	
	
	function deleteData(id_kh_bln,keg_bln){
		var pilih = confirm('Hapus '+keg_bln+' dari daftar ??');
		if(pilih==true){
				$.ajax({
					type:"GET",
					url:'kegiatan_bulanan/hapus_keg_bln.php',
					data:"id_kh_bln="+id_kh_bln,
					beforeSend:function(){
						$("#data").html("<img src='assets/images/ajax-loader.gif' />");
					},
					success:function(data){
						$('#data').html(data);
						$('#alert').load("kegiatan_bulanan/alert_error.php");
					},
					error:function(data){
						$('#data').html(data);
						$('#alert').load("kegiatan_bulanan/alert_error.php");
					}

				});
		}
	}
	
	function editData(id_kh_bln){
		$.ajax({
			type:"GET",
			url:'kegiatan_bulanan/edit_keg_bln.php',
			data:"id_kh_bln="+id_kh_bln,
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