<?php

    class Persona{
        private $nom;
        private $edad;
        private $cedula;
    
        public function __construct($nom,$edad, $cedula){
            $this->nom=$nom;
            $this->edad=$edad;
            $this->cedula= $cedula;
        }    
       /* public function __construct(
            private $nom,
            private $edad
        ){}
        */
        function getNom(){
            return $this->nom;
        }
        function setNom($nom){
            return $this->nom=$nom;
        }
        function getEd(){
            return $this->edad;
        }
        function setEd($edad){
            return $this->edad=$edad;
        }
        function setCed($cedula){
            return $this->cedula=$cedula;
        }
        function getCed(){
            return $this->cedula;
        }
        function mostrar(){
            echo 'El nombre es: '. $this->nom .'<br>'.'La edad es: ' .$this->edad . 'Cédula: ' .$this->cedula;
        }

    }
   /* $objeto= new Persona('PedroPablo', 36);
    echo 'El nombre de la persona es: '. $objeto->getNom().'<br>';
    $persona1= new Persona('Domitila', 25);
    echo 'La edad de la persona es: '. $objeto->getEd() .'<br>';
    $persona2= new Persona('Abraham', 44);
    echo $persona2->mostrar().'<br>';
    */
?>