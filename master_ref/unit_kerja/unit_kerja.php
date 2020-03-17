<script type="text/javascript">
	$(document).ready(function(){
		$("#data").load("master_ref/unit_kerja/data_unit_kerja.php");
		$("#id-breadcrumbs").html("Unit Kerja");
	});

	function unit_kerja() {
		$("#data").load("master_ref/unit_kerja/data_unit_kerja.php");
		$("#id-breadcrumbs").html("Unit Kerja");
	}
	
	function tambahForm(){
		$("#form-nest").css({display:"block"});
		$.ajax({
			type:"GET",
			url:"master_ref/unit_kerja/tambah_unit_kerja.php",
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
				$("#data").load("master_ref/unit_kerja/data_unit_kerja.php");
			}
		});
		return false;
	}
	
	function deleteData(id,unit_kerja){
		var pilih = confirm('Hapus '+unit_kerja+' dari daftar ??');
		if(pilih==true){
				$.ajax({
					type:"GET",
					url:'master_ref/unit_kerja/hapus_unit_kerja.php',
					data:"id_unit_kerja="+id,
					beforeSend:function(){
						$("#data").html("<img src='assets/images/ajax-loader.gif' />");
					},
					success:function(data){
						$('#data').html(data);
						$('#alert').load("master_ref/jabatan/alert_error.php");
					},
					error:function(data){
						$('#data').html(data);
						$('#alert').load("master_ref/jabatan/alert_error.php");
					}
				});
		}
	}
	
	function editData(id){
		$.ajax({
			type:"GET",
			url:'master_ref/unit_kerja/edit_unit_kerja.php',
			data:"id_unit_kerja="+id,
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