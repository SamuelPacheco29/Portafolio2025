<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIOS PHP</title>
</head>
<body>


    <?php

// OPCION 1 = Si la variable esta definida no hace nada, si no esta definida agrega null.

        // if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //     $nombre = isset($_REQUEST['nombre']) ? $_REQUEST['nombre'] : null;
        //     $email = isset($_REQUEST['email']) ? $_REQUEST['email'] : null;
        //     $comentarios = isset($_REQUEST['comentarios']) ? $_REQUEST['comentarios'] :null;
        //     $genero = isset($_REQUEST['genero']) ? $_REQUEST['genero'] : null;

// OPCION 2 = Si los campos no fueron llenados se muestra un mensaje de error.

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nombre = empty($_POST['nombre']) ? $_POST['nombre'] : "Completa este campo!";
            $email = empty($_POST['email']) ? $_POST['email'] : "Completa este campo!";
            $comentarios = empty($_POST['comentarios']) ? $_POST['comentarios'] :"Completa este campo!";
            $genero = empty($_POST['genero']) ? $_POST['genero'] : "Completa este campo!";
        }

    ?>
   



    <form method="post">
        <p>
            Nombre: <input type="text" name="nombre" placeholder="Nombre" required>
        </p>
        <p>
            Email: <input type="text" name="email" placeholder="Email" required>
        </p>
        <p>
            Comentarios: <textarea name="comentarios" placeholder="Comentarios" required></textarea>
        </p>
        <p>
            Genero: <input type="radio" name="genero" value="Hombre" required> Hombre 
                    <input type="radio" name="genero" value="Mujer" required> Mujer
        </p>  
        <p>
            <input type="submit" value="Enviar">
        </p>
    </form>

    <?php
        echo $nombre;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $comentarios;
        echo "<br>";
        echo $genero;
        echo "<br>";
    ?>





</body>
</html>