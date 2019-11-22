<?php

    $correo = $_POST["email"];
    $contraseña = $_POST["contraseña"];
    $confirmaContraseña = $_POST["confirmaContraseña"];

    if($contraseña===$confirmaContraseña){
        echo "Datos procesados correctamente";
    }else{
        echo "<p style='color:red'>Error en el formulario. Inténtelo de nuevo.<p><br>";
        echo "<input type='submit' value='Volver' onclick='history.back()'>";
    }



?>