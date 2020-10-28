<!doctype html>
<html lang = "es" dir = "ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/estilo.css">
        <title>Registrate con toda la onda</title>
    </head>

    <body>

        <form name="registro" method="post" action="php/procesologin.php">
            <?php require 'include/header.php';?>
                <section class="form-login2">
                        <div class="centrando">
                            <h1>Registro</h1>
                            <p>Por favor, ingresa todos los valores requeridos en los campos.</p>
                            <hr>
                            <li>
                            <label for="namereg"><b>Usuario</b></label>
                            <input type="text" class="celda" placeholder="Ingresa usuario" name="usrname" id="user" >
                            </li>
                            <br>
                            <li>
                            <label for="email"><b>Email</b></label>
                            <input type="text" class="celda" placeholder="Ingresa Email" name="email" id="email" >
                            </li>
                            <br>
                            <li>
                            <label for="psw"><b>Password</b></label>
                            <input type="password" class="celda" placeholder="Ingresa password" name="psw" id="psw" >
                            </li>
                            <br>
                            <li>
                            <label for="psw-repeat"><b>Repetir password</b></label>
                            <input type="password" class="celda" placeholder="Ingresa de nuevo la password" name="psw-repeat" id="psw-repeat" >
                            </li>
                            <hr>
                            <!--<li>   
                            <img src="./include/captcha.php"><input type="text" class="celda" name="captcha_dato"><button id="btn_recargar2">Recargar captcha </button>
                            </li>-->
                            <br>
                            <div class="centrandoder">
                            <p>Si aceptas crear una cuenta, quiere decir que aceptas los <a href="terminosycondiciones.php">Terminos y condiciones</a> de nuestro sitio.</p>
                            <li>
                            <button type="submit" class="buttons2" name="registro">Registrarse</button>
                            </li>
                        </div>

                        <div class="centrandoder">
                            <p>Ya tenes una cuenta?<a href="iniciarsesion.php"> Iniciar sesion</a>.</p>
                        </div>

                            <?php             
                            //boton de registro, mando todos los datos a procesologin.php            
                                if(isset($_POST['registro'])){
                                        include("php/procesologin.php");
                                }
                            ?>

                </section>
            
        </form>    
        <?php require_once 'include/footer.php'; ?>
        </body>
</html> 