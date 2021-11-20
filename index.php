<?php
    $koneksi = new mysqli("localhost","root","","sistem_sekolah");

    if($koneksi->connect_error){
        echo "Koneksi database gagal";
    } else{
        echo "Koneksi database berhasil";
        $query = "SELECT * FROM mahasiswa";
        $hasil = $koneksi -> query($query);
        
        if($hasil -> num_rows > 0){
            while($row = $hasil -> fetch_assoc()){
                echo $row["nama"]. "<br>";
            }
        }


    }