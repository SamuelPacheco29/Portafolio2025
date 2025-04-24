<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    //herencia es una extension de una clase

    class gato {
        // PROPIEDADES
        public $nombre = 'Tom';
        public function maullar () : void {
            echo 'miau';
        }
    }
    $miagato = new gato();
        $migato-> maullar();
        echo $miagato->nombre;
        
    class gato{
        public $nombre = 'Felix';
        function __construct() {
            echo 'miauu';    
        } 
    }      
    ?>

    <?php 
    class gato {
        public function cat($nombre){
            $this->nombre = $nombre;
        }
        public function env (); {
            return $this->nombre;
        }
        $migato = new gato();
        $migato ->cat('Silvestre');
        echo $migato->env();
    }
    ?>

    <?php 
    class gato {
        function __construct(){
            $this->nombre = $nombre;
        }
        function env() {
            return $this->nombre;
        }

        $migato = new gato('Gato con botas');
        echo $migato->env();

    }
    ?>

    <?php 
    class fruit {
        public $nombre;
        public $color;
        public function __construct($nombre, $color) {
            $this->nombre = $nombre;
            $this->color = $color;
        }

        public function intro() {
            echo "La fruta es {$this->nombre} y su color es {$this->color}.";

        }
    }

    class strawberry extends fruit {
        public function message() {
            echo 'I am a strawberry or a fruit?';

        }
    }

    $strawberry = new strawberry ('frambuesa', 'morada')
    ?>
    </body>
</html>