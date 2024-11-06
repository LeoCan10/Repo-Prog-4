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
    <form action="tp7-3.php" method="POST">
        <label for="listas">Ingrese la cantidad de listas:</label>
        <input id="listas" type="number" name="listas" id="listas">
        <br>
        <label for="items">Ingrese la cantidad de items:</label>
        <input id="items" type="number" name="items" id="items">
        <button>Enviar Datos</button>
    </form>

    <?php
    if (isset($_POST['listas']) && isset($_POST['items'])) {
        $numListas = $_POST['listas'];
        $numItems = $_POST['items'];

        for ($i = 0; $i < $numListas; $i++) {
            echo "<ul>";
            for ($j = 0; $j < $numItems; $j++) {
                echo "<li>Item " . ($j + 1) . "</li>";
            }
            echo "</ul>";
        }
    }
    ?>
</body>
</html>