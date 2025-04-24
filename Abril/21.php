<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    // ::  operador de resolucion de ambito
    // -> referencia una clase o 
    class adios {
        const LEAVING_MESSAGE = "Gracias por participar <br>";
    }
    echo adios :: LEAVING_MESSAGE;

    class Goodbye {
        const LEAVING_MESSAGE = "Thanks for you attention";
        public function byebye () {
            echo self :: LEAVING_MESSAGE;
        }  
    }
    $goobye = new Goodbye ();
    $goobye -> byebye ();
    ?>

    <?php
    //parent class
    abstract class car{
        public $name;
        public function __construct($name){
            $this->name = $name;
        }
        abstract protected function intro() : string;
    }
        //child class
        class audi extends car {
            public function intro() : string {
                return "choose german quality i'm ar $this->name";
            }
        }
        $audi = new audi("audi");
        echo $audi -> intro();
        ?>



<?php 

?>


</body>
</html>