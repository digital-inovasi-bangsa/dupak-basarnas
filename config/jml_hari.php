<?php
	function jmlhari($bulan1,$tahun){
		$jmlhari= cal_days_in_month(CAL_GREGORIAN, $bulan1, $tahun);
		return $jmlhari;
	}	
?>