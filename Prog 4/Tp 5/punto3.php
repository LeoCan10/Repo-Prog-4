<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Cuadrado</title>
</head>
<body>
 <?php
  for ($i = 0; $i < 7; $i++) {
   echo "<ol>"
   for($j = 0; $j <7; $j++){
    cuadrado = $j * $j;
    echo "<li>$cuadrado</li>";
   }
  }
 ?>
</body>
</html>