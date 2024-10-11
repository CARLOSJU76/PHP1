<?php
    class Transporte{
 
        public function __construct(
            private $marca,
            private $modelo
        ){}


        public function setMarca($marca){
            $this->marca = $marca;
        }
        public function setmodelo($modelo){
            $this->modelo = $modelo;
        }
        public function getMarca(){
            return $this->marca;
        }
        public function getModelo():string{
            return $this->modelo;
        }
        public function mostrarVehiculo(){
            echo "El vehículo es de marca: $this->marca , y su modelo es: $this->modelo <br><br><br>";
        }
    }
    
    $vehiculo1= new Transporte("Toyota", 2020) ;
    $vehiculo1->mostrarVehiculo();

    enum 
    d{
        case CARRRERAS;
        case TODOTERRENO;
        case BMX;
    }

class Bicicleta extends Transporte{
    private Modalidad  $modalidad;
    public function __construct($marca, $modelo, $modalidad){
        parent::__construct($marca, $modelo);
        $this->modalidad = $modalidad;
    }
    public function setModalidad($modalidad){
        $this->modalidad = $modalidad;
    }
    public function getModalidad(){
        return $this->modalidad;
    }
    public function mostrarBicicleta(){
        echo "Las características de la bicicleta son: <br>".
              "Marca: ". $this->getMarca()."<br>".
              "Modelo: ". $this->getModelo()."<br>".
              "Modalidad: ".$this->modalidad->name."<br><br><br>";
    }
}
$bicicleta1= new Bicicleta("Acme",2020, Modalidad::CARRRERAS) ;
$bicicleta1->mostrarBicicleta();

?>