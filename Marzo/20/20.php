<html>
    <body>   
    </body>
    <?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $dir = './upload/';
                $fichero = $dir . basename($_FILES['fichero-usuario']['name']);
                if (move_uploaded_file($_FILES['fichero-usuario']['tmp_name'], $fichero)) {
                    echo '<p>Se subió correctamente ' . $_FILES['fichero-usuario']['name'] . '.</p>';
                    echo '<p><img width="500" src="' . $fichero . '"></p>';
                } else {
                    echo '<p>¡Error!</p>';
                }
            }    
    ?>
    <!-- Formulario -->
    <form method="post" enctype="multipart/form-data">
            <p>
                <input type="file" name="fichero-usuario">
            </p>
            <p>
                <input type="submit" value="Enviar">
            </p>
        </form></html>