<?php
	
	// Define relative path from this script to mPDF
	$nama_dokumen='laporan Usulan Dupak'; //Beri nama file PDF hasil.
	defined('../assets/mpdf60/');
	include_once("../assets/mpdf60/mpdf.php");
	$mpdf=new mPDF('utf-8', 'A4'); // Create new mPDF Document

	//Beginning Buffer to save PHP variables and HTML tags
	ob_start();
?>
<html xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:x="urn:schemas-microsoft-com:office:excel"
xmlns="http://www.w3.org/TR/REC-html40">

<head>
<title>APLIKASI DUPAK</title>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=ProgId content=Excel.Sheet>
<meta name=Generator content="Microsoft Excel 15">
<link rel=File-List href="usulan_dupak_bidan_files/filelist.xml">
<link rel="icon" type="image/jpg" href="../assets/images/logo_warna.jpg" />
<style id="usulan dupak_32393_Styles">
<!--table
	{mso-displayed-decimal-separator:"\.";
	mso-displayed-thousand-separator:"\,";}
.xl1532393
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6332393
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:14.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6432393
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:top;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6532393
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:general;
	vertical-align:top;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6632393
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6732393
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6832393
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl6932393
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:top;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl7032393
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:general;
	vertical-align:top;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl7132393
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	background:#99CCFF;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl7232393
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl7332393
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl7432393
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	background:#99CCFF;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl7532393
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	background:silver;
	mso-pattern:black none;
	white-space:nowrap;}
.xl7632393
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:top;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl7732393
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:left;
	vertical-align:top;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl7832393
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:general;
	vertical-align:top;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl7932393
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl8032393
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl8132393
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:"Short Date";
	text-align:center;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl8232393
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl8332393
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:top;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl8432393
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:top;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl8532393
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl8632393
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:"0\.000";
	text-align:center;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl8732393
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:"0\.000";
	text-align:center;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl8832393
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:"0\.000";
	text-align:center;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	background:#99CCFF;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl8932393
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:"0\.000";
	text-align:center;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	background:yellow;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl9032393
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:"0\.000";
	text-align:center;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl9132393
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:top;
	border:.5pt solid windowtext;
	background:#99CCFF;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl9232393
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl9332393
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl9432393
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl9532393
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:left;
	vertical-align:top;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl9632393
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:left;
	vertical-align:top;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl9732393
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:left;
	vertical-align:top;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl9832393
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:top;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl9932393
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:top;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl10032393
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:top;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl10132393
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl10232393
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl10332393
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl10432393
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl10532393
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:top;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl10632393
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:top;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl10732393
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:top;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl10832393
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl10932393
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl11032393
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl11132393
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl11232393
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:"Short Date";
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:#99CCFF;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl11332393
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:"Short Date";
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#99CCFF;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl11432393
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:#99CCFF;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl11532393
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#99CCFF;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl11632393
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:#99CCFF;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl11732393
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#99CCFF;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl11832393
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#99CCFF;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl11932393
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:"Short Date";
	text-align:left;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:#99CCFF;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl12032393
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:"Short Date";
	text-align:left;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#99CCFF;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl12132393
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:"Short Date";
	text-align:left;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#99CCFF;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl12232393
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:#99CCFF;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl12332393
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#99CCFF;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl12432393
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#99CCFF;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl12532393
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:top;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl12632393
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:top;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl12732393
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:top;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl12832393
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:left;
	vertical-align:top;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl12932393
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:left;
	vertical-align:top;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl13032393
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:left;
	vertical-align:top;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl13132393
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:left;
	vertical-align:top;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl13232393
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:top;
	border:.5pt solid windowtext;
	background:silver;
	mso-pattern:black none;
	white-space:nowrap;}
.xl13332393
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:silver;
	mso-pattern:black none;
	white-space:nowrap;}
