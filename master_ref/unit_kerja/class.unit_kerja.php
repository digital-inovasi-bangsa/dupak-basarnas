<?php

class unit_kerja
{
	private $db;
	
	function __construct($pdo)
	{
		$this->db = $pdo;
	}
	
	public function create($unit_kerja,$alamat_unit_kerja,$keterangan,$aktif,$created_by)
	{
		try
		{
			$query = $this->db->prepare("INSERT INTO unit_kerja(unit_kerja,alamat_unit_kerja,keterangan,aktif,created_by) VALUES (:unit_kerja, :alamat_unit_kerja, :keterangan, :aktif, :created_by)");			
			$query -> bindparam(":unit_kerja",$unit_kerja);
			$query -> bindparam(":alamat_unit_kerja",$alamat_unit_kerja);
			$query -> bindparam(":keterangan",$keterangan);
			$query -> bindparam(":aktif",$aktif);
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
		$query = $this->db->prepare("SELECT * FROM unit_kerja WHERE id_unit_kerja=:id_unit_kerja");
		$query->execute(array(":id_unit_kerja"=>$id));
		$editRow=$query->fetch(PDO::FETCH_ASSOC);
		return $editRow;
	}
	
	public function update($id_unit_kerja,$unit_kerja,$alamat_unit_kerja,$keterangan,$aktif,$update_by)
	{
		try
		{
			$query=$this->db->prepare("UPDATE unit_kerja SET 	unit_kerja 			= :unit_kerja,
																alamat_unit_kerja	= :alamat_unit_kerja,
																keterangan 			= :keterangan,
																aktif 				= :aktif,
													   			update_by 			= :updated_by
														WHERE	id_unit_kerja		= :id_unit_kerja ");
			$query -> bindparam(":unit_kerja",$unit_kerja);
			$query -> bindparam(":alamat_unit_kerja",$alamat_unit_kerja);
			$query -> bindparam(":keterangan",$keterangan);
			$query -> bindparam(":aktif",$aktif);
			$query -> bindparam(":updated_by",$update_by);
			$query -> bindparam(":id_unit_kerja",$id_unit_kerja);
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
			$query = $this->db->prepare("DELETE FROM unit_kerja WHERE id_unit_kerja=:id_unit_kerja");
			$query->bindparam(":id_unit_kerja",$id);
			$query->execute();
			echo "
			<div class='alert alert-success'>
			<button type='button' class='close' data-dismiss='alert'>&times;</button>
			Data Berhasil Di Hapus
			</div>
			<strong><a href='javascript:void(0)' onclick='unit_kerja()'> <i class='icon-backward'></i> Kembali</a></strong>";
			return true;
		}catch(PDOException $e){
			echo "
			<div class='alert alert-error'>
			<button type='button' class='close' data-dismiss='alert'>&times;</button>
			Data Tidak Bisa di Hapus Karena Sudah Di pakai !
			</div>
			<strong><a href='javascript:void(0)' onclick='unit_kerja()'> <i class='icon-backward'></i> Kembali</a></strong>";
			return false;
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
                <td><div align="center" width="50px"><?php print($row['id_unit_kerja']); ?></div></td>
                <td><?php print($row['unit_kerja']); ?></td>
                <td><?php print($row['alamat_unit_kerja']); ?></td>
                 <td><?php print($row['keterangan']); ?></td>
                <td><div align="center"><?php print($row['aktif']); ?></div></td>
                <td><div align="center">
                <?php echo "                
                <a href='javascript:void(0)' onclick=\"editData('$row[id_unit_kerja]')\" ><i class='icon-trash icon-pencil bigger-130'></i></i> </a>
                <a href='javascript:void(0)' onclick=\"deleteData('$row[id_unit_kerja]','$row[alamat_unit_kerja]')\" ><i class='icon-trash icon-red bigger-130'></i></i> </a>
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
           		<th colspan="7"><strong>Tidak ada data...!!</strong></th>
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
	                <td align="center"><div align="center" width="50px"><?php print($row['id_unit_kerja']); ?></div></td>
	                <td><?php print($row['unit_kerja']); ?></td>
	                <td><?php print($row['alamat_unit_kerja']); ?></td>
	                <td><?php print($row['keterangan']); ?></td>
	                <td align="center"><div align="center" width="50px"><?php print($row['aktif']); ?></div></td>
                </tr>
                <?php
                $no++;
			} 
		}
		else
		{
			?>
            <tr>
           		<td colspan="6"><strong>Tidak ada data...!!</strong></td>
            </tr>
            <?php
		}		
	}
	
}
