<?php
    class UserModel{
        private $conn;
        private $table= 'usuarios';
        private $tablePr='producto';
        private $tipoD='tipo_documento';
        private $tipoP='tipo_producto';
        private $compra='compra';

        public function __construct($db){
            $this->conn=$db;
        }
        public function insertUser($document_number, $document_type, $name, $phone, $photo){
            $consulta= "INSERT INTO " .$this->table . "(num_docum, id_tipoD, nombre, telefono, foto) VALUES (?,?,?,?,?)";
            $stmt= $this->conn->prepare($consulta);
            $stmt->execute([$document_number, $document_type, $name, $phone, $photo]);
        }
        public function insertProduct($nombre, $marca, $id_tipoP, $precio, $foto){
            $consulta= "INSERT INTO " .$this->tablePr . "(nombre, marca, id_tipoP, precio, foto) VALUES (?,?,?,?,?)";
            $stmt=$this->conn->prepare($consulta);
            $stmt->execute([$nombre, $marca, $id_tipoP, $precio, $foto]);
        }
        public function insertTipoD($tipo_documento){
            $consulta="INSERT INTO " .$this->tipoD . "(tipo_documento) VALUES (?)";
            $stmt= $this->conn->prepare($consulta);
            $stmt->execute([$tipo_documento]);
        }
        public function insertTipoP($tipo_product){
            $consulta="INSERT INTO " .$this->tipoP . "(tipo_producto) VALUES (?)";
            $stmt= $this->conn->prepare($consulta);
            $stmt->execute([$tipo_product]);
        }
        public function insertCompra($num_docum, $id_producto){
            $consulta="INSERT INTO " .$this->compra . "(num_docum, id_producto) VALUES(?,?)";
            $stmt= $this->conn->prepare($consulta);
            $stmt->execute([$num_docum, $id_producto]);        
        }
        

        public function getUsers(){
            $query = "SELECT*FROM " . $this->table;
            $stmt = $this->conn->query($query);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        public function getUsersByName($name){
            $query= "SELECT * FROM " .$this->table . " WHERE nombre LIKE ?";
            $stmt= $this->conn->prepare($query);
            $stmt->execute(['%' . $name . '%']);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        public function getProducts(){
            $query="SELECT * FROM " .$this->tablePr;
            $stmt= $this->conn->query($query);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        public function productsByName($name){
            $query= "SELECT * FROM " .$this->tablePr . " WHERE nombre LIKE ?";
            $stmt= $this->conn->prepare($query);
            $stmt->execute(['%' . $name . '%']);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        public function getTipoP(){
            $query="SELECT * FROM " .$this->tipoP;
            $stmt=$this->conn->query($query);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>