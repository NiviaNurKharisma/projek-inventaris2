<?php
include ('connection.php');

$submit = isset($_POST["jenis_submit"])?$_POST["jenis_submit"]:"";
if($submit){
    $sql = "
        INSERT INTO jenis VALUES(
            NULL,
            '".$_POST["nama_jenis"]."',
            '".$_POST["kode_jenis"]."',
            '".$_POST["keterangan"]."'
        );
    ";
    $result = $db->query($sql); // Execute Query SQL
    
    if($result){
        echo "
            <script>
                alert('Data succesfully added !');
                window.location = 'jenis.php';
            </script>
        ";
    }else{
        echo "
            <script>
                alert('Data failed added !');
                window.location = 'jenis.php';
            </script>
        ";
    }
        
}

?>
<div class="container">
    <br><br>
<h1>Tambah Jenis</h1>

<form action="" method="POST">

    <div class="form-group">
    <label>Nama Jenis</label><br>
        <select name="nama_jenis" required="required" class="form-control">
            <option value="">- Pilih Jenis -</option>
            <option value="Furniture">Furniture</option>
            <option value="Buku">Buku</option>
            <option value="Hiasan">Hiasan</option>
            <option value="Kendaraan">Kendaraan</option>
            <option value="Alat">Alat</option>
        </select><br>
    </div>

    <div class="form-group">
        <label>Kode Jenis</label><br>
        <input class= "form-control" type="text" name="kode_jenis" required="required" /><br>
    </div>

    <div class="form-group">
        <label>Keterangan</label><br>
        <input class= "form-control" type="text" name="keterangan" required="required" /><br>
    </div>
    <br>
    <input type="submit" name="jenis_submit" value="Save" class = 'btn btn-success btn-sm'/>

</form>
</div>
