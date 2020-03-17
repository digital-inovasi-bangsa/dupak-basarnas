<?php
	include_once('../config/koneksi.php');
	include_once('../config/jml_hari.php');
	include_once('../config/fungsi_indotgl.php');
	include_once('../cl/class.cl.php');
	include_once('../lap_dupak/class.usulan_dupak.php');
	$lap 		= new usulan_dupak($pdo);
	$cl 		= new cl($pdo);
	$bulan 		= $_REQUEST['bulan'];
	$bulan1		= $_REQUEST['bulan1'];
    $tahun 		= $_REQUEST['tahun'];	
    $id_jabatan = $_REQUEST['id_jabatan'];	
    $id_pegawai = $_REQUEST['id_pegawai'];
    $ttd1		= $_REQUEST['petugas_pemeriksa'];
    $nip1 		= $_REQUEST['nip1'];
    $ttd2		= $_REQUEST['tim_penilai'];
    $nip2 		= $_REQUEST['nip2'];
    $ttd3		= $_REQUEST['petugas_pengelola'];
    $nip3 		= $_REQUEST['nip3'];
    $print_type = $_REQUEST['print_type'];
    $id_kat_jab = $_REQUEST['id_kat_jab'];
    if(isset($id_pegawai))
	{
		extract($cl->getIdPegawai($id_pegawai));	
	}
	if(isset($id_jabatan))
	{
		extract($cl->getIdJabatan($id_jabatan));	
	}		

	if ($print_type=='view') {
		if ($id_kat_jab=='1') {
			include_once('../cl/bidan/bidan.php');
		}		
	} elseif ($print_type=='pdf') {
		if ($id_kat_jab=='1') {
			include_once('../cl/bidan/bidan_pdf.php');
		}		
	} elseif ($print_type=='xls') {
		if ($id_kat_jab=='1') {
			include_once('../cl/bidan/bidan_xls.php');
		}		
	}

	
	
?>