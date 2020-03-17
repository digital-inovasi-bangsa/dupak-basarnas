<?php

class cl
{
	private $db;
	
	function __construct($pdo)
	{
		$this->db = $pdo;
	}

	public function ambilpegawai($query){
		//$query = "SELECT * FROM pegawai";
		$query = $this->db->prepare($query);
		$query->execute();
		echo "<option value=''>-- Pilih Pegawai --</option>";

		while($row=$query->fetch(PDO::FETCH_ASSOC)){
			echo "<option value='$row[id_pegawai]'>$row[nama_pegawai]</option>";
		}
		
	}

	public function ambilkatjab($query){
		//$query = "SELECT * FROM pegawai";
		$query = $this->db->prepare($query);
		$query->execute();
		echo "<option value=''>-- Pilih Jabatan --</option>";

		while($row=$query->fetch(PDO::FETCH_ASSOC)){
			echo "<option value='$row[id_jabatan]'>$row[jabatan]</option>";
		}
		
	}

	public function ss($tahun,$bulan,$bulan1,$id_pegawai){
		$query	= "SELECT sum(nilai) AS hasilTambahbln FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_10_1_1' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query 	= $this->db->prepare($query);
		$query->execute();
		$result = $query->fetch(PDO::FETCH_OBJ);
		$nn=$result->hasilTambahbln;
		$kali=$nn * 12.5;
		$kali;

		$query1	= "SELECT sum(nilai) AS hasilTambahbln1 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_10_1_2' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query1 	= $this->db->prepare($query1);
		$query1->execute();
		$result1 = $query1->fetch(PDO::FETCH_OBJ);
		$nn1=$result1->hasilTambahbln1;
		$kali1=$nn1 * 6;
		$kali1;

		$query2	= "SELECT sum(nilai) AS hasilTambahbln2 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_10_2_1' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query2 = $this->db->prepare($query2);
		$query2->execute();
		$result2 = $query2->fetch(PDO::FETCH_OBJ);
		$nn2=$result2->hasilTambahbln2;
		$kali2=$nn2 * 7;
		$kali2;

		$query3	= "SELECT sum(nilai) AS hasilTambahbln3 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_10_2_2' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query3	= $this->db->prepare($query3);
		$query3->execute();
		$result3 = $query3->fetch(PDO::FETCH_OBJ);
		$nn3=$result3->hasilTambahbln3;
		$kali3=$nn3 * 3.5;
		$kali3;

		$query4	= "SELECT sum(nilai) AS hasilTambahbln4 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_10_3_1' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query4	= $this->db->prepare($query4);
		$query4->execute();
		$result4 = $query4->fetch(PDO::FETCH_OBJ);
		$nn4=$result4->hasilTambahbln4;
		$kali4=$nn4 * 8;
		$kali4;

		$query5	= "SELECT sum(nilai) AS hasilTambahbln5 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_10_3_2' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query5	= $this->db->prepare($query5);
		$query5->execute();
		$result5 = $query5->fetch(PDO::FETCH_OBJ);
		$nn5=$result5->hasilTambahbln5;
		$kali5=$nn5 * 4;
		$kali5;

		$query6	= "SELECT sum(nilai) AS hasilTambahbln6 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_10_4_1' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query6	= $this->db->prepare($query6);
		$query6->execute();
		$result6 = $query6->fetch(PDO::FETCH_OBJ);
		$nn6=$result6->hasilTambahbln6;
		$kali6=$nn6 * 2;
		$kali6;

		$query7	= "SELECT sum(nilai) AS hasilTambahbln7 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_10_5_1' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query7	= $this->db->prepare($query7);
		$query7->execute();
		$result7 = $query7->fetch(PDO::FETCH_OBJ);
		$nn7=$result7->hasilTambahbln7;
		$kali7=$nn7 * 2.5;
		$kali7;

		$query8	= "SELECT sum(nilai) AS hasilTambahbln8 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_11_1_1' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query8	= $this->db->prepare($query8);
		$query8->execute();
		$result8 = $query8->fetch(PDO::FETCH_OBJ);
		$nn8=$result8->hasilTambahbln8;
		$kali8=$nn8 * 7;
		$kali8;

		$query9	= "SELECT sum(nilai) AS hasilTambahbln9 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_11_1_2' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query9	= $this->db->prepare($query9);
		$query9->execute();
		$result9 = $query9->fetch(PDO::FETCH_OBJ);
		$nn9=$result9->hasilTambahbln9;
		$kali9=$nn9 * 3.5;
		$kali9;

		$query10	= "SELECT sum(nilai) AS hasilTambahbln10 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_11_2_1' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query10	= $this->db->prepare($query10);
		$query10->execute();
		$result10 = $query10->fetch(PDO::FETCH_OBJ);
		$nn10=$result10->hasilTambahbln10;
		$kali10=$nn10 * 3;
		$kali10;

		$query11	= "SELECT sum(nilai) AS hasilTambahbln11 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_11_2_2' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query11	= $this->db->prepare($query11);
		$query11->execute();
		$result11 = $query11->fetch(PDO::FETCH_OBJ);
		$nn11=$result11->hasilTambahbln11;
		$kali11=$nn11 * 1.5 ;
		$kali11;

		$query12	= "SELECT sum(nilai) AS hasilTambahbln12 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_11_3_1' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query12	= $this->db->prepare($query12);
		$query12->execute();
		$result12 = $query12->fetch(PDO::FETCH_OBJ);
		$nn12=$result12->hasilTambahbln12;
		$kali12=$nn12 * 1.5;
		$kali12;

		$query13	= "SELECT sum(nilai) AS hasilTambahbln13 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_13_1_1' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query13	= $this->db->prepare($query13);
		$query13->execute();
		$result13 = $query13->fetch(PDO::FETCH_OBJ);
		$nn13=$result13->hasilTambahbln13;
		$kali13=$nn13 * 2;
		$kali13;

		$ss= $kali + $kali1 + $kali2 + $kali3 + $kali4 + $kali5 + $kali6 + $kali7 + $kali8 + $kali9 + $kali10 + $kali11 + $kali12 + $kali13 ;
		return $ss;
	}

	public function dd($tahun,$bulan,$bulan1,$id_pegawai){
		
		$sql= $this->db->prepare("SELECT sum(nilai) AS x FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_3_1_1' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ");
		$sql->execute();
		$res= $sql->fetch(PDO::FETCH_OBJ);
		$n 	=$res->x;
		$k 	=$n * 0.04;

		$sql1= $this->db->prepare("SELECT sum(nilai) AS x1 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_4_1_1' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ");
		$sql1->execute();
		$res1= $sql1->fetch(PDO::FETCH_OBJ);
		$n1	=$res1->x1;
		$k1	=$n1 * 3 ;

		$sql2= $this->db->prepare("SELECT sum(nilai) AS x2 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_4_1_2' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ");
		$sql2->execute();
		$res2= $sql2->fetch(PDO::FETCH_OBJ);
		$n2	=$res2->x2;
		$k2	=$n2 * 2 ;

		$sql3= $this->db->prepare("SELECT sum(nilai) AS x3 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_4_1_3' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ");
		$sql3->execute();
		$res3= $sql3->fetch(PDO::FETCH_OBJ);
		$n3	=$res3->x3;
		$k3	=$n3 * 1 ;

		$sql4= $this->db->prepare("SELECT sum(nilai) AS x4 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_4_2_1' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ");
		$sql4->execute();
		$res4= $sql4->fetch(PDO::FETCH_OBJ);
		$n4	=$res4->x4;
		$k4	=$n4 * 1.5 ;

		$sql5= $this->db->prepare("SELECT sum(nilai) AS x5 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_4_2_2' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ");
		$sql5->execute();
		$res5= $sql5->fetch(PDO::FETCH_OBJ);
		$n5	=$res5->x5;
		$k5	=$n5 * 1 ;

		$sql6= $this->db->prepare("SELECT sum(nilai) AS x6 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_8_1_3' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ");
		$sql6->execute();
		$res6= $sql6->fetch(PDO::FETCH_OBJ);
		$n6 =$res6->x6;
		$k6 =$n6 * 1 ;

		$sql7= $this->db->prepare("SELECT sum(nilai) AS x7 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_8_2_1' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ");
		$sql7->execute();
		$res7= $sql7->fetch(PDO::FETCH_OBJ);
		$n7	=$res7->x7;
		$k7	=$n7 * 15 ;

		$sql11= $this->db->prepare("SELECT sum(nilai) AS x11 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_5_1_1' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ");
		$sql11->execute();
		$res11= $sql11->fetch(PDO::FETCH_OBJ);
		$n11=$res11->x11;
		$k11=$n11 * 1 ;

		$sql12= $this->db->prepare("SELECT sum(nilai) AS x12 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_5_1_2' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ");
		$sql12->execute();
		$res12= $sql12->fetch(PDO::FETCH_OBJ);
		$n12=$res12->x12;
		$k12=$n12 * 0.75 ;

		$sql13= $this->db->prepare("SELECT sum(nilai) AS x13 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_5_2_1' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ");
		$sql13->execute();
		$res13= $sql13->fetch(PDO::FETCH_OBJ);
		$n13=$res13->x13;
		$k13=$n13 * 0.5 ;

		$sql14= $this->db->prepare("SELECT sum(nilai) AS x14 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_5_2_2' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ");
		$sql14->execute();
		$res14= $sql14->fetch(PDO::FETCH_OBJ);
		$n14=$res14->x14;
		$k14=$n14 * 0.35 ;

		$sql15= $this->db->prepare("SELECT sum(nilai) AS x15 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_6_1_1' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ");
		$sql15->execute();
		$res15= $sql15->fetch(PDO::FETCH_OBJ);
		$n15=$res15->x15;
		$k15=$n15 * 0.5 ;

		$sql16= $this->db->prepare("SELECT sum(nilai) AS x16 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_7_1_1' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ");
		$sql16->execute();
		$res16= $sql16->fetch(PDO::FETCH_OBJ);
		$n16=$res16->x16;
		$k16=$n16 * 5 ;

		$sql17= $this->db->prepare("SELECT sum(nilai) AS x17 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_7_1_2' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ");
		$sql17->execute();
		$res17= $sql17->fetch(PDO::FETCH_OBJ);
		$n17=$res17->x17;
		$k17=$n17 * 3;

		$sql18= $this->db->prepare("SELECT sum(nilai) AS x18 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_8_1_1' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ");
		$sql18->execute();
		$res18= $sql18->fetch(PDO::FETCH_OBJ);
		$n18=$res18->x18;
		$k18=$n18 * 3 ;

		$sql19= $this->db->prepare("SELECT sum(nilai) AS x19 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_8_1_2' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ");
		$sql19->execute();
		$res19= $sql19->fetch(PDO::FETCH_OBJ);
		$n19=$res19->x19;
		$k19=$n19 * 2 ;

		$dd= $k + $k1 + $k2 + $k3 + $k4 + $k5 + $k6 + $k7 + $k11 + $k12 + $k13 + $k14 + $k15 + $k16 + $k17 + $k18 + $k19 ;
		return $dd;
	}

