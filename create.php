<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/botonera.css">
        <link rel="stylesheet" href="css/form.css">
        <title>Crea gato</title>
    </head>
    <body>
        <?php include_once "databaseManagement.inc.php";
        if(count($_POST)>0){
            $avatar= $_FILES["avatar"]["name"];
            $temp = $_FILES['avatar']['tmp_name'];  

            /*if (move_uploaded_file($temp, 'images/'.$avatar)) {
                //Cambiamos los permisos del archivo a 777 para poder modificarlo posteriormente
                chmod('images/'.$avatar, 777);
            }*/
            $id=insertaGato($_POST["nombre"],$_POST["dni"],$_POST["edad"],$_POST["sexo"],$_POST["raza"],$_POST["fechaAlta"],$avatar);
            if($id!=0){
                header("Location: view.php?varId=$id");
                exit();
            }else{
                echo "Datos incorrectos";
            }
        }
        ?>
        <nav>
            <ul>
                <li><a href="index.php">Página principal</a></li>
                <li><a class="active" href="create.php">Nuevo elemento</a></li>
                <li><a href="list.php">Lista elementos</a></li>
                <li><a href="import.php">Importar elementos</a></li>
            </ul>
        </nav>
        <form class="form-register" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
            <h2 class="form-titulo">Características:</h2>
            <div class="contenedor-inputs">
                <input type="text" name="nombre" placeholder="nombre" class="input-100" required>
                <input type="text" name="raza" placeholder="raza" class="input-100" required>
                <input type="text" name="sexo" placeholder="sexo" class="input-100" required>
                <input type="number" name="dni" placeholder="dni" class="input-48" required>
                <input type="number" name="edad" placeholder="edad" class="input-48"required >
                <input type="date" name="fechaAlta" placeholder="Fecha de Alta" class="input-100" required>
                <input type="file" name="avatar" accept="image/png, image/jpeg" class="input-100">
                <input type="submit" value="Registrar" class="btn-enviar">
                <div id="errores"></div>
            </div>
        </form>

    </body>
</html>