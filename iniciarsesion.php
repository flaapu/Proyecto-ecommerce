<?php if(!isset($_SESSION)){session_start(); } ?>
<!doctype html>

<html lang = "es" dir = "ltr">
    <head>
        <meta charset="utf-8">
        <title>Formulario de Login</title>
        <link rel="stylesheet" href="css/estilo.css">
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.2.js" integrity="sha256-VUCyr0ZXB5VhBibo2DkTVhdspjmxUgxDGaLQx7qb7xY=" crossorigin="anonymous"></script>
        <script type="text/javascript">
            $(function(){
                $('#btn_recargar').click(function(){
                    document.location.reload();
                    return false;
                });
            });
        </script>
        <!-- Google font -->
        <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
        
        </head>
    
    <body>
     <form action="php/procesologin.php" method="post">
        <?php require_once 'include/header.php';?>

        <section class="form-login">
            <h5>Formulario de Login</h5>
            <table>
                <tr>
                    <input class="controls" type="text" name="usuario" value="" placeholder="Usuario" required>
                </tr>
                <tr>
                    <input class="controls" type="password" name="contraseña" value="" placeholder="Contraseña" required>
                </tr>
                <tr>
                    <td><img src="./include/captcha.php"></td>
                </tr>    
                <tr>
                    <td><input type="text" name="captcha_dato"></td> 
                    <td><button id="btn_recargar">Recargar captcha</td>
                </tr>

        
                <tr>
                    <td><input class="buttons" type="submit" name="login" value="Ingresar"> </td>
                </tr>
            </table>

            <hr>
            <p><a href="forgotpw.php">¿Olvidaste tu contraseña?</a></p>

            <?php
            
                if(isset($_POST['login'])){
                    
                    $nombre = $_POST['usuario'];
                    $password = $_POST['contraseña'];
                    $captcha = $_POST['captcha_dato'];
                    include("php/procesologin.php");
                }
                
                if(!isset($_SESSION) && (array_key_exists("error",$_SESSION))){
                    echo $_SESSION['error'];
                }
        ?>

        </section>

     </form>
        <?php require_once 'include/footer.php';?>
    </body>
    
    
    </html>
