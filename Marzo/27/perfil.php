<?php 

session_start();
if (isset($_SESSION[$usuariof])) {
    header('Location: login.php');
} else {
    "<h1>Bienvenido</h1>"  <? = $_SESSION['nombre']; ?></h1>
    <a href='logout.php'>Cerrar sesión</a>
}

?>