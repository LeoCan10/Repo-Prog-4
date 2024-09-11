<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tabla Par o Impar</title>
</head>
<body>
    <table border="1">
        <?php
        for ($i = 1; $i <= 6; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= 12; $j++) {
                $suma = $i + $j;
                if ($suma % 2 == 0) {
                    echo "<td>par</td>";
                } else {
                    echo "<td>impar</td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
