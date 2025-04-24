<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>06 Febrero</title>
</head>
<body>
<?php 

// Bucles / Loops

// While

$i = 1;

    while($i < 10){
        echo $i;
        $i ++;
    }


// do While

$i = 2;

    do {
        echo $i;
        $i ++;
    } while ($i < 10); 

// for
 
    for ($o = 1; $o < 10; $o++ ){
        echo $o;
    }

// Objetos

    $color = array("rojo", "amarillo", "azul", "verde");
    foreach ($color as $x){
        echo "$x <br>";
    }

    $color = array("rojo", "amarillo", "azul", "verde");
    foreach ($color as & $x){
        if ($x == "verde") $x = "Rosado";
    }
    var_dump($color);

    $personas = array ("carlos" => "35", "lucia" => "80");
    foreach ($personas as $x => $y) {
        echo "$x : $y <br>";
    }


    foreach($color as $x) :
        echo "$x <br>";
    endforeach;

    
    
    




?>
<h1>
    <section>
        <?php
        foreach(range(1,10) as $numero) : ?>
        <option value="<?php echo $numero;?>"><?php echo $numero.'años';
        ?>
    </option>
    </section>
</h1>



</body>
</html>

