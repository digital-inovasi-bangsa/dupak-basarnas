<?php

class keg_bln
{
	private $db;
	
	function __construct($pdo)
	{
		$this->db = $pdo;
	}
	
	public function create($id_jabatan,$id_pegawai,$bulan,$tahun,$id_kat_bln,$id_sub_kat_bln,$id_keg_bln,$nilai,$created_by)
	{
		try
		{
			$query = $this->db->prepare("INSERT INTO kegiatan_bulanan(id_jabatan,id_pegawai,bln_keg,thn_keg,id_kat_bln,id_sub_kat_bln,id_keg_bln,nilai,created_by) VALUES (:id_jabatan, :id_pegawai, :bln_keg, :thn_keg, :id_kat_bln, :id_sub_kat_bln, :id_keg_bln, :nilai, :created_by)");			
			$query->bindparam(":id_jabatan",$id_jabatan);
			$query->bindparam(":id_pegawai",$id_pegawai);
			$query->bindparam(":bln_keg",$bulan);
			$query->bindparam(":thn_keg",$tahun);
			$query->bindparam(":id_kat_bln",$id_kat_bln);
			$query->bindparam(":id_sub_kat_bln",$id_sub_kat_bln);
			$query->bindparam(":id_keg_bln",$id_keg_bln);
			$query->bindparam(":nilai",$nilai);
			$query->bindparam(":created_by",$created_by);
			$query->execute();
			return true;
		}
		catch(PDOException $e)
		{
			echo "
				<div class='alert alert-danger'>
					<button type='button' class='close' data-dismiss='alert'>&times;</button>
					<strong>Terjadi kesalahan !</strong> Data Gagal di Simpan
				</div>";	
			return false;
		}
	}
	
	public function getID($id)
	{
		$query = $this->db->prepare("SELECT * FROM v_keg_bln WHERE id_kh_bln=:id_kh_bln");
		$query->execute(array(":id_kh_bln"=>$id));
		$editRow=$query->fetch(PDO::FETCH_ASSOC);
		return $editRow;
	}
	
	public function laporan1($tgl1,$tgl2)
	{
		$query = $this->db->prepare("SELECT * FROM v_kegiatan WHERE tgl_kegiatan BETWEEN $tgl1=:tgl1 AND $tgl2 =:tgl2 ");
		$query->bindparam(":tgl1",$tgl1);
		$query->bindparam(":tgl2",$tgl2);
		$editRow=$query->fetch(PDO::FETCH_ASSOC);
		return $editRow;
	}

	public function laporan($query){
		$query = $this->db->prepare($query);
		$query->execute();
		$result = $query->fetch(PDO::FETCH_OBJ);
		return $r=array($result);
		
	}

