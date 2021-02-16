<?php
 include ('connection.php'); 
 ?>
 <div class="container">
<h1>Jenis</h1>

<a href="add_jenis.php" class="btn btn-primary">(+) Tambah Data Jenis</a> <br><br>
<table id="inventaris" class="table table-bordered table-striped table-hover">

    <thead>
        <tr>
            <th>NO</th>
            <th>NAMA JENIS</th>
            <th>KODE JENIS</th>
            <th>KETERANGAN</th>
            <th width="138px">AKSI</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT * FROM jenis ORDER BY nama_jenis ASC"; //Query SQL
        $result = $db->query($sql); //Execute Query SQL
        $no = 1;
        while($row = $result->fetch_assoc() ) //menampilkan bentuk array
        {
            echo "
            <tr>
                <td>".$no."</td>
                <td>".$row["nama_jenis"]."</td>
                <td>".$row["kode_jenis"]."</td>
                <td>".$row["keterangan"]."</td>
                <td>
                    <a href= 'edit_jenis.php?id=".$row["id_jenis"].
                    "'class = 'btn btn-success btn-sm'>Edit</a>
                    |
                    <a href= 'delete_jenis.php?id=".$row["id_jenis"]."'
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