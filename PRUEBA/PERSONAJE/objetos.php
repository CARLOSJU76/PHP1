<?php
    if(isset($_POST['personaje'])){
       
        $personaje=$_POST['op_personaje'];
        if($personaje==="1"){
            
            echo"Es un Mago: <br>";

            echo"<form  method='post'>
            <input type='text' name='nombre' placeholder='Nombre del personaje'><br>
            <input type='text' name='fecha' placeholder='Fecha de nacimiento'> <br>
            <div>Elije un Poder:</div>
            <select name='poder'>
                <option value='La Adivinación'>La Adivinación</option>
                <option value='Desaparecer Cosas'>Desaparecer Cosas</option>
                <option value='Viajar en el Tiempo'>Viajar en el tiempo</option>
                <option value='REvivir Muertos'>Revivir Muertos</option><br>
            </select>  
            <div>Elije un Elemento: </div>  
            <select name='elemento'>
                <option value='Fuego'>Fuego</option>
                <option value='Tierra'>Tierra</option>
                <option value='Aire'>Aire</option>
                <option value='Agua'>Agua</option>
            </select><br>
            <input type='submit' name='enviarM' placeholder='Enviar'>
        </form> ";        

        }else{
            include_once('Guerrero.php');
            echo"Es un Guerrero <br>";
            echo"<form  method='post'>
            <input type='text' name='nombre' placeholder='Nombre del personaje'><br>
            <input type='text' name='fecha' placeholder='Fecha de nacimiento'> <br>
            <div>Elije un arma: </div><br>
            <select name='arma'>
                <option value='La Catana'>La Catana</option>
                <option value='La Ballesta'>La Ballesta </option>
                <option value='Los Chacos'>Los Chacos</option>
                <option value='La Lanza '>La Lanza Hoplita</option>
            </select> <br>
            <input type='submit' name='enviarG' placeholder='Enviar'> 
            </form>";
        }
        
    }
    if(isset($_POST['enviarM'])){
        $nombre=$_POST['nombre'];
        $fecha=$_POST['fecha'];
        $poder=$_POST['poder'];
        $elemento=$_POST['elemento'];

        include_once('Mago.php');

       $mago1=new Mago($nombre,$fecha,$poder,$elemento);
       $mago1->mostrarPersonaje();
       echo"<a href='FormPersonaje.html'>Volver</a>";
    }

    if(isset($_POST['enviarG'])){
        $nombre=$_POST['nombre'];
        $fecha=$_POST['fecha'];
        $arma=$_POST['arma'];
        

        include_once('Guerrero.php');

       $guerr1=new Guerrero($nombre,$fecha,$arma);
       $guerr1->mostrarPersonaje();
       echo"<a href='FormPersonaje.html'>Volver</a>";
    }
?>