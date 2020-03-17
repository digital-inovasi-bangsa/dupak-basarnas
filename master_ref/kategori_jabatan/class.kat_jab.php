<?php

class kat_jab
{
	private $db;
	
	function __construct($pdo)
	{
		$this->db = $pdo;
	}
	
	public function create($kat_jab,$created_by)
	{
		try
		{
			$query = $this->db->prepare("INSERT INTO kat_jab(kat_jab,created_by) VALUES (:kat_jab, :created_by)");			
			$query -> bindparam(":kat_jab",$kat_jab);
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
		$query = $this->db->prepare("SELECT * FROM kat_jab WHERE id_kat_jab=:id_kat_jab");
		$query->execute(array(":id_kat_jab"=>$id));
		$editRow=$query->fetch(PDO::FETCH_ASSOC);
		return $editRow;
	}
	
	public function update($id_kat_jab,$kat_jab,$update_by)
	{
		try
		{
			$query=$this->db->prepare("UPDATE kat_jab SET 	kat_jab			= :kat_jab,
															update_by 		= :updated_by
													WHERE 	id_kat_jab		= :id_kat_jab ");
			$query -> bindparam(":id_kat_jab",$id_kat_jab);
			$query -> bindparam(":kat_jab",$kat_jab);
			$query -> bindparam(":updated_by",$update_by);
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
			$query = $this->db->prepare("DELETE FROM kat_jab WHERE id_kat_jab=:id_kat_jab");
			$query->bindparam(":id_kat_jab",$id);
			$query->execute();
			echo "
			<div class='alert alert-success'>
			<button type='button' class='close' data-dismiss='alert'>&times;</button>
			Data Berhasil Di Hapus
			</div>
			<strong><a href='javascript:void(0)' onclick='kat_jab()'> <i class='icon-backward'></i> Kembali</a></strong>";
			return true;
		}catch(PDOException $e){
			echo "
			<div class='alert alert-error'>
			<button type='button' class='close' data-dismiss='alert'>&times;</button>
			Data Tidak Bisa di Hapus Karena Sudah Di pakai !
			</div>
			<strong><a href='javascript:void(0)' onclick='kat_jab()'> <i class='icon-backward'></i> Kembali</a></strong>";
			return false;
		}
	}

	public function select($query){
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
                <td><?php print($row['kat_jab']); ?></td>
                <td><div align="center">
                <?php echo "                
                <a href='javascript:void(0)' onclick=\"editData('$row[id_kat_jab]')\" ><i class='icon-trash icon-pencil bigger-130'></i></i> </a>
                <a href='javascript:void(0)' onclick=\"deleteData('$row[id_kat_jab]','$row[kat_jab]')\" ><i class='icon-trash icon-red bigger-130'></i></i> </a>
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
	                <td><?php print($row['kat_jab']); ?></td>
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
