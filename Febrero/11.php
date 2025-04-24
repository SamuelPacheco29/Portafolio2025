<?php 
// Parametros
function myfunction (string $text = 'cualquier cosa '): string
{
    return 'hola ' . $text . strlen($text);
}
echo myfunction();
echo myfunction('jose ');


function my (string $text = 'cualquier cosa '  , string $last = "fea "): string
{
    return 'hola ' . $text . $last . strlen($text);
}
echo my();
echo my('jose ');
echo my('jose ', 'perez ');

function mifuncion(int $num): int
{
    return $num + 1;
}
echo mifuncion(4);


function funcion(int $pos): ?string
{
    switch($pos) {
        case 1: 
            return "azul";
        case 2: 
            return "rojo";
        case 3:
            return "verde";
        default:
            return null;
    }
}
echo funcion(3);

function myfuncion(float $pos): float | string
{
    if($pos > 0){
        return $pos * 2;
}else{
    return 'no es numero';
}
}
echo myfuncion(4.5);

echo myfuncion(15);


//Anonimas
function () {
    return 'soy anonima ';
};
$numeros = [10, 20, 30, 40];
$incremento = array_map(function($numero) {
    return $numero + 1;
},  $numeros);
var_dump($incremento);


    //arreglos dimencionales
    $numeros = [10, 20, 30, 40];
    $exito = [
        123 =>[
            'nombre' => "camisa",
            'talla' => "xl",
            'precio' => 50000
        ],
        456 => [
            'nombre' => "pantalon",
            'talla' => "L",
            'precio' => 70000
        ],
        789 => [
            'nombre' => "blusa",
            'talla' => "S",
            'precio' => 40000
        ]
        ];
        echo $numeros [3];
        echo $exito[456]['nombre'];



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

        array_walk ($exito, function($prenda, $pos){
            echo $prenda['nombre']. PHP_EOL;
        }
    );


    $valor = array_filter($exito, function($prenda){
        return $prenda['precio'] === "40000";
    }
);
?>











?>