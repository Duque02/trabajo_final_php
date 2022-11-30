<?php
    require("./repositorio/Database.php");
    require("./repositorio/Session.php");

    $db = new Database();

    $correo = $_POST['email'];
    $password = $_POST['contrasena'];

    $usuario = $db->validarSession($correo, $password);

    if(!isset($usuario) || empty($usuario)) {
        echo("El usuario no existe");
        return;
    } 

    $session = new Session();

    $session->guardarIdUsuario($usuario['id']);
    header("Location: home.php");
    exit();
?>