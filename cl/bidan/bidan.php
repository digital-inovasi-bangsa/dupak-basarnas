<?php
	$priode1 = $tahun.'-'.$bulan.'-'.'01';
	$priode2 = $tahun.'-'.$bulan1.'-'.jmlhari($bulan1,$tahun);
	
	//echo $priode1;
	//echo $priode2;
?>
<html xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:x="urn:schemas-microsoft-com:office:excel"
xmlns="http://www.w3.org/TR/REC-html40">

<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=ProgId content=Excel.Sheet>
<meta name=Generator content="Microsoft Excel 15">
<link rel=File-List href="cl_files/filelist.xml">
<link rel="icon" type="image/jpg" href="../assets/images/logo_warna.jpg" />
<style id="Book1_7805_Styles">
<!--table
	{mso-displayed-decimal-separator:"\.";
	mso-displayed-thousand-separator:"\,";}
.xl157805
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
.xl657805
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
.xl667805
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
.xl677805
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
	text-align:right;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl687805
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
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl697805
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
.xl707805
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
.xl717805
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
	text-align:right;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl727805
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
.xl737805
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
	border:.5pt solid windowtext;
	background:#99CCFF;
	mso-pattern:black none;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl747805
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
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl757805
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
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl767805
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
	text-align:right;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl777805
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
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl787805
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
	text-align:general;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl797805
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
.xl807805
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
.xl817805
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
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl827805
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
	text-align:right;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl837805
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
	vertical-align:bottom;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl847805
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
	text-align:general;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl857805
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
	text-align:right;
	vertical-align:top;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl867805
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
.xl877805
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
	text-align:right;
	vertical-align:top;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl887805
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
.xl897805
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
.xl907805
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
	text-align:center;
	vertical-align:top;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl917805
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
.xl927805
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
.xl937805
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
	mso-number-format:"\#\,\#\#0\.000";
	text-align:center;
	vertical-align:bottom;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl947805
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
.xl957805
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
.xl967805
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
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl977805
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
.xl987805
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
	vertical-align:middle;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl997805
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
	text-align:right;
	vertical-align:middle;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1007805
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
	vertical-align:middle;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl1017805
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
	vertical-align:middle;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1027805
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
.xl1037805
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
.xl1047805
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
.xl1057805
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
.xl1067805
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
.xl1077805
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
.xl1087805
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
.xl1097805
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
.xl1107805
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
.xl1117805
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
.xl1127805
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
.xl1137805
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
.xl1147805
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
.xl1157805
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
.xl1167805
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
.xl1177805
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
.xl1187805
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
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1197805
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
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1207805
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
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1217805
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
	white-space:normal;}
