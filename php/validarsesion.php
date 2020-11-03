<?php
    session_start(); 
        /*error_reporting(0); // una vez que termino el proyecto, activarlo.
        if(isset($_SESSION['user'])){
            include("barra.php");

        }else{
            include("barradeslogueado.php");
        }
        */
        error_reporting(0); // una vez que termino el proyecto, activarlo.
        $_SESSION['sesioniniciada'] = '0';


        if(isset($_SESSION['user'])){
            $_SESSION['sesioniniciada'] = $_SESSION['user'];
            include("barra.php");

        }else{
            $url = $_SERVER["REQUEST_URI"];
            $urlinvalida = [
                1 => "inicio.php",
                2 => "configuracion.php",
                3 => "php/deslogear.php",
            ];
            foreach ($urlinvalida as $invalida){
                if (strpos($url, $invalida) !== false){
                    echo "<script>
                    alert('Usted NO tiene autorización, váyase de aquí')
                    window.location= 'iniciarsesion.php'
                  </script>";

                }
            }

            include("barra.php");
        }
        
        
?>
