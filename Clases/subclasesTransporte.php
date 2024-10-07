<?php   
    include_once("claseTransporte.php");

    class Coche extends Transporte{

        private $placa;
        private $num_puertas;

        public function __construct($marca,$modelo, $placa, $num_puertas){

            parent::__construct($marca,$modelo) ;
            $this->placa = $placa;
            $this->num_puertas = $num_puertas;
            $this->getMarca();
            $this->getModelo();
       }
       public function setPlaca($placa){
        $this->placa = $placa;
       }
       public function getPlaca(){
        return $this->placa;

    }
    public function setNum_puertas($num_puertas){
        $this->num_puertas = $num_puertas;
    }
    public function getNum_puertas(){
        return $this->num_puertas;
    }
    public function mostrarCoche(){
        echo"Los datos del vehículo son: <br>
            Marca:" .$this->getMarca() . "<br>
            Modelo:" .$this->getModelo() ."<br>
            Placa:" .$this->placa ."<br>
            Número de Puertas:" .$this->num_puertas ."<br><br><br>.";
    }
    
}
$coche1=new Coche("Mazda", 2018, "HQX330", 4);
$coche1->mostrarCoche(); 

enum Chasis{
    case ENDURO;
    case SPORT;
    case SCOOTER;
}

class Motocicleta extends Transporte{
    private $placa;
    private Chasis $tipo_chasis;

    public function __construct($marca, $modelo, $placa, Chasis $tipo_chasis){
        parent::__construct($marca, $modelo);
        $this->placa = $placa;
        $this->tipo_chasis=$tipo_chasis;
    }
    public function setPlaca($placa){
        $this->placa =$placa;
    }
    public function getPlaca(){
        return $this->placa;
    }
    public function setChasis($tipo_chasis){
        return $this->tipo_chasis=$tipo_chasis;
    }
    public function getChasis(){
        return $this->tipo_chasis;
    }
    public function mostrarMotocicleta(){
        echo "La Motocicleta tiene las siguientes características: <br>".
            "Marca: ". $this->getMarca() ."<br>".
            "Modelo: ".$this->getModelo()."<br>".
            "Placa: ". $this->placa."<br>".
            "Tipo de chasis: ".$this->tipo_chasis->name ."<br><br><br>";
    }
}

$motocicleta1=new Motocicleta("Yamaha", 2024, "NFR84A", Chasis::ENDURO);
$motocicleta1->mostrarMotocicleta();


?>

