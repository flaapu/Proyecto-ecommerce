<?php
class Usuario{
    
    private $username;
    private $password;
    private $correoelectronico;
    private $mysqli;

    //constructor y conexion
    public function __construct()
    {   
        $this->mysqli = new mysqli('localhost', 'user_normal', 'unormal1', 'candyshopbdd');

        $conec = $this->mysqli;
        //error
        if ($conec ->connect_errno){
            echo "Error al conectar con la base de datos";
            exit();
        }
    }
    
        //setters
        public function setUsuario($username){
            if(ctype_alnum($username)==true){
                $this->username = $username;
            }
            else{ echo "<script>
                alert('ERROR EL USUARIO NO ES VALIDO');
                window.location='../registrarse.php'    
                </script>";}
        }

        public function setPassword($password){
            if(ctype_alnum($password)==true){
                $this->password = $password;
            }
            else{ echo "<script>
            alert('ERROR LA PASSWORD NO ES VALIDA');
            window.location='../registrarse.php'    
            </script>";}
        }
        public function setEmail($correoelectronico){
            if (filter_var($correoelectronico, FILTER_VALIDATE_EMAIL)) {
                $this->correoelectronico = $correoelectronico;
            }
        }
    //vector vector aca lo llamo pa logearme
        public function toArray()
        {  
            $vUsuario = array(
                'usuario' => $this->username,
                'contraseña' => $this->password,
                'email' => $this->correoelectronico,
            );

            return $vUsuario;
        }

        //guardando
        public function save ()
        {   $conn = new mysqli('localhost', 'user_modify', 'umodify1', 'candyshopbdd');
            $sql = "INSERT INTO usuarios(username, clave, correoelectronico) VALUES ('$this->username','$this->password','$this->correoelectronico')";
            $comprobarconexion = mysqli_query($conn,$sql);
                if($comprobarconexion)
                { echo "<script>
                    alert('Te registraste masterrr');
                    window.location='../index.php'    
                    </script>";}
                else{
                    echo "<script>
                    alert('Che salio un error al guardar tu usuario, proba de nuevo');
                    window.location='../registrarse.php'    
                    </script>";
                }
        }
        //comprobando el login
        public function login($username, $password)
        {   
            $sql = "SELECT clave from usuarios WHERE username='$username'";
            $resultado = $this->mysqli->query($sql);
            $row = mysqli_fetch_row($resultado);
            if($row['0'] == $password)
            { 
                $_SESSION['user'] = $username;
                echo "
                <script>
                alert('Iniciaste sesion correctamente');
                window.location='../inicio.php'    
                </script>";
                }
            else{
                echo "
                <script>
                alert('Mmmm clave o usuario incorrecto');
                window.location='../iniciarsesion.php'    
                </script>";
            }
        }
    //estas 2 funciones no las llamo a ningun lado
    /*
    public function update($usuarios){
        $conn = new mysqli('localhost', 'user_modify', 'umodify1', 'candyshopbdd');
        $sql="UPDATE usuarios SET usuario='$this->username', contraseña ='$this->password', email='$this->correoelectronico' WHERE usuario = $usuarios";
        $conn->query($sql);
        echo "Se ejecuta: <br>";
        echo $sql;
    }

    public function delete($idusuarios)
    {   $conn = new mysqli('localhost', 'user_delete', 'umdelete1', 'candyshopbdd');
        $sql = "DELETE FROM usuarios WHERE idusuarios = $idusuarios";
        $conn->query($sql);
        echo "Se ejecuta: <br>";
        echo $sql;
    }*/

}

?>