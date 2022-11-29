<?php
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $password = $_POST["password"];
    $cedula = $_POST["cedula"];

    if(!isset($nombre) || !isset($correo) || !isset($password) || !isset($cedula)) {
        echo("Asegurate de ingresar todos los campos");
        return;
    } 

    require("./repositorio/Database.php");
    require("./repositorio/Session.php");

    $db = new Database();

    //la funcion retorna un valor, no retorna los parametros que tiene dentro, esos solo lo recibe. 
    $resultado = $db->registrarUsuario($nombre, $correo, $password, $cedula);

    if($resultado === false) {
        echo("Ocurrió en la base de datos");
        return;
    } 

    $session = new Session();
    $session->guardarIdUsuario($resultado);

    header("Location: home.php");
    exit();
?>