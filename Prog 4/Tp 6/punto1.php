<?php
$numero = rand(1,5);
$numeroEnLetras = [
 1=>"uno",
 2=>"dos",
 3=>"tres",
 4=>"cuatro",
 5=>"cinco"
];

$numeroLetra = $numeroEnLetras[$numero];

echo "El numero aleatorio es: $numero, en letras: $numeroLetra";
