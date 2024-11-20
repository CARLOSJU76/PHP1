<?php

    require_once('controllers/UserController.php');


    $userController= new UserController();

    $action= $_GET['action'] ?? 'dashboard';

    switch ($action){
        case 'insertUser':
            if($_SERVER["REQUEST_METHOD"]== "POST"){
                $userController->insertUser();
            }else {
                include './views/insert_user.php';
            }
                break;
        case'insertProduct':
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                $userController->insertProduct();
            }else{
                include './views/insert_product.php';
            }
                break;

        case'listUsers':
            $users= $userController->listUsers();
            include './views/list_users.php';
            break;

        case 'searchUserByName':
            $users= $userController->UsersByName();
            include './views/list_user_By_Name_Form.php';
            break;   
            
        case 'searchProducts':
            $products= $userController->getProducts();
            include './views/list_Products.php';
            break;

        case 'searchProductByName':
            $products= $userController->productsByName();
            include './views/list_Product_By_Name.php';
            break;

        case 'insertTipoD':
            if($_SERVER["REQUEST_METHOD"]== "POST"){
                $userController->insertTipoD();
            }else {
                include './views/insert_TipoD.php';
            }
                break;

        case 'insertTipoP':
            if($_SERVER["REQUEST_METHOD"]== "POST"){
                $userController->insertTipoP();
            }else {
                        include './views/insert_TipoP.php';
            }
            break;
            
        case 'insertCompra':
            if($_SERVER['REQUEST_METHOD']=="POST"){
                $userController->insertCompra();
            }else{
                include './views/insertCompra.php';
            }
            break;
        case 'openForm':
            $users=$userController->listUsers();
            $buscado=$userController->getUserByNumD();
            include './views/list_user_By_Num_Docum.php';
            break;

        default:
            include_once('views/dashboard.php');
            break;
    }

?>