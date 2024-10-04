<?php
   enum Perfil{
      case NUEVO;
      case FRECUENTE;
      case LEAL;
   }


   include_once('clases.php');
   
   class Cliente extends Persona{
      private $codigo_cliente;
      private Perfil $perfil;

   public function __construct( $nom, $edad, $cedula, $codigo_cliente,  Perfil $perfil) {     

      parent:: __construct($nom, $edad,$cedula);
        $this->codigo_cliente = $codigo_cliente;
        $this->perfil=$perfil;
   }

   function mostrar(){
      echo 'El nombre es: '. $this->getNom().'<br>'
      .'La edad es: ' .$this->getEd().'<br>'
      .'Cedula: '.$this->getCed().'<br>'
      .'El codigo de cliente es: '. $this->codigo_cliente.'<br>'
      ."Perfil del cliente: ". $this->perfil->name;
  }

   }

   $cli1= new Cliente('Pedro', 32, 92334445, 1000001, Perfil::FRECUENTE);
   echo $cli1->mostrar();
?>

