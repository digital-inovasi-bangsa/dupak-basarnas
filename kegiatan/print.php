<?php
	include_once('../config/koneksi.php');
	include_once('../config/fungsi_indotgl.php');
	include_once('../kegiatan/class.lap_keg_harian.php');
	$lap 		= new lap_keg_harian($pdo);
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

	if ($print_type=='view') {
		if ($id_kat_jab=='1') {
			include_once('../kegiatan/lap_bidan/bidan.php');
		} elseif ($id_kat_jab=='2') {
			include_once('../kegiatan/lap_dokter/dokter.php');
		}

	} elseif ($print_type=='pdf') {
		if ($id_kat_jab=='1') {
			include_once('../kegiatan/lap_bidan/bidan_pdf.php');
		}		
	} elseif ($print_type=='xls') {
		if ($id_kat_jab=='1') {
			include_once('../kegiatan/lap_bidan/bidan_xls.php');
		}		
	}

?>