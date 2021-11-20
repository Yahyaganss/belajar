<html>
    <head>
        <title>Update Mahasiswa Universitas Tadika Mesra</title>
    </head>
    
    <body>
    <?php
            $koneksi = new mysqli("localhost","root","","sistem_sekolah");
            $id_data = $_GET['id'];
            $query_read = "SELECT * FROM mahasiswa WHERE id=". $id_data;
            $hasil = $koneksi -> query($query_read);
            $data = '';

            if($hasil -> num_rows > 0){
                $data = $hasil -> fetch_assoc();
            }
    ?>
    
    <b>Form Update Mahasiswa Universitas Tadika Mesra</b>
    <br>
    <form action="" method="POST">
        Nama            : <input type="text" id="nama" name="nama" value="<?php echo $data['nama']; ?>"><br>
        NIM             : <input type="text" id="nim" name="nim" value="<?php echo $data['nim']; ?>"><br>
        Makanan Favorit : <input type="text" id="makananFavorit" name="makananFavorit" value="<?php echo $data['makanan_favorit']; ?>"><br>
        Tanggal Lahir   : <input type="text" id="tanggalLahir" name="tanggalLahir" value="<?php echo $data['tanggal_lahir']; ?>"><br>
        <button type="submit">Simpan</button>
    </form>
    
    <?php
        if(count($_POST) > 1){
            // var_dump($_POST);
            $query = "UPDATE mahasiswa SET
                nama= '". $_POST['nama']. "',
                nim= '". $_POST['nim']. "',
                makanan_favorit= '". $_POST['makananFavorit']. "',
                tanggal_lahir= '". $_POST['tanggalLahir']. "'
                WHERE id=". $id_data; 

            if($koneksi -> query($query) === true){
                header('Location: read.php');
            } else{
                echo "Penambahan Data GAGAL". "<br>". $koneksi->error;
            }
        }
    ?>

    </body>
</html>