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
        case 'openForm':
            $autos=$userController->getAutoByPlaca(); 
            include './views/get_Car_By_Placa.php';
            break;
        
        case 'updateVehi':
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $userController->updateCar();
                $autos=$userController->getAutoByPlaca();
            }else{
                $carData=$userController->getAutoByPlaca();
                include './views/update_Car.php';
            }break;
         
        case 'deleteCar':
                $autos= $userController->getAutoByPlaca();
                        $userController->deleteCar();
                include './views/delete_Car.php';
                break;  

        

        

        default:
        include_once('views/dashboard.php');
        break;
    }

?>