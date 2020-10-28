<?php
/* SESSIONES */
session_start();

//registrando usuario
if(isset($_POST['registro'])){
    $user = $_POST['usrname'];
    $password = hash('sha256', $_POST['psw']);
    $passwordrepeat = hash('sha256', $_POST['psw-repeat']);
    $correo = $_POST['email'];
    require_once('../modelos/validacionbdd.php');
    $oUsuario = new Usuario();
    
    if(!empty($user))
    {
        if(!empty($password)&&(!empty($passwordrepeat)))
        {
            if($password == $passwordrepeat)
            {
                if(!empty($correo)){
                    $oUsuario->setUsuario($user);
                    $oUsuario->setPassword($password);
                    $oUsuario->setEmail($correo);
                    $oUsuario->save(); //compruebo las contraseñas si son iguales, guardo los datos y sino, me tira una alerta.
                    
                }else{
                    echo "Ingresa un correo, por favor";
                }
            }
            else{
                echo "<script>alert('contraseñas no coinciden')
                        window.location='../registrarse.php';</script>";
            }
        }
        else{
            echo "Ingresa una contraseña, por favor";
        }  
    }else{
        echo "Ingresa un usuario, por favor";
    }  
}

//logear el usuario
if(isset($_POST['login']))
{
    $usuario = $_POST['usuario'];
    $password = hash('sha256',$_POST['contraseña']);
    $captcha = $_POST['captcha_dato'];

    if (!empty($captcha))
    {   
        if($_SESSION['rand_code'] == $captcha)
        { 
                    require_once('../modelos/validacionbdd.php');
                    $oUsuario = new Usuario;
                    $oUsuario->login($usuario, $password);
                    //$_SESSION['pass'] = $password;
                        
        }else{
            echo "<script>
                    alert('Captcha Incorrecto')
                    window.location= '../iniciarsesion.php'
                 </script>";
        }
    }else {
            echo "<script>
                    alert('Ingrese el captcha para continuar')
                    window.location= '../iniciarsesion.php'
                </script>";
    }
}
?>