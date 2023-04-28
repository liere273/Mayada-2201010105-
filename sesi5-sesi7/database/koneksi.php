<?php
    include("konfigurasi.php");

    $cnn = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME,DBPORT) or die("koneksi ke DBMS Mysql GAGAL BLOK");
    /*
    if($cnn){
        echo "koneksi ke DBMS Mysql Berhasil";
    }
    else{
        echo "koneksi ke DBMS Mysql GAGAL BLOK";
    }
    
    mysqli_close($cnn);
    */