.xl1227805
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
	text-align:center;
	vertical-align:top;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1237805
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
	text-align:center;
	vertical-align:top;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1247805
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
	text-align:center;
	vertical-align:top;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1257805
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
.xl1267805
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
	text-align:center;
	vertical-align:top;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl1277805
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
.xl1287805
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
.xl1297805
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
.xl1307805
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
.xl1317805
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
.xl1327805
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
.xl6978051 {padding-top:1px;
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
.xl6978052 {padding-top:1px;
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
.xl69780511 {padding-top:1px;
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
.xl697805111 {padding-top:1px;
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
.xl69780521 {padding-top:1px;
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
.xl7078051 {padding-top:1px;
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
-->
</style>
<title>APLIKASI DUPAK</title></head>

<body>
<!--[if !excel]>&nbsp;&nbsp;<![endif]-->
<!--The following information was generated by Microsoft Excel's Publish as Web
Page wizard.-->
<!--If the same item is republished from Excel, all information between the DIV
tags will be replaced.-->
<!----------------------------->
<!--START OF OUTPUT FROM EXCEL PUBLISH AS WEB PAGE WIZARD -->
<!----------------------------->

<div id="Book1_7805" align=center x:publishsource="Excel">

<table border=0 cellpadding=0 cellspacing=0 width=1195 style='border-collapse:
 collapse;table-layout:fixed;width:895pt'>
 <col class=xl707805 width=27 style='mso-width-source:userset;mso-width-alt:
 987;width:20pt'>
 <col class=xl707805 width=19 span=5 style='mso-width-source:userset;
 mso-width-alt:694;width:14pt'>
 <col width=371 style='mso-width-source:userset;mso-width-alt:13568;width:278pt'>
 <col class=xl717805 width=32 style='mso-width-source:userset;mso-width-alt:
 1170;width:24pt'>
 <col class=xl747805 width=89 style='mso-width-source:userset;mso-width-alt:
 3254;width:67pt'>
 <col class=xl747805 width=78 style='mso-width-source:userset;mso-width-alt:
 2852;width:59pt'>
 <col width=99 style='mso-width-source:userset;mso-width-alt:3620;width:74pt'>
 <col width=83 style='mso-width-source:userset;mso-width-alt:3035;width:62pt'>
 <col width=114 style='mso-width-source:userset;mso-width-alt:4169;width:86pt'>
 <col width=207 style='mso-width-source:userset;mso-width-alt:7570;width:155pt'>
 <tr class=xl667805 height=25 style='height:18.75pt'>
  <td colspan=7 height=25 class=xl1307805 width=493 style='height:18.75pt;
  width:368pt'>LEMBAR PENGECEKAN DATA KEGIATAN</td>
  <td class=xl677805 width=32 style='width:24pt'></td>
  <td class=xl687805 width=89 style='width:67pt'></td>
  <td class=xl687805 width=78 style='width:59pt'></td>
  <td class=xl667805 width=99 style='width:74pt'></td>
  <td class=xl667805 width=83 style='width:62pt'></td>
  <td class=xl667805 width=114 style='width:86pt'></td>
  <td class=xl667805 width=207 style='width:155pt'></td>
 </tr>
 <tr class=xl667805 height=25 style='height:18.75pt'>
  <td colspan=7 height=25 class=xl1307805 style='height:18.75pt'>JABATAN
  FUNGSIONAL BIDAN</td>
  <td class=xl677805></td>
  <td class=xl687805></td>
  <td colspan=4 class=xl1327805>DATA TENAGA FUNGSIONAL</td>
  <td class=xl667805></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl697805 style='height:15.0pt'></td>
  <td class=xl707805></td>
  <td class=xl707805></td>
  <td class=xl707805></td>
  <td class=xl707805></td>
  <td class=xl697805></td>
  <td class=xl157805></td>
  <td class=xl717805></td>
  <td class=xl727805>NAMA</td>
  <td colspan=3 class=xl887805>: <?php echo $nama_pegawai; ?></td>
  <td class=xl667805>JABATAN</td>
  <td class=xl157805>: <?php echo $jabatan; ?></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td colspan=7 height=20 class=xl697805 style='height:15.0pt'>ANGKA KREDIT
  YANG LALU</td>
  <td class=xl717805></td>
  <td class=xl727805>NIP</td>
  <td colspan=3 class=xl887805>: <?php echo $nip; ?></td>
  <td class=xl667805>UNIT KERJA</td>
  <td class=xl157805>: <?php echo $unit_kerja; ?></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl707805 style='height:15.0pt'></td>
  <td class=xl707805></td>
  <td class=xl707805></td>
  <td class=xl707805></td>
  <td class=xl707805></td>
  <td class=xl697805></td>
  <td class=xl157805></td>
  <td class=xl717805></td>
  <td class=xl727805>GOL/TMT</td>
  <td colspan=3 class=xl887805>: <?php echo $golongan." / ". $tgl_tmt; ?></td>
  <td class=xl667805>MASA PENILAIAN</td>
  <td class=xl157805>:</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl707805 style='height:15.0pt'></td>
  <td class=xl707805></td>
  <td class=xl707805></td>
  <td class=xl707805></td>
  <td class=xl707805></td>
  <td class=xl697805></td>
  <td class=xl157805></td>
  <td class=xl717805></td>
  <td class=xl747805></td>
  <td class=xl747805></td>
  <td class=xl157805></td>
  <td class=xl157805></td>
  <td class=xl157805></td>
  <td class=xl157805></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl707805 style='height:15.0pt'></td>
  <td class=xl707805></td>
  <td class=xl707805></td>
  <td class=xl707805></td>
  <td class=xl707805></td>
  <td class=xl697805></td>
  <td class=xl157805></td>
  <td class=xl717805></td>
  <td class=xl747805></td>
  <td class=xl747805></td>
  <td class=xl157805></td>
  <td class=xl157805></td>
  <td class=xl157805></td>
  <td class=xl157805></td>
 </tr>
 <tr class=xl667805 height=20 style='height:15.0pt'>
  <td rowspan=3 height=61 class=xl897805 style='height:45.75pt'>NO</td>
  <td colspan=6 rowspan=3 class=xl897805>UNSUR, SUB UNSUR, BUTIR KEGIATAN</td>
  <td rowspan=3 class=xl897805>&nbsp;</td>
  <td rowspan=3 class=xl1217805 width=89 style='width:67pt'>SATUAN HASIL</td>
  <td rowspan=3 class=xl1217805 width=78 style='width:59pt'>BOBOT NILAI</td>
  <td colspan=2 rowspan=2 class=xl897805>DATA KEGIATAN</td>
  <td rowspan=3 class=xl1217805 width=114 style='width:86pt'>ANGKA KREDIT</td>
  <td rowspan=3 class=xl1217805 width=207 style='width:155pt'>KETERANGAN (TUGAS
  POKOK)</td>
 </tr>
 <tr class=xl667805 height=20 style='height:15.0pt'> </tr>
 <tr class=xl667805 height=21 style='mso-height-source:userset;height:15.75pt'>
  <td height=21 class=xl897805 style='height:15.75pt;border-top:none;
  border-left:none'>DIUSULKAN</td>
  <td class=xl897805 style='border-top:none;border-left:none'>DISETUJUI</td>
 </tr>
 <tr class=xl667805 height=20 style='height:15.0pt'>
  <td height=20 class=xl957805 style='height:15.0pt;border-top:none'>I</td>
  <td colspan=6 class=xl1157805 style='border-right:.5pt solid black;
  border-left:none'>UNSUR UTAMA PENDIDIKAN</td>
  <td class=xl767805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl777805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl777805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl787805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl787805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl787805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl757805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>A</td>
  <td colspan=5 class=xl1087805 style='border-right:.5pt solid black;
  border-left:none'>Pendidikan formal dan mendapat gelar/ijazah</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl847805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl847805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl847805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>1</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Sarjana muda/Akademi/Diploma III Bidan</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Ijazah</td>
  <td class=xl837805 style='border-top:none;border-left:none'>60</td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_1_1_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_1_1_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_1_1_1'; $kal='60'; $lap->kalibulan($tahun,$bulan,$bulan1,$id_keg,$id_pegawai,$kal); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>2</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Diploma II Bidan</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Ijazah</td>
  <td class=xl837805 style='border-top:none;border-left:none'>50</td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_1_2_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_1_2_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_1_2_1'; $kal='50'; $lap->kalibulan($tahun,$bulan,$bulan1,$id_keg,$id_pegawai,$kal); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td colspan=5 class=xl1227805 style='border-right:.5pt solid black;
  border-left:none'>JUMLAH IA</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl927805 style='border-top:none;border-left:none'><?php $sri=$lap->hasilkalibulan($tahun,$bulan,$bulan1,$id_pegawai,$kal); echo $sri; ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td height=40 class=xl797805 style='height:30.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>B</td>
  <td colspan=5 class=xl1257805 width=447 style='border-left:none;width:334pt'>Mengikuti
  pendidikan dan pelatihan fungsional dan mendapat Surat Tanda Tamat Pendidikan
  dan Pelatihan (STTPL)</td>
  <td class=xl857805 width=32 style='border-top:none;border-left:none;
  width:24pt'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl847805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl847805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl847805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>1</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Lamanya lebih dari 960 jam</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Sertifikat</td>
  <td class=xl837805 style='border-top:none;border-left:none'>15</td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_2_1_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_2_1_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_2_1_1'; $kal='15'; $lap->kalibulan($tahun,$bulan,$bulan1,$id_keg,$id_pegawai,$kal); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>2</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Lamanya 641 sampai 960 jam</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Sertifikat</td>
  <td class=xl837805 style='border-top:none;border-left:none'>9</td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_2_2_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_2_2_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_2_2_1'; $kal='9'; $lap->kalibulan($tahun,$bulan,$bulan1,$id_keg,$id_pegawai,$kal); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>3</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Lamanya 401 sampai 640 jam</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Sertifikat</td>
  <td class=xl837805 style='border-top:none;border-left:none'>5</td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_2_3_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_2_3_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_2_3_1'; $kal='5'; $lap->kalibulan($tahun,$bulan,$bulan1,$id_keg,$id_pegawai,$kal); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>4</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Lamanya 161 sampai 400 jam</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Sertifikat</td>
  <td class=xl837805 style='border-top:none;border-left:none'>3</td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_2_4_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_2_4_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_2_4_1'; $kal='3'; $lap->kalibulan($tahun,$bulan,$bulan1,$id_keg,$id_pegawai,$kal); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>5</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Lamanya 81 sampai 160 jam</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Sertifikat</td>
  <td class=xl837805 style='border-top:none;border-left:none'>2</td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_2_5_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_2_5_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_2_5_1'; $kal='2'; $lap->kalibulan($tahun,$bulan,$bulan1,$id_keg,$id_pegawai,$kal); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>6</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Lamanya 30 sampai 80 jam</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Sertifikat</td>
  <td class=xl837805 style='border-top:none;border-left:none'>1</td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_2_6_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_2_6_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_2_6_1'; $kal='1'; $lap->kalibulan($tahun,$bulan,$bulan1,$id_keg,$id_pegawai,$kal); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td colspan=5 class=xl1267805 style='border-left:none'>JUMLAH IB</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl927805 style='border-top:none;border-left:none'><?php $srii=$lap->hasilkalibulan1($tahun,$bulan,$bulan1,$id_pegawai); echo $srii; ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=19 style='mso-height-source:userset;height:14.25pt'>
  <td height=19 class=xl797805 style='height:14.25pt;border-top:none'>&nbsp;</td>
  <td colspan=6 class=xl1277805 style='border-right:.5pt solid black;
  border-left:none'>JUMLAH I A s.d I B</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl927805 style='border-top:none;border-left:none'><?php $lap->jml1A1B($tahun,$bulan,$bulan1,$id_pegawai);  ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'><?php  ?></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td colspan=6 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>&nbsp;</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr class=xl667805 height=20 style='height:15.0pt'>
  <td height=20 class=xl957805 style='height:15.0pt;border-top:none'>II</td>
  <td colspan=6 class=xl1027805 style='border-right:.5pt solid black;
  border-left:none'>PELAYANAN KEBIDANAN</td>
  <td class=xl767805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl777805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl777805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl847805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl847805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl847805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl757805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>A.</td>
  <td colspan=5 class=xl1087805 style='border-right:.5pt solid black;
  border-left:none'>Melaksanakan pengkajian kepada klien</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl847805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl847805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl847805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>1</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Anamnesa</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl847805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl847805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl847805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>a.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Pranikah **)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>**)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.001</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php  $id_keg = 'A.1.1'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.1'; $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.1'; $y=0.001; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>b.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Ibu hamil normal *)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.0006</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.2';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.2';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.2';  $y=0.0006; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>c.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Ibu bersalin normal *)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.0006</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.3';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.3';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.3';  $y=0.0006; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>d.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Ibu nifas normal *)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.0006</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.4';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.4';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.4';  $y=0.0006; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>e.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Remaja putri **)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>**)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.001</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.5';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.5';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.5';  $y=0.001; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>f.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Remaja putri bermasalah ***)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.003</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.6';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.6';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.6';  $y=0.003; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>g.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Ibu hamil tidak normal ***)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.003</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.7';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.7';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.7';  $y=0.003; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>h.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Ibu bersalin tidak normal ***)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.003</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.8';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.8';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.8';  $y=0.003; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>i.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Ibu nifas tidak normal ***)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.003</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.9';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.9';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.9';  $y=0.0006; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>j.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Ibu bayi dan balita *)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.006</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.10';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.10';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.10';  $y=0.006; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>k.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Ibu bayi dan balita sakit **)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>**)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.001</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.11';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.11';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.11';  $y=0.001; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>l.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>KB/Masa interval *)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.0006</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.12';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.12';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.12';  $y=0.0006; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>m.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Wanita menopause ***)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.003</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.13';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.13';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.13';  $y=0.003; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>n.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Ibu dengan PMS (Penyakit Menular Seksual) *)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.001</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.14';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.14';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.14';  $y=0.001; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>o.<span
  style='mso-spacerun:yes'> </span></td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Persiapan operasi ***)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.003</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.15';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.15';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.15';  $y=0.003; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>p.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Gangguan sistem reproduksi ***)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.003</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.16';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.16';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'A.1.16';  $y=0.003; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>2</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Pemeriksaan fisik</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl847805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl847805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl847805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>a.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Pranikah **)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>**)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.001</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.1';  $y=0.001; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>b.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Ibu hamil normal *)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.0006</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.2';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.2';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.2';  $y=0.0006; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>c.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Ibu bersalin normal *)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.0006</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.3';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.3';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.3';  $y=0.0006; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>d.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Ibu nifas normal *)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.0006</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.4';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.4';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.4';  $y=0.0006; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>e.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Remaja putri **)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>**)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.001</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.5';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.5';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.5';  $y=0.001; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>f.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Remaja putri bermasalah ***)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.003</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.6';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.6';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.6';  $y=0.0006; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>g.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Ibu hamil tidak normal ***)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.003</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.7';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.7';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.7';  $y=0.003; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>h.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Ibu bersalin tidak normal ***)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.003</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.8';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.8';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.8';  $y=0.003; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>i.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Ibu nifas tidak normal ***)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.003</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.9';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.9';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.9';  $y=0.003; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>j.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Ibu bayi dan balita *)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.006</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.10';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.10';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.10';  $y=0.006; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>k.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Ibu bayi dan balita sakit **)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>**)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.001</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.11';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.11';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.11';  $y=0.0006; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>l.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>KB/Masa interval *)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.0006</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.12';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.12';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.12';  $y=0.0006; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>m.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Wanita menopause ***)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.003</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.13';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.13';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.13';  $y=0.003; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>n.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Ibu dengan PMS (Penyakit Menular Seksual) **)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.001</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.14';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.14';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.14';  $y=0.001; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>o.<span
  style='mso-spacerun:yes'> </span></td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Persiapan operasi ***)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.003</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.15';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.15';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.15';  $y=0.003; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>p.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Gangguan sistem reproduksi ***)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.003</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.16';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.16';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'A.2.16';  $y=0.003; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>B.</td>
  <td colspan=5 class=xl1087805 style='border-right:.5pt solid black;
  border-left:none'>Melakukan pengambilan bahan laboratorium</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl847805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl847805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl847805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>1</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Pengambilan/penyediaan bahan laboratorium</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl847805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl847805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl847805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>a.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Darah *)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.0006</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'B.1.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'B.1.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'B.1.1';  $y=0.0006; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>b.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Secret vagina *)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.0006</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'B.1.2';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'B.1.2';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'B.1.2';  $y=0.0006; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>c.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Secret cervix *)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.0006</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'B.1.3';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'B.1.3';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'B.1.3';  $y=0.0006; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>d.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Air ketuban *)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.0006</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'B.1.4';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'B.1.4';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'B.1.4';  $y=0.0006; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>C.</td>
  <td colspan=5 class=xl1087805 style='border-right:.5pt solid black;
  border-left:none'>Melaksanakan pemeriksaan laboratorium</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl847805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl847805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl847805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>1</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Pemeriksaan urine</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl847805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl847805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl847805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>a.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Protein **)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>**)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.002</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'C.1.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'C.1.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'C.1.1';  $y=0.002; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>b.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Reduksi **)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>**)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.002</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'C.1.2';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'C.1.2';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'C.1.2';  $y=0.0006; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>2</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Darah</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>a.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>HB **)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>**)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.002</td>
   <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'C.2.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'C.2.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'C.2.1';  $y=0.002; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>D.</td>
  <td colspan=5 class=xl1087805 style='border-right:.5pt solid black;
  border-left:none'>Menegakkan diagnosa kebidanan</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>1</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Membuat diagnosa kebidanan sesuai dengan hasil pengkajian
  pada</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>a.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Kasus normal **)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>**)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.002</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'D.1.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'D.1.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'D.1.1';  $y=0.002; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>b.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Kasus tidak normal ***)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.005</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'D.1.2';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'D.1.2';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'D.1.2';  $y=0.005; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>E.</td>
  <td colspan=5 class=xl1087805 style='border-right:.5pt solid black;
  border-left:none'>Melaksanakan perencanaan asuhan kebidanan</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>1</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Membuat diagnosa kebidanan pada</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>a.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Kasus normal **)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>**)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.002</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'E.1.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'E.1.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'E.1.1';  $y=0.002; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>b.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Kasus tidak normal ***)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.005</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'E.1.2';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'E.1.2';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'E.1.2';  $y=0.005; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>F.</td>
  <td colspan=5 class=xl1087805 style='border-right:.5pt solid black;
  border-left:none'>Melaksanakan persiapan alat dan obat</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>1</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Persiapan alat untuk pelayanan</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>a.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Pranikah **)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>**)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.0008</td>
   <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.1';  $y=0.0008; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>b.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Ibu hamil normal *)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.0006</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.2';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.2';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.2';  $y=0.0006; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>c.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Persalinan normal *)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.0006</td>
   <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.3';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.3';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.3';  $y=0.0006; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>d.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Bayi baru lahir *)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.0006</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.4';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.4';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.4';  $y=0.0006; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>e.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Persalinan tidak normal ***)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.003</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.5';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.5';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.5';  $y=0.003; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>f.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>KB/Masa interval *)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.0006</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.6';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.6';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.6';  $y=0.0006; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>g.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Operasi ***)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.005</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.7';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.7';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.7';  $y=0.005; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>h.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Bayi dan balita *)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.0006</td>
  <td class=xl937805 style='border-top:none;border-left:none'>0</td>
  <td class=xl937805 style='border-top:none;border-left:none'>0</td>
  <td class=xl917805 style='border-top:none;border-left:none'>0</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>i.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Bayi dan balita sakit **)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>**)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.008</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.8';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.8';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.8';  $y=0.008; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>j.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Wanita menopause ***)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.001</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.9';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.9';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.9';  $y=0.001; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>k.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Ibu dengan PMS (Penyakit Menular Seksual) **)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>**)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.0008</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.10';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.10';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.10';  $y=0.0006; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>l.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Gangguan sistem reproduksi</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>*</td>
  <td colspan=2 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Pap smear ***)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.001</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.11';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.11';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.11';  $y=0.001; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>*</td>
  <td colspan=2 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Biopsi ***)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.001</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.12';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.12';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.12';  $y=0.001; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>*</td>
  <td colspan=2 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Ginekology ***)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.001</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.13';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.13';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.13';  $y=0.001; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>*</td>
  <td colspan=2 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Curretage ***)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.001</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.14';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.14';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.14';  $y=0.001; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>m.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Remaja putri **)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>**)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.0008</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.15';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.15';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.15';  $y=0.0008; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>n.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Remaja putri bermasalah ***)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.001</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.16';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.16';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'F.1.16';  $y=0.001; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>2</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Persiapan obat</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>a.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Pranikah **)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>**)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.0008</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.1';  $y=0.0008; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>b.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Ibu hamil normal *)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.0003</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.2';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.2';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.2';  $y=0.0003; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>c.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Persalinan normal *)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.0003</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.3';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.3';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.3';  $y=0.0003; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>d.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Persalinan tidak normal ***)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.001</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.4';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.4';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.4';  $y=0.001; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>e.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Bayi dan balita sakit **)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>**)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.0008</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.5';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.5';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.5';  $y=0.0008; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>f.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Operasi ***)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.001</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.6';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.6';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.6';  $y=0.001; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>g.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Curretage ***)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.001</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.7';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.7';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.7';  $y=0.001; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>h.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Induksi persalinan ***)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.001</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.8';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.8';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.8';  $y=0.001; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>i.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Penambahan cairan **)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>**)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.0008</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.9';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.9';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.9';  $y=0.0008; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>j.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Infeksi</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>*</td>
  <td colspan=2 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Kehamilan ***)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.001</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.10';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.10';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.10';  $y=0.001; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>*</td>
  <td colspan=2 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Persalinan ***)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.001</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.11';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.11';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.11';  $y=0.001; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>*</td>
  <td colspan=2 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Nifas ***)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.001</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.12';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.12';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.12';  $y=0.001; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>k.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Bayi lahir dengan asphixia **)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>**)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.0008</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.13';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.13';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.13';  $y=0.0008; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>l.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Ibu dengan gangguan kehamilan</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>*</td>
  <td colspan=2 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Hiperemisis gravidarum ***)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.001</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.14';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.14';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.14';  $y=0.001; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>*</td>
  <td colspan=2 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>EPH gestosis ***)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.001</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.15';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.15';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.15';  $y=0.001; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>m.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Remaja putri **)</td>
  <td class=xl967805 style='border-top:none;border-left:none'>**)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.0008</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.16';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.16';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.16';  $y=0.0008; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>n.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Remaja putri bermasalah ***)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.001</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.17';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.17';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'F.2.17';  $y=0.001; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>G.</td>
  <td colspan=5 class=xl1087805 style='border-right:.5pt solid black;
  border-left:none'>Melaksanakan asuhan kebidanan</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>1</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Pranikah</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>a.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Memberikan immunisasi/kekebalan **)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>**)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.001</td>
   <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.1.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.1.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.1.1';  $y=0.001; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>2</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Ibu hamil</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>a.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Memberikan immunisasi/kekebalan *)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.0006</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.2.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.2.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.2.1';  $y=0.0006; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>b.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Memberikan robonansia (sesuai kebutuhan) *)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.0003</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.2.2';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.2.2';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.2.2';  $y=0.0003; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>c.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Mengajarkan senam hamil *)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.002</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.2.3';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.2.3';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.2.3';  $y=0.002; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>3</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Persalinan normal kala I</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>a.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Pemeriksaan per vagina *)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.0008</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.3.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.3.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.3.1';  $y=0.0008; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>b.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Melakukan huknah/klisma *)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.0008</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.3.2';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.3.2';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.3.2';  $y=0.0008; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>c.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Melakukan keteterisasi *)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.0006</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.3.3';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.3.3';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.3.3';  $y=0.0006; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>d.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Memberikan hidrasi *)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.0008</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.3.4';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.3.4';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.3.4';  $y=0.0008; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>e.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Memantau kemajuan persalinan *)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.004</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.3.5';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.3.5';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.3.5';  $y=0.004; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>f.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Melakukan amnicotomi *)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.0006</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.3.6';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.3.6';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.3.6';  $y=0.0006; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>g.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Melakukan episiotomi dan menjahit perineum *)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.001</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.3.7';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.3.7';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.3.7';  $y=0.001; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>h.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Asuhan kebidanan kala II *)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.001</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.3.8';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.3.8';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.3.8';  $y=0.001; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>i.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Asuhan kebidanan kala III *)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.001</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.3.9';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.3.9';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.3.9';  $y=0.001; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>j.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Asuhan kebidanan kala IV *)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.001</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.3.10';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.3.10';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.3.10';  $y=0.001; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>k.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Memberi obat utero tonica *)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.0006</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.3.11';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.3.11';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.3.11';  $y=0.0006; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>4</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Ibu nifas normal</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>a.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Puerperium *)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.0006</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.4.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.4.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.4.1';  $y=0.0006; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>b.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Perawatan payudara *)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.0006</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.4.2';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.4.2';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.4.2';  $y=0.0006; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>c.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Senam nifas *)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.0006</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.4.3';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.4.3';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.4.3';  $y=0.0006; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>d.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Bimbingan menyusui *)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.0006</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.4.4';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.4.4';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.4.4';  $y=0.0006; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>5</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Bayi baru lahir</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>a.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Observasi *)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.0006</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.5.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.5.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.5.1';  $y=0.0006; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>b.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Membersihkan jalan nafas *)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.0006</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.5.2';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.5.2';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.5.2';  $y=0.0006; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>c.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Mencegah hypothermi *)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.0006</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.5.3';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.5.3';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.5.3';  $y=0.0006; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>d.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Memotong dan mengikat tali pusat *)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.0006</td>
   <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.5.4';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.5.4';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.5.4';  $y=0.0006; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>e.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Melakukan kontak dini *)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.0006</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.5.5';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.5.5';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.5.5';  $y=0.0006; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>f.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Memberi identitas *)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.0006</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.5.6';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.5.6';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.5.6';  $y=0.0006; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>6</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Remaja putri **)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>**)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.001</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.6.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.6.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.6.1';  $y=0.001; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>7</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Remaja putri bermasalah ***)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.003</td>
   <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.7.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.7.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.7.1';  $y=0.003; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>8</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Ibu hamil tidak normal</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>a.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Melakukan bimbingan dan melibatkan keluarga ***)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.005</td>
   <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.8.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.8.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.8.1';  $y=0.005; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>b.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Memberi pertolongan pertama pada</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>*</td>
  <td colspan=2 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Anemia berat ***)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.003</td>
   <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.8.2';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.8.2';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.8.2';  $y=0.003; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>*</td>
  <td colspan=2 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Hyperemisis tingkat I ***)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.003</td>
   <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.8.3';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.8.3';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.8.3';  $y=0.003; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>*</td>
  <td colspan=2 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Perdarahan hamil muda ***)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.005</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.8.4';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.8.4';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.8.4';  $y=0.005; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>*</td>
  <td colspan=2 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Perdarahan hamil tua ***)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.008</td>
   <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.8.5';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.8.5';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.8.5';  $y=0.008; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>*</td>
  <td colspan=2 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Pre eklampsi ***)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.005</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.8.6';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.8.6';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.8.6';  $y=0.005; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>*</td>
  <td colspan=2 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Eklampsi ***)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.01</td>
   <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.8.7';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.8.7';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.8.7';  $y=0.01; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>*</td>
  <td colspan=2 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Ketuban pecah dini<span style='mso-spacerun:yes'> </span></td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.008</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.8.8';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.8.8';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.8.8';  $y=0.008; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>*</td>
  <td colspan=2 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Kasus faktor resiko tinggi</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.0008</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.8.9';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.8.9';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.8.9';  $y=0.0008; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>9</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Ibu bersalin tidak normal</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>a.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Menolong persalinan pada</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>*</td>
  <td colspan=2 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Letak sungsang</td>
  <td class=xl827805 style='border-top:none;border-left:none'>**)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.005</td>
   <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.9.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.9.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.9.1';  $y=0.005; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>*</td>
  <td colspan=2 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Gemeli</td>
  <td class=xl827805 style='border-top:none;border-left:none'>**)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.004</td>
   <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.9.2';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.9.2';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.9.2';  $y=0.004; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>*</td>
  <td colspan=2 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Versi ekstraksi gemeli anak kedua</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.005</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.9.3';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.9.3';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.9.3';  $y=0.003; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td height=40 class=xl797805 style='height:30.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>b.</td>
  <td colspan=3 class=xl1317805 width=409 style='border-left:none;width:306pt'>Melakukan
  vacum ekstraksi pada persalinan kepala di dasar panggul tidak normal</td>
  <td class=xl877805 width=32 style='border-top:none;border-left:none;
  width:24pt'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.005</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.9.4';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.9.4';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.9.4';  $y=0.005; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=23 style='mso-height-source:userset;height:17.25pt'>
  <td height=23 class=xl797805 style='height:17.25pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>c.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Melakukan forcep pada persalinan kepala di dasar panggul</td>
  <td class=xl877805 width=32 style='border-top:none;border-left:none;
  width:24pt'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.005</td>
   <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.9.5';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.9.5';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.9.5';  $y=0.005; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>d.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Melakukan placenta manual</td>
  <td class=xl877805 width=32 style='border-top:none;border-left:none;
  width:24pt'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.005</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.9.6';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.9.6';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.9.6';  $y=0.005; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='mso-height-source:userset;height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>e.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Melakukan kompresi bimanual eksternal pada kala IV</td>
  <td class=xl877805 width=32 style='border-top:none;border-left:none;
  width:24pt'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.005</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.9.7';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.9.7';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.9.7';  $y=0.005; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>f.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Memberikan infus</td>
  <td class=xl827805 style='border-top:none;border-left:none'>**)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.001</td>
   <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.9.8';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.9.8';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.9.8';  $y=0.001; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>g.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Memberikan transfusi darah</td>
  <td class=xl827805 style='border-top:none;border-left:none'>**)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.001</td>
   <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.9.9';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.9.9';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.9.9';  $y=0.001; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>h.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Melakukan asuhan kebidanan pada kala IV</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.005</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.9.10';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.9.10';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.9.10';  $y=0.005; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>i.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Memberikan utero tonika</td>
  <td class=xl827805 style='border-top:none;border-left:none'>**)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.0008</td>
   <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.9.11';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.9.11';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.9.11';  $y=0.0008; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>j.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Pemberian anti biotika</td>
  <td class=xl827805 style='border-top:none;border-left:none'>**)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.0008</td>
   <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.9.12';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.9.12';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.9.12';  $y=0.0008; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>10</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Ibu nifas tidak normal</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>a.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Puerperium</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.003</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.10.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.10.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.10.1';  $y=0.003; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>b.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Asuhan post sectio caesaria</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.003</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.10.2';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.10.2';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.10.2';  $y=0.003; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>c.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Phlegmasia albadolens</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.003</td>
 <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.10.3';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.10.3';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.10.3';  $y=0.003; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>d.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Febris/sepsis puerperalis</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.003</td>
 <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.10.4';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.10.4';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.10.4';  $y=0.003; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>e.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Anemia berat</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.003</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.10.5';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.10.5';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.10.5';  $y=0.003; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>f.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Pra eklampsi/eklampsi</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.005</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.10.6';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.10.6';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.10.6';  $y=0.005; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>g.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Pembengkakan payudara</td>
  <td class=xl827805 style='border-top:none;border-left:none'>**)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.001</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.10.7';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.10.7';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.10.7';  $y=0.001; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>h.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Mastitis</td>
  <td class=xl827805 style='border-top:none;border-left:none'>**)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.001</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.10.8';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.10.8';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.10.8';  $y=0.001; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>i.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Pemberian anti biotika</td>
  <td class=xl827805 style='border-top:none;border-left:none'>**)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.0008</td>
 <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.10.9';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.10.9';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.10.9';  $y=0.0008; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>j.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Psikose</td>
  <td class=xl827805 style='border-top:none;border-left:none'>**)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.002</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.10.10';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.10.10';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.10.10';  $y=0.002; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>k.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Pemberian reboransia</td>
  <td class=xl827805 style='border-top:none;border-left:none'>**)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.0008</td>
 <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.10.11';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.10.11';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.10.11';  $y=0.0008; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>l.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Pemberian hidrasi/nutrisi</td>
  <td class=xl827805 style='border-top:none;border-left:none'>**)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.0008</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.10.12';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.10.12';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.10.12';  $y=0.0008; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>11</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Bayi baru lahir tidak normal</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>a.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Observasi</td>
  <td class=xl827805 style='border-top:none;border-left:none'>**)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.001</td>
 <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.11.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.11.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.11.1';  $y=0.001; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>b.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Perawatan tali pusat</td>
  <td class=xl827805 style='border-top:none;border-left:none'>**)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.002</td>
 <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.11.2';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.11.2';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.11.2';  $y=0.002; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>c.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Resusitasi pada bayi asphixia</td>
  <td class=xl827805 style='border-top:none;border-left:none'>**)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.002</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.11.3';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.11.3';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.11.3';  $y=0.002; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>d.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Perawatan hipotermi</td>
  <td class=xl827805 style='border-top:none;border-left:none'>**)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.002</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.11.4';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.11.4';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.11.4';  $y=0.002; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>12</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Bayi dan balita</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.0006</td>
  <td class=xl937805 style='border-top:none;border-left:none'>0</td>
  <td class=xl937805 style='border-top:none;border-left:none'>0</td>
  <td class=xl917805 style='border-top:none;border-left:none'>0</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>13</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Bayi dan balita sakit</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>a.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Penanggulangan diare</td>
  <td class=xl827805 style='border-top:none;border-left:none'>**)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.001</td>
 <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.13.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.13.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.13.1';  $y=0.002; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>b.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Melaksanakan pengobatan todak lanjut Puskesmas/RS/Dokter</td>
  <td class=xl827805 style='border-top:none;border-left:none'>**)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.002</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.13.2';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.13.2';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.13.2';  $y=0.002; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>14</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>KB/masa interval</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>a.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Memasang AKDR</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.001</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.14.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.14.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.14.1';  $y=0.001; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>b.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Melepas AKDR</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.001</td>
 <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.14.2';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.14.2';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.14.2';  $y=0.001; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>c.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Memasang AKBK</td>
  <td class=xl827805 style='border-top:none;border-left:none'>**)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.002</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.14.3';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.14.3';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.14.3';  $y=0.002; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>d.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Melepas AKBK</td>
  <td class=xl827805 style='border-top:none;border-left:none'>**)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.003</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.14.4';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.14.4';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.14.4';  $y=0.003; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>e.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Memberikan suntikan</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.0006</td>
 <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.14.5';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.14.5';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.14.5';  $y=0.0006; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>f.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Memberikan alat kontrasepsi sederhana</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.0006</td>
 <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.14.6';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.14.6';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.14.6';  $y=0.0006; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>g.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Memberikan tablet</td>
  <td class=xl827805 style='border-top:none;border-left:none'>**)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.003</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.14.7';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.14.7';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.14.7';  $y=0.003; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>h.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Memberikan asuhan efek samping alat kontrasepsi</td>
  <td class=xl827805 style='border-top:none;border-left:none'>**)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.002</td>
 <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.14.8';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.14.8';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.14.8';  $y=0.002; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>15</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Wanita menopause</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.003</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.15.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.15.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.15.1';  $y=0.003; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>16</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Penyakit menular seksual</td>
  <td class=xl827805 style='border-top:none;border-left:none'>**)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.001</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.16.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.16.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.16.1';  $y=0.001; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>17</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Operasi</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Melaksanakan asuhan kebidanan pada</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>a.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Pre-operasi</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.005</td>
 <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.17.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.17.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.17.1';  $y=0.005; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>b.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Post-operasi</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.01</td>
 <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.17.2';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.17.2';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.17.2';  $y=0.01; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>18</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Gangguan kehamilan muda</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>a.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Melaksanakan asuhana kebidanan pada hipermisis gravidarum</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.005</td>
 <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.18.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.18.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.18.1';  $y=0.005; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>b.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Melaksanakan asuhan kebidanan pada</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>*</td>
  <td colspan=2 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Abortus imminens</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.005</td>
 <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.18.2';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.18.2';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.18.2';  $y=0.005; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>*</td>
  <td colspan=2 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Abortus incipiens</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.005</td>
 <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.18.3';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.18.3';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.18.3';  $y=0.005; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>c.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Melakukan digital pada abortus incomplitus</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.005</td>
 <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.18.4';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.18.4';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.18.4';  $y=0.005; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>d.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Melaksanakan asuhan kebidanan pada pasca abortus</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.005</td>
 <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.18.5';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.18.5';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.18.5';  $y=0.005; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>19</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Gangguan alat reproduksi</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>a.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Melaksanakan asuhan kebidanan pada gangguan alat reproduksi</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.005</td>
 <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.19.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.19.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.19.1';  $y=0.005; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>b.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Memberikan obat</td>
  <td class=xl827805 style='border-top:none;border-left:none'>**)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.0008</td>
 <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.19.2';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.19.2';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.19.2';  $y=0.0008; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>c.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Memberikan infus cairan</td>
  <td class=xl827805 style='border-top:none;border-left:none'>**)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.001</td>
 <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.19.3';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.19.3';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.19.3';  $y=0.001; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>d.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Memberi transfusi darah</td>
  <td class=xl827805 style='border-top:none;border-left:none'>**)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.001</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.19.4';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.19.4';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.19.4';  $y=0.001; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>20</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Melaksanakan tugas di kamar bedah</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>a.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Instrumentator</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.02</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.20.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.20.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.20.1';  $y=0.02; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>b.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Assisten</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.02</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.20.2';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.20.2';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.20.2';  $y=0.02; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>c.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>On loop</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.02</td>
 <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.20.3';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.20.3';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.20.3';  $y=0.02; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>21</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Pendamping dokter dalam tindakan obstetri &amp; ginekologi</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.02</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.21.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'G.21.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'G.21.1';  $y=0.003; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>H.</td>
  <td colspan=5 class=xl1087805 style='border-right:.5pt solid black;
  border-left:none'>Melakukan KIE pada</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>1</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Pranikah</td>
  <td class=xl827805 style='border-top:none;border-left:none'>**)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.001</td>
 <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'H.1.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'H.1.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'H.1.1';  $y=0.001; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>2</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Ibu hamil normal</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Orang</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.0006</td>
 <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'H.2.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'H.2.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'H.2.1';  $y=0.0006; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>3</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Ibu bersalin normal</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Orang</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.0006</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'H.3.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'H.3.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'H.3.1';  $y=0.0006; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>4</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Ibu nifas normal</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Orang</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.0006</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'H.4.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'H.4.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'H.4.1';  $y=0.0006; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>5</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Remaja putri</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Orang</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.001</td>
   <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'H.5.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'H.5.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'H.5.1';  $y=0.0006; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>6</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Remaja putri bermasalah</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Orang</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.003</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'H.6.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'H.6.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'H.6.1';  $y=0.003; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>7</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Ibu hamil tidak normal dan keluarga</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Orang</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.005</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'H.7.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'H.7.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'H.7.1';  $y=0.005; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>8</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Ibu bersalin tidak normal</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Orang</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.005</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'H.8.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'H.8.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'H.8.1';  $y=0.005; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>9</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Ibu bayi dan balita</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Orang</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.006</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'H.9.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'H.9.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'H.9.1';  $y=0.0006; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>10</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>KB/Masa interval</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Orang</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.0006</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'H.10.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'H.10.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'H.10.1';  $y=0.0006; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>11</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Wanita menopause</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Orang</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.0003</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'H.11.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'H.11.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'H.11.1';  $y=0.0003; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>12</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Ibu dengan PMS (Penyakit Menular Seksual)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>**)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Orang</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.001</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'H.12.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'H.12.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'H.12.1';  $y=0.001; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>13</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Persiapan operasi</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Orang</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.005</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'H.13.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'H.13.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'H.13.1';  $y=0.0006; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>14</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Gangguan kehamilan</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Orang</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.005</td>
 <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'H.14.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'H.14.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'H.14.1';  $y=0.005; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>15</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Gangguan sistem reproduksi</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Orang</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.003</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'H.15.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'H.15.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'H.15.1';  $y=0.003; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>I.</td>
  <td colspan=5 class=xl1087805 style='border-right:.5pt solid black;
  border-left:none'>Melaksanakan kolaborasi dengan tim kesehatan lain</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Laporan</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.01</td>
   <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'I.1.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'I.1.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'I.1.1';  $y=0.01; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>J.</td>
  <td colspan=5 class=xl1087805 style='border-right:.5pt solid black;
  border-left:none'>Melaksanakan rujukan<span style='mso-spacerun:yes'> </span></td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td colspan=5 class=xl1087805 style='border-right:.5pt solid black;
  border-left:none'>Melakukan rujukan untuk</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>1</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Remaja putri bermasalah</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.003</td>
   <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'J.1.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'J.1.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'J.1.1';  $y=0.003; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>2</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Ibu hamil tidak normal</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.005</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'J.2.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'J.2.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'J.2.1';  $y=0.005; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>3</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Ibu bersalin tidak normal</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.02</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'J.3.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'J.3.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'J.3.1';  $y=0.02; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>4</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Ibu nifas tidak normal</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.01</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'J.4.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'J.4.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'J.4.1';  $y=0.01; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>5</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Bayi baru lahir tidak normal</td>
  <td class=xl827805 style='border-top:none;border-left:none'>**)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.005</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'J.5.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'J.5.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'J.5.1';  $y=0.005; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>6</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Bayi dan balita sakit</td>
  <td class=xl827805 style='border-top:none;border-left:none'>**)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.002</td>
   <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'J.6.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'J.6.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'J.6.1';  $y=0.002; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>7</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>KB/masa interval</td>
  <td class=xl827805 style='border-top:none;border-left:none'>**)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.002</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'J.7.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'J.7.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'J.7.1';  $y=0.002; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>8</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Wanita menopause</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.003</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'J.8.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'J.8.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'J.8.1';  $y=0.003; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>9</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Ibu dengan PMS (Penyakit Menular Seksual)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>**)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.001</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'J.9.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'J.9.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'J.9.1';  $y=0.001; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>10</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Gangguan kehamilan</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.01</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'J.10.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'J.10.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'J.10.1';  $y=0.01; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>11</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Gangguan alat reproduksi</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.003</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'J.11.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'J.11.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'J.11.1';  $y=0.003; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>K.</td>
  <td colspan=5 class=xl1087805 style='border-right:.5pt solid black;
  border-left:none'>Melaksanakan evaluasi asuhan kebidanan<span
  style='mso-spacerun:yes'> </span></td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td colspan=5 class=xl1087805 style='border-right:.5pt solid black;
  border-left:none'>Melaksanakan evaluasi asuhan kebidanan pada</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>1</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Kasus Normal</td>
  <td class=xl827805 style='border-top:none;border-left:none'>**)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Laporan</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.001</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'K.1.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'K.1.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'K.1.1';  $y=0.001; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>2</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Kasus tidak normal</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Laporan</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.003</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'K.2.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'K.2.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'K.2.1';  $y=0.003; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>L.</td>
  <td colspan=5 class=xl1087805 style='border-right:.5pt solid black;
  border-left:none'>Melakukan dokumentasi pada asuha kebidanan</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>1</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Pranikah</td>
  <td class=xl827805 style='border-top:none;border-left:none'>**)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.008</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'L.1.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'L.1.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'L.1.1';  $y=0.008; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>2</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Ibu hamil<span style='mso-spacerun:yes'> </span></td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.00013</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'L.2.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'L.2.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'L.2.1';  $y=0.00013; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>3</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Persalinan normal</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.0003</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'L.3.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'L.3.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'L.3.1';  $y=0.0006; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>4</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Ibu nifas normal</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.0003</td>
   <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'L.4.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'L.4.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'L.4.1';  $y=0.0003; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>5</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Bayi baru lahir</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.0003</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'L.5.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'L.5.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'L.5.1';  $y=0.0003; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>6</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Remaja putri</td>
  <td class=xl827805 style='border-top:none;border-left:none'>**)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.0008</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'L.6.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'L.6.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'L.6.1';  $y=0.0008; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>7</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Remaja putri bermasalah</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.001</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'L.7.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'L.7.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'L.7.1';  $y=0.001; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>8</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Ibu hamil tidak normal</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.001</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'L.8.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'L.8.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'L.8.1';  $y=0.001; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>9</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Persalinan tidak normal</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.001</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'L.9.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'L.9.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'L.9.1';  $y=0.001; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>10</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Ibu nifas tidak normal</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.001</td>
   <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'L.10.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'L.10.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'L.10.1';  $y=0.001; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>11</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Bayi dan balita</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.0003</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'L.11.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'L.11.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'L.11.1';  $y=0.0003; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>12</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Bayi dan balita sakit</td>
  <td class=xl827805 style='border-top:none;border-left:none'>**)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.0008</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'L.12.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'L.12.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'L.12.1';  $y=0.0008; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>13</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>KB/Masa interval</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.0003</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'L.13.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'L.13.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'L.13.1';  $y=0.0003; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>14</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Wanita menopause</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.001</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'L.14.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'L.14.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'L.14.1';  $y=0.001; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>15</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Ibu dengan PMS (Penyakit Menular Seksual)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>**)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.0008</td>
   <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'L.15.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'L.15.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'L.15.1';  $y=0.0008; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>16</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Pasien pre &amp; post operasi</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.001</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'L.16.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'L.16.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'L.16.1';  $y=0.001; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>17</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Gangguan kehamilan</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.001</td>
   <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'L.17.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'L.17.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'L.17.1';  $y=0.001; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>18</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Gangguan alat reproduksi</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Pasien</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.001</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'L.18.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'L.18.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'L.18.1';  $y=0.001; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>M.</td>
  <td colspan=5 class=xl1087805 style='border-right:.5pt solid black;
  border-left:none'>Melaksanakan pelayanan kesehatan masyarakat<span
  style='mso-spacerun:yes'> </span></td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td colspan=5 class=xl1087805 style='border-right:.5pt solid black;
  border-left:none'>Melaksanakan pelayanan kesehatan masyarakat<span
  style='mso-spacerun:yes'> </span></td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>1</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Menyusun program tahunan</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Program</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.08</td>
   <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'M.2.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'M.2.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'M.2.1';  $y=0.08; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>2</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Menyusun instrumen pengkajian</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Laporan</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.08</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'M.3.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'M.3.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'M.3.1';  $y=0.08; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>3</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Pengkajian individu pada keluarga</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Laporan</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.004</td>
   <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'M.4.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'M.4.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'M.4.1';  $y=0.004; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>4</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Pengkajian masyarakat/wilayah</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Laporan</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.004</td>
   <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'M.5.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'M.5.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'M.5.1';  $y=0.004; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>5</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Pengkajian keluarga</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Laporan</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.004</td>
   <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'M.6.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'M.6.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'M.6.1';  $y=0.004; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>6</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Menentukan masalah</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Laporan</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.008</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'M.7.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'M.7.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'M.7.1';  $y=0.008; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>7</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Membuat laporan pengkajian</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Laporan</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.008</td>
   <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'M.8.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'M.8.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'M.8.1';  $y=0.008; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>8</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Membuat peta wilayah</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Laporan</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.008</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'M.9.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'M.9.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'M.9.1';  $y=0.008; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>9</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Membuat peta masalah</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Laporan</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.008</td>
   <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'M.10.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'M.10.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'M.10.1';  $y=0.008; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>10</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Membuat kohor/kartu masalah</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Laporan</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.008</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'M.11.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'M.11.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'M.11.1';  $y=0.008; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>11</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>membuat program asuhan</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Laporan</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.008</td>
   <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'M.12.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'M.12.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'M.12.1';  $y=0.008; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>12</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Melaksanakan kunjungan keluarga</td>
  <td class=xl827805 style='border-top:none;border-left:none'>*)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Kunjungan</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.004</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'M.13.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'M.13.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'M.13.1';  $y=0.004; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>13</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Membina posyandu</td>
  <td class=xl827805 style='border-top:none;border-left:none'>**)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Kali</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.02</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'M.14.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'M.14.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'M.14.1';  $y=0.02; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>14</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Membina dasa wisma</td>
  <td class=xl827805 style='border-top:none;border-left:none'>**)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Kali</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.01</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'M.15.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'M.15.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'M.15.1';  $y=0.01; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>15</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>membina kader KPKIA</td>
  <td class=xl827805 style='border-top:none;border-left:none'>**)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Kali</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.02</td>
   <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'M.16.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'M.16.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'M.16.1';  $y=0.02; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>16</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Membina kader PPKBD</td>
  <td class=xl827805 style='border-top:none;border-left:none'>**)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Kali</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.02</td>
   <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'M.17.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'M.17.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'M.17.1';  $y=0.001; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>17</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Membina/melatih dukun beranak</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Kali</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.04</td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'M.19.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'M.19.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'M.19.1';  $y=0.04; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>18</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Musyawarah masyarakat desa</td>
  <td class=xl827805 style='border-top:none;border-left:none'>***)</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Laporan</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.04</td>
   <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'M.18.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl937805 style='border-top:none;border-left:none'><?php $id_keg = 'M.18.1';  $lap->countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg = 'M.18.1';  $y=0.04; $lap->kali($priode1,$priode2,$id_keg,$id_pegawai,$y); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=19 style='mso-height-source:userset;height:14.25pt'>
  <td height=19 class=xl797805 style='height:14.25pt;border-top:none'>&nbsp;</td>
  <td colspan=6 class=xl1277805 style='border-right:.5pt solid black;
  border-left:none'>JUMLAH II A s.d II M</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl927805 style='border-top:none;border-left:none'><?php $sriii=$cl->total1($id_pegawai,$priode1,$priode2); echo $sriii; ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td colspan=6 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>&nbsp;</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr class=xl667805 height=20 style='height:15.0pt'>
  <td height=20 class=xl957805 style='height:15.0pt;border-top:none'>III</td>
  <td colspan=6 class=xl1157805 style='border-right:.5pt solid black;
  border-left:none'>PENGEMBANGAN PROFESI</td>
  <td class=xl767805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl777805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl777805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl757805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>A.</td>
  <td colspan=5 class=xl1087805 style='border-right:.5pt solid black;
  border-left:none'>Membuat karya tulis /karya ilmiah bidang kesehatan</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>1</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Karya ilmiah hasil penelitian bidang kesehatan yang
  dipublikasikan</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td height=24 class=xl797805 style='height:18.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>a.<span
  style='mso-spacerun:yes'> </span></td>
  <td colspan=3 class=xl1317805 width=409 style='border-left:none;width:306pt'>Dalam
  bentuk buku yang diterbitkan dan diedarkan secara nasional<span
  style='mso-spacerun:yes'> </span></td>
  <td class=xl877805 width=32 style='border-top:none;border-left:none;
  width:24pt'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Karya</td>
  <td class=xl837805 style='border-top:none;border-left:none'>12.5</td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_10_1_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_10_1_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_10_1_1'; $kal='6'; $lap->kalibulan($tahun,$bulan,$bulan1,$id_keg,$id_pegawai,$kal); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>b.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Dalam majalah ilmiah yang diakui instansi berwenang (LIPI)</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Karya</td>
  <td class=xl837805 style='border-top:none;border-left:none'>6</td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_10_1_2'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_10_1_2'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_10_1_2'; $kal='6'; $lap->kalibulan($tahun,$bulan,$bulan1,$id_keg,$id_pegawai,$kal); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=59 style='mso-height-source:userset;height:44.25pt'>
  <td height=59 class=xl797805 style='height:44.25pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>2</td>
  <td colspan=4 class=xl1317805 width=428 style='border-left:none;width:320pt'>Karya
  tulis berupa tinjauan atau ulasan ilmiah dengan gagasan sendiri dalam bidang
  kesehatan yang tidak dipublikasikan tetapi didokumentasikan pada perpustakaan
  instansi yang bersangkutan<span style='mso-spacerun:yes'> </span></td>
  <td class=xl877805 width=32 style='border-top:none;border-left:none;
  width:24pt'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>a.<span
  style='mso-spacerun:yes'> </span></td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Dalam bentuk Buku</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Buku</td>
  <td class=xl837805 style='border-top:none;border-left:none'>7</td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_10_2_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_10_2_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_10_2_1'; $kal='7'; $lap->kalibulan($tahun,$bulan,$bulan1,$id_keg,$id_pegawai,$kal); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>b.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Dalam bentuk Makalah</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Makalah</td>
  <td class=xl837805 style='border-top:none;border-left:none'>3.5</td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_10_2_2'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_10_2_2'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_10_2_2'; $kal='3.5'; $lap->kalibulan($tahun,$bulan,$bulan1,$id_keg,$id_pegawai,$kal); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td height=40 class=xl797805 style='height:30.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>3</td>
  <td colspan=4 class=xl1317805 width=428 style='border-left:none;width:320pt'>Membuat
  karya tulis/karya ilmiah berupa tinjauan atau ulasan ilmiah dengan gagasan
  sendiri dalam bidang kesehatan yang dipublikasikan<span
  style='mso-spacerun:yes'> </span></td>
  <td class=xl877805 width=32 style='border-top:none;border-left:none;
  width:24pt'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>a.<span
  style='mso-spacerun:yes'> </span></td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Dalam bentuk Buku</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Buku</td>
  <td class=xl837805 style='border-top:none;border-left:none'>8</td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_10_3_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_10_3_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_10_3_1'; $kal='4'; $lap->kalibulan($tahun,$bulan,$bulan1,$id_keg,$id_pegawai,$kal); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>b.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Dalam bentuk Makalah</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Makalah</td>
  <td class=xl837805 style='border-top:none;border-left:none'>4</td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_10_3_2'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_10_3_2'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_10_3_2'; $kal='4'; $lap->kalibulan($tahun,$bulan,$bulan1,$id_keg,$id_pegawai,$kal); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=39 style='mso-height-source:userset;height:29.25pt'>
  <td height=39 class=xl797805 style='height:29.25pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>4</td>
  <td colspan=4 class=xl1317805 width=428 style='border-left:none;width:320pt'>Tulisan
  ilmiah populer di bidang kebidanan yang disebarluaskan melalui media massa</td>
  <td class=xl877805 width=32 style='border-top:none;border-left:none;
  width:24pt'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Karya</td>
  <td class=xl837805 style='border-top:none;border-left:none'>2</td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_10_4_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_10_4_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_10_4_1'; $kal='2'; $lap->kalibulan($tahun,$bulan,$bulan1,$id_keg,$id_pegawai,$kal); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td height=40 class=xl797805 style='height:30.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>5</td>
  <td colspan=4 class=xl1317805 width=428 style='border-left:none;width:320pt'>Menyampaikan
  prasarana berupa tinjauan, gagasan dan atau ulasan ilmiah di bidang kebidanan
  pada pertemuan ilmiah</td>
  <td class=xl877805 width=32 style='border-top:none;border-left:none;
  width:24pt'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Naskah</td>
  <td class=xl837805 style='border-top:none;border-left:none'>2.5</td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_10_5_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_10_5_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_10_5_1'; $kal='2.5'; $lap->kalibulan($tahun,$bulan,$bulan1,$id_keg,$id_pegawai,$kal); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td height=40 class=xl797805 style='height:30.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>B.</td>
  <td colspan=5 class=xl1257805 width=447 style='border-left:none;width:334pt'>Menerjemahkan/menyadur
  buku dan bahan lainnya di bidang kebidanan</td>
  <td class=xl857805 width=32 style='border-top:none;border-left:none;
  width:24pt'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>1</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Terjemahan/saduran di bidang kebidanan yang
  dipublikasikan<span style='mso-spacerun:yes'> </span></td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td height=40 class=xl797805 style='height:30.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>a.<span
  style='mso-spacerun:yes'> </span></td>
  <td colspan=3 class=xl1317805 width=409 style='border-left:none;width:306pt'>Dalam
  bentuk buku yang diterbitkan dan diedarkan secara nasional<span
  style='mso-spacerun:yes'> </span></td>
  <td class=xl877805 width=32 style='border-top:none;border-left:none;
  width:24pt'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Buku</td>
  <td class=xl837805 style='border-top:none;border-left:none'>7</td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_11_2_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_11_2_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_11_2_1'; $kal='7'; $lap->kalibulan($tahun,$bulan,$bulan1,$id_keg,$id_pegawai,$kal); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=39 style='mso-height-source:userset;height:29.25pt'>
  <td height=39 class=xl797805 style='height:29.25pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>b.</td>
  <td colspan=3 class=xl1317805 width=409 style='border-left:none;width:306pt'>Dalam
  bentuk majalah ilmiah yang diakui instansi berwenang (LIPI)</td>
  <td class=xl877805 width=32 style='border-top:none;border-left:none;
  width:24pt'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Majalah</td>
  <td class=xl837805 style='border-top:none;border-left:none'>3.5</td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_11_1_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_11_1_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_11_1_1'; $kal='3.5'; $lap->kalibulan($tahun,$bulan,$bulan1,$id_keg,$id_pegawai,$kal); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=41 style='mso-height-source:userset;height:30.75pt'>
  <td height=41 class=xl797805 style='height:30.75pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>2</td>
  <td colspan=4 class=xl1317805 width=428 style='border-left:none;width:320pt'>Terjemahan/saduran
  di bidang kebidanan<span style='mso-spacerun:yes'>  </span>yang tidak
  dipublikasikan dalam bentuk</td>
  <td class=xl877805 width=32 style='border-top:none;border-left:none;
  width:24pt'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl807805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>a.<span
  style='mso-spacerun:yes'> </span></td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Buku</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Buku</td>
  <td class=xl837805 style='border-top:none;border-left:none'>3</td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_11_2_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_11_2_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_11_2_1'; $kal='3'; $lap->kalibulan($tahun,$bulan,$bulan1,$id_keg,$id_pegawai,$kal); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl807805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>b.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Makalah</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Makalah</td>
  <td class=xl837805 style='border-top:none;border-left:none'>1.5</td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_11_2_2'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_11_2_2'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_11_2_2'; $kal='1.5'; $lap->kalibulan($tahun,$bulan,$bulan1,$id_keg,$id_pegawai,$kal); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>3</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Membuat abstrak tulisan ilmiah yang dimuat dalam penerbitan</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Makalah</td>
  <td class=xl837805 style='border-top:none;border-left:none'>1.5</td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_11_3_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_11_3_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_11_3_1'; $kal='1.5'; $lap->kalibulan($tahun,$bulan,$bulan1,$id_keg,$id_pegawai,$kal); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>C.</td>
  <td colspan=5 class=xl1087805 style='border-right:.5pt solid black;
  border-left:none'>Membimbing bidan di bawah jenjang jabatannya</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>1</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>membimbing bidan yang berada di bawah jenjang jabatannya</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>D.</td>
  <td colspan=5 class=xl1087805 style='border-right:.5pt solid black;
  border-left:none'>Membuat buku pedoman/petunjuk teknis dibidang kebidanan</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=40 style='mso-height-source:userset;height:30.0pt'>
  <td height=40 class=xl797805 style='height:30.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl797805 align=right style='border-top:none;border-left:none'>1</td>
  <td colspan=4 class=xl1317805 width=428 style='border-left:none;width:320pt'>Membuat
  buku pedoman/petunjuk pelaksanaan/petunjuk teknis di bidang kebidanan</td>
  <td class=xl877805 width=32 style='border-top:none;border-left:none;
  width:24pt'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Naskah</td>
  <td class=xl837805 style='border-top:none;border-left:none'>2</td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_13_1_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_13_1_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_13_1_1'; $kal='2'; $lap->kalibulan($tahun,$bulan,$bulan1,$id_keg,$id_pegawai,$kal); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>E.</td>
  <td colspan=5 class=xl1087805 style='border-right:.5pt solid black;
  border-left:none'>Mengembangkan teknologi tepat guna di bidang kebidanan</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>1</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Mengembangkan teknologi tepat guna dibidang kesehatan</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=19 style='mso-height-source:userset;height:14.25pt'>
  <td height=19 class=xl797805 style='height:14.25pt;border-top:none'>&nbsp;</td>
  <td colspan=6 class=xl1277805 style='border-right:.5pt solid black;
  border-left:none'>JUMLAH III A s.d III E</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl927805 style='border-top:none;border-left:none'><?php $riiii=$cl->ss($tahun,$bulan,$bulan1,$id_pegawai); echo $riiii; ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td colspan=6 class=xl1127805 style='border-right:.5pt solid black;
  border-left:none'>&nbsp;</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr class=xl667805 height=20 style='height:15.0pt'>
  <td height=20 class=xl957805 style='height:15.0pt;border-top:none'>IV</td>
  <td colspan=6 class=xl1157805 style='border-right:.5pt solid black;
  border-left:none'>PENUNJANG KEGIATAN PELAYANAN KEBIDANAN</td>
  <td class=xl767805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl777805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl777805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl757805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>A.</td>
  <td colspan=5 class=xl1087805 style='border-right:.5pt solid black;
  border-left:none'>Mengajar/melatih yang berkaitan dengan bidang kebidanan</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=41 style='mso-height-source:userset;height:30.75pt'>
  <td height=41 class=xl797805 style='height:30.75pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl987805 style='border-top:none;border-left:none'>1</td>
  <td colspan=4 class=xl1187805 style='border-right:.5pt solid black;
  border-left:none'>Mengajar/melatih yang berkaitan dengan bidang kebidanan</td>
  <td class=xl997805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl1007805 width=89 style='border-top:none;border-left:none;
  width:67pt'>2 jam pelajaran</td>
  <td class=xl987805 style='border-top:none;border-left:none'>0.04</td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_3_1_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_3_1_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_3_1_1'; $kal='0.04'; $lap->kalibulan($tahun,$bulan,$bulan1,$id_keg,$id_pegawai,$kal); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>B.</td>
  <td colspan=5 class=xl1087805 style='border-right:.5pt solid black;
  border-left:none'>Mengikuti kegiatan seminar/lokakarya dalam bidang kesehatan</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>1</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Mengikuti seminar/lokakarya internasional/nasional<span
  style='mso-spacerun:yes'> </span></td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>a.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Sebagai pemasaran</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Kali</td>
  <td class=xl837805 style='border-top:none;border-left:none'>3</td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_4_1_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_4_1_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_4_1_1'; $kal='3'; $lap->kalibulan($tahun,$bulan,$bulan1,$id_keg,$id_pegawai,$kal); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>b.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Sebagai pembahas/moderator/narasumber</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Kali</td>
  <td class=xl837805 style='border-top:none;border-left:none'>2</td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_4_1_2'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_4_1_2'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_4_1_2'; $kal='2'; $lap->kalibulan($tahun,$bulan,$bulan1,$id_keg,$id_pegawai,$kal); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>c.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Sebagai peserta</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Kali</td>
  <td class=xl837805 style='border-top:none;border-left:none'>1</td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_4_1_3'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_4_1_3'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_4_1_3'; $kal='1'; $lap->kalibulan($tahun,$bulan,$bulan1,$id_keg,$id_pegawai,$kal); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>2</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Mengikuti/berperan serta dalam delegasi ilmiah<span
  style='mso-spacerun:yes'> </span></td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl807805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>a.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Sebagai ketua</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Kali</td>
  <td class=xl837805 style='border-top:none;border-left:none'>1.5</td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_4_2_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_4_2_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_4_2_1'; $kal='1.5'; $lap->kalibulan($tahun,$bulan,$bulan1,$id_keg,$id_pegawai,$kal); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl807805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>b.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Sebagai anggota</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Kali</td>
  <td class=xl837805 style='border-top:none;border-left:none'>1</td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_4_2_2'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_4_2_2'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_4_2_2'; $kal='1'; $lap->kalibulan($tahun,$bulan,$bulan1,$id_keg,$id_pegawai,$kal); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>C.</td>
  <td colspan=5 class=xl1087805 style='border-right:.5pt solid black;
  border-left:none'>Menjadi anggota organisasi profesi bidan</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>1</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Tingkat internasional/nasional sebagai</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl807805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>a.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Pengurus Aktif</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Tahun</td>
  <td class=xl837805 style='border-top:none;border-left:none'>1</td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_5_1_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_5_1_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_5_1_1'; $kal='1'; $lap->kalibulan($tahun,$bulan,$bulan1,$id_keg,$id_pegawai,$kal); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl807805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>b.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Anggota Aktif</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Tahun</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.75</td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_5_1_2'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_5_1_2'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_5_1_2'; $kal='0.75'; $lap->kalibulan($tahun,$bulan,$bulan1,$id_keg,$id_pegawai,$kal); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl977805 style='border-top:none;border-left:none'>2</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Tingkat Propinsi sebagai</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl807805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>a.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Pengurus Aktif</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Tahun</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.5</td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_5_2_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_5_2_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_5_2_1'; $kal='0.5'; $lap->kalibulan($tahun,$bulan,$bulan1,$id_keg,$id_pegawai,$kal); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl807805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>b.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Anggota Aktif</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Tahun</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.35</td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_5_2_2'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_5_2_2'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_5_2_2'; $kal='0.35'; $lap->kalibulan($tahun,$bulan,$bulan1,$id_keg,$id_pegawai,$kal); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>D.</td>
  <td colspan=5 class=xl1087805 style='border-right:.5pt solid black;
  border-left:none'>Menjadi anggota tim penilai jabatan fungsional bidan</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>1</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Menjadi anggota aktif tim penilai</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Tahun</td>
  <td class=xl837805 style='border-top:none;border-left:none'>0.5</td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_6_1_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_6_1_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_6_1_1'; $kal='0.5'; $lap->kalibulan($tahun,$bulan,$bulan1,$id_keg,$id_pegawai,$kal); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>E.</td>
  <td colspan=5 class=xl1087805 style='border-right:.5pt solid black;
  border-left:none'>Memperoleh gelar kesarjanaan lainnya.</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:19.5pt'>
  <td height=26 class=xl797805 style='height:19.5pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>1</td>
  <td colspan=4 class=xl1317805 width=428 style='border-left:none;width:320pt'><span
  style='mso-spacerun:yes'> </span>Memperoleh ijazah/gelar yang tidak sesuai
  dengan bidang tugas pokoknya :</td>
  <td class=xl877805 width=32 style='border-top:none;border-left:none;
  width:24pt'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>a.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Sarjana/Diploma IV</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Ijazah/Gelar</td>
  <td class=xl837805 style='border-top:none;border-left:none'>5</td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_7_1_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_7_1_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_7_1_1'; $kal='5'; $lap->kalibulan($tahun,$bulan,$bulan1,$id_keg,$id_pegawai,$kal); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl867805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>b.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Sarjana Muda/Diploma II/Diploma III</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Ijazah/Gelar</td>
  <td class=xl837805 style='border-top:none;border-left:none'>3</td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_7_1_2'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_7_1_2'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_7_1_2'; $kal='3'; $lap->kalibulan($tahun,$bulan,$bulan1,$id_keg,$id_pegawai,$kal); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>F.</td>
  <td colspan=5 class=xl1087805 style='border-right:.5pt solid black;
  border-left:none'>Perolehan penghargaan/tanda jasa</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>1</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Tanda kehormatan Satya lencana karya satya</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>a.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Tiga puluh (30) tahun</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Setiap piagam</td>
  <td class=xl837805 style='border-top:none;border-left:none'>3</td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_8_1_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_8_1_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_8_1_1'; $kal='3'; $lap->kalibulan($tahun,$bulan,$bulan1,$id_keg,$id_pegawai,$kal); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>b.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Dua puluh (20) tahun</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Setiap piagam</td>
  <td class=xl837805 style='border-top:none;border-left:none'>2</td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_8_1_2'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_8_1_2'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_8_1_2'; $kal='2'; $lap->kalibulan($tahun,$bulan,$bulan1,$id_keg,$id_pegawai,$kal); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>c.</td>
  <td colspan=3 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Sepuluh (10) tahun</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Setiap piagam</td>
  <td class=xl837805 style='border-top:none;border-left:none'>1</td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_8_1_3'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_8_1_3'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_8_1_3'; $kal='1'; $lap->kalibulan($tahun,$bulan,$bulan1,$id_keg,$id_pegawai,$kal); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>2</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Gelar kehormatan di bidang akademis</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>Gelar</td>
  <td class=xl837805 style='border-top:none;border-left:none'>15</td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_8_2_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_8_2_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_8_2_1'; $kal='15'; $lap->kalibulan($tahun,$bulan,$bulan1,$id_keg,$id_pegawai,$kal); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=44 style='mso-height-source:userset;height:33.0pt'>
  <td height=44 class=xl797805 style='height:33.0pt;border-top:none'>&nbsp;</td>
  <td class=xl947805 style='border-top:none;border-left:none'>G.</td>
  <td colspan=5 class=xl1257805 width=447 style='border-left:none;width:334pt'>Menjadi
  anggota tim penilai karya-karya yang berkaitan dengan advokasi, penggalangan
  dukungan sosial, pemberdayaan masyarakat</td>
  <td class=xl857805 width=32 style='border-top:none;border-left:none;
  width:24pt'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>1</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Sebagai ketua</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_9_1_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_9_1_1'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_9_1_1'; $kal='1'; $lap->kalibulan($tahun,$bulan,$bulan1,$id_keg,$id_pegawai,$kal); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl797805 style='height:15.0pt;border-top:none'>&nbsp;</td>
  <td class=xl797805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl907805 style='border-top:none;border-left:none'>2</td>
  <td colspan=4 class=xl1057805 style='border-right:.5pt solid black;
  border-left:none'>Sebagai anggota</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_9_1_2'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_9_1_2'; $lap->countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai); ?></td>
  <td class=xl917805 style='border-top:none;border-left:none'><?php $id_keg='kegbln_9_1_2'; $kal='1'; $lap->kalibulan($tahun,$bulan,$bulan1,$id_keg,$id_pegawai,$kal); ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=19 style='mso-height-source:userset;height:14.25pt'>
  <td height=19 class=xl797805 style='height:14.25pt;border-top:none'>&nbsp;</td>
  <td colspan=6 class=xl1277805 style='border-right:.5pt solid black;
  border-left:none'>JUMLAH IV A s.d IV G</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl927805 style='border-top:none;border-left:none'><?php $riiiii=$cl->dd($tahun,$bulan,$bulan1,$id_pegawai); echo $riiiii; ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=19 style='mso-height-source:userset;height:14.25pt'>
  <td height=19 class=xl797805 style='height:14.25pt;border-top:none'>&nbsp;</td>
  <td colspan=6 class=xl1277805 style='border-right:.5pt solid black;
  border-left:none'>JUMLAH UNSUR UTAMA DAN UNSUR PENUNJANG</td>
  <td class=xl827805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl837805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl917805 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl927805 style='border-top:none;border-left:none'><?php $sricantik=$sri+$srii+$sriii+$riiii+$riiiii; echo $sricantik; ?></td>
  <td class=xl817805 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl707805 style='height:15.0pt'></td>
  <td class=xl707805></td>
  <td class=xl707805></td>
  <td class=xl707805></td>
  <td class=xl707805></td>
  <td class=xl707805></td>
  <td class=xl157805></td>
  <td class=xl717805></td>
  <td class=xl747805></td>
  <td class=xl747805></td>
  <td class=xl157805></td>
  <td class=xl157805></td>
  <td class=xl157805></td>
  <td class=xl157805></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl657805 colspan=4 style='height:15.0pt'>Keterangan :</td>
  <td class=xl707805></td>
  <td class=xl707805></td>
  <td class=xl157805></td>
  <td class=xl717805></td>
  <td class=xl747805></td>
  <td class=xl747805></td>
  <td class=xl157805></td>
  <td class=xl157805></td>
  <td class=xl157805></td>
  <td class=xl157805></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td colspan=2 height=20 class=xl1117805 style='height:15.0pt'>*)</td>
  <td colspan=5 class=xl1117805>Tupok Bidan Pelaksana (II/b-II/d)</td>
  <td class=xl717805></td>
  <td class=xl747805></td>
  <td class=xl747805></td>
  <td class=xl157805></td>
  <td class=xl157805></td>
  <td class=xl157805></td>
  <td class=xl157805></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td colspan=2 height=20 class=xl1117805 style='height:15.0pt'>**)</td>
  <td colspan=5 class=xl1117805>Bidan Pelaksana Lanjutan (III/a-III/b)</td>
  <td class=xl717805></td>
  <td class=xl747805></td>
  <td class=xl747805></td>
  <td class=xl157805></td>
  <td class=xl157805></td>
  <td class=xl157805></td>
  <td class=xl157805></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td colspan=2 height=20 class=xl1117805 style='height:15.0pt'>***)</td>
  <td colspan=5 class=xl1117805>Bidan Penyelia (III/c-III/d)</td>
  <td class=xl717805></td>
  <td class=xl747805></td>
  <td class=xl747805></td>
  <td class=xl157805></td>
  <td class=xl157805></td>
  <td class=xl157805></td>
  <td class=xl157805></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl707805 style='height:15.0pt'></td>
  <td class=xl707805></td>
  <td class=xl707805></td>
  <td class=xl707805></td>
  <td class=xl707805></td>
  <td class=xl707805></td>
  <td class=xl157805></td>
  <td class=xl717805></td>
  <td class=xl747805></td>
  <td class=xl747805></td>
  <td class=xl157805></td>
  <td class=xl157805></td>
  <td class=xl157805></td>
  <td class=xl157805></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl707805 style='height:15.0pt'></td>
  <td class=xl707805></td>
  <td class=xl707805></td>
  <td class=xl707805></td>
  <td class=xl707805></td>
  <td class=xl707805></td>
  <td class=xl157805></td>
  <td class=xl717805></td>
  <td class=xl747805></td>
  <td class=xl747805></td>
  <td class=xl157805></td>
  <td class=xl157805></td>
  <td class=xl157805></td>
  <td class=xl157805></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl707805 style='height:15.0pt'></td>
  <td class=xl707805></td>
  <td colspan=5 class=xl697805>TIM PENILAI</td>
  <td class=xl717805></td>
  <td colspan=3 class=xl887805>PETUGAS PEMERIKSA</td>
  <td class=xl157805></td>
  <td class=xl157805></td>
  <td class=xl887805>PETUGAS PENGELOLA</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl707805 style='height:15.0pt'></td>
  <td class=xl707805></td>
  <td class=xl707805></td>
  <td class=xl707805></td>
  <td class=xl707805></td>
  <td class=xl707805></td>
  <td class=xl157805></td>
  <td class=xl717805></td>
  <td class=xl157805></td>
  <td class=xl747805></td>
  <td class=xl157805></td>
  <td class=xl157805></td>
  <td class=xl157805></td>
  <td class=xl157805></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl707805 style='height:15.0pt'></td>
  <td class=xl707805></td>
  <td class=xl707805></td>
  <td class=xl707805></td>
  <td class=xl707805></td>
  <td class=xl707805></td>
  <td class=xl157805></td>
  <td class=xl717805></td>
  <td class=xl157805></td>
  <td class=xl747805></td>
  <td class=xl157805></td>
  <td class=xl157805></td>
  <td class=xl157805></td>
  <td class=xl157805></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl707805 style='height:15.0pt'></td>
  <td class=xl707805></td>
  <td class=xl707805></td>
  <td class=xl707805></td>
  <td class=xl707805></td>
  <td class=xl707805></td>
  <td class=xl157805></td>
  <td class=xl717805></td>
  <td class=xl157805></td>
  <td class=xl747805></td>
  <td class=xl157805></td>
  <td class=xl157805></td>
  <td class=xl157805></td>
  <td class=xl157805></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl707805 style='height:15.0pt'></td>
  <td class=xl707805></td>
  <td class=xl707805></td>
  <td class=xl707805></td>
  <td class=xl707805></td>
  <td class=xl707805></td>
  <td class=xl157805></td>
  <td class=xl717805></td>
  <td class=xl157805></td>
  <td class=xl747805></td>
  <td class=xl157805></td>
  <td class=xl157805></td>
  <td class=xl157805></td>
  <td class=xl157805></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl707805 style='height:15.0pt'></td>
  <td class=xl707805></td>
  <td class=xl707805></td>
  <td class=xl707805></td>
  <td class=xl707805></td>
  <td class=xl707805></td>
  <td class=xl157805></td>
  <td class=xl717805></td>
  <td class=xl157805></td>
  <td class=xl747805></td>
  <td class=xl157805></td>
  <td class=xl157805></td>
  <td class=xl157805></td>
  <td class=xl157805></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl707805 style='height:15.0pt'></td>
  <td class=xl707805></td>
  <td colspan=5 class=xl697805><u>(<span class="xl7078051"><span class="xl69780521"><span class="xl697805111"><u><?php echo $ttd2; ?></u></span></span></span>  )</u></td>
  <td class=xl717805></td>
  <td colspan=3 class=xl887805> <u>( <?php echo $ttd1; ?> )</u></td>
  <td class=xl157805></td>
  <td class=xl157805></td>
  <td class=xl157805> <u>( <?php echo $ttd3; ?> )</u> </td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl707805 style='height:15.0pt'></td>
  <td class=xl707805></td>
  <td colspan=5 class=xl697805>NIP.<?php echo $nip2; ?></td>
  <td class=xl717805></td>
  <td colspan=3 class=xl887805>NIP.<?php echo $nip1; ?></td>
  <td class=xl157805></td>
  <td class=xl157805></td>
  <td class=xl887805>NIP.<?php echo $nip3; ?></td>
 </tr>
 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=27 style='width:20pt'></td>
  <td width=19 style='width:14pt'></td>
  <td width=19 style='width:14pt'></td>
  <td width=19 style='width:14pt'></td>
  <td width=19 style='width:14pt'></td>
  <td width=19 style='width:14pt'></td>
  <td width=371 style='width:278pt'></td>
  <td width=32 style='width:24pt'></td>
  <td width=89 style='width:67pt'></td>
  <td width=78 style='width:59pt'></td>
  <td width=99 style='width:74pt'></td>
  <td width=83 style='width:62pt'></td>
  <td width=114 style='width:86pt'></td>
  <td width=207 style='width:155pt'></td>
 </tr>
 <![endif]>
</table>

</div>


<!----------------------------->
<!--END OF OUTPUT FROM EXCEL PUBLISH AS WEB PAGE WIZARD-->
<!----------------------------->
</body>

</html>
