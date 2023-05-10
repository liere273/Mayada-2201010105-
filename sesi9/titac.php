<!DOCTYPE html>
<html>

<head>
    <title>Tic Tac Toe</title>
    <style>
        .container {
            display: flex;
            flex-wrap: wrap;
            width: 180px;
            margin: 0 auto;
        }

        .cell {
            box-sizing: border-box;
            width: 60px;
            height: 60px;
            border: 1px solid black;
            text-align: center;
            line-height: 60px;
            font-size: 30px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="cell"></div>
        <div class="cell"></div>
        <div class="cell"></div>
        <div class="cell"></div>
        <div class="cell"></div>
        <div class="cell"></div>
        <div class="cell"></div>
        <div class="cell"></div>
        <div class="cell"></div>
    </div>

    <script>
        let player = 1; // pemain pertama
        let cells = document.querySelectorAll(".cell"); // mendapatkan seluruh elemen cell

        // menambahkan event listener untuk setiap sel pada papan permainan
        for (let i = 0; i < cells.length; i++) {
            cells[i].addEventListener("click", function () {
                if (cells[i].innerHTML === "") { // memastikan sel masih kosong
                    if (player === 1) {
                        cells[i].innerHTML = "X";
                        player = 2;
                    } else {
                        cells[i].innerHTML = "O";
                        player = 1;
                    }
                }

                checkWinner(); // memeriksa pemenang setiap kali ada perubahan pada papan permainan
            });
        }

        // memeriksa apakah ada pemenang
        function checkWinner() {
            if (cells[0].innerHTML === cells[1].innerHTML && cells[1].innerHTML === cells[2].innerHTML && cells[0].innerHTML !== "") {
                alert("Player " + player + " wins!");
                reset();
            } else if (cells[3].innerHTML === cells[4].innerHTML && cells[4].innerHTML === cells[5].innerHTML && cells[3].innerHTML !== "") {
                alert("Player " + player + " wins!");
                reset();
            } else if (cells[6].innerHTML === cells[7].innerHTML && cells[7].innerHTML === cells[8].innerHTML && cells[6].innerHTML !== "") {
                alert("Player " + player + " wins!");
                reset();
            } else if (cells[0].innerHTML === cells[3].innerHTML && cells[3].innerHTML === cells[6].innerHTML && cells[0].innerHTML !== "") {
                alert("Player " + player + " wins!");
                reset();
            } else if (cells[1].innerHTML === cells[4].innerHTML && cells[4].innerHTML === cells[7].innerHTML && cells[1].innerHTML !== "") {
                alert("Player " + player + " wins!");
                reset();
            } else if (cells[2].innerHTML === cells[5].innerHTML && cells[5].innerHTML === cells[8].innerHTML && cells[2].innerHTML !== "") {
                alert("Player " + player + " wins!");
                reset();
            } else if (cells[0].innerHTML === cells[4].innerHTML && cells[4].innerHTML === cells[8].innerHTML && cells[0].innerHTML !== "") {
                alert("Player " + player + " wins!");
                reset();
            } else if (cells[2].innerHTML === cells[4].innerHTML && cells[4].innerHTML === cells[6].innerHTML && cells[2].innerHTML !== "") {
                alert("Player " + player + " wins!");
                reset();
            } else {
                let draw = true;
                for (let i = 0; i < cells.length; i++) {
                    if (cells[i].innerHTML === "") {
                        draw = false;
                    }
                }
                if (draw) {
                    alert("Draw!");
                    reset();
                }
            }
        }
        // mereset papan permainan
        function reset() {
            for (let i = 0; i < cells.length; i++) {
                cells[i].innerHTML = "";
            }
            player = 1;
        }
    </script>
</body>

</html>