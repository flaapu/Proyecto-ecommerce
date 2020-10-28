<?php
if(isset($_POST['enviar'])){
    
    if (filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        echo "Se ha enviado un correo a ($correo) para la recuperación de contraseña.";
    }
    else echo "Esa dirección de correo electrónico no existe en nuestra base de datos";
}



?>