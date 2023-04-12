<?php
    include("koneksi.php");


    $tbel = "CREATE TABLE tbMHS(
        id INT AUTO_INCREMENT PRIMARY KEY,
        nama VARCHAR (35),
        nim VARCHAR (255),
        prodi VARCHAR (10),
        gender VARCHAR (255),
        tglahir DATE,
        idmhs VARCHAR (225)
    );";

    $hsl = mysqli_query($cnn , $tbel);
    if($hsl){
        echo "Tabel tbMHS ==> sukses";
    }