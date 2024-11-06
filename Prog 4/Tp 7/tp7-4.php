<!DOCTYPE html>
<html>
<head>
    <title>Generador de Matrices</title>
    <style>
        table {
            margin: 0 auto; /* Centrar la tabla */
            border-collapse: collapse;
        }
        td, th {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <form method="post" action="">
        <label for="filas">Cantidad de filas:</label>
        <input type="number" name="filas" id="filas">
        <br>
        <label for="columnas">Cantidad de columnas:</label>
        <input type="number" name="columnas" id="columnas">
        <br>
        <input type="submit" name="submit" value="Enviar datos">
        <input type="submit" name="submit" value="Cancelar">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        if ($_POST['submit'] === 'Enviar datos') {
            $filas = $_POST['filas'];
            $columnas = $_POST['columnas'];

            echo "<table>";
            echo "<tr><td>Filas:</td><td>$filas</td></tr>";
            echo "<tr><td>Columnas:</td><td>$columnas</td></tr>";
            echo "</table>";

            echo "<br>Matriz:<br>";
            echo "<table>";
            for ($i = 0; $i < $filas; $i++) {
                echo "<tr>";
                for ($j = 0; $j < $columnas; $j++) {
                    echo "<td>" . calcular($i, $j) . "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        } else {
            // Volver al inicio (opcional: redireccionar a la misma página)
            echo "Operación cancelada.";
        }
    }

    function calcular($fila, $columna) {
        return ($fila + $columna) % 2 == 0 ? 'p' : 'i';
    }
    ?>
</body>
</html>