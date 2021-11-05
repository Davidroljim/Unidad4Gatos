<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/botonera.css">
    <title>export gato</title>
</head>

<body>
    <?php include "databaseManagement.inc.php";
    $confirmacion = '';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $gatos = obtenerTodosCSV();
        if ($file = fopen("datosGatos.csv", 'a')) {
            for ($i = 0; $i < count($gatos); $i++) {
                $gatoDatos = array($gatos[$i]["id"], $gatos[$i]["nombre"], $gatos[$i]["dni"], $gatos[$i]["edad"], $gatos[$i]["sexo"],$gatos[$i]["raza"], $gatos[$i]["fechaAlta"]);
                fputcsv($file, $gatoDatos, ',');
            }
            $confirmacion = "Se han exportado los datos en el fichero datosGatos.csv con éxito";
        } else {
            $confirmacion = "Error en exportar";
        }
        fclose($file);
    }
    ?>
    <nav>
        <ul>
            <li><a href="index.php">Página principal</a></li>
            <li><a href="create.php">Nuevo gato</a></li>
            <li><a href="list.php">Lista gato</a></li>
            <li><a  href="import.php">Importar gato</a></li>
            <li><a class="active" href="export.php">Exportar gatos</a></li>

        </ul>
    </nav>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
        <input type="submit" value="export" />
    </form>
    <h2><?php echo $confirmacion; ?></h2>
</body>

</html>