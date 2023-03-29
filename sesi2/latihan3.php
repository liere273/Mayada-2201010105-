<?php
    $nvar = "P1" ;
    if(isset($_GET["pg"])){
        $nvar = $_GET["pg"];
    }
    switch($nvar){
        case "P1":
            $judulpage = "halaman 1";
            $konten = "<h3>Main pagi atau siang</h3>
            <ul><p>Waktu bermain menjadi sangat penting saat push rank. Kebanyakan pemain mungkin senang menghabiskan waktu sampai semalaman dan begadang demi push rank, tapi hasil yang didapat tak maksimal.

            ";
            break;
        case "P2":
            $judulpage = "halaman 2";
            $konten = "<h3>Jangan main solo</h3>
            <ul><p>Hindari bermain solo. Bukan apa-apa, risiko bermain solo dan setim dengan para pemain troll sangat besar. Jika Anda tak bisa gendong-gendong amat, hindari bermain sendirian.";
            break;
        case "P3":
            $judulpage = "halaman 3";
            $konten = "<h3>Tonton MPL, kuasai hero tier-S</h3>
            <ul><p>Bermain party tak selalu bisa terjadi. Ketika Anda sangat ingin bermain dan teman-teman berhalangan, biasanya mau tak mau solo menjadi jawaban. Ketika hal ini harus dilakukan, Anda setidaknya harus bisa kuasai hero-hero tertentu di semua role";
            break;
        case "P4":
            $judulpage = "halaman 4";
            $konten = "<h3>Kuasai 2 hero di masing-masing role</h3>
            <ul><p>Salah satu cara meningkatkan makro dan mekanik bagi para publik adalah menonton. Tips dan trik banyak dihadirkan di konten-konten pro player pada Youtube, atau Anda juga bisa membaca banyak artikel tips dan trik di ONE Esports untuk mengetahui cara main terbaik hero tertentu.";
            break;
        default:
            $judulpage = "halaman 1";
            $konten = "<h3>halaman 1</h3>";
            break;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $judulpage; ?></title>
</head>
<body>
    <a href="latihan3.php?pg=P1"> Page1</a> 
    <a href="latihan3.php?pg=P2"> Page2</a> 
    <a href="latihan3.php?pg=P3"> Page3</a> 
    <a href="latihan3.php?pg=P4"> Page4</a> 
    <?php 
        echo $konten;
    ?>
</body>
</html>