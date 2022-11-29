<?php 
    class Database
    {
        private $host="localhost";
        private $dbname="licorera";
        private $username="root";
        private $password="";

        private function conectar(){
            
            try {
                $connection = new mysqli(
                    $this->host,
                    $this->username,
                    $this->password,
                    $this->dbname
                );

                if ($connection->connect_error) {
                    die("Connection failed: " . $connection->connect_error);
                }

                return $connection;
            } catch(Exception $e) {
                echo("Error: ".$e->getMessage());
                die();
            }
        }

        private function registrar($query) {
            try {
                $connection = $this->conectar();

                $seCompletoLaOperacion = $connection->query($query);	
                
                if(!$seCompletoLaOperacion) return false;
    
                $idGenerado = $connection->insert_id;
                $connection->close();
                return $idGenerado;
            } catch (Exception $e) {
                echo("Error: ".$e->getMessage());
                die();
            } 
        }

        public function registrarUsuario($nombre, $correo, $password, $cedula) {
            $query = "INSERT INTO usuarios (nombre, cedula, correo, password) VALUES('$nombre', '$cedula', '$correo', '$password')";
            return $this->registrar($query);
        }
    }

?>