	public function total1($id_pegawai,$priode1,$priode2){

		$query = $this->db->prepare("SELECT * FROM v_id_keg WHERE id_pegawai = $id_pegawai ");
		$query->execute();
		$res = $query->fetchAll(PDO::FETCH_COLUMN, 0);
		
		//==================== Hasil Uji Coba =========================================
		/*
		$stmt = $this->db->prepare("SELECT fc_jmlcl('$res[41]','$id_pegawai','$priode1','$priode2') AS x");
		$stmt->execute();
		$result = $stmt->fetch(PDO::FETCH_OBJ);
		$rt=$result->x;

		$stmt1 = $this->db->prepare("SELECT fc_jmlcl('$res[39]','$id_pegawai','$priode1','$priode2') AS x1");
		$stmt1->execute();
		$result1 = $stmt1->fetch(PDO::FETCH_OBJ);
		$rt1=$result1->x1;

		echo $res[41]. ' = '.$rt.' <br> ';
		echo $res[0]. ' = '.$rt1.' <br>' ;
		$rt0 = $rt + $rt1;
		echo $rt0;
		*/

		$query = $this->db->prepare("SELECT * FROM v_id_keg WHERE id_pegawai = $id_pegawai ");
		$query->execute();
		$res = $query->fetchAll(PDO::FETCH_COLUMN, 0);

		$stmt = $this->db->prepare("SELECT fc_jmlcl('$res[0]','$id_pegawai','$priode1','$priode2') AS x");
		$stmt->execute();
		$result = $stmt->fetch(PDO::FETCH_OBJ);
		$rt=$result->x;

		$stmt1 = $this->db->prepare("SELECT fc_jmlcl('$res[1]','$id_pegawai','$priode1','$priode2') AS x1");
		$stmt1->execute();
		$result1 = $stmt1->fetch(PDO::FETCH_OBJ);
		$rt1=$result1->x1;

		$stmt2 = $this->db->prepare("SELECT fc_jmlcl('$res[2]','$id_pegawai','$priode1','$priode2') AS x2");
		$stmt2->execute();
		$result2 = $stmt2->fetch(PDO::FETCH_OBJ);
		$rt2=$result2->x2;

		$stmt3 = $this->db->prepare("SELECT fc_jmlcl('$res[3]','$id_pegawai','$priode1','$priode2') AS x3");
		$stmt3->execute();
		$result3 = $stmt3->fetch(PDO::FETCH_OBJ);
		$rt3=$result3->x3;

		$stmt4 = $this->db->prepare("SELECT fc_jmlcl('$res[4]','$id_pegawai','$priode1','$priode2') AS x4");
		$stmt4->execute();
		$result4 = $stmt4->fetch(PDO::FETCH_OBJ);
		$rt4=$result4->x4;

		$stmt5 = $this->db->prepare("SELECT fc_jmlcl('$res[5]','$id_pegawai','$priode1','$priode2') AS x5");
		$stmt5->execute();
		$result5 = $stmt5->fetch(PDO::FETCH_OBJ);
		$rt5=$result5->x5;

		$stmt6 = $this->db->prepare("SELECT fc_jmlcl('$res[6]','$id_pegawai','$priode1','$priode2') AS x6");
		$stmt6->execute();
		$result6 = $stmt6->fetch(PDO::FETCH_OBJ);
		$rt6=$result6->x6;

		$stmt7 = $this->db->prepare("SELECT fc_jmlcl('$res[7]','$id_pegawai','$priode1','$priode2') AS x7");
		$stmt7->execute();
		$result7 = $stmt7->fetch(PDO::FETCH_OBJ);
		$rt7=$result7->x7;

		$stmt8 = $this->db->prepare("SELECT fc_jmlcl('$res[8]','$id_pegawai','$priode1','$priode2') AS x8");
		$stmt8->execute();
		$result8 = $stmt8->fetch(PDO::FETCH_OBJ);
		$rt8=$result8->x8;

		$stmt9 = $this->db->prepare("SELECT fc_jmlcl('$res[9]','$id_pegawai','$priode1','$priode2') AS x9");
		$stmt9->execute();
		$result9 = $stmt9->fetch(PDO::FETCH_OBJ);
		$rt9=$result9->x9;

		$stmt10 = $this->db->prepare("SELECT fc_jmlcl('$res[10]','$id_pegawai','$priode1','$priode2') AS x10");
		$stmt10->execute();
		$result10 = $stmt10->fetch(PDO::FETCH_OBJ);
		$rt10=$result10->x10;

		if(isset($res['11'])<>""){
			$stmt11 = $this->db->prepare("SELECT fc_jmlcl('$res[11]','$id_pegawai','$priode1','$priode2') AS x11");
			$stmt11->execute();
			$result11 = $stmt11->fetch(PDO::FETCH_OBJ);
			$rt11=$result11->x11;
		}else{
			$rt11=0;
		}

		if(isset($res['12'])<>""){
			$stmt12 = $this->db->prepare("SELECT fc_jmlcl('$res[12]','$id_pegawai','$priode1','$priode2') AS x12");
			$stmt12->execute();
			$result12 = $stmt12->fetch(PDO::FETCH_OBJ);
			$rt12=$result12->x12;
		}else{
			$rt12=0;
		}

		if(isset($res['13'])<>""){
			$stmt13 = $this->db->prepare("SELECT fc_jmlcl('$res[13]','$id_pegawai','$priode1','$priode2') AS x13");
			$stmt13->execute();
			$result13 = $stmt13->fetch(PDO::FETCH_OBJ);
			$rt13=$result13->x13;
		}else{
			$rt13=0;
		}

		if(isset($res['14'])<>""){
			$stmt14 = $this->db->prepare("SELECT fc_jmlcl('$res[14]','$id_pegawai','$priode1','$priode2') AS x14");
			$stmt14->execute();
			$result14 = $stmt14->fetch(PDO::FETCH_OBJ);
			$rt14=$result14->x14;
		}else{
			$rt14=0;
		}

		if(isset($res['15'])<>""){
			$stmt15 = $this->db->prepare("SELECT fc_jmlcl('$res[15]','$id_pegawai','$priode1','$priode2') AS x15");
			$stmt15->execute();
			$result15 = $stmt15->fetch(PDO::FETCH_OBJ);
			$rt15=$result15->x15;
		}else{
			$rt15=0;
		}

		if(isset($res['16'])<>""){
			$stmt16 = $this->db->prepare("SELECT fc_jmlcl('$res[16]','$id_pegawai','$priode1','$priode2') AS x16");
			$stmt16->execute();
			$result16 = $stmt16->fetch(PDO::FETCH_OBJ);
			$rt16=$result16->x16;
		}else{
			$rt16=0;
		}

		if(isset($res['17'])<>""){
			$stmt17 = $this->db->prepare("SELECT fc_jmlcl('$res[17]','$id_pegawai','$priode1','$priode2') AS x17");
			$stmt17->execute();
			$result17 = $stmt17->fetch(PDO::FETCH_OBJ);
			$rt17=$result17->x17;
		}else{
			$rt17=0;
		}

		if(isset($res['18'])<>""){
			$stmt18 = $this->db->prepare("SELECT fc_jmlcl('$res[18]','$id_pegawai','$priode1','$priode2') AS x18");
			$stmt18->execute();
			$result18 = $stmt18->fetch(PDO::FETCH_OBJ);
			$rt18=$result18->x18;
		}else{
			$rt18=0;
		}

		if(isset($res['19'])<>""){
			$stmt19 = $this->db->prepare("SELECT fc_jmlcl('$res[19]','$id_pegawai','$priode1','$priode2') AS x19");
			$stmt19->execute();
			$result19 = $stmt19->fetch(PDO::FETCH_OBJ);
			$rt19=$result19->x19;
		}else{
			$rt19=0;
		}

		if(isset($res['20'])<>""){
			$stmt20 = $this->db->prepare("SELECT fc_jmlcl('$res[20]','$id_pegawai','$priode1','$priode2') AS x20");
			$stmt20->execute();
			$result20 = $stmt20->fetch(PDO::FETCH_OBJ);
			$rt20=$result20->x20;
		}else{
			$rt20=0;
		}

		if(isset($res['21'])<>""){
			$stmt21 = $this->db->prepare("SELECT fc_jmlcl('$res[21]','$id_pegawai','$priode1','$priode2') AS x21");
			$stmt21->execute();
			$result21 = $stmt21->fetch(PDO::FETCH_OBJ);
			$rt21=$result21->x21;
		}else{
			$rt21=0;
		}


		if(isset($res['22'])<>""){
			$stmt22 = $this->db->prepare("SELECT fc_jmlcl('$res[22]','$id_pegawai','$priode1','$priode2') AS x22");
			$stmt22->execute();
			$result22 = $stmt22->fetch(PDO::FETCH_OBJ);
			$rt22=$result22->x22;
		}else{
			$rt22=0;
		}

		if(isset($res['23'])<>""){
			$stmt23 = $this->db->prepare("SELECT fc_jmlcl('$res[23]','$id_pegawai','$priode1','$priode2') AS x23");
			$stmt23->execute();
			$result23 = $stmt23->fetch(PDO::FETCH_OBJ);
			$rt23=$result23->x23;
		}else{
			$rt23=0;
		}

		if(isset($res['24'])<>""){
			$stmt24 = $this->db->prepare("SELECT fc_jmlcl('$res[24]','$id_pegawai','$priode1','$priode2') AS x24");
			$stmt24->execute();
			$result24 = $stmt24->fetch(PDO::FETCH_OBJ);
			$rt24=$result24->x24;
		}else{
			$rt24=0;
		}

		if(isset($res['25'])<>""){
			$stmt25 = $this->db->prepare("SELECT fc_jmlcl('$res[25]','$id_pegawai','$priode1','$priode2') AS x25");
			$stmt25->execute();
			$result25 = $stmt25->fetch(PDO::FETCH_OBJ);
			$rt25=$result25->x25;
		}else{
			$rt25=0;
		}

		if(isset($res['26'])<>""){
			$stmt26 = $this->db->prepare("SELECT fc_jmlcl('$res[26]','$id_pegawai','$priode1','$priode2') AS x26");
			$stmt26->execute();
			$result26 = $stmt26->fetch(PDO::FETCH_OBJ);
			$rt26=$result26->x26;
		}else{
			$rt26=0;
		}

		if(isset($res['27'])<>""){
			$stmt27 = $this->db->prepare("SELECT fc_jmlcl('$res[27]','$id_pegawai','$priode1','$priode2') AS x27");
			$stmt27->execute();
			$result27 = $stmt27->fetch(PDO::FETCH_OBJ);
			$rt27=$result27->x27;
		}else{
			$rt27=0;
		}

		if(isset($res['28'])<>""){
			$stmt28 = $this->db->prepare("SELECT fc_jmlcl('$res[28]','$id_pegawai','$priode1','$priode2') AS x28");
			$stmt28->execute();
			$result28 = $stmt28->fetch(PDO::FETCH_OBJ);
			$rt28=$result28->x28;
		}else{
			$rt28=0;
		}

		if(isset($res['29'])<>""){
			$stmt29 = $this->db->prepare("SELECT fc_jmlcl('$res[29]','$id_pegawai','$priode1','$priode2') AS x29");
			$stmt29->execute();
			$result29 = $stmt29->fetch(PDO::FETCH_OBJ);
			$rt29=$result29->x29;
		}else{
			$rt29=0;
		}

		if(isset($res['30'])<>""){
			$stmt30 = $this->db->prepare("SELECT fc_jmlcl('$res[30]','$id_pegawai','$priode1','$priode2') AS x30");
			$stmt30->execute();
			$result30 = $stmt30->fetch(PDO::FETCH_OBJ);
			$rt30=$result30->x30;
		}else{
			$rt30=0;
		}

		if(isset($res['31'])<>""){
			$stmt31 = $this->db->prepare("SELECT fc_jmlcl('$res[31]','$id_pegawai','$priode1','$priode2') AS x31");
			$stmt31->execute();
			$result31 = $stmt31->fetch(PDO::FETCH_OBJ);
			$rt31=$result31->x31;
		}else{
			$rt31=0;
		}

		if(isset($res['32'])<>""){
			$stmt32 = $this->db->prepare("SELECT fc_jmlcl('$res[32]','$id_pegawai','$priode1','$priode2') AS x32");
			$stmt32->execute();
			$result32 = $stmt32->fetch(PDO::FETCH_OBJ);
			$rt32=$result32->x32;
		}else{
			$rt32=0;
		}

		if(isset($res['33'])<>""){
			$stmt33 = $this->db->prepare("SELECT fc_jmlcl('$res[33]','$id_pegawai','$priode1','$priode2') AS x33");
			$stmt33->execute();
			$result33 = $stmt33->fetch(PDO::FETCH_OBJ);
			$rt33=$result33->x33;
		}else{
			$rt33=0;
		}

		if(isset($res['34'])<>""){
			$stmt34 = $this->db->prepare("SELECT fc_jmlcl('$res[34]','$id_pegawai','$priode1','$priode2') AS x34");
			$stmt34->execute();
			$result34 = $stmt34->fetch(PDO::FETCH_OBJ);
			$rt34=$result34->x34;
		}else{
			$rt34=0;
		}

		if(isset($res['35'])<>""){
			$stmt35 = $this->db->prepare("SELECT fc_jmlcl('$res[35]','$id_pegawai','$priode1','$priode2') AS x35");
			$stmt35->execute();
			$result35 = $stmt35->fetch(PDO::FETCH_OBJ);
			$rt35=$result35->x35;
		}else{
			$rt35=0;
		}

		if(isset($res['36'])<>""){
			$stmt36 = $this->db->prepare("SELECT fc_jmlcl('$res[36]','$id_pegawai','$priode1','$priode2') AS x36");
			$stmt36->execute();
			$result36 = $stmt36->fetch(PDO::FETCH_OBJ);
			$rt36=$result36->x36;
		}else{
			$rt36=0;
		}

		if(isset($res['36'])<>""){
			$stmt37 = $this->db->prepare("SELECT fc_jmlcl('$res[37]','$id_pegawai','$priode1','$priode2') AS x37");
			$stmt37->execute();
			$result37 = $stmt37->fetch(PDO::FETCH_OBJ);
			$rt37=$result37->x37;
		}else{
			$rt37=0;
		}

		if(isset($res['38'])<>""){
			$stmt38 = $this->db->prepare("SELECT fc_jmlcl('$res[38]','$id_pegawai','$priode1','$priode2') AS x38");
			$stmt38->execute();
			$result38 = $stmt38->fetch(PDO::FETCH_OBJ);
			$rt38=$result38->x38;
		}else{
			$rt38=0;
		}

		if(isset($res['39'])<>""){
			$stmt39 = $this->db->prepare("SELECT fc_jmlcl('$res[39]','$id_pegawai','$priode1','$priode2') AS x39");
			$stmt39->execute();
			$result39 = $stmt39->fetch(PDO::FETCH_OBJ);
			$rt39=$result39->x39;
		}else{
			$rt39=0;
		}

		if(isset($res['40'])<>""){
			$stmt40 = $this->db->prepare("SELECT fc_jmlcl('$res[40]','$id_pegawai','$priode1','$priode2') AS x40");
			$stmt40->execute();
			$result40 = $stmt40->fetch(PDO::FETCH_OBJ);
			$rt40=$result40->x40;
		}else{
			$rt40=0;
		}

		if(isset($res['41'])<>""){
			$stmt41 = $this->db->prepare("SELECT fc_jmlcl('$res[41]','$id_pegawai','$priode1','$priode2') AS x41");
			$stmt41->execute();
			$result41 = $stmt41->fetch(PDO::FETCH_OBJ);
			$rt41=$result41->x41;
		}else{
			$rt41=0;
		}

		if(isset($res['42'])<>""){
			$stmt42 = $this->db->prepare("SELECT fc_jmlcl('$res[42]','$id_pegawai','$priode1','$priode2') AS x42");
			$stmt42->execute();
			$result42 = $stmt42->fetch(PDO::FETCH_OBJ);
			$rt42=$result42->x42;
		}else{
			$rt42=0;
		}

		if(isset($res['43'])<>""){
			$stmt43 = $this->db->prepare("SELECT fc_jmlcl('$res[43]','$id_pegawai','$priode1','$priode2') AS x43");
			$stmt43->execute();
			$result43 = $stmt43->fetch(PDO::FETCH_OBJ);
			$rt43=$result43->x43;
		}else{
			$rt43=0;
		}

		if(isset($res['44'])<>""){
			$stmt44 = $this->db->prepare("SELECT fc_jmlcl('$res[44]','$id_pegawai','$priode1','$priode2') AS x44");
			$stmt44->execute();
			$result44 = $stmt44->fetch(PDO::FETCH_OBJ);
			$rt44=$result44->x44;
		}else{
			$rt44=0;
		}

		if(isset($res['45'])<>""){
			$stmt45 = $this->db->prepare("SELECT fc_jmlcl('$res[45]','$id_pegawai','$priode1','$priode2') AS x45");
			$stmt45->execute();
			$result45 = $stmt45->fetch(PDO::FETCH_OBJ);
			$rt45=$result45->x45;
		}else{
			$rt45=0;
		}

		if(isset($res['46'])<>""){
			$stmt46 = $this->db->prepare("SELECT fc_jmlcl('$res[46]','$id_pegawai','$priode1','$priode2') AS x46");
			$stmt46->execute();
			$result46 = $stmt46->fetch(PDO::FETCH_OBJ);
			$rt46=$result46->x46;
		}else{
			$rt46=0;
		}

		if(isset($res['47'])<>""){
			$stmt47 = $this->db->prepare("SELECT fc_jmlcl('$res[47]','$id_pegawai','$priode1','$priode2') AS x47");
			$stmt47->execute();
			$result47 = $stmt47->fetch(PDO::FETCH_OBJ);
			$rt47=$result47->x47;
		}else{
			$rt47=0;
		}

		if(isset($res['48'])<>""){
			$stmt48 = $this->db->prepare("SELECT fc_jmlcl('$res[48]','$id_pegawai','$priode1','$priode2') AS x48");
			$stmt48->execute();
			$result48 = $stmt48->fetch(PDO::FETCH_OBJ);
			$rt48=$result48->x48;
		}else{
			$rt48=0;
		}

		if(isset($res['49'])<>""){
			$stmt49 = $this->db->prepare("SELECT fc_jmlcl('$res[49]','$id_pegawai','$priode1','$priode2') AS x49");
			$stmt49->execute();
			$result49 = $stmt49->fetch(PDO::FETCH_OBJ);
			$rt49=$result49->x49;
		}else{
			$rt49=0;
		}

		if(isset($res['50'])<>""){
			$stmt50 = $this->db->prepare("SELECT fc_jmlcl('$res[50]','$id_pegawai','$priode1','$priode2') AS x50");
			$stmt50->execute();
			$result50 = $stmt50->fetch(PDO::FETCH_OBJ);
			$rt50=$result50->x50;
		}else{
			$rt50=0;
		}

		if(isset($res['51'])<>""){
			$stmt51 = $this->db->prepare("SELECT fc_jmlcl('$res[51]','$id_pegawai','$priode1','$priode2') AS x51");
			$stmt51->execute();
			$result51 = $stmt51->fetch(PDO::FETCH_OBJ);
			$rt51=$result51->x51;
		}else{
			$rt51=0;
		}

		if(isset($res['52'])<>""){
			$stmt52 = $this->db->prepare("SELECT fc_jmlcl('$res[52]','$id_pegawai','$priode1','$priode2') AS x52");
			$stmt52->execute();
			$result52 = $stmt52->fetch(PDO::FETCH_OBJ);
			$rt52=$result52->x52;
		}else{
			$rt52=0;
		}

		if(isset($res['53'])<>""){
			$stmt53 = $this->db->prepare("SELECT fc_jmlcl('$res[53]','$id_pegawai','$priode1','$priode2') AS x53");
			$stmt53->execute();
			$result53 = $stmt53->fetch(PDO::FETCH_OBJ);
			$rt53=$result53->x53;
		}else{
			$rt53=0;
		}

		if(isset($res['54'])<>""){
			$stmt54 = $this->db->prepare("SELECT fc_jmlcl('$res[54]','$id_pegawai','$priode1','$priode2') AS x54");
			$stmt54->execute();
			$result54 = $stmt54->fetch(PDO::FETCH_OBJ);
			$rt54=$result54->x54;
		}else{
			$rt54=0;
		}		

		if(isset($res['55'])<>""){
			$stmt55 = $this->db->prepare("SELECT fc_jmlcl('$res[55]','$id_pegawai','$priode1','$priode2') AS x55");
			$stmt55->execute();
			$result55 = $stmt55->fetch(PDO::FETCH_OBJ);
			$rt55=$result55->x55;
		}else{
			$rt55=0;
		}

		if(isset($res['56'])<>""){
			$stmt56 = $this->db->prepare("SELECT fc_jmlcl('$res[56]','$id_pegawai','$priode1','$priode2') AS x56");
			$stmt56->execute();
			$result56 = $stmt56->fetch(PDO::FETCH_OBJ);
			$rt56=$result56->x56;
		}else{
			$rt56=0;
		}

		if(isset($res['57'])<>""){
			$stmt57 = $this->db->prepare("SELECT fc_jmlcl('$res[57]','$id_pegawai','$priode1','$priode2') AS x57");
			$stmt57->execute();
			$result57 = $stmt57->fetch(PDO::FETCH_OBJ);
			$rt57=$result57->x57;
		}else{
			$rt57=0;
		}

		if(isset($res['58'])<>""){
			$stmt58 = $this->db->prepare("SELECT fc_jmlcl('$res[58]','$id_pegawai','$priode1','$priode2') AS x58");
			$stmt58->execute();
			$result58 = $stmt58->fetch(PDO::FETCH_OBJ);
			$rt58=$result58->x58;
		}else{
			$rt58=0;
		}

		if(isset($res['59'])<>""){
			$stmt59 = $this->db->prepare("SELECT fc_jmlcl('$res[59]','$id_pegawai','$priode1','$priode2') AS x59");
			$stmt59->execute();
			$result59 = $stmt59->fetch(PDO::FETCH_OBJ);
			$rt59=$result59->x59;
		}else{
			$rt59=0;
		}

		if(isset($res['60'])<>""){
			$stmt60 = $this->db->prepare("SELECT fc_jmlcl('$res[60]','$id_pegawai','$priode1','$priode2') AS x60");
			$stmt60->execute();
			$result60 = $stmt60->fetch(PDO::FETCH_OBJ);
			$rt60=$result60->x60;
		}else{
			$rt60=0;
		}

		if(isset($res['61'])<>""){
			$stmt61 = $this->db->prepare("SELECT fc_jmlcl('$res[61]','$id_pegawai','$priode1','$priode2') AS x61");
			$stmt61->execute();
			$result61 = $stmt61->fetch(PDO::FETCH_OBJ);
			$rt61=$result61->x61;
		}else{
			$rt61=0;
		}

		if(isset($res['62'])<>""){
			$stmt62 = $this->db->prepare("SELECT fc_jmlcl('$res[62]','$id_pegawai','$priode1','$priode2') AS x62");
			$stmt62->execute();
			$result62 = $stmt62->fetch(PDO::FETCH_OBJ);
			$rt62=$result62->x62;
		}else{
			$rt62=0;
		}

		if(isset($res['63'])<>""){
			$stmt63 = $this->db->prepare("SELECT fc_jmlcl('$res[63]','$id_pegawai','$priode1','$priode2') AS x63");
			$stmt63->execute();
			$result63 = $stmt63->fetch(PDO::FETCH_OBJ);
			$rt63=$result63->x63;
		}else{
			$rt63=0;
		}

		if(isset($res['64'])<>""){
			$stmt64 = $this->db->prepare("SELECT fc_jmlcl('$res[64]','$id_pegawai','$priode1','$priode2') AS x64");
			$stmt64->execute();
			$result64 = $stmt64->fetch(PDO::FETCH_OBJ);
			$rt64=$result64->x64;
		}else{
			$rt64=0;
		}

		if(isset($res['65'])<>""){
			$stmt65 = $this->db->prepare("SELECT fc_jmlcl('$res[65]','$id_pegawai','$priode1','$priode2') AS x65");
			$stmt65->execute();
			$result65 = $stmt65->fetch(PDO::FETCH_OBJ);
			$rt65=$result65->x65;
		}else{
			$rt65=0;
		}

		if(isset($res['66'])<>""){
			$stmt66 = $this->db->prepare("SELECT fc_jmlcl('$res[66]','$id_pegawai','$priode1','$priode2') AS x66");
			$stmt66->execute();
			$result66 = $stmt66->fetch(PDO::FETCH_OBJ);
			$rt66=$result66->x66;
		}else{
			$rt66=0;
		}

		if(isset($res['67'])<>""){
			$stmt67 = $this->db->prepare("SELECT fc_jmlcl('$res[67]','$id_pegawai','$priode1','$priode2') AS x67");
			$stmt67->execute();
			$result67 = $stmt67->fetch(PDO::FETCH_OBJ);
			$rt67=$result67->x67;
		}else{
			$rt67=0;
		}

		if(isset($res['68'])<>""){
			$stmt68 = $this->db->prepare("SELECT fc_jmlcl('$res[68]','$id_pegawai','$priode1','$priode2') AS x68");
			$stmt68->execute();
			$result68 = $stmt68->fetch(PDO::FETCH_OBJ);
			$rt68=$result68->x68;
		}else{
			$rt68=0;
		}

		if(isset($res['69'])<>""){
			$stmt69 = $this->db->prepare("SELECT fc_jmlcl('$res[69]','$id_pegawai','$priode1','$priode2') AS x69");
			$stmt69->execute();
			$result69 = $stmt69->fetch(PDO::FETCH_OBJ);
			$rt69=$result69->x69;
		}else{
			$rt69=0;
		}

		if(isset($res['70'])<>""){
			$stmt70 = $this->db->prepare("SELECT fc_jmlcl('$res[70]','$id_pegawai','$priode1','$priode2') AS x70");
			$stmt70->execute();
			$result70 = $stmt70->fetch(PDO::FETCH_OBJ);
			$rt70=$result70->x70;
		}else{
			$rt70=0;
		}

		if(isset($res['71'])<>""){
			$stmt71 = $this->db->prepare("SELECT fc_jmlcl('$res[71]','$id_pegawai','$priode1','$priode2') AS x71");
			$stmt71->execute();
			$result71 = $stmt71->fetch(PDO::FETCH_OBJ);
			$rt71=$result71->x71;
		}else{
			$rt71=0;
		}

		if(isset($res['72'])<>""){
			$stmt72 = $this->db->prepare("SELECT fc_jmlcl('$res[72]','$id_pegawai','$priode1','$priode2') AS x72");
			$stmt72->execute();
			$result72 = $stmt72->fetch(PDO::FETCH_OBJ);
			$rt72=$result72->x72;
		}else{
			$rt72=0;
		}

		if(isset($res['73'])<>""){
			$stmt73 = $this->db->prepare("SELECT fc_jmlcl('$res[73]','$id_pegawai','$priode1','$priode2') AS x73");
			$stmt73->execute();
			$result73 = $stmt73->fetch(PDO::FETCH_OBJ);
			$rt73=$result73->x73;
		}else{
			$rt73=0;
		}

		if(isset($res['74'])<>""){
			$stmt74 = $this->db->prepare("SELECT fc_jmlcl('$res[74]','$id_pegawai','$priode1','$priode2') AS x74");
			$stmt74->execute();
			$result74 = $stmt74->fetch(PDO::FETCH_OBJ);
			$rt74=$result74->x74;
		}else{
			$rt74=0;
		}

		if(isset($res['75'])<>""){
			$stmt75 = $this->db->prepare("SELECT fc_jmlcl('$res[75]','$id_pegawai','$priode1','$priode2') AS x75");
			$stmt75->execute();
			$result75 = $stmt75->fetch(PDO::FETCH_OBJ);
			$rt75=$result75->x75;
		}else{
			$rt75=0;
		}

		if(isset($res['76'])<>""){
			$stmt76 = $this->db->prepare("SELECT fc_jmlcl('$res[76]','$id_pegawai','$priode1','$priode2') AS x76");
			$stmt76->execute();
			$result76 = $stmt76->fetch(PDO::FETCH_OBJ);
			$rt76=$result76->x76;
		}else{
			$rt76=0;
		}

		if(isset($res['77'])<>""){
			$stmt77 = $this->db->prepare("SELECT fc_jmlcl('$res[77]','$id_pegawai','$priode1','$priode2') AS x77");
			$stmt77->execute();
			$result77 = $stmt77->fetch(PDO::FETCH_OBJ);
			$rt77=$result77->x77;
		}else{
			$rt77=0;
		}

		if(isset($res['78'])<>""){
			$stmt78 = $this->db->prepare("SELECT fc_jmlcl('$res[78]','$id_pegawai','$priode1','$priode2') AS x78");
			$stmt78->execute();
			$result78 = $stmt78->fetch(PDO::FETCH_OBJ);
			$rt78=$result78->x78;
		}else{
			$rt78=0;
		}

		if(isset($res['79'])<>""){
			$stmt79 = $this->db->prepare("SELECT fc_jmlcl('$res[79]','$id_pegawai','$priode1','$priode2') AS x79");
			$stmt79->execute();
			$result79 = $stmt79->fetch(PDO::FETCH_OBJ);
			$rt79=$result79->x79;
		}else{
			$rt79=0;
		}

		if(isset($res['80'])<>""){
			$stmt80 = $this->db->prepare("SELECT fc_jmlcl('$res[80]','$id_pegawai','$priode1','$priode2') AS x80");
			$stmt80->execute();
			$result80 = $stmt80->fetch(PDO::FETCH_OBJ);
			$rt80=$result80->x80;
		}else{
			$rt80=0;
		}

		if(isset($res['81'])<>""){
			$stmt81 = $this->db->prepare("SELECT fc_jmlcl('$res[81]','$id_pegawai','$priode1','$priode2') AS x81");
			$stmt81->execute();
			$result81 = $stmt81->fetch(PDO::FETCH_OBJ);
			$rt81=$result81->x81;
		}else{
			$rt81=0;
		}

		if(isset($res['82'])<>""){
			$stmt82 = $this->db->prepare("SELECT fc_jmlcl('$res[82]','$id_pegawai','$priode1','$priode2') AS x82");
			$stmt82->execute();
			$result82 = $stmt82->fetch(PDO::FETCH_OBJ);
			$rt82=$result82->x82;
		}else{
			$rt82=0;
		}

		if(isset($res['83'])<>""){
			$stmt83 = $this->db->prepare("SELECT fc_jmlcl('$res[83]','$id_pegawai','$priode1','$priode2') AS x83");
			$stmt83->execute();
			$result83 = $stmt83->fetch(PDO::FETCH_OBJ);
			$rt83=$result83->x83;
		}else{
			$rt83=0;
		}

		if(isset($res['84'])<>""){
			$stmt84 = $this->db->prepare("SELECT fc_jmlcl('$res[84]','$id_pegawai','$priode1','$priode2') AS x84");
			$stmt84->execute();
			$result84 = $stmt84->fetch(PDO::FETCH_OBJ);
			$rt84=$result84->x84;
		}else{
			$rt84=0;
		}

		if(isset($res['85'])<>""){
			$stmt85 = $this->db->prepare("SELECT fc_jmlcl('$res[85]','$id_pegawai','$priode1','$priode2') AS x85");
			$stmt85->execute();
			$result85 = $stmt85->fetch(PDO::FETCH_OBJ);
			$rt85=$result85->x85;
		}else{
			$rt85=0;
		}

		if(isset($res['86'])<>""){
			$stmt86 = $this->db->prepare("SELECT fc_jmlcl('$res[86]','$id_pegawai','$priode1','$priode2') AS x86");
			$stmt86->execute();
			$result86 = $stmt86->fetch(PDO::FETCH_OBJ);
			$rt86=$result86->x86;
		}else{
			$rt86=0;
		}

		if(isset($res['87'])<>""){
			$stmt87 = $this->db->prepare("SELECT fc_jmlcl('$res[87]','$id_pegawai','$priode1','$priode2') AS x87");
			$stmt87->execute();
			$result87 = $stmt87->fetch(PDO::FETCH_OBJ);
			$rt87=$result87->x87;
		}else{
			$rt87=0;
		}

		if(isset($res['88'])<>""){
			$stmt88 = $this->db->prepare("SELECT fc_jmlcl('$res[88]','$id_pegawai','$priode1','$priode2') AS x88");
			$stmt88->execute();
			$result88 = $stmt88->fetch(PDO::FETCH_OBJ);
			$rt88=$result88->x88;
		}else{
			$rt88=0;
		}

		if(isset($res['89'])<>""){
			$stmt89 = $this->db->prepare("SELECT fc_jmlcl('$res[89]','$id_pegawai','$priode1','$priode2') AS x89");
			$stmt89->execute();
			$result89 = $stmt89->fetch(PDO::FETCH_OBJ);
			$rt89=$result89->x89;
		}else{
			$rt89=0;
		}

		if(isset($res['90'])<>""){
			$stmt90 = $this->db->prepare("SELECT fc_jmlcl('$res[90]','$id_pegawai','$priode1','$priode2') AS x90");
			$stmt90->execute();
			$result90 = $stmt90->fetch(PDO::FETCH_OBJ);
			$rt90=$result90->x90;
		}else{
			$rt90=0;
		}

		if(isset($res['91'])<>""){
			$stmt91 = $this->db->prepare("SELECT fc_jmlcl('$res[91]','$id_pegawai','$priode1','$priode2') AS x91");
			$stmt91->execute();
			$result91 = $stmt91->fetch(PDO::FETCH_OBJ);
			$rt91=$result91->x91;
		}else{
			$rt91=0;
		}

		if(isset($res['92'])<>""){
			$stmt92 = $this->db->prepare("SELECT fc_jmlcl('$res[92]','$id_pegawai','$priode1','$priode2') AS x92");
			$stmt92->execute();
			$result92 = $stmt92->fetch(PDO::FETCH_OBJ);
			$rt92=$result92->x92;
		}else{
			$rt92=0;
		}

		if(isset($res['93'])<>""){
			$stmt93 = $this->db->prepare("SELECT fc_jmlcl('$res[93]','$id_pegawai','$priode1','$priode2') AS x93");
			$stmt93->execute();
			$result93 = $stmt93->fetch(PDO::FETCH_OBJ);
			$rt93=$result93->x93;
		}else{
			$rt93=0;
		}

		if(isset($res['94'])<>""){
			$stmt94 = $this->db->prepare("SELECT fc_jmlcl('$res[94]','$id_pegawai','$priode1','$priode2') AS x94");
			$stmt94->execute();
			$result94 = $stmt94->fetch(PDO::FETCH_OBJ);
			$rt94=$result94->x94;
		}else{
			$rt94=0;
		}

		if(isset($res['95'])<>""){
			$stmt95 = $this->db->prepare("SELECT fc_jmlcl('$res[95]','$id_pegawai','$priode1','$priode2') AS x95");
			$stmt95->execute();
			$result95 = $stmt95->fetch(PDO::FETCH_OBJ);
			$rt95=$result95->x95;
		}else{
			$rt95=0;
		}

		if(isset($res['96'])<>""){
			$stmt96 = $this->db->prepare("SELECT fc_jmlcl('$res[96]','$id_pegawai','$priode1','$priode2') AS x96");
			$stmt96->execute();
			$result96 = $stmt96->fetch(PDO::FETCH_OBJ);
			$rt96=$result96->x96;
		}else{
			$rt96=0;
		}

		if(isset($res['97'])<>""){
			$stmt97 = $this->db->prepare("SELECT fc_jmlcl('$res[97]','$id_pegawai','$priode1','$priode2') AS x97");
			$stmt97->execute();
			$result97 = $stmt97->fetch(PDO::FETCH_OBJ);
			$rt97=$result97->x97;
		}else{
			$rt97=0;
		}

		if(isset($res['98'])<>""){
			$stmt98 = $this->db->prepare("SELECT fc_jmlcl('$res[98]','$id_pegawai','$priode1','$priode2') AS x98");
			$stmt98->execute();
			$result98 = $stmt98->fetch(PDO::FETCH_OBJ);
			$rt98=$result98->x98;
		}else{
			$rt98=0;
		}

		if(isset($res['99'])<>""){
			$stmt99 = $this->db->prepare("SELECT fc_jmlcl('$res[99]','$id_pegawai','$priode1','$priode2') AS x99");
			$stmt99->execute();
			$result99 = $stmt99->fetch(PDO::FETCH_OBJ);
			$rt99=$result99->x99;
		}else{
			$rt99=0;
		}

		if(isset($res['100'])<>""){
			$stmt100 = $this->db->prepare("SELECT fc_jmlcl('$res[100]','$id_pegawai','$priode1','$priode2') AS x100");
			$stmt100->execute();
			$result100 = $stmt100->fetch(PDO::FETCH_OBJ);
			$rt100=$result100->x100;
		}else{
			$rt100=0;
		}

		if(isset($res['101'])<>""){
			$stmt101 = $this->db->prepare("SELECT fc_jmlcl('$res[101]','$id_pegawai','$priode1','$priode2') AS x101");
			$stmt101->execute();
			$result101 = $stmt101->fetch(PDO::FETCH_OBJ);
			$rt101=$result101->x101;
		}else{
			$rt101=0;
		}


		if(isset($res['102'])<>""){
			$stmt102 = $this->db->prepare("SELECT fc_jmlcl('$res[102]','$id_pegawai','$priode1','$priode2') AS x102");
			$stmt102->execute();
			$result102 = $stmt102->fetch(PDO::FETCH_OBJ);
			$rt102=$result102->x102;
		}else{
			$rt102=0;
		}

		if(isset($res['103'])<>""){
			$stmt103 = $this->db->prepare("SELECT fc_jmlcl('$res[103]','$id_pegawai','$priode1','$priode2') AS x103");
			$stmt103->execute();
			$result103 = $stmt103->fetch(PDO::FETCH_OBJ);
			$rt103=$result103->x103;
		}else{
			$rt103=0;
		}

		if(isset($res['104'])<>""){
			$stmt104 = $this->db->prepare("SELECT fc_jmlcl('$res[104]','$id_pegawai','$priode1','$priode2') AS x104");
			$stmt104->execute();
			$result104 = $stmt104->fetch(PDO::FETCH_OBJ);
			$rt104=$result104->x104;
		}else{
			$rt104=0;
		}

		if(isset($res['105'])<>""){
			$stmt105 = $this->db->prepare("SELECT fc_jmlcl('$res[105]','$id_pegawai','$priode1','$priode2') AS x105");
			$stmt105->execute();
			$result105 = $stmt105->fetch(PDO::FETCH_OBJ);
			$rt105=$result105->x105;
		}else{
			$rt105=0;
		}

		if(isset($res['106'])<>""){
			$stmt106 = $this->db->prepare("SELECT fc_jmlcl('$res[106]','$id_pegawai','$priode1','$priode2') AS x106");
			$stmt106->execute();
			$result106 = $stmt106->fetch(PDO::FETCH_OBJ);
			$rt106=$result106->x106;
		}else{
			$rt106=0;
		}

		if(isset($res['107'])<>""){
			$stmt107 = $this->db->prepare("SELECT fc_jmlcl('$res[107]','$id_pegawai','$priode1','$priode2') AS x107");
			$stmt107->execute();
			$result107 = $stmt107->fetch(PDO::FETCH_OBJ);
			$rt107=$result107->x107;
		}else{
			$rt107=0;
		}

		if(isset($res['108'])<>""){
			$stmt108 = $this->db->prepare("SELECT fc_jmlcl('$res[108]','$id_pegawai','$priode1','$priode2') AS x108");
			$stmt108->execute();
			$result108 = $stmt108->fetch(PDO::FETCH_OBJ);
			$rt108=$result108->x108;
		}else{
			$rt108=0;
		}

		if(isset($res['109'])<>""){
			$stmt109 = $this->db->prepare("SELECT fc_jmlcl('$res[109]','$id_pegawai','$priode1','$priode2') AS x109");
			$stmt109->execute();
			$result109 = $stmt109->fetch(PDO::FETCH_OBJ);
			$rt109=$result109->x109;
		}else{
			$rt109=0;
		}

		if(isset($res['110'])<>""){
			$stmt110 = $this->db->prepare("SELECT fc_jmlcl('$res[110]','$id_pegawai','$priode1','$priode2') AS x110");
			$stmt110->execute();
			$result110 = $stmt110->fetch(PDO::FETCH_OBJ);
			$rt110=$result110->x110;
		}else{
			$rt110=0;
		}

		if(isset($res['111'])<>""){
			$stmt111 = $this->db->prepare("SELECT fc_jmlcl('$res[111]','$id_pegawai','$priode1','$priode2') AS x111");
			$stmt111->execute();
			$result111 = $stmt111->fetch(PDO::FETCH_OBJ);
			$rt111=$result111->x111;
		}else{
			$rt111=0;
		}

		if(isset($res['112'])<>""){
			$stmt112 = $this->db->prepare("SELECT fc_jmlcl('$res[112]','$id_pegawai','$priode1','$priode2') AS x112");
			$stmt112->execute();
			$result112 = $stmt112->fetch(PDO::FETCH_OBJ);
			$rt112=$result112->x112;
		}else{
			$rt112=0;
		}

		if(isset($res['113'])<>""){
			$stmt113 = $this->db->prepare("SELECT fc_jmlcl('$res[113]','$id_pegawai','$priode1','$priode2') AS x113");
			$stmt113->execute();
			$result113 = $stmt113->fetch(PDO::FETCH_OBJ);
			$rt113=$result113->x113;
		}else{
			$rt113=0;
		}

		if(isset($res['114'])<>""){
			$stmt114 = $this->db->prepare("SELECT fc_jmlcl('$res[114]','$id_pegawai','$priode1','$priode2') AS x114");
			$stmt114->execute();
			$result114 = $stmt114->fetch(PDO::FETCH_OBJ);
			$rt114=$result114->x114;
		}else{
			$rt114=0;
		}

		if(isset($res['115'])<>""){
			$stmt115 = $this->db->prepare("SELECT fc_jmlcl('$res[115]','$id_pegawai','$priode1','$priode2') AS x115");
			$stmt115->execute();
			$result115 = $stmt115->fetch(PDO::FETCH_OBJ);
			$rt115=$result115->x115;
		}else{
			$rt115=0;
		}

		if(isset($res['116'])<>""){
			$stmt116 = $this->db->prepare("SELECT fc_jmlcl('$res[116]','$id_pegawai','$priode1','$priode2') AS x116");
			$stmt116->execute();
			$result116 = $stmt116->fetch(PDO::FETCH_OBJ);
			$rt116=$result116->x116;
		}else{
			$rt116=0;
		}

		if(isset($res['117'])<>""){
			$stmt117 = $this->db->prepare("SELECT fc_jmlcl('$res[117]','$id_pegawai','$priode1','$priode2') AS x117");
			$stmt117->execute();
			$result117 = $stmt117->fetch(PDO::FETCH_OBJ);
			$rt117=$result117->x117;
		}else{
			$rt117=0;
		}

		if(isset($res['118'])<>""){
			$stmt118 = $this->db->prepare("SELECT fc_jmlcl('$res[118]','$id_pegawai','$priode1','$priode2') AS x118");
			$stmt118->execute();
			$result118 = $stmt118->fetch(PDO::FETCH_OBJ);
			$rt118=$result118->x118;
		}else{
			$rt118=0;
		}

		if(isset($res['119'])<>""){
			$stmt119 = $this->db->prepare("SELECT fc_jmlcl('$res[119]','$id_pegawai','$priode1','$priode2') AS x119");
			$stmt119->execute();
			$result119 = $stmt119->fetch(PDO::FETCH_OBJ);
			$rt119=$result119->x119;
		}else{
			$rt119=0;
		}

		if(isset($res['120'])<>""){
			$stmt120 = $this->db->prepare("SELECT fc_jmlcl('$res[120]','$id_pegawai','$priode1','$priode2') AS x120");
			$stmt120->execute();
			$result120 = $stmt120->fetch(PDO::FETCH_OBJ);
			$rt120=$result120->x120;
		}else{
			$rt120=0;
		}

		if(isset($res['121'])<>""){
			$stmt121 = $this->db->prepare("SELECT fc_jmlcl('$res[121]','$id_pegawai','$priode1','$priode2') AS x121");
			$stmt121->execute();
			$result121 = $stmt121->fetch(PDO::FETCH_OBJ);
			$rt121=$result121->x121;
		}else{
			$rt121=0;
		}

		if(isset($res['122'])<>""){
			$stmt122 = $this->db->prepare("SELECT fc_jmlcl('$res[122]','$id_pegawai','$priode1','$priode2') AS x122");
			$stmt122->execute();
			$result122 = $stmt122->fetch(PDO::FETCH_OBJ);
			$rt122=$result122->x122;
		}else{
			$rt122=0;
		}

		if(isset($res['123'])<>""){
			$stmt123 = $this->db->prepare("SELECT fc_jmlcl('$res[123]','$id_pegawai','$priode1','$priode2') AS x123");
			$stmt123->execute();
			$result123 = $stmt123->fetch(PDO::FETCH_OBJ);
			$rt123=$result123->x123;
		}else{
			$rt123=0;
		}

		if(isset($res['124'])<>""){
			$stmt124 = $this->db->prepare("SELECT fc_jmlcl('$res[124]','$id_pegawai','$priode1','$priode2') AS x124");
			$stmt124->execute();
			$result124 = $stmt124->fetch(PDO::FETCH_OBJ);
			$rt124=$result124->x124;
		}else{
			$rt124=0;
		}

		if(isset($res['125'])<>""){
			$stmt125 = $this->db->prepare("SELECT fc_jmlcl('$res[125]','$id_pegawai','$priode1','$priode2') AS x125");
			$stmt125->execute();
			$result125 = $stmt125->fetch(PDO::FETCH_OBJ);
			$rt125=$result125->x125;
		}else{
			$rt125=0;
		}

		if(isset($res['126'])<>""){
			$stmt126 = $this->db->prepare("SELECT fc_jmlcl('$res[126]','$id_pegawai','$priode1','$priode2') AS x126");
			$stmt126->execute();
			$result126 = $stmt126->fetch(PDO::FETCH_OBJ);
			$rt126=$result126->x126;
		}else{
			$rt126=0;
		}

		if(isset($res['127'])<>""){
			$stmt127 = $this->db->prepare("SELECT fc_jmlcl('$res[127]','$id_pegawai','$priode1','$priode2') AS x127");
			$stmt127->execute();
			$result127 = $stmt127->fetch(PDO::FETCH_OBJ);
			$rt127=$result127->x127;
		}else{
			$rt127=0;
		}

		if(isset($res['128'])<>""){
			$stmt128 = $this->db->prepare("SELECT fc_jmlcl('$res[128]','$id_pegawai','$priode1','$priode2') AS x128");
			$stmt128->execute();
			$result128 = $stmt128->fetch(PDO::FETCH_OBJ);
			$rt128=$result128->x128;
		}else{
			$rt128=0;
		}

		if(isset($res['129'])<>""){
			$stmt129 = $this->db->prepare("SELECT fc_jmlcl('$res[129]','$id_pegawai','$priode1','$priode2') AS x129");
			$stmt129->execute();
			$result129 = $stmt129->fetch(PDO::FETCH_OBJ);
			$rt129=$result129->x129;
		}else{
			$rt129=0;
		}

		if(isset($res['130'])<>""){
			$stmt130 = $this->db->prepare("SELECT fc_jmlcl('$res[130]','$id_pegawai','$priode1','$priode2') AS x130");
			$stmt130->execute();
			$result130 = $stmt130->fetch(PDO::FETCH_OBJ);
			$rt130=$result130->x130;
		}else{
			$rt130=0;
		}

		if(isset($res['131'])<>""){
			$stmt131 = $this->db->prepare("SELECT fc_jmlcl('$res[131]','$id_pegawai','$priode1','$priode2') AS x131");
			$stmt131->execute();
			$result131 = $stmt131->fetch(PDO::FETCH_OBJ);
			$rt131=$result131->x131;
		}else{
			$rt131=0;
		}

		if(isset($res['132'])<>""){
			$stmt132 = $this->db->prepare("SELECT fc_jmlcl('$res[132]','$id_pegawai','$priode1','$priode2') AS x132");
			$stmt132->execute();
			$result132 = $stmt132->fetch(PDO::FETCH_OBJ);
			$rt132=$result132->x132;
		}else{
			$rt132=0;
		}

		if(isset($res['133'])<>""){
			$stmt133 = $this->db->prepare("SELECT fc_jmlcl('$res[133]','$id_pegawai','$priode1','$priode2') AS x133");
			$stmt133->execute();
			$result133 = $stmt133->fetch(PDO::FETCH_OBJ);
			$rt133=$result133->x133;
		}else{
			$rt133=0;
		}

		if(isset($res['134'])<>""){
			$stmt134 = $this->db->prepare("SELECT fc_jmlcl('$res[134]','$id_pegawai','$priode1','$priode2') AS x134");
			$stmt134->execute();
			$result134 = $stmt134->fetch(PDO::FETCH_OBJ);
			$rt134=$result134->x134;
		}else{
			$rt134=0;
		}

		if(isset($res['135'])<>""){
			$stmt135 = $this->db->prepare("SELECT fc_jmlcl('$res[135]','$id_pegawai','$priode1','$priode2') AS x135");
			$stmt135->execute();
			$result135 = $stmt135->fetch(PDO::FETCH_OBJ);
			$rt135=$result135->x135;
		}else{
			$rt135=0;
		}

		if(isset($res['136'])<>""){
			$stmt136 = $this->db->prepare("SELECT fc_jmlcl('$res[136]','$id_pegawai','$priode1','$priode2') AS x136");
			$stmt136->execute();
			$result136 = $stmt136->fetch(PDO::FETCH_OBJ);
			$rt136=$result136->x136;
		}else{
			$rt136=0;
		}

		if(isset($res['137'])<>""){
			$stmt137 = $this->db->prepare("SELECT fc_jmlcl('$res[137]','$id_pegawai','$priode1','$priode2') AS x137");
			$stmt137->execute();
			$result137 = $stmt137->fetch(PDO::FETCH_OBJ);
			$rt137=$result137->x137;
		}else{
			$rt137=0;
		}

		if(isset($res['138'])<>""){
			$stmt138 = $this->db->prepare("SELECT fc_jmlcl('$res[138]','$id_pegawai','$priode1','$priode2') AS x138");
			$stmt138->execute();
			$result138 = $stmt138->fetch(PDO::FETCH_OBJ);
			$rt138=$result138->x138;
		}else{
			$rt138=0;
		}

		if(isset($res['139'])<>""){
			$stmt139 = $this->db->prepare("SELECT fc_jmlcl('$res[139]','$id_pegawai','$priode1','$priode2') AS x139");
			$stmt139->execute();
			$result139 = $stmt139->fetch(PDO::FETCH_OBJ);
			$rt139=$result139->x139;
		}else{
			$rt139=0;
		}

		if(isset($res['140'])<>""){
			$stmt140 = $this->db->prepare("SELECT fc_jmlcl('$res[140]','$id_pegawai','$priode1','$priode2') AS x140");
			$stmt140->execute();
			$result140 = $stmt140->fetch(PDO::FETCH_OBJ);
			$rt140=$result140->x140;
		}else{
			$rt140=0;
		}

		if(isset($res['141'])<>""){
			$stmt141 = $this->db->prepare("SELECT fc_jmlcl('$res[141]','$id_pegawai','$priode1','$priode2') AS x141");
			$stmt141->execute();
			$result141 = $stmt141->fetch(PDO::FETCH_OBJ);
			$rt141=$result141->x141;
		}else{
			$rt141=0;
		}

		if(isset($res['142'])<>""){
			$stmt142 = $this->db->prepare("SELECT fc_jmlcl('$res[142]','$id_pegawai','$priode1','$priode2') AS x142");
			$stmt142->execute();
			$result142 = $stmt142->fetch(PDO::FETCH_OBJ);
			$rt142=$result142->x142;
		}else{
			$rt142=0;
		}

		if(isset($res['143'])<>""){
			$stmt143 = $this->db->prepare("SELECT fc_jmlcl('$res[143]','$id_pegawai','$priode1','$priode2') AS x143");
			$stmt143->execute();
			$result143 = $stmt143->fetch(PDO::FETCH_OBJ);
			$rt143=$result143->x143;
		}else{
			$rt143=0;
		}

		if(isset($res['144'])<>""){
			$stmt144 = $this->db->prepare("SELECT fc_jmlcl('$res[144]','$id_pegawai','$priode1','$priode2') AS x144");
			$stmt144->execute();
			$result144 = $stmt144->fetch(PDO::FETCH_OBJ);
			$rt144=$result144->x144;
		}else{
			$rt144=0;
		}

		if(isset($res['145'])<>""){
			$stmt145 = $this->db->prepare("SELECT fc_jmlcl('$res[145]','$id_pegawai','$priode1','$priode2') AS x145");
			$stmt145->execute();
			$result145 = $stmt145->fetch(PDO::FETCH_OBJ);
			$rt145=$result145->x145;
		}else{
			$rt145=0;
		}

		if(isset($res['146'])<>""){
			$stmt146 = $this->db->prepare("SELECT fc_jmlcl('$res[146]','$id_pegawai','$priode1','$priode2') AS x146");
			$stmt146->execute();
			$result146 = $stmt146->fetch(PDO::FETCH_OBJ);
			$rt146=$result146->x146;
		}else{
			$rt146=0;
		}

		if(isset($res['147'])<>""){
			$stmt147 = $this->db->prepare("SELECT fc_jmlcl('$res[147]','$id_pegawai','$priode1','$priode2') AS x147");
			$stmt147->execute();
			$result147 = $stmt147->fetch(PDO::FETCH_OBJ);
			$rt147=$result147->x147;
		}else{
			$rt147=0;
		}

		if(isset($res['148'])<>""){
			$stmt148 = $this->db->prepare("SELECT fc_jmlcl('$res[148]','$id_pegawai','$priode1','$priode2') AS x148");
			$stmt148->execute();
			$result148 = $stmt148->fetch(PDO::FETCH_OBJ);
			$rt148=$result148->x148;
		}else{
			$rt148=0;
		}

		if(isset($res['149'])<>""){
			$stmt149 = $this->db->prepare("SELECT fc_jmlcl('$res[149]','$id_pegawai','$priode1','$priode2') AS x149");
			$stmt149->execute();
			$result149 = $stmt149->fetch(PDO::FETCH_OBJ);
			$rt149=$result149->x149;
		}else{
			$rt149=0;
		}

		if(isset($res['150'])<>""){
			$stmt150 = $this->db->prepare("SELECT fc_jmlcl('$res[150]','$id_pegawai','$priode1','$priode2') AS x150");
			$stmt150->execute();
			$result150 = $stmt150->fetch(PDO::FETCH_OBJ);
			$rt150=$result150->x150;
		}else{
			$rt150=0;
		}

		if(isset($res['151'])<>""){
			$stmt151 = $this->db->prepare("SELECT fc_jmlcl('$res[151]','$id_pegawai','$priode1','$priode2') AS x151");
			$stmt151->execute();
			$result151 = $stmt151->fetch(PDO::FETCH_OBJ);
			$rt151=$result151->x151;
		}else{
			$rt151=0;
		}

		if(isset($res['152'])<>""){
			$stmt152 = $this->db->prepare("SELECT fc_jmlcl('$res[152]','$id_pegawai','$priode1','$priode2') AS x152");
			$stmt152->execute();
			$result152 = $stmt152->fetch(PDO::FETCH_OBJ);
			$rt152=$result152->x152;
		}else{
			$rt152=0;
		}

		if(isset($res['153'])<>""){
			$stmt153 = $this->db->prepare("SELECT fc_jmlcl('$res[153]','$id_pegawai','$priode1','$priode2') AS x153");
			$stmt153->execute();
			$result153 = $stmt153->fetch(PDO::FETCH_OBJ);
			$rt153=$result153->x153;
		}else{
			$rt153=0;
		}

		if(isset($res['154'])<>""){
			$stmt154 = $this->db->prepare("SELECT fc_jmlcl('$res[154]','$id_pegawai','$priode1','$priode2') AS x154");
			$stmt154->execute();
			$result154 = $stmt154->fetch(PDO::FETCH_OBJ);
			$rt154=$result154->x154;
		}else{
			$rt154=0;
		}

		if(isset($res['155'])<>""){
			$stmt155 = $this->db->prepare("SELECT fc_jmlcl('$res[155]','$id_pegawai','$priode1','$priode2') AS x155");
			$stmt155->execute();
			$result155 = $stmt155->fetch(PDO::FETCH_OBJ);
			$rt155=$result155->x155;
		}else{
			$rt155=0;
		}

		if(isset($res['156'])<>""){
			$stmt156 = $this->db->prepare("SELECT fc_jmlcl('$res[156]','$id_pegawai','$priode1','$priode2') AS x156");
			$stmt156->execute();
			$result156 = $stmt156->fetch(PDO::FETCH_OBJ);
			$rt156=$result156->x156;
		}else{
			$rt156=0;
		}

		if(isset($res['157'])<>""){
			$stmt157 = $this->db->prepare("SELECT fc_jmlcl('$res[157]','$id_pegawai','$priode1','$priode2') AS x157");
			$stmt157->execute();
			$result157 = $stmt157->fetch(PDO::FETCH_OBJ);
			$rt157=$result157->x157;
		}else{
			$rt157=0;
		}

		if(isset($res['158'])<>""){
			$stmt158 = $this->db->prepare("SELECT fc_jmlcl('$res[158]','$id_pegawai','$priode1','$priode2') AS x158");
			$stmt158->execute();
			$result158 = $stmt158->fetch(PDO::FETCH_OBJ);
			$rt158=$result158->x158;
		}else{
			$rt158=0;
		}

		if(isset($res['159'])<>""){
			$stmt159 = $this->db->prepare("SELECT fc_jmlcl('$res[159]','$id_pegawai','$priode1','$priode2') AS x159");
			$stmt159->execute();
			$result159 = $stmt159->fetch(PDO::FETCH_OBJ);
			$rt159=$result159->x159;
		}else{
			$rt159=0;
		}

		if(isset($res['160'])<>""){
			$stmt160 = $this->db->prepare("SELECT fc_jmlcl('$res[160]','$id_pegawai','$priode1','$priode2') AS x160");
			$stmt160->execute();
			$result160 = $stmt160->fetch(PDO::FETCH_OBJ);
			$rt160=$result160->x160;
		}else{
			$rt160=0;
		}

		if(isset($res['161'])<>""){
			$stmt161 = $this->db->prepare("SELECT fc_jmlcl('$res[161]','$id_pegawai','$priode1','$priode2') AS x161");
			$stmt161->execute();
			$result161 = $stmt161->fetch(PDO::FETCH_OBJ);
			$rt161=$result161->x161;
		}else{
			$rt161=0;
		}

		if(isset($res['162'])<>""){
			$stmt162 = $this->db->prepare("SELECT fc_jmlcl('$res[162]','$id_pegawai','$priode1','$priode2') AS x162");
			$stmt162->execute();
			$result162 = $stmt162->fetch(PDO::FETCH_OBJ);
			$rt162=$result162->x162;
		}else{
			$rt162=0;
		}

		if(isset($res['163'])<>""){
			$stmt163 = $this->db->prepare("SELECT fc_jmlcl('$res[163]','$id_pegawai','$priode1','$priode2') AS x163");
			$stmt163->execute();
			$result163 = $stmt163->fetch(PDO::FETCH_OBJ);
			$rt163=$result163->x163;
		}else{
			$rt163=0;
		}

		if(isset($res['164'])<>""){
			$stmt164 = $this->db->prepare("SELECT fc_jmlcl('$res[164]','$id_pegawai','$priode1','$priode2') AS x164");
			$stmt164->execute();
			$result164 = $stmt164->fetch(PDO::FETCH_OBJ);
			$rt164=$result164->x164;
		}else{
			$rt164=0;
		}

		if(isset($res['165'])<>""){
			$stmt165 = $this->db->prepare("SELECT fc_jmlcl('$res[165]','$id_pegawai','$priode1','$priode2') AS x165");
			$stmt165->execute();
			$result165 = $stmt165->fetch(PDO::FETCH_OBJ);
			$rt165=$result165->x165;
		}else{
			$rt165=0;
		}

		if(isset($res['166'])<>""){
			$stmt166 = $this->db->prepare("SELECT fc_jmlcl('$res[166]','$id_pegawai','$priode1','$priode2') AS x166");
			$stmt166->execute();
			$result166 = $stmt166->fetch(PDO::FETCH_OBJ);
			$rt166=$result166->x166;
		}else{
			$rt166=0;
		}

		if(isset($res['167'])<>""){
			$stmt167 = $this->db->prepare("SELECT fc_jmlcl('$res[167]','$id_pegawai','$priode1','$priode2') AS x167");
			$stmt167->execute();
			$result167 = $stmt167->fetch(PDO::FETCH_OBJ);
			$rt167=$result167->x167;
		}else{
			$rt167=0;
		}

		if(isset($res['168'])<>""){
			$stmt168 = $this->db->prepare("SELECT fc_jmlcl('$res[168]','$id_pegawai','$priode1','$priode2') AS x168");
			$stmt168->execute();
			$result168 = $stmt168->fetch(PDO::FETCH_OBJ);
			$rt168=$result168->x168;
		}else{
			$rt168=0;
		}

		if(isset($res['169'])<>""){
			$stmt169 = $this->db->prepare("SELECT fc_jmlcl('$res[169]','$id_pegawai','$priode1','$priode2') AS x169");
			$stmt169->execute();
			$result169 = $stmt169->fetch(PDO::FETCH_OBJ);
			$rt169=$result169->x169;
		}else{
			$rt169=0;
		}

		if(isset($res['170'])<>""){
			$stmt170 = $this->db->prepare("SELECT fc_jmlcl('$res[170]','$id_pegawai','$priode1','$priode2') AS x170");
			$stmt170->execute();
			$result170 = $stmt170->fetch(PDO::FETCH_OBJ);
			$rt170=$result170->x170;
		}else{
			$rt170=0;
		}

		if(isset($res['171'])<>""){
			$stmt171 = $this->db->prepare("SELECT fc_jmlcl('$res[171]','$id_pegawai','$priode1','$priode2') AS x171");
			$stmt171->execute();
			$result171 = $stmt171->fetch(PDO::FETCH_OBJ);
			$rt171=$result171->x171;
		}else{
			$rt171=0;
		}

		if(isset($res['172'])<>""){
			$stmt172 = $this->db->prepare("SELECT fc_jmlcl('$res[172]','$id_pegawai','$priode1','$priode2') AS x172");
			$stmt172->execute();
			$result172 = $stmt172->fetch(PDO::FETCH_OBJ);
			$rt172=$result172->x172;
		}else{
			$rt172=0;
		}

		if(isset($res['173'])<>""){
			$stmt173 = $this->db->prepare("SELECT fc_jmlcl('$res[173]','$id_pegawai','$priode1','$priode2') AS x173");
			$stmt173->execute();
			$result173 = $stmt173->fetch(PDO::FETCH_OBJ);
			$rt173=$result173->x173;
		}else{
			$rt173=0;
		}

		if(isset($res['174'])<>""){
			$stmt174 = $this->db->prepare("SELECT fc_jmlcl('$res[174]','$id_pegawai','$priode1','$priode2') AS x174");
			$stmt174->execute();
			$result174 = $stmt174->fetch(PDO::FETCH_OBJ);
			$rt174=$result174->x174;
		}else{
			$rt174=0;
		}	

		if(isset($res['175'])<>""){
			$stmt175 = $this->db->prepare("SELECT fc_jmlcl('$res[175]','$id_pegawai','$priode1','$priode2') AS x175");
			$stmt175->execute();
			$result175 = $stmt175->fetch(PDO::FETCH_OBJ);
			$rt175=$result175->x175;
		}else{
			$rt175=0;
		}

		if(isset($res['176'])<>""){
			$stmt176 = $this->db->prepare("SELECT fc_jmlcl('$res[176]','$id_pegawai','$priode1','$priode2') AS x176");
			$stmt176->execute();
			$result176 = $stmt176->fetch(PDO::FETCH_OBJ);
			$rt176=$result176->x176;
		}else{
			$rt176=0;
		}

		if(isset($res['177'])<>""){
			$stmt177 = $this->db->prepare("SELECT fc_jmlcl('$res[177]','$id_pegawai','$priode1','$priode2') AS x177");
			$stmt177->execute();
			$result177 = $stmt177->fetch(PDO::FETCH_OBJ);
			$rt177=$result177->x177;
		}else{
			$rt177=0;
		}

		if(isset($res['178'])<>""){
			$stmt178 = $this->db->prepare("SELECT fc_jmlcl('$res[178]','$id_pegawai','$priode1','$priode2') AS x178");
			$stmt178->execute();
			$result178 = $stmt178->fetch(PDO::FETCH_OBJ);
			$rt178=$result178->x178;
		}else{
			$rt178=0;
		}

		if(isset($res['179'])<>""){
			$stmt179 = $this->db->prepare("SELECT fc_jmlcl('$res[179]','$id_pegawai','$priode1','$priode2') AS x179");
			$stmt179->execute();
			$result179 = $stmt179->fetch(PDO::FETCH_OBJ);
			$rt179=$result179->x179;
		}else{
			$rt179=0;
		}

		if(isset($res['180'])<>""){
			$stmt180 = $this->db->prepare("SELECT fc_jmlcl('$res[180]','$id_pegawai','$priode1','$priode2') AS x180");
			$stmt180->execute();
			$result180 = $stmt180->fetch(PDO::FETCH_OBJ);
			$rt180=$result180->x180;
		}else{
			$rt180=0;
		}

		if(isset($res['181'])<>""){
			$stmt181 = $this->db->prepare("SELECT fc_jmlcl('$res[181]','$id_pegawai','$priode1','$priode2') AS x181");
			$stmt181->execute();
			$result181 = $stmt181->fetch(PDO::FETCH_OBJ);
			$rt181=$result181->x181;
		}else{
			$rt181=0;
		}

		if(isset($res['182'])<>""){
			$stmt182 = $this->db->prepare("SELECT fc_jmlcl('$res[182]','$id_pegawai','$priode1','$priode2') AS x182");
			$stmt182->execute();
			$result182 = $stmt182->fetch(PDO::FETCH_OBJ);
			$rt182=$result182->x182;
		}else{
			$rt182=0;
		}

		if(isset($res['183'])<>""){
			$stmt183 = $this->db->prepare("SELECT fc_jmlcl('$res[183]','$id_pegawai','$priode1','$priode2') AS x183");
			$stmt183->execute();
			$result183 = $stmt183->fetch(PDO::FETCH_OBJ);
			$rt183=$result183->x183;
		}else{
			$rt183=0;
		}

		if(isset($res['184'])<>""){
			$stmt184 = $this->db->prepare("SELECT fc_jmlcl('$res[184]','$id_pegawai','$priode1','$priode2') AS x184");
			$stmt184->execute();
			$result184 = $stmt184->fetch(PDO::FETCH_OBJ);
			$rt184=$result184->x184;
		}else{
			$rt184=0;
		}

		if(isset($res['185'])<>""){
			$stmt185 = $this->db->prepare("SELECT fc_jmlcl('$res[185]','$id_pegawai','$priode1','$priode2') AS x185");
			$stmt185->execute();
			$result185 = $stmt185->fetch(PDO::FETCH_OBJ);
			$rt185=$result185->x185;
		}else{
			$rt185=0;
		}

		if(isset($res['186'])<>""){
			$stmt186 = $this->db->prepare("SELECT fc_jmlcl('$res[186]','$id_pegawai','$priode1','$priode2') AS x186");
			$stmt186->execute();
			$result186 = $stmt186->fetch(PDO::FETCH_OBJ);
			$rt186=$result186->x186;
		}else{
			$rt186=0;
		}

		if(isset($res['187'])<>""){
			$stmt187 = $this->db->prepare("SELECT fc_jmlcl('$res[187]','$id_pegawai','$priode1','$priode2') AS x187");
			$stmt187->execute();
			$result187 = $stmt187->fetch(PDO::FETCH_OBJ);
			$rt187=$result187->x187;
		}else{
			$rt187=0;
		}

		if(isset($res['188'])<>""){
			$stmt188 = $this->db->prepare("SELECT fc_jmlcl('$res[188]','$id_pegawai','$priode1','$priode2') AS x188");
			$stmt188->execute();
			$result188 = $stmt188->fetch(PDO::FETCH_OBJ);
			$rt188=$result188->x188;
		}else{
			$rt188=0;
		}

		if(isset($res['189'])<>""){
			$stmt189 = $this->db->prepare("SELECT fc_jmlcl('$res[189]','$id_pegawai','$priode1','$priode2') AS x189");
			$stmt189->execute();
			$result189 = $stmt189->fetch(PDO::FETCH_OBJ);
			$rt189=$result189->x189;
		}else{
			$rt189=0;
		}

		if(isset($res['190'])<>""){
			$stmt190 = $this->db->prepare("SELECT fc_jmlcl('$res[190]','$id_pegawai','$priode1','$priode2') AS x190");
			$stmt190->execute();
			$result190 = $stmt190->fetch(PDO::FETCH_OBJ);
			$rt190=$result190->x190;
		}else{
			$rt190=0;
		}

		if(isset($res['191'])<>""){
			$stmt191 = $this->db->prepare("SELECT fc_jmlcl('$res[191]','$id_pegawai','$priode1','$priode2') AS x191");
			$stmt191->execute();
			$result191 = $stmt191->fetch(PDO::FETCH_OBJ);
			$rt191=$result191->x191;
		}else{
			$rt191=0;
		}

		if(isset($res['192'])<>""){
			$stmt192 = $this->db->prepare("SELECT fc_jmlcl('$res[192]','$id_pegawai','$priode1','$priode2') AS x192");
			$stmt192->execute();
			$result192 = $stmt192->fetch(PDO::FETCH_OBJ);
			$rt192=$result192->x192;
		}else{
			$rt192=0;
		}

		if(isset($res['193'])<>""){
			$stmt193 = $this->db->prepare("SELECT fc_jmlcl('$res[193]','$id_pegawai','$priode1','$priode2') AS x193");
			$stmt193->execute();
			$result193 = $stmt193->fetch(PDO::FETCH_OBJ);
			$rt193=$result193->x193;
		}else{
			$rt193=0;
		}

		if(isset($res['194'])<>""){
			$stmt194 = $this->db->prepare("SELECT fc_jmlcl('$res[194]','$id_pegawai','$priode1','$priode2') AS x194");
			$stmt194->execute();
			$result194 = $stmt194->fetch(PDO::FETCH_OBJ);
			$rt194=$result194->x194;
		}else{
			$rt194=0;
		}

		if(isset($res['195'])<>""){
			$stmt195 = $this->db->prepare("SELECT fc_jmlcl('$res[195]','$id_pegawai','$priode1','$priode2') AS x195");
			$stmt195->execute();
			$result195 = $stmt195->fetch(PDO::FETCH_OBJ);
			$rt195=$result195->x195;
		}else{
			$rt195=0;
		}

		if(isset($res['196'])<>""){
			$stmt196 = $this->db->prepare("SELECT fc_jmlcl('$res[196]','$id_pegawai','$priode1','$priode2') AS x196");
			$stmt196->execute();
			$result196 = $stmt196->fetch(PDO::FETCH_OBJ);
			$rt196=$result196->x196;
		}else{
			$rt196=0;
		}

		if(isset($res['197'])<>""){
			$stmt197 = $this->db->prepare("SELECT fc_jmlcl('$res[197]','$id_pegawai','$priode1','$priode2') AS x197");
			$stmt197->execute();
			$result197 = $stmt197->fetch(PDO::FETCH_OBJ);
			$rt197=$result197->x197;
		}else{
			$rt197=0;
		}

		if(isset($res['198'])<>""){
			$stmt198 = $this->db->prepare("SELECT fc_jmlcl('$res[198]','$id_pegawai','$priode1','$priode2') AS x198");
			$stmt198->execute();
			$result198 = $stmt198->fetch(PDO::FETCH_OBJ);
			$rt198=$result198->x198;
		}else{
			$rt198=0;
		}

		if(isset($res['199'])<>""){
			$stmt199 = $this->db->prepare("SELECT fc_jmlcl('$res[199]','$id_pegawai','$priode1','$priode2') AS x199");
			$stmt199->execute();
			$result199 = $stmt199->fetch(PDO::FETCH_OBJ);
			$rt199=$result199->x199;
		}else{
			$rt199=0;
		}

		if(isset($res['200'])<>""){
			$stmt200 = $this->db->prepare("SELECT fc_jmlcl('$res[200]','$id_pegawai','$priode1','$priode2') AS x200");
			$stmt200->execute();
			$result200 = $stmt200->fetch(PDO::FETCH_OBJ);
			$rt200=$result200->x200;
		}else{
			$rt200=0;
		}

		if(isset($res['201'])<>""){
			$stmt201 = $this->db->prepare("SELECT fc_jmlcl('$res[201]','$id_pegawai','$priode1','$priode2') AS x201");
			$stmt201->execute();
			$result201 = $stmt201->fetch(PDO::FETCH_OBJ);
			$rt201=$result201->x201;
		}else{
			$rt201=0;
		}

		if(isset($res['202'])<>""){
			$stmt202 = $this->db->prepare("SELECT fc_jmlcl('$res[202]','$id_pegawai','$priode1','$priode2') AS x202");
			$stmt202->execute();
			$result202 = $stmt202->fetch(PDO::FETCH_OBJ);
			$rt202=$result202->x202;
		}else{
			$rt202=0;
		}

		if(isset($res['203'])<>""){
			$stmt203 = $this->db->prepare("SELECT fc_jmlcl('$res[203]','$id_pegawai','$priode1','$priode2') AS x203");
			$stmt203->execute();
			$result203 = $stmt203->fetch(PDO::FETCH_OBJ);
			$rt203=$result203->x203;
		}else{
			$rt203=0;
		}

		if(isset($res['204'])<>""){
			$stmt204 = $this->db->prepare("SELECT fc_jmlcl('$res[204]','$id_pegawai','$priode1','$priode2') AS x204");
			$stmt204->execute();
			$result204 = $stmt204->fetch(PDO::FETCH_OBJ);
			$rt204=$result204->x204;
		}else{
			$rt204=0;
		}

		if(isset($res['205'])<>""){
			$stmt205 = $this->db->prepare("SELECT fc_jmlcl('$res[205]','$id_pegawai','$priode1','$priode2') AS x205");
			$stmt205->execute();
			$result205 = $stmt205->fetch(PDO::FETCH_OBJ);
			$rt205=$result205->x205;
		}else{
			$rt205=0;
		}

		if(isset($res['206'])<>""){
			$stmt206 = $this->db->prepare("SELECT fc_jmlcl('$res[206]','$id_pegawai','$priode1','$priode2') AS x206");
			$stmt206->execute();
			$result206 = $stmt206->fetch(PDO::FETCH_OBJ);
			$rt206=$result206->x206;
		}else{
			$rt206=0;
		}

		if(isset($res['208'])<>""){
			$stmt207 = $this->db->prepare("SELECT fc_jmlcl('$res[207]','$id_pegawai','$priode1','$priode2') AS x207");
			$stmt207->execute();
			$result207 = $stmt207->fetch(PDO::FETCH_OBJ);
			$rt207=$result207->x207;
		}else{
			$rt207=0;
		}

		if(isset($res['208'])<>""){
			$stmt208 = $this->db->prepare("SELECT fc_jmlcl('$res[208]','$id_pegawai','$priode1','$priode2') AS x208");
			$stmt208->execute();
			$result208 = $stmt208->fetch(PDO::FETCH_OBJ);
			$rt208=$result208->x208;
		}else{
			$rt208=0;
		}

		if(isset($res['209'])<>""){
			$stmt209 = $this->db->prepare("SELECT fc_jmlcl('$res[209]','$id_pegawai','$priode1','$priode2') AS x209");
			$stmt209->execute();
			$result209 = $stmt209->fetch(PDO::FETCH_OBJ);
			$rt209=$result209->x209;
		}else{
			$rt209=0;
		}

		if(isset($res['210'])<>""){
			$stmt210 = $this->db->prepare("SELECT fc_jmlcl('$res[210]','$id_pegawai','$priode1','$priode2') AS x210");
			$stmt210->execute();
			$result210 = $stmt210->fetch(PDO::FETCH_OBJ);
			$rt210=$result210->x210;
		}else{
			$rt210=0;
		}

		if(isset($res['211'])<>""){
			$stmt211 = $this->db->prepare("SELECT fc_jmlcl('$res[211]','$id_pegawai','$priode1','$priode2') AS x211");
			$stmt211->execute();
			$result211 = $stmt211->fetch(PDO::FETCH_OBJ);
			$rt211=$result211->x211;
		}else{
			$rt211=0;
		}

		if(isset($res['212'])<>""){
			$stmt212 = $this->db->prepare("SELECT fc_jmlcl('$res[212]','$id_pegawai','$priode1','$priode2') AS x212");
			$stmt212->execute();
			$result212 = $stmt212->fetch(PDO::FETCH_OBJ);
			$rt212=$result212->x212;
		}else{
			$rt212=0;
		}

		if(isset($res['213'])<>""){
			$stmt213 = $this->db->prepare("SELECT fc_jmlcl('$res[213]','$id_pegawai','$priode1','$priode2') AS x213");
			$stmt213->execute();
			$result213 = $stmt213->fetch(PDO::FETCH_OBJ);
			$rt213=$result213->x213;
		}else{
			$rt213=0;
		}

		if(isset($res['214'])<>""){
			$stmt214 = $this->db->prepare("SELECT fc_jmlcl('$res[214]','$id_pegawai','$priode1','$priode2') AS x214");
			$stmt214->execute();
			$result214 = $stmt214->fetch(PDO::FETCH_OBJ);
			$rt214=$result214->x214;
		}else{
			$rt214=0;
		}

		if(isset($res['215'])<>""){
			$stmt215 = $this->db->prepare("SELECT fc_jmlcl('$res[215]','$id_pegawai','$priode1','$priode2') AS x215");
			$stmt215->execute();
			$result215 = $stmt215->fetch(PDO::FETCH_OBJ);
			$rt215=$result215->x215;
		}else{
			$rt215=0;
		}

		if(isset($res['216'])<>""){
			$stmt216 = $this->db->prepare("SELECT fc_jmlcl('$res[216]','$id_pegawai','$priode1','$priode2') AS x216");
			$stmt216->execute();
			$result216 = $stmt216->fetch(PDO::FETCH_OBJ);
			$rt216=$result216->x216;
		}else{
			$rt216=0;
		}

		if(isset($res['217'])<>""){
			$stmt217 = $this->db->prepare("SELECT fc_jmlcl('$res[217]','$id_pegawai','$priode1','$priode2') AS x217");
			$stmt217->execute();
			$result217 = $stmt217->fetch(PDO::FETCH_OBJ);
			$rt217=$result217->x217;
		}else{
			$rt217=0;
		}

		if(isset($res['218'])<>""){
			$stmt218 = $this->db->prepare("SELECT fc_jmlcl('$res[218]','$id_pegawai','$priode1','$priode2') AS x218");
			$stmt218->execute();
			$result218 = $stmt218->fetch(PDO::FETCH_OBJ);
			$rt218=$result218->x218;
		}else{
			$rt218=0;
		}

		if(isset($res['219'])<>""){
			$stmt219 = $this->db->prepare("SELECT fc_jmlcl('$res[219]','$id_pegawai','$priode1','$priode2') AS x219");
			$stmt219->execute();
			$result219 = $stmt219->fetch(PDO::FETCH_OBJ);
			$rt219=$result219->x219;
		}else{
			$rt219=0;
		}

		if(isset($res['220'])<>""){
			$stmt220 = $this->db->prepare("SELECT fc_jmlcl('$res[220]','$id_pegawai','$priode1','$priode2') AS x220");
			$stmt220->execute();
			$result220 = $stmt220->fetch(PDO::FETCH_OBJ);
			$rt220=$result220->x220;
		}else{
			$rt220=0;
		}

		if(isset($res['221'])<>""){
			$stmt221 = $this->db->prepare("SELECT fc_jmlcl('$res[221]','$id_pegawai','$priode1','$priode2') AS x221");
			$stmt221->execute();
			$result221 = $stmt221->fetch(PDO::FETCH_OBJ);
			$rt221=$result221->x221;
		}else{
			$rt221=0;
		}

		if(isset($res['222'])<>""){
			$stmt222 = $this->db->prepare("SELECT fc_jmlcl('$res[222]','$id_pegawai','$priode1','$priode2') AS x222");
			$stmt222->execute();
			$result222 = $stmt222->fetch(PDO::FETCH_OBJ);
			$rt222=$result222->x222;
		}else{
			$rt222=0;
		}

		if(isset($res['223'])<>""){
			$stmt223 = $this->db->prepare("SELECT fc_jmlcl('$res[223]','$id_pegawai','$priode1','$priode2') AS x223");
			$stmt223->execute();
			$result223 = $stmt223->fetch(PDO::FETCH_OBJ);
			$rt223=$result223->x223;
		}else{
			$rt223=0;
		}

		if(isset($res['224'])<>""){
			$stmt224 = $this->db->prepare("SELECT fc_jmlcl('$res[224]','$id_pegawai','$priode1','$priode2') AS x224");
			$stmt224->execute();
			$result224 = $stmt224->fetch(PDO::FETCH_OBJ);
			$rt224=$result224->x224;
		}else{
			$rt224=0;
		}

		if(isset($res['225'])<>""){
			$stmt225 = $this->db->prepare("SELECT fc_jmlcl('$res[225]','$id_pegawai','$priode1','$priode2') AS x225");
			$stmt225->execute();
			$result225 = $stmt225->fetch(PDO::FETCH_OBJ);
			$rt225=$result225->x225;
		}else{
			$rt225=0;
		}

		if(isset($res['226'])<>""){
			$stmt226 = $this->db->prepare("SELECT fc_jmlcl('$res[226]','$id_pegawai','$priode1','$priode2') AS x226");
			$stmt226->execute();
			$result226 = $stmt226->fetch(PDO::FETCH_OBJ);
			$rt226=$result226->x226;
		}else{
			$rt226=0;
		}

		if(isset($res['227'])<>""){
		$stmt227 = $this->db->prepare("SELECT fc_jmlcl('$res[227]','$id_pegawai','$priode1','$priode2') AS x227");
		$stmt227->execute();
		$result227 = $stmt227->fetch(PDO::FETCH_OBJ);
		$rt227=$result227->x227;
		}else{
			$rt227=0;
		}

		if(isset($res['228'])<>""){
			$stmt228 = $this->db->prepare("SELECT fc_jmlcl('$res[228]','$id_pegawai','$priode1','$priode2') AS x228");
			$stmt228->execute();
			$result228 = $stmt228->fetch(PDO::FETCH_OBJ);
			$rt228=$result228->x228;
		}else{
			$rt228=0;
		}

		if(isset($res['229'])<>""){
			$stmt229 = $this->db->prepare("SELECT fc_jmlcl('$res[229]','$id_pegawai','$priode1','$priode2') AS x229");
			$stmt229->execute();
			$result229 = $stmt229->fetch(PDO::FETCH_OBJ);
			$rt229=$result229->x229;
		}else{
			$rt229=0;
		}

		if(isset($res['230'])<>""){
			$stmt230 = $this->db->prepare("SELECT fc_jmlcl('$res[230]','$id_pegawai','$priode1','$priode2') AS x230");
			$stmt230->execute();
			$result230 = $stmt230->fetch(PDO::FETCH_OBJ);
			$rt230=$result230->x230;
		}else{
			$rt230=0;
		}

		if(isset($res['231'])<>""){
			$stmt231 = $this->db->prepare("SELECT fc_jmlcl('$res[231]','$id_pegawai','$priode1','$priode2') AS x231");
			$stmt231->execute();
			$result231 = $stmt231->fetch(PDO::FETCH_OBJ);
			$rt231=$result231->x231;
		}else{
			$rt231=0;
		}

		if(isset($res['232'])<>""){
			$stmt232 = $this->db->prepare("SELECT fc_jmlcl('$res[232]','$id_pegawai','$priode1','$priode2') AS x232");
			$stmt232->execute();
			$result232 = $stmt232->fetch(PDO::FETCH_OBJ);
			$rt232=$result232->x232;
		}else{
			$rt232=0;
		}

		if(isset($res['233'])<>""){
			$stmt233 = $this->db->prepare("SELECT fc_jmlcl('$res[233]','$id_pegawai','$priode1','$priode2') AS x233");
			$stmt233->execute();
			$result233 = $stmt233->fetch(PDO::FETCH_OBJ);
			$rt233=$result233->x233;
		}else{
			$rt233=0;
		}

		if(isset($res['234'])<>""){
			$stmt234 = $this->db->prepare("SELECT fc_jmlcl('$res[234]','$id_pegawai','$priode1','$priode2') AS x234");
			$stmt234->execute();
			$result234 = $stmt234->fetch(PDO::FETCH_OBJ);
			$rt234=$result234->x234;
		}else{
			$rt234=0;
		}

		$tot = 	$rt + $rt1 + $rt2 + $rt3 + $rt4 + $rt5 + $rt6 + $rt7 + $rt8 + $rt9 + $rt10 + $rt11 + $rt12 + $rt13 + $rt14 + $rt15 + $rt16 + $rt17 + $rt18 + $rt19 + $rt20 + $rt21 + $rt22 + $rt23 + $rt24 + $rt25 + $rt26 + $rt27 + $rt28 + $rt29 + $rt30 + $rt31 + $rt32 + $rt33 + $rt34 + $rt35 + $rt36 + $rt37 + $rt38 + $rt39 + $rt40 + $rt41 + $rt42 + $rt43 + $rt44 + $rt45 + $rt46 + $rt47 + $rt48 + $rt49 + $rt50 + $rt51 + $rt52 + $rt53 + $rt54 + $rt55 + $rt56 + $rt57 + $rt58 + $rt59 + $rt60 + $rt61 + $rt62 + $rt63 + $rt64 + $rt65 + $rt66 + $rt67 + $rt68 + $rt69 + $rt70 + $rt71 + $rt72 + $rt73 + $rt74 + $rt75 + $rt76 + $rt77 + $rt78 + $rt79 + $rt80 + $rt81 + $rt82 + $rt83 + $rt84 + $rt85 + $rt86 + $rt87 + $rt88 + $rt89 + $rt90 + $rt91 + $rt92 + $rt93 + $rt94 + $rt95 + $rt96 + $rt97 + $rt98 + $rt99 + $rt100 + $rt101 + $rt102 + $rt103 + $rt104 + $rt105 + $rt106 + $rt107 + $rt108 + $rt109 + $rt110 + $rt111 + $rt112 + $rt113 + $rt114 + $rt115 + $rt116 + $rt117 + $rt118 + $rt119 + $rt120 + $rt121 + $rt122 + $rt123 + $rt124 + $rt125 + $rt126 + $rt127 + $rt128 + $rt129 + $rt130 + $rt131 + $rt132 + $rt133 + $rt134 + $rt135 + $rt136 + $rt137 + $rt138 + $rt139 + $rt140 + $rt141 + $rt142 + $rt143 + $rt144 + $rt145 + $rt146 + $rt147 + $rt148 + $rt149 + $rt150 + $rt151 + $rt152 + $rt153 + $rt154 + $rt155 + $rt156 + $rt157 + $rt158 + $rt159 + $rt160 + $rt161 + $rt162 + $rt163 + $rt164 + $rt165 + $rt166 + $rt167 + $rt168 + $rt169 + $rt170 +
				$rt171 + $rt172 + $rt173 + $rt174 + $rt175 + $rt176 + $rt177 + $rt178 + $rt179 + $rt180 + $rt181 + $rt182 + $rt183 + $rt184 + $rt185 + $rt186 + $rt187 + $rt188 + $rt189 + $rt190 + $rt191 + $rt192 + $rt193 + $rt194 + $rt195 + $rt196 + $rt197 + $rt198 + $rt199 + $rt200 + $rt201 + $rt202 + $rt203 + $rt204 + $rt205 + $rt206 + $rt207 + $rt208 + $rt209 + $rt210 + $rt211 + $rt212 + $rt213 + $rt214 + $rt215 + $rt216 + $rt217 + $rt218 + $rt219 + $rt220 + $rt221 + $rt222 + $rt223 + $rt224 + $rt225 + $rt226 + $rt227 + $rt228 + $rt229 + $rt230 + $rt231 + $rt232 + $rt233 + $rt234 ;   
		return $tot;		
		

	}

