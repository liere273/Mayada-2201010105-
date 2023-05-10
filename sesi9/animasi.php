<!DOCTYPE html>
<html>
<head>
	<title>Animasi Bola</title>
	<style>
		#canvas {
			border: 1px solid black;
		}
	</style>
</head>
<body>
	<canvas id="canvas" width="400" height="400"></canvas>

	<script>
		// mendapatkan elemen canvas dan konteksnya
		let canvas = document.getElementById("canvas");
		let ctx = canvas.getContext("2d");

		// mendefinisikan variabel bola
		let x = canvas.width / 2;
		let y = canvas.height - 30;
		let dx = 2;
		let dy = -2;
		let radius = 10;

		// menggambar bola
		function drawBall() {
			ctx.beginPath();
			ctx.arc(x, y, radius, 0, Math.PI*2);
			ctx.fillStyle = "#0095DD";
			ctx.fill();
			ctx.closePath();
		}

		// animasi bola
		function animateBall() {
			// membersihkan canvas
			ctx.clearRect(0, 0, canvas.width, canvas.height);

			// menggambar bola
			drawBall();

			// mengubah posisi bola
			x += dx;
			y += dy;

			// memantulkan bola jika mencapai batas kanan atau kiri
			if (x + dx > canvas.width - radius || x + dx < radius) {
				dx = -dx;
			}

			// memantulkan bola jika mencapai batas atas atau bawah
			if (y + dy > canvas.height - radius || y + dy < radius) {
				dy = -dy;
			}
		}

		// mengulang animasi setiap 10 milidetik
		setInterval(animateBall, 10);

		// memindahkan posisi bola ketika bola tersebut diklik
		canvas.addEventListener("click", function(event) {
			let rect = canvas.getBoundingClientRect();
			x = event.clientX - rect.left;
			y = event.clientY - rect.top;
		});
	</script>
</body>
</html>
