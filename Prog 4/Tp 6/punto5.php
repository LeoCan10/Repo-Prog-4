<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Vector Aleatorio</title>
</head>
<body>
 <?php
 $vector = [];
 $asc = [];
 $desc = [];

 for($i = 0; $i < 11; $i++) {
  $vector[$i] = rand();
 }
 print_r($vector);

 sort($vector);
 $asc = ($vector);
 print_r($vector);


 rsort($vector);
 $desc = ($vector);
 print_r($desc);

 ?>
 
</body>
</html>