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
    public function insertProduct(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $nombre=$_POST['nombre'];
            $marca=$_POST['marca'];
            $precio=$_POST['precio'];

            $photo= $_FILES['foto']['name'];
                $target_dir="photo/";
                $target_file= $target_dir .basename($photo);
                move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file);

            $this->userModel->insertProduct($nombre,$marca, $precio, $photo);
            header("Location: index.php?action=dashboard");
        }
    }
    public function insertTipoD(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
       
            $tipo_documento=$_POST['tipo_documento'];
            $this->userModel->insertTipoD($tipo_documento);
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
    }
?>