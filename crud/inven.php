<?php
 include ('connection.php'); 
 ?>
 <div class="container">
<h1>Inventarisasi SMK Negeri 1 Subang</h1>

<a href="add_inven.php" class="btn btn-primary">(+) Tambah Data Barang</a> <br><br>
<table id="inven_table" class="table table-bordered table-striped table-hover">

    <thead>
        <tr>
            <th>NO</th>
            <th>NAMA BARANG</th>
            <th>KONDISI</th>
            <th>KETERANGAN</th>
            <th>JUMLAH</th>
            <th>ID JENIS</th>
            <th>ID RUANG</th>
            <th>KODE INVENTARIS</th>
            <th>ID PETUGAS</th>
            <th>TANGGAL REGISTER</th>
            <th width="138px">AKSI</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT * FROM inven 
        -- JOIN jenis ON inven.id_jenis = jenis.id_jenis 
        -- JOIN ruang ON inven.id_ruang = ruang.id_ruang 
        JOIN petugas ON inven.id_petugas= petugas.id_petugas
        "; //Query SQL
        $result = $db->query($sql); //Execute Query SQL
        $no = 1;
        while($row = $result->fetch_assoc() ) //menampilkan bentuk array
        {
            echo "
            <tr>
                <td>".$no."</td>
                <td>".$row["nama"]."</td>
                <td>".$row["kondisi"]."</td>
                <td>".$row["keterangan"]."</td>
                <td>".$row["jumlah"]."</td>
                <td>".$row["id_jenis"]."</td>
                <td>".$row["id_ruang"]."</td>
                <td>".$row["kode_inventaris"]."</td>
                <td>".$row["id_petugas"]."</td>
                <td>".$row["tanggal_register"]."</td>
                <td>
                    <a href= 'edit_inven.php?id=".$row["id_inventaris"].
                    "'class = 'btn btn-success btn-sm'>Edit</a>
                    |
                    <a href= 'delete_inven.php?id=".$row["id_inventaris"]."'
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