<?php
    class UserModel{
        private $conn;
        private $automovil= 'automovil';
        private $color='color';
        private $marca='marca';
        private $linea='linea';
        
        public function __construct($db){
            $this->conn=$db;
        }
        public function insertAutomovil($placa, $id_color, $modelo, $id_marca, $id_linea){
            $consulta= "INSERT INTO " .$this->automovil . "(placa, id_color, modelo, id_marca, id_linea) VALUES (?,?,?,?,?)";
            $stmt= $this->conn->prepare($consulta);
            $stmt->execute([$placa, $id_color, $modelo, $id_marca, $id_linea]);
        }
        public function insertColor($color){
                $consulta="INSERT INTO " .$this->color. "(color) VALUES (?)";
                $stmt= $this->conn->prepare($consulta);
                $stmt->execute([$color]);
        }
        public function getColor(){
                    $query="SELECT * FROM " .$this->color;
                    $stmt=$this->conn->query($query);
                    return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        public function insertMarca($marca){
                    $consulta="INSERT INTO " .$this->marca . "(marca) VALUES (?)";
                    $stmt= $this->conn->prepare($consulta);
                    $stmt->execute([$marca]);
        }
        public function getMarca(){
                     $query= "SELECT id, marca FROM ".$this->marca;
                     $stmt= $this->conn->query($query);
                     return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        public function insertLinea($lineaM){
                    $consulta= "INSERT INTO " .$this->linea . "(linea) VALUES (?)";
                    $stmt=$this->conn->prepare($consulta);
                    $stmt->execute([$lineaM]);
        }
        public function getLinea(){
                    $query = "SELECT*FROM " . $this->linea;
                    $stmt = $this->conn->query($query);
                    return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        public function getPlaca(){
            $query = "SELECT placa FROM " . $this->automovil;
            $stmt = $this->conn->query($query);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
}


        public function getAutomovil(){
            $consulta= "SELECT automovil.placa AS Placa, color.color AS Color, automovil.modelo AS Modelo, marca.marca AS Marca, linea.linea AS Línea FROM " .$this->automovil .
                        " INNER JOIN " .$this->color . " ON ". $this->automovil. ".id_color=". $this->color.".id".
                        " INNER JOIN " .$this->marca . " ON ". $this->automovil.".id_marca=".$this->marca.".id".
                        " INNER JOIN " .$this->linea . " ON ". $this->automovil.".id_linea=".$this->linea.".id";
            $stmt= $this->conn->query($consulta);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        public function getAutoByPlaca($placa){
            $consulta=  " SELECT automovil.placa AS Placa, color.color AS Color, automovil.modelo AS Modelo, marca.marca AS Marca, linea.linea AS Línea FROM " .$this->automovil .
                        " INNER JOIN " .$this->color . " ON ". $this->automovil. ".id_color=". $this->color.".id".
                        " INNER JOIN " .$this->marca . " ON ". $this->automovil.".id_marca=".$this->marca.".id".
                        " INNER JOIN " .$this->linea . " ON ". $this->automovil.".id_linea=".$this->linea.".id".
                        " WHERE automovil.placa LIKE ?";
            $stmt= $this->conn->prepare($consulta);
            $stmt->execute(['%' . $placa . '%']);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        public function updateCar($placa1, $id_color, $modelo, $id_marca, $id_linea, $placa){
                    $query= "UPDATE ".$this->automovil . " SET placa=?, id_color=?, modelo=?, id_marca=?, id_linea=? WHERE placa=?";
                    $stmt=$this->conn->prepare($query);
                    $stmt->execute([$placa1, $id_color, $modelo, $id_marca, $id_linea, $placa]);
        }

    
        public function deleteCar($placa){
            $query = "DELETE FROM ".$this->automovil. " WHERE placa= ?";
            $stmt= $this->conn->prepare($query);
            $stmt->execute([$placa]);
        }
    
}
?>