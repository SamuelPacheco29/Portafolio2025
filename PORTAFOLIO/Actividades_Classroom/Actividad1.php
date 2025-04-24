<?php

// Ejercicio 1: Calcular el área de un círculo
function calcularAreaCirculo($radio) {
    return pi() * pow($radio, 2);
}

// Ejercicio 2: Generar un número aleatorio entre dos valores
function generarNumeroAleatorio($min, $max) {
    return rand($min, $max);
}

// Ejercicio 3: Verificar si un número es primo
function esPrimo($numero) {
    if ($numero <= 1) return false;
    if ($numero == 2) return true;

    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) return false;
    }
    return true;
}

// Ejercicio 4: Calcular el factorial de un número
function factorial($numero) {
    if ($numero < 0) return null; // No existe factorial para negativos
    if ($numero == 0) return 1;

    $resultado = 1;
    for ($i = 1; $i <= $numero; $i++) {
        $resultado *= $i;
    }
    return $resultado;
}

// Ejercicio 5: Ordenar un array
function ordenarArray($array) {
    sort($array);
    return $array;
}

// ---------- PRUEBAS ----------
echo "Área de círculo (radio = 5): " . calcularAreaCirculo(5) . "<br>";
echo "Número aleatorio entre 1 y 10: " . generarNumeroAleatorio(1, 10) . "<br>";
echo "¿7 es primo? " . (esPrimo(7) ? "Sí" : "No") . "<br>";
echo "Factorial de 5: " . factorial(5) . "<br>";

$arrayEjemplo = [5, 2, 9, 1, 3];
echo "Array ordenado: ";
print_r(ordenarArray($arrayEjemplo));

?>
