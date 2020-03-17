<?php
	include_once('../config/koneksi.php');
	include_once('../config/fungsi_indotgl.php');
	include_once('../kegiatan_bulanan/class.lap_keg_bln.php');
	$lap 		= new lap_keg_bln($pdo);
	$bulan 		= $_REQUEST['bulan'];
    $tahun 		= $_REQUEST['tahun'];	
    $id_jabatan = $_REQUEST['id_jabatan'];	
    $id_pegawai = $_REQUEST['id_pegawai'];
    $kepala 	= $_REQUEST['kepala'];
    $nip_kepala = $_REQUEST['nip_kepala'];
    $print_type = $_REQUEST['print_type'];
    $id_kat_jab = $_REQUEST['id_kat_jab'];
    if(isset($id_pegawai))
	{
		extract($lap->getIdPegawai($id_pegawai));	
	}
	if(isset($id_jabatan))
	{
		extract($lap->getIdJabatan($id_jabatan));	
	}

	$thn1 = date('Y',strtotime($tgl_tmt));
	if ($tahun<$thn1) {
		$error1 = 'Y';
		echo "	<div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert'>&times;</button>
					<strong>Terjadi kesalahan !</strong> Tahun yang anda pilih lebih kecil dari TMT Pegawai 
				</div>";
	} elseif ($tahun==$thn1) {
		if ($bulan=='01') {
			$semester='I';
		}else{
			$semester='II';
		}
	} elseif ($tahun>$thn1) {
		if ($tahun==$thn1+1) {
			if ($bulan=='01') {
				$semester='III';
			}else{
				$semester='IV';
			}
		}elseif ($tahun==$thn1+2) {
			if ($bulan=='01') {
				$semester='V';
			}else{
				$semester='VI';
			}
		}elseif ($tahun==$thn1+3) {
			if ($bulan=='01') {
				$semester='VII';
			}else{
				$semester='VIII';
			}
		}elseif ($tahun==$thn1+4) {
			if ($bulan=='01') {
				$semester='IX';
			}else{
				$semester='X';
			}
		}else{
			$error2 = 'Y';
			echo "<div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert'>&times;</button>
					<strong>Terjadi kesalahan !</strong> Tahun yang anda pilih melelebihi dari semester X 
				  </div>";
		}
	}
	if ($bulan=="01") {
		$bln1 = "01";
		$bln2 = "02";
		$bln3 = "03";
		$bln4 = "04";
		$bln5 = "05";
		$bln6 = "06";
	}else{
		$bln1 = "07";
		$bln2 = "08";
		$bln3 = "09";
		$bln4 = "10";
		$bln5 = "11";
		$bln6 = "12";
	}

	if ($tahun<$thn1 OR isset($error2) and $error2=='Y' ) {
		echo "";			
	}else{
		if ($print_type=='view') {
			if ($id_kat_jab=='1') {
				include_once('../kegiatan_bulanan/lap_bidan/bidan_bln.php');
			}		
		} elseif ($print_type=='pdf') {
			if ($id_kat_jab=='1') {
				include_once('../kegiatan_bulanan/lap_bidan/bidan_bln_pdf.php');
			}		
		} elseif ($print_type=='xls') {
			if ($id_kat_jab=='1') {
				include_once('../kegiatan_bulanan/lap_bidan/bidan_bln_xls.php');
			}		
		}	
	}		
	
?>