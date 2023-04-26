<?php
    include("database/koneksi.php");
   
    function createuser($nama, $email, $username, $passkey){
        $iduser = md5($username);
        $stt = false;
        $sql = "INSERT INTO tbuser(nama, email, username, passkey, iduser) 
        VALUES(
            '$nama',
            '$email',
            '$username',
            '$passkey',
            '$iduser',
        );";
        $cnn = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME,DBPORT) or die("koneksi ke DBMS Mysql GAGAL BLOK");
        $stt = mysqli_query($cnn , $sql);
        return $stt;

    }
