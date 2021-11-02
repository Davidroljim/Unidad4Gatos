<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/botonera.css">
        <link rel="stylesheet" href="css/form.css">
        <title>Crea elemento</title>
    </head>
    <body>
        <nav>
            <ul>
                <li><a href="index.php">Página principal</a></li>
                <li><a class="active" href="create.php">Nuevo elemento</a></li>
                <li><a href="list.php">Lista elementos</a></li>
                <li><a href="import.php">Importar elementos</a></li>
            </ul>
        </nav>
        <form class="form-register">
            <h2 class="form-titulo">Características:</h2>
            <div class="contenedor-inputs">
                <input type="text" name="texto1" placeholder="Texto 1" class="input-100" required>
                <input type="text" name="text2" placeholder="Texto 2" class="input-100" required>
                <input type="text" name="texto3" placeholder="Texto 3" class="input-100" required>
                <input type="number" name="numero1" placeholder="Número 1" class="input-48" required>
                <input type="number" name="numero2" placeholder="Número 2" class="input-48"required >
                <input type="date" name="fecha" placeholder="Fecha" class="input-100" required>
                <input type="file" name="avatar" accept="image/png, image/jpeg" class="input-100">
                <input type="submit" value="Registrar" class="btn-enviar">
                <div id="errores"></div>
            </div>
        </form>
    </body>
</html>