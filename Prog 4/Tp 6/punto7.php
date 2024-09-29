<?php
$numeros = [];
for ($i = 0; $i < 10; $i++) {
    $numeros[] = rand(1, 100);
}

print_r($numeros);

$minimo = min($numeros);
$maximo = max($numeros);

// Usamos un switch para determinar la paridad del mínimo
switch ($minimo % 2) {
    case 0:
        echo "El número mínimo ($minimo) es par.\n";
        break;
    case 1:
        echo "El número mínimo ($minimo) es impar.\n";
        break;
    default:
        echo "Error al determinar la paridad.\n"; // Opcional, para casos inesperados
}

echo "El número máximo en el array es: " . $maximo . "\n";