<?php 
    class Database
    {
        private $host="localhost";
        private $dbname="licorera";
        private $username="root";
        private $password="";
        private $charset="utf8";

        public function conectar(){
            
            $connection = "mysql: host=".$this->host."; dbname=".$this->dbname."; charset=".$this->charset;
            
            $option=[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION];

            try {
                $pdo = new PDO(
                    $connection, 
                    $this->username, 
                    $this->password, 
                    $option
                );
                return $pdo;
            } catch(PDOException $e){
                return "Error: ".$e->getMessage();
                die();//Termina la ejecución
            }
        }

        private function registrar($query, $data) {
            $connection = $this->conectar();
            try {
                $statement = $connection->prepare($query);

                $connection->beginTransaction();
                $statement->execute($data);
                $connection->commit();

                return $connection->lastInsertId();;
            } catch (Exception $e) {
                $connection->rollBack();
                echo("Error: ".$e->getMessage());
                die();
            } 
        }

        public function registrarUsuario($nombre, $correo, $password, $cedula) {
            $query = "INSERT INTO usuarios (nombre, cedula, correo, password) VALUES(?,?,?,?)";
            $data = [$nombre, $cedula, $correo, $password];
            return $this->registrar($query, $data);
        }
    }
?>