	public function kat_jab(){
		$query = "SELECT * FROM kat_jab";
		$query = $this->db->prepare($query);
		$query->execute();
		while($row=$query->fetch(PDO::FETCH_ASSOC)){
			echo "<option value='$row[id_kat_jab]'>$row[kat_jab]</option>";
		}
		
	}

	public function getIdPegawai($id)
	{
		$query = $this->db->prepare("SELECT * FROM v_pegawai_jabatan WHERE id_pegawai=:id_pegawai");
		$query->execute(array(":id_pegawai"=>$id));
		$editRow=$query->fetch(PDO::FETCH_ASSOC);
		return $editRow;
	}

	public function getIdJabatan($id)
	{
		$query = $this->db->prepare("SELECT * FROM jabatan WHERE id_jabatan=:id_jabatan");
		$query->execute(array(":id_jabatan"=>$id));
		$editRow=$query->fetch(PDO::FETCH_ASSOC);
		return $editRow;
	}

	public function countpak($tahun,$bulan,$bulan1,$id_pegawai){		
		$query	= "SELECT sum(nilai) AS hasilTambahbln FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_1_1_1'  AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query 	= $this->db->prepare($query);
		$query->execute();
		$result = $query->fetch(PDO::FETCH_OBJ);
		$rt=$result->hasilTambahbln;

		$query1	= "SELECT sum(nilai) AS hasilTambahbln1 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_1_2_1'  AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query1 	= $this->db->prepare($query1);
		$query1->execute();
		$result1 = $query1->fetch(PDO::FETCH_OBJ);
		$rt2=$result1->hasilTambahbln1;

		$rw = $rt + $rt2 ;
		echo $rw;		
	}

