<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {
        $usuario = "Juan";
        $clave = 304616;        

        $usuariof = (isset($_POST['usuario'])) ? $_POST['usuario'] : null;
        $clavef = (isset($_POST['clave'])) ? $_POST['clave'] : null;

    if ($usuario == $usuariof && $clave == $clavef) {
        session_start();
        $_SESSION['nombre'] = $_REQUEST['usuariof'];
        $_SESSION['clave'] = $_REQUEST['clavef'];
        header ('Location: perfil.php');
        die();
    } else {
        echo '<p>Usuario o clave incorrectos</p>';
    }
    }

    ?>
    <!-- PARA RE DIRIGIR AL USUARIO A SU PAGINA DE USUARIO: header: (Location: perfil.php); -->


    <form method='post'>
        <input type='text' name='usuario' placeholder='Usuario'>
        <input type='password' name='clave' placeholder='Clave'>
        <input type='submit' value='Ingresar'>
    </form>
</body>
</html>