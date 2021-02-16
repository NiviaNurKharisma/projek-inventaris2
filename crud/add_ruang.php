<?php
include ('connection.php');

$submit = isset($_POST["ruang_submit"])?$_POST["ruang_submit"]:"";
if($submit){
    $sql = "
        INSERT INTO ruang VALUES(
            NULL,
            '".$_POST["nama_ruang"]."',
            '".$_POST["kode_ruang"]."',
            '".$_POST["keterangan"]."'
        );
    ";
    $result = $db->query($sql); // Execute Query SQL
    
    if($result){
        echo "
            <script>
                alert('Data succesfully added !');
                window.location = 'ruang.php';
            </script>
        ";
    }else{
        echo "
            <script>
                alert('Data failed added !');
                window.location = 'ruang.php';
            </script>
        ";
    }
        
}

?>
<div class="container">
    <br><br>
<h1>Tambah Ruang</h1>

<form action="" method="POST">

    <div class="form-group">
    <label>Nama Jenis</label><br>
        <select name="nama_ruang" required="required" class="form-control">
            <option value="">- Pilih Ruang -</option>
            <option value="Kelas">Kelas</option>
            <option value="Guru">Guru</option>
            <option value="TU">TU</option>
            <option value="Lab">Lab</option>
            <option value="Perpustakaan">Perpustakaan</option>
            <option value="-">Lainnya</option>
        </select><br>
    </div>

    <div class="form-group">
        <label>Kode Ruang</label><br>
        <input class= "form-control" type="text" name="kode_ruang" required="required" /><br>
    </div>

    <div class="form-group">
        <label>Keterangan</label><br>
        <input class= "form-control" type="text" name="keterangan" required="required" /><br>
    </div>
    <br>
    <input type="submit" name="ruang_submit" value="Save" class = 'btn btn-success btn-sm'/>

</form>
</div>
