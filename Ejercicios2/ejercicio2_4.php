<?php
        $textos=["texto1", "texto2","texto3","texto4"];

    for ($i=0; $i<=3; $i++){

        echo "<form><label for='$textos[$i]'>Label $i</label>
        <input type='text' id='$textos[$i]' placeholder='dato $i'></form>";
        echo "<br><br>";


    }


?>