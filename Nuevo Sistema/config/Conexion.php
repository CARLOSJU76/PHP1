<?php

    class Conexion{
        private $host="localhost";
        private $db="persona";
        private $user="root";
        private $pass="";
        public $conn;

        public function getConnection(){
            $this->conn=null;
            try{
                $this->conn=new PDO("mysql: host=". $this->host .";port=3307;dbname=".$this->db, $this->user,$this->pass);
                $this->conn->exec("set names utf8");
                echo "Conexión exitosa!!";
            }catch(PDOException $exception){
                echo "Error de Conexión:". $exception->getMessage();
            }
            return $this->conn;
        }
    }

?>