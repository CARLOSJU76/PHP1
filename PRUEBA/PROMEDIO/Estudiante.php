<?php
    class Estudiante{
        private $nombre;

        private $notas;

        public function __construct($nombre){
            $this->nombre= $nombre;
            $this->notas= array();
        }
        public function setNombre($nombre){
            $this->nombre=$nombre;
        }
        public function getNombre(){
            return $this->nombre;
        }
        public function agregarNota($nota){
            $this->notas[]= $nota;
        }
        public function getNotas(){
            return $this->notas;
        }

        public function Promedio(){
            if(count($this->notas)===0){
                return 0;
            }else{
                $suma= array_sum($this->notas);
                $promedio= $suma/ count($this->notas);
                return $promedio;
            }            
        }
        public function mostrarPromedio(){
            echo"El promedio del Estudiante ". $this->nombre. " es de : " .$this->Promedio();
        }
    }
    /*$e=new Estudiante("Fernando");
    $e->agregarNota(4);
    $e->agregarNota(5);
    $e->agregarNota(3.5);
    $e->mostrarPromedio();
    print_r($e->getNotas());
    */
    
    
?>