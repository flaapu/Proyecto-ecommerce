<?php

/*CONEXION CON SQL
    session_start();
    $nombre = $_POST['usuario'];
    $clave = $_POST['contraseña'];

    //conectar a la base de datos
    $conexion = mysqli_connect("localhost", "root", "", "bddcandyshop");
    $consulta="SELECT *FROM usuario WHERE usuario='$usuario' and clave='$clave'";

    $resultado = mysqli_query($conexion, $consulta);
    $filas = mysqli_num_rows($resultado);

    if($filas>0){
        header("Location:../hombre.php");
    }
        else{
            echo "Error en la autentificación";
        }
    
    mysqli_free_result($resultado);
    mysqli_close($conexion);


FIN CONEXION CON SQL*/
/* SESSIONES */
if(!isset($_SESSION)){
    session_start();
}

$_SESSION['usuario'] = 'fcytuader';
$_SESSION['contraseña'] = 'asd';
if(isset($_POST['login']))
{
    if (!empty($_POST['captcha_dato']))
    {   
        if($_SESSION['rand_code'] == $_POST['captcha_dato'])
        {
                if ($_SESSION['usuario'] == $_POST['usuario'] && $_SESSION['contraseña'] == $_POST['contraseña'])
                {
                        header("Location:../home.php");
                }else {
                        header("Location:../iniciarsesion.php");
                        $_SESSION['error'] = '<e id="f1" class="bienvenida"> Nono, le erraste</e>';}
        }
    }
}

                    

   
   /*
    if(!isset($_SESSION)){
        session_start();
    }
    if(isset($_POST['login']))
    {
        if (!empty($_POST['captcha_dato']))
        {   
            if($_SESSION['rand_code'] == $_POST['captcha_dato'])
            {
                    if (($_POST['usuario'] == "fcytuader") && ($_POST['contraseña'] == "asd"))
                    {
                        header("Location:../home.php"); el header sirve para referenciar
                        
                        
                    }else {
                        header("Location:../iniciarsesion.php");
                        $_SESSION['error'] = '<e id="f1" class="bienvenida"> Nono, le erraste</e>';}
                
            }else{ 
                header("Location:../home.php");
                $_SESSION['error'] = '<e id="f1" class="bienvenida">Pusiste mal el captcha, crack</e>';}
        }
    }
    */
?>