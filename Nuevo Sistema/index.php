<?php 
    require_once('./controllers/UserController.php');

    $userController= new UserController();

    $action= $_GET['action'] ?? 'dashboard';

    switch($action){
        case 'openForm':
            $users=$userController->getUserByNumD();            
          
            include './views/list_user_By_Num_Docum.php';
            break;

           

         case 'updateUser':      
            if($_SERVER["REQUEST_METHOD"]== "POST"){
                $userController->updateUser();
                $usuarios=$userController->getUserByNumD();
            }else{
                $userData=$userController->getUserByNumD();
                include './views/updateUserForm.php';
            }
            break;  
            
            default:
            include_once('views/dashboard.html');
            break;  
    }


?>