.xl74323931 {padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	background:#99CCFF;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl74323932 {padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	background:#99CCFF;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl74323933 {padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	background:#99CCFF;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl743239331 {padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	background:#99CCFF;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl74323934 {padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	background:#99CCFF;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl74323935 {padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	background:#99CCFF;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl66323931 {padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl66323932 {padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
--></style>
</head>

<body>
<!--[if !excel]>&nbsp;&nbsp;<![endif]-->
<!--The following information was generated by Microsoft Excel's Publish as Web
Page wizard.-->
<!--If the same item is republished from Excel, all information between the DIV
tags will be replaced.-->
<!----------------------------->
<!--START OF OUTPUT FROM EXCEL PUBLISH AS WEB PAGE WIZARD -->
<!----------------------------->

<div id="usulan dupak_32393" align=center x:publishsource="Excel">

<table border=0 cellpadding=0 cellspacing=0 width=1093 style='border-collapse:
 collapse;table-layout:fixed;width:819pt'>
 <col class=xl6432393 width=37 style='mso-width-source:userset;mso-width-alt:
 1353;width:28pt'>
 <col class=xl6432393 width=19 span=4 style='mso-width-source:userset;
 mso-width-alt:694;width:14pt'>
 <col class=xl6432393 width=62 style='mso-width-source:userset;mso-width-alt:
 2267;width:47pt'>
 <col width=340 style='mso-width-source:userset;mso-width-alt:12434;width:255pt'>
 <col width=79 style='mso-width-source:userset;mso-width-alt:2889;width:59pt'>
 <col width=85 span=2 style='mso-width-source:userset;mso-width-alt:3108;
 width:64pt'>
 <col width=83 style='mso-width-source:userset;mso-width-alt:3035;width:62pt'>
 <col width=75 style='mso-width-source:userset;mso-width-alt:2742;width:56pt'>
 <col width=107 style='mso-width-source:userset;mso-width-alt:3913;width:80pt'>
 <col width=64 style='width:48pt'>
 <tr height=25 style='height:18.75pt'>
  <td height=25 class=xl6332393 colspan=7 width=515 style='height:18.75pt;
  width:386pt'>DAFTAR USUL PENETAPAN ANGKA KREDIT JABATAN BIDAN</td>
  <td class=xl1532393 width=79 style='width:59pt'></td>
  <td class=xl1532393 width=85 style='width:64pt'></td>
  <td class=xl1532393 width=85 style='width:64pt'></td>
  <td class=xl1532393 width=83 style='width:62pt'></td>
  <td class=xl1532393 width=75 style='width:56pt'></td>
  <td class=xl1532393 width=107 style='width:80pt'></td>
  <td class=xl1532393 width=64 style='width:48pt'></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl6732393 style='height:15.0pt'></td>
  <td class=xl6432393></td>
  <td class=xl6532393></td>
  <td class=xl6432393></td>
  <td class=xl6432393></td>
  <td class=xl6432393></td>
  <td class=xl6632393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td colspan=6 height=20 class=xl6832393 style='border-right:.5pt solid black;
  height:15.0pt'>NOMOR</td>
  <td class=xl7132393 style='border-left:none'>:</td>
  <td class=xl7232393></td>
  <td class=xl7232393></td>
  <td class=xl7232393></td>
  <td class=xl7232393></td>
  <td class=xl7232393></td>
  <td class=xl7232393></td>
  <td class=xl1532393></td>
 </tr>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td colspan=6 height=20 class=xl6832393 style='height:15.0pt'>INSTANSI</td>
  <td class=xl6932393>JANGKA WAKTU PENILAIAN</td>
  <td colspan=2 class=xl11232393 style='border-right:.5pt solid black'><?php echo getBulan($bulan); ?></td>
  <td class=xl8132393>s/d</td>
  <td colspan=2 class=xl11432393 style='border-right:.5pt solid black'><?php echo getBulan($bulan1); ?></td>
  <td class=xl7432393 style='border-left:none'><div align="center"><?php echo $tahun; ?></div></td>
  <td class=xl8232393 style='border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl6832393 style='height:15.0pt'></td>
  <td class=xl6932393></td>
  <td class=xl7032393></td>
  <td class=xl6932393></td>
  <td class=xl6932393></td>
  <td class=xl6932393></td>
  <td class=xl7332393></td>
  <td class=xl7232393></td>
  <td class=xl7232393></td>
  <td class=xl7232393></td>
  <td class=xl1532393></td>
  <td class=xl7232393></td>
  <td class=xl7232393></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl6832393 style='height:15.0pt'></td>
  <td class=xl6932393></td>
  <td class=xl7032393></td>
  <td class=xl6932393></td>
  <td class=xl6932393></td>
  <td class=xl6932393></td>
  <td class=xl7232393>KETERANGAN PERORANGAN</td>
  <td class=xl7232393></td>
  <td class=xl7232393></td>
  <td class=xl7232393></td>
  <td class=xl1532393></td>
  <td class=xl7232393></td>
  <td class=xl7232393></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl6832393 style='height:15.0pt'></td>
  <td class=xl6932393></td>
  <td class=xl7032393></td>
  <td class=xl6932393></td>
  <td class=xl6932393></td>
  <td class=xl6932393></td>
  <td class=xl7332393></td>
  <td class=xl7232393></td>
  <td class=xl7232393></td>
  <td class=xl7232393></td>
  <td class=xl1532393></td>
  <td class=xl7232393></td>
  <td class=xl7232393></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td colspan=6 height=20 class=xl6832393 style='border-right:.5pt solid black;
  height:15.0pt'>1. NAMA</td>
  <td class=xl7432393 style='border-left:none'>: <?php echo $nama_pegawai; ?></td>
  <td class=xl1532393></td>
  <td colspan=2 class=xl7332393 style='border-right:.5pt solid black'>7.
  Pangkat/Gol Ruang</td>
  <td colspan=3 class=xl11632393 style='border-right:.5pt solid black;
  border-left:none'>: <?php echo $pangkat." / ".$golongan; ?></td>
  <td class=xl8032393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td colspan=6 height=20 class=xl6832393 style='border-right:.5pt solid black;
  height:15.0pt'>2. NIP</td>
  <td class=xl7432393 style='border-top:none;border-left:none'>: <?php echo $nip; ?></td>
  <td class=xl1532393></td>
  <td colspan=2 class=xl7332393 style='border-right:.5pt solid black'>8.
  Terhitung mulai tanggal</td>
  <td colspan=3 class=xl11932393 style='border-right:.5pt solid black;
  border-left:none'>: <?php echo tgl_indo($tgl_tmt); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td colspan=6 height=20 class=xl6832393 style='border-right:.5pt solid black;
  height:15.0pt'>3. Nomor Seri KARPEG</td>
  <td class=xl7432393 style='border-top:none;border-left:none'>: <?php echo $nomor_karpeg; ?></td>
  <td class=xl1532393></td>
  <td colspan=2 class=xl7332393 style='border-right:.5pt solid black'>9.
  Jabatan</td>
  <td colspan=3 class=xl11632393 style='border-right:.5pt solid black;
  border-left:none'>: <?php echo $jabatan; ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td colspan=6 height=20 class=xl6832393 style='border-right:.5pt solid black;
  height:15.0pt'>4. Tempat/Tanggal lahir</td>
  <td class=xl7432393 style='border-top:none;border-left:none'>: <?php echo $tempat_lahir.", ".tgl_indo($tgl_lahir); ?></td>
  <td class=xl1532393></td>
  <td colspan=2 class=xl7332393 style='border-right:.5pt solid black'>10. Masa
  Kerja Gol Lama</td>
  <td colspan=3 class=xl11632393 style='border-right:.5pt solid black;
  border-left:none'>: <?php echo $masa_kerja_lama; ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td colspan=6 height=20 class=xl6832393 style='border-right:.5pt solid black;
  height:15.0pt'>5. Jenis Kelamin</td>
  <td class=xl7432393 style='border-top:none;border-left:none'>: <?php echo $jenis_kelamin; ?></td>
  <td class=xl1532393></td>
  <td colspan=2 class=xl7332393 style='border-right:.5pt solid black'>11. Masa
  Kerja Gol Baru</td>
  <td colspan=3 class=xl11632393 style='border-right:.5pt solid black;
  border-left:none'>: <?php echo $masa_kerja_baru; ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=62 style='mso-height-source:userset;height:46.5pt'>
  <td colspan=6 height=62 class=xl10932393 width=515 style='border-right:.5pt solid black;
  height:46.5pt;width:131pt'>6. Pendidikan yang telah diperhitungkan angka
  kreditnya</td>
  <td class=xl9132393 style='border-top:none;border-left:none'>: <?php echo $pendidikan; ?></td>
  <td class=xl1532393></td>
  <td colspan=2 class=xl6832393 style='border-right:.5pt solid black'>12. Unit
  Kerja</td>
  <td colspan=3 class=xl12232393 style='border-right:.5pt solid black;
  border-left:none'>: <?php echo $unit_kerja; ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl6432393 style='height:15.0pt'></td>
  <td class=xl6432393></td>
  <td class=xl6532393></td>
  <td class=xl6432393></td>
  <td class=xl6432393></td>
  <td class=xl6732393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl6432393 style='height:15.0pt'></td>
  <td class=xl6432393></td>
  <td class=xl6532393></td>
  <td class=xl6432393></td>
  <td class=xl6432393></td>
  <td class=xl6732393></td>
  <td class=xl1532393></td>
  <td colspan=2 class=xl7332393>UNSUR YANG DINILAI</td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
 </tr>
 <tr class=xl7232393 height=20 style='height:15.0pt'>
  <td height=20 class=xl6932393 style='height:15.0pt'></td>
  <td class=xl6932393></td>
  <td class=xl7032393></td>
  <td class=xl6932393></td>
  <td class=xl6932393></td>
  <td class=xl6832393></td>
  <td class=xl7232393></td>
  <td class=xl7232393></td>
  <td class=xl7232393></td>
  <td class=xl7232393></td>
  <td class=xl7232393></td>
  <td class=xl7232393></td>
  <td class=xl7232393></td>
  <td class=xl7232393></td>
 </tr>
 <tr class=xl7232393 height=20 style='height:15.0pt'>
  <td rowspan=3 height=60 class=xl13232393 style='height:45.0pt'>NO</td>
  <td colspan=6 rowspan=3 class=xl13332393>UNSUR, SUB UNSUR, BUTIR KEGIATAN</td>
  <td colspan=6 class=xl7532393 style='border-left:none'>ANGKA KREDIT MENURUT</td>
  <td class=xl7232393></td>
 </tr>
 <tr class=xl7232393 height=20 style='height:15.0pt'>
  <td colspan=3 height=20 class=xl7532393 style='height:15.0pt;border-left:
  none'>INSTANSI PENGUSUL</td>
  <td colspan=3 class=xl7532393 style='border-left:none'>TIM PENILAI</td>
  <td class=xl7232393></td>
 </tr>
 <tr class=xl7232393 height=20 style='height:15.0pt'>
  <td height=20 class=xl7532393 style='height:15.0pt;border-top:none;
  border-left:none'>LAMA</td>
  <td class=xl7532393 style='border-top:none;border-left:none'>BARU</td>
  <td class=xl7532393 style='border-top:none;border-left:none'>JUMLAH</td>
  <td class=xl7532393 style='border-top:none;border-left:none'>LAMA</td>
  <td class=xl7532393 style='border-top:none;border-left:none'>BARU</td>
  <td class=xl7532393 style='border-top:none;border-left:none'>JUMLAH</td>
  <td class=xl7232393></td>
 </tr>
 <tr class=xl7232393 height=20 style='height:15.0pt'>
  <td height=20 class=xl8332393 style='height:15.0pt;border-top:none'>I</td>
  <td colspan=6 class=xl10132393 style='border-right:.5pt solid black;
  border-left:none'>UNSUR UTAMA PENDIDIKAN</td>
  <td class=xl8632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7232393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>A</td>
  <td colspan=5 class=xl9532393 style='border-right:.5pt solid black;
  border-left:none'>Pendidikan formal dan mendapat gelar/ijazah</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7732393 style='border-top:none;border-left:none'>1</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Sarjana muda/Akademi/Diploma III Bidan</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_1_1_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_1_1_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_1_1_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7732393 style='border-top:none;border-left:none'>2</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Diploma II Bidan</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_1_2_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_1_2_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_1_2_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>B</td>
  <td colspan=5 class=xl12832393 width=459 style='border-left:none;width:344pt'>Mengikuti
  pendidikan dan pelatihan fungsional dan mendapat Surat Tanda Tamat Pendidikan
  dan Pelatihan (STTPL)</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7732393 style='border-top:none;border-left:none'>1</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Lamanya lebih dari 960 jam</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_2_1_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_2_1_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_2_1_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7732393 style='border-top:none;border-left:none'>2</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Lamanya 641 sampai 960 jam</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_2_2_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_2_2_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_2_2_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7732393 style='border-top:none;border-left:none'>3</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Lamanya 401 sampai 640 jam</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_2_3_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_2_3_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_2_3_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7732393 style='border-top:none;border-left:none'>4</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Lamanya 161 sampai 400 jam</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_2_4_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_2_4_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_2_4_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7732393 style='border-top:none;border-left:none'>5</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Lamanya 81 sampai 160 jam</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_2_5_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_2_5_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_2_5_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7732393 style='border-top:none;border-left:none'>6</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Lamanya 30 sampai 80 jam</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_2_6_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_2_6_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_2_6_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td colspan=6 class=xl12532393 style='border-right:.5pt solid black;
  border-left:none'>JUMLAH I A s.d I B</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>0.000</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $lap->jumlah($tahun,$bulan,$bulan1,$id_pegawai); ?></div></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $lap->jumlah($tahun,$bulan,$bulan1,$id_pegawai); ?></div></td>
  <td class=xl8732393 style='border-top:none;border-left:none'>0.000</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>0.000</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $lap->jumlah($tahun,$bulan,$bulan1,$id_pegawai); ?></div></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td colspan=6 class=xl9832393 style='border-right:.5pt solid black;
  border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr class=xl7232393 height=20 style='height:15.0pt'>
  <td height=20 class=xl8332393 style='height:15.0pt;border-top:none'>II</td>
  <td colspan=6 class=xl12932393 style='border-right:.5pt solid black;
  border-left:none'>PELAYANAN KEBIDANAN</td>
  <td class=xl8632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7232393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>A.</td>
  <td colspan=5 class=xl9532393 style='border-right:.5pt solid black;
  border-left:none'>Melaksanakan pengkajian kepada klien</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>1.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Anamnesa</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>a.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Pranikah</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>b.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Ibu hamil normal</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.2'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.2'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.2'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>c.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Ibu bersalin normal</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.3'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.3'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.3'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>d.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Ibu nifas normal</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.4'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.4'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.4'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>e.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Remaja putri</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.5'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.5'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.5'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>f.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Remaja putri bermasalah</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.6'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.6'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.6'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>g.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Ibu hamil tidak normal</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.7'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.7'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.7'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>h.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Ibu bersalin tidak normal</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.8'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.8'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.8'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>i.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Ibu nifas tidak normal</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.9'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.9'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.9'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>j.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Ibu bayi dan balita</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.10'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.10'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.10'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>k.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Ibu bayi dan balita sakit</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.11'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.11'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.11'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>l.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>KB/Masa interval</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.12'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.12'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.12'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>m.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Wanita menopause</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.13'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.13'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.13'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>n.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Ibu dengan PMS (Penyakit Menular Seksual)</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.14'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.14'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.14'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>o.<span
  style='mso-spacerun:yes'> </span></td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Persiapan operasi</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.15'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.15'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.15'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>p.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Gangguan sistem reproduksi</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.16'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.16'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.16'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>2.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Pemeriksaan fisik</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>a.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Pranikah</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>b.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Ibu hamil normal</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.2'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.2'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.2'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>c.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Ibu bersalin normal</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.3'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.3'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.3'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>d.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Ibu nifas normal</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.4'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.4'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.4'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>e.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Remaja putri</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.5'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.5'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.5'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>f.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Remaja putri bermasalah</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.6'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.6'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.6'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>g.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Ibu hamil tidak normal</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.7'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.7'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.7'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>h.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Ibu bersalin tidak normal</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.8'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.8'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.8'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>i.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Ibu nifas tidak normal</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.9'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.9'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.9'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>j.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Ibu bayi dan balita</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.10'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.10'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.10'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>k.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Ibu bayi dan balita sakit</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.11'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.11'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.11'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>l.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>KB/Masa interval</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.12'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.12'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.12'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>m.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Wanita menopause</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.13'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.13'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.13'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>n.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Ibu dengan PMS (Penyakit Menular Seksual)</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.14'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.14'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.14'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>o.<span
  style='mso-spacerun:yes'> </span></td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Persiapan operasi</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.15'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.15'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.15'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>p.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Gangguan sistem reproduksi</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.16'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.16'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.16'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>B.</td>
  <td colspan=5 class=xl9532393 style='border-right:.5pt solid black;
  border-left:none'>Melakukan pengambilan bahan laboratorium</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>1.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Pengambilan/penyediaan bahan laboratorium</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>a.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Darah</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'B.1.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'B.1.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'B.1.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>b.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Secret vagina</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'B.1.2'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'B.1.2'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'B.1.2'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>c.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Secret cervix</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'B.1.3'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'B.1.3'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'B.1.3'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>d.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Air ketuban</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'B.1.4'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'B.1.4'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'B.1.4'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>C.</td>
  <td colspan=5 class=xl9532393 style='border-right:.5pt solid black;
  border-left:none'>Melaksanakan pemeriksaan laboratorium</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>1.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Pemeriksaan urine</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>a.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Protein</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'C.1.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'C.1.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'C.1.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>b.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Reduksi</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'C.1.2'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'C.1.2'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'C.1.2'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>2.</td>
  <td colspan=4 class=xl10532393 style='border-right:.5pt solid black;
  border-left:none'>Darah</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>a.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>HB</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'C.2.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'C.2.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'C.2.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>D.</td>
  <td colspan=5 class=xl9532393 style='border-right:.5pt solid black;
  border-left:none'>Menegakkan diagnosa kebidanan</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>1.</td>
  <td colspan=4 class=xl10432393 width=440 style='border-left:none;width:330pt'>Membuat
  diagnosa kebidanan sesuai dengan hasil pengkajian pada</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>a.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Kasus normal</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'D.1.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'D.1.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'D.1.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>b.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Kasus tidak normal</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'D.1.2'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'D.1.2'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'D.1.2'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>E.</td>
  <td colspan=5 class=xl9532393 style='border-right:.5pt solid black;
  border-left:none'>Melaksanakan perencanaan asuhan kebidanan</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl9032393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>1.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Membuat diagnosa kebidanan pada</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>a.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Kasus normal</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'E.1.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'E.1.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'E.1.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>b.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Kasus tidak normal</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'E.1.2'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'E.1.2'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'E.1.2'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>F.</td>
  <td colspan=5 class=xl9532393 style='border-right:.5pt solid black;
  border-left:none'>Melaksanakan persiapan alat dan obat</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>1.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Persiapan alat untuk pelayanan</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>a.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Pranikah</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>b.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Ibu hamil normal</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.2'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.2'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.2'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>c.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Persalinan normal</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.3'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.3'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.3'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>d.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Bayi baru lahir</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.4'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.4'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.4'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>e.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Persalinan tidak normal</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.5'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.5'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.5'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>f.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>KB/Masa interval</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.6'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.6'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.6'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>g.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Operasi</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.7'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.7'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.7'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>h.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Bayi dan balita<span style='mso-spacerun:yes'> </span></td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>i.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>bayi dan balita sakit</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.8'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.8'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.8'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>j.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Wanita menopause</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.9'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.9'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.9'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>k.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Ibu dengan PMS (Penyakit Menular Seksual)</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.10'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.10'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.10'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>l.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Gangguan sistem reproduksi</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>*</td>
  <td colspan=2 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Pap smear</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.11'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.11'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.11'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>*</td>
  <td colspan=2 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Biopsi</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.12'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.12'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.12'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>*</td>
  <td colspan=2 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Ginekology</td>
 <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.13'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.13'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.13'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>*</td>
  <td colspan=2 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Curretage</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.14'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.14'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.14'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>m.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Remaja putri</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.15'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.15'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.15'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>n.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Remaja putri bermasalah</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.16'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.16'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.16'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>2.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Persiapan obat</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>a.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Pranikah</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>b.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Ibu hamil normal</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.2'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.2'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.2'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>c.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Persalinan normal</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.3'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.3'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.3'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>d.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Persalinan tidak normal</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.4'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.4'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.4'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>e.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>bayi dan balita sakit</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.5'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.5'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.5'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>f.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Operasi</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.6'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.6'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.6'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>g.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Curretage</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.7'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.7'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.7'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>h.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Induksi persalinan</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.8'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.8'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.8'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>i.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Penambahan cairan</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.9'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.9'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.9'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>j.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Infeksi</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>*</td>
  <td colspan=2 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Kehamilan</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.10'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.10'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.10'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>*</td>
  <td colspan=2 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Persalinan</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.11'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.11'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.11'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>*</td>
  <td colspan=2 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Nifas</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.12'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.12'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.12'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>k.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Bayi lahir dengan asphixia</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.13'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.13'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.13'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>l.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Ibu dengan gangguan kehamilan</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>*</td>
  <td colspan=2 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Hiperemisis gravidarum</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.14'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.14'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.14'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>*</td>
  <td colspan=2 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>EPH gestosis</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.15'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.15'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.15'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>m.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Remaja putri</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.16'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.16'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.16'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>n.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Remaja putri bermasalah</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.17'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.17'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.17'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>G.</td>
  <td colspan=5 class=xl9532393 style='border-right:.5pt solid black;
  border-left:none'>Melaksanakan asuhan kebidanan</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>1.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Pranikah</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>a.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Memberikan immunisasi/kekebalan</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.1.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.1.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.1.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>2.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Ibu hamil</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>a.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Memberikan immunisasi/kekebalan</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.2.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.2.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.2.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>b.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Memberikan robonansia (sesuai kebutuhan)</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.2.2'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.2.2'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.2.2'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>c.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Mengajarkan senam hamil</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.2.3'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.2.3'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.2.3'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>3.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Persalinan normal kala I</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>a.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Pemeriksaan per vagina</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.3.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.3.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.3.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>b.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Melakukan huknah/klisma</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.3.2'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.3.2'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.3.2'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>c.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Melakukan keteterisasi</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.3.3'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.3.3'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.3.3'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>d.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Memberikan hidrasi</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.3.4'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.3.4'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.3.4'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>e.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Memantau kemajuan persalinan</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.3.5'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.3.5'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.3.5'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>f.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Melakukan amnicotomi</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.3.6'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.3.6'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.3.6'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>g.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Melakukan episiotomi dan menjahit perineum</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.3.7'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.3.7'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.3.7'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>h.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Asuhan kebidanan kala II</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.3.8'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.3.8'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.3.8'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>i.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Asuhan kebidanan kala III</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.3.9'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.3.9'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.3.9'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>j.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Asuhan kebidanan kala IV</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.3.10'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.3.10'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.3.10'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>k.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Memberi obat utero tonica</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.3.11'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.3.11'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.3.11'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>4.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Ibu nifas normal</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>a.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Puerperium</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.4.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.4.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.4.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>b.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Perawatan payudara</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.4.2'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.4.2'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.4.2'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>c.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Senam nifas</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.4.3'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.4.3'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.4.3'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>d.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Bimbingan menyusui</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.4.4'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.4.4'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.4.4'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>5.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Bayi baru lahir</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>a.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Observasi</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.5.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.5.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.5.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>b.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Membersihkan jalan nafas</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.5.2'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.5.2'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.5.2'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>c.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Mencegah hypothermi</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.5.3'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.5.3'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.5.3'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>d.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Memotong dan mengikat tali pusat</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.5.4'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.5.4'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.5.4'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>e.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Melakukan kontak dini</td>
 <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.5.5'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.5.5'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.5.5'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>f.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Memberi identitas</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.5.6'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.5.6'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.5.6'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>6.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Remaja putri</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.6.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.6.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.6.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>7.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Remaja putri bermasalah</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.7.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.7.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.7.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>8.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Ibu hamil tidak normal</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>a.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Melakukan bimbingan dan melibatkan keluarga</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.8.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.8.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.8.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>b.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Memberi pertolongan pertama pada</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>*</td>
  <td colspan=2 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Anemia berat</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.8.2'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.8.2'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.8.2'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>*</td>
  <td colspan=2 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Hyperemisis tingkat I</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.8.3'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.8.3'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.8.3'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>*</td>
  <td colspan=2 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Perdarahan hamil muda</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.8.4'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.8.4'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.8.4'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>*</td>
  <td colspan=2 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Perdarahan hamil tua</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.8.5'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.8.5'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.8.5'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>*</td>
  <td colspan=2 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Pre eklampsi</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.8.6'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.8.6'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.8.6'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>*</td>
  <td colspan=2 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Eklampsi</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.8.7'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.8.7'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.8.7'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>*</td>
  <td colspan=2 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Ketuban pecah dini</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.8.8'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.8.8'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.8.8'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>*</td>
  <td colspan=2 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Kasus faktor resiko tinggi</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.8.9'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.8.9'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.8.9'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>9.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Ibu bersalin tidak normal</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>a.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Menolong persalinan pada</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>*</td>
  <td colspan=2 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Letak sungsang</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.9.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.9.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.9.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>*</td>
  <td colspan=2 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Gemeli</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.9.2'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.9.2'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.9.2'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>*</td>
  <td colspan=2 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Versi ekstraksi gemeli anak kedua</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.9.3'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.9.3'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.9.3'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=39 style='mso-height-source:userset;height:29.25pt'>
  <td height=39 class=xl8432393 style='height:29.25pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>b.</td>
  <td colspan=3 class=xl10432393 width=421 style='border-left:none;width:316pt'>Melakukan
  vacum ekstraksi pada persalinan kepala di dasar panggul tidak normal</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.9.4'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.9.4'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.9.4'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>c.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Melakukan forcep pada persalinan kepala di dasar panggul</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.9.5'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.9.5'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.9.5'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>d.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Melakukan placenta manual</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.9.6'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.9.6'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.9.6'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>e.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Melakukan kompresi bimanual eksternal pada kala IV</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.9.7'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.9.7'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.9.7'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>f.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Memberikan infus</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.9.8'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.9.8'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.9.8'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>g.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Memberikan transfusi darah</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.9.9'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.9.9'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.9.9'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>h.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Melakukan asuhan kebidanan pada kala IV</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.9.10'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.9.10'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.9.10'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>i.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Memberikan utero tonika</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.9.11'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.9.11'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.9.11'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>j.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Pemberian anti biotika</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.9.12'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.9.12'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.9.12'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>10.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Ibu nifas tidak normal</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>a.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Puerperium</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.10.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.10.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.10.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>b.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Asuhan post sectio caesaria</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.10.2'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.10.2'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.10.2'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>c.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Phlegmasia albadolens</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.10.3'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.10.3'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.10.3'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>d.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Febris/sepsis puerperalis</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.10.4'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.10.4'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.10.4'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>e.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Anemia berat</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.10.5'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.10.5'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.10.5'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>f.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Pra eklampsi/eklampsi</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.10.6'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.10.6'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.10.6'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>g.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Pembengkakan payudara</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.10.7'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.10.7'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.10.7'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>h.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Mastitis</td>
 <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.10.8'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.10.8'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.10.8'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>i.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Pemberian anti biotika</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.10.9'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.10.9'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.10.9'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>j.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Psikose</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.10.10'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.10.10'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.10.10'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>k.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Pemberian reboransia</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.10.11'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.10.11'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.10.11'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>l.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Pemberian hidrasi/nutrisi</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.10.12'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.10.12'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.10.12'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>11.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Bayi baru lahir tidak normal</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>a.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Observasi</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.11.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.11.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.11.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>b.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Perawatan tali pusat</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.11.2'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.11.2'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.11.2'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>c.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Resusitasi pada bayi asphixia</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.11.3'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.11.3'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.11.3'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>d.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Perawatan hipotermi</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.11.4'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.11.4'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.11.4'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>12.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Bayi dan balita</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.12.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.12.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.12.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>13.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Bayi dan balita sakit</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>a.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Penanggulangan diare</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.13.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.13.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.13.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>b.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Melaksanakan pengobatan todak lanjut Puskesmas/RS/Dokter</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.13.2'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.13.2'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.13.2'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>14.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>KB/masa interval</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>a.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Memasang AKDR</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.14.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.14.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.14.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>b.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Melepas AKDR</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.14.2'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.14.2'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.14.2'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>c.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Memasang AKBK</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.14.3'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.14.3'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.14.3'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>d.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Melepas AKBK</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.14.4'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.14.4'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.14.4'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>e.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Memberikan suntikan</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.14.5'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.14.5'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.14.5'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>f.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Memberikan alat kontrasepsi sederhana</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.14.6'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.14.6'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.14.6'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>g.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Memberikan tablet</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.14.7'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.14.7'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.14.7'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>h.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Memberikan asuhan efek samping alat kontrasepsi</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.14.8'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.14.8'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.14.8'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>15.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Wanita menopause</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.15.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.15.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.15.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>16.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Penyakit menular seksual</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.16.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.16.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.16.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>17.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Operasi</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Melaksanakan asuhan kebidanan pada</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>a.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Pre-operasi</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.17.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.17.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.17.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>b.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Post-operasi</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.17.2'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.17.2'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.17.2'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>18.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Gangguan kehamilan muda</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>a.</td>
  <td colspan=3 class=xl10432393 width=421 style='border-left:none;width:316pt'>Melaksanakan
  asuhana kebidanan pada hipermisis gravidarum</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.18.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.18.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.18.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>b.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Melaksanakan asuhan kebidanan pada</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>*</td>
  <td colspan=2 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Abortus imminens</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.18.2'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.18.2'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.18.2'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>*</td>
  <td colspan=2 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Abortus incipiens</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.18.3'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.18.3'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.18.3'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>c.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Melakukan digital pada abortus incomplitus</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.18.4'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.18.4'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.18.4'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>d.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Melaksanakan asuhan kebidanan pada pasca abortus</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.18.5'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.18.5'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.18.5'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>19.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Gangguan alat reproduksi</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>a.</td>
  <td colspan=3 class=xl10432393 width=421 style='border-left:none;width:316pt'>Melaksanakan
  asuhan kebidanan pada gangguan alat reproduksi</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.19.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.19.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.19.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>b.</td>
  <td colspan=3 class=xl10432393 width=421 style='border-left:none;width:316pt'>Memberikan
  obat</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.19.2'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.19.2'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.19.2'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>c.</td>
  <td colspan=3 class=xl10432393 width=421 style='border-left:none;width:316pt'>Memberikan
  infus cairan</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.19.3'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.19.3'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.19.3'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>d.</td>
  <td colspan=3 class=xl10432393 width=421 style='border-left:none;width:316pt'>Memberi
  transfusi darah</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.19.4'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.19.4'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.19.4'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>20.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Melaksanakan tugas di kamar bedah</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>a.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Instrumentator</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.20.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.20.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.20.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>b.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Assisten</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.20.2'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.20.2'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.20.2'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>c.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>On loop</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.20.3'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.20.3'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.20.3'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>21.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Pendamping dokter dalam tindakan obstetri &amp; ginekologi</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.21.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.21.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'G.21.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>H.</td>
  <td colspan=5 class=xl9532393 style='border-right:.5pt solid black;
  border-left:none'>Melakukan KIE pada</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>1</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Pranikah</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'H.1.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'H.1.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'H.1.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>2.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Ibu hamil normal</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'H.2.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'H.2.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'H.2.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>3.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Ibu bersalin normal</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'H.3.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'H.3.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'H.3.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>4.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Ibu nifas normal</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'H.4.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'H.4.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'H.4.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>5.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Remaja putri</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'H.5.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'H.5.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'H.5.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>6.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Remaja putri bermasalah</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'H.6.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'H.6.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'H.6.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>7.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Ibu hamil tidak normal dan keluarga</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'H.7.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'H.7.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'H.7.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>8.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Ibu bersalin tidak normal</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'H.8.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'H.8.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'H.8.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>9.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Ibu bayi dan balita</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'H.9.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'H.9.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'H.9.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>10.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>KB/Masa interval</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'H.10.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'H.10.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'H.10.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>11.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Wanita menopause</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'H.11.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'H.11.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'H.11.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>12.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Ibu dengan PMS (Penyakit Menular Seksual)</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'H.12.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'H.12.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'H.12.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>13.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Persiapan operasi</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'H.13.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'H.13.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'H.13.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>14.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Gangguan kehamilan</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'H.14.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'H.14.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'H.14.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>15.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Gangguan sistem reproduksi</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'H.15.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'H.15.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'H.15.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>I.</td>
  <td colspan=5 class=xl9532393 style='border-right:.5pt solid black;
  border-left:none'>Melaksanakan kolaborasi dengan tim kesehatan lain</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'I.1.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'I.1.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'I.1.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>J.</td>
  <td colspan=5 class=xl9532393 style='border-right:.5pt solid black;
  border-left:none'>Melaksanakan rujukan<span style='mso-spacerun:yes'> </span></td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td colspan=5 class=xl9532393 style='border-right:.5pt solid black;
  border-left:none'>Melakukan rujukan untuk</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>1.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Remaja putri bermasalah</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'J.1.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'J.1.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'J.1.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>2.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Ibu hamil tidak normal</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'J.2.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'J.2.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'J.2.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>3.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Ibu bersalin tidak normal</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'J.3.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'J.3.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'J.3.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>4.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Ibu nifas tidak normal</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'J.4.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'J.4.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'J.4.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>5.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Bayi baru lahir tidak normal</td>
 <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'J.5.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'J.5.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'J.5.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>6.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Bayi dan balita sakit</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'J.6.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'J.6.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'J.6.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>7.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>KB/masa interval</td>
 <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'J.7.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'J.7.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'J.7.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>8.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Wanita menopause</td>
 <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'J.8.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'J.8.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'J.8.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>9.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Ibu dengan PMS (Penyakit Menular Seksual)</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'J.9.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'J.9.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'J.9.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>10.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Gangguan kehamilan</td>
 <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'J.10.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'J.10.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'J.10.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>11.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Gangguan alat reproduksi</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'J.11.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'J.11.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'J.11.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>K.</td>
  <td colspan=5 class=xl9532393 style='border-right:.5pt solid black;
  border-left:none'>Melaksanakan evaluasi asuhan kebidanan<span
  style='mso-spacerun:yes'> </span></td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td colspan=5 class=xl9532393 style='border-right:.5pt solid black;
  border-left:none'>Melaksanakan evaluasi asuhan kebidanan pada</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>1.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Kasus Normal</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'K.1.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'K.1.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'K.1.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>2.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Kasus tidak normal</td>
 <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'K.2.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'K.2.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'K.2.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>L.</td>
  <td colspan=5 class=xl9532393 style='border-right:.5pt solid black;
  border-left:none'>Melakukan dokumentasi pada asuha kebidanan</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>1</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Pranikah</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'L.1.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'L.1.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'L.1.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>2.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Ibu hamil<span style='mso-spacerun:yes'> </span></td>
 <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'L.2.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'L.2.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'L.2.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>3.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Persalinan normal</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'L.3.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'L.3.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'L.3.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>4.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Ibu nifas normal</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'L.4.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'L.4.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'L.4.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>5.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Bayi baru lahir</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'L.5.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'L.5.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'L.5.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>6.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Remaja putri</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'L.6.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'L.6.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'L.6.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>7.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Remaja putri bermasalah</td>
 <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'L.7.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'L.7.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'L.7.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>8.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Ibu hamil tidak normal</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'L.8.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'L.8.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'L.8.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>9.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Persalinan tidak normal</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'L.9.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'L.9.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'L.9.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>10.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Ibu nifas tidak normal</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'L.10.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'L.10.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'L.10.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>11.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Bayi dan balita</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'L.11.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'L.11.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'L.11.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>12.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Bayi dan balita sakit</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'L.12.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'L.12.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'L.12.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>13.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>KB/Masa interval</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'L.13.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'L.13.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'L.13.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>14.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Wanita menopause</td>
 <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'L.14.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'L.14.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'L.14.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>15.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Ibu dengan PMS (Penyakit Menular Seksual)</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'L.15.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'L.15.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'L.15.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>16.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Pasien pre &amp; post operasi</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'L.16.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'L.16.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'L.16.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>17.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Gangguan kehamilan</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'L.17.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'L.17.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'L.17.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>18.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Gangguan alat reproduksi</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'L.18.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'L.18.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'L.18.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>M.</td>
  <td colspan=5 class=xl9532393 style='border-right:.5pt solid black;
  border-left:none'>Melaksanakan pelayanan kesehatan masyarakat<span
  style='mso-spacerun:yes'> </span></td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td colspan=5 class=xl9532393 style='border-right:.5pt solid black;
  border-left:none'>Melaksanakan pelayanan kesehatan masyarakat<span
  style='mso-spacerun:yes'> </span></td>
 <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'M.1.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'M.1.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'M.1.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>1.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Menyusun program tahunan</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'M.2.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'M.2.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'M.2.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>2.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Menyusun instrumen pengkajian</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'M.3.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'M.3.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'M.3.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>3.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Pengkajian individu pada keluarga</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'M.4.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'M.4.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'M.4.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>4.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Pengkajian masyarakat/wilayah</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'M.5.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'M.5.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'M.5.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>5.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Pengkajian keluarga</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'M.6.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'M.6.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'M.6.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>6.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Menentukan masalah</td>
 <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'M.7.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'M.7.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'M.7.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>7.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Membuat laporan pengkajian</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'M.8.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'M.8.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'M.8.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>8.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Membuat peta wilayah</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'M.9.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'M.9.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'M.9.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>9.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Membuat peta masalah</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'M.10.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'M.10.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'M.10.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>10.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Membuat kohor/kartu masalah</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'M.11.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'M.11.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'M.11.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>11.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>membuat program asuhan</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'M.12.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'M.12.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'M.12.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>12.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Melaksanakan kunjungan keluarga</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'M.13.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'M.13.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'M.13.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>13.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Membina posyandu</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'M.14.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'M.14.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'M.14.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>14.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Membina dasa wisma</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'M.15.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'M.15.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'M.15.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>15.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>membina kader KPKIA</td>
 <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'M.16.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'M.16.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'M.16.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>16.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Membina kader PPKBD</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'M.17.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'M.17.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'M.17.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>17.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Membina/melatih dukun beranak</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'M.19.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'M.19.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'M.19.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>18.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Musyawarah masyarakat desa</td>
 <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'M.18.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'M.18.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $id_keg = 'M.18.1'; $priode1 = $tahun.'-'.$bulan.'-'.'01'; $priode2 = $tahun.'-'.$bulan1.'-'.'31'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td colspan=6 class=xl12532393 style='border-right:.5pt solid black;
  border-left:none'>JUMLAH II A s.d II M</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>0.000</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $priode1=$tahun."-".$bulan."-"."01"; $priode2=$tahun."-".$bulan1."-"."31"; $lap->countNilai1($priode1,$priode2,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $priode1=$tahun."-".$bulan."-"."01"; $priode2=$tahun."-".$bulan1."-"."31"; $lap->countNilai1($priode1,$priode2,$id_pegawai); ?></td>
  <td class=xl8732393 style='border-top:none;border-left:none'>0.000</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>0.000</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><?php $priode1=$tahun."-".$bulan."-"."01"; $priode2=$tahun."-".$bulan1."-"."31"; $lap->countNilai1($priode1,$priode2,$id_pegawai); ?></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td colspan=6 class=xl9832393 style='border-right:.5pt solid black;
  border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr class=xl7232393 height=20 style='height:15.0pt'>
  <td height=20 class=xl8332393 style='height:15.0pt;border-top:none'>III</td>
  <td colspan=6 class=xl10132393 style='border-right:.5pt solid black;
  border-left:none'>PENGEMBANGAN PROFESI</td>
  <td class=xl8632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7232393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>A.</td>
  <td colspan=5 class=xl9532393 style='border-right:.5pt solid black;
  border-left:none'>Membuat karya tulis /karya ilmiah bidang kesehatan</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7732393 style='border-top:none;border-left:none'>1</td>
  <td colspan=4 class=xl10432393 width=440 style='border-left:none;width:330pt'>Karya
  ilmiah hasil penelitian bidang kesehatan yang dipublikasikan</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>a.<span
  style='mso-spacerun:yes'> </span></td>
  <td colspan=3 class=xl10432393 width=421 style='border-left:none;width:316pt'>Dalam
  bentuk buku yang diterbitkan dan diedarkan secara nasional<span
  style='mso-spacerun:yes'> </span></td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_10_1_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_10_1_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_10_1_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>b.</td>
  <td colspan=3 class=xl10432393 width=421 style='border-left:none;width:316pt'>Dalam
  majalah ilmiah yang diakui instansi berwenang (LIPI)</td>
 <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_10_1_2'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_10_1_2'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_10_1_2'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7732393 style='border-top:none;border-left:none'>2</td>
  <td colspan=4 class=xl10432393 width=440 style='border-left:none;width:330pt'>Karya
  tulis berupa tinjauan atau ulasan ilmiah dengan gagasan sendiri dalam bidang
  kesehatan yang tidak dipublikasikan tetapi didokumentasikan pada perpustakaan
  instansi yang bersangkutan<span style='mso-spacerun:yes'> </span></td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>a.<span
  style='mso-spacerun:yes'> </span></td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Dalam bentuk Buku</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_10_2_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_10_2_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_10_2_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>b.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Dalam bentuk Makalah</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_10_2_2'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_10_2_2'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_10_2_2'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7732393 style='border-top:none;border-left:none'>3</td>
  <td colspan=4 class=xl10432393 width=440 style='border-left:none;width:330pt'>Membuat
  karya tulis/karya ilmiah berupa tinjauan atau ulasan ilmiah dengan gagasan
  sendiri dalam bidang kesehatan yang dipublikasikan<span
  style='mso-spacerun:yes'> </span></td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>a.<span
  style='mso-spacerun:yes'> </span></td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Dalam bentuk Buku</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_10_3_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_10_3_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_10_3_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>b.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Dalam bentuk Makalah</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_10_3_2'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_10_3_2'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_10_3_2'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7732393 style='border-top:none;border-left:none'>4</td>
  <td colspan=4 class=xl10432393 width=440 style='border-left:none;width:330pt'>Tulisan
  ilmiah populer di bidang kebidanan yang disebarluaskan melalui media massa</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
 <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_10_4_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_10_4_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_10_4_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7732393 style='border-top:none;border-left:none'>5</td>
  <td colspan=4 class=xl10432393 width=440 style='border-left:none;width:330pt'>Menyampaikan
  prasarana berupa tinjauan, gagasan dan atau ulasan ilmiah di bidang kebidanan
  pada pertemuan ilmiah</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_10_5_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_10_5_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_10_5_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>B.</td>
  <td colspan=5 class=xl12832393 width=459 style='border-left:none;width:344pt'>Menerjemahkan/menyadur
  buku dan bahan lainnya di bidang kebidanan</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7732393 style='border-top:none;border-left:none'>1.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Terjemahan/saduran di bidang kebidanan yang
  dipublikasikan<span style='mso-spacerun:yes'> </span></td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>a.<span
  style='mso-spacerun:yes'> </span></td>
  <td colspan=3 class=xl10432393 width=421 style='border-left:none;width:316pt'>Dalam
  bentuk buku yang diterbitkan dan diedarkan secara nasional<span
  style='mso-spacerun:yes'> </span></td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_11_1_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_11_1_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_11_1_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>b.</td>
  <td colspan=3 class=xl10432393 width=421 style='border-left:none;width:316pt'>Dalam
  bentuk majalah ilmiah yang diakui instansi berwenang (LIPI)</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_11_1_2'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_11_1_2'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_11_1_2'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7732393 style='border-top:none;border-left:none'>2.</td>
  <td colspan=4 class=xl10432393 width=440 style='border-left:none;width:330pt'>Terjemahan/saduran
  di bidang kebidanan<span style='mso-spacerun:yes'>  </span>yang tidak
  dipublikasikan dalam bentuk</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>a.<span
  style='mso-spacerun:yes'> </span></td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Buku</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_11_2_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_11_2_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_11_2_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>b.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Makalah</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
 <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_11_2_2'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_11_2_2'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_11_2_2'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>3.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Membuat abstrak tulisan ilmiah yang dimuat dalam penerbitan</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_11_3_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_11_3_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_11_3_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>C.</td>
  <td colspan=5 class=xl9532393 style='border-right:.5pt solid black;
  border-left:none'>Membimbing bidan di bawah jenjang jabatannya</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>1.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>membimbing bidan yang berada di bawah jenjang jabatannya</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_12_1_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_12_1_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_12_1_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>D.</td>
  <td colspan=5 class=xl9532393 style='border-right:.5pt solid black;
  border-left:none'>Membuat buku pedoman/petunjuk teknis dibidang kebidanan</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>1.</td>
  <td colspan=4 class=xl10432393 width=440 style='border-left:none;width:330pt'>Membuat
  buku pedoman/petunjuk pelaksanaan/petunjuk teknis di bidang kebidanan</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
 <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_13_1_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_13_1_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_13_1_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>E.</td>
  <td colspan=5 class=xl9532393 style='border-right:.5pt solid black;
  border-left:none'>Mengembangkan teknologi tepat guna di bidang kebidanan</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>1.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Mengembangkan teknologi tepat guna dibidang kesehatan</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_14_1_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_14_1_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_14_1_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td colspan=6 class=xl12532393 style='border-right:.5pt solid black;
  border-left:none'>JUMLAH III A s.d III E</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>0.000</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $lap->jumlah3($tahun,$bulan,$bulan1,$id_pegawai); ?></div></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $lap->jumlah3($tahun,$bulan,$bulan1,$id_pegawai); ?></div></td>
  <td class=xl8732393 style='border-top:none;border-left:none'>0.000</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>0.000</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $lap->jumlah3($tahun,$bulan,$bulan1,$id_pegawai); ?></div></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td colspan=6 class=xl9832393 style='border-right:.5pt solid black;
  border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr class=xl7232393 height=20 style='height:15.0pt'>
  <td height=20 class=xl8332393 style='height:15.0pt;border-top:none'>IV</td>
  <td colspan=6 class=xl10132393 style='border-right:.5pt solid black;
  border-left:none'>PENUNJANG KEGIATAN PELAYANAN KEBIDANAN</td>
  <td class=xl8632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7232393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>A.</td>
  <td colspan=5 class=xl9532393 style='border-right:.5pt solid black;
  border-left:none'>Mengajar/melatih yang berkaitan dengan bidang kebidanan</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>1.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Mengajar/melatih yang berkaitan dengan bidang kebidanan</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_3_1_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_3_1_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_3_1_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>B.</td>
  <td colspan=5 class=xl9532393 style='border-right:.5pt solid black;
  border-left:none'>Mengikuti kegiatan seminar/lokakarya dalam bidang kesehatan</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7732393 style='border-top:none;border-left:none'>1.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Mengikuti seminar/lokakarya internasional/nasional<span
  style='mso-spacerun:yes'> </span></td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>a.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Sebagai pemasaran</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_4_1_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_4_1_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_4_1_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>b.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Sebagai pembahas/moderator/narasumber</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_4_1_2'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_4_1_2'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_4_1_2'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>c.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Sebagai peserta</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_4_1_3'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_4_1_3'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_4_1_3'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7732393 style='border-top:none;border-left:none'>2.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Mengikuti/berperan serta dalam delegasi ilmiah<span
  style='mso-spacerun:yes'> </span></td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>a.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Sebagai ketua</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_4_2_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_4_2_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_4_2_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>b.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Sebagai anggota</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_4_2_2'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_4_2_2'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_4_2_2'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>C.</td>
  <td colspan=5 class=xl9532393 style='border-right:.5pt solid black;
  border-left:none'>Menjadi anggota organisasi profesi bidan</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7732393 style='border-top:none;border-left:none'>1</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Tingkat internasional/nasional sebagai</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>a.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Pengurus Aktif</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_5_1_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_5_1_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_5_1_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>b.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Anggota Aktif</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_5_1_2'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_5_1_2'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_5_1_2'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7732393 style='border-top:none;border-left:none'>2</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Tingkat Propinsi sebagai</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>a.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Pengurus Aktif</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_5_2_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_5_2_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_5_2_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>b.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Anggota Aktif</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_5_2_2'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_5_2_2'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_5_2_2'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>D.</td>
  <td colspan=5 class=xl9532393 style='border-right:.5pt solid black;
  border-left:none'>Menjadi anggota tim penilai jabatan fungsional bidan</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7732393 style='border-top:none;border-left:none'>1</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Menjadi anggota aktif tim penilai</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_6_1_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_6_1_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_6_1_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>E.</td>
  <td colspan=5 class=xl9532393 style='border-right:.5pt solid black;
  border-left:none'>Memperoleh gelar kesarjanaan lainnya.</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7732393 style='border-top:none;border-left:none'>1.</td>
  <td colspan=4 class=xl10432393 width=440 style='border-left:none;width:330pt'><span
  style='mso-spacerun:yes'> </span>Memperoleh ijazah/gelar yang tidak sesuai
  dengan bidang tugas pokoknya :</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7932393 style='border-top:none;border-left:none'>a.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Sarjana/Diploma IV</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_7_1_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_7_1_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_7_1_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7932393 style='border-top:none;border-left:none'>b.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Sarjana Muda/Diploma II/Diploma III</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_7_1_2'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_7_1_2'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_7_1_2'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>F.</td>
  <td colspan=5 class=xl9532393 style='border-right:.5pt solid black;
  border-left:none'>Perolehan penghargaan/tanda jasa</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7732393 style='border-top:none;border-left:none'>1.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Tanda kehormatan Satya lencana karya satya</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7932393 style='border-top:none;border-left:none'>a.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Tiga puluh (30) tahun</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_8_1_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_8_1_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_8_1_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7932393 style='border-top:none;border-left:none'>b.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Dua puluh (20) tahun</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_8_1_2'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_8_1_2'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_8_1_2'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7932393 style='border-top:none;border-left:none'>c.</td>
  <td colspan=3 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Sepuluh (10) tahun</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_8_1_3'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_8_1_3'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_8_1_3'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>2.</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Gelar kehormatan di bidang akademis</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_8_2_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_8_2_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_8_2_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>G.</td>
  <td colspan=5 class=xl12832393 width=459 style='border-left:none;width:344pt'>Menjadi
  anggota tim penilai karya-karya yang berkaitan dengan advokasi, penggalangan
  dukungan sosial, pemberdayaan masyarakat</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>1</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Sebagai ketua</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_9_1_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_9_1_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_9_1_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl7632393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl7832393 style='border-top:none;border-left:none'>2</td>
  <td colspan=4 class=xl9232393 style='border-right:.5pt solid black;
  border-left:none'>Sebagai anggota</td>
  <td class=xl8832393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_9_2_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_9_2_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8932393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $id_keg='kegbln_9_2_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></div></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td colspan=6 class=xl12532393 style='border-right:.5pt solid black;
  border-left:none'>JUMLAH IV A s.d IV G</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>0.000</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $lap->jumlah2($tahun,$bulan,$bulan1,$id_pegawai); ?></div></td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $lap->jumlah2($tahun,$bulan,$bulan1,$id_pegawai); ?></div></td>
  <td class=xl8732393 style='border-top:none;border-left:none'>0.000</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>0.000</td>
  <td class=xl8732393 style='border-top:none;border-left:none'><div align="center"><?php $lap->jumlah2($tahun,$bulan,$bulan1,$id_pegawai); ?></div></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl8432393 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td colspan=6 class=xl12532393 style='border-right:.5pt solid black;
  border-left:none'>JUMLAH UNSUR UTAMA DAN UNSUR PENUNJANG</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl8732393 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl6432393 style='height:15.0pt'></td>
  <td class=xl6432393></td>
  <td class=xl6432393></td>
  <td class=xl6432393></td>
  <td class=xl6432393></td>
  <td class=xl6432393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl6432393 style='height:15.0pt'></td>
  <td class=xl6432393></td>
  <td class=xl6532393></td>
  <td class=xl6432393></td>
  <td class=xl6432393></td>
  <td class=xl6432393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl6432393 colspan=7 style='height:15.0pt'>LAMPIRAN
  USUL/BAHAN YANG DINILAI</td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl6432393 style='height:15.0pt'></td>
  <td class=xl6732393>1</td>
  <td class=xl6432393></td>
  <td class=xl6432393></td>
  <td class=xl6432393></td>
  <td class=xl6732393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td colspan=4 class=xl6632393>Tigaraksa Tanggal, ...................... </td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl6432393 style='height:15.0pt'></td>
  <td class=xl6732393>2</td>
  <td class=xl6432393></td>
  <td class=xl6432393></td>
  <td class=xl6432393></td>
  <td class=xl6732393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td colspan=3 class=xl6632393>PEJABAT PENGUSUL</td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl6432393 style='height:15.0pt'></td>
  <td class=xl6732393>3</td>
  <td class=xl6432393></td>
  <td class=xl6432393></td>
  <td class=xl6432393></td>
  <td class=xl6732393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl6432393 style='height:15.0pt'></td>
  <td class=xl6732393>4</td>
  <td class=xl6432393></td>
  <td class=xl6432393></td>
  <td class=xl6432393></td>
  <td class=xl6732393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl6432393 style='height:15.0pt'></td>
  <td class=xl6732393>5</td>
  <td class=xl6432393></td>
  <td class=xl6432393></td>
  <td class=xl6432393></td>
  <td class=xl6732393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl6432393 style='height:15.0pt'></td>
  <td class=xl6432393></td>
  <td class=xl6432393></td>
  <td class=xl6432393></td>
  <td class=xl6432393></td>
  <td class=xl6732393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl6432393 style='height:15.0pt'></td>
  <td class=xl6432393></td>
  <td class=xl6432393></td>
  <td class=xl6432393></td>
  <td class=xl6432393></td>
  <td class=xl6732393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td colspan=3 class=xl6632393>( <u><?php echo $pengusul; ?></u> )</td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl6432393 style='height:15.0pt'></td>
  <td class=xl6432393></td>
  <td class=xl6432393></td>
  <td class=xl6432393></td>
  <td class=xl6432393></td>
  <td class=xl6732393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td colspan=3 class=xl6632393>NIP. <?php echo $nip1; ?></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl6432393 style='height:15.0pt'></td>
  <td class=xl6432393></td>
  <td class=xl6432393></td>
  <td class=xl6432393></td>
  <td class=xl6432393></td>
  <td class=xl6732393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl6432393 style='height:15.0pt'></td>
  <td class=xl6432393></td>
  <td class=xl6432393></td>
  <td class=xl6432393></td>
  <td class=xl6432393></td>
  <td class=xl6732393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl6432393 colspan=6 style='height:15.0pt'>CATATAN TIM
  PENILAI</td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl6432393 style='height:15.0pt'></td>
  <td class=xl6432393></td>
  <td class=xl6432393></td>
  <td class=xl6432393></td>
  <td class=xl6432393></td>
  <td class=xl6732393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td colspan=4 class=xl6632393>Tigaraksa Tanggal, ...................... </td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl6432393 style='height:15.0pt'></td>
  <td colspan=6 class=xl6732393>………………………………………………………..…………………………………………………………….</td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td colspan=3 class=xl6632393>KETUA TIM PENILAI </td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl6432393 style='height:15.0pt'></td>
  <td colspan=6 class=xl6732393>………………………………………………………..…………………………………………………………….</td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl6432393 style='height:15.0pt'></td>
  <td colspan=6 class=xl6732393>………………………………………………………..…………………………………………………………….</td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl6432393 style='height:15.0pt'></td>
  <td colspan=6 class=xl6732393>………………………………………………………..…………………………………………………………….</td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl6432393 style='height:15.0pt'></td>
  <td colspan=6 class=xl6732393>………………………………………………………..…………………………………………………………<span class="xl66323932">
    <?php $nip2; ?>
  </span>….</td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl6432393 style='height:15.0pt'></td>
  <td colspan=6 class=xl6732393>………………………………………………………..…………………………………………………………….</td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td colspan=3 class=xl6632393>( <u><?php echo $timPenilai; ?></u> )</td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl6432393 style='height:15.0pt'></td>
  <td colspan=6 class=xl6732393>………………………………………………………..…………………………………………………………….</td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td colspan=3 class=xl6632393>NIP. <?php echo $nip2; ?></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl6432393 style='height:15.0pt'></td>
  <td class=xl6432393></td>
  <td class=xl6432393></td>
  <td class=xl6432393></td>
  <td class=xl6432393></td>
  <td class=xl6732393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl6432393 colspan=6 style='height:15.0pt'>CATATAN PEJABAT
  PENILAI</td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl6432393 style='height:15.0pt'></td>
  <td class=xl6432393></td>
  <td class=xl6432393></td>
  <td class=xl6432393></td>
  <td class=xl6432393></td>
  <td class=xl6732393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td colspan=4 class=xl6632393>Tigaraksa Tanggal, ...................... </td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl6432393 style='height:15.0pt'></td>
  <td colspan=6 class=xl6732393>………………………………………………………..…………………………………………………………….</td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td colspan=3 class=xl6632393>PEJABAT PENILAI</td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl6432393 style='height:15.0pt'></td>
  <td colspan=6 class=xl6732393>………………………………………………………..…………………………………………………………….</td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl6432393 style='height:15.0pt'></td>
  <td colspan=6 class=xl6732393>………………………………………………………..…………………………………………………………….</td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl6432393 style='height:15.0pt'></td>
  <td colspan=6 class=xl6732393>………………………………………………………..…………………………………………………………….</td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl6432393 style='height:15.0pt'></td>
  <td colspan=6 class=xl6732393>………………………………………………………..…………………………………………………………….</td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl6432393 style='height:15.0pt'></td>
  <td colspan=6 class=xl6732393>………………………………………………………..…………………………………………………………….</td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td colspan=3 class=xl6632393>( <u><?php echo $pejabatPenilai; ?></u> )</td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl6432393 style='height:15.0pt'></td>
  <td colspan=6 class=xl6732393>………………………………………………………..…………………………………………………………….</td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
  <td colspan=3 class=xl6632393>NIP. <?php echo $nip3; ?></td>
  <td class=xl1532393></td>
  <td class=xl1532393></td>
 </tr>
 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=515 style='width:28pt'></td>
  <td width=19 style='width:14pt'></td>
  <td width=459 style='width:14pt'></td>
  <td width=440 style='width:14pt'></td>
  <td width=421 style='width:14pt'></td>
  <td width=62 style='width:47pt'></td>
  <td width=340 style='width:255pt'></td>
  <td width=79 style='width:59pt'></td>
  <td width=85 style='width:64pt'></td>
  <td width=85 style='width:64pt'></td>
  <td width=83 style='width:62pt'></td>
  <td width=75 style='width:56pt'></td>
  <td width=107 style='width:80pt'></td>
  <td width=64 style='width:48pt'></td>
 </tr>
 <![endif]>
</table>

</div>


<!----------------------------->
<!--END OF OUTPUT FROM EXCEL PUBLISH AS WEB PAGE WIZARD-->
<!----------------------------->
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