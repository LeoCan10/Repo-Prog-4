<?php

$numeros = [];
for ($i = 0; $i < 10; $i++) {
    $numeros[] = rand(1, 100);
}
print_r($numeros);

$minimo = min($numeros);
$maximo = max($numeros);

sort($numeros);

print_r($numeros);
echo "El número mínimo en el array es: " . $minimo . "\n";
echo "El número máximo en el array es: " . $maximo . "\n";
