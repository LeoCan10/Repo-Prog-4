<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Aleatorio con impares</title>
</head>
<body>
 <?php
 $aleatorio = rand(1,20);
 $contador = 1;
 for($i = 0; $i <= $aleatorio; $i++){
  if($i % 2 !== 0){
   $contador++;
 }
}
 echo "El numero aleatorio es: $aleatorio";
 ?>
 <br>
 <?php
 echo "El numero de impares entre 1 y $aleatorio es: $contador";

 ?>
</body>
</html>