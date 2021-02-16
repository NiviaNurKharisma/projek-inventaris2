<?php

include 'connection.php';

$id = $_GET["id"];

$sql = "SELECT * FROM ruang WHERE id_ruang = '".$id."';";
$result = mysqli_query($db,$sql);

$row = mysqli_fetch_assoc($result);
mysqli_free_result($result);

 $submit = isset($_POST['ruang_submit'])?$_POST["ruang_submit"]:"";
	if ($submit) {
		$nama_ruang = $_POST["nama_ruang"];
		$kode_ruang = $_POST["kode_ruang"];
		$keterangan = $_POST["keterangan"];

	 	$sql ="
	 	   UPDATE ruang SET 
	 	   nama_ruang = '".$nama_ruang."',
	 	   kode_ruang = '".$kode_ruang."',
	 	   keterangan = '".$keterangan."'
	 	   WHERE id_ruang = '".$id."'
	 	   ;";
	 	$result = $db->query($sql);
	 	if($result){
	 		echo "
	 		<script>
	 			alert('Data succesfully changed!');
	 			window.location = 'ruang.php';
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
<h1>Edit Ruang</h1>

<form action="" method="POST">
<div class="form-group">
<?php
		if($row['nama_ruang'] == "Kelas"){
			echo "
			<input type='radio' name='nama_ruang' value=Kelas checked> Kelas<br>
			<input type='radio' name='nama_ruang' value='Guru'> Guru<br>
            <input type='radio' name='nama_ruang' value='TU'> TU<br>
            <input type='radio' name='nama_ruang' value='Lab'> Lab<br>
            <input type='radio' name='nama_ruang' value='Perpustakaan'> Perpustakaan<br>
            <input type='radio' name='nama_ruang' value='-'> Lainnya
			";
		}elseif($row['nama_ruang'] == "Guru"){
			echo "
			<input type='radio' name='nama_ruang' value=Kelas > Kelas<br>
			<input type='radio' name='nama_ruang' value='Guru checked'> Guru<br>
            <input type='radio' name='nama_ruang' value='TU'> TU<br>
            <input type='radio' name='nama_ruang' value='Lab'> Lab<br>
            <input type='radio' name='nama_ruang' value='Perpustakaan'> Perpustakaan<br>
            <input type='radio' name='nama_ruang' value='-'> Lainnya
			";
		}elseif($row['nama_ruang'] == "TU"){
			echo "
            <input type='radio' name='nama_ruang' value=Kelas> Kelas<br>
			<input type='radio' name='nama_ruang' value='Guru'> Guru<br>
            <input type='radio' name='nama_ruang' value='TU checked'> TU<br>
            <input type='radio' name='nama_ruang' value='Lab'> Lab<br>
            <input type='radio' name='nama_ruang' value='Perpustakaan'> Perpustakaan<br>
            <input type='radio' name='nama_ruang' value='-'> Lainnya
			";
		}elseif($row['nama_ruang'] == "Lab"){
			echo "
            <input type='radio' name='nama_ruang' value=Kelas> Kelas<br>
			<input type='radio' name='nama_ruang' value='Guru'> Guru<br>
            <input type='radio' name='nama_ruang' value='TU'> TU<br>
            <input type='radio' name='nama_ruang' value='Lab checked'> Lab<br>
            <input type='radio' name='nama_ruang' value='Perpustakaan'> Perpustakaan<br>
            <input type='radio' name='nama_ruang' value='-'> Lainnya
			";
		}elseif($row['nama_ruang'] == "Perpustakaan"){
			echo "
            <input type='radio' name='nama_ruang' value=Kelas> Kelas<br>
			<input type='radio' name='nama_ruang' value='Guru'> Guru<br>
            <input type='radio' name='nama_ruang' value='TU'> TU<br>
            <input type='radio' name='nama_ruang' value='Lab'> Lab<br>
            <input type='radio' name='nama_ruang' value='Perpustakaan checked'> Perpustakaan<br>
            <input type='radio' name='nama_ruang' value='-'> Lainnya
			";
		}elseif($row['nama_ruang'] == "-"){
			echo "
            <input type='radio' name='nama_ruang' value=Kelas> Kelas<br>
			<input type='radio' name='nama_ruang' value='Guru'> Guru<br>
            <input type='radio' name='nama_ruang' value='TU'> TU<br>
            <input type='radio' name='nama_ruang' value='Lab'> Lab<br>
            <input type='radio' name='nama_ruang' value='Perpustakaan'> Perpustakaan<br>
            <input type='radio' name='nama_ruang' value='- checked'> Lainnya
			";
		}
	?>
</div>

<div class="form-group">
	<label>Kode Ruang</label><br>
	<input class= "form-control" type="text" name="kode_ruang" required="required" value="<?= $row['kode_ruang'] ?>" />
</div>

<div class="form-group">
	<label>keterangan</label><br>
	<input class= "form-control" type="text" name="keterangan" required="required" value="<?= $row['keterangan'] ?>"><br>
</div>

<input type="submit" name="ruang_submit" value="Edit" class = 'btn btn-success btn-sm'>
</form>
</div>