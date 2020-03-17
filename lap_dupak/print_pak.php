<?php
	include_once('../config/koneksi.php');
	include_once('../config/jml_hari.php');
	include_once('../config/fungsi_indotgl.php');
	include_once('../lap_dupak/class.pak.php');
	include_once('../cl/class.cl.php');
	include_once('../lap_dupak/class.usulan_dupak.php');
	$lap 		= new usulan_dupak($pdo);
	$lap1 		= new pak($pdo);
	$cl 		= new cl($pdo);
	$bulan 		= $_REQUEST['bulan'];
	$bulan1		= $_REQUEST['bulan1'];
    $tahun 		= $_REQUEST['tahun'];	
    $id_jabatan = $_REQUEST['id_jabatan'];	
    $id_pegawai = $_REQUEST['id_pegawai'];
    //$pengusul 	= $_REQUEST['pengusul'];
    //$nip1 		= $_REQUEST['nip1'];
    //$timPenilai	= $_REQUEST['tim_penilai'];
    //$nip2 		= $_REQUEST['nip2'];
    //$pejabatPenilai= $_REQUEST['pejabat_penilai'];
    //$nip3 		= $_REQUEST['nip3'];
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
			include_once('../lap_dupak/print_bidan/pak_bdn.php');
		}		
	} elseif ($print_type=='pdf') {
		if ($id_kat_jab=='1') {
			include_once('../lap_dupak/print_bidan/pak_bdn_pdf.php');
		}		
	} elseif ($print_type=='xls') {
		if ($id_kat_jab=='1') {
			include_once('../lap_dupak/print_bidan/pak_bdn_xls.php');
		}		
	}
	
?>