	public function countpak1($tahun,$bulan,$bulan1,$id_pegawai){		
		$query	= "SELECT sum(nilai) AS hasilTambahbln FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_1_1_1'  AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query 	= $this->db->prepare($query);
		$query->execute();
		$result = $query->fetch(PDO::FETCH_OBJ);
		$rt=$result->hasilTambahbln;

		$query1	= "SELECT sum(nilai) AS hasilTambahbln1 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_1_2_1'  AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query1 	= $this->db->prepare($query1);
		$query1->execute();
		$result1 = $query1->fetch(PDO::FETCH_OBJ);
		$rt1=$result1->hasilTambahbln1;

		$query2	= "SELECT sum(nilai) AS hasilTambahbln2 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_1_1_1'  AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query2 = $this->db->prepare($query2);
		$query2->execute();
		$result2 = $query2->fetch(PDO::FETCH_OBJ);
		$rt2=$result2->hasilTambahbln2;

		$query3	= "SELECT sum(nilai) AS hasilTambahbln3 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_1_2_1'  AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query3	= $this->db->prepare($query3);
		$query3->execute();
		$result3 = $query3->fetch(PDO::FETCH_OBJ);
		$rt3=$result3->hasilTambahbln3;

		$query4	= "SELECT sum(nilai) AS hasilTambahbln4 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_1_1_1'  AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query4	= $this->db->prepare($query4);
		$query4->execute();
		$result4 = $query4->fetch(PDO::FETCH_OBJ);
		$rt4=$result4->hasilTambahbln4;

		$query5	= "SELECT sum(nilai) AS hasilTambahbln5 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_1_2_1'  AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query5	= $this->db->prepare($query5);
		$query5->execute();
		$result5 = $query5->fetch(PDO::FETCH_OBJ);
		$rt5=$result5->hasilTambahbln5;

		$rw1 = $rt + $rt1 + $rt2 + $rt3 + $rt4 + $rt5 ;
		echo $rw1;		
	}

