<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla par e impar</title>
</head>
<body>
    <table border="1"> 
    <?php
    for($i = 0; $i < 6; $i++){
        echo "<tr>";
        for($j = 0; $j < 12; $j++){
            $suma = $i + $j;
            if($suma % 2 == 0){
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
