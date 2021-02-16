<?php

include 'connection.php';

$id = $_GET["id"];

$sql = "SELECT * FROM inven WHERE id_inventaris = '".$id."';";
$result = mysqli_query($db,$sql);

$row = mysqli_fetch_assoc($result);
mysqli_free_result($result);

 $submit = isset($_POST['inven_submit'])?$_POST["inven_submit"]:"";
	if ($submit) {
		$nama = $_POST["nama"];
		$kondisi = $_POST["kondisi"];
		$keterangan = $_POST["keterangan"];
		$jumlah = $_POST["jumlah"];
		$id_jenis = $_POST["id_jenis"];
		$id_ruang = $_POST["id_ruang"];
        $kode_inventaris = $_POST["kode_inventaris"];
        $id_petugas = $_POST["id_petugas"];

	 	$sql ="
	 	   UPDATE inven SET 
	 	   nama = '".$nama."',
	 	   kondisi = '".$kondisi."',
	 	   keterangan = '".$keterangan."',
	 	   jumlah = '".$jumlah."',
	 	   id_jenis = '".$id_jenis."',
	 	   id_ruang = '".$id_ruang."',
	 	   kode_inventaris = '".$kode_inventaris."', 
           id_petugas = '".$id_petugas."', 
	 	   tanggal_register = '".$row["tanggal_register"]."'
	 	   WHERE id_inventaris = '". $id ."'
	 	   ;";
	 	$result = $db->query($sql);
	 	if($result){
	 		echo "
	 		<script>
	 			alert('Data succesfully changed!');
	 			window.location = 'inven.php';
	 		</script>
	 		";
	 	}
	 	else{
	 		echo $sql;
	 		 echo "
	 		 <script>
	 			alert('Data failed changed!');
	 		</script>
	 		 ";
	 	}
	}
?>
<div class="container">
<h1>Edit Siswa XI RPL 1</h1>

<form action="" method="POST">
<div class="form-group">
	<label>NAMA</label><br>
	<input class= "form-control" type="text" name="nama" required="required" value="<?= $row['nama'] ?>"/>
</div>

<div class="form-group">
	<label>KONDISI</label><br>
	<input class= "form-control" type="text" name="kondisi" required="required" value="<?= $row['kondisi'] ?>" />
</div>

<div class="form-group">
	<label>KETERANGAN</label><br>
	<input class= "form-control" type="text" name="keterangan" required="required" value="<?= $row['keterangan'] ?>" />
</div>

<div class="form-group">
	<label>JUMLAH</label><br>
	<input class= "form-control" type="text" name="jumlah" required="required" value="<?= $row['jumlah'] ?>" />
</div>


<div class="form-group">
        <label>ID JENIS</label><br>
        <td>: <select name="id_jenis" >
        <?php
             $sql="SELECT * FROM jenis";
             $result=$db->query($sql);
             while($row=$result->fetch_assoc())
             {
                echo "<option value='$row[id_jenis]'> $row[nama_jenis] </option>";
            }
         ?>
        </select>
        </td>
    </div>

	<div class="form-group">
        <label>ID RUANG</label><br>
        <td>: <select name="id_ruang" >
        <?php
             $sql="SELECT * FROM ruang";
             $result=$db->query($sql);
             while($row=$result->fetch_assoc())
             {
                echo "<option value='$row[id_ruang]'> $row[nama_ruang] </option>";
            }
         ?>
        </select>
        </td>
    </div>

<div class="form-group">
	<label>KODE INVENTARIS</label><br>
	<input class= "form-control" type="text" name="kode_inventaris" required="required" value="<?= $row['kode_inventaris'] ?>"><br>
</div>

<div class="form-group">
        <label>ID PETUGAS</label><br>
        <td>: <select name="id_petugas" >
        <?php
             $sql="SELECT * FROM petugas";
             $result=$db->query($sql);
             while($row=$result->fetch_assoc())
             {
                echo "<option value='$row[id_petugas]'> $row[nama_petugas] </option>";
            }
         ?>
        </select>
        </td>
    </div>

<input type="submit" name="inven_submit" value="Edit" class = 'btn btn-success btn-sm'>
</form>
</div>