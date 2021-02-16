<?php

include 'connection.php';

$id = $_GET["id"];

$sql = "SELECT * FROM jenis WHERE id_jenis = '".$id."';";
$result = mysqli_query($db,$sql);

$row = mysqli_fetch_assoc($result);
mysqli_free_result($result);

 $submit = isset($_POST['jenis_submit'])?$_POST["jenis_submit"]:"";
	if ($submit) {
		$nama_jenis = $_POST["nama_jenis"];
		$kode_jenis = $_POST["kode_jenis"];
		$keterangan = $_POST["keterangan"];

	 	$sql ="
	 	   UPDATE jenis SET 
	 	   nama_jenis = '".$nama_jenis."',
	 	   kode_jenis = '".$kode_jenis."',
	 	   keterangan = '".$keterangan."'
	 	   WHERE id_jenis = '".$id."'
	 	   ;";
	 	$result = $db->query($sql);
	 	if($result){
	 		echo "
	 		<script>
	 			alert('Data succesfully changed!');
	 			window.location = 'jenis.php';
	 		</script>
	 		";
	 	}
	 	else{
	 		echo $sql;
	 		//echo "
	 		//<script>
	 	    //alert('Data failed changed!');
	 		//window.location = 'jenis.php';
	 		//</script>
	 		//";
	 	}
	}
?>
<div class="container">
<h1>Edit Jenis</h1>

<form action="" method="POST">
<div class="form-group">
<?php
		if($row['nama_jenis'] == "Furniture"){
			echo "
			<input type='radio' name='nama_jenis' value=Furniture checked> Furniture<br>
			<input type='radio' name='nama_jenis' value='Buku'> Buku<br>
            <input type='radio' name='nama_jenis' value='Hiasan'> Hiasan<br>
            <input type='radio' name='nama_jenis' value='Kendaraan'> Kendaraan<br>
            <input type='radio' name='nama_jenis' value='Alat'> Alat
			";
		}elseif($row['nama_jenis'] == "Buku"){
			echo "
			<input type='radio' name='nama_jenis' value=Furniture> Furniture<br>
			<input type='radio' name='nama_jenis' value='Buku checked'> Buku<br>
            <input type='radio' name='nama_jenis' value='Hiasan'> Hiasan<br>
            <input type='radio' name='nama_jenis' value='Kendaraan'> Kendaraan<br>
            <input type='radio' name='nama_jenis' value='Alat'> Alat
			";
		}elseif($row['nama_jenis'] == "Hiasan"){
			echo "
			<input type='radio' name='nama_jenis' value=Furniture> Furniture<br>
			<input type='radio' name='nama_jenis' value='Buku'> Buku<br>
            <input type='radio' name='nama_jenis' value='Hiasan checked'> Hiasan<br>
            <input type='radio' name='nama_jenis' value='Kendaraan'> Kendaraan<br>
            <input type='radio' name='nama_jenis' value='Alat'> Alat
			";
		}elseif($row['nama_jenis'] == "Kendaraan"){
			echo "
			<input type='radio' name='nama_jenis' value=Furniture> Furniture<br>
			<input type='radio' name='nama_jenis' value='Buku'> Buku<br>
            <input type='radio' name='nama_jenis' value='Hiasan'> Hiasan<br>
            <input type='radio' name='nama_jenis' value='Kendaraan checked'> Kendaraan<br>
            <input type='radio' name='nama_jenis' value='Alat'> Alat
			";
		}elseif($row['nama_jenis'] == "Alat"){
			echo "
			<input type='radio' name='nama_jenis' value=Furniture> Furniture<br>
			<input type='radio' name='nama_jenis' value='Buku'> Buku<br>
            <input type='radio' name='nama_jenis' value='Hiasan'> Hiasan<br>
            <input type='radio' name='nama_jenis' value='Kendaraan'> Kendaraan<br>
            <input type='radio' name='nama_jenis' value='Alat checked'> Alat
			";
		}
	?>
</div>

<div class="form-group">
	<label>Kode Jenis</label><br>
	<input class= "form-control" type="text" name="kode_jenis" required="required" value="<?= $row['kode_jenis'] ?>" />
</div>

<div class="form-group">
	<label>keterangan</label><br>
	<input class= "form-control" type="text" name="keterangan" required="required" value="<?= $row['keterangan'] ?>"><br>
</div>

<input type="submit" name="jenis_submit" value="Edit" class = 'btn btn-success btn-sm'>
</form>
</div>