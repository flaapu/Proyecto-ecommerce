<?php
if(isset($_POST['login'])){
    
  
    
    if (($nombre == "fcytuader") && ($password=="programacionavanzada")){
        header("Location:./home.php"); /*el header sirve para referenciar*/

    }else {echo'<e id="f1" class="bienvenida"> Nono, le erraste</e>';}

}







?>