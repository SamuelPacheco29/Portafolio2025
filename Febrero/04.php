<?php 

// Condicional

if (2 < 1){echo "Verdadero";}
if (2 > 1){echo "verdadero";} else {echo "Falso";} echo ("<br>");


$a = "10";
$b = 10;

if ($a > $b){echo "verdad";} else if ($a < $b){echo "Es mayor";} else {echo "No es mayor";}
echo ("<br>");

// Switch Case

$dia = "dixon-puta";

switch ($dia){
    case "lunes": echo "dia 1";
        break;
    case "martes": echo "dia 2";
        break;
    case "miercoles": echo "dia 3";
        break;
    default:
         echo "Jueves - Domingo";
        break;
}
echo ("<br>");

// Condicional ?

$c = 3;
$d = $a > 10 ? "Si" : "No"; //Se usa para else if

$f = 5;
if ($f < 10) $d = "Hola";
    echo $d;


// Ejercicio

$d = "0";

switch ($d){
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo "Estoy trabajando";
            break;
    case 6:
    case 7:
        echo "Weekend";
            break;
    default:
    echo "Nd";
}

?>