<?php

class pegawai
{
	private $db;
	
	function __construct($pdo)
	{
		$this->db = $pdo;
	}
	
	public function create($nip,$nama_pegawai,$tempat_lahir,$tgl_lahir,$nomor_karpeg,$jenis_kelamin,$pendidikan,$pangkat,$golongan,$tgl_tmt,$id_jabatan,$masa_kerja_lama,$masa_kerja_baru,$id_unit_kerja,$created_by)
	{
		try
		{
			$query = $this->db->prepare("INSERT INTO pegawai(nip,nama_pegawai,tempat_lahir,tgl_lahir,nomor_karpeg,jenis_kelamin,pendidikan,pangkat,golongan,tgl_tmt,id_jabatan,masa_kerja_lama,masa_kerja_baru,id_unit_kerja,created_by) VALUES (:nip, :nama_pegawai, :tempat_lahir, :tgl_lahir, :nomor_karpeg, :jenis_kelamin, :pendidikan, :pangkat, :golongan, :tgl_tmt, :id_jabatan, :masa_kerja_lama, :masa_kerja_baru, :id_unit_kerja, :created_by)");			
			$query -> bindparam(":nip",$nip);
			$query -> bindparam(":nama_pegawai",$nama_pegawai);
			$query -> bindparam(":tempat_lahir",$tempat_lahir);
			$query -> bindparam(":tgl_lahir",$tgl_lahir);
			$query -> bindparam(":nomor_karpeg",$nomor_karpeg);
			$query -> bindparam(":jenis_kelamin",$jenis_kelamin);
			$query -> bindparam(":pendidikan",$pendidikan);
			$query -> bindparam(":pangkat",$pangkat);
			$query -> bindparam(":golongan",$golongan);
			$query -> bindparam(":tgl_tmt",$tgl_tmt);
			$query -> bindparam(":id_jabatan",$id_jabatan);
			$query -> bindparam(":masa_kerja_lama",$masa_kerja_lama);
			$query -> bindparam(":masa_kerja_baru",$masa_kerja_baru);
			$query -> bindparam(":id_unit_kerja",$id_unit_kerja);
			$query -> bindparam(":created_by",$created_by);
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
		$query = $this->db->prepare("SELECT * FROM v_peg_unit_jab WHERE id_pegawai=:id_pegawai");
		$query->execute(array(":id_pegawai"=>$id));
		$editRow=$query->fetch(PDO::FETCH_ASSOC);
		return $editRow;
	}

	
	public function update($id_pegawai,$nip,$nama_pegawai,$tempat_lahir,$tgl_lahir,$nomor_karpeg,$jenis_kelamin,$pendidikan,$pangkat,$golongan,$tgl_tmt,$id_jabatan,$masa_kerja_lama,$masa_kerja_baru,$id_unit_kerja,$update_by)
	{
		try
		{
			$query=$this->db->prepare("UPDATE pegawai SET 	nip	= :nip,
															nama_pegawai 	= :nama_pegawai,
															tempat_lahir 	= :tempat_lahir,
															tgl_lahir 		= :tgl_lahir,
															nomor_karpeg 	= :nomor_karpeg,
															jenis_kelamin 	= :jenis_kelamin,
															pendidikan 		= :pendidikan,
															pangkat 		= :pangkat,
															golongan 		= :golongan,
															tgl_tmt 		= :tgl_tmt,
															id_jabatan 		= :id_jabatan,
															masa_kerja_lama = :masa_kerja_lama,
															masa_kerja_baru = :masa_kerja_baru,
															id_unit_kerja 	= :id_unit_kerja,
															update_by 		= :update_by
													WHERE 	id_pegawai		= :id_pegawai ");
			$query -> bindparam(":nip",$nip);
			$query -> bindparam(":nama_pegawai",$nama_pegawai);
			$query -> bindparam(":tempat_lahir",$tempat_lahir);
			$query -> bindparam(":tgl_lahir",$tgl_lahir);
			$query -> bindparam(":nomor_karpeg",$nomor_karpeg);
			$query -> bindparam(":jenis_kelamin",$jenis_kelamin);
			$query -> bindparam(":pendidikan",$pendidikan);
			$query -> bindparam(":pangkat",$pangkat);
			$query -> bindparam(":golongan",$golongan);
			$query -> bindparam(":tgl_tmt",$tgl_tmt);
			$query -> bindparam(":id_jabatan",$id_jabatan);
			$query -> bindparam(":masa_kerja_lama",$masa_kerja_lama);
			$query -> bindparam(":masa_kerja_baru",$masa_kerja_baru);
			$query -> bindparam(":id_unit_kerja",$id_unit_kerja);
			$query -> bindparam(":id_pegawai",$id_pegawai);
			$query -> bindparam(":update_by",$update_by);
			$query -> execute();			
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
			$query = $this->db->prepare("DELETE FROM pegawai WHERE id_pegawai=:id_pegawai");
			$query->bindparam(":id_pegawai",$id);
			$query->execute();
			echo "
			<div class='alert alert-success'>
			<button type='button' class='close' data-dismiss='alert'>&times;</button>
			Data Berhasil Di Hapus
			</div>
			<strong><a href='javascript:void(0)' onclick='pegawai()'> <i class='icon-backward'></i> Kembali</a></strong>";
			return true;
		}catch(PDOException $e){
			echo "
			<div class='alert alert-error'>
			<button type='button' class='close' data-dismiss='alert'>&times;</button>
			Data Tidak Bisa di Hapus Karena Sudah Di pakai !
			</div>
			<strong><a href='javascript:void(0)' onclick='pegawai()'> <i class='icon-backward'></i> Kembali</a></strong>";
			return false;
		}
	}

	public function select($query){
		$query = $this->db->prepare($query);
		$query->execute();
		while($row=$query->fetch(PDO::FETCH_ASSOC)){
			echo "<option value='$row[id_pegawai]'>$row[nama_pegawai]</option>";
		}
		
	}

	public function select_jabatan($query){
		$query = $this->db->prepare($query);
		$query->execute();
		while($row=$query->fetch(PDO::FETCH_ASSOC)){
			echo "<option value='$row[id_jabatan]'>$row[jabatan]</option>";
		}
		
	}

	public function select_unit_kerja($query){
		$query = $this->db->prepare($query);
		$query->execute();
		while($row=$query->fetch(PDO::FETCH_ASSOC)){
			echo "<option value='$row[id_unit_kerja]'>$row[unit_kerja]</option>";
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
                <td><?php print($row['nip']); ?></td>
	            <td><?php print($row['nomor_karpeg']); ?></td>
                <td><?php print($row['nama_pegawai']); ?></td>
                <td><?php print($row['tempat_lahir'].", " .tgl_indo($row['tgl_lahir'])); ?></td> 
                <td><?php print($row['jenis_kelamin']); ?></td>
                <td><?php print($row['jabatan']); ?></td>
                <td><?php print($row['unit_kerja']); ?></td>
                <td><div align="center">
                <?php echo "                
                <a href='javascript:void(0)' onclick=\"editData('$row[id_pegawai]')\" ><i class='icon-trash icon-pencil bigger-130'></i></i> </a>
                <a href='javascript:void(0)' onclick=\"deleteData('$row[id_pegawai]','$row[nama_pegawai]')\" ><i class='icon-trash icon-red bigger-130'></i></i> </a>
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
           		<td colspan="9"><strong>Tidak ada data...!!</strong></td>
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
	                <td><?php print($row['nip']); ?></td>
	                <td><?php print($row['nomor_karpeg']); ?></td>
	                <td><?php print($row['nama_pegawai']); ?></td>
	                <td><?php print($row['tempat_lahir'].", " .tgl_indo($row['tgl_lahir'])); ?></td>
	                <td><?php print($row['jenis_kelamin']); ?></td>
	                <td><?php print($row['jabatan']); ?></td>
	                <td><?php print($row['unit_kerja']); ?></td>	                
                </tr>
                <?php
                $no++;
			} 
		}
		else
		{
			?>
            <tr>
           		<td colspan="8"><strong>Tidak ada data...!!</strong></td>
            </tr>
            <?php
		}		
	}
	
}