	public function update($id_kh_bln,$id_jabatan,$id_pegawai,$bulan,$tahun,$id_kat_bln,$id_sub_kat_bln,$id_keg_bln,$nilai,$update_by)
	{
		try
		{
			$query=$this->db->prepare("UPDATE kegiatan_bulanan SET 	id_jabatan 		= :id_jabatan,
																	id_pegawai 		= :id_pegawai,
																	bln_keg 		= :bulan,
																	thn_keg 	 	= :tahun,
																	id_kat_bln 	 	= :id_kat_bln,
																	id_sub_kat_bln  = :id_sub_kat_bln,
																	id_keg_bln  	= :id_keg_bln,
																	nilai 			= :nilai,
																	update_by 		= :update_by
															WHERE 	id_kh_bln		= :id_kh_bln ");
			$query->bindparam(":id_jabatan",$id_jabatan);
			$query->bindparam(":id_pegawai",$id_pegawai);
			$query->bindparam(":bulan",$bulan);
			$query->bindparam(":tahun",$tahun);
			$query->bindparam(":id_kat_bln",$id_kat_bln);
			$query->bindparam(":id_sub_kat_bln",$id_sub_kat_bln);
			$query->bindparam(":id_keg_bln",$id_keg_bln);
			$query->bindparam(":nilai",$nilai);
			$query->bindparam(":update_by",$update_by);
			$query->bindparam(":id_kh_bln",$id_kh_bln);
			$query->execute();			
			return true;	
		}
		catch(PDOException $e)
		{
			echo  "
				<div class='alert alert-danger'>
					<button type='button' class='close' data-dismiss='alert'>&times;</button>
					<strong>Terjadi kesalahan !</strong> Data Gagal di Update
				</div>";	
			return false;
		}
	}
	
	public function delete($id)
	{
		try{
			$query = $this->db->prepare("DELETE FROM kegiatan_bulanan WHERE id_kh_bln=:id_kh_bln");
			$query->bindparam(":id_kh_bln",$id);
			$query->execute();
			echo "
			<div class='alert alert-success'>
			<button type='button' class='close' data-dismiss='alert'>&times;</button>
			Data Berhasil Di Hapus
			</div>
			<strong><a href='javascript:void(0)' onclick='kegiatan_bulanan()'> <i class='icon-backward'></i> Kembali</a></strong>";
			return true;
		}catch(PDOException $e){
			echo "
			<div class='alert alert-error'>
			<button type='button' class='close' data-dismiss='alert'>&times;</button>
			Data Tidak Bisa di Hapus Karena Sudah Di pakai !
			</div>
			<strong><a href='javascript:void(0)' onclick='kegiatan_bulanan()'> <i class='icon-backward'></i> Kembali</a></strong>";
			return false;
		}
	}

	public function select($query){
		$query = $this->db->prepare($query);
		$query->execute();
		while($row=$query->fetch(PDO::FETCH_ASSOC)){
			echo "<option value='$row[id_kegiatan]'>$row[kegiatan]</option>";
		}
		
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

	public function ambilkategori($query){
		//$query = "SELECT * FROM pegawai";
		$query = $this->db->prepare($query);
		$query->execute();
		echo "<option value=''>-- Pilih subkategori --</option>";

		while($row=$query->fetch(PDO::FETCH_ASSOC)){
			echo "<option value='$row[id_sub_kat_bln]'>$row[sub_kat_bln]</option>";
		}
		
	}

	public function ambilkegiatan($query){
		//$query = "SELECT * FROM pegawai";
		$query = $this->db->prepare($query);
		$query->execute();
		echo "<option value=''>-- Pilih Kegiatan --</option>";

		while($row=$query->fetch(PDO::FETCH_ASSOC)){
			echo "<option value='$row[id_keg_bln]'>$row[keg_bln]</option>";
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

	public function katjab_post($query){
		$query = $this->db->prepare($query);
		$query->execute();
		$result = $query->fetch(PDO::FETCH_OBJ);
		echo "<option value='$result->id_kat_jab' selected >$result->kat_jab</option>";
		
	}

	public function jabatan(){
		$query = "SELECT * FROM jabatan";
		$query = $this->db->prepare($query);
		$query->execute();
		while($row=$query->fetch(PDO::FETCH_ASSOC)){
			echo "<option value='$row[id_jabatan]'>$row[jabatan]</option>";
		}
		
	}

	public function jabatan_post($query){
		$query = $this->db->prepare($query);
		$query->execute();
		$result = $query->fetch(PDO::FETCH_OBJ);
		echo "<option value='$result->id_jabatan' selected >$result->jabatan</option>";
		
	}

	public function pegawai_post($query){
		$query = $this->db->prepare($query);
		$query->execute();
		$result = $query->fetch(PDO::FETCH_OBJ);
		echo "<option value='$result->id_pegawai' selected >$result->nama_pegawai</option>";
		
	}

	public function kategori($query){
		
		$query = $this->db->prepare($query);
		$query->execute();
		while($row=$query->fetch(PDO::FETCH_ASSOC)){
			echo "<option value='$row[id_kat_bln]'>$row[kat_bln]</option>";
		}
		
	}

	public function ambilkeg($query){
		$query = $this->db->prepare($query);
		$query->execute();
		while($row=$query->fetch(PDO::FETCH_ASSOC)){
			$go = $row['id_kat_jab'];
		}
		$sql = "SELECT * FROM kat_bln WHERE id_kat_jab = $go ";
		$sql = $this->db->prepare($sql);
		$sql->execute();
		echo "<option value=''>-- Pilih Ketegori --</option>";
		while($row1=$sql->fetch(PDO::FETCH_ASSOC)){
			echo "<option value='$row1[id_kat_bln]'>$row1[kat_bln]</option>";
		}
		
	}
	
	public function view($query)
	{
		$query = $this->db->prepare($query);
		$query->execute();
		$no = 1;
		if($query->rowCount()>0)
		{
			while($row=$query->fetch(PDO::FETCH_ASSOC))
			{
				?>
                <tr>
                <td><div align="center" width="50px"><?php print($no); ?></div></td>
                <td><?php print($row['keg_bln']); ?></td>
                <td><div align="center"><?php print($row['nilai']); ?></div></td>
                <td><div align="center"><?php print($row['bln_keg']."-".$row['thn_keg']); ?></div></td>
                <td><?php print($row['nama_pegawai']); ?></td>
                <td><?php print($row['jabatan']); ?></td>
                <td><div align="center">
                <?php echo "                
                <a href='javascript:void(0)' onclick=\"editData('$row[id_kh_bln]')\" ><i class='icon-trash icon-pencil bigger-130'></i></i> </a>
                <a href='javascript:void(0)' onclick=\"deleteData('$row[id_kh_bln]','$row[keg_bln]')\" ><i class='icon-trash icon-red bigger-130'></i></i> </a>
                ";?>
                </div>
                </td>
                </tr>
                <?php
                $no++;
			} ?>
			<script type="text/javascript" charset="utf-8">
				$(document).ready(function() {
					$('#tabeldata').dataTable( {
						"sPaginationType": "bootstrap",
	                    "sSorting":[[2, "desc"]],
	                    "iDisplayLength": 5,
	                    "aLengthMenu": [5, 10, 25, 50, 100 ],
					});
				});
			</script><?php 
		}
		else
		{
			?>
            <tr>
           		<td colspan="7"><strong>Tidak ada data...!!</strong></td>
            </tr>
            <?php
		}		
	}
	
	public function Prin($query)
	{
		$query = $this->db->prepare($query);
		$query->execute();
		$no = 1;
		if($query->rowCount()>0)
		{
			while($row=$query->fetch(PDO::FETCH_ASSOC))
			{
				?>
                <tr>
                	<td align="center"><div align="center" width="50px"><?php print($no); ?></div></td>
	                <td align="center"><div align="center" width="50px"><?php print($row['id_kegiatan']); ?></div></td>
	                <td><?php print($row['kegiatan']); ?></td>
	                </tr>
                <?php
                $no++;
			} 
		}
		else
		{
			?>
            <tr>
           		<td colspan="4"><strong>Tidak ada data...!!</strong></td>
            </tr>
            <?php
		}		
	}
	
}
