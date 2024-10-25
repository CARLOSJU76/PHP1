<?php

    if(isset($_POST['enviar'])){
        $opcion= $_POST['opcion'];

      if($opcion === "1"){
        echo "<form method='post'>";
        echo "<input type='text' name='placa' placeholder='Digite la placa'> <br>";
        echo "<input type='text' name='marca' placeholder='marca del vehículo'> <br>";
        echo "<input type= 'submit' name='consultarv' value='consultar'>";
        echo "</form>";
      }elseif($opcion=== "2"){
        echo "<form method='post'>";
        echo "<input type='text' name='placa' placeholder='Digite la placa'> <br>";
        echo "<input type='text' name='marca' placeholder='marca del vehículo'> <br>";
        echo "<input type='text' name= 'combustible' placeholder= 'Capacidad combustible'><br>";
        echo "<input type= 'submit' name='consultara' value='consultar'>";
        echo "</form>";

      }elseif($opcion==="3"){
        echo "<form method='post'>";
        echo "<input type='text' name='placa' placeholder='Digite la placa'> <br>";
        echo "<input type='text' name='marca' placeholder='marca del vehículo'> <br>";
        echo "<input type='text' name= 'combustible' placeholder= 'Capacidad combustible'><br>";
        echo "<input type='text' name= 'carga' placeholder= 'Carga'><br>";
        echo "<input type= 'submit' name='consultarh' value='consultar'>";
        echo "</form>";
      }elseif($opcion === "4"){
        echo "<form method='post'>";
        echo "<input type='text' name='placa' placeholder='Digite la placa'> <br>";
        echo "<input type='text' name='marca' placeholder='marca del vehículo'> <br>";
        echo '<select name="tipo_chasis" required>
                <option value= "">Selecciona chasis de Motocicleta</option>
                <option value="Enduro">Enduro</option>
                <option value="Sport">Sport</option>
                <option value="Scooter">Scooter</option>                
            </select><br>';
        echo "<input type= 'submit' name='consultarm' value='consultar'>";
        echo "</form>";
      }else{
        echo "<form method='post'>";
        echo "<input type='text' name='placa' placeholder='Digite la placa'> <br>";
        echo "<input type='text' name='marca' placeholder='marca del vehículo'> <br>";
        echo '<select name="tipo_chasis" required>
        <option value= "">Selecciona tipo de chasis</option>
        <option value="Enduro">Enduro</option>
        <option value="Sport">Sport</option>
        <option value="Scooter">Scooter</option>                
    </select><br>';
        echo '<select name="tipo_bateria" required>
                <option value= "">Selecciona tipo de batería</option>
                <option value="Iones de Litio">Iones de Litio</option>
                <option value="Polimeros de Litio">Polimeros de Litio</option>
                <option value="Ácido de Plomo">Ácido de Plomo</option> 
                <option value="Níquel Metar Hidruro">Niquel -Metal Hidruro</option>   
                <option value="Estado Sólido">Estado Sólido</option>                  
            </select><br>';
        echo "<input type= 'submit' name='consultarmE' value='consultar'>";
        echo "</form>";
      }
    }
    if(isset($_POST['consultarv'])){
      $placa=$_POST['placa'];
      $marca=$_POST['marca'];
      include_once('Vehiculo.php');
      $vehi1= new Vehiculo($placa, $marca);
      $vehi1->mostrar();
      echo"<button><a href='index.php' style='text-decoration: none;' >Volver</a></button>";
    }
    if(isset($_POST['consultara'])){
      $placa=$_POST['placa'];
      $marca=$_POST['marca'];
      $combustible=$_POST['combustible'];
      include_once('Automovil.php');
      $auto1= new Automovil($placa, $marca, $combustible);
      $auto1->mostrar();
      
      echo"<button><a href='index.php' style='text-decoration: none;' >Volver</a></button>";
    }
    if(isset($_POST['consultarh'])){
      $placa=$_POST['placa'];
      $marca=$_POST['marca'];
      $combustible=$_POST['combustible'];
      $carga= $_POST['carga'];
      include_once('Hibrido.php');
      $hibri1= new Hibrido($placa, $marca, $combustible, $carga);
      $hibri1->mostrar();
      
      echo"<button><a href='index.php' style='text-decoration: none;' >Volver</a></button>";
    }
    if(isset($_POST['consultarm'])){
      $placa=$_POST['placa'];
      $marca=$_POST['marca'];
      $chasis=$_POST['tipo_chasis'];
      include_once('Moto.php');
      $mot1= new Moto($placa, $marca, $chasis);
      $mot1->mostrar();
      
      echo"<button><a href='index.php' style='text-decoration: none;' >Volver</a></button>";
    }
    if(isset($_POST['consultarmE'])){
      $placa=$_POST['placa'];
      $marca=$_POST['marca'];
      $chasis=$_POST['tipo_chasis'];
      $bateria=$_POST['tipo_bateria'];
      include_once('MotoElectrica.php');
      $mot1= new MotoElectrica($placa, $marca, $chasis, $bateria);
      $mot1->mostrar();
      
      echo"<button><a href='index.php' style='text-decoration: none;' >Volver</a></button>";
    }

?>