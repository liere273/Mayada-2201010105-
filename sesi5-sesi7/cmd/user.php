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
            '$iduser'
        );";
        $cnn = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME,DBPORT) or die("koneksi ke DBMS Mysql GAGAL BLOK");
        $stt = mysqli_query($cnn, $sql);
        return $stt;die();

    }
     function ceklogin($user, $pwd){
        global $cnn;
        $hsl["STATUS"] = false;

        $sql = "SELECT nama, email, username, passkey, iduser FROM tbuser WHERE username='$user';";
        $hs = mysqli_query($cnn, $sql);
        $jdata = mysqli_num_row($hs);
        if($jdata > 0){
            $h = mysqli_fetch_assoc($hs);
            if($h["passkey"] = $pwd){

                $hsl["STATUS"] = true;
                $hsl["NAMA"] = $h["nama"];
                $hsl["EMAIL"] = $h["email"];
                $hsl["IDUSER"] = $h["iduser"];
            }
        }
        return $hsl;

     }