	public function countpak2($priode1,$priode2,$id_pegawai){		
		$query	= "SELECT SUM(nilai) AS hasilTambah3 FROM kegiatan_harian WHERE id_kegiatan IN (SELECT id_kegiatan FROM kegiatan)
					AND id_pegawai = '$id_pegawai' 
					AND tgl_kegiatan BETWEEN '$priode1' AND '$priode2' ";
		$query 	= $this->db->prepare($query);
		$query->execute();
		$result = $query->fetch(PDO::FETCH_OBJ);
		if($query->rowCount()>0){
			echo $result->hasilTambah3;
		}else{
			echo "";
		}
	}

	public function countpak3($tahun,$bulan,$bulan1,$id_pegawai){		
		$query	= "SELECT sum(nilai) AS hasilTambahbln FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_1_1_1'  AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query 	= $this->db->prepare($query);
		$query->execute();
		$result = $query->fetch(PDO::FETCH_OBJ);
		$rt=$result->hasilTambahbln;

		$query1	= "SELECT sum(nilai) AS hasilTambahbln1 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_1_2_1'  AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query1 	= $this->db->prepare($query1);
		$query1->execute();
		$result1 = $query1->fetch(PDO::FETCH_OBJ);
		$rt1=$result1->hasilTambahbln1;

		$query2	= "SELECT sum(nilai) AS hasilTambahbln2 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_1_1_1'  AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query2 = $this->db->prepare($query2);
		$query2->execute();
		$result2 = $query2->fetch(PDO::FETCH_OBJ);
		$rt2=$result2->hasilTambahbln2;

		$query3	= "SELECT sum(nilai) AS hasilTambahbln3 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_1_2_1'  AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query3	= $this->db->prepare($query3);
		$query3->execute();
		$result3 = $query3->fetch(PDO::FETCH_OBJ);
		$rt3=$result3->hasilTambahbln3;

		$query4	= "SELECT sum(nilai) AS hasilTambahbln4 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_1_1_1'  AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query4	= $this->db->prepare($query4);
		$query4->execute();
		$result4 = $query4->fetch(PDO::FETCH_OBJ);
		$rt4=$result4->hasilTambahbln4;

		$query5	= "SELECT sum(nilai) AS hasilTambahbln5 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_1_2_1'  AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query5	= $this->db->prepare($query5);
		$query5->execute();
		$result5 = $query5->fetch(PDO::FETCH_OBJ);
		$rt5=$result5->hasilTambahbln5;

		$query6	= "SELECT sum(nilai) AS hasilTambahbln6 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_1_1_1'  AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query6 = $this->db->prepare($query6);
		$query6->execute();
		$result6 = $query6->fetch(PDO::FETCH_OBJ);
		$rt6=$result6->hasilTambahbln6;

		$query7	= "SELECT sum(nilai) AS hasilTambahbln7 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_1_1_1'  AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query7	= $this->db->prepare($query7);
		$query7->execute();
		$result7 = $query7->fetch(PDO::FETCH_OBJ);
		$rt7=$result7->hasilTambahbln7;

		$query8	= "SELECT sum(nilai) AS hasilTambahbln8 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_1_1_1'  AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query8	= $this->db->prepare($query8);
		$query8->execute();
		$result8 = $query8->fetch(PDO::FETCH_OBJ);
		$rt8=$result8->hasilTambahbln8;

		$query9	= "SELECT sum(nilai) AS hasilTambahbln9 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_1_1_1'  AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query9	= $this->db->prepare($query9);
		$query9->execute();
		$result9 = $query9->fetch(PDO::FETCH_OBJ);
		$rt9=$result9->hasilTambahbln9;

		$query10	= "SELECT sum(nilai) AS hasilTambahbln10 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_1_1_1'  AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query10 	= $this->db->prepare($query10);
		$query10->execute();
		$result10   = $query10->fetch(PDO::FETCH_OBJ);
		$rt10=$result10->hasilTambahbln10;

		$query11	= "SELECT sum(nilai) AS hasilTambahbln11 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_1_1_1'  AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query11 	= $this->db->prepare($query11);
		$query11->execute();
		$result11 = $query11->fetch(PDO::FETCH_OBJ);
		$rt11=$result11->hasilTambahbln11;

		$query12	= "SELECT sum(nilai) AS hasilTambahbln12 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_1_1_1'  AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query12 	= $this->db->prepare($query12);
		$query12->execute();
		$result12 = $query12->fetch(PDO::FETCH_OBJ);
		$rt12=$result12->hasilTambahbln12;

		$query13	= "SELECT sum(nilai) AS hasilTambahbln13 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_1_1_1'  AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query13 	= $this->db->prepare($query13);
		$query13->execute();
		$result13 = $query13->fetch(PDO::FETCH_OBJ);
		$rt13=$result13->hasilTambahbln13;

		$rw2 = $rt + $rt1 + $rt2 + $rt3 + $rt4 + $rt5 + $rt6 + $rt7 + $rt8 + $rt9 + $rt10 + $rt11 + $rt12 + $rt13 ;
		echo $rw2;		
	}

	
}
