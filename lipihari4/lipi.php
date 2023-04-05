<?php
    $usr = "";
    $ps ="";
    if(isset($_GET["txUSER"])){
        $usr =$_GET["txUSER"];
        $ps = $_GET["txPASSKY"];

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Method Get</title>
</head>
<body>
    
<form method="GET" action="lipi.php">

    <div>
         User name 
         <input type="text" name="txUSER" required>
    </div>
    
    <div>
        Password
        <input type="password" name="txPASSKY">
    </div>

    <div>
            <button>login</button>
    </div>
</form>

    <div>
        isi dari form:<br>
            1.User Name : <?=$usr?><br>
            2. Password: <?=$ps?>

</body>
</html>