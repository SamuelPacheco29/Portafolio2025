<?php 

// Variables SuperGlobales

//GLOBALS
$x = 75;

function superGlobales(){
    $GLOBALS['x'] = 100;
echo $GLOBALS['x']; // Imprime 100
}
superGlobales();
 echo $GLOBALS['x']; // Imprime 100
 echo $x; // Imprime 100
?>

<?php 
$y = 75;
function superGlobal(){
    global $y;
    echo $y; // Imprime 75
}
superGlobal(); // Falta el punto y coma

// $_SERVER almacena información sobre encabezados, rutas y ubicaciones de script.
// $_REQUEST almacena los datos de las variables que se envian por POST y GET
// es un array que contiene todas las variables que recibimos, lo cual nos simplifica a la hora de extraer cada elemento.

// $_POST / $_GET
// $_POST se utiliza para recoger datos de formularios enviados con el método POST
// $_GET se utiliza para recoger datos de formularios enviados con el método GET
?>
