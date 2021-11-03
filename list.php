<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/botonera.css">
    <link rel="stylesheet" href="css/table.css">
    <title>Lista elementos</title>
</head>
<body>
<?php include_once "databaseManagement.inc.php";?>

    <nav>
        <ul>
            <li><a href="index.php">Página principal</a></li>
            <li><a href="create.php">Nuevo gato</a></li>
            <li><a class="active" href="list.php">Lista gatos</a></li>
            <li><a href="import.php">Importar gatos</a></li>
        </ul>
    </nav>
    <table class="styled-table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>DNI</th>
                <th>Raza</th>
                <th>Fecha</th>
                <th>Detalle</th>
                <th>Editar</th>
                <th>Borrar</th>
            </tr>
        </thead>
        <tbody>
           <?php
           $datos= obtenerTodos();
           for ($i=0; $i <count($datos) ; $i++) { 
               echo "<tr><td>".$datos[$i]["nombre"]."</td><td>".$datos[$i]["dni"]."</td><td>".$datos[$i]["raza"]."</td><td>".$datos[$i]["fechaAlta"]."</td><td><a href='view.php?varId=".$datos[$i]["id"]."'>más detalles</a></td><td><a href='edit.php?varId=".$datos[$i]["id"]."'>Actualizar</a></td><td><a href='delete.php?varId=".$datos[$i]["id"]."'>Borrar</a></td></tr>";
           }
           
           
           ?>
        </tbody>
    </table>
</body>
</html>