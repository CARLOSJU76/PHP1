

<?php 
    class UserModel{
        private $conn;
        private $table="usuarios";
        private $tipoD="tipo_documento";

        public function __construct($db){
            $this->conn= $db;
        }
        public function updateUser($num_docum1, $id_tipoD, $nombre, $foto, $telefono, $num_docum){
            $query= " UPDATE " .$this->table . " SET num_docum=?, id_tipoD=?, nombre=?, foto=?, telefono=? WHERE num_docum=?";
            $stmt=$this->conn->prepare($query);
            $stmt->execute([$num_docum1, $id_tipoD, $nombre, $foto, $telefono, $num_docum]);
        }
        public function getUserByNumD($num_docum){
            $query= "SELECT * FROM " .$this->table . " WHERE num_docum=?";
            $stmt= $this->conn->prepare($query);
            $stmt->execute([$num_docum]);
            return  $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        public function getNumD(){
            $query= "SELECT num_docum, nombre FROM ".$this->table;
            $stmt= $this->conn->query($query);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        public function getTipoD(){
            $query= "SELECT * FROM " .$this->tipoD;
            $stmt= $this->conn->query($query);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }

?>