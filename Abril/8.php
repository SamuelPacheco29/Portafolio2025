<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
class gato {
    // PROPIEDADES
    public $nombre;
    public $color;

    // MÉTODOS
    public function cat_nombre($nombre) {
        $this->nombre = $nombre;
    }

    public function cat_color($color) {
        $this->color = $color;
    }

    public function env_nombre() {
        return $this->nombre;
    }

    public function env_color() {
        return $this->color;
    }
}

// Crear objeto fuera de la clase
$pera = new gato();
$pera->cat_nombre("Felix");
$pera->cat_color("Verde");

// Mostrar resultados
echo "<h1>Nombre de la fruta: " . $pera->env_nombre() . "</h1>";
echo "<h1>Color de la fruta: " . $pera->env_color() . "</h1>";
?>


    <?php 

class Fruta {
    // PROPIEDADES
    public $nombre;
    public $color;

    // CONSTRUCTOR
    public function __construct($nombre, $color) {
        $this->nombre = $nombre;
        $this->color = $color;
    }

    // MÉTODO PARA RECIBIR DATOS
    public function rec_datos($nombre, $color) {
        $this->nombre = $nombre;
        $this->color = $color;
    }

    // MÉTODO PARA ENVIAR NOMBRE
    public function getNombre() {
        return $this->nombre;
    }

    // MÉTODO PARA ENVIAR COLOR
    public function getColor() {
        return $this->color;
    }
}

// Crear un objeto
$manzana = new Fruta("Manzana", "Roja");

// Mostrar datos
echo "<h1>Nombre de la fruta: " . $manzana->getNombre() . "</h1>";
echo "<h1>Color de la fruta: " . $manzana->getColor() . "</h1>";

?>

    
</body>
</html>