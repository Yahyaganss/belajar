<html>
    <head>
        <title>Penambahan Mahasiswa Universitas Tadika Mesra</title>
    </head>
    
    <body>
    <?php
            $koneksi = new mysqli("localhost","root","","sistem_sekolah");
    ?>
    
    <b>Form Pendaftaran Mahasiswa Universitas Tadika Mesra</b>
    <br>
    <form action="" method="POST">
        Nama            : <input type="text" id="nama" name="nama"><br>
        NIM             : <input type="text" id="nim" name="nim"><br>
        Makanan Favorit : <input type="text" id="makananFavorit" name="makananFavorit"><br>
        Tanggal Lahir   : <input type="text" id="tanggalLahir" name="tanggalLahir"><br>
        <button type="submit">Simpan</button>
    </form>
    
    <?php
        if(count($_POST) > 1){
            // var_dump($_POST);
            $query = "INSERT INTO mahasiswa (nama, nim, makanan_favorit, tanggal_lahir) VALUES ('". 
                                            $_POST['nama']. "','". 
                                            $_POST['nim']. "','". 
                                            $_POST['makananFavorit']. "','". 
                                            $_POST['tanggalLahir']. "')" ;

            if($koneksi -> query($query) === true){
                header('Location: read.php');
            } else{
                echo "Penambahan Data GAGAL". "<br>". $koneksi->error;
            }
        }
    ?>

    </body>
</html>