<!doctype html>

<html lang = "es" dir = "ltr">
    <head>
        <meta charset="utf-8">
        <title>Formulario de Login</title>
        <link rel="stylesheet" href="css/estilo.css">
        <!-- Google font -->
        <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
        </head>
    
    <body>
        <form action="<?php echo
        htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <?php require_once 'include/header.php';?>

        <section class="form-login">
        <h5>Formulario de Login</h5>
        <input class="controls" type="text" name="usuario" value="" placeholder="Usuario" required>
        <input class="controls" type="password" name="contraseña" value="" placeholder="Contraseña" required>
        <input class="buttons" type="submit" name="login" value="Ingresar">

        <p><a href="forgotpw.php">¿Olvidaste tu contraseña?</a></p>

        <?php
        if(isset($_POST['login'])){
            
            $nombre = $_POST['usuario'];
            $password = $_POST['contraseña'];
            include("php/procesologin.php");
        }
        ?>

        </section>

        </form>
        <?php require_once 'include/footer.php';?>
    </body>
    
    
    </html>
