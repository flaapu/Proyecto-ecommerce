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

        <div class="container">
            <div class="row">
                <section class="form-login">    

                    <div class="col-6">
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
                    </div>

                </section>

                

                <section class="form-login2">
                    <div class="col-6">
                        <h1 style="background : #f4f1bb"><font size=30>Formulario  de  registro</font></h1>
                            <form style="margin:30px">
                            <br>
                            <br>
                                <div class=centrando>
                                    <div class="form-row">
                                        <br>
                                        <div class="form-group col-md-6">
                                        <label for="inputname">Nombre</label>
                                        <input type="text" class="celda" id="inputname" placeholder="" required>
                                        </div>

                                        <div class="form-group col-md-6">
                                        <label for="inputln">Apellido</label>
                                        <input type="text" class="celda" id="inputln" placeholder="" required>
                                        </div>

                                        <div class="form-group col-md-6">
                                        <label for="inputadress">Direccion</label>
                                        <input type="text" class="celda" id="inputadress" placeholder="" required>
                                        </div>

                                        <div class="form-group col-md-6">
                                        <label for="inputnum">Numero de casa</label>
                                        <input type="number" class="celda" id="inputnum" placeholder="" required>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="inputState">Provincia</label>
                                            <select id="inputState" class="celda2" required>
                                                <option selected>Seleccionar</option>
                                                <option>Buenos Aires</option>
                                                <option>Catamarca</option>
                                                <option>Chaco</option>
                                                <option>Chubut</option>
                                                <option>Cordoba</option>
                                                <option>Corrientes</option>
                                                <option>Entre Rios</option>
                                                <option>Formosa</option>
                                                <option>Jujuy</option>
                                                <option>La Pampa</option>
                                                <option>La Rioja</option>
                                                <option>Mendoza</option>
                                                <option>Misiones</option>
                                                <option>Neuquen</option>
                                                <option>Rio Negro</option>
                                                <option>Salta</option>
                                                <option>San Juan</option>
                                                <option>San Luis</option>
                                                <option>Santa Cruz</option>
                                                <option>Santa Fe</option>
                                                <option>Santiago del Estero</option>
                                                <option>Tierra del fuego</option>
                                                <option>Tucuman</option>
                                            </select>
                                        </div>
                                        
                                        <div class="form-group col-md-6">
                                        <label for="inputCity">Ciudad</label>
                                        <input type="text" class="celda" id="inputCity" required>
                                        </div>

                                        <div class="form-group col-md-2">
                                        <label for="inputZip">Codigo Postal</label>
                                        <input type="number" class="celda" id="inputZip" required>
                                        </div>
                                    </div>
                                    <div class="form-row" >
                                        <div class="form-group col-md-6">
                                        <label for="inputEmail4">Correo electronico</label>
                                        <input type="email" class="celda" id="inputEmail" required>
                                        </div>
                                    </div>
                                    <div class="form-row" >
                                        <div class="form-group col-md-6">
                                        <label for="inputUser">Usuario</label>
                                        <input type="text" class="celda" name="inputUser" required>
                                        </div>

                                        <div class="form-group col-md-6">
                                        <label for="inputPassword">Contraseña</label>
                                        <input type="password" class="celda" name="inputPassword" required>
                                        <label for="inputPassword">Confirmar contraseña</label>
                                        <input type="password" class="celda" name="inputPassword2" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="mx-auto" style="width: 200px;">
                                            <div class="centrandoder">
                                                <div class="form-check">
                                                    <input class="checkin" type="checkbox" id="gridCheck" required>
                                                    <label class="form-check-label" for="gridCheck">
                                                        No soy un bot
                                                    </label>
                                                </div>
                                                <button type="submit" class="buttons2" name="login">Registrarme</button>
                                            </div>  
                                        </div>
                                    </div>


                                    <?php
                                    if(isset($_POST['login'])){
                                        $user = $_POST['inputUser'];
                                        $password = $_POST['inputPassword'];
                                        $password2 = $_POST['inputPassword2'];
                                        include("php/validarcontraseñaregistro.php");
                                    }
                                    ?>
                                </div>
                            </form>
                    </div>
                </section>
            </div>
        </div>
        

        <?php require_once 'include/footer.php';?>


    </form>
</body>





    </html>
