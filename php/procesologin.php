<?php
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
                        header("Location:../home.php"); /*el header sirve para referenciar*/
                        
                    }else {
                        header("Location:../iniciarsesion.php");
                        $_SESSION['error'] = '<e id="f1" class="bienvenida"> Nono, le erraste</e>';}
                
            }else{ 
                header("Location:../home.php");
                $_SESSION['error'] = '<e id="f1" class="bienvenida">Pusiste mal el captcha, crack</e>';}
        }
    }
?>