<?php

class jabatan
{
	private $db;
	
	function __construct($pdo)
	{
		$this->db = $pdo;
	}
	
	public function create($id_kat_jab,$jabatan,$created_by)
	{
		try
		{
			$query = $this->db->prepare("INSERT INTO jabatan(id_kat_jab,jabatan,created_by) VALUES (:id_kat_jab, :jabatan, :created_by)");			
			$query -> bindparam(":jabatan",$jabatan);
			$query -> bindparam(":id_kat_jab",$id_kat_jab);
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
		$query = $this->db->prepare("SELECT * FROM v_jab_katjab WHERE id_jabatan=:id_jabatan");
		$query->execute(array(":id_jabatan"=>$id));
		$editRow=$query->fetch(PDO::FETCH_ASSOC);
		return $editRow;
	}
	
	public function update($id_jabatan,$id_kat_jab,$jabatan,$update_by)
	{
		try
		{
			$query=$this->db->prepare("UPDATE jabatan SET 	id_kat_jab 		= :id_kat_jab,
															jabatan			= :jabatan,
															update_by 		= :updated_by
													WHERE 	id_jabatan		= :id_jabatan ");
			$query -> bindparam(":id_kat_jab",$id_kat_jab);
			$query -> bindparam(":jabatan",$jabatan);
			$query -> bindparam(":updated_by",$update_by);
			$query -> bindparam(":id_jabatan",$id_jabatan);
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
			$query = $this->db->prepare("DELETE FROM jabatan WHERE id_jabatan=:id_jabatan");
			$query->bindparam(":id_jabatan",$id);
			$query->execute();
			echo "
			<div class='alert alert-success'>
			<button type='button' class='close' data-dismiss='alert'>&times;</button>
			Data Berhasil Di Hapus
			</div>
			<strong><a href='javascript:void(0)' onclick='jabatan()'> <i class='icon-backward'></i> Kembali</a></strong>";
			return true;
		}catch(PDOException $e){
			echo "
			<div class='alert alert-error'>
			<button type='button' class='close' data-dismiss='alert'>&times;</button>
			Data Tidak Bisa di Hapus Karena Sudah Di pakai !
			</div>
			<strong><a href='javascript:void(0)' onclick='jabatan()'> <i class='icon-backward'></i> Kembali</a></strong>";
			return false;
		}
	}

	public function select($query){
		$query = $this->db->prepare($query);
		$query->execute();
		while($row=$query->fetch(PDO::FETCH_ASSOC)){
			echo "<option value='$row[id_jabatan]'>$row[jabatan]</option>";
		}
		
	}
	public function select_kat_jab($query){
		$query = $this->db->prepare($query);
		$query->execute();
		while($row=$query->fetch(PDO::FETCH_ASSOC)){
			echo "<option value='$row[id_kat_jab]'>$row[kat_jab]</option>";
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
                <td><div align="center" width="50px"><?php print($row['kat_jab']); ?></div></td>
                <td><?php print($row['jabatan']); ?></td>
                <td><div align="center">
                <?php echo "                
                <a href='javascript:void(0)' onclick=\"editData('$row[id_jabatan]')\" ><i class='icon-trash icon-pencil bigger-130'></i></i> </a>
                <a href='javascript:void(0)' onclick=\"deleteData('$row[id_jabatan]','$row[jabatan]')\" ><i class='icon-trash icon-red bigger-130'></i></i> </a>
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
           		<td colspan="4"><strong>Tidak ada data...!!</strong></td>
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
	                <td align="center"><div align="center" width="50px"><?php print($row['id_jabatan']); ?></div></td>
	                <td><?php print($row['jabatan']); ?></td>
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
