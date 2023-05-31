<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>

<body>

    <h3>Tambah Data User</h3>
    <form>

        <div>
            Nama Lengkap
            <input type="text" id="txNama">
        </div>
        <div>
            Email
            <input type="text" id="txEmail">
        </div>
        <div>
            Username
            <input type="text" id="txUsername">
        </div>
        <div>
            Password
            <input type="password" id="txPASS1">
        </div>
        <div>
            Verifikasi Password
            <input type="password" id="txPASS2">
        </div>

        <div>
            <button type="button" onclick="storedata()"> Tambah data</button>

        </div>
    </form>
    <script>
        function storedata() {
            let target = "https://webpro.ptov.my.id/api/curduser.php?store=get"
            let nama = document.getElementById("txNama").value;
            let email = document.getElementById("txEmail").value;
            let username = document.getElementById("txUsername").value;
            let pass1 = document.getElementById("txPASS!").value;
            let pass2 = document.getElementById("txPASS2").value;
            let params = "nama=" + nama + "&email" + email + "&username=" + username + "&pass1=" + pass1 + "&pass2=" + pass2;

            const storedata = new XMLHttpRequest();
            storedata.open("POST", target, true);
            storedata.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            storedata.send(params);
            storedata.onload = function {
                console.log(this.responseText);

            }
        }
    </script>
</body>

</html>