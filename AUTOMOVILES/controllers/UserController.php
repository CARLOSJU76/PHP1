<?php
    include_once('./config/Conexion.php');
    include_once('./models/UserModel.php');

    class UserController{
        private $db;
        private $userModel;

        public function dashboard(){
            require_once('./views/dashboard.html');

        }
        public function __construct(){
            $database= new Conexion();
            $this->db= $database->getConnection();
            $this->userModel= new UserModel($this->db);
        }
         
        public function insertAutomovil(){
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                $placa=$_POST['placa'];
                $id_color=$_POST['id_color'];
                $modelo= $_POST['modelo'];
                $id_marca=$_POST['id_marca'];
                $id_linea=$_POST['id_linea'];


               
                
                $this->userModel->insertAutomovil($placa, $id_color,$modelo, $id_marca, $id_linea);
                //header("Location: index.php?action=dashboard");
                echo"<br>El vehiculo  ha sido incluido en la base de datos";
                echo "<form action='index.php?action=dashboard' method='post' enctype='multipart/form-data'>
                <button type='submit' name='action' value='dashboard'>Dashboard</button>
                </form>";
            }
        }
        public function insertColor(){
            if($_SERVER['REQUEST_METHOD']=='POST'){
       
             $color=$_POST['color'];
             $this->userModel->insertColor($color);
         header("Location: index.php?action=dashboard");
            }        
        }
        public function getColor(){
         return $this->userModel->getColor();
        }
        public function insertMarca(){
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $marca=$_POST['marca'];
                $this->userModel->insertMarca($marca);
                header("Location: index.php?action=dashboard");

            }
        }
        public function getMarca(){
            return $this->userModel->getMarca();
        }
        public function insertLinea(){
         if($_SERVER['REQUEST_METHOD']=='POST'){
            $lineaM=$_POST['linea'];     

             $this->userModel->insertLinea($lineaM);
             header("Location: index.php?action=dashboard");
            }
        }
        public function getLinea(){
         return $this->userModel->getLinea();
        }
        public function getPlaca(){
            return $this->userModel->getPlaca();
        }
        public function listAutomovil(){
            return $this->userModel->getAutomovil();
        }
        public function getAutoByPlaca(){
            $placa=$_GET['placa'] ?? '';
            return $this->userModel->getAutoByPlaca($placa);
        }
   
        public function updateCar(){
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                $placa1=$_POST['placa1'];
                $placa=$_POST['placa'];
                $id_color= $_POST['id_color'];
                $modelo= $_POST['modelo'];
                $id_marca=$_POST['id_marca'];
                $id_linea= $_POST['id_linea'];    
                 
    
                 $this->userModel->updateCar($placa1, $id_color, $modelo, $id_marca, $id_linea, $placa);
                 echo"<br>El vehículo ha sido actualizado exitosamente<br>";
                 echo "<form action='index.php?action=dashboard' method='post' enctype='multipart/form-data'>
                 <button type='submit' name='action' value='dashboard'>Dashboard</button>
                 </form>";
            }
        } 
        public function deleteCar(){
        $placa=$_GET['placa'] ?? '';
       
        
        return $this->userModel->deleteCar($placa); 
        
               
    }
    
}
?>