<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>

<?php 

session_start();
$_SESSION['nombre'] = 'Juan';
$_SESSION['clave'] = 304616;   
echo $_SESSION['nombre'] . '<br>';

 if (isset($_SESSION['nombre'])) {
    echo 'La sesión está activa';
 } else {
    echo 'La sesión no está activa';
 }
?>
</html>