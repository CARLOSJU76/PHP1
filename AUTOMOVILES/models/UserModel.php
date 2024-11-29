<?php
    class UserModel{
        private $conn;
        private $automoviles= 'automoviles';
        private $color='color';
        private $marca='marca';
        // private $tipoP='tipo_producto';
        // private $compra='compra';

        public function __construct($db){
            $this->conn=$db;
        }
        public function insertUser($placa, $id_color, $modelo, $id_marca, $id_linea){
            $consulta= "INSERT INTO " .$this->automoviles . "(placa, id_color, modelo, id_marca, id_linea) VALUES (?,?,?,?,?)";
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
    //     public function insertProduct($nombre, $marca, $id_tipoP, $precio, $foto){
    //         $consulta= "INSERT INTO " .$this->tablePr . "(nombre, marca, id_tipoP, precio, foto) VALUES (?,?,?,?,?)";
    //         $stmt=$this->conn->prepare($consulta);
    //         $stmt->execute([$nombre, $marca, $id_tipoP, $precio, $foto]);
    //     }
    //     public function insertTipoD($tipo_documento){
    //         $consulta="INSERT INTO " .$this->tipoD . "(tipo_documento) VALUES (?)";
    //         $stmt= $this->conn->prepare($consulta);
    //         $stmt->execute([$tipo_documento]);
    //     }
    //     
    //     public function insertCompra($num_docum, $id_producto, $fecha, $hora){
    //         $consulta="INSERT INTO " .$this->compra . "(num_docum, id_producto, fecha, hora) VALUES(?,?,?,?)";
    //         $stmt= $this->conn->prepare($consulta);
    //         $stmt->execute([$num_docum, $id_producto,$fecha,$hora]);        
    //     }
        

    //     public function getUsers(){
    //         $query = "SELECT*FROM " . $this->table;
    //         $stmt = $this->conn->query($query);
    //         return $stmt->fetchAll(PDO::FETCH_ASSOC);
    //     }
    //     public function getUsersByName($name){
    //         $query= "SELECT * FROM " .$this->table . " WHERE nombre LIKE ?";
    //         $stmt= $this->conn->prepare($query);
    //         $stmt->execute(['%' . $name . '%']);
    //         return $stmt->fetchAll(PDO::FETCH_ASSOC);
    //     }
    //     public function getUserByNumD($num_docum){
    //         $query= "SELECT * FROM " .$this->table . " WHERE num_docum=?";
    //         $stmt= $this->conn->prepare($query);
    //         $stmt->execute([$num_docum]);
    //         return  $stmt->fetchAll(PDO::FETCH_ASSOC);
    //     }
    //     public function getProducts(){
    //         $query="SELECT * FROM " .$this->tablePr;
    //         $stmt= $this->conn->query($query);
    //         return $stmt->fetchAll(PDO::FETCH_ASSOC);
    //     }
    //     public function productsByName($name){
    //         $query= "SELECT * FROM " .$this->tablePr . " WHERE nombre LIKE ?";
    //         $stmt= $this->conn->prepare($query);
    //         $stmt->execute(['%' . $name . '%']);
    //         return $stmt->fetchAll(PDO::FETCH_ASSOC);
    //     }
    //     
    //     public function getTipoD(){
    //         $query= "SELECT * FROM " .$this->tipoD;
    //         $stmt= $this->conn->query($query);
    //         return $stmt->fetchAll(PDO::FETCH_ASSOC);
    //     }
    //     
    //     public function getProducto(){
    //         $query= "SELECT id, nombre FROM " .$this->tablePr;
    //         $stmt= $this->conn->query($query);
    //         return $stmt->fetchAll(PDO::FETCH_ASSOC);
    //     }
    //     public function updateUser($num_docum1, $id_tipoD, $nombre, $telefono, $foto, $num_docum){
    //         $query= "UPDATE ".$this->table . " SET num_docum=?, id_tipoD=?, nombre=?, telefono=?, foto=? WHERE num_docum=?";
    //         $stmt=$this->conn->prepare($query);
    //         $stmt->execute([$num_docum1, $id_tipoD, $nombre, $telefono, $foto, $num_docum]);
    //     }
    //     public function listCompra(){
    //         $query= "SELECT compra.fecha AS Fecha, compra.hora AS Hora, usuarios.nombre AS Usuario, producto.nombre AS Producto FROM " .$this->compra .
    //                 " INNER JOIN " .$this->table .
    //                 " ON " .$this->compra.".num_docum=". $this->table.".num_docum".
    //                 " INNER JOIN " .$this->tablePr.
    //                 " ON ".$this->compra.".id_producto= ".$this->tablePr.".id";            
    //         $stmt = $this->conn->query($query);
    //         return $stmt->fetchAll(PDO::FETCH_ASSOC);
    //     }
    //     public function getCompraByND($num_docum){
    //         $query= "SELECT usuarios.nombre AS Cliente, producto.nombre AS Producto, compra.fecha AS Fecha, compra.hora AS Hora FROM " .$this->compra .
    //                 " INNER JOIN " .$this->table . " ON ". $this->compra. ".num_docum=". $this->table.".num_docum".
    //                 " INNER JOIN " .$this->tablePr . " ON ". $this->compra.".id_producto=".$this->tablePr.".id".
    //                 " WHERE " .$this->table.".num_docum=?";

    //         $stmt= $this->conn->prepare($query);
    //         $stmt->execute([$num_docum]);
    //         return $stmt->fetchAll(PDO::FETCH_ASSOC);        
    //     }
    //     public function deleteUser($num_docum){
    //         $query = "DELETE FROM ".$this->table. " WHERE num_docum= ?";
    //         $stmt= $this->conn->prepare($query);
    //         $stmt->execute([$num_docum]);
    //     }
    
}
?>