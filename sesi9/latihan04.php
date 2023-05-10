<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 4</title>
</head>
<body>

    <form> 
        <div>
            Alas
            <input type="text" id="txALAS" placeholder="nilai alas" name="txALAS">
        </div>

        <div>
            Tinggi
            <input type="text" id="txTINGGI" placeholder="nilai tinggi" name="txTINGGI">
        </div>

        <div>
            <button type="button" onclick="hitung()"> hasil</button>
        </div>
        <br>
        <p>
            <div id="hasil"></div>
        </p>
</form>


        <script>
            function hitung(){
                let alas = document.getElementById("txALAS").value;
                let tinggi = document.getElementById("txTINGGI").value;
                let luas = 0.5 * alas * tinggi
                document.getElementById("hasil").innerHTML = "Luas segitiga adalah"+ luas
            }
        </script>
</body>
</html>