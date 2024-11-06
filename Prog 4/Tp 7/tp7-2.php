<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programación Web</title>
</head>
<style>
    body {
        background-color: beige;
    }
    .container {
        width: 800px;
        height: 400px;
    }

    img {
        position: absolute;
        max-width: 100%;
    }
    #1 {
        left: 20px;
        top: 20px;
    }
    #2 {
        right: 20px;
        top: 20px;
    }
</style>

<body>
    <div class="container">
        <img id="1" src="cola.jpg" alt="">
        <img id="2" src="cola.jpg" alt="">
    </div>
    <form action="tp7-2.php" method="POST">
        <label for="filas">Ingrese la cantidad de filas:</label>
        <input id="fil" type="number" name="filas" id="filas">
        <br>
        <label for="columnas">Ingrese la cantidad de columnas:</label>
        <input id="col" type="number" name="columnas" id="columnas">
        <button>Enviar Datos</button>
    </form>

    <?php
    if (isset($_POST['filas']) && isset($_POST['columnas'])) {
        $filas = $_POST['filas'];
        $columnas = $_POST['columnas'];

        echo "<table>";
        echo "<tr>";
        for ($j = 0; $j < $columnas; $j++) {
            echo "<th>Columna $j</th>";
        }
        echo "</tr>";

        for ($i = 0; $i < $filas; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $columnas; $j++) {
                $valorCelda = calcularValorCelda($i, $j);
                echo "<td>$valorCelda</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }

    function calcularValorCelda($fila, $columna) {
        $suma = $fila + $columna;
        return $suma * $suma;
    }
    ?>
</body>
</html>