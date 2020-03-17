<?php

class lap_keg_harian
{
	private $db;
	
	function __construct($pdo)
	{
		$this->db = $pdo;
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

	public function tampilNilai($tahun,$bulan,$priode,$id_keg,$id_pegawai){		
		$query	= "SELECT sum(nilai) AS hasil FROM kegiatan_harian WHERE tgl_kegiatan = '$priode' AND id_kegiatan = '$id_keg' AND '$id_pegawai' ";
		$query 	= $this->db->prepare($query);
		$query->execute();
		$result = $query->fetch(PDO::FETCH_OBJ);
		if($query->rowCount()>0){
			echo $result->hasil;
		}else{
			echo "";
		}
	}

	public function countNilai($tahun,$bulan,$priode1,$priode2,$id_keg,$id_pegawai){		
		$query	= "SELECT sum(nilai) AS hasilTambah FROM kegiatan_harian WHERE id_kegiatan = '$id_keg' AND '$id_pegawai' AND tgl_kegiatan BETWEEN '$priode1' AND  '$priode2' ";
		$query 	= $this->db->prepare($query);
		$query->execute();
		$result = $query->fetch(PDO::FETCH_OBJ);
		if($query->rowCount()>0){
			echo $result->hasilTambah;
		}else{
			echo "";
		}
	}
}
