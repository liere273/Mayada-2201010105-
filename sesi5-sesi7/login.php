<?php
	session_start();

	include("cmd/user.php");

	if(isset($_POST["txUSER"])){
		$user = $_POST["txUSER"];
		$pwd = $_POST["txPASS"];

		echo "Test 1";

		// $islogin = ceklogin($user, $pwd);
		// if($islogin["STATUS"]){
		// 	$_SESSION["login"] = md5($user);
		// 	$_SESSION["NAMA"] = $islogin["NAMA"];
			
		// 	header("location: dashboard.php");
		// }else{
		// 		$_SESSION["login"] = "";
		// 		$_SESSION["NAMA"] = "";

		// }
	}
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
</head>
<body>

	<form action="login.php" method="POST">

		<h3>FORM LOGIN</H3>



    	<div>
            User
            <input type="text" name="txUSERNAME">
        </div>

        <div>
            Password
            <input type="password" name="txPASS">
        </div>
        
		<div>
			<button type="submit">login</button>
		</div>
	</form>
	
</body>
</html>