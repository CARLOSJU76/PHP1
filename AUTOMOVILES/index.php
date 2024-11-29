<?php

    require_once('controllers/UserController.php');


    $userController= new UserController();

    $action= $_GET['action'] ?? 'dashboard';

    switch ($action){
        case 'insertAutomovil':
            if($_SERVER["REQUEST_METHOD"]== "POST"){
                $userController->insertAutomovil();
                
            }else {
                include './views/insert_automovil.php';
            }
                break;

        case 'insertColor':
             if($_SERVER["REQUEST_METHOD"]== "POST"){
                 $userController->insertColor();
             }else {
                 include './views/insert_color.php';
             }
                 break;

        case 'insertMarca':
            if($_SERVER["REQUEST_METHOD"]== "POST"){
                $userController->insertMarca();
            }else {
                    include './views/insert_marca.php';
            }
            break;

        case'insertLinea':
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                 $userController->insertLinea();
            }else{
                 include './views/insert_linea.php';
            }
            break;

        case'listAutomovil':
            $autos= $userController->listAutomovil();
            include './views/list_automovil.php';
            break;

        case 'searchAutoByPlaca':
            $autos= $userController->getAutoByPlaca();
            include './views/auto_By_Placa.php';
            break;   
            
        // case 'searchProducts':
        //     $products= $userController->getProducts();
        //     include './views/list_Products.php';
        //     break;

        // case 'listCompra':
        //     $compras=$userController->listCompra();
        //     include './views/list_Compra.php';
        //     break;

        // case 'listCompraByND':
        //     $compras=$userController->getCompraByND();
        //     include './views/listCompraByND.php';
        //     break;

        // case 'searchProductByName':
        //     $products= $userController->productsByName();
        //     include './views/list_Product_By_Name.php';
        //     break;

        
        
            
        // case 'insertCompra':
        //     if($_SERVER['REQUEST_METHOD']=="POST"){
        //         $userController->insertCompra();
        //     }else{
        //         include './views/insertCompra.php';
        //     }
        //     break;
        // case 'openForm':
           
        //     $users=$userController->getUserByNumD();            
          
        //     include './views/list_user_By_Num_Docum.php';
        //     break;
        
        //     case 'updateUser':      
        //         if($_SERVER["REQUEST_METHOD"]== "POST"){
        //             $userController->updateUser();
        //             $usuarios=$userController->getUserByNumD();
        //         }else{
        //             $userData=$userController->getUserByNumD();
        //             include './views/updateUserForm.php';
        //         }
        //         break; 
            
        //     case 'deleteUserByND':
        //         $users= $userController->getUserByNumD();
        //     include './views/deleteUserByND.php';
        //     break;  

        //     case 'deleteUser':
        //             $userController->deleteUser();
        //             break;


        //         // if($_SERVER["REQUEST_METHOD"]=="GET"){
        //         //     $userController->deleteUser();
        //         // }else{

        default:
        include_once('views/dashboard.php');
        break;
    }

?>