<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aleatorio con impares (while)</title>
</head>
<body>
  <?php
  $aleatorio = rand(1, 20);
  $contador = [];
  $i = 1;

  do{
   if($i % 2 !== 0){
    $contador[] = $i;
   }
   $i++;
  } while ($i <= $aleatorio);


  echo "El numero aleatorio es: $aleatorio<br>";
  echo "El numero de impares entre 1 y $aleatorio es: " . count($contador) . "<br>";
  echo "Los numeros impares son: [" . implode(", ", $contador) . "]";
  ?>
</body>
</html>