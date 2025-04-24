<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Registro con Validación</title>
    <style>
        .error { color: red; }
    </style>
</head>
<body>
    <?php
    // Definir variables y establecer valores vacíos
    $nombre = $edad = $email = "";
    $nombreErr = $edadErr = $emailErr = "";

    // Función para limpiar y validar datos de entrada
    function limpiar_dato($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // Procesar el formulario al enviarlo
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validar nombre
        if (empty($_POST["nombre"])) {
            $nombreErr = "El nombre es obligatorio.";
        } else {
            $nombre = limpiar_dato($_POST["nombre"]);
        }

        // Validar edad
        if (empty($_POST["edad"])) {
            $edadErr = "La edad es obligatoria.";
        } else {
            $edad = limpiar_dato($_POST["edad"]);
            if (!filter_var($edad, FILTER_VALIDATE_INT)) {
                $edadErr = "La edad debe ser un número entero.";
            }
        }

        // Validar email
        if (empty($_POST["email"])) {
            $emailErr = "El correo electrónico es obligatorio.";
        } else {
            $email = limpiar_dato($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "El formato del correo electrónico no es válido.";
            }
        }

        // Si no hay errores, mostrar los datos ingresados
        if (empty($nombreErr) && empty($edadErr) && empty($emailErr)) {
            echo "<h2>Datos ingresados:</h2>";
            echo "Nombre: $nombre<br>";
            echo "Edad: $edad<br>";
            echo "Correo Electrónico: $email<br>";
        }
    }
    ?>

    <h2>Formulario de Registro</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="<?php echo $nombre;?>">
        <span class="error"><?php echo $nombreErr;?></span>
        <br><br>
        <label for="edad">Edad:</label>
        <input type="text" id="edad" name="edad" value="<?php echo $edad;?>">
        <span class="error"><?php echo $edadErr;?></span>
        <br><br>
        <label for="email">Correo Electrónico:</label>
        <input type="text" id="email" name="email" value="<?php echo $email;?>">
        <span class="error"><?php echo $emailErr;?></span>
        <br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>