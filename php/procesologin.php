<?php
if(isset($_POST['login'])){
    
  
    
    if (($nombre == "fcytuader") && ($password=="asd")){
        header("Location:./home.php"); /*el header sirve para referenciar*/

    }else {echo'<e id="f1" class="bienvenida"> No maquina, le erraste</e>';}

}







?>