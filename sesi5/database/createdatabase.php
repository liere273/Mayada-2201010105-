<?php
    include("../konfigurasi.php");

    $cnn = mysqli_connect(DBHOST,DBUSER,DBPASS,);
    if($cnn){
       $sql = "CREATE DATABASE " . DBNAME;
       $hsl = mysqli_query($cnn, $sql );
       if($hsl){
            echo "Database " . DBNAME . "Berhasil dibuat";
       }else{
            echo "koneksi ke DBMS Mysql GAGAL BLOK"; 
        }

       }
        else{
        echo "koneksi ke DBMS Mysql GAGAL BLOK";
    }
    mysqli_close($cnn);