<?php
    $filez = "";
    $path = "lipig/";
    if(isset($_POST["upfilex"])){
        $filez = $path . basename ($_FILES["upgambar"]["name"]);
        move_uploaded_file($_FILES["upgambar"]["tmp_name"],$filez );


    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form uPLOAD File</title>
</head>
<body>
    
<form method="POST" action="lipi4.php" enctype="multipart/form-data">

    <div>
        upload gambar
        <input type= "file" name="upgambar">
    </div>
    <div>
        <button type="submit"> upload file </button>
    </div>
    <input type="hidden" name="upfilex" value="ok">
</form>

<div><?="<img src='$filez' width='500'>";?>

    

</body>
</html>