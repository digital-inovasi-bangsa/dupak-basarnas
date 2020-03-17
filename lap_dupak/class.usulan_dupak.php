<?php

class usulan_dupak
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

	public function countNilaiBln($tahun,$bulan,$bulan1,$id_keg,$id_pegawai){		
		$query	= "SELECT sum(nilai) AS hasilTambahbln FROM kegiatan_bulanan WHERE id_keg_bln = '$id_keg' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query 	= $this->db->prepare($query);
		$query->execute();
		$result = $query->fetch(PDO::FETCH_OBJ);
		$t=$result->hasilTambahbln;
		if($t>0){
			echo $t; 
		}else{
			echo "0";
		}
	}

	public function kalibulan($tahun,$bulan,$bulan1,$id_keg,$id_pegawai,$kal){		
		$query	= "SELECT sum(nilai) AS hasilTambahbln FROM kegiatan_bulanan WHERE id_keg_bln = '$id_keg' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query 	= $this->db->prepare($query);
		$query->execute();
		$result = $query->fetch(PDO::FETCH_OBJ);
		$nn=$result->hasilTambahbln;
		$kali=$nn*$kal;
		
		if ($kali>0) {
			echo $kali;
		}else{
			echo "0";
		}
		
	}

	public function kali($priode1,$priode2,$id_keg,$id_pegawai,$y){		
		$query	= "SELECT sum(nilai) AS hasil FROM kegiatan_harian WHERE id_kegiatan = '$id_keg' AND '$id_pegawai' AND tgl_kegiatan BETWEEN '$priode1' AND  '$priode2' ";
		$query 	= $this->db->prepare($query);
		$query->execute();
		$result = $query->fetch(PDO::FETCH_OBJ);
		$nn=$result->hasil;
		$kali=$nn*$y;
		
		if ($kali>0) {
			echo $kali;
		}else{
			echo "0";
		}
		
	}

	public function hasilkalibulan($tahun,$bulan,$bulan1,$id_pegawai){		
		$query	= "SELECT sum(nilai) AS hasilTambahbln FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_1_1_1' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query 	= $this->db->prepare($query);
		$query->execute();
		$result = $query->fetch(PDO::FETCH_OBJ);
		$nn=$result->hasilTambahbln;
		$kali=$nn * 60;
		$kali;
		
		$query1	= "SELECT sum(nilai) AS hasilTambahbln1 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_1_2_1' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query1 = $this->db->prepare($query1);
		$query1->execute();
		$result1 = $query1->fetch(PDO::FETCH_OBJ);
		$nn1=$result1->hasilTambahbln1;
		$kali1=$nn1 * 50;
		$kali1;

		$hh = $kali + $kali1;
		return $hh;
		
	}

	public function hasilkalibulan1($tahun,$bulan,$bulan1,$id_pegawai){		
		$query2	= "SELECT sum(nilai) AS hasilTambahbln2 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_2_1_1' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query2 = $this->db->prepare($query2);
		$query2->execute();
		$result2 = $query2->fetch(PDO::FETCH_OBJ);
		$nn2=$result2->hasilTambahbln2;
		$kali2=$nn2 * 15;

		$query3	= "SELECT sum(nilai) AS hasilTambahbln3 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_2_2_1' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query3	= $this->db->prepare($query3);
		$query3->execute();
		$result3 = $query3->fetch(PDO::FETCH_OBJ);
		$nn3=$result3->hasilTambahbln3;
		$kali3=$nn3 * 9;

		$query4	= "SELECT sum(nilai) AS hasilTambahbln4 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_2_3_1' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query4 = $this->db->prepare($query4);
		$query4->execute();
		$result4 = $query4->fetch(PDO::FETCH_OBJ);
		$nn4=$result4->hasilTambahbln4;
		$kali4=$nn4 * 5;

		$query5	= "SELECT sum(nilai) AS hasilTambahbln5 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_2_4_1' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query5	= $this->db->prepare($query5);
		$query5->execute();
		$result5 = $query5->fetch(PDO::FETCH_OBJ);
		$nn5=$result5->hasilTambahbln5;
		$kali5=$nn5 * 3;

		$query6	= "SELECT sum(nilai) AS hasilTambahbln6 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_2_5_1' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query6	= $this->db->prepare($query6);
		$query6->execute();
		$result6 = $query6->fetch(PDO::FETCH_OBJ);
		$nn6=$result6->hasilTambahbln6;
		$kali6=$nn6 * 2;

		$query7	= "SELECT sum(nilai) AS hasilTambahbln7 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_2_6_1' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query7	= $this->db->prepare($query7);
		$query7->execute();
		$result7 = $query7->fetch(PDO::FETCH_OBJ);
		$nn7=$result7->hasilTambahbln7;
		$kali7=$nn7 * 1;

		$hh =  $kali2 + $kali3 + $kali4 + $kali5 + $kali6 + $kali7;
		return $hh;
	}

	public function jml1A1B($tahun,$bulan,$bulan1,$id_pegawai){
		$query	= "SELECT sum(nilai) AS hasilTambahbln FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_1_1_1' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query 	= $this->db->prepare($query);
		$query->execute();
		$result = $query->fetch(PDO::FETCH_OBJ);
		$nn=$result->hasilTambahbln;
		$kali=$nn * 60;
		$kali;
		
		$query1	= "SELECT sum(nilai) AS hasilTambahbln1 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_1_2_1' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query1 = $this->db->prepare($query1);
		$query1->execute();
		$result1 = $query1->fetch(PDO::FETCH_OBJ);
		$nn1=$result1->hasilTambahbln1;
		$kali1=$nn1 * 50;
		$kali1;

		$query2	= "SELECT sum(nilai) AS hasilTambahbln2 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_2_1_1' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query2 = $this->db->prepare($query2);
		$query2->execute();
		$result2 = $query2->fetch(PDO::FETCH_OBJ);
		$nn2=$result2->hasilTambahbln2;
		$kali2=$nn2 * 15;

		$query3	= "SELECT sum(nilai) AS hasilTambahbln3 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_2_2_1' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query3	= $this->db->prepare($query3);
		$query3->execute();
		$result3 = $query3->fetch(PDO::FETCH_OBJ);
		$nn3=$result3->hasilTambahbln3;
		$kali3=$nn3 * 9;

		$query4	= "SELECT sum(nilai) AS hasilTambahbln4 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_2_3_1' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query4 = $this->db->prepare($query4);
		$query4->execute();
		$result4 = $query4->fetch(PDO::FETCH_OBJ);
		$nn4=$result4->hasilTambahbln4;
		$kali4=$nn4 * 5;

		$query5	= "SELECT sum(nilai) AS hasilTambahbln5 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_2_4_1' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query5	= $this->db->prepare($query5);
		$query5->execute();
		$result5 = $query5->fetch(PDO::FETCH_OBJ);
		$nn5=$result5->hasilTambahbln5;
		$kali5=$nn5 * 3;

		$query6	= "SELECT sum(nilai) AS hasilTambahbln6 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_2_5_1' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query6	= $this->db->prepare($query6);
		$query6->execute();
		$result6 = $query6->fetch(PDO::FETCH_OBJ);
		$nn6=$result6->hasilTambahbln6;
		$kali6=$nn6 * 2;

		$query7	= "SELECT sum(nilai) AS hasilTambahbln7 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_2_6_1' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query7	= $this->db->prepare($query7);
		$query7->execute();
		$result7 = $query7->fetch(PDO::FETCH_OBJ);
		$nn7=$result7->hasilTambahbln7;
		$kali7=$nn7 * 1;

		$hh =  $kali + $kali1 + $kali2 + $kali3 + $kali4 + $kali5 + $kali6 + $kali7;
		
		if ($hh>0) {
			echo $hh;
		}else{
			echo "0";
		}
	}

	public function jml1A1Buntukjumlah($tahun,$bulan,$bulan1,$id_pegawai){
		$query	= "SELECT sum(nilai) AS hasilTambahbln FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_1_1_1' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query 	= $this->db->prepare($query);
		$query->execute();
		$result = $query->fetch(PDO::FETCH_OBJ);
		$nn=$result->hasilTambahbln;
		$kali=$nn * 60;
		$kali;
		
		$query1	= "SELECT sum(nilai) AS hasilTambahbln1 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_1_2_1' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query1 = $this->db->prepare($query1);
		$query1->execute();
		$result1 = $query1->fetch(PDO::FETCH_OBJ);
		$nn1=$result1->hasilTambahbln1;
		$kali1=$nn1 * 50;
		$kali1;

		$query2	= "SELECT sum(nilai) AS hasilTambahbln2 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_2_1_1' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query2 = $this->db->prepare($query2);
		$query2->execute();
		$result2 = $query2->fetch(PDO::FETCH_OBJ);
		$nn2=$result2->hasilTambahbln2;
		$kali2=$nn2 * 15;

		$query3	= "SELECT sum(nilai) AS hasilTambahbln3 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_2_2_1' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query3	= $this->db->prepare($query3);
		$query3->execute();
		$result3 = $query3->fetch(PDO::FETCH_OBJ);
		$nn3=$result3->hasilTambahbln3;
		$kali3=$nn3 * 9;

		$query4	= "SELECT sum(nilai) AS hasilTambahbln4 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_2_3_1' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query4 = $this->db->prepare($query4);
		$query4->execute();
		$result4 = $query4->fetch(PDO::FETCH_OBJ);
		$nn4=$result4->hasilTambahbln4;
		$kali4=$nn4 * 5;

		$query5	= "SELECT sum(nilai) AS hasilTambahbln5 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_2_4_1' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query5	= $this->db->prepare($query5);
		$query5->execute();
		$result5 = $query5->fetch(PDO::FETCH_OBJ);
		$nn5=$result5->hasilTambahbln5;
		$kali5=$nn5 * 3;

		$query6	= "SELECT sum(nilai) AS hasilTambahbln6 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_2_5_1' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query6	= $this->db->prepare($query6);
		$query6->execute();
		$result6 = $query6->fetch(PDO::FETCH_OBJ);
		$nn6=$result6->hasilTambahbln6;
		$kali6=$nn6 * 2;

		$query7	= "SELECT sum(nilai) AS hasilTambahbln7 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_2_6_1' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query7	= $this->db->prepare($query7);
		$query7->execute();
		$result7 = $query7->fetch(PDO::FETCH_OBJ);
		$nn7=$result7->hasilTambahbln7;
		$kali7=$nn7 * 1;

		$hh =  $kali + $kali1 + $kali2 + $kali3 + $kali4 + $kali5 + $kali6 + $kali7;
		
		return $hh;
	}

	public function countNilai($tahun,$priode1,$priode2,$id_keg,$id_pegawai){		
		$query	= "SELECT sum(nilai) AS hasilTambah FROM kegiatan_harian WHERE id_pegawai = '$id_pegawai' AND id_kegiatan = '$id_keg' AND tgl_kegiatan BETWEEN '$priode1' AND '$priode2' ";
		$query 	= $this->db->prepare($query);
		$query->execute();
		$result = $query->fetch(PDO::FETCH_OBJ);
		$w=$result->hasilTambah;
		if($w>0){
			echo $w; 
		}else{
			echo "0";
		}
	}

	public function countNilai1($priode1,$priode2,$id_pegawai){		
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

	public function jumlah($tahun,$bulan,$bulan1,$id_pegawai){		
		$query		= "SELECT sum(nilai) AS nilai FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_1_1_1' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query 		= $this->db->prepare($query);
		$query->execute();
		$result 	= $query->fetch(PDO::FETCH_OBJ);
		$h			= $result->nilai;
		
		$query1		= "SELECT sum(nilai) AS nilai1 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_1_2_1' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query1		= $this->db->prepare($query1);
		$query1->execute();
		$result1	= $query1->fetch(PDO::FETCH_OBJ);
		$h1			= $result1->nilai1;

		$query2		= "SELECT sum(nilai) AS nilai2 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_2_1_1' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query2		= $this->db->prepare($query2);
		$query2->execute();
		$result2	= $query2->fetch(PDO::FETCH_OBJ);
		$h2			= $result2->nilai2;

		$query3		= "SELECT sum(nilai) AS nilai3 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_2_2_1' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query3		= $this->db->prepare($query3);
		$query3->execute();
		$result3	= $query3->fetch(PDO::FETCH_OBJ);
		$h3			= $result3->nilai3;

		$query4		= "SELECT sum(nilai) AS nilai4 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_2_3_1' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query4		= $this->db->prepare($query4);
		$query4->execute();
		$result4	= $query4->fetch(PDO::FETCH_OBJ);
		$h4			= $result4->nilai4;

		$query5		= "SELECT sum(nilai) AS nilai5 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_2_4_1' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query5		= $this->db->prepare($query5);
		$query5->execute();
		$result5	= $query5->fetch(PDO::FETCH_OBJ);
		$h5			= $result5->nilai5;

		$query6		= "SELECT sum(nilai) AS nilai6 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_2_5_1' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query6		= $this->db->prepare($query6);
		$query6->execute();
		$result6	= $query6->fetch(PDO::FETCH_OBJ);
		$h6			= $result6->nilai6;

		$query7		= "SELECT sum(nilai) AS nilai7 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_2_6_1' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query7		= $this->db->prepare($query7);
		$query7->execute();
		$result7	= $query7->fetch(PDO::FETCH_OBJ);
		$h7			= $result7->nilai7;

		$hasil = $h + $h1 + $h2 + $h3 + $h4 + $h5 + $h6 + $h7 ;
		if ($hasil>0){ 
			echo $hasil;
		}else{
			echo "0.000";
		}
	}

	public function jumlah2($tahun,$bulan,$bulan1,$id_pegawai){		
		$query		= "SELECT sum(nilai) AS nilai FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_3_1_1' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query 		= $this->db->prepare($query);
		$query->execute();
		$result 	= $query->fetch(PDO::FETCH_OBJ);
		$h			= $result->nilai;
		
		$query1		= "SELECT sum(nilai) AS nilai1 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_4_1_1' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query1		= $this->db->prepare($query1);
		$query1->execute();
		$result1	= $query1->fetch(PDO::FETCH_OBJ);
		$h1			= $result1->nilai1;

		$query2		= "SELECT sum(nilai) AS nilai2 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_4_1_2' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query2		= $this->db->prepare($query2);
		$query2->execute();
		$result2	= $query2->fetch(PDO::FETCH_OBJ);
		$h2			= $result2->nilai2;

		$query3		= "SELECT sum(nilai) AS nilai3 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_4_1_3' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query3		= $this->db->prepare($query3);
		$query3->execute();
		$result3	= $query3->fetch(PDO::FETCH_OBJ);
		$h3			= $result3->nilai3;

		$query4		= "SELECT sum(nilai) AS nilai4 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_4_2_1' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query4		= $this->db->prepare($query4);
		$query4->execute();
		$result4	= $query4->fetch(PDO::FETCH_OBJ);
		$h4			= $result4->nilai4;

		$query5		= "SELECT sum(nilai) AS nilai5 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_4_2_2' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query5		= $this->db->prepare($query5);
		$query5->execute();
		$result5	= $query5->fetch(PDO::FETCH_OBJ);
		$h5			= $result5->nilai5;

		$query6		= "SELECT sum(nilai) AS nilai6 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_5_1_1' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query6		= $this->db->prepare($query6);
		$query6->execute();
		$result6	= $query6->fetch(PDO::FETCH_OBJ);
		$h6			= $result6->nilai6;

		$query7		= "SELECT sum(nilai) AS nilai7 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_5_1_2' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query7		= $this->db->prepare($query7);
		$query7->execute();
		$result7	= $query7->fetch(PDO::FETCH_OBJ);
		$h7			= $result7->nilai7;

		$query8		= "SELECT sum(nilai) AS nilai8 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_5_2_1' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query8 	= $this->db->prepare($query8);
		$query8->execute();
		$result8 	= $query8->fetch(PDO::FETCH_OBJ);
		$h8			= $result8->nilai8;

		$query9		= "SELECT sum(nilai) AS nilai9 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_5_2_2' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query9		= $this->db->prepare($query9);
		$query9->execute();
		$result9 	= $query9->fetch(PDO::FETCH_OBJ);
		$h9			= $result9->nilai9;

		$query10	= "SELECT sum(nilai) AS nilai10 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_6_1_1' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query10 	= $this->db->prepare($query10);
		$query10->execute();
		$result10 	= $query10->fetch(PDO::FETCH_OBJ);
		$h10		= $result10->nilai10;

		$query11	= "SELECT sum(nilai) AS nilai11 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_7_1_1' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query11 	= $this->db->prepare($query11);
		$query11->execute();
		$result11 	= $query11->fetch(PDO::FETCH_OBJ);
		$h11		= $result11->nilai11;

		$query12	= "SELECT sum(nilai) AS nilai12 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_7_1_2' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query12		= $this->db->prepare($query12);
		$query12->execute();
		$result12 	= $query12->fetch(PDO::FETCH_OBJ);
		$h12		= $result12->nilai12;

		$query13	= "SELECT sum(nilai) AS nilai13 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_8_1_1' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query13	= $this->db->prepare($query13);
		$query13->execute();
		$result13 	= $query13->fetch(PDO::FETCH_OBJ);
		$h13		= $result13->nilai13;

		$query14	= "SELECT sum(nilai) AS nilai14 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_8_1_2' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query14	= $this->db->prepare($query14);
		$query14->execute();
		$result14 	= $query14->fetch(PDO::FETCH_OBJ);
		$h14		= $result14->nilai14;

		$query15	= "SELECT sum(nilai) AS nilai15 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_8_1_3' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query15	= $this->db->prepare($query15);
		$query15->execute();
		$result15 	= $query15->fetch(PDO::FETCH_OBJ);
		$h15		= $result15->nilai15;

		$query16	= "SELECT sum(nilai) AS nilai16 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_8_2_1' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query16	= $this->db->prepare($query16);
		$query16->execute();
		$result16 	= $query16->fetch(PDO::FETCH_OBJ);
		$h16		= $result16->nilai16;

		$query17	= "SELECT sum(nilai) AS nilai17 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_9_1_1' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query17	= $this->db->prepare($query17);
		$query17->execute();
		$result17 	= $query17->fetch(PDO::FETCH_OBJ);
		$h17		= $result17->nilai17;

		$query18	= "SELECT sum(nilai) AS nilai18 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_9_2_1' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query18	= $this->db->prepare($query18);
		$query18->execute();
		$result18 	= $query18->fetch(PDO::FETCH_OBJ);
		$h18		= $result18->nilai18;

		$hasil2 = $h + $h1 + $h2 + $h3 + $h4 + $h5 + $h6 + $h7 + $h8 + $h9 + $h10 + $h11 + $h12 + $h13 + $h14 + $h15 + $h16 + $h17 + $h18  ;
		if ($hasil2>0){ 
			echo $hasil2;
		}else{
			echo "0.000";
		}
	}

	public function jumlah3($tahun,$bulan,$bulan1,$id_pegawai){		
		$query		= "SELECT sum(nilai) AS nilai FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_10_1_1' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query 		= $this->db->prepare($query);
		$query->execute();
		$result 	= $query->fetch(PDO::FETCH_OBJ);
		$h			= $result->nilai;
		
		$query1		= "SELECT sum(nilai) AS nilai1 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_10_1_2' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query1		= $this->db->prepare($query1);
		$query1->execute();
		$result1	= $query1->fetch(PDO::FETCH_OBJ);
		$h1			= $result1->nilai1;

		$query2		= "SELECT sum(nilai) AS nilai2 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_10_2_1' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query2		= $this->db->prepare($query2);
		$query2->execute();
		$result2	= $query2->fetch(PDO::FETCH_OBJ);
		$h2			= $result2->nilai2;

		$query3		= "SELECT sum(nilai) AS nilai3 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_10_2_2' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query3		= $this->db->prepare($query3);
		$query3->execute();
		$result3	= $query3->fetch(PDO::FETCH_OBJ);
		$h3			= $result3->nilai3;

		$query4		= "SELECT sum(nilai) AS nilai4 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_10_3_1' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query4		= $this->db->prepare($query4);
		$query4->execute();
		$result4	= $query4->fetch(PDO::FETCH_OBJ);
		$h4			= $result4->nilai4;

		$query5		= "SELECT sum(nilai) AS nilai5 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_10_3_2' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query5		= $this->db->prepare($query5);
		$query5->execute();
		$result5	= $query5->fetch(PDO::FETCH_OBJ);
		$h5			= $result5->nilai5;

		$query6		= "SELECT sum(nilai) AS nilai6 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_10_4_1' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query6		= $this->db->prepare($query6);
		$query6->execute();
		$result6	= $query6->fetch(PDO::FETCH_OBJ);
		$h6			= $result6->nilai6;

		$query7		= "SELECT sum(nilai) AS nilai7 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_10_5_1' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query7		= $this->db->prepare($query7);
		$query7->execute();
		$result7	= $query7->fetch(PDO::FETCH_OBJ);
		$h7			= $result7->nilai7;

		$query8		= "SELECT sum(nilai) AS nilai8 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_11_1_1' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query8 	= $this->db->prepare($query8);
		$query8->execute();
		$result8 	= $query8->fetch(PDO::FETCH_OBJ);
		$h8			= $result8->nilai8;

		$query9		= "SELECT sum(nilai) AS nilai9 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_11_1_2' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query9		= $this->db->prepare($query9);
		$query9->execute();
		$result9 	= $query9->fetch(PDO::FETCH_OBJ);
		$h9			= $result9->nilai9;

		$query10	= "SELECT sum(nilai) AS nilai10 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_11_2_1' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query10 	= $this->db->prepare($query10);
		$query10->execute();
		$result10 	= $query10->fetch(PDO::FETCH_OBJ);
		$h10		= $result10->nilai10;

		$query11	= "SELECT sum(nilai) AS nilai11 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_11_2_2' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query11 	= $this->db->prepare($query11);
		$query11->execute();
		$result11 	= $query11->fetch(PDO::FETCH_OBJ);
		$h11		= $result11->nilai11;

		$query12	= "SELECT sum(nilai) AS nilai12 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_11_3_1' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query12		= $this->db->prepare($query12);
		$query12->execute();
		$result12 	= $query12->fetch(PDO::FETCH_OBJ);
		$h12		= $result12->nilai12;

		$query13	= "SELECT sum(nilai) AS nilai13 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_12_1_1' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query13	= $this->db->prepare($query13);
		$query13->execute();
		$result13 	= $query13->fetch(PDO::FETCH_OBJ);
		$h13		= $result13->nilai13;

		$query14	= "SELECT sum(nilai) AS nilai14 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_13_1_1' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query14	= $this->db->prepare($query14);
		$query14->execute();
		$result14 	= $query14->fetch(PDO::FETCH_OBJ);
		$h14		= $result14->nilai14;

		$query15	= "SELECT sum(nilai) AS nilai15 FROM kegiatan_bulanan WHERE id_keg_bln = 'kegbln_14_1_1' AND '$id_pegawai' AND thn_keg = '$tahun' AND bln_keg BETWEEN '$bulan' AND  '$bulan1' ";
		$query15	= $this->db->prepare($query15);
		$query15->execute();
		$result15 	= $query15->fetch(PDO::FETCH_OBJ);
		$h15		= $result15->nilai15;

		

		$hasil2 = $h + $h1 + $h2 + $h3 + $h4 + $h5 + $h6 + $h7 + $h8 + $h9 + $h10 + $h11 + $h12 + $h13 + $h14 + $h15   ;
		if ($hasil2>0){ 
			echo $hasil2;
		}else{
			echo "0.000";
		}
	}
}