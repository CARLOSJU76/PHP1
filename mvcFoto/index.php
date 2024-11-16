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
            $tipoD= $userController->insertTipoD();
            include './views/insert_TipoD.php';
            break;
        
        default:
            include_once('views/dashboard.php');
            break;
    }

?>