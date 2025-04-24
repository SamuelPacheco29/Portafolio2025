<?php 
 
// Funciones

    function mifuncion(){
        echo "Funciones un php.<br>";
    }
    mifuncion();


    function mifuncion2($name){
        echo "$name Funciones en php.<br>";
    }
    mifuncion2("Juan");
    mifuncion2("Lestat", 50);


    function mifuncion3($nombre = "De la hoz"){
        echo "Ha sido nombrado 3 veces $nombre <br>";
    }
    mifuncion3();
    mifuncion3("Juan");


    function mifuncion4($x, $y){
        $z = $x + $y;
        return $z;
    }
    echo "5 + 10 = " . mifuncion4(5 , 10) . "<br>";
    echo "20 + 5 = " . mifuncion4(20 , 5) . "<br>";

// Ejercicios

// radio de un circulo = pi x r2

function rapidoCirculo(){
    $pi = 3.14;
    $r = 5;

    $a = $pi * $r ^ 2;
    echo $a;
}
rapidoCirculo()


// in range 100 ,200
// verificar un numero primo
// funcion  
// funcion para ordenar un arreglo

 







?>