<?php

    include_once('./models/userModel.php');
    include_once('./config/Conexion.php');

    class UserController{
        private $db;
        private $userModel;

        public  function __construct(){
            $database= new Conexion();
            $this->db= $database->getConnection();
            $this->userModel= new UserModel($this->db);
        }
        public function dashboard() {
            include ('./views/dashboard.php');
        }
        public function updateUser(){
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                $num_docum1=$_POST['num_docum1'];
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
    
                $this->userModel->updateUser($num_docum1, $id_tipoD, $nombre, $foto,$telefono, $num_docum);
                echo"<br>El usuario ha sido actualizado exitosamente";
                echo "<form action='index.php?action=dashboard' method='post' enctype='multipart/form-data'>
                <button type='submit' name='action' value='dashboard'>Dashboard</button>
                </form>";
              
            }
        }
        public function getUserByNumD(){
            $num_docum=$_GET['num_docum'] ??'';
           
            return $this->userModel->getUserByNumD($num_docum);
        }
        public function getNumD(){
            return $this->userModel->getNumD();
        }
        public function getTipoD(){
            return $this->userModel->getTipoD();
        }

    }
        

?>