<?php
    include("cmd/user.php");
    $psn = "";
    //cek pengirimaan form
    if(isset($_POST["txPASS1"])){
        if($_POST["txPASS1"] == $_POST["txPASS2"]){
            $nama = $_POST["txNAMA"];
            $email = $_POST["txEMAIL"];
            $user = $_POST["txUSERNAME"];
            $password = $_POST["txPASS1"];

            if(createuser($nama, $email, $user, $password)){
                $psn = "DATA BERHASIL DI CURI";
            }else{
                $psn = "DATA GAGAL DI CURI";
            }
        }
    }
    
?>
<!DOCTYPE html>
<html>
<head>
	<title>REGISTER</title>	
</head>
<body>
	<form method="POST" action="register.php">

        <h3>REGISTER<H3>
            <?php
               echo  "<div> $psn </div>";
            ?>

        <div>
            Nama Lengkap
            <input type="text" name="txNAMA">
        </div>
        <div>
            Email
            <input type="email" name="txEMAIL">
        </div>
        <div>
            User
            <input type="text" name="txUSERNAME">
        </div>
        <div>
            Password
            <input type="password" name="txPASS1">
        </div>
        <div>
            Verifikasi Password
            <input type="password" name="txPASS2">
        </div>


        <div>
            <button type="submit">Register</button>
        </div>
	</form>
</body>
</html>