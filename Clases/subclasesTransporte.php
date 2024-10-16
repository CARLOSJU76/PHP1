<?php   
    include_once('claseTransporte.php');
    
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

