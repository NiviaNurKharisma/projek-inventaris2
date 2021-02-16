<?php
include ('connection.php');

$submit = isset($_POST["inven_submit"])?$_POST["inven_submit"]:"";
if($submit){
    $sql = "
        INSERT INTO inven  VALUES(
            NULL,
            '".$_POST["nama"]."',
            '".$_POST["kondisi"]."',
            '".$_POST["keterangan"]."',
            '".$_POST["jumlah"]."',
            '".$_POST["id_jenis"]."',
            '".$_POST["id_ruang"]."',
            '".$_POST["kode_inventaris"]."',
            '".$_POST["id_petugas"]."',
            NOW()
        );
    ";
    $result = $db->query($sql); // Execute Query SQL
    
    if($result){
        echo "
            <script>
                alert('Data succesfully added !');
                window.location = 'inven.php';
            </script>
        ";
    }else{
        echo "
            <script>
                alert('Data gagal ditambahkan !');
                window.location = 'inven.php';
            </script>
        ";
    }
        
}

?>
<div class="container">
<h1>Tambah Data Barang SMK Negeri 1 Subang</h1>

<form action="" method="POST">
    <div class="form-group">
        <label>NAMA BARANG</label><br>
        <input class= "form-control" type="text" name="nama" required="required" /><br>
    </div>

    <div class="form-group">
        <label>KONDISI</label><br>
        <input class= "form-control" type="text" name="kondisi" required="required" /><br>
    </div>

    <div class="form-group">
        <label>KETERANGAN</label><br>
        <input class= "form-control" type="text" name="keterangan" required="required" /><br>
    </div>

    <div class="form-group">
        <label>JUMLAH</label><br>
        <input class= "form-control" type="text" name="jumlah" required="required" /><br>
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
        <input class= "form-control" type="text" name="kode_inventaris" required="required" /><br>
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
    <br>
    <input type="submit" name="inven_submit" value="Simpan" class = 'btn btn-success btn-sm'/>

</form>
</div>
