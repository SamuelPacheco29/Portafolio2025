<?php
$numeros = [10, 20, 30, 40];
$exito = [
    [
        'nombre' => "camisa",
        'talla' => "xl",
        'precio' => 50000
    ],
    [
        'nombre' => "pantalon",
        'talla' => "L",
        'precio' => 70000
    ],
    [
        'nombre' => "blusa",
        'talla' => "S",
        'precio' => 40000
    ]
    ];


$media = array_reduce($exito, function($acumular, $pos){
    return $pos ['precio'] + $acumular;}, 0) /count($exito);

echo $media;


// Variables Externas

// Variable Global
$tienda = "Abardotes";
$vatiable = "y";  // La entiende todo el codigo
function() use ($tienda) {
    return "estoy en la tienda de $tienda";
// Variable Local
    $vatiable = "x"; // Solo la entiende la funcion
}

// Variables SuperGlobales

// %GLOBALS  
// $_SERVER  
// $_REQUEST  
// $_POST  
// $_GET  
// $_FILES  
// $_ENV  
// $_COOKIE  
// $_SESSION

// $_GLOBALS
$x = 75;
function myfuncion(){
    echo $GLOBALS ['x'];
    // echo $x;
}
myfuncion();
?>