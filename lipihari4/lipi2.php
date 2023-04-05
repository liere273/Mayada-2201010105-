<?php
    $usr = "";
    $ps ="";
    $eusr = "";
    $eps = "";
    if(isset($_POST["txUSER"])){
        $usr =$_POST["txUSER"];
        $ps = $_POST["txPASSKY"];

        if($usr==""){
            $eusr = "<div style='color:red;font-size: 10px;'> Field isi username lu blok jangan mager </div>";
        }
       
        if($ps==""){
            $eps = "<div style='color:red;font-size: 10px;'> Field isi password lu blok jangan mager </div>";
        }
       

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
    
<form method="POST" action="lipi2.php">

    <div>
         User name 
         <input type="text" name="txUSER" >
         <?=$eusr;?>
    </div>
    
    <div>
        Password
        <input type="password" name="txPASSKY">
        <?=$eps;?>
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