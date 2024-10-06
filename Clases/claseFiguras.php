<?php
    class FigurasG{

        public function __construct(
            private $base,
            private $altura,
            private $area
        ){}
            function setBase($base){
                $this->base = $base;
            }
            function getBase(){
                return $this->base;
            }
            function setAltura($altura){
                $this->altura = $altura;
            }
            function getAltura(){
                return $this->altura;
            }
            function setArea($area){
                $this->area = $area;
            }
            function getArea(){
                return $this->area;
            }

    }

?>