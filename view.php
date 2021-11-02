<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/botonera.css">
        <link rel="stylesheet" href="css/view.css">
        <title>Vista detalle</title>
    </head>
    <body>
        <nav>
            <ul>
                <li><a href="index.php">Página principal</a></li>
                <li><a href="create.php">Nuevo elemento</a></li>
                <li><a class="active" href="list.php">Lista elementos</a></li>
                <li><a href="import.php">Importar elementos</a></li>
            </ul>
        </nav>  

        <div class="container">
            <header>
                <div class="bio">
                    <img src="" alt="background" class="bg"><!--aquí va el link a la imagen-->
                    <div>
                        <h3>Valor texto 1</h3><!--aquí va el valor del texto 1-->
                        <p>Valor texto 2</p><!-- aquí va el valor del texto 2--> 
                        <p>Valor texto 3</p><!-- aquí va el valor del texto 3-->
                    </div>
                </div>
            </header>

            <div class="content">
                <div class="data">
                    <ul>
                        <li>
                            2,934 <!-- aquí va el valor del número 1-->
                            <span>Número 1</span><!-- pon aquí el nombre de tu número 1-->
                        </li>
                        <li>
                            1,119 <!-- aquí va el valor del número 2-->
                            <span>Número 2</span><!-- pon aquí el nombre de tu número 2-->
                        </li>
                        <li>
                            530 <!-- aquí va el valor de la fecha-->
                            <span>Fecha</span><!-- pon aquí el nombre de tu fecha-->
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </body>
</html>