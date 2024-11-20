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
         
        public function insertUser(){
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                $document_number=$_POST['numero_documento'];
                $document_type=$_POST['tipo_documento'];
                $name= $_POST['nombre'];
                $phone=$_POST['telefono'];


                $photo= $_FILES['foto']['name'];
                $target_dir="photo/";
                $target_file= $target_dir .basename($photo);
                move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file);
                
                $this->userModel->insertUser($document_number,$document_type, $name, $phone, $photo);
                header("Location: index.php?action=dashboard");
            }
        }
        public function updateUser(){
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                $num_docum=$_POST['num_docum'];
                $id_tipoD= $_POST['id_tipoD'];
                $nombre= $_POST['nombre'];
                $telefono=$_POST['telefono'];
                $foto= $_FILES['foto']['name'] ? $_FILES['foto']['name']:null; //borrando archivo de imagen
    
                if($foto){
                    $target_dir="photo/";
                    $target_file=$target_dir.basename($foto);
                    move_uploaded_file($_FILES['foto']['tmp_name'], $target_file);
                }else{
                    $foto=$_POST['foto_actual'];//Mantener la foto actual
                }
    
                $this->userModel->updateUser($num_docum, $id_tipoD, $nombre, $telefono, $foto)
            }
        }
    public function insertProduct(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $nombre=$_POST['nombre'];
            $marca=$_POST['marca'];
            $id_tipoP=$_POST['id_tipoP'];
            $precio=$_POST['precio'];

            $photo= $_FILES['foto']['name'];
                $target_dir="photo/";
                $target_file= $target_dir .basename($photo);
                move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file);

            $this->userModel->insertProduct($nombre,$marca, $id_tipoP, $precio, $photo);
            header("Location: index.php?action=dashboard");
        }
    }
    public function insertTipoD(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
       
            $t_documento=$_POST['tipo_documento'];
            $this->userModel->insertTipoD($t_documento);
        header("Location: index.php?action=dashboard");
        }        
    }
    public function insertTipoP(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $t_product=$_POST['tipo_product'];
            $this->userModel->insertTipoP($t_product);
            header("Location: index.php?action=dashboard");

        }
    }
    public function insertCompra(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $num_docum=$_POST['num_docum'];
            $id_producto=$_POST['id_producto'];
            $this->userModel->insertCompra($num_docum, $id_producto);
            header("Location: index.php?action=dashboard");
        }
    }
    public function listUsers(){
        return $this->userModel->getUsers();
    }
    public function UsersByName(){
        $name=$_GET['name'] ?? '';
        return $this->userModel->getUsersByName($name);
    }
    public function getProducts(){
        return $this->userModel->getProducts();
    }
    public function productsByName(){
        $name=$_GET['name'] ?? '';
        return $this->userModel->productsByName($name);
    }
    public function getTipoP(){
        return $this->userModel->getTipoP();
    }
    public function getTipoD(){
        return $this->userModel->getTipoD();
    }
    public function getNumD(){
        return $this->userModel->getNumD();
    }
    public function getProducto(){
        return $this->userModel->getProducto();
    }
    
    }
?>