<?php

    include_once('Personaje.php');
    class Guerrero extends Personaje{
        private $arma;

            public function __construct($nombre, $birthday, $arma){
                parent:: __construct($nombre, $birthday);
                $this->arma= $arma;
            }
            public function setArma($arma){
                $this->arma= $arma;
            }
            public function getArma(){
                return $this->arma;
            }
            public function mostrarPersonaje(){
                echo "El  Guerrero ".$this->getNombre(). ": <br>".
                " Nació : el " .$this->getBirthday().". <br>".
                " Su arma : ".$this->arma."<br><br>";            
            }

    }
   //$guerr= new Guerrero("Saybor", "1o. de febrero de 2000", "La Catana");
    //$guerr->mostrarPersonaje();
?>