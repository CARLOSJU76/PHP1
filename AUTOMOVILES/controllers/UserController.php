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
        public function listAutomovil(){
            return $this->userModel->getAutomovil();
        }
        public function getAutoByPlaca(){
            $placa=$_GET['placa'] ?? '';
            return $this->userModel->getAutoByPlaca($placa);
        }
   
    //     public function updateUser(){
    //         if($_SERVER["REQUEST_METHOD"]=="POST"){
    //             $num_docum1=$_POST['num_docum1'];
    //             $num_docum=$_POST['num_docum'];
    //             $id_tipoD= $_POST['id_tipoD'];
    //             $nombre= $_POST['nombre'];
    //             $telefono=$_POST['telefono'];
    //             $foto= $_FILES['foto']['name'] ? $_FILES['foto']['name']:null; //borrando archivo de imagen
    
    //             if($foto){
    //                 $target_dir="photo/";
    //                 $target_file=$target_dir.basename($foto);
    //                 move_uploaded_file($_FILES['foto']['tmp_name'], $target_file);
    //             }else{
    //                 $foto=$_POST['foto_actual'];//Mantener la foto actual
    //             }
    
    //             $this->userModel->updateUser($num_docum1, $id_tipoD, $nombre, $telefono, $foto, $num_docum);
    //             echo"<br>El usuario ha sido actualizado exitosamente";
    //             echo "<form action='index.php?action=dashboard' method='post' enctype='multipart/form-data'>
    //             <button type='submit' name='action' value='dashboard'>Dashboard</button>
    //             </form>";
    //         }
    //     }
    
    
    // public function insertCompra(){
    //     if($_SERVER['REQUEST_METHOD']=='POST'){
    //         $num_docum=$_POST['num_docum'];
    //         $id_producto=$_POST['id_producto'];
            
    //         $fecha=$_POST['fecha'] ?? null;
    //         $hora=$_POST['hora'] ?? null;
    //         if (empty($fecha)) {
    //             $fecha = null;
    //         }
    //         if (empty($hora)) {
    //             $hora = null;
    //         }
    //         $this->userModel->insertCompra($num_docum, $id_producto,$fecha,$hora);
    //         header("Location: index.php?action=dashboard");
    //     }
    // }
    
    
    // public function getUserByNumD(){
    //     $num_docum=$_GET['num_docum'] ??'';
    //     return $this->userModel->getUserByNumD($num_docum);
    // }
    
    // public function productsByName(){
    //     $name=$_GET['name'] ?? '';
    //     return $this->userModel->productsByName($name);
    // }
    // public function getCompraByND(){
    //     $num_docum=$_GET['num_docum'] ?? '';
    //     return $this->userModel->getCompraByND($num_docum);
    // }
    // public function getTipoP(){
    //     return $this->userModel->getTipoP();
    // }
    
    
    // public function getProducto(){
    //     return $this->userModel->getProducto();
    // }
    // public function listCompra(){
    //     return $this->userModel->listCompra();
    // }
    // public function deleteUser(){
    //     $num_docum=$_GET['num_docum'] ?? '';
    //     echo"El Usuario ha sido removido de la base de datos";
    //     echo "<form action='index.php?action=dashboard' method='post' enctype='multipart/form-data'>
    //             <button type='submit' name='action' value='dashboard'>Dashboard</button>
    //             </form>";
    //     return $this->userModel->deleteUser($num_docum);        
    // }
    
}
?>