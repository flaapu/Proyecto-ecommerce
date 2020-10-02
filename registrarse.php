<!doctype html>
<html lang = "es" dir = "ltr">
    <head>
        <meta charset="utf-8">
        
        <link rel="stylesheet" href="css/estilo.css">
        <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <title>Registrate con toda la onda</title>

    </head>

    <body>
    <form action="<?php echo
        htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
    <?php require 'include/header.php';?>
        <h1 style="background : #f4f1bb"><font size=30>Formulario  de  registro</font></h1>

<section class="form-login2">
        <form style="margin:30px" >
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

                <div class="form-group col-md-3">
                    <img src="./include/captcha.php"><input type="text" class="celda" name="captcha_dato">
                    <br><button id="btn_recargar2">Recargar captcha
                </div>
                <hr>
                <div class="form-group">
                    <div class="mx-auto" style="width: 200px;" style="margin: right;">
                        <div class="centrandoder">
                            <button type="submit" class="buttons2" name="login">Registrarme</button>
                        </div>  

                    </div>
                </div>


              <?php
              if(isset($_POST['login'])){
                  $user = $_POST['inputUser'];
                  $password = $_POST['inputPassword'];
                  $password2 = $_POST['inputPassword2'];
                  $captcha = $_POST['captcha_dato'];
                  include("php/validarcontraseñaregistro.php");
              }
              ?>
        </form>
</section>
        

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>

    <?php require_once 'include/footer.php'; ?>

    </html>
