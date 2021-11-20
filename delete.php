<?php
    $koneksi = new mysqli("localhost","root","","sistem_sekolah");

    $id_data = $_GET['id'];
    $query = "DELETE FROM mahasiswa WHERE id=". $id_data;
    
    if($koneksi -> query($query) === true){
        header('Location: read.php');
    } else{
        echo "Penghapusan Data GAGAL". $koneksi -> error;
    }