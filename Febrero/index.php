<?php 
// Arrays 
$carros = array("Volvo", "BMW", "Toyota");
echo ("<br>");
echo count($carros);
echo ("<br>");
echo $carros[0];
echo ("h1");
$carros[1] = "Mercedes";
$carros[] = "Audi";
var_dump($carros);

// Operadores
// Operadores aritméticos
$a = 10;
$b = 5;
echo $a + $b; // Suma
echo ("<br>");
echo $a - $b; // Resta
echo ("<br>");
echo $a * $b; // Multiplicación
echo ("<br>");
echo $a / $b; // División
echo ("<br>");
echo $a % $b; // Módulo
echo ("<br>");

// Operadores de asignación
$c = 10;
$c += 5; // $c ahora es 15
echo $c;
echo ("<br>");

// Operadores de comparación
$d = 10;
$e = 5;
var_dump($d == $e); // Igualdad
echo ("<br>");
var_dump($d != $e); // Desigualdad
echo ("<br>");
var_dump($d > $e); // Mayor que
echo ("<br>");
var_dump($d < $e); // Menor que
echo ("<br>");

// Operadores lógicos
$f = true;
$g = false;
var_dump($f && $g); // Y lógico (AND)
echo ("<br>");
var_dump($f || $g); // O lógico (OR)
echo ("<br>");
var_dump(!$f); // NO lógico (NOT)
echo ("<br>");

// Operadores de incremento/decremento
$h = 5;
echo ++$h; // Pre-incremento
echo ("<br>");
echo $h++; // Post-incremento
echo ("<br>");
echo --$h; // Pre-decremento
echo ("<br>");
echo $h--; // Post-decremento
echo ("<br>");

// Operadores de cadenas
$i = "Hola";
$j = " Mundo";
echo $i . $j; // Concatenación
echo ("<br>");
$i .= $j; // Concatenación y asignación
echo $i;
echo ("<br>");

// Operadores de arreglo
$k = array("a" => "manzana", "b" => "banana");
$l = array("a" => "pera", "b" => "plátano", "c" => "cereza");
$resultado = $k + $l; // Unión de arreglos
var_dump($resultado);
echo ("<br>");
var_dump($k == $l); // Igualdad
echo ("<br>");
var_dump($k === $l); // Identidad
echo ("<br>");
var_dump($k != $l); // Desigualdad
echo ("<br>");
var_dump($k !== $l); // No identidad
echo ("<br>");
0



?>