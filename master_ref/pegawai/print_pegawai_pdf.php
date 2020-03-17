<?php
/* 
	-- --------------------------------------------------------
	-- --------------------------------------------------------
	-- Nama File : cetak-laporan.php  
	-- Author    : AKSINDOTAMA 
	-- Email     : aksindotamagroup@gmail.com
	-- Website   : www.aksindotama.com 
	-- Copyright [c] 2016 AKSINDOTAMA 
	*/

	session_start();
	include_once('../../config/koneksi.php');
	include_once('../../config/fungsi_indotgl.php');
	include_once('class.pegawai.php');

	// Define relative path from this script to mPDF
	$nama_dokumen='Daftar Pegawai'; //Beri nama file PDF hasil.
	defined('../../assets/mpdf60/');
	include_once("../../assets/mpdf60/mpdf.php");
	$mpdf=new mPDF('utf-8', 'A4'); // Create new mPDF Document

	//Beginning Buffer to save PHP variables and HTML tags
	ob_start();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Print Document</title>
<link href="../../assets/css/print.css" rel="stylesheet" type="text/css" media="print" />
<link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
</style>
</head>
<body>
<div style="width:95%;margin:0 auto;">
<div class="row-fluid">
<?php include_once('../../header_print.php') ?>
<h3 class="header smaller lighter blue">Daftar Pegawai</h3>
</div>
<table width="100%" border="1" align="Top" cellpadding="5" cellspacing="5" padding-top="0px">
	<thead>
		<tr align="center">
			<th width="50px"><div align="center">No</div></th>
			<th><div align="center">NIP</div></th>
			<th><div align="center">No Karpeg</div></th>
			<th><div align="center">Nama Pegawai</div></th>
			<th><div align="center">Tempat Tanggal Lahir</div></th>
			<th><div align="center">JK</div></th>
			<th><div align="center">Jabatan</div></th>
			<th><div align="center">Unit Kerja</div></th>
		</tr>
	</thead>
	<tbody>
		<?php
			$pegawai = new pegawai($pdo);
			if($_SESSION['s_level']=='administrator'){		
			$query = "SELECT * FROM v_peg_unit_jab";
			}else{
			$query = "SELECT * FROM v_peg_unit_jab";
				}
			$pegawai->prin($query);
		?>
	</tbody>
</table>
</div>
</body>
</html>
<?php
	$html = ob_get_contents(); //Proses untuk mengambil hasil dari OB..
	ob_end_clean();
	//Here convert the encode for UTF-8, if you prefer the ISO-8859-1 just change for $mpdf->WriteHTML($html);
	$mpdf->WriteHTML(utf8_encode($html));
	$mpdf->Output($nama_dokumen.".pdf" ,'I');
	exit;	
?>