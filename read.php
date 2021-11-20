<html>
    <head>
        <title>Mahasiswa Universitas Tadika Mesra</title>
        <style>
            table{border: 3px solid black}
            td{border: 1px solid black}
        </style>
    </head>
    <body>
        <?php
            $koneksi = new mysqli("localhost","root","","sistem_sekolah");
        ?>

    <b>Daftar Mahasiswa Tadika Mesra</b><br>
    <a href="create.php">Tambah</a>
    <table>
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>NIM</td>
            <td>Makanan Favorit</td>
            <td>tanggal Lahir</td>
            <td>Aksi</td>
            <td>Aksi</td>
        </tr>
        <?php
            $query = "SELECT * FROM mahasiswa";
            $hasil = $koneksi -> query($query);
            $nomor = 1;
            
            if($hasil -> num_rows > 0){
                while($row = $hasil -> fetch_assoc()){
                    echo "<tr>";
                    echo "<td>". $nomor++. "</td>";
                    echo "<td>". $row['nama']. "</td>";
                    echo "<td>". $row['nim']. "</td>";
                    echo "<td>". $row['makanan_favorit']. "</td>";
                    echo "<td>". $row['tanggal_lahir']. "</td>";
                    echo "<td><a href='delete.php?id=". $row['id']. "'>Delete</a></td>";
                    echo "<td><a href='update.php?id=". $row['id']. "'>Update</a></td>";
                    echo "</tr>";
                }
            } else{
                echo "<tr><td> Tidak ada data yang akan ditampilkan </td></tr>";
            }
        ?>
    </table>
    </body>
</html>