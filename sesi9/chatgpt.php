<!DOCTYPE html>
<html>
<head>
	<title>Program Menghitung Luas Segitiga</title>
</head>
<body>
	<h1>Program Menghitung Luas Segitiga</h1>

	<label for="alas">Panjang Alas:</label>
	<input type="number" id="alas">

	<label for="tinggi">Tinggi:</label>
	<input type="number" id="tinggi">

	<button onclick="hitungLuas()">Hitung Luas</button>

	<p id="hasil"></p>

	<script>
		function hitungLuas() {
			// mengambil nilai dari input
			let alas = document.getElementById("alas").value;
			let tinggi = document.getElementById("tinggi").value;

			// menghitung luas segitiga
			let luas = 0.5 * alas * tinggi;

			// menampilkan hasil perhitungan
			document.getElementById("hasil").innerHTML = "Luas segitiga adalah: " + luas;
		}
	</script>
</body>
</html>
