<?php
 include ('connection.php'); 
 ?>
 <div class="container">
<h1>Ruang</h1>

<a href="add_ruang.php" class="btn btn-primary">(+) Tambah Data Ruang</a> <br><br>
<table id="inventaris" class="table table-bordered table-striped table-hover">

    <thead>
        <tr>
            <th>NO</th>
            <th>NAMA RUANG</th>
            <th>KODE RUANG</th>
            <th>KETERANGAN</th>
            <th width="138px">AKSI</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT * FROM ruang ORDER BY nama_ruang ASC"; //Query SQL
        $result = $db->query($sql); //Execute Query SQL
        $no = 1;
        while($row = $result->fetch_assoc() ) //menampilkan bentuk array
        {
            echo "
            <tr>
                <td>".$no."</td>
                <td>".$row["nama_ruang"]."</td>
                <td>".$row["kode_ruang"]."</td>
                <td>".$row["keterangan"]."</td>
                <td>
                    <a href= 'edit_ruang.php?id=".$row["id_ruang"].
                    "'class = 'btn btn-success btn-sm'>Edit</a>
                    |
                    <a href= 'delete_ruang.php?id=".$row["id_ruang"]."'
                    onclick='return confirm (\"Are you sure want to delete?\");'
                    class = 'btn btn-danger btn-sm'>Delete</a>
                </td>
            </tr>
            "; 
            $no++;   

        }
        ?>
     </tbody>
</table>
</div>