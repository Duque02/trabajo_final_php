<?php
    class Session {

        function __construct() {
            session_start();
        }

        public function obtenerIdUsuario() {
            return $_SESSION["idUsuario"];
        }

        public function guardarIdUsuario($idUsuario) {
            $_SESSION["idUsuario"] = $idUsuario;
        }
    }
?>