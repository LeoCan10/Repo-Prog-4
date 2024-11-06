<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Programación Web</title>
</head>
<style>
 body{
  background-color: beige;
 }
 .container{
  width: 800px;
  height: 400px;
 }

 img{
  position: absolute;
  max-width: 100%;
 }
 #1{
  left: 20px;
  top: 20px;
 
 }
 #2{
  right: 20px;
  top: 20px;

 }


</style>

<body>
 <div class="container">
 <img  id="1" src="cola.jpg" alt=""><img id="2" src="cola.jpg" alt="">
 </div>
<table border="1">
<?php
  function calcularValorCelda($fila, $columna) {
      $suma = $fila + $columna;
      return $suma * $suma;
  }

  // Crear la matriz de 10x6
  for ($i = 0; $i < 10; $i++) {
      echo "<tr>";
      for ($j = 0; $j < 6; $j++) {
          $valorCelda = calcularValorCelda($i, $j);
          echo "<td>$valorCelda</td>";
      }
     }
      echo "</tr>";
      ?>
</table>
 
 </body>
</html>