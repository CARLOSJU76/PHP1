<?php
include_once('Vehiculo.php');
include_once('Automovil.php');
include_once('Hibrido.php');
include_once('Moto.php');
include_once('MotoElectrica.php');

$vehiculo1= new Vehiculo('XXX012', "Toyota");
$vehiculo1->mostrar();

$automovil1= new Automovil('RRR987', "Mazda", 100000);
$automovil1->mostrar();

$hibrido1= new Hibrido('ABC456', "TESLA", 70000, 80);
$hibrido1->mostrar();

$moto1= new Moto("NFR84A", "Suzuki", "Enduro");
$moto1->mostrar();

$motoElectrica1= new MotoElectrica("TGU453", "Yamaha", "Sport", "Estado Sólido");
$motoElectrica1->mostrar();
?>