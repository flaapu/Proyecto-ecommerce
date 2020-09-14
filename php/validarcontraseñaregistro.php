<?php
if(isset($_POST['login'])){
    
  
    
    if ($user == "fcytuader")
        {
            echo'Usuario en uso, por favor elija otro';
        }else if ($password == $password2){
            header("Location:./home.php"); 
        }else {echo'Las contraseñas no coinciden';}

    

}

?>