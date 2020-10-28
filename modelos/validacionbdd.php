<?php
class Usuario{
    
    private $username;
    private $password;
    private $correoelectronico;
    private $mysqli;

    //constructor y conexion
    public function __construct()
    {   
        $this->mysqli = new mysqli('localhost', 'root', '', 'candyshopbdd');

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
        {
            $sql = "INSERT INTO usuarios(username, clave, correoelectronico) VALUES ('$this->username','$this->password','$this->correoelectronico')";
            $comprobarconexion = $this->mysqli->query($sql);
                if($comprobarconexion)
                { echo "<script>
                    alert('Te registraste masterrr');
                    window.location='../index.php'    
                    </script>";}
                else{
                    echo "<script>
                    alert('Che salio un error, proba de nuevo');
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


                   /*$sql = "SELECT * from usuarios WHERE username like '$username' and clave like '$password'";
            //NO FUNCA
            $resultado = $this->mysqli->query($sql);
            if($resultado)
            { echo "<script>
                alert('Iniciaste sesion correctamente');
                window.location='../inicio.php'    
                </script>";}
            else{
                echo "<script>
                    alert('Mmmm clave o usuario incorrecto');
                    window.location='../iniciarsesion.php'    
                    </script>";
            }*/
/*
    public function update($usuarios){
        $sql="UPDATE usuarios SET usuario='$this->username', contraseña ='$this->password', email='$this->correoelectronico' WHERE usuario = $username";
        $this->mysqli->query($sql);
        echo "Se ejecuta: <br>";
        echo $sql;
    }

    public function delete($idusuarios)
    {
        $sql = "DELETE FROM usuarios WHERE idusuarios = $idusuarios";
        this->mysqli->query($sql);
        echo "Se ejecuta: <br>";
        echo $sql;
    }
*/
//mysqli_close();
}


// ARRANCO CON LOS PRODUCTOS
/*Class Productos{


    //hago la conexion
    public function __construct(){
        $con = new mysqli('localhost','root','', 'candyshopbdd');

        //error
        if ($con ->connect_errno){
            echo "Error al conectar con la base de datos";
            exit();
        }
    }


    public function mostrarproducto(){
        $respuesta = new stdClass();
        //array
        $datos=[];
        $i=0;
        $sql = "SELECT * from productos WHERE stock>=1";
        $resultado = mysqli_query($con, $sql);
        //recorro todo el array buscando mi consulta
        while($row = mysqli_fetch_array($resultado)){
            $oProducto = new stdClass();
            $oProducto->codigo_producto = $row['codigo_producto'];
            $oProducto->nombre_producto = $row['nombre_producto'];
            $oProducto->descripcion_producto = $row['descripcion_producto'];
            $oProducto->stock = $row['stock'];
            $oProducto->precio = $row['precio'];
            $oProducto->imagen = $row['imagen'];

            $datos[$i]= $oProducto;
            $i++;
        }
        $respuesta->datos=$datos;

        mysqli_close($con);
        header('Content-Type: application/json');
        echo json_encode($respuesta);
        
    }


}
     */

?>