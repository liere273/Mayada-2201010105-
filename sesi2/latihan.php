<?php
    $judulpage = " Latihan Script PHP ";
    $konten = "<h3>Latihan Script PHP</h3>";
    $konten .= "<p>Dasar Penulisan PHP:<ul><li>Penulisan Script PHP Bersikap Case Senstive</li><li>Setiap akhir baris ditandai dengan titik koma </li></p>";
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
    <?php 
        echo $konten;
    ?>
</body>
</html>