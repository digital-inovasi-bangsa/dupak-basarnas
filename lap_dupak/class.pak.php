<?php

class pak
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
