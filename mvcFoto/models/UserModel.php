<?php
    class UserModel{
        private $conn;
        private $table= 'usuarios';
        private $tablePr='producto';

        public function __construct($db){
            $this->conn=$db;
        }
        public function insertUser($document_number, $document_type, $name, $phone, $photo){
            $consulta= "INSERT INTO " .$this->table . "(num_docum, tipo_docum, nombre, telefono, foto) VALUES (?,?,?,?,?)";
            $stmt= $this->conn->prepare($consulta);
            $stmt->execute([$document_number, $document_type, $name, $phone, $photo]);
        }
        public function insertProduct($nombre, $marca, $precio, $foto){
            $consulta= "INSERT INTO " .$this->tablePr . "(nombre, marca, precio, foto) VALUES (?,?,?,?)";
            $stmt=$this->conn->prepare($consulta);
            $stmt->execute([$nombre, $marca, $precio, $foto]);
        }

        public function getUsers(){
            $query = "SELECT*FROM " . $this->table;
            $stmt = $this->conn->query($query);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        public function getUsersByName($name){
            $query= "SELECT * FROM " .$this->table . "WHERE nombre LIKE ?";
            $stmt= $this->conn->prepare($query);
            $stmt->execute(['%' .$name .'%']);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>