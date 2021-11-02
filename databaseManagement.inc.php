<?php
$servidor = "localhost";
$baseDatos = "animales";
$usuario = "root";
$pass = "root";
function obtenerGato($id)
{
    try {
        $con = new PDO("mysql:host=" . $GLOBALS['servidor'] . ";dbname=" . $GLOBALS['baseDatos'], $GLOBALS['usuario'], $GLOBALS['pass']);
    } catch (PDOException $e) {
        echo $e;
    }

    $sql = $con->prepare("SELECT * from gatos where id=:id");
    $sql->bindParam(":id", $id);
    $sql->execute();
    $row = $sql->fetch(PDO::FETCH_ASSOC);
    $con = null;
    return $row;
}
function eliminarGato($id)
{
    try {
        $con = new PDO("mysql:host=" . $GLOBALS['servidor'] . ";dbname=" . $GLOBALS['baseDatos'], $GLOBALS['usuario'], $GLOBALS['pass']);
    } catch (PDOException $e) {
        echo $e;
    }
    $retorno = false;
    $sql = $con->prepare("DELETE from gatos where id=:id");
    $sql->bindParam(":id", $id);
    $sql->execute();
    if ($sql->rowCount() > 0) {
        $retorno = true;
    }
    $con = null;
    return $retorno;
}
function editarGato($id, $nombre, $dni, $edad, $sexo, $raza, $fechaAlta, $foto)
{
    try {
        $con = new PDO("mysql:host=" . $GLOBALS['servidor'] . ";dbname=" . $GLOBALS['baseDatos'], $GLOBALS['usuario'], $GLOBALS['pass']);
    } catch (PDOException $e) {
        echo $e;
    }
    $retorno = false;
    $sql = $con->prepare("UPDATE gatos  set nombre=:nombre , dni=:dni, edad=:edad, sexo=:sexo, raza=:raza, fechaAlta=:fechaAlta, foto=:foto where id=:id;");
    $sql->bindParam(":id", $id);
    $sql->bindParam(":nombre", $nombre);
    $sql->bindParam(":dni", $dni);
    $sql->bindParam(":edad", $edad);
    $sql->bindParam(":sexo", $sexo);
    $sql->bindParam(":raza", $raza);
    $sql->bindParam(":fechaAlta", $fechaAlta);
    $sql->bindParam(":foto", $foto);
    $sql->execute();
    if ($sql->rowCount() > 0) {
        $retorno = true;
    }
    $con = null;
    return $retorno;
}
function obtenerTodos()
{
    try {
        $con = new PDO("mysql:host=" . $GLOBALS['servidor'] . ";dbname=" . $GLOBALS['baseDatos'], $GLOBALS['usuario'], $GLOBALS['pass']);
    } catch (PDOException $e) {
        echo $e;
    }
    $sql = $con->prepare("SELECT id, nombre,raza,fechaAlta from gatos;");
    $sql->execute();
    $miArray = [];
    $cont = 0;
    while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
        $miArray[$cont] = $row;
        $cont++;
    }
    $con = null;
    return $miArray;
}
function insertaGato($nombre, $dni, $edad, $sexo, $raza, $fechaAlta, $foto)
{
    try {
        $con = new PDO("mysql:host=" . $GLOBALS['servidor'] . ";dbname=" . $GLOBALS['baseDatos'], $GLOBALS['usuario'], $GLOBALS['pass']);
    } catch (PDOException $e) {
        echo $e;
    }
    $sql = $con->prepare("INSERT into gatos values(null,:nombre,:dni,:edad,:sexo,:raza,:fechaAlta,:foto)");
    $sql->bindParam(":nombre", $nombre);
    $sql->bindParam(":dni", $dni);
    $sql->bindParam(":edad", $edad);
    $sql->bindParam(":sexo", $sexo);
    $sql->bindParam(":raza", $raza);
    $sql->bindParam(":fechaAlta", $fechaAlta);
    $sql->bindParam(":foto", $foto);
    $sql->execute();
    $id = $con->lastInsertId();
    $con = null;
    return $id;
}

