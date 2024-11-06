<!DOCTYPE html>
<html>
<head>
    <title>Generador de Matrices</title>
    <style>
        body{
         background-color: beige;
        }
        table {
            margin: 0 auto; /* Centrar la tabla */
            border-collapse: collapse;
        }
        td, th {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        .container{
         position: relative;
        }
        #1{
         top: 0;
         left: 0;
        }
        #2{
        top: 0;
        right: 0;
        }
    </style>
</head>
<body>
    <div class="container">
    <img src="cola.jpg" id="1" alt="">
    <img src="cola.jpg" id="2" alt="">
    </div>
    <form method="post" action="">
        <label for="filas">Cantidad de filas:</label>
        <input type="number" name="filas" id="filas">
        <br>
        <label for="columnas">Cantidad de columnas:</label>
        <input type="number" name="columnas" id="columnas">
        <br>
        <label for="listas">Cantidad de listas</label>
        <input type="number" name="listas" id="listas">
        <br>
        <label for="items">Cantidad de items</label>
        <input type="number" name="items" id="items">
        <br>
        <input type="submit" name="submit" value="Enviar datos">
        <input type="submit" name="submit" value="Cancelar">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        if ($_POST['submit'] === 'Enviar datos') {
            $filas = $_POST['filas'];
            $columnas = $_POST['columnas'];
            $numListas = $_POST['listas'];
            $numItems = $_POST['items'];

            echo "<table>";
            echo "<tr><td>Filas:</td><td>$filas</td></tr>";
            echo "<tr><td>Columnas:</td><td>$columnas</td></tr>";
            echo "</table>";

            echo "<br>Matriz:<br>";
            echo "<table>";
            for ($i = 0; $i < $filas; $i++) {
                echo "<tr>";
                for ($j = 0; $j < $columnas; $j++) {
                    echo "<td>";
                    for ($k = 0; $k < $numListas; $k++) {
                     echo "<ul>";
                     for ($l = 0; $l < $numItems; $l++) {
                         echo "<li>Item " . calcular($k, $l) . "</li>";
                     }
                     echo "</ul>";
                    }
                    echo "<td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        } else {
            // Volver al inicio (opcional: redireccionar a la misma página)
            echo "Operación cancelada.";
        }
    }

    function calcular($listas, $items) {
        return ($listas + $items) % 2 == 0 ? 'p' : 'i';
    }
    ?>
</body>
</html>