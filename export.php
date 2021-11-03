<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/botonera.css">
    <title>Document</title>
</head>

<body>
    <?php include "databaseManagement.inc.php";
    $gatos= obtenerTodos();
    $file = fopen("datosGatos.csv", 'a');
    for ($i=0; $i < count($gatos) ; $i++) { 
        $gatoDatos= array($gatos[$i]["id"],$gatos[$i]["nombre"],$gatos[$i]["dni"],$gatos[$i]["raza"],$gatos[$i]["fechaAlta"]);
        fputcsv($file,$gatoDatos,',');
    }
    fclose($file);
    ?>
    <nav>
        <ul>
            <li><a href="index.php">Página principal</a></li>
            <li><a href="create.php">Nuevo gato</a></li>
            <li><a href="list.php">Lista gato</a></li>
            <li><a class="active" href="import.php">Importar gato</a></li>
        </ul>
    </nav>
   
</body